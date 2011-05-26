<?php
/**
 * MediaWiki is the to-be base class for this whole project
 *
 * @internal documentation reviewed 15 Mar 2010
 */
class MediaWiki {

	/**
	 * TODO: fold $output, etc, into this
	 * @var RequestContext
	 */
	private $context;

	public function request( WebRequest $x = null ){
		return wfSetVar( $this->context->request, $x );
	}

	public function output( OutputPage $x = null ){
		return wfSetVar( $this->context->output, $x );
	}

	public function __construct( RequestContext $context ){
		$this->context = $context;
		$this->context->setTitle( $this->parseTitle() );
	}

	/**
	 * Parse $request to get the Title object
	 *
	 * @return Title object to be $wgTitle
	 */
	private function parseTitle() {
		global $wgContLang;

		$curid = $this->context->request->getInt( 'curid' );
		$title = $this->context->request->getVal( 'title' );

		if ( $this->context->request->getCheck( 'search' ) ) {
			// Compatibility with old search URLs which didn't use Special:Search
			// Just check for presence here, so blank requests still
			// show the search page when using ugly URLs (bug 8054).
			$ret = SpecialPage::getTitleFor( 'Search' );
		} elseif ( $curid ) {
			// URLs like this are generated by RC, because rc_title isn't always accurate
			$ret = Title::newFromID( $curid );
		} elseif ( $title == '' && $this->getAction() != 'delete' ) {
			$ret = Title::newMainPage();
		} else {
			$ret = Title::newFromURL( $title );
			// check variant links so that interwiki links don't have to worry
			// about the possible different language variants
			if ( count( $wgContLang->getVariants() ) > 1 && !is_null( $ret ) && $ret->getArticleID() == 0 ){
				$wgContLang->findVariantLink( $title, $ret );
			}
		}
		// For non-special titles, check for implicit titles
		if ( is_null( $ret ) || $ret->getNamespace() != NS_SPECIAL ) {
			// We can have urls with just ?diff=,?oldid= or even just ?diff=
			$oldid = $this->context->request->getInt( 'oldid' );
			$oldid = $oldid ? $oldid : $this->context->request->getInt( 'diff' );
			// Allow oldid to override a changed or missing title
			if ( $oldid ) {
				$rev = Revision::newFromId( $oldid );
				$ret = $rev ? $rev->getTitle() : $ret;
			}
		}

		if( $ret === null || ( $ret->getDBkey() == '' && $ret->getInterwiki() == '' ) ){
			$ret = new BadTitle;
		}
		return $ret;
	}

	/**
	 * Get the Title object that we'll be acting on, as specified in the WebRequest
	 * @return Title
	 */
	public function getTitle(){
		if( $this->context->title === null ){
			$this->context->title = $this->parseTitle();
		}
		return $this->context->title;
	}

