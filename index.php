<?php
# Main wiki script; see design.doc
#
$wgRequestTime = microtime();

if( !ini_get( "register_globals" ) ) {
	# Insecure, but at least it'll run
	import_request_variables( "GPC" );
}

unset( $IP );
ini_set( "allow_url_fopen", 0 ); # For security...
if(!file_exists("LocalSettings.php")) {
	die( "You'll have to <a href='config/index.php'>set the wiki up</a> first!" );
}
include_once( "./LocalSettings.php" );

if( $wgSitename == "MediaWiki" ) {
	die( "You must set the site name in \$wgSitename before installation.\n\n" );
}

# Windows requires ';' as separator, ':' for Unix
$sep = strchr( $include_path = ini_get( "include_path" ), ";" ) ? ";" : ":";
ini_set( "include_path", "$IP$sep$include_path" );

include_once( "Setup.php" );

wfProfileIn( "main-misc-setup" );
OutputPage::setEncodings(); # Not really used yet

# Query string fields
#
global $action, $title, $search, $go, $target, $printable;
global $returnto, $diff, $oldid, $curid;

if( isset( $_SERVER['PATH_INFO'] ) ) {
	$title = substr( $_SERVER['PATH_INFO'], 1 );
} else {
	$title = $_REQUEST['title'];
}

# Placeholders in case of DB error
$wgTitle = Title::newFromText( wfMsg( "badtitle" ) );
$wgArticle = new Article($wgTitle);

$action = strtolower( trim( $action ) );
if ( "" == $action ) { $action = "view"; }
if ( "yes" == $printable ) { $wgOut->setPrintable(); }

if ( "" == $title && "delete" != $action ) {
	$wgTitle = Title::newFromText( wfMsg( "mainpage" ) );
} elseif ( $curid ) {
	# URLs like this are generated by RC, because rc_title isn't always accurate
	$wgTitle = Title::newFromID( $curid );
} else {
	$wgTitle = Title::newFromURL( $title );
}
wfProfileOut( "main-misc-setup" );

if ( "" != $search ) {
	if( isset($_REQUEST['fulltext']) ) {
		wfSearch( $search );
	} else {
		wfGo( $search );
	}
} else if( !$wgTitle or $wgTitle->getInterwiki() != "" or $wgTitle->getDBkey() == "" ) {
	$wgTitle = Title::newFromText( wfMsg( "badtitle" ) );
	$wgOut->errorpage( "badtitle", "badtitletext" );
} else if ( ( $action == "view" ) && $wgTitle->getPrefixedDBKey() != $title ) {
	/* redirect to canonical url, make it a 301 to allow caching */
	$wgOut->redirect( wfLocalUrl( $wgTitle->getPrefixedURL() ), '301');
} else if ( Namespace::getSpecial() == $wgTitle->getNamespace() ) {
	wfSpecialPage();
} else {
	if ( Namespace::getMedia() == $wgTitle->getNamespace() ) {
		$wgTitle = Title::makeTitle( Namespace::getImage(), $wgTitle->getDBkey() );
	}	
	
	switch( $wgTitle->getNamespace() ) {
	case 6:
		include_once( "ImagePage.php" );
		$wgArticle = new ImagePage( $wgTitle );
		break;
	default:
		$wgArticle = new Article( $wgTitle );
	}

	wfQuery("BEGIN", DB_WRITE);
	switch( $action ) {
		case "view":
		case "watch":
		case "unwatch":
		case "delete":
		case "revert":
		case "rollback":
		case "protect":
		case "unprotect":
			$wgArticle->$action();
			break;
		case "print":
			$wgArticle->view();
			break;
		case "edit":
		case "submit":
			if( !$wgCommandLineMode && !isset( $_COOKIE[ini_get("session.name")] ) ) {
				User::SetupSession();
			}
			include_once( "EditPage.php" );
			$editor = new EditPage( $wgArticle );
			$editor->$action();
			break;
		case "history":
			include_once( "PageHistory.php" );
			$history = new PageHistory( $wgArticle );
			$history->history();
			break;
		default:
			$wgOut->errorpage( "nosuchaction", "nosuchactiontext" );
	}
	wfQuery("COMMIT", DB_WRITE);
}

$wgOut->output();
foreach ( $wgDeferredUpdateList as $up ) { $up->doUpdate(); }
logProfilingData();
wfDebug( "Request ended normally\n" );
?>