	/**
	 * Performs the request.
	 * - bad titles
	 * - read restriction
	 * - local interwiki redirects
	 * - redirect loop
	 * - special pages
	 * - normal pages
	 *
	 * @return Article object
	 */
	public function performRequest() {
		global $wgServer, $wgUsePathInfo;

		wfProfileIn( __METHOD__ );

		if ( $this->context->request->getVal( 'printable' ) === 'yes' ) {
			$this->context->output->setPrintable();
		}

		wfRunHooks( 'BeforeInitialize', array(
			&$this->context->title,
			null,
			&$this->context->output,
			&$this->context->user,
			$this->context->request,
			$this
		) );

		// Invalid titles. Bug 21776: The interwikis must redirect even if the page name is empty.
		if ( $this->context->title instanceof BadTitle ) {
			throw new ErrorPageError( 'badtitle', 'badtitletext' );
		// If the user is not logged in, the Namespace:title of the article must be in
		// the Read array in order for the user to see it. (We have to check here to
		// catch special pages etc. We check again in Article::view())
		} else if ( !$this->context->title->userCanRead() ) {
			$this->context->output->loginToUse();
		// Interwiki redirects
		} else if ( $this->context->title->getInterwiki() != '' ) {
			$rdfrom = $this->context->request->getVal( 'rdfrom' );
			if ( $rdfrom ) {
				$url = $this->context->title->getFullURL( 'rdfrom=' . urlencode( $rdfrom ) );
			} else {
				$query = $this->context->request->getValues();
				unset( $query['title'] );
				$url = $this->context->title->getFullURL( $query );
			}
			// Check for a redirect loop
			if ( !preg_match( '/^' . preg_quote( $wgServer, '/' ) . '/', $url ) && $this->context->title->isLocal() ) {
				// 301 so google et al report the target as the actual url.
				$this->context->output->redirect( $url, 301 );
			} else {
				$this->context->title = new BadTitle;
				wfProfileOut( __METHOD__ );
				throw new ErrorPageError( 'badtitle', 'badtitletext' );
			}
		// Redirect loops, no title in URL, $wgUsePathInfo URLs, and URLs with a variant
		} else if ( $this->context->request->getVal( 'action', 'view' ) == 'view' && !$this->context->request->wasPosted()
			&& ( $this->context->request->getVal( 'title' ) === null || $this->context->title->getPrefixedDBKey() != $this->context->request->getVal( 'title' ) )
			&& !count( array_diff( array_keys( $this->context->request->getValues() ), array( 'action', 'title' ) ) ) )
		{
			if ( $this->context->title->getNamespace() == NS_SPECIAL ) {
				list( $name, $subpage ) = SpecialPageFactory::resolveAlias( $this->context->title->getDBkey() );
				if ( $name ) {
					$this->context->title = SpecialPage::getTitleFor( $name, $subpage );
				}
			}
			$targetUrl = $this->context->title->getFullURL();
			// Redirect to canonical url, make it a 301 to allow caching
			if ( $targetUrl == $this->context->request->getFullRequestURL() ) {
				$message = "Redirect loop detected!\n\n" .
					"This means the wiki got confused about what page was " .
					"requested; this sometimes happens when moving a wiki " .
					"to a new server or changing the server configuration.\n\n";

				if ( $wgUsePathInfo ) {
					$message .= "The wiki is trying to interpret the page " .
						"title from the URL path portion (PATH_INFO), which " .
						"sometimes fails depending on the web server. Try " .
						"setting \"\$wgUsePathInfo = false;\" in your " .
						"LocalSettings.php, or check that \$wgArticlePath " .
						"is correct.";
				} else {
					$message .= "Your web server was detected as possibly not " .
						"supporting URL path components (PATH_INFO) correctly; " .
						"check your LocalSettings.php for a customized " .
						"\$wgArticlePath setting and/or toggle \$wgUsePathInfo " .
						"to true.";
				}
				wfHttpError( 500, "Internal error", $message );
			} else {
				$this->context->output->setSquidMaxage( 1200 );
				$this->context->output->redirect( $targetUrl, '301' );
			}
		// Special pages
		} else if ( NS_SPECIAL == $this->context->title->getNamespace() ) {
			// actions that need to be made when we have a special pages
			SpecialPageFactory::executePath( $this->context->title, $this->context );
		} else {
			// ...otherwise treat it as an article view. The article
			// may be a redirect to another article or URL.
			$article = $this->initializeArticle();
			if ( is_object( $article ) ) {
				$this->performAction( $article );
				wfProfileOut( __METHOD__ );
				return $article;
			} elseif ( is_string( $new_article ) ) {
				$this->context->output->redirect( $new_article );
			} else {
				wfProfileOut( __METHOD__ );
				throw new MWException( "Shouldn't happen: MediaWiki::initializeArticle() returned neither an object nor a URL" );
			}
		}
		wfProfileOut( __METHOD__ );
	}

	/**
	 * Create an Article object of the appropriate class for the given page.
	 *
	 * @deprecated in 1.19; use Article::newFromTitle() instead
	 * @param $title Title
	 * @param $context RequestContext
	 * @return Article object
	 */
	public static function articleFromTitle( $title, RequestContext $context ) {
		return Article::newFromTitle( $title, $context );
	}

	/**
	 * Returns the action that will be executed, not necesserly the one passed
	 * passed through the "action" parameter. Actions disabled in
	 * $wgDisabledActions will be replaced by "nosuchaction"
	 *
	 * @return String: action
	 */
	public function getAction() {
		global $wgDisabledActions;

		$action = $this->context->request->getVal( 'action', 'view' );

		// Check for disabled actions
		if ( in_array( $action, $wgDisabledActions ) ) {
			return 'nosuchaction';
		}

		// Workaround for bug #20966: inability of IE to provide an action dependent
		// on which submit button is clicked.
		if ( $action === 'historysubmit' ) {
			if ( $this->context->request->getBool( 'revisiondelete' ) ) {
				return 'revisiondelete';
			} else {
				return 'view';
			}
		} elseif ( $action == 'editredlink' ) {
			return 'edit';
		}

		return $action;
	}

	/**
	 * Initialize the main Article object for "standard" actions (view, etc)
	 * Create an Article object for the page, following redirects if needed.
	 *
	 * @return mixed an Article, or a string to redirect to another URL
	 */
	private function initializeArticle() {
		global $wgDisableHardRedirects;

		wfProfileIn( __METHOD__ );

		$action = $this->context->request->getVal( 'action', 'view' );
		$article = Article::newFromTitle( $this->context->title, $this->context );
		// NS_MEDIAWIKI has no redirects.
		// It is also used for CSS/JS, so performance matters here...
		if ( $this->context->title->getNamespace() == NS_MEDIAWIKI ) {
			wfProfileOut( __METHOD__ );
			return $article;
		}
		// Namespace might change when using redirects
		// Check for redirects ...
		$file = ( $this->context->title->getNamespace() == NS_FILE ) ? $article->getFile() : null;
		if ( ( $action == 'view' || $action == 'render' ) 	// ... for actions that show content
			&& !$this->context->request->getVal( 'oldid' ) &&    // ... and are not old revisions
			!$this->context->request->getVal( 'diff' ) &&    // ... and not when showing diff
			$this->context->request->getVal( 'redirect' ) != 'no' &&	// ... unless explicitly told not to
			// ... and the article is not a non-redirect image page with associated file
			!( is_object( $file ) && $file->exists() && !$file->getRedirected() ) )
		{
			// Give extensions a change to ignore/handle redirects as needed
			$ignoreRedirect = $target = false;

			wfRunHooks( 'InitializeArticleMaybeRedirect',
				array( &$this->context->title, &$this->context->request, &$ignoreRedirect, &$target, &$article ) );

			// Follow redirects only for... redirects.
			// If $target is set, then a hook wanted to redirect.
			if ( !$ignoreRedirect && ( $target || $article->isRedirect() ) ) {
				// Is the target already set by an extension?
				$target = $target ? $target : $article->followRedirect();
				if ( is_string( $target ) ) {
					if ( !$wgDisableHardRedirects ) {
						// we'll need to redirect
						wfProfileOut( __METHOD__ );
						return $target;
					}
				}
				if ( is_object( $target ) ) {
					// Rewrite environment to redirected article
					$rarticle = Article::newFromTitle( $target, $this->context );
					$rarticle->loadPageData();
					if ( $rarticle->exists() || ( is_object( $file ) && !$file->isLocal() ) ) {
						$rarticle->setRedirectedFrom( $this->context->title );
						$article = $rarticle;
						$this->context->title = $target;
					}
				}
			} else {
				$this->context->title = $article->getTitle();
			}
		}
		wfProfileOut( __METHOD__ );
		return $article;
	}

	/**
	 * Cleaning up request by doing deferred updates, DB transaction, and the output
	 */
	public function finalCleanup() {
		wfProfileIn( __METHOD__ );
		// Now commit any transactions, so that unreported errors after
		// output() don't roll back the whole DB transaction
		$factory = wfGetLBFactory();
		$factory->commitMasterChanges();
		// Output everything!
		$this->context->output->output();
		// Do any deferred jobs
		wfDoUpdates( 'commit' );
		// Close the session so that jobs don't access the current session
		session_write_close();
		$this->doJobs();
		wfProfileOut( __METHOD__ );
	}

	/**
	 * Do a job from the job queue
	 */
	private function doJobs() {
		global $wgJobRunRate;

		if ( $wgJobRunRate <= 0 || wfReadOnly() ) {
			return;
		}
		if ( $wgJobRunRate < 1 ) {
			$max = mt_getrandmax();
			if ( mt_rand( 0, $max ) > $max * $wgJobRunRate ) {
				return;
			}
			$n = 1;
		} else {
			$n = intval( $wgJobRunRate );
		}

		while ( $n-- && false != ( $job = Job::pop() ) ) {
			$output = $job->toString() . "\n";
			$t = -wfTime();
			$success = $job->run();
			$t += wfTime();
			$t = round( $t * 1000 );
			if ( !$success ) {
				$output .= "Error: " . $job->getLastError() . ", Time: $t ms\n";
			} else {
				$output .= "Success, Time: $t ms\n";
			}
			wfDebugLog( 'jobqueue', $output );
		}
	}

	/**
	 * Ends this task peacefully
	 */
	public function restInPeace() {
		MessageCache::logMessages();
		wfLogProfilingData();
		// Commit and close up!
		$factory = wfGetLBFactory();
		$factory->commitMasterChanges();
		$factory->shutdown();
		wfDebug( "Request ended normally\n" );
	}

	/**
	 * Perform one of the "standard" actions
	 *
	 * @param $article Article
	 */
	private function performAction( $article ) {
		global $wgSquidMaxage, $wgUseExternalEditor;

		wfProfileIn( __METHOD__ );

		if ( !wfRunHooks( 'MediaWikiPerformAction', array(
				$this->context->output, $article, $this->context->title,
				$this->context->user, $this->context->request, $this ) ) )
		{
			wfProfileOut( __METHOD__ );
			return;
		}

		$act = $this->getAction();

		$action = Action::factory( $act, $article );
		if( $action instanceof Action ){
			$action->show();
			wfProfileOut( __METHOD__ );
			return;
		}

		switch( $act ) {
			case 'view':
				$this->context->output->setSquidMaxage( $wgSquidMaxage );
				$article->view();
				break;
			case 'raw': // includes JS/CSS
				wfProfileIn( __METHOD__ . '-raw' );
				$raw = new RawPage( $article );
				$raw->view();
				wfProfileOut( __METHOD__ . '-raw' );
				break;
			case 'delete':
			case 'revert':
			case 'rollback':
			case 'protect':
			case 'unprotect':
			case 'info':
			case 'markpatrolled':
			case 'render':
			case 'deletetrackback':
				$article->$act();
				break;
			case 'submit':
				if ( session_id() == '' ) {
					// Send a cookie so anons get talk message notifications
					wfSetupSession();
				}
				// Continue...
			case 'edit':
				if ( wfRunHooks( 'CustomEditor', array( $article, $this->context->user ) ) ) {
					$internal = $this->context->request->getVal( 'internaledit' );
					$external = $this->context->request->getVal( 'externaledit' );
					$section = $this->context->request->getVal( 'section' );
					$oldid = $this->context->request->getVal( 'oldid' );
					if ( !$wgUseExternalEditor || $act == 'submit' || $internal ||
					   $section || $oldid || ( !$this->context->user->getOption( 'externaleditor' ) && !$external ) ) {
						$editor = new EditPage( $article );
						$editor->submit();
					} elseif ( $wgUseExternalEditor && ( $external || $this->context->user->getOption( 'externaleditor' ) ) ) {
						$mode = $this->context->request->getVal( 'mode' );
						$extedit = new ExternalEdit( $article, $mode );
						$extedit->edit();
					}
				}
				break;
			case 'history':
				if ( $this->context->request->getFullRequestURL() == $this->context->title->getInternalURL( 'action=history' ) ) {
					$this->context->output->setSquidMaxage( $wgSquidMaxage );
				}
				$history = new HistoryPage( $article );
				$history->history();
				break;
			case 'revisiondelete':
				// For show/hide submission from history page
				$special = SpecialPageFactory::getPage( 'Revisiondelete' );
				$special->execute( '' );
				break;
			default:
				if ( wfRunHooks( 'UnknownAction', array( $act, $article ) ) ) {
					$this->context->output->showErrorPage( 'nosuchaction', 'nosuchactiontext' );
				}
		}
		wfProfileOut( __METHOD__ );
	}
}
