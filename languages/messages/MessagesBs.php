<?php
/** Bosnian (Bosanski)
 *
 * @ingroup Language
 * @file
 *
 * @author CERminator
 * @author Demicx
 * @author Kal-El
 * @author Seha
 * @author Smooth O
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Medija',
	NS_SPECIAL          => 'Posebno',
	NS_TALK             => 'Razgovor',
	NS_USER             => 'Korisnik',
	NS_USER_TALK        => 'Razgovor_sa_korisnikom',
	NS_PROJECT_TALK     => 'Razgovor_{{grammar:instrumental|$1}}',
	NS_IMAGE            => 'Datoteka',
	NS_IMAGE_TALK       => 'Razgovor_o_datoteci',
	NS_MEDIAWIKI        => 'MedijaViki',
	NS_MEDIAWIKI_TALK   => 'Razgovor_o_MedijaVikiju',
	NS_TEMPLATE         => 'Šablon',
	NS_TEMPLATE_TALK    => 'Razgovor_o_šablonu',
	NS_HELP             => 'Pomoć',
	NS_HELP_TALK        => 'Razgovor_o_pomoći',
	NS_CATEGORY         => 'Kategorija',
	NS_CATEGORY_TALK    => 'Razgovor_o_kategoriji',
);

$namespaceAliases = array(
	'Slika' => NS_IMAGE,
	'Razgovor_o_datoteci' => NS_IMAGE_TALK,
);

$skinNames = array(
	'Obična', 'Nostalgija', 'Kelnsko plavo'
);

$specialPageAliases = array(
	'DoubleRedirects'           => array( 'DvostrukaPreusmjerenja' ),
	'BrokenRedirects'           => array( 'NedovrsenaPreusmjerenja' ),
	'Disambiguations'           => array( 'Cvor' ),
	'Userlogin'                 => array( 'KorisnickaPrijava' ),
	'Userlogout'                => array( 'KorisnickaOdjava' ),
	'CreateAccount'             => array( 'NapraviRacun' ),
	'Preferences'               => array( 'Postavke' ),
	'Watchlist'                 => array( 'ListaPracenja' ),
	'Recentchanges'             => array( 'NedavneIzmjene' ),
	'Upload'                    => array( 'Postavljanje' ),
	'Imagelist'                 => array( 'ListaSlika' ),
	'Newimages'                 => array( 'NoveSlike' ),
	'Listusers'                 => array( 'ListaKorisnika' ),
	'Listgrouprights'           => array( 'ListaKorisnickihPrava' ),
	'Statistics'                => array( 'Statistike' ),
	'Randompage'                => array( 'SlucajniClanak' ),
	'Lonelypages'               => array( 'Siromasci' ),
	'Uncategorizedpages'        => array( 'StraniceBezKategorije' ),
	'Uncategorizedcategories'   => array( 'KategorijeBezKategorije' ),
	'Uncategorizedimages'       => array( 'SlikeBezKategorije' ),
	'Uncategorizedtemplates'    => array( 'SabloniBezKategorije' ),
	'Unusedcategories'          => array( 'NekoristeneKategorije' ),
	'Unusedimages'              => array( 'NekoristeneSlike' ),
	'Wantedpages'               => array( 'ZatrazeneStranice', 'ZatrazeniClanci' ),
	'Wantedcategories'          => array( 'ZatrazeneKategorije' ),
	'Wantedfiles'               => array( 'ZatrazeneDatoteke' ),
	'Wantedtemplates'           => array( 'ZatrazeniSabloni' ),
	'Mostlinked'                => array( 'NajcesceLinkovano' ),
	'Mostlinkedcategories'      => array( 'NajcesceLinkovaneKategorije', 'NajcesceKoristeneKategorije' ),
	'Mostlinkedtemplates'       => array( 'NajcesceLinkovaniSabloni', 'NajcesceKoristeniSabloni' ),
	'Mostcategories'            => array( 'NajcesceKategorije' ),
	'Mostimages'                => array( 'NajcesceSlike' ),
	'Mostrevisions'             => array( 'NajcesceRevizije' ),
	'Fewestrevisions'           => array( 'NajmanjeRevizija' ),
	'Shortpages'                => array( 'KratkeStranice' ),
	'Longpages'                 => array( 'DugeStranice' ),
	'Newpages'                  => array( 'NoveStranice' ),
	'Ancientpages'              => array( 'NajstarijeStranice' ),
	'Deadendpages'              => array( 'MrtveStranice' ),
	'Protectedpages'            => array( 'ZasticeneStranice' ),
	'Protectedtitles'           => array( 'ZasticeniNazivi' ),
	'Allpages'                  => array( 'SveStranice' ),
	'Prefixindex'               => array( 'IndeksPrefiksa' ),
	'Ipblocklist'               => array( 'ListaBlokiranjaPrekoIP' ),
	'Specialpages'              => array( 'SpecijalneStranice' ),
	'Contributions'             => array( 'Doprinos' ),
	'Emailuser'                 => array( 'EmailKorisnika' ),
	'Confirmemail'              => array( 'PotvrdiEmail' ),
	'Whatlinkshere'             => array( 'StaJeLinkovanoOvdje' ),
	'Recentchangeslinked'       => array( 'PovezaneNedavneIzmjene' ),
	'Movepage'                  => array( 'PreusmjeriStranicu' ),
	'Blockme'                   => array( 'BlokirajMe' ),
	'Booksources'               => array( 'KnjizniIzvori' ),
	'Categories'                => array( 'Kategorije' ),
	'Export'                    => array( 'Izvoz' ),
	'Version'                   => array( 'Verzija' ),
	'Allmessages'               => array( 'SvePoruke' ),
	'Log'                       => array( 'Protokol', 'Protokoli' ),
	'Blockip'                   => array( 'BlokirajIP' ),
	'Undelete'                  => array( 'PovratBrisanog' ),
	'Import'                    => array( 'Uvoz' ),
	'Lockdb'                    => array( 'ZakljucajDB' ),
	'Unlockdb'                  => array( 'OdkljucajDB' ),
	'Userrights'                => array( 'KorisnickaPrava' ),
	'MIMEsearch'                => array( 'MIMEPretraga' ),
	'FileDuplicateSearch'       => array( 'PotragaDuplihFajlova' ),
	'Unwatchedpages'            => array( 'NepregledaneStranice' ),
	'Listredirects'             => array( 'ListaPreusmjeravanja' ),
	'Revisiondelete'            => array( 'VratiBrisanje' ),
	'Unusedtemplates'           => array( 'NekoristeniSabloni' ),
	'Randomredirect'            => array( 'SlucajnoPreusmjerenje' ),
	'Mypage'                    => array( 'MojaStranica' ),
	'Mytalk'                    => array( 'MojRazgovor' ),
	'Mycontributions'           => array( 'MojiDoprinosi' ),
	'Listadmins'                => array( 'ListaAdministratora' ),
	'Listbots'                  => array( 'ListaBotova' ),
	'Popularpages'              => array( 'PopularneStranice' ),
	'Search'                    => array( 'Pretraga' ),
	'Resetpass'                 => array( 'PonistiLozinku' ),
	'Withoutinterwiki'          => array( 'BezInterwiki' ),
	'MergeHistory'              => array( 'SpojiHistoriju' ),
	'Filepath'                  => array( 'PutDoDatoteke' ),
	'Invalidateemail'           => array( 'PogresanEmail' ),
	'Blankpage'                 => array( 'PraznaStranica' ),
	'LinkSearch'                => array( 'PotragaLinkova' ),
	'DeletedContributions'      => array( 'ObrisaniDoprinosi' ),
);

$magicWords = array(
	# ID                              CASE SYNONYMS
	'redirect'               => array( 0, '#Preusmjeri', '#redirect', '#preusmjeri', '#PREUSMJERI' ),
	'notoc'                  => array( 0, '__NOTOC__', '__BEZSADRŽAJA__' ),
	'forcetoc'               => array( 0, '__FORCETOC__', '__FORSIRANISADRŽAJ__' ),
	'toc'                    => array( 0, '__TOC__', '__SADRŽAJ__' ),
	'noeditsection'          => array( 0, '__NOEDITSECTION__', '__BEZ_IZMENA__', '__BEZIZMENA__' ),
	'currentmonth'           => array( 1, 'CURRENTMONTH', 'TRENUTNIMJESEC' ),
	'currentmonthname'       => array( 1, 'CURRENTMONTHNAME', 'TRENUTNIMJESECIME' ),
	'currentmonthnamegen'    => array( 1, 'CURRENTMONTHNAMEGEN', 'TRENUTNIMJESECROD' ),
	'currentmonthabbrev'     => array( 1, 'CURRENTMONTHABBREV', 'TRENUTNIMJESECSKR' ),
	'currentday'             => array( 1, 'CURRENTDAY', 'TRENUTNIDAN' ),
	'currentdayname'         => array( 1, 'CURRENTDAYNAME', 'TRENUTNIDANIME' ),
	'currentyear'            => array( 1, 'CURRENTYEAR', 'TRENUTNAGODINA' ),
	'currenttime'            => array( 1, 'CURRENTTIME', 'TRENUTNOVRIJEME' ),
	'numberofarticles'       => array( 1, 'NUMBEROFARTICLES', 'BROJČLANAKA' ),
	'numberoffiles'          => array( 1, 'NUMBEROFFILES', 'BROJDATOTEKA', 'BROJFAJLOVA' ),
	'pagename'               => array( 1, 'PAGENAME', 'STRANICA' ),
	'pagenamee'              => array( 1, 'PAGENAMEE', 'STRANICE' ),
	'namespace'              => array( 1, 'NAMESPACE', 'IMENSKIPROSTOR' ),
	'namespacee'             => array( 1, 'NAMESPACEE', 'IMENSKIPROSTORI' ),
	'fullpagename'           => array( 1, 'FULLPAGENAME', 'PUNOIMESTRANE' ),
	'fullpagenamee'          => array( 1, 'FULLPAGENAMEE', 'PUNOIMESTRANEE' ),
	'msg'                    => array( 0, 'MSG:', 'POR:' ),
	'subst'                  => array( 0, 'SUBST:', 'ZAMJENI:' ),
	'msgnw'                  => array( 0, 'MSGNW:', 'NVPOR:' ),
	'img_thumbnail'          => array( 1, 'thumbnail', 'thumb', 'mini' ),
	'img_manualthumb'        => array( 1, 'thumbnail=$1', 'thumb=$1', 'mini=$1' ),
	'img_right'              => array( 1, 'right', 'desno', 'd' ),
	'img_left'               => array( 1, 'left', 'lijevo', 'l' ),
	'img_none'               => array( 1, 'none', 'n', 'bez' ),
	'img_width'              => array( 1, '$1px', '$1piksel' , '$1p' ),
	'img_center'             => array( 1, 'center', 'centre', 'centar', 'c' ),
	'img_framed'             => array( 1, 'framed', 'enframed', 'frame', 'okvir', 'ram' ),
	'sitename'               => array( 1, 'SITENAME', 'IMESAJTA' ),
	'ns'                     => array( 0, 'NS:', 'IP:' ),
	'localurl'               => array( 0, 'LOCALURL:', 'LOKALNAADRESA:' ),
	'localurle'              => array( 0, 'LOCALURLE:', 'LOKALNEADRESE:' ),
	'servername'             => array( 0, 'SERVERNAME', 'IMESERVERA' ),
	'scriptpath'             => array( 0, 'SCRIPTPATH', 'SKRIPTA' ),
	'grammar'                => array( 0, 'GRAMMAR:', 'GRAMATIKA:' ),
	'notitleconvert'         => array( 0, '__NOTITLECONVERT__', '__NOTC__', '__BEZTC__' ),
	'nocontentconvert'       => array( 0, '__NOCONTENTCONVERT__', '__NOCC__', '__BEZCC__' ),
	'currentweek'            => array( 1, 'CURRENTWEEK', 'TRENUTNASEDMICA' ),
	'currentdow'             => array( 1, 'CURRENTDOW', 'TRENUTNIDOV' ),
	'revisionid'             => array( 1, 'REVISIONID', 'IDREVIZIJE' ),
	'plural'                 => array( 0, 'PLURAL:', 'MNOŽINA:' ),
	'fullurl'                => array( 0, 'FULLURL:', 'PUNURL:' ),
	'fullurle'               => array( 0, 'FULLURLE:', 'PUNURLE:' ),
	'lcfirst'                => array( 0, 'LCFIRST:', 'LCPRVI:' ),
	'ucfirst'                => array( 0, 'UCFIRST:', 'UCPRVI:' ),
);

$fallback8bitEncoding = "iso-8859-2";
$separatorTransformTable = array(',' => '.', '.' => ',' );
$linkTrail = '/^([a-zćčžšđž]+)(.*)$/sDu';

$messages = array(
# User preference toggles
'tog-underline'               => 'Podvuci veze:',
'tog-highlightbroken'         => 'Formatiraj pokvarene veze <a href="" class="new">ovako</a> (alternativa: ovako<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Uravnjaj pasuse',
'tog-hideminor'               => 'Sakrij male izmjene u spisku nedavnih izmjena',
'tog-extendwatchlist'         => 'Proširi spisak praćenja za pogled svih izmjena',
'tog-usenewrc'                => 'Poboljšan spisak nedavnih izmjena (JavaScript)',
'tog-numberheadings'          => 'Automatski numeriši podnaslove',
'tog-showtoolbar'             => 'Prikaži dugmiće za izmjene (JavaScript)',
'tog-editondblclick'          => 'Izmijeni stranice dvostrukim klikom (JavaScript)',
'tog-editsection'             => 'Omogući da mijenjam pojedinačne odjeljke putem [uredi] linka',
'tog-editsectiononrightclick' => 'Uključite uređivanje odjeljka sa pritiskom na desno dugme miša u naslovu odjeljka (JavaScript)',
'tog-showtoc'                 => 'Prikaži sadržaj (u svim stranicama sa više od tri podnaslova)',
'tog-rememberpassword'        => 'Zapamti šifru za iduće posjete',
'tog-editwidth'               => 'Kutija za uređivanje je dostigla najveću moguću širinu',
'tog-watchcreations'          => 'Dodaj stranice koje ja napravim u moj spisak praćenih članaka',
'tog-watchdefault'            => 'Dodaj stranice koje uređujem u moj spisak praćenih članaka',
'tog-watchmoves'              => 'Stranice koje premjestim dodaj na spisak praćenja',
'tog-watchdeletion'           => 'Stranice koje obrišem dodaj na spisak praćenja',
'tog-minordefault'            => 'Označi sve izmjene malim isprva',
'tog-previewontop'            => 'Prikaži pretpregled prije polja za izmjenu a ne poslije',
'tog-previewonfirst'          => 'Prikaži izgled pri prvoj izmjeni',
'tog-nocache'                 => 'Onemogući keširanje stranica',
'tog-enotifwatchlistpages'    => 'Pošalji mi e-poštu kad se promijene stranice',
'tog-enotifusertalkpages'     => 'Pošalji mi e-poštu kad se promijeni moja korisnička stranica za razgovor',
'tog-enotifminoredits'        => 'Pošalji mi e-poštu takođe za male izmjene stranica',
'tog-enotifrevealaddr'        => 'Otkrij adresu moje e-pošte u porukama obaviještenja',
'tog-shownumberswatching'     => 'Prikaži broj korisnika koji prate',
'tog-fancysig'                => 'Jednostavan potpis (bez automatskog linka)',
'tog-externaleditor'          => 'Po potrebi koristite vanjski program za uređivanje (samo za naprednije korisnike, potrebne su promjene na računaru)',
'tog-externaldiff'            => 'Koristi vanjski (diff) program za prikaz razlika',
'tog-showjumplinks'           => 'Omogući "skoči na" poveznice',
'tog-uselivepreview'          => 'Koristite pregled uživo (JavaScript) (Eksperimentalno)',
'tog-forceeditsummary'        => 'Opomeni me pri unosu praznog sažetka',
'tog-watchlisthideown'        => 'Sakrij moje izmjene sa spiska praćenih članaka',
'tog-watchlisthidebots'       => 'Sakrij izmjene botova sa spiska praćenih članaka',
'tog-watchlisthideminor'      => 'Sakrij zanemarljive izmjene sa spiska mojih praćenja',
'tog-watchlisthideliu'        => 'Sakrij promjene prijavljenih korisnika sa liste praćenja',
'tog-watchlisthideanons'      => 'Sakrij promjene anonimnih korisnika sa liste praćenja',
'tog-ccmeonemails'            => 'Pošalji mi kopije emailova koje pošaljem drugim korisnicima',
'tog-diffonly'                => 'Ne prikazuj sadržaj stranice ispod prikaza razlika',
'tog-showhiddencats'          => 'Prikaži skrivene kategorije',
'tog-norollbackdiff'          => 'Nakon vraćanja zanemari prikaz razlika',

'underline-always'  => 'Uvijek',
'underline-never'   => 'Nikad',
'underline-default' => 'Po podešavanjima preglednika',

# Dates
'sunday'        => 'nedelja',
'monday'        => 'ponedeljak',
'tuesday'       => 'utorak',
'wednesday'     => 'srijeda',
'thursday'      => 'četvrtak',
'friday'        => 'petak',
'saturday'      => 'subota',
'sun'           => 'Ned',
'mon'           => 'Pon',
'tue'           => 'Uto',
'wed'           => 'Sri',
'thu'           => 'Čet',
'fri'           => 'Pet',
'sat'           => 'Sub',
'january'       => 'januar',
'february'      => 'februar',
'march'         => 'mart',
'april'         => 'april',
'may_long'      => 'maj',
'june'          => 'juni',
'july'          => 'juli',
'august'        => 'august',
'september'     => 'septembar',
'october'       => 'oktobar',
'november'      => 'novembar',
'december'      => 'decembar',
'january-gen'   => 'januara',
'february-gen'  => 'februara',
'march-gen'     => 'marta',
'april-gen'     => 'aprila',
'may-gen'       => 'maja',
'june-gen'      => 'juna',
'july-gen'      => 'jula',
'august-gen'    => 'augusta',
'september-gen' => 'septembra',
'october-gen'   => 'oktobra',
'november-gen'  => 'novembra',
'december-gen'  => 'decembra',
'jan'           => 'jan',
'feb'           => 'feb',
'mar'           => 'mar',
'apr'           => 'apr',
'may'           => 'maj',
'jun'           => 'jun',
'jul'           => 'jul',
'aug'           => 'aug',
'sep'           => 'sep',
'oct'           => 'okt',
'nov'           => 'nov',
'dec'           => 'dec',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Kategorija|Kategorije}}',
'category_header'                => 'Članaka u kategoriji "$1"',
'subcategories'                  => 'Potkategorije',
'category-media-header'          => 'Mediji u kategoriji "$1"',
'category-empty'                 => "''Ova kategorija trenutno ne sadrži članke ni medije.''",
'hidden-categories'              => '{{PLURAL:$1|Sakrivena kategorija|Sakrivene kategorije}}',
'hidden-category-category'       => 'Sakrivene kategorije', # Name of the category where hidden categories will be listed
'category-subcat-count'          => '{{PLURAL:$2|Ova kategorija ima samo sljedeću podkategoriju.|Ova kategorija ima sljedeću {{PLURAL:$1|podkategoriju|$1 podkategorije}}, od $2 ukupno.}}',
'category-subcat-count-limited'  => 'Ova kategorija sadrži {{PLURAL:$1|podkategoriju|$1 podkategorije|$1 podkategorija}}.',
'category-article-count'         => '{{PLURAL:$2|U ovoj kategoriji se nalazi ovaj članak.|Prikazano je {{PLURAL:$1|članak|$1 članka|$1 članaka}} od ukupno $2 u ovoj kategoriji.}}',
'category-article-count-limited' => '{{PLURAL:$1|Slijedeća stranica|Slijedećih $1 stranica}} je u ovoj kategoriji.',
'category-file-count'            => '{{PLURAL:$2|Ova kategorija ima samo slijedeću datoteku.|Prikazano je {{PLURAL:$1|$1 datoteka|$1 datoteke|$1 datoteka}} u ovoj kategoriji, od ukupno $2.}}',
'category-file-count-limited'    => '{{PLURAL:$1|Slijedeća datoteka je|Slijedeće $1 datoteke su|Slijedećih $1 datoteka je}} u ovoj kategoriji.',
'listingcontinuesabbrev'         => 'nast.',

'mainpagetext'      => 'Viki softver is uspješno instaliran.',
'mainpagedocfooter' => 'Kontaktirajte [http://meta.wikimedia.org/wiki/Help:Contents uputstva za korisnike] za informacije o upotrebi wiki programa.

== Početak ==
* [http://www.mediawiki.org/wiki/Manual:Configuration_settings Lista postavki]
* [http://www.mediawiki.org/wiki/Manual:FAQ MediaWiki najčešće postavljana pitanja]
* [https://lists.wikimedia.org/mailman/listinfo/mediawiki-announce Lista E-Mail adresa MediaWiki]',

'about'          => 'O...',
'article'        => 'Članak',
'newwindow'      => '(otvara se u novom prozoru)',
'cancel'         => 'Poništite',
'qbfind'         => 'Pronađite',
'qbbrowse'       => 'Prelistajte',
'qbedit'         => 'Uredi',
'qbpageoptions'  => 'Opcije stranice',
'qbpageinfo'     => 'Informacije o stranici',
'qbmyoptions'    => 'Moje opcije',
'qbspecialpages' => 'Posebne stranice',
'moredotdotdot'  => 'Još...',
'mypage'         => 'Moja stranica',
'mytalk'         => 'Moj razgovor',
'anontalk'       => 'Razgovor za ovu IP adresu',
'navigation'     => 'Navigacija',
'and'            => '&#32;i',

# Metadata in edit box
'metadata_help' => 'Metapodaci:',

'errorpagetitle'    => 'Greška',
'returnto'          => 'Povratak na $1.',
'tagline'           => 'Izvor: {{SITENAME}}',
'help'              => 'Pomoć',
'search'            => 'Pretraga',
'searchbutton'      => 'Traži',
'go'                => 'Idi',
'searcharticle'     => 'Idi',
'history'           => 'Historija stranice',
'history_short'     => 'Historija',
'updatedmarker'     => 'promjene od moje zadnje posjete',
'info_short'        => 'Informacija',
'printableversion'  => 'Prilagođeno štampanju',
'permalink'         => 'Trajni link',
'print'             => 'Štampa',
'edit'              => 'Uredi',
'create'            => 'Napravi',
'editthispage'      => 'Uredite ovu stranicu',
'create-this-page'  => 'Napravi ovu stranicu',
'delete'            => 'Obriši',
'deletethispage'    => 'Obriši ovu stranicu',
'undelete_short'    => 'Vrati obrisanih {{PLURAL:$1|jednu izmjenu|$1 izmjena}}',
'protect'           => 'Zaštitite',
'protect_change'    => 'promijeni',
'protectthispage'   => 'Zaštitite ovu stranicu',
'unprotect'         => 'odštiti',
'unprotectthispage' => 'Odštiti ovu stranicu',
'newpage'           => 'Nova stranica',
'talkpage'          => 'Razgovor o stranici',
'talkpagelinktext'  => 'Razgovor',
'specialpage'       => 'Posebna Stranica',
'personaltools'     => 'Lični alati',
'postcomment'       => 'Pošaljite komentar',
'articlepage'       => 'Pogledaj članak',
'talk'              => 'Razgovor',
'views'             => 'Pregledi',
'toolbox'           => 'Traka sa alatima',
'userpage'          => 'Pogledaj korisničku stranicu',
'projectpage'       => 'Pogledaj stranu o ovoj strani',
'imagepage'         => 'Pogledajte stranicu slike',
'mediawikipage'     => 'Pogledaj stranicu sa porukama',
'templatepage'      => 'Pogledajte stranicu za šablone',
'viewhelppage'      => 'Pogledajte stranicu za pomoć',
'categorypage'      => 'Pogledaj stranicu kategorije',
'viewtalkpage'      => 'Pogledaj raspravu',
'otherlanguages'    => 'Ostali jezici',
'redirectedfrom'    => '(Preusmjereno sa $1)',
'redirectpagesub'   => 'Preusmjeri stranicu',
'lastmodifiedat'    => 'Ova stranica je posljednji put izmijenjena $2, $1', # $1 date, $2 time
'viewcount'         => 'Ovoj stranici je pristupljeno {{PLURAL:$1|$1 put|$1 puta}}.',
'protectedpage'     => 'Zaštićena stranica',
'jumpto'            => 'Idi na:',
'jumptonavigation'  => 'navigacija',
'jumptosearch'      => 'traži',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => 'O projektu {{SITENAME}}',
'aboutpage'            => 'Project:O_projektu_{{SITENAME}}',
'bugreports'           => 'Prijavite grešku',
'bugreportspage'       => 'Project:Prijave_grešaka',
'copyright'            => 'Svi sadržaji podliježu "$1" licenci.',
'copyrightpagename'    => '{{SITENAME}} autorska prava',
'copyrightpage'        => '{{ns:project}}:Autorska_prava',
'currentevents'        => 'Trenutni događaji',
'currentevents-url'    => 'Project:Novosti',
'disclaimers'          => 'Odricanje odgovornosti',
'disclaimerpage'       => 'Project:Uslovi korišćenja, pravne napomene i odricanje odgovornosti',
'edithelp'             => 'Pomoć pri uređivanju stranice',
'edithelppage'         => 'Help:Uređivanje',
'faq'                  => 'ČPP',
'faqpage'              => 'Project:NPP',
'helppage'             => 'Help:Sadržaj',
'mainpage'             => 'Početna strana',
'mainpage-description' => 'Početna strana',
'policy-url'           => 'Project:Pravila',
'portal'               => 'Portal zajednice',
'portal-url'           => 'Project:Portal_zajednice',
'privacy'              => 'Pravila o anonimnosti',
'privacypage'          => 'Project:Pravila o anonimnosti',

'badaccess'        => 'Greška pri odobrenju',
'badaccess-group0' => 'Nije vam dozvoljeno izvršiti akciju koju ste zahtjevali.',
'badaccess-groups' => 'Akcija koju ste zahtjevali je ograničena na korisnike iz {{PLURAL:$2|ove grupe|jedne od grupa}}: $1.',

'versionrequired'     => 'Potrebna je verzija $1 MediaWikija',
'versionrequiredtext' => 'Potrebna je verzija $1 MediaWikija da bi se koristila ova strana. Pogledaj [[Special:Version|verziju]].',

'ok'                      => 'da',
'retrievedfrom'           => 'Dobavljeno iz "$1"',
'youhavenewmessages'      => 'Imate $1 ($2).',
'newmessageslink'         => 'novih poruka',
'newmessagesdifflink'     => 'posljednja promjena',
'youhavenewmessagesmulti' => 'Imate nove poruke na $1',
'editsection'             => 'uredi',
'editold'                 => 'uredi',
'viewsourceold'           => 'pogledaj izvor',
'editlink'                => 'uredi',
'viewsourcelink'          => 'pogledaj izvor',
'editsectionhint'         => 'Uredi sekciju: $1',
'toc'                     => 'Sadržaj',
'showtoc'                 => 'prikaži',
'hidetoc'                 => 'sakrij',
'thisisdeleted'           => 'Pogledaj ili vrati $1?',
'viewdeleted'             => 'Pogledaj $1?',
'restorelink'             => '{{PLURAL:$1|jedna izbrisana izmjena|$1 izbrisanih izmjena}}',
'feedlinks'               => 'Fid:',
'feed-invalid'            => 'Nedozvoljen tip potpisa',
'feed-unavailable'        => 'RSS izvori nisu dostupni',
'site-rss-feed'           => '$1 RSS izvor',
'site-atom-feed'          => '$1 Atom izvor',
'page-rss-feed'           => '"$1" RSS izvor',
'page-atom-feed'          => '"$1" Atom izvor',
'red-link-title'          => '$1 (nije još napisan)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Članak',
'nstab-user'      => 'Korisnička stranica',
'nstab-media'     => 'Mediji',
'nstab-special'   => 'Posebna',
'nstab-project'   => 'Članak',
'nstab-image'     => 'Datoteka',
'nstab-mediawiki' => 'Poruka',
'nstab-template'  => 'Šablon',
'nstab-help'      => 'Pomoć',
'nstab-category'  => 'Kategorija',

# Main script and global functions
'nosuchaction'      => 'Nema takve akcije',
'nosuchactiontext'  => 'Akcija navedena u URL-u nije
prepoznata od strane {{SITENAME}} softvera.',
'nosuchspecialpage' => 'Nema takve posebne stranice',
'nospecialpagetext' => 'Tražili ste posebnu stranicu, koju {{SITENAME}} softver nije prepoznao.',

# General errors
'error'                => 'Greška',
'databaseerror'        => 'Greška u bazi',
'dberrortext'          => 'Desila se sintaksna greška upita baze.
Ovo je moguće zbog ilegalnog upita, ili moguće greške u softveru.
Poslednji pokušani upit je bio: <blockquote><tt>$1</tt></blockquote>
iz funkcije "<tt>$2</tt>".
MySQL je vratio grešku "<tt>$3: $4</tt>".',
'dberrortextcl'        => 'Desila se sintaksna greška upita baze.
Poslednji pokušani upit je bio:
"$1"
iz funkcije "$2".
MySQL je vratio grešku "$3: $4".',
'noconnect'            => 'Žao nam je! Wiki ima neke tehničke poteškoće, i ne može da se poveže sa serverom baze.<br />
$1',
'nodb'                 => 'Ne mogu da izaberem bazu $1',
'cachederror'          => 'Ovo je keširana kopija zahtjevane stranice, i možda nije najnovija.',
'laggedslavemode'      => "'''Upozorenje''': Stranica, možda, nije ažurirana.",
'readonly'             => 'Baza je zaključana',
'enterlockreason'      => 'Unesite razlog za zaključavanje, uključujući procijenu
vremena otključavanja',
'readonlytext'         => 'Baza je trenutno zaključana za nove unose i ostale izmjene, vjerovatno zbog rutinskog održavanja, posle čega će biti vraćena u uobičajeno stanje.

Administrator koji ju je zaključao je ponudio ovo objašnjenje: $1',
'missing-article'      => 'U bazi podataka nije pronađen tekst stranice tražen pod nazivom "$1" $2.

Do ovoga dolazi kada se prati premještaj ili historija linka za stranicu koja je pobrisana.


U slučaju da se ne radi o gore navedenom, moguće je da ste pronašli grešku u programu.
Molimo Vas da ovo prijavite [[Special:ListUsers/sysop|administratoru]] sa navođenjem tačne adrese stranice',
'missingarticle-rev'   => '(revizija#: $1)',
'missingarticle-diff'  => '(Razlika: $1, $2)',
'readonly_lag'         => 'Baza podataka je zaključana dok se sekundarne baze podataka na serveru ne sastave sa glavnom.',
'internalerror'        => 'Unutrašnja greška',
'internalerror_info'   => 'Interna greška: $1',
'filecopyerror'        => 'Ne može se kopirati "$1" na "$2".',
'filerenameerror'      => 'Ne može se promjeniti ime fajla "$1" to "$2".',
'filedeleteerror'      => 'Ne može se izbrisati fajl "$1".',
'directorycreateerror' => 'Nije moguće napraviti direkciju "$1".',
'filenotfound'         => 'Ne može se naći fajl "$1".',
'fileexistserror'      => 'Nemoguće je napisati fajl "$1": fajl već postoji',
'unexpected'           => 'Neočekivana vrijednost: "$1"="$2".',
'formerror'            => 'Greška:  ne može se poslati upitnik',
'badarticleerror'      => 'Ova akcija ne može biti izvršena na ovoj stranici.',
'cannotdelete'         => 'Ne može se obrisati navedena stranica ili slika.  (Moguće je da ju je neko drugi već obrisao.)',
'badtitle'             => 'Loš naslov',
'badtitletext'         => 'Zahtjevani naslov stranice je bio neispravan, prazan ili neispravno povezan međujezički ili interviki naslov.',
'perfcached'           => 'Slijedeći podaci su keširani i možda neće biti u potpunosti ažurirani.',
'perfcachedts'         => 'Sljedeći podaci se nalaze u memoriji i zadnji put su ažurirani $1.',
'querypage-no-updates' => 'Ažuriranje ove stranice je isključeno.
Podaci koji se ovdje nalaze ne moraju biti aktualni.',
'wrong_wfQuery_params' => 'Netačni parametri za wfQuery()<br />
Funkcija: $1<br />
Pretraga: $2',
'viewsource'           => 'pogledaj kod',
'viewsourcefor'        => 'za $1',
'actionthrottled'      => 'Akcija je usporena',
'actionthrottledtext'  => 'Kao anti-spam mjera, ograničene su vam izmjene u određenom vremenu, i trenutačno ste dostigli to ograničenje. Pokušajte ponovo poslije nekoliko minuta.',
'protectedpagetext'    => 'Ova stranica je zaključana da bi se spriječile izmjene.',
'viewsourcetext'       => 'Možete vidjeti i kopirati izvorni tekst ove stranice:',
'protectedinterface'   => 'Ova stranica je zaštićena jer sadrži tekst MediaWiki programa.',
'editinginterface'     => "'''Upozorenje:''' Mijenjate stranicu koja sadrži aktivan tekst programa.
Promjene na ovoj stranici dovode i do promjena za druge korisnike.
Za prijevode, molimo Vas koristite [http://translatewiki.net/wiki/Main_Page?setlang=bs Betawiki], projekt prijevoda za MediaWiki.",
'sqlhidden'            => '(SQL pretraga sakrivena)',
'cascadeprotected'     => 'Uređivanje ove sranice je zabranjeno jer sadrži {{PLURAL:$1|stranicu zaštićeu|stranice zaštićene}} od uređivanja iz razloga:
$2',
'namespaceprotected'   => "Vi nemate dozvulu da mijenjate stranicu '''$1'''.",
'customcssjsprotected' => 'Nemate dozvolu za mijenjanje ove stranice jer sadrži osobne postavke nekog drugog korisnika.',
'ns-specialprotected'  => 'Specijalne stranice se ne mogu uređivati.',
'titleprotected'       => "Naslov stranice je zaštićen od postavljanja od strane korisnika [[User:$1|$1]].
Iz razloga ''$2''.",

# Virus scanner
'virus-badscanner'     => 'Loša konfiguracija: nepoznati anti-virus program: <i>$1</i>',
'virus-scanfailed'     => 'kontrolisani fajlovi (code $1)',
'virus-unknownscanner' => 'nepoznati anti-virus program:',

# Login and logout pages
'logouttitle'                => 'Odjavite se',
'logouttext'                 => '<strong>Sad ste odjavljeni.</strong><br />
Možete nastaviti da koristite {{SITENAME}} anonimno, ili se ponovo prijaviti
kao isti ili kao drugi korisnik.  Obratite pažnju da neke stranice mogu nastaviti da se prikazuju kao da ste još uvijek prijavljeni, dok ne očistite keš svog brauzera.',
'welcomecreation'            => '<h2>Dobro došli, $1!</h2><p>Vaš nalog je napravljen.
Ne zaboravite da prilagodite sebi svoja podešavanja.',
'loginpagetitle'             => 'Prijavljivanje',
'yourname'                   => 'Korisničko ime:',
'yourpassword'               => 'Šifra:',
'yourpasswordagain'          => 'Ponovite lozinku',
'remembermypassword'         => 'Zapamti šifru za iduće posjete',
'yourdomainname'             => 'Vaš domen',
'externaldberror'            => 'Došlo je do greške pri vanjskoj autorizaciji baze podataka ili vam nije dopušteno osvježavanje Vašeg vanjskog korisničkog računa.',
'login'                      => 'Prijavi se',
'nav-login-createaccount'    => 'Prijavi se / Registruj se',
'loginprompt'                => "Morate imati kolačiće ('''cookies''') omogućene da biste se prijavili na {{SITENAME}}.",
'userlogin'                  => 'Prijavi se / Registruj se',
'logout'                     => 'Odjavi me',
'userlogout'                 => 'Odjavi me',
'notloggedin'                => 'Niste prijavljeni',
'nologin'                    => 'Nemate korisničko ime? $1.',
'nologinlink'                => 'Napravite nalog',
'createaccount'              => 'Napravi nalog',
'gotaccount'                 => 'Imate nalog? $1.',
'gotaccountlink'             => 'Prijavi se',
'createaccountmail'          => 'e-poštom',
'badretype'                  => 'Lozinke koje ste unijeli se ne poklapaju.',
'userexists'                 => 'Korisničko ime koje ste unijeli je već u upotrebi.
Molimo Vas da izaberete drugo ime.',
'youremail'                  => 'E-pošta *',
'username'                   => 'Korisničko ime:',
'uid'                        => 'Korisnički ID:',
'prefs-memberingroups'       => 'Član {{PLURAL:$1|grupe|grupa}}:',
'yourrealname'               => 'Vaše pravo ime *',
'yourlanguage'               => 'Jezik:',
'yournick'                   => 'Nadimak (za potpise):',
'badsig'                     => 'Loš sirovi potpis.
Provjerite HTML tagove.',
'badsiglength'               => 'Potpis je predug.
Mora biti ispod $1 {{PLURAL:$1|karakter|karaktera}}.',
'email'                      => 'E-mail',
'prefs-help-realname'        => 'Pravo ime nije obavezno.
Ako izaberete da date ime, biće korišteno za pripisivanje za vaš rad.',
'loginerror'                 => 'Greška pri prijavljivanju',
'prefs-help-email'           => 'E-mail adresa je opcionalna, unesena adresa Vam omogućava da Vam se pošalje nova lozinka u slučaju da je izgubite ili zaboravite.
Također omogućuje drugim korisnicima da vas kontaktiraju preko vaše korisničke stranice ili stranice za razgovor bez otkrivanja vašeg identiteta.',
'prefs-help-email-required'  => 'Neophodno je navesti e-mail adresu.',
'nocookiesnew'               => "Korisnički nalog je napravljen, ali niste prijavljeni.  {{SITENAME}} koristi kolačiće (''cookies'') da bi se korisnici prijavili.  Vi ste onemogućili kolačiće na Vašem kompjuteru.  molimo Vas da ih omogućite, a onda se prijavite sa svojim novim korisničkim imenom i lozinkom.",
'nocookieslogin'             => "{{SITENAME}} koristi kolačiće (''cookies'') da bi se korisnici prijavili.  Vi ste onemogućili kolačiće na Vašem kompjuteru.  Molimo Vas da ih omogućite i da pokušate ponovo sa prijavom.",
'noname'                     => 'Niste izabrali ispravno korisničko ime.',
'loginsuccesstitle'          => 'Prijavljivanje uspješno',
'loginsuccess'               => "'''Sad ste prijavljeni na {{SITENAME}} kao \"\$1\".'''",
'nosuchuser'                 => 'Ne postoji korisnik sa imenom "$1". Provjerite vaše kucanje, ili [[Special:UserLogin/signup|napravite novi korisnički račun]].',
'nosuchusershort'            => 'Ne postoji korisnik sa imenom "<nowiki>$1</nowiki>".
Provjerite da li ste dobro ukucali.',
'nouserspecified'            => 'Morate izabrati korisničko ime.',
'wrongpassword'              => 'Unijeli ste neispravnu lozinku.  Molimo Vas da pokušate ponovo.',
'wrongpasswordempty'         => 'Lozinka je bila prazna.  Molimo Vas da pokušate ponovo.',
'passwordtooshort'           => 'Vaša šifra je prekratka.
Šifra mora imati najmanje {{PLURAL:$1|1 znak|$1 znakova}} i mora se razlikovati od Vašeg korisničkog imena.',
'mailmypassword'             => 'Pošalji mi novu šifru',
'passwordremindertitle'      => '{{SITENAME}} podsjetnik za lozinku',
'passwordremindertext'       => 'Neko (vjerovatno Vi, sa IP adrese $1)
je zahtjevao da vam pošaljemo novu {{SITENAME}} lozinku za prijavljivanje na {{SERVERNAME}} ($4).
Lozinka za korisnika "$2" je sad "$3".
Sad treba da se prijavite i promjenite lozinku.

Ako je neko drugi napravio ovaj zahtjev ili ako ste se sjetili vaše lozinke i
ne želite više da je promjenite, možete da ignorišete ovu poruku i da nastavite koristeći
vašu staru lozinku.',
'noemail'                    => 'Ne postoji adresa e-pošte za korisnika "$1".',
'passwordsent'               => 'Nova lozinka je poslata na adresu e-pošte
korisnika "$1".
Molimo Vas da se prijavite pošto je primite.',
'blocked-mailpassword'       => 'Da bi se spriječila nedozvoljena akcija, vašoj IP adresi je onemogućeno uređivanje stranica kao i mogućnost zahtijevanje nove lozinke.',
'eauthentsent'               => 'Na navedenu adresu poslan je e-mail s potvrdom. 
Prije nego što pošaljemo daljnje poruke, molimo vas da otvorite e-mail i slijedite u njemu sadržana uputstva da potvrdite da ste vi kreirali korisnički račun.',
'throttled-mailpassword'     => 'Već Vam je poslan e-mail za promjenu lozinke u {{PLURAL:$1|zadnjih sat vremena|zadnja $1 sata|zadnjih $1 sati}}.
Da bi se spriječila zloupotreba, može se poslati samo jedan e-mail za promjenu lozinke {{PLURAL:$1|svakih sat vremena|svaka $1 sata|svakih $1 sati}}.',
'mailerror'                  => 'Greška pri slanju e-pošte: $1',
'acct_creation_throttle_hit' => 'Žao nam je, već ste napravili {{PLURAL:$1|1 račun|$1 računa}}.
Ne možete praviti više računa.',
'emailauthenticated'         => 'Vaša e-mail adresa je autentificirana na $2 u $3.',
'emailnotauthenticated'      => 'Vaša e-mail adresa još nije autentificirana.
Nijedan e-mail neće biti poslan za bilo koju uslugu od slijedećih.',
'noemailprefs'               => 'Unesite e-mail adresu za osposobljavanje slijedećih usluga.',
'emailconfirmlink'           => 'Potvrdite Vašu e-mail adresu',
'invalidemailaddress'        => 'Ova e-mail adresa ne može biti prihvaćena jer je u neodgovarajućem obliku.
Molimo vas da unesete ispravnu adresu ili ostavite prazno polje.',
'accountcreated'             => 'Korisnički račun je napravljen',
'accountcreatedtext'         => 'Korisnički račun za $1 je napravljen.',
'createaccount-title'        => 'Pravljenje korisničkog računa za {{SITENAME}}',
'createaccount-text'         => 'Neko je napravio korisnički račun za vašu e-mail adresu na {{SITENAME}} ($4) sa imenom "$2", i sa šifrom "$3".
Trebali biste se prijaviti i promjeniti šifru.

Možete ignorisati ovu poruku, ako je korisnički račun napravljen greškom.',
'login-throttled'            => 'Previše puta ste pokušali unijeti šifru za korisnički račun.
Molimo vas da sačekate prije nego što pokušate ponovo.',
'loginlanguagelabel'         => 'Jezik: $1',

# Password reset dialog
'resetpass'                 => 'Promijeni ili resetuj korisničku šifru',
'resetpass_announce'        => 'Prijavili ste se sa privremenim kodom koji ste dobili na e-mail.
Da biste završili prijavu, morate unijeti novu šifru ovdje:',
'resetpass_text'            => '<!-- Unesi tekst ovdje -->',
'resetpass_header'          => 'Obnovi šifru',
'resetpass_submit'          => 'Odredi šifru i prijavi se',
'resetpass_success'         => 'Vaša šifra je uspiješno promjenjena! Prijava u toku...',
'resetpass_bad_temporary'   => 'Nevažeća privremena šifra.
Možda ste već promjenili šifru ili ste zatražili novu privremenu šifru.',
'resetpass_forbidden'       => 'Šifre ne mogu biti promjenjene',
'resetpass_missing'         => 'Forma ne sadrži tražene podatke.',
'resetpass-no-info'         => 'Morate biti prijavljeni da bi ste pristupili ovoj stranici direktno.',
'resetpass-submit-loggedin' => 'Promijeni šifru',
'resetpass-wrong-oldpass'   => 'Privremena ili trenutna šifra nije validna. 
Možda ste već uspješno promijenili Vašu šifru ili ste tražili novu privremenu šifru.',
'resetpass-temp-password'   => 'Privremena šifra:',

# Edit page toolbar
'bold_sample'     => 'Podebljan tekst',
'bold_tip'        => 'Podebljan tekst',
'italic_sample'   => 'Kurzivan tekst',
'italic_tip'      => 'Kurzivan tekst',
'link_sample'     => 'Naslov poveznice',
'link_tip'        => 'Unutrašnja poveznica',
'extlink_sample'  => 'http://www.primjer.com opis adrese',
'extlink_tip'     => 'Spoljašnja poveznica (zapamti prefiks http://)',
'headline_sample' => 'Naslov',
'headline_tip'    => 'Podnaslov',
'math_sample'     => 'Unesite formulu ovdje',
'math_tip'        => 'Matematička formula (LaTeX)',
'nowiki_sample'   => 'Dodaj neformatirani tekst ovdje',
'nowiki_tip'      => 'Ignoriši viki formatiranje teksta',
'image_sample'    => 'ime_slike.jpg',
'image_tip'       => 'Uklopljena slika',
'media_sample'    => 'ime_medija_fajla.ogg',
'media_tip'       => 'Putanja ka multimedijalnom fajlu',
'sig_tip'         => 'Vaš potpis sa trenutnim vremenom',
'hr_tip'          => 'Horizontalna linija (koristite oskudno)',

# Edit pages
'summary'                          => 'Sažetak',
'subject'                          => 'Tema/naslov',
'minoredit'                        => 'Ovo je mala izmjena',
'watchthis'                        => 'Prati ovu stranicu',
'savearticle'                      => 'Sačuvaj',
'preview'                          => 'Pregled stranice',
'showpreview'                      => 'Prikaži izgled',
'showlivepreview'                  => 'Pregled uživo',
'showdiff'                         => 'Prikaži izmjene',
'anoneditwarning'                  => 'Niste prijavljeni. Vaša IP adresa će biti zapisana.',
'missingsummary'                   => "'''Napomena:''' Niste unijeli sažetak izmjene.
Ako kliknete na Sačuvaj, Vaša izmjena će biti sačuvana bez sažetka.",
'missingcommenttext'               => 'Molimo unesite komentar ispod.',
'missingcommentheader'             => "'''Podsjetnik:''' Niste napisati temu/naslov za ovaj komentar.
Ako ponovo kliknete na '''Sačuvaj članak''', vaše izmjene će biti spašene bez teme/naslova.",
'summary-preview'                  => 'Pregled sažetka',
'subject-preview'                  => 'Pregled tema/naslova',
'blockedtitle'                     => 'Korisnik je blokiran',
'blockedtext'                      => "<big>'''Vaše korisničko ime ili IP adresa je blokirana.'''</big>

Blokada izvršena od strane $1.
Dati razlog je slijedeći: ''$2''.

*Početak blokade: $8
*Kraj perioda blokade: $6
*Ime blokiranog korisnika: $7

Možete kontaktirati $1 ili nekog drugog [[{{MediaWiki:Grouppage-sysop}}|administratora]] da biste razgovarali o blokadi.

Ne možete koristiti opciju ''Pošalji e-mail korisniku'' osim ako niste unijeli e-mail adresu u [[Special:Preferences|Vaše postavke]].
Vaša trenutna IP adresa je $3, a oznaka blokade je #$5.
Molimo Vas da navedete gornje podatke pri zahtjevu za deblokadu.",
'autoblockedtext'                  => 'Vaša IP adresa je automatski blokirana jer je korištena od strane drugog korisnika, a blokirao ju je $1.
Naveden je slijedeći razlog:

:\'\'$2\'\'

* Početak blokade: $8
* Kraj blokade: $6
* Blokirani korisnik: $7

Možete kontaktirati $1 ili nekog drugog iz grupe [[{{MediaWiki:Grouppage-sysop}}|administratora]] i zahtijevati da Vas deblokira.

Zapamtite da ne možete koristiti opciju "pošalji e-mail ovom korisniku" sve dok ne unesete validnu e-mail adresu pri registraciji u Vašim [[Special:Preferences|korisničkim postavkama]] te Vas ne spriječava ga je koristite.

Vaša trenutna IP adresa je $3, a ID blokade je $5.
Molimo da navedete sve gore navedene detalje u zahtjevu za deblokadu.',
'blockednoreason'                  => 'razlog nije naveden',
'blockedoriginalsource'            => "Izvor '''$1''' je prikazan ispod:",
'blockededitsource'                => "Sadržaj '''vaših izmjena''' na '''$1''' je prikazan ispod:",
'whitelistedittitle'               => 'Obavezno je prijavljivanje za uređivanje',
'whitelistedittext'                => 'Da bi ste uređivali stranice, morate se $1.',
'confirmedittitle'                 => 'Potvrda e-maila je potrebna za izmjene',
'confirmedittext'                  => 'Morate potvrditi Vašu e-mail adresu prije nego počnete mijenjati stranice.
Molimo da postavite i verifikujete Vašu e-mail adresu putem Vaših [[Special:Preferences|korisničkih opcija]].',
'nosuchsectiontitle'               => 'Nema takve sekcije',
'nosuchsectiontext'                => 'Pokušali ste uređivati sekciju koja ne postoji.
Pošto sekcija $1 ne postoji, nije moguće spremiti Vaše promjene.',
'loginreqtitle'                    => 'Potrebno je prijavljivanje',
'loginreqlink'                     => 'prijavi se',
'loginreqpagetext'                 => 'Morate $1 da bi ste vidjeli druge strane.',
'accmailtitle'                     => 'Lozinka poslata.',
'accmailtext'                      => "Lozinka za nalog '$1' je poslata na adresu $2.",
'newarticle'                       => '(Novi)',
'newarticletext'                   => "'''Došli ste na stranicu koja još nema sadržaja.'''<br />
*Ako želite unijeti sadržaj, počnite tipkati u prozor ispod ovog teksta.
*Ako vam treba pomoć, idite na [[{{MediaWiki:Helppage}}|stranicu za pomoć]].
*Ako ste ovamo dospjeli slučajno, kliknite dugme \"Nazad\" (''Back'') u svom internet pregledaču.",
'anontalkpagetext'                 => "----''Ovo je stranica za razgovor za anonimnog korisnika koji još nije napravio nalog ili ga ne koristi.  Zbog toga moramo da koristimo brojčanu IP adresu kako bismo odentifikovali njega ili nju.  Takvu adresu može dijeliti više korisnika.  Ako ste anonimni korisnik i mislite da su vam upućene nebitne primjedbe, molimo Vas da [[Special:UserLogin|napravite nalog ili se prijavite]] da biste izbjegli buduću zabunu sa ostalim anonimnim korisnicima.''",
'noarticletext'                    => "<div style=\"border: 1px solid #ccc; padding: 7px;\">'''{{SITENAME}} još nema ovaj članak.'''
* Da započnete članak, kliknite '''[{{fullurl:{{NAMESPACE}}:{{PAGENAME}}|action=edit}} uredite ovu stranicu]'''.
* [[Special:Search/{{PAGENAME}}|Pretraži {{PAGENAME}}]] u ostalim člancima
----
* '''Ukoliko ste napravili ovaj članak u posljednjih nekoliko minuta i još se nije pojavio, postoji mogućnost da je server u zastoju zbog osvježavanja baze podataka.''' Molimo Vas da probate sa <span class=\"plainlinks\">[{{fullurl:{{PAGENAME}}|action=purge}} osvježavanjem]<span> ili sačekajte i provjerite kasnije ponovo prije ponovnog pravljenja članka.
* Ako ste napravili članak pod ovim imenom ranije, moguće je da je bio izbrisan.  Potražite '''{{FULLPAGENAME}}''' [{{fullurl:Special:Log|type=delete&page={{FULLPAGENAMEE}}}} u spisku brisanja].",
'userpage-userdoesnotexist'        => 'Korisnički račun "$1" nije registrovan.
Molimo provjerite da li želite napraviti/izmijeniti ovu stranicu.',
'clearyourcache'                   => "'''Pažnja: Nakon što sačuvate izmjene, morate \"osvježiti\" keš memoriju vašeg pretraživača da bi ste vidjeli nova podešenja.'''
'''Mozilla / Firefox / Safari:''' držite ''Shift'' tipku i kliknite na ''Reload'' dugme ili ''Ctrl-R'' ili ''Ctrl-F5'' (''Command-R'' na Macintoshu);
'''Konqueror:''' klikni na ''Reload'' ili pritisnite dugme ''F5'';
'''Opera:''' očistite \"keš\" preko izbornika ''Tools → Preferences'';
'''Internet Explorer:''' držite tipku ''Ctrl'' i kliknite na ''Refresh'' ili pritisnite ''Ctrl-F5''.",
'usercssjsyoucanpreview'           => "<strong>Pažnja:</strong> Koristite 'Prikaži izgled' dugme da testirate svoj novi CSS/JS prije nego što sačuvate.",
'usercsspreview'                   => "'''Zapamtite ovo je samo izgled Vašeg CSS-a.'''
'''Ovaj pregled još uvijek nije sačuvan!'''",
'userjspreview'                    => "'''Zapamtite ovo je samo izgled vaše JavaScript-e, još uvijek nije sačuvan!'''",
'userinvalidcssjstitle'            => "'''Upozorenje:''' Ne postoji interfejs pod imenom \"\$1\".
Ne zaboravite da imena stranica s .css i .js kodom počinju malim slovom, npr. {{ns:user}}:Foo/monobook.css, a ne {{ns:user}}:Foo/Monobook.css.",
'updated'                          => '(Osvježeno)',
'note'                             => '<strong>Pažnja:</strong>',
'previewnote'                      => '<strong>Ovo je samo pregled; izmjene stranice nisu još sačuvane!</strong>',
'previewconflict'                  => 'Ovaj pregled reflektuje tekst u gornjem polju
kako će izgledati ako pritisnete "Sačuvaj članak".',
'session_fail_preview'             => '<strong>Izvinjavamo se! Nismo mogli obraditi vašu izmjenu zbog gubitka podataka o prijavi. Molimo pokušajte ponovno. Ako i dalje ne bude radilo, pokušajte se [[Special:UserLogout|odjaviti]] i ponovno prijaviti.</strong>',
'session_fail_preview_html'        => "<strong>Žao nam je! Nismo mogli da obradimo vašu izmjenu zbog gubitka podataka.</strong>

''Zbog toga što {{SITENAME}} ima omogućen izvorni HTML, predpregled je sakriven kao predostrožnost protiv JavaScript napada.''

<strong>Ako ste pokušali da napravite pravu izmjenu, molimo pokušajte ponovo. Ako i dalje ne radi, pokušajte da se [[Special:UserLogout|odjavite]] i ponovo prijavite.</strong>",
'token_suffix_mismatch'            => '<strong>Vaša izmjena nije prihvaćena jer je Vaš web preglednik ubacio znakove interpunkcije u token uređivanja.
Izmjena je odbačena da bi se spriječilo uništavanje teksta stranice.
To se događa ponekad kad korisite problematični anonimni proxy koji je baziran na web-u.</strong>',
'editing'                          => 'Uređujete $1',
'editingsection'                   => 'Uređujete $1 (dio)',
'editingcomment'                   => 'Uređujete $1 (komentar)',
'editconflict'                     => 'Sukobljenje izmjene: $1',
'explainconflict'                  => 'Neko drugi je promjenio ovu stranicu otkad ste Vi počeli da je mjenjate.
Gornje tekstualno polje sadrži tekst stranice koji trenutno postoji.
Vaše izmjene su prikazane u donjem tekstu.
Moraćete da unesete svoje promjene u postojeći tekst.
<b>Samo</b> tekst u gornjem tekstualnom polju će biti snimljen kad
pritisnete "Sačuvaj".<br />',
'yourtext'                         => 'Vaš tekst',
'storedversion'                    => 'Uskladištena verzija',
'nonunicodebrowser'                => '<strong>UPOZORENJE: Vaš preglednik ne podržava Unicode zapis znakova.
Molimo Vas promijenite ga prije sljedećeg uređivanja članaka. Znakovi koji nisu po ASCII standardu će se u prozoru za izmjene pojaviti kao heksadecimalni kodovi.</strong>',
'editingold'                       => '<strong>PAŽNJA:  Vi mijenjate stariju
reviziju ove stranice.
Ako je snimite, sve promjene učinjene od ove revizije će biti izgubljene.</strong>',
'yourdiff'                         => 'Razlike',
'copyrightwarning'                 => 'Za sve priloge poslate na projekat {{SITENAME}} smatramo da su objavljeni pod $2 (konsultujte $1 za detalje).
Ukoliko ne želite da vaši članci budu podložni izmjenama i slobodnom rasturanju i objavljivanju,
nemojte ih slati ovdje. Takođe, slanje članka podrazumijeva i vašu izjavu da ste ga napisali sami, ili da ste ga kopirali iz izvora u javnom domenu ili sličnog slobodnog izvora.

<strong>NEMOJTE SLATI RAD ZAŠTIĆEN AUTORSKIM PRAVIMA BEZ DOZVOLE AUTORA!</strong>',
'copyrightwarning2'                => 'Zapamtite da svaki doprinos na stranici {{SITENAME}} može biti izmijenjen, promijenjen ili uklonjen od strane ostalih korisnika. Ako ne želite da ovo desi sa Vašim tekstom, onda ga nemojte slati ovdje.<br />
Takođe nam garantujete da ste ovo Vi napisali, ili da ste ga kopirali iz javne domene ili sličnog slobodnog izvora informacija (pogledajte $1 za više detalja).
<strong>NE ŠALJITE AUTORSKIM PRAVOM ZAŠTIĆENE TEKSTOVE BEZ DOZVOLE!</strong>',
'longpagewarning'                  => '<strong>PAŽNJA: Ova stranica ima $1 kilobajta; neki
preglednici mogu imati problema kad uređujete stranice skoro ili veće od 32 kilobajta.
Molimo Vas da razmotrite razbijanje stranice na manje dijelove.</strong>',
'longpageerror'                    => '<strong>Greška: Tekst, koji ste poslali, je dug $1 kilobajta, što je veće od maksimuma, koji iznosi $2 kilobajta. 
Stranica ne može biti spremljena.</strong>',
'readonlywarning'                  => '<strong>PAŽNJA: Baza je zaključana zbog održavanja, tako da nećete moći da sačuvate svoje izmjene za sada. 
Možda želite da kopirate i nalijepite tekst u tekst editor i sačuvate ga za kasnije.</strong>

Administrator koji je zaključao bazu je naveo slijedeće objašnjenje: $1',
'protectedpagewarning'             => '<strong>PAŽNJA: Ova stranica je zaključana tako da samo korisnici sa administratorskim privilegijama mogu da je mijenjaju.</strong>',
'semiprotectedpagewarning'         => "'''Pažnja:''' Ova stranica je zaključana tako da je samo registrovani korisnici mogu uređivati.",
'cascadeprotectedwarning'          => "'''Upozorenje:''' Ova stranica je zaključana tako da je samo administratori mogu mijenjati, jer je ona uključena u {{PLURAL:$1|ovu, lančanu povezanu, zaštićenu stranicu|sljedeće, lančano povezane, zaštićene stranice}}:",
'titleprotectedwarning'            => '<strong>UPOZORENJE: Ova stranica je zaključana i samo određeni korisnici je mogu napraviti.</strong>',
'templatesused'                    => 'Šabloni koji su upotrebljeni na ovoj stranici:',
'templatesusedpreview'             => 'Šabloni prikazani u ovom pregledu:',
'templatesusedsection'             => 'Šabloni korišteni u ovoj sekciji:',
'template-protected'               => '(zaštićeno)',
'template-semiprotected'           => '(polu-zaštićeno)',
'hiddencategories'                 => 'Ova stranica pripada u {{PLURAL:$1|jednu skrivenu kategoriju|$1 skrivene kategorije|$1 skrivenih kategorija}}:',
'edittools'                        => '<!-- Ovaj tekst će biti prikazan ispod formi za uređivanje i postavljanje. -->',
'nocreatetitle'                    => 'Pravljenje stranica ograničeno',
'nocreatetext'                     => 'Na {{SITENAME}} je zabranjeno postavljanje novih stranica. 
Možete se vratiti i uređivati već postojeće stranice ili se [[Special:UserLogin|prijaviti ili otvoriti korisnički račun]].',
'nocreate-loggedin'                => 'Nemate dopuštenje da kreirate nove stranice.',
'permissionserrors'                => 'Greške pri odobrenju',
'permissionserrorstext'            => 'Nemate dopuštenje da to uradite, iz {{PLURAL:$1|slijedećeg razloga|slijedećih razloga}}:',
'permissionserrorstext-withaction' => 'Nemate dopuštenje da $2, iz {{PLURAL:$1|slijedećeg|slijedećih}} razloga:',
'recreate-deleted-warn'            => "'''Upozorenje: Postavljate stranicu koja je prethodno brisana.'''

Razmotrite je li nastavljanje uređivanja ove stranice u skladu s pravilima. Za vašu informaciju slijedi evidencija brisanja s obrazloženjem za prethodno brisanje:",
'deleted-notice'                   => 'Ova stranica je obrisana.
Zapis brisanja stranice je prikazan ispod kao referenca.',
'deletelog-fulllog'                => 'Vidi potpuni zapis',
'edit-hook-aborted'                => 'Izmjena je poništena putem interfejsa.
Nije ponuđeno nikakvo objašnjenje.',
'edit-gone-missing'                => 'Stranica se nije mogla osvježiti.
Izgleda da je obrisana.',
'edit-conflict'                    => 'Sukob izmjena.',
'edit-no-change'                   => 'Vaša izmjena je ignorirana, jer nije bilo promjena teksta stranice.',
'edit-already-exists'              => 'Stranica nije mogla biti kreirana.
Izgleda da već postoji.',

# Parser/template warnings
'expensive-parserfunction-warning'        => 'Upozorenje: Ova stranica sadrži previše poziva opterećujućih parserskih funkcija.

Trebalo bi imati manje od $2 {{PLURAL:$2|poziv|poziva}}, a sad ima {{PLURAL:$1|$1 poziv|$1 poziva}}.',
'expensive-parserfunction-category'       => 'Stranice sa previše poziva parserskih funkcija',
'post-expand-template-inclusion-warning'  => 'Pažnja: Šablon koji je uključen je prevelik.
Neki šabloni neće biti uključeni.',
'post-expand-template-inclusion-category' => 'Stranice gdje su uključeni šabloni preveliki',
'post-expand-template-argument-warning'   => 'Upozorenje: Ova stranica sadrži najmanje jedan argument u šablonu koji ima preveliku veličinu.
Ovakvi argumenti se trebaju izbjegavati.',
'post-expand-template-argument-category'  => 'Stranice koje sadrže nedostajuće argumente u šablonu',
'parser-template-loop-warning'            => 'Otkrivena kružna greška u šablonu: [[$1]]',
'parser-template-recursion-depth-warning' => 'Dubina uključivanja šablona prekoračena ($1)',

# "Undo" feature
'undo-success' => 'Izmjena se može vratiti.
Molimo da provjerite usporedbu ispod da budete sigurni da to želite učiniti, a zatim spremite promjene da bi ste završili vraćanje izmjene.',
'undo-failure' => 'Izmjene se ne mogu vratiti zbog konflikta sa izmjenama u međuvremenu.',
'undo-norev'   => 'Izmjena se ne može vratiti jer ne postoji ranija ili je obrisana.',
'undo-summary' => 'Vraćena izmjena $1 [[Special:Contributions/$2|korisnika $2]] ([[User talk:$2|razgovor]])',

# Account creation failure
'cantcreateaccounttitle' => 'Nije moguće napraviti korisnički račun',
'cantcreateaccount-text' => "Pravljenje korisničkog računa sa ove IP adrese ('''$1''') je blokirano od strane [[User:$3|$3]].

Razlog koji je naveo $3 je ''$2''",

# History pages
'viewpagelogs'           => 'Pogledaj protokol ove stranice',
'nohistory'              => 'Ne postoji istorija izmjena za ovu stranicu.',
'currentrev'             => 'Trenutna revizija',
'currentrev-asof'        => 'Trenutna revizija na dan $1',
'revisionasof'           => 'Revizija od $1',
'revision-info'          => 'Izmjena od $1 korisnika $2', # Additionally available: $3: revision id
'previousrevision'       => '←Starije izmjene',
'nextrevision'           => 'Novija izmjena →',
'currentrevisionlink'    => 'Trenutna verzija',
'cur'                    => 'tren',
'next'                   => 'sled',
'last'                   => 'posl',
'page_first'             => 'prva',
'page_last'              => 'zadnja',
'histlegend'             => 'Odabir razlika: označite radio dugme verzija koje uspoređujete i pritistnite enter ili dugme na dnu. <br />
Objašnjenje: (tren) = razlika sa trenutnom verzijom,
(posl) = razlika sa prethodnom verzijom, M = mala izmjena.',
'history-fieldset-title' => 'Pretraga historije',
'deletedrev'             => '[izbrisano]',
'histfirst'              => 'Najstarije',
'histlast'               => 'Najnovije',
'historysize'            => '({{PLURAL:$1|1 bajt|$1 bajtova}})',
'historyempty'           => '(prazno)',

# Revision feed
'history-feed-title'          => 'Historija izmjena',
'history-feed-description'    => 'Historija promjena ove stranice na wikiju',
'history-feed-item-nocomment' => '$1 u $2', # user at time
'history-feed-empty'          => 'Tražena stranica ne postoji.
Moguće da je izbrisana sa wikija, ili preimenovana.
Pokušajte [[Special:Search|pretražiti wiki]] za slične stranice.',

# Revision deletion
'rev-deleted-comment'         => '(komentar uklonjen)',
'rev-deleted-user'            => '(korisničko ime uklonjeno)',
'rev-deleted-event'           => '(stavka zapisa obrisana)',
'rev-deleted-text-permission' => '<div class="mw-warning plainlinks">
Revizija ove stranice je uklonjena iz javne arhive.
Detalje možete vidjeti u [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} zapisu brisanja].</div>',
'rev-deleted-text-view'       => '<div class="mw-warning plainlinks">
Revizija ove stranice je uklonjena iz javne arhive.
Kao administrator na {{SITENAME}} Vi je možete vidjeti;
detalji o tome se mogu vidjeti u [{{fullurl:Special:Log/delete|page={{FULLPAGENAMEE}}}} zapisu brisanja].</div>',
'rev-delundel'                => 'pokaži/sakrij',
'revisiondelete'              => 'Obriši/vrati revizije',
'revdelete-nooldid-title'     => 'Nije unesena tačna revizija',
'revdelete-nooldid-text'      => 'Niste precizno odredili odredišnu reviziju/revizije da se izvrši ova funkcija, ili ta revizija nepostoji, ili pokušavate sakriti trenutnu reviziju.',
'revdelete-selected'          => "'''{{PLURAL:$2|Odabrana revizija|Odabrane revizije}} od [[:$1]]:'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Označena stavka zapisa|Označene stavke zapisa}}:'''",
'revdelete-text'              => "'''Obrisane revizije i događaji će i dalje biti vidljivi u hisoriji stranice i zapisima, ali dijelovi njenog sadržaja neće biti dostupni javnosti.'''

Drugi administratori projekta {{SITENAME}} će i dalje moći pristupiti sakrivenom sadržaju i mogu ga ponovo vratiti kroz ovaj interfejs, osim ako nisu postavljena dodatna ograničenja.",
'revdelete-legend'            => 'Postavi ograničenja vidljivosti',
'revdelete-hide-text'         => 'Sakrij tekst revizije',
'revdelete-hide-name'         => 'Sakrij akciju i cilj',
'revdelete-hide-comment'      => 'Sakrij izmjene komentara',
'revdelete-hide-user'         => 'Sakrij korisničko ime urednika/IP',
'revdelete-hide-restricted'   => 'Primijeni ova ograničenja na Administratore i zaključaj ovaj interfejs',
'revdelete-suppress'          => 'Sakrij podatke od administratora kao i od drugih',
'revdelete-hide-image'        => 'Sakrij sadržaj datoteke',
'revdelete-unsuppress'        => 'Ukloni ograničenja na vraćenim revizijama',
'revdelete-log'               => 'Komentar evidencije:',
'revdelete-submit'            => 'Primijeni na odabranu reviziju',
'revdelete-logentry'          => 'promijenjena vidljivost revizije [[$1]]',
'logdelete-logentry'          => 'promijenjena vidljivost događaja [[$1]]',
'revdelete-success'           => "'''Vidljivost revizije uspješno postavljena.'''",
'logdelete-success'           => "'''Vidljivost evidencije uspješno postavljena.'''",
'revdel-restore'              => 'Promijeni dostupnost',
'pagehist'                    => 'Historija stranice',
'deletedhist'                 => 'Izbrisana historija',
'revdelete-content'           => 'sadržaj',
'revdelete-summary'           => 'sažetak',
'revdelete-uname'             => 'korisničko ime',
'revdelete-restricted'        => 'primijenjena ograničenja za administratore',
'revdelete-unrestricted'      => 'uklonjena ograničenja za administratore',
'revdelete-hid'               => 'sakrij $1',
'revdelete-unhid'             => 'otkrij $1',
'revdelete-log-message'       => '$1 za $2 {{PLURAL:$2|izmjenu|izmjene|izmjena}}',
'logdelete-log-message'       => '$1 za $2 {{PLURAL:$2|događaj|događaja}}',

# Suppression log
'suppressionlog'     => 'Zapisi sakrivanja',
'suppressionlogtext' => 'Ispod je spisak brisanja i blokiranja koja su povezana sa sadržajem koji je sakriven od administratora. Vidi [[Special:IPBlockList|spisak IP blokiranja]] za pregled trenutno važećih blokada.',

# History merging
'mergehistory'                     => 'Spoji historije stranice',
'mergehistory-header'              => 'Ova stranica Vam omogućuje spajanje revizija historije neke izvorne stranice u novu stranicu. Zapamtite da će ova promjena ostaviti nepromjenjen sadržaj historije stranice.',
'mergehistory-box'                 => 'Spajanje revizija za dvije stranice:',
'mergehistory-from'                => 'Izvorna stranica:',
'mergehistory-into'                => 'Odredišna stranica:',
'mergehistory-list'                => 'Historija izmjena koja se može spojiti',
'mergehistory-merge'               => 'Slijedeće revizije stranice [[:$1]] mogu biti spojene u [[:$2]].
Koristite dugmiće u stupcu da bi ste spojili revizije koje su napravljene prije navedenog vremena.
Korištenje navigacionih linkova će resetovati ovaj stupac.',
'mergehistory-go'                  => 'Prikaži izmjene koje se mogu spojiti',
'mergehistory-submit'              => 'Spoji revizije',
'mergehistory-empty'               => 'Nema revizija za spajanje.',
'mergehistory-success'             => '$3 {{PLURAL:$3|revizija|revizije|revizija}} stranice [[:$1]] uspješno spojeno u [[:$2]].',
'mergehistory-fail'                => 'Ne može se izvršiti spajanje historije, molimo provjerite opet stranicu i parametre vremena.',
'mergehistory-no-source'           => 'Izvorna stranica $1 ne postoji.',
'mergehistory-no-destination'      => 'Odredišna stranica $1 ne postoji.',
'mergehistory-invalid-source'      => 'Izvorna stranica mora imati validan naslov.',
'mergehistory-invalid-destination' => 'Ciljna stranica mora imati validan naslov.',
'mergehistory-autocomment'         => 'Spoji [[:$1]] u [[:$2]]',
'mergehistory-comment'             => 'Spojeno [[:$1]] u [[:$2]]: $3',
'mergehistory-same-destination'    => 'Izvorne i odredišne stranice ne mogu biti iste',

# Merge log
'mergelog'           => 'Zapis spajanja',
'pagemerge-logentry' => 'spojeno [[$1]] u [[$2]] (sve do $3 revizije)',
'revertmerge'        => 'Vrati spajanje',
'mergelogpagetext'   => 'Ispod je spisak nedavnih spajanja historija stranica.',

# Diffs
'history-title'           => 'Historija izmjena stranice "$1"',
'difference'              => '(Razlika između revizija)',
'lineno'                  => 'Linija $1:',
'compareselectedversions' => 'Uporedite označene verzije',
'visualcomparison'        => 'Vizuelna usporedba',
'wikicodecomparison'      => 'Usporedba wikiteksta',
'editundo'                => 'ukloni ovu izmjenu',
'diff-multi'              => '({{plural:$1|Nije prikazana jedna međuverzija|Nisu prikazane $1 međuverzije|Nije prikazano $1 međuverzija}})',
'diff-movedto'            => 'preusmjereno na $1',
'diff-styleadded'         => 'dodan $1 stil',
'diff-added'              => '$1 dodan',
'diff-changedto'          => 'promijenjeno u $1',
'diff-movedoutof'         => 'uklonjeno iz $1',
'diff-styleremoved'       => '$1 stil uklonjen',
'diff-removed'            => '$1 uklonjen',
'diff-changedfrom'        => 'promijenjeno od $1',
'diff-src'                => 'izvorno',
'diff-withdestination'    => 'sa odredištem $1',
'diff-with'               => '&#32;sa $1 $2',
'diff-with-final'         => '&#32;i $1 $2',
'diff-width'              => 'širina',
'diff-height'             => 'visina',
'diff-p'                  => "'''paragraf'''",
'diff-blockquote'         => "'''blok'''",
'diff-h1'                 => "'''naslov (nivo 1)'''",
'diff-h2'                 => "'''naslov (nivo 2)'''",
'diff-h3'                 => "'''naslov (nivo 3)'''",
'diff-h4'                 => "'''naslov (nivo 4)'''",
'diff-h5'                 => "'''naslov (nivo 5)'''",
'diff-pre'                => "'''formatirani blok'''",
'diff-div'                => "'''element bloka'''",
'diff-ul'                 => "'''neporedani spisak'''",
'diff-ol'                 => "'''poredani spisak'''",
'diff-li'                 => "'''stavka spiska'''",
'diff-table'              => "'''tabela'''",
'diff-tbody'              => "'''sadržaj tabele'''",
'diff-tr'                 => "'''redak'''",
'diff-td'                 => "'''polje'''",
'diff-th'                 => "'''zaglavlje'''",
'diff-br'                 => "'''prijelom'''",
'diff-hr'                 => "'''vodoravna linija'''",
'diff-code'               => "'''računarski kod'''",
'diff-dl'                 => "'''spisak definicija'''",
'diff-dt'                 => "'''definisan pojam'''",
'diff-dd'                 => "'''definicija'''",
'diff-input'              => "'''unos'''",
'diff-form'               => "'''obrazac'''",
'diff-img'                => "'''slika'''",
'diff-span'               => "'''span'''",
'diff-a'                  => "'''poveznica'''",
'diff-i'                  => "'''ukošeno'''",
'diff-b'                  => "'''podebljano'''",
'diff-strong'             => "'''jako'''",
'diff-em'                 => "'''naglašeno'''",
'diff-font'               => "'''slova'''",
'diff-big'                => "'''veliko'''",
'diff-del'                => "'''obrisano'''",
'diff-tt'                 => "'''određena širina'''",
'diff-sub'                => "'''subskipt'''",
'diff-sup'                => "'''faktor'''",
'diff-strike'             => "'''precrtano'''",

# Search results
'searchresults'                    => 'Rezultati pretrage',
'searchresults-title'              => 'Rezultati pretrage za "$1"',
'searchresulttext'                 => 'Za više informacija o pretraživanju {{SITENAME}}, pogledajte [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => 'Tražili ste \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|sve stranice koje počinju sa "$1"]] | [[Special:WhatLinksHere/$1|sve stranice koje vode do "$1"]])',
'searchsubtitleinvalid'            => 'Tražili ste $1',
'noexactmatch'                     => "'''Nema stranice sa imenom \"\$1\".'''

Možete [[:\$1|da napravite članak sa tim naslovom]].

::*'''''<u>Opomena: Nemojte kopirati materijale za koje nemate dozvolu!</u>'''''",
'noexactmatch-nocreate'            => "'''Ne postoji stranica sa naslovom \"\$1\".'''",
'toomanymatches'                   => 'Pronađeno je previše rezultata, molimo pokušajte unijeti konkretniji izraz',
'titlematches'                     => 'Naslov članka odgovara',
'notitlematches'                   => 'Naslov članka ne odgovara.',
'textmatches'                      => 'Tekst stranice odgovara',
'notextmatches'                    => 'Tekst članka ne odgovara',
'prevn'                            => 'prethodnih $1',
'nextn'                            => 'slijedećih $1',
'viewprevnext'                     => 'Pogledaj ($1) ($2) ($3).',
'searchmenu-legend'                => 'Opcije pretrage',
'searchmenu-exists'                => "'''Postoji stranica pod nazivom \"[[\$1]]\" na ovoj wiki'''",
'searchmenu-new'                   => "'''[[:$1|Napravi]] stranicu ''$1'' na ovoj wiki!'''",
'searchhelp-url'                   => 'Help:Sadržaj',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Pregledaj stranice sa ovim prefiksom]]',
'searchprofile-articles'           => 'Stranice sadržaja',
'searchprofile-articles-and-proj'  => 'Stranice sadržaja i projekata',
'searchprofile-project'            => 'Stranice projekta',
'searchprofile-images'             => 'Datoteke',
'searchprofile-everything'         => 'Sve',
'searchprofile-advanced'           => 'Napredno',
'searchprofile-articles-tooltip'   => 'Pretraga u $1',
'searchprofile-project-tooltip'    => 'Pretraga u $1',
'searchprofile-images-tooltip'     => 'Traži datoteke',
'searchprofile-everything-tooltip' => 'Pretraži sve sadržaje (ukljujući i stranice za razgovor)',
'searchprofile-advanced-tooltip'   => 'Traži u ostalim imenskim prostorima',
'prefs-search-nsdefault'           => 'Pretraga uz pretpostavljeno:',
'prefs-search-nscustom'            => 'Pretraga u ostalim imenskim prostorima:',
'search-result-size'               => '$1 ({{PLURAL:$2|1 riječ|$2 riječi}})',
'search-result-score'              => 'Relevantnost: $1%',
'search-redirect'                  => '(preusmjeravanje $1)',
'search-section'                   => '(sekcija $1)',
'search-suggest'                   => 'Da li ste mislili: $1',
'search-interwiki-caption'         => 'Srodni projekti',
'search-interwiki-default'         => '$1 rezultati:',
'search-interwiki-more'            => '(više)',
'search-mwsuggest-enabled'         => 'sa sugestijama',
'search-mwsuggest-disabled'        => 'bez sugestija',
'search-relatedarticle'            => 'Povezano',
'mwsuggest-disable'                => 'Onemogući AJAX prijedloge',
'searchrelated'                    => 'povezano',
'searchall'                        => 'sve',
'showingresults'                   => "Dole {{PLURAL:$1|je prikazan '''1''' rezultat|su prikazana '''$1''' rezultata|je prikazano '''$1''' rezultata}} počev od '''$2'''.",
'showingresultsnum'                => "Dole {{PLURAL:$3|je prikazan '''1''' rezultat|su prikazana '''$3''' rezultata|je prikazano '''$3''' rezultata}} počev od '''$2'''.",
'showingresultstotal'              => "Ispod {{PLURAL:$4|je prikazan rezultat '''$1''' od '''$3'''|su prikazani rezultati '''$1 - $2''' od ukupno '''$3'''}}",
'nonefound'                        => "'''Pažnja''': neuspješne pretrage su
često izazvane traženjem čestih riječi kao \"je\" ili \"od\",
koje nisu indeksirane, ili navođenjem više od jednog izraza za traženje (samo stranice
koje sadrže sve izraze koji se traže će se pojaviti u rezultatima).",
'search-nonefound'                 => 'Nisu pronađeni rezultati koji odgovaraju upitu.',
'powersearch'                      => 'Traži',
'powersearch-legend'               => 'Napredna pretraga',
'powersearch-ns'                   => 'Pretraga u imenskim prostorima:',
'powersearch-redir'                => 'Spisak preusmjerenja',
'powersearch-field'                => 'Traži',
'search-external'                  => 'Vanjska pretraga',
'searchdisabled'                   => '<p>Izvinjavamo se!  Puno pretraga teksta je privremeno onemogućena.  U međuvremenu, možete koristiti Google za pretragu.  Indeks može biti stariji.',

# Preferences page
'preferences'               => 'Podešavanja',
'mypreferences'             => 'Moje postavke',
'prefs-edits'               => 'Broj izmjena:',
'prefsnologin'              => 'Niste prijavljeni',
'prefsnologintext'          => 'Da biste mogli podešavati korisnička podešavanja, morate <span class="plainlinks">[{{fullurl:Special:UserLogin|returnto=$1}} biti prijavljeni]</span>.',
'prefsreset'                => 'Podešavanja su vraćena na prvotne vrijednosti.',
'qbsettings'                => 'Podešavanja brze palete',
'qbsettings-none'           => 'Nikakva',
'qbsettings-fixedleft'      => 'Pričvršćena lijevo',
'qbsettings-fixedright'     => 'Pričvršćena desno',
'qbsettings-floatingleft'   => 'Plutajuća lijevo',
'qbsettings-floatingright'  => 'Plutajući desno',
'changepassword'            => 'Promjeni lozinku',
'skin'                      => 'Koža',
'skin-preview'              => 'Pregled',
'math'                      => 'Prikazivanje matematike',
'dateformat'                => 'Format datuma',
'datedefault'               => 'Nije bitno',
'datetime'                  => 'Datum i vrijeme',
'math_failure'              => 'Neuspjeh pri parsiranju',
'math_unknown_error'        => 'nepoznata greška',
'math_unknown_function'     => 'nepoznata funkcija',
'math_lexing_error'         => 'riječnička greška',
'math_syntax_error'         => 'sintaksna greška',
'math_image_error'          => 'PNG konverzija neuspješna; provjerite tačnu instalaciju latex-a, dvips-a, gs-a i convert-a',
'math_bad_tmpdir'           => 'Ne može se napisati ili napraviti privremeni matematični direktorijum',
'math_bad_output'           => 'Ne može se napisati ili napraviti direktorijum za matematični izvještaj.',
'math_notexvc'              => 'Nedostaje izvršno texvc; molimo Vas da pogledate math/README da podesite.',
'prefs-personal'            => 'Korisnički podaci',
'prefs-rc'                  => 'Podešavanja nedavnih izmjena',
'prefs-watchlist'           => 'Praćeni članci',
'prefs-watchlist-days'      => 'Broj dana za prikaz u spisku praćenja:',
'prefs-watchlist-days-max'  => '(najviše 7 dana)',
'prefs-watchlist-edits'     => 'Najveći broj izmjena za prikaz u proširenom spisku praćenja:',
'prefs-watchlist-edits-max' => '(najveći broj: 1000)',
'prefs-misc'                => 'Ostala podešavanja',
'prefs-resetpass'           => 'Promijeni šifru',
'saveprefs'                 => 'Sačuvajte podešavanja',
'resetprefs'                => 'Vrati podešavanja',
'oldpassword'               => 'Stara lozinka:',
'newpassword'               => 'Nova lozinka:',
'retypenew'                 => 'Ukucajte ponovo novu lozinku:',
'textboxsize'               => 'Veličine tekstualnog polja',
'rows'                      => 'Redova',
'columns'                   => 'Kolona',
'searchresultshead'         => 'Podešavanja rezultata pretrage',
'resultsperpage'            => 'Pogodaka po stranici:',
'contextlines'              => 'Linija po pogotku:',
'contextchars'              => 'Karaktera konteksta po liniji:',
'stub-threshold'            => 'Formatiranje <a href="#" class="stub">linkova stranica u začetku</a> (bajtova):',
'recentchangesdays'         => 'Broj dana za prikaz u nedavnim izmjenama:',
'recentchangesdays-max'     => '(najviše $1 {{PLURAL:$1|dan|dana}})',
'recentchangescount'        => 'Broj naslova u nedavnim izmjenama:',
'savedprefs'                => 'Vaša podešavanja su sačuvana.',
'timezonelegend'            => 'Vremenska zona',
'timezonetext'              => 'Unesite broj sati za koji se Vaše lokalno vrijeme razlikuje od serverskog vremena (UTC).',
'localtime'                 => 'Lokalno vrijeme',
'timezoneoffset'            => 'Odstupanje',
'servertime'                => 'Vrijeme na serveru',
'guesstimezone'             => 'Popuni iz brauzera',
'allowemail'                => 'Dozvoli e-poštu od ostalih korisnika',
'prefs-searchoptions'       => 'Opcije pretrage',
'prefs-namespaces'          => 'Imenski prostori',
'defaultns'                 => 'Uobičajeno tražite u ovim imenskim prostorima:',
'default'                   => 'standardno',
'files'                     => 'Datoteke',

# User rights
'userrights'                  => 'Postavke korisničkih prava', # Not used as normal message but as header for the special page itself
'userrights-lookup-user'      => 'Menadžment korisničkih grupa',
'userrights-user-editname'    => 'Unesi korisničko ime:',
'editusergroup'               => 'Uredi korisničke grupe',
'editinguser'                 => "Mijenjate korisnička prava korisnika '''[[User:$1|$1]]''' ([[User talk:$1|{{int:talkpagelinktext}}]] | [[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'    => 'Uredi korisničke grupe',
'saveusergroups'              => 'Sačuvaj korisničke grupe',
'userrights-groupsmember'     => 'Član:',
'userrights-groups-help'      => 'Možete promijeniti grupe kojima ovaj korisnik pripada:
* Označeni kvadratić znači da je korisnik u toj grupi.
* Neoznačen kvadratić znači da korisnik nije u toj grupi.
* Oznaka * (zvjezdica) označava da Vi ne možete izbrisati ovu grupu ako je dodate i obrnutno.',
'userrights-reason'           => 'Razlog promjene:',
'userrights-no-interwiki'     => 'Nemate dopuštenja da uređujete korisnička prava na drugim wikijima.',
'userrights-nodatabase'       => 'Baza podataka $1 ne postoji ili nije lokalna baza.',
'userrights-nologin'          => 'Morate se [[Special:UserLogin|prijaviti]] sa administratorskim računom da bi ste mogli postavljati korisnička prava.',
'userrights-notallowed'       => 'Vaš korisnički račun nema privilegije da dodaje prava korisnika.',
'userrights-changeable-col'   => 'Grupe koje možete mijenati',
'userrights-unchangeable-col' => 'Grupe koje ne možete mijenati',

# Groups
'group'               => 'Grupa:',
'group-user'          => 'Korisnici',
'group-autoconfirmed' => 'Potvrđeni korisnici',
'group-bot'           => 'Botovi',
'group-sysop'         => 'Administratori',
'group-bureaucrat'    => 'Birokrati',
'group-suppress'      => 'Nadzornici',
'group-all'           => '(sve)',

'group-user-member'          => 'Korisnik',
'group-autoconfirmed-member' => 'Potvrđeni korisnici',
'group-bot-member'           => 'Bot',
'group-sysop-member'         => 'Administrator',
'group-bureaucrat-member'    => 'Birokrat',
'group-suppress-member'      => 'Nadzornici',

'grouppage-user'          => '{{ns:project}}:Korisnici',
'grouppage-autoconfirmed' => '{{ns:project}}:Potvrđeni korisnici',
'grouppage-bot'           => '{{ns:project}}:Botovi',
'grouppage-sysop'         => '{{ns:project}}:Administratori',
'grouppage-bureaucrat'    => '{{ns:project}}:Birokrati',
'grouppage-suppress'      => '{{ns:project}}:Nadzornici',

# Rights
'right-read'                 => 'Čitanje stranica',
'right-edit'                 => 'Uređivanje stranica',
'right-createpage'           => 'Pravljenje stranica (neuključujući stranice za razgovor)',
'right-createtalk'           => 'Pravljenje stranica za razgovor',
'right-createaccount'        => 'Pravljenje korisničkog računa',
'right-minoredit'            => 'Označavanje izmjena kao malih',
'right-move'                 => 'Preusmjeravanje stranica',
'right-move-subpages'        => 'Preusmjeravanje stranica sa svim podstranicama',
'right-move-rootuserpages'   => 'Premještanje stranica osnovnih korisnika',
'right-suppressredirect'     => 'Ne pravi preusmjeravanje sa starog imena pri preusmjeravanju stranica',
'right-upload'               => 'Postavljanje datoteka',
'right-reupload'             => 'Postavljanje nove verzije datoteke',
'right-reupload-own'         => 'Postavljanje nove verzije datoteke koju je postavio korisnik',
'right-reupload-shared'      => 'Postavljanje novih lokalnih verzija datoteka identičnih onima u zajedničkoj ostavi',
'right-upload_by_url'        => 'Postavljanje datoteke sa URL adrese',
'right-purge'                => 'Osvježavanje keša za stranice bez konfirmacije',
'right-autoconfirmed'        => 'Uređivanje poluzaštićenih stranica',
'right-bot'                  => 'Postavljen kao automatski proces',
'right-nominornewtalk'       => "Male izmjene na stranici za razgovor ne uzrokuju prikazivanje oznake ''nova poruka'' na stranici za razgovor",
'right-apihighlimits'        => 'Korištenje viših ograničenja u API upitima',
'right-writeapi'             => "Korištenje opcije ''write API''",
'right-delete'               => 'Brisanje stranica',
'right-bigdelete'            => 'Brisanje stranica sa velikom historijom',
'right-deleterevision'       => 'Brisanje i vraćanje određenih revizija stranice',
'right-deletedhistory'       => 'Pregled stavki obrisane historije, bez povezanog teksta',
'right-browsearchive'        => 'Pretraživanje obrisanih stranica',
'right-undelete'             => 'Vraćanje obrisanih stranica',
'right-suppressrevision'     => 'Pregled i povratak revizija sakrivenih od administratora',
'right-suppressionlog'       => 'Gledanje privatnih zapisa',
'right-block'                => 'Blokiranje uređivanja drugih korisnika',
'right-blockemail'           => 'Blokiranje korisnika da šalje e-mail',
'right-hideuser'             => 'Blokiranje korisničkog imena, i njegovo sakrivanje od javnosti',
'right-ipblock-exempt'       => 'Zaobilaženje IP blokada, autoblokada i blokada IP grupe',
'right-proxyunbannable'      => 'Zaobilaženje automatskih blokada proxy-ja',
'right-protect'              => 'Promjena nivoa zaštite i uređivanje zaštićenih stranica',
'right-editprotected'        => 'Uređivanje zaštićenih stranica (bez povezanih zaštita)',
'right-editinterface'        => 'Uređivanje korisničkog interfejsa',
'right-editusercssjs'        => 'Uređivanje CSS i JS datoteka drugih korisnika',
'right-rollback'             => 'Brzo vraćanje izmjena na zadnjeg korisnika koji je uređivao određenu stranicu',
'right-markbotedits'         => 'Označavanje vraćenih izmjena kao izmjene bota',
'right-noratelimit'          => 'Izbjegavanje ograničenja uzrokovanih brzinom',
'right-import'               => 'Uvoz stranica iz drugih wikija',
'right-importupload'         => 'Uvoz stranica putem postavljanja datoteke',
'right-patrol'               => 'Označavanje izmjena drugih korisnika patroliranim',
'right-autopatrol'           => 'Vlastite izmjene se automatski označavaju kao patrolirane',
'right-patrolmarks'          => 'Pregled oznaka patroliranja u spisku nedavnih izmjena',
'right-unwatchedpages'       => 'Gledanje spiska nepraćenih stranica',
'right-trackback'            => "Slanje ''trackbacka''",
'right-mergehistory'         => 'Spajanje historije stranica',
'right-userrights'           => 'Uređivanje svih korisničkih prava',
'right-userrights-interwiki' => 'Uređivanje korisničkih prava korisnika na drugim wikijima',
'right-siteadmin'            => 'Zaključavanje i otključavanje baze podataka',

# User rights log
'rightslog'      => 'Zapisnik korisničkih prava',
'rightslogtext'  => 'Ovo je zapis promjena korisničkih prava.',
'rightslogentry' => 'promjena članstva u grupi za $1 sa $2 na $3',
'rightsnone'     => '(nema)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'čitate ovu stranicu',
'action-edit'                 => 'uređujete ovu stranicu',
'action-createpage'           => 'napravite stranicu',
'action-createtalk'           => 'kreirate stranice za razgovor',
'action-createaccount'        => 'napravite ovaj korisnički račun',
'action-minoredit'            => 'da označite ovu izmjenu kao malu',
'action-move'                 => 'premjestite ovu stranicu',
'action-move-subpages'        => 'premjestite ovu stranicu, i njene podstranice',
'action-move-rootuserpages'   => 'premjestite stranice osnovnog korisnika',
'action-upload'               => 'postavljate ovu datoteku',
'action-reupload'             => 'stavite novu verziju postojeće datoteke',
'action-reupload-shared'      => 'postavite ovu datoteku iz zajedničke ostave',
'action-upload_by_url'        => 'postavite ovu datoteku putem URL adrese',
'action-writeapi'             => "koristite ''write API'' opciju",
'action-delete'               => 'obrišete ovu stranicu',
'action-deleterevision'       => 'obrišete ovu reviziju',
'action-deletedhistory'       => 'gledate obrisanu historiju ove stranice',
'action-browsearchive'        => 'pretražujete obrisane stranice',
'action-undelete'             => 'vratite ovu stranicu',
'action-suppressrevision'     => 'pregledate i vratite ovu skrivenu reviziju',
'action-suppressionlog'       => 'vidite ovaj privatni zapis',
'action-block'                => 'blokirate uređivanje ovog korisnika',
'action-protect'              => 'promijeniti nivo zaštite za ovu stranicu',
'action-import'               => 'uvozite ovu stranicu iz druge wiki',
'action-importupload'         => 'uvezete ovu stranicu putem postavljanja datoteke',
'action-patrol'               => 'označite izmjene drugih kao patrolirane',
'action-autopatrol'           => 'Vaše izmjene budu označene kao patrolirane',
'action-unwatchedpages'       => 'pregledate spisak nepraćenih stranica',
'action-trackback'            => "pošaljete ''trackback''",
'action-mergehistory'         => 'spajate historiju ove stranice',
'action-userrights'           => 'uređujete sva korisnička prava',
'action-userrights-interwiki' => 'uređujete korisnička prava korisnika na drugim wikijima',
'action-siteadmin'            => 'zaključavate ili otključavate bazu podataka',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|promjena|promjene|promjena}}',
'recentchanges'                     => 'Nedavne izmjene',
'recentchanges-legend'              => 'Postavke nedavnih izmjena',
'recentchangestext'                 => 'Na ovoj stranici možete pratiti nedavne izmjene.',
'recentchanges-feed-description'    => 'Na ovoj stranici možete pratiti nedavne izmjene.',
'rcnote'                            => "Ispod {{PLURAL:$1|je '''1''' promjena|su '''$1''' zadnje promjene|su '''$1''' zadnjih promjena}} u {{PLURAL:$2|posljednjem '''$2''' danu|posljednja '''$2''' dana|posljednjih '''$2''' dana}}, od $4, $5.",
'rcnotefrom'                        => 'Ispod su izmjene od <b>$2</b> (do <b>$1</b> prikazano).',
'rclistfrom'                        => 'Prikaži nove izmjene počev od $1',
'rcshowhideminor'                   => '$1 male izmjene',
'rcshowhidebots'                    => '$1 botove',
'rcshowhideliu'                     => '$1 prijavljene korisnike',
'rcshowhideanons'                   => '$1 anonimne korisnike',
'rcshowhidepatr'                    => '$1 patrolirane izmjene',
'rcshowhidemine'                    => '$1 moje izmjene',
'rclinks'                           => 'Prikaži najskorijih $1 izmjena u posljednjih $2 dana<br />$3',
'diff'                              => 'razl',
'hist'                              => 'hist',
'hide'                              => 'sakrij',
'show'                              => 'Pokaži',
'minoreditletter'                   => 'm',
'newpageletter'                     => 'N',
'boteditletter'                     => 'b',
'number_of_watching_users_pageview' => '[$1 {{PLURAL:$1|korisnik|korisnika}} koji pregledaju]',
'rc_categories'                     => 'Ograniči na kategorije (razdvojene sa "|")',
'rc_categories_any'                 => 'Sve',
'newsectionsummary'                 => '/* $1 */ nova sekcija',
'rc-enhanced-expand'                => 'Pokaži detalje (neophodna JavaScript)',
'rc-enhanced-hide'                  => 'Sakrij detalje',

# Recent changes linked
'recentchangeslinked'          => 'Srodne izmjene',
'recentchangeslinked-title'    => 'Srodne promjene sa "$1"',
'recentchangeslinked-noresult' => 'Nema izmjena na povezanim stranicama u zadanom periodu.',
'recentchangeslinked-summary'  => "Ova posebna stranica prikazuje promjene na povezanim stranicama. 
Stranice koje su na vašem [[Special:Watchlist|spisku praćenja]] su '''podebljane'''.",
'recentchangeslinked-page'     => 'Naslov stranice:',
'recentchangeslinked-to'       => 'Pokaži promjene stranica koji su povezane sa datom stranicom',

# Upload
'upload'                      => 'Postavi datoteku',
'uploadbtn'                   => 'Postavi datoteku',
'reupload'                    => 'Ponovo pošaljite',
'reuploaddesc'                => 'Vratite se na upitnik za slanje.',
'uploadnologin'               => 'Niste prijavljeni',
'uploadnologintext'           => 'Morate biti [[Special:UserLogin|prijavljeni]]
da bi ste slali fajlove.',
'upload_directory_missing'    => 'Folder za postavljanje ($1) nedostaje i webserver ga ne može napraviti.',
'upload_directory_read_only'  => 'Folder za postavljanje ($1) na webserveru je postavljen samo za čitanje.',
'uploaderror'                 => 'Greška pri slanju',
'uploadtext'                  => "Koristite formu ispod za postavljanje datoteka.
Da bi ste vidjeli ili pretražili ranije postavljene datoteke, pogledajte [[Special:FileList|spisak postavljenih datoteka]], ponovna postavljanja su također zapisana u [[Special:Log/upload|zapisnik postavljanja]], a brisanja u [[Special:Log/delete|zapisnik brisanja]].

Da bi ste prikazali datoteku na stranici, koristite link na jedan od slijedećih načina:
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Datoteka.jpg]]</nowiki></tt>''' da upotrijebite potpunu veziju datoteke
* '''<tt><nowiki>[[</nowiki>{{ns:file}}<nowiki>:Datoteka.png|200px|thumb|lijevo|opis slike]]</nowiki></tt>''' da upotrijebite smanjeni prikaz širine 200 piksela unutar okvira, s lijevim poravnanjem i ''opisom slike''.
* '''<tt><nowiki>[[</nowiki>{{ns:media}}<nowiki>:Datoteka.ogg]]</nowiki></tt>''' za direkno povezivanje datoteke bez njenog prikazivanja",
'upload-permitted'            => 'Podržane vrste datoteka: $1.',
'upload-preferred'            => 'Preferirane vrste datoteka: $1.',
'upload-prohibited'           => 'Zabranjene vrste datoteka: $1.',
'uploadlog'                   => 'log slanja',
'uploadlogpage'               => 'Protokol postavljanja',
'uploadlogpagetext'           => 'Ispod je spisak najskorijih slanja.',
'filename'                    => 'Ime fajla',
'filedesc'                    => 'Opis',
'fileuploadsummary'           => 'Sažetak:',
'filestatus'                  => 'Status autorskih prava:',
'filesource'                  => 'Izvor:',
'uploadedfiles'               => 'Poslati fajlovi',
'ignorewarning'               => 'Zanemari upozorenja i sačuvaj datoteku',
'ignorewarnings'              => 'Zanemari sva upozorenja',
'minlength1'                  => 'Ime datoteke mora imati barem jedno slovo.',
'illegalfilename'             => 'Ime datoteke "$1" sadrži simbol koji nije dozvoljen u imenu datoteke.
Molimo Vas da promijenite ime datoteke i pokušate da je ponovo postavite.',
'badfilename'                 => 'Ime slike je promjenjeno u "$1".',
'filetype-badmime'            => 'Datoteke MIME vrste "$1" nije dopušteno postavljati.',
'filetype-unwanted-type'      => "'''\".\$1\"''' je nepoželjna vrsta datoteke.
{{PLURAL:\$3|Preporučena vrsta|Preporučene vrste}} datoteke su \$2.",
'filetype-banned-type'        => "'''\".\$1\"''' nije dopuštena vrsta datoteke.
{{PLURAL:\$3|Dopuštena vrsta datoteke je|Dopuštene vrste datoteka su}} \$2.",
'filetype-missing'            => 'Datoteka nema ekstenziju (poput ".jpg").',
'large-file'                  => 'Preporučeno je da datoteke nisu veće od $1;
Ova datoteka je velika $2.',
'largefileserver'             => 'Ova datoteka je veća nego što server dopušta.',
'emptyfile'                   => 'Fajl koji ste poslali je prazan. Ovo je moguće zbog greške u imenu fajla. Molimo Vas da provjerite da li stvarno želite da pošaljete ovaj fajl.',
'fileexists'                  => 'Fajl sa ovim imenom već postoji.  Molimo Vas da provjerite <strong><tt>$1</tt></strong> ako niste sigurni da li želite da ga promjenite.',
'filepageexists'              => 'Opis stranice za ovu datoteku je već napravljen ovdje <strong><tt>$1</tt></strong>, ali datoteka sa ovim nazivom trenutno ne postoji.
Sažetak koji ste naveli neće se pojaviti na stranici opisa.
Da bi se Vaš opis ovdje našao, potrebno je da ga ručno uredite',
'fileexists-extension'        => 'Datoteka sa sličnim nazivom postoji:<br />
Naziv datoteke koja se postavlja: <strong><tt>$1</tt></strong><br />
Naziv postojeće datoteke: <strong><tt>$2</tt></strong><br />
Molimo Vas da izaberete drugačiji naziv.',
'fileexists-thumb'            => "<center>'''Postojeća datoteka'''</center>",
'fileexists-thumbnail-yes'    => 'Izgleda da je datoteka slika smanjene veličine <i>("thumbnail")</i>.
Molimo provjerite datoteku <strong><tt>$1</tt></strong>.<br />
Ako je provjerena datoteka ista slika originalne veličine, nije potrebno postavljati dodatnu sliku.',
'file-thumbnail-no'           => 'Naziv datoteke počinje sa <strong><tt>$1</tt></strong>.
Izgleda da se radi o smanjenoj slici <i>("thumbnail")</i>.
Ako imate ovu sliku u punoj rezoluciji, postavite nju; ili promijenite naslov ove datoteke.',
'fileexists-forbidden'        => 'Fajl sa ovim imenom već postoji; molimo Vas da se vratite i pošaljete ovaj fajl pod novim imenom. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Datoteka sa ovim imenom već postoji u zajedničkoj ostavi; molimo Vas da se vratite i pošaljete ovu datoteku pod novim imenom. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate'       => 'Ova datoteka je dvojnik {{PLURAL:$1|slijedećoj datoteci|slijedećim datotekama}}:',
'file-deleted-duplicate'      => 'Datoteka koje je identična ovoj datoteci ([[$1]]) je ranije bila obrisana. Trebate provjeriti historiju brisanja te datoteke prije nego što nastavite sa njenim ponovnim postavljanjem.',
'successfulupload'            => 'Uspješno slanje',
'uploadwarning'               => 'Upozorenje pri slanju',
'savefile'                    => 'Sačuvaj fajl',
'uploadedimage'               => 'poslato "[[$1]]"',
'overwroteimage'              => 'postavljena nova verzija datoteke "[[$1]]"',
'uploaddisabled'              => 'Slanje fajlova je isključeno',
'uploaddisabledtext'          => 'Postavljanje datoteka je onemogućeno.',
'uploadscripted'              => 'Ova datoteka sadrži HTML ili skriptni kod koji može izazvati grešku kod internet preglednika.',
'uploadcorrupt'               => 'Datoteka je oštećena ili ima pogrešnu ekstenziju.
Molimo Vas da provjerite datoteku i ponovno je postavite.',
'uploadvirus'                 => 'Fajl sadrži virus!  Detalji:  $1',
'sourcefilename'              => 'Ime izvorišne datoteke:',
'destfilename'                => 'Ime odredišne datoteke:',
'upload-maxfilesize'          => 'Najveća veličina datoteke: $1',
'watchthisupload'             => 'Prati ovu stranicu',
'filewasdeleted'              => 'Datoteka s ovim nazivom je ranije postavljana i nakon toga obrisana.
Prije nego što nastavite da je ponovno postavite trebate provjeriti $1.',
'upload-wasdeleted'           => "'''Upozorenje: Postavljate datoteku koja je ranije obrisana.'''

Potrebno je da razmotrite da li je uredu nastaviti sa postavljanjem ove datoteke.
Zapis brisanja za ovu datoteku je prikazan ovdje kao referenca:",
'filename-bad-prefix'         => 'Naziv datoteke koju postavljate počinje sa <strong>"$1"</strong>, što je naziv koji obično automatski dodjeljuju digitalni fotoaparati i kamere.
Molimo Vas da odaberete naziv datoteke koji opisuje njen sadržaj.',

'upload-proto-error'      => 'Pogrešan protokol',
'upload-proto-error-text' => 'Postavljanje sa vanjske lokacije zahtjeva URL-ove koji počinju sa <code>http://</code> ili <code>ftp://</code>.',
'upload-file-error'       => 'Unutrašnja greška',
'upload-file-error-text'  => 'Desila se interna greška pri pokušaju kreiranja privremene datoteke na serveru.
Molimo kontaktirajte [[Special:ListUsers/sysop|administratora]].',
'upload-misc-error'       => 'Nepoznata greška pri postavljanju',
'upload-misc-error-text'  => 'Desila se nepoznata greška pri postavljanju.
Molimo Vas provjerite da li je URL tačan i dostupan pa pokušajte ponovo.
Ako se problem ne riješi, kontaktirajte [[Special:ListUsers/sysop|administratora]].',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'Ovaj URL nije bilo moguće otvoriti',
'upload-curl-error6-text'  => 'URL koji je naveden nije dostupan.
Molimo ponovno provjerite da li je URL ispravan i da li stranica radi.',
'upload-curl-error28'      => 'Vrijeme postavljanja isteklo',
'upload-curl-error28-text' => 'Stranici je potrebno previše vremena za odgovor.
Molimo provjerite da li je stranica postavljena, malo pričekajte i pokušajte ponovno.
Možda možete pokušati kada bude manje opterećenje.',

'license'            => 'Licenca:',
'nolicense'          => 'Ništa nije odabrano',
'license-nopreview'  => '(Pregled nije dostupan)',
'upload_source_url'  => ' (validni, javno dostupni URL)',
'upload_source_file' => ' (datoteka na Vašem računaru)',

# Special:FileList
'imagelist-summary'     => 'Ova specijalna stranica prikazuje sve postavljene datoteke.
Uobičajeno je da posljednja postavljena datoteka bude prikazana na vrhu spiska.
Klikom na zaglavlje kolone možete promjeniti način sortiranja.',
'imagelist_search_for'  => 'Traži medije po imenu:',
'imgfile'               => 'datoteka',
'imagelist'             => 'Spisak slika',
'imagelist_date'        => 'Datum',
'imagelist_name'        => 'Naziv',
'imagelist_user'        => 'Korisnik',
'imagelist_size'        => 'Veličina',
'imagelist_description' => 'Opis',

# File description page
'filehist'                       => 'Historija datoteke',
'filehist-help'                  => 'Kliknite na datum/vrijeme da vidite verziju datoteke iz tog vremena.',
'filehist-deleteall'             => 'izbriši sve',
'filehist-deleteone'             => 'obriši',
'filehist-revert'                => 'vrati',
'filehist-current'               => 'trenutno',
'filehist-datetime'              => 'Datum/Vrijeme',
'filehist-thumb'                 => 'Smanjeni pregled',
'filehist-thumbtext'             => 'Smanjeni pregled verzije na dan $1',
'filehist-nothumb'               => 'Bez smanjenog pregleda',
'filehist-user'                  => 'Korisnik',
'filehist-dimensions'            => 'Dimenzije',
'filehist-filesize'              => 'Veličina datoteke',
'filehist-comment'               => 'Komentar',
'imagelinks'                     => 'Upotreba slike',
'linkstoimage'                   => '{{PLURAL:$1|Slijedeća stranica koristi|Slijedećih $1 stranica koriste}} ovu sliku:',
'linkstoimage-more'              => 'Više od $1 {{PLURAL:$1|datoteke|datoteka}} je povezano s ovom datotekom.
Slijedeći spisak pokazuje samo {{PLURAL:$1|prvu stranicu povezanu|prve $1 stranice povezane|prvih $1 stranica povezanih}} s ovom datotekom.
Ovdje je dostupan [[Special:WhatLinksHere/$2|potpuni spisak]].',
'nolinkstoimage'                 => 'Nema stranica koje koriste ovu sliku.',
'morelinkstoimage'               => 'Vidi [[Special:WhatLinksHere/$1|ostale linkove]] prema ovoj datoteci.',
'redirectstofile'                => '{{PLURAL:$1|Slijedeća datoteka|Slijedeće $1 datoteke|Slijedećih $1 datoteka}} preusmjerava prema ovoj datoteci:',
'duplicatesoffile'               => '{{PLURAL:$1|Slijedeća datoteka je dvojnik|Slijedeće $1 datoteke su dvojnici}} ove datoteke:',
'sharedupload'                   => 'Ova datoteka se nalazi na [[Commons:Početna strana|Wikimedia Commons]] i može se koristiti i na drugim projektima.',
'shareduploadwiki'               => 'Molimo pogledajte $1 za više informacija.',
'shareduploadwiki-desc'          => 'Opis njene $1 na zajedničkom repozitoriju je prikazan ispod.',
'shareduploadwiki-linktext'      => 'stranice opisa datoteke',
'shareduploadduplicate'          => 'Ova datoteka je dvojnik $1 iz zajedničkog repozitorija.',
'shareduploadduplicate-linktext' => 'drugoj datoteci',
'shareduploadconflict'           => 'Ova datoteka ima isti naziv kao i $1 iz zajedničkog repozitorija.',
'shareduploadconflict-linktext'  => 'druga datoteka',
'noimage'                        => 'Slika sa ovim imenom ne postoji, ali je možete $1.',
'noimage-linktext'               => 'postaviti',
'uploadnewversion-linktext'      => 'Postavite noviju verziju ove datoteke',
'imagepage-searchdupe'           => 'Pretraži datoteke dvojnike',

# File reversion
'filerevert'                => 'Vrati $1',
'filerevert-legend'         => 'Vraćanje datoteke',
'filerevert-intro'          => "Vraćate datoteku '''[[Media:$1|$1]]''' na [$4 verziju od $3, $2].",
'filerevert-comment'        => 'Komentar:',
'filerevert-defaultcomment' => 'Vraćeno na verziju od $2, $1',
'filerevert-submit'         => 'Vrati',
'filerevert-success'        => "'''Datoteka [[Media:$1|$1]]''' je vraćena na [$4 verziju od $3, $2].",
'filerevert-badversion'     => 'Ne postoji ranija lokalna verzija ove datoteke sa navedenim vremenskim podacima.',

# File deletion
'filedelete'                  => 'Obriši $1',
'filedelete-legend'           => 'Obriši datoteku',
'filedelete-intro'            => "Brišete datoteku '''[[Media:$1|$1]]'''.",
'filedelete-intro-old'        => "Brišete verziju datoteke '''[[Media:$1|$1]]''' od [$4 $3, $2].",
'filedelete-comment'          => 'Razlog brisanja:',
'filedelete-submit'           => 'Obriši',
'filedelete-success'          => "'''$1''' je obrisano.",
'filedelete-success-old'      => "Verzija datoeke '''[[Media:$1|$1]]''' od $3, $2 je obrisana.",
'filedelete-nofile'           => "'''$1''' ne postoji.",
'filedelete-nofile-old'       => "Ne postoji arhivirana verzija '''$1''' sa navedenim atributima.",
'filedelete-otherreason'      => 'Ostali/dodatni razlozi:',
'filedelete-reason-otherlist' => 'Ostali razlozi',
'filedelete-reason-dropdown'  => '*Uobičajeni razlozi brisanja
** Kršenje autorskih prava
** Datoteka dvojnik',
'filedelete-edit-reasonlist'  => 'Uredi razloge brisanja',

# MIME search
'mimesearch'         => 'MIME pretraga',
'mimesearch-summary' => 'Ova stranica omogućava filtriranje datoteka prema njihovoj MIME vrsti.
Ulazni podaci: vrstasadržaja/subvrsta, npr. <tt>image/jpeg</tt>.',
'mimetype'           => 'MIME tip:',
'download'           => 'učitaj',

# Unwatched pages
'unwatchedpages' => 'Nepraćene stranice',

# List redirects
'listredirects' => 'Spisak preusmjerenja',

# Unused templates
'unusedtemplates'     => 'Nekorišteni šabloni',
'unusedtemplatestext' => 'Ova stranica prikazuje sve stranice u imenskom prostoru {{ns:template}} koji se ne koriste.
Prije brisanja provjerite da li druge stranice vode na te šablone.',
'unusedtemplateswlh'  => 'ostali linkovi',

# Random page
'randompage'         => 'Slučajna stranica',
'randompage-nopages' => 'Nema stranica u imenskom prostoru "$1".',

# Random redirect
'randomredirect'         => 'Slučajno preusmjerenje',
'randomredirect-nopages' => 'Ne postoje preusmjerenja u imenskom prostoru "$1".',

# Statistics
'statistics'                      => 'Statistike',
'statistics-header-pages'         => 'Statistike stranice',
'statistics-header-edits'         => 'Statistike izmjena',
'statistics-header-views'         => 'Statistike pregleda',
'statistics-header-users'         => 'Statistike korisnika',
'statistics-articles'             => 'Stranice sadržaja',
'statistics-pages'                => 'Stranice',
'statistics-pages-tooltip'        => 'Sve stranice na wikiju, uključujući stranice za razgovor, preusmjerenja itd.',
'statistics-files'                => 'Broj postavljenih datoteka',
'statistics-edits'                => 'Broj izmjena od kako je instalirana {{SITENAME}}',
'statistics-edits-average'        => 'Prosječno izmjena po stranici',
'statistics-views-total'          => 'Ukupno pregleda',
'statistics-views-peredit'        => 'Pogleda po izmjeni',
'statistics-jobqueue'             => 'Dužina [http://www.mediawiki.org/wiki/Manual:Job_queue akcija na čekanju]',
'statistics-users'                => 'Registrovani [[Special:ListUsers|korisnici]]',
'statistics-users-active'         => 'Aktivni korisnici',
'statistics-users-active-tooltip' => 'Korisnici koju su izvršili akciju u toku prošlog mjeseca',
'statistics-mostpopular'          => 'Najviše pregledane stranice',

'disambiguations'      => 'Stranice za višeznačne odrednice',
'disambiguationspage'  => '{{ns:template}}:Višeznačna odrednica',
'disambiguations-text' => "Slijedeće stranice su povezane sa '''čvor stranicom'''.
Po pravilu, one se trebaju povezati sa konkretnim člankom.<br />
Stranica se smatra čvorom, ukoliko koristi šablon koji je povezan sa spiskom [[MediaWiki:Disambiguationspage|čvor stranica]]",

'doubleredirects'            => 'Dvostruka preusmjerenja',
'doubleredirectstext'        => 'Svaki red sadrži veze na prvo i drugo preusmjerenje, kao i na prvu liniju teksta drugog preusmjerenja, što obično daje "pravi" ciljni članak, na koji bi prvo preusmjerenje i trebalo da pokazuje.',
'double-redirect-fixed-move' => '[[$1]] je premješten, sada je preusmjerenje na [[$2]]',
'double-redirect-fixer'      => 'Popravljač preusmjerenja',

'brokenredirects'        => 'Pokvarena preusmjerenja',
'brokenredirectstext'    => 'Sledeća preusmjerenja su povezana na nepostojeći članak:',
'brokenredirects-edit'   => '(uredi)',
'brokenredirects-delete' => '(obriši)',

'withoutinterwiki'         => 'Članci bez interwiki linkova',
'withoutinterwiki-summary' => 'Slijedeće stranice nemaju linkove prema verzijama na drugim jezicima.',
'withoutinterwiki-legend'  => 'Prefiks',
'withoutinterwiki-submit'  => 'Pokaži',

'fewestrevisions' => 'Stranice sa najmanje izmjena',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|bajt|bajtova}}',
'ncategories'             => '$1 {{PLURAL:$1|kategorija|kategorije}}',
'nlinks'                  => '$1 {{PLURAL:$1|veza|veze}}',
'nmembers'                => '$1 {{PLURAL:$1|član|članova}}',
'nrevisions'              => '$1 {{PLURAL:$1|revizija|revizije}}',
'nviews'                  => '$1 {{PLURAL:$1|pregled|pregleda}}',
'specialpage-empty'       => 'Nepostoje rezultati za ovaj izvještaj.',
'lonelypages'             => 'Siročići',
'lonelypagestext'         => 'Slijedeće stranice nemaju linkove na ostalim stranicama na ovoj {{SITENAME}}.',
'uncategorizedpages'      => 'Nekategorisane stranice',
'uncategorizedcategories' => 'Nekategorisane kategorije',
'uncategorizedimages'     => 'Slike bez kategorije',
'uncategorizedtemplates'  => 'Šabloni bez kategorije',
'unusedcategories'        => 'Nekorišćene kategorije',
'unusedimages'            => 'Neupotrebljene slike',
'popularpages'            => 'Popularne stranice',
'wantedcategories'        => 'Tražene kategorije',
'wantedpages'             => 'Tražene stranice',
'wantedfiles'             => 'Tražene datoteke',
'wantedtemplates'         => 'Potrebni šabloni',
'mostlinked'              => 'Članci sa najviše linkova',
'mostlinkedcategories'    => 'Kategorije sa najviše linkova',
'mostlinkedtemplates'     => 'Najviše upotrebljavani šabloni',
'mostcategories'          => 'Članci sa najviše kategorija',
'mostimages'              => 'Najviše linkovane slike',
'mostrevisions'           => 'Članci sa najviše izmjena',
'prefixindex'             => 'Prefiks naslova',
'shortpages'              => 'Kratke stranice',
'longpages'               => 'Dugačke stranice',
'deadendpages'            => 'Stranice bez internih veza',
'deadendpagestext'        => 'Slijedeće stranice nisu povezane s drugim stranicama na {{SITENAME}}.',
'protectedpages'          => 'Zaštićene stranice',
'protectedpages-indef'    => 'Samo neograničena zaštićenja',
'protectedpages-cascade'  => 'Samo prenosive zaštite',
'protectedpagestext'      => 'Slijedeće stranice su zaštićene od izmjena i premještanja',
'protectedpagesempty'     => 'Trenutno nijedna stranica nije zaštićena s ovim parametrima.',
'protectedtitles'         => 'Zaštićeni naslovi',
'protectedtitlestext'     => 'Članci sa slijedećim naslovima su zaštićeni od kreiranja.',
'protectedtitlesempty'    => 'Nema naslova zaštićenih članaka sa ovim parametrima.',
'listusers'               => 'Spisak korisnika',
'listusers-editsonly'     => 'Pokaži samo korisnike koji su uređivali',
'usereditcount'           => '$1 {{PLURAL:$1|izmjena|izmjene}}',
'newpages'                => 'Nove stranice',
'newpages-username'       => 'Korisničko ime:',
'ancientpages'            => 'Najstarije stranice',
'move'                    => 'Preusmjeri',
'movethispage'            => 'Premjesti ovu stranicu',
'unusedimagestext'        => '<p>Obratite pažnju da se drugi veb sajtovi, kao što su drugi
međunarodni Vikiji, mogu povezati na sliku direktnom
URL-om, i tako mogu još uvijek biti prikazani ovdje uprkos
aktivnoj upotrebi.</p>',
'unusedcategoriestext'    => 'Sledeće strane kategorija postoje iako ih ni jedan drugi članak ili kategorija ne koriste.',
'notargettitle'           => 'Nema cilja',
'notargettext'            => 'Niste naveli ciljnu stranicu ili korisnika
na kome bi se izvela ova funkcija.',
'nopagetitle'             => 'Ne postoji takva stranica',
'nopagetext'              => 'Ciljna stranica koju ste naveli ne postoji.',
'pager-newer-n'           => '{{PLURAL:$1|novija 1|novije $1}}',
'pager-older-n'           => '{{PLURAL:$1|starija 1|starije $1}}',
'suppress'                => 'Nazdor',

# Book sources
'booksources'               => 'Štampani izvori',
'booksources-search-legend' => 'Traži književne izvore',
'booksources-go'            => 'Idi',
'booksources-text'          => 'Ispod se nalazi spisak vanjskih linkova na ostale stranice koje prodaju nove ili korištene knjige kao i stranice koje mogu da imaju važnije podatke o knjigama koje tražite:',

# Special:Log
'specialloguserlabel'  => 'Korisnik:',
'speciallogtitlelabel' => 'Naslov:',
'log'                  => 'Protokoli',
'all-logs-page'        => 'Svi registri',
'alllogstext'          => 'Zajednički prikaz svih dostupnih zapisa sa {{SITENAME}}. 
Možete specificirati prikaz izabiranjem specifičnog spiska, korisničkog imena ili promjenjenog članka (razlikovati velika slova).',
'logempty'             => 'Ne postoji takav zapis.',
'log-title-wildcard'   => 'Traži naslove koji počinju s ovim tekstom',

# Special:AllPages
'allpages'          => 'Sve stranice',
'alphaindexline'    => '$1 do $2',
'nextpage'          => 'Sljedeća strana ($1)',
'prevpage'          => 'Prethodna stranica ($1)',
'allpagesfrom'      => 'Prikaži stranice počev od:',
'allpagesto'        => 'Prikaži stranice koje završavaju na:',
'allarticles'       => 'Svi članci',
'allinnamespace'    => 'Sve stranice (imenski prostor $1)',
'allnotinnamespace' => 'Sve stranice (van imenskog prostora $1)',
'allpagesprev'      => 'Prethodno',
'allpagesnext'      => 'Slijedeće',
'allpagessubmit'    => 'Idi',
'allpagesprefix'    => 'Prikaži stranice sa prefiksom:',
'allpagesbadtitle'  => 'Dati naziv stranice je nepravilan ili ima međujezički ili interwiki prefiks.
Možda sadrži jedan ili više znakova koji se ne mogu koristiti u naslovima.',
'allpages-bad-ns'   => '{{SITENAME}} nema imenski prostor "$1".',

# Special:Categories
'categories'                    => 'Kategorije',
'categoriespagetext'            => 'Slijedeće kategorije sadrže stranice ili multimedijalne datoteke.
[[Special:UnusedCategories|Nekorištene kategorije]] nisu prikazane ovdje.
Vidi također [[Special:WantedCategories|zatražene kategorije]].',
'categoriesfrom'                => 'Prikaži kategorije počev od:',
'special-categories-sort-count' => 'sortiranje po broju',
'special-categories-sort-abc'   => 'sortiraj po abecedi',

# Special:DeletedContributions
'deletedcontributions' => 'Obrisani doprinosi korisnika',

# Special:LinkSearch
'linksearch'       => 'Traži web linkove',
'linksearch-pat'   => 'Šema traženja:',
'linksearch-ns'    => 'Imenski prostor:',
'linksearch-ok'    => 'Traži',
'linksearch-text'  => 'Općeniti izrazi poput "*.wikipedia.org" se mogu koristiti.<br />
Podržani protokoli: <tt>$1</tt>',
'linksearch-line'  => '$1 je povezan od $2',
'linksearch-error' => 'Džokeri se mogu pojavljivati samo na početku naziva servera.',

# Special:ListUsers
'listusersfrom'      => 'Prikaži korisnike koji počinju sa:',
'listusers-submit'   => 'Pokaži',
'listusers-noresult' => 'Nije pronađen korisnik.',

# Special:Log/newusers
'newuserlogpage'              => 'Zapis novih korisnika',
'newuserlogpagetext'          => 'Ovo je zapis o registraciji novih korisnika.',
'newuserlog-byemail'          => 'šifra je poslana putem e-maila',
'newuserlog-create-entry'     => 'Novi korisnik',
'newuserlog-create2-entry'    => 'napravljen račun za $1',
'newuserlog-autocreate-entry' => 'Račun napravljen automatski',

# Special:ListGroupRights
'listgrouprights'                 => 'Prava korisničkih grupa',
'listgrouprights-summary'         => 'Slijedi spisak korisničkih grupa na ovoj wiki, s njihovim pravima pristupa.
O svakoj od njih postoje i [[{{MediaWiki:Listgrouprights-helppage}}|dodatne informacije]].',
'listgrouprights-group'           => 'Grupa',
'listgrouprights-rights'          => 'Prava',
'listgrouprights-helppage'        => 'Help:Grupna prava',
'listgrouprights-members'         => '(spisak članova)',
'listgrouprights-addgroup'        => 'Mogu dodati {{PLURAL:$2|grupu|grupe}}: $1',
'listgrouprights-removegroup'     => 'Mogu ukloniti {{PLURAL:$2|grupu|grupe}}: $1',
'listgrouprights-addgroup-all'    => 'Može dodavati sve grupe',
'listgrouprights-removegroup-all' => 'Može ukloniti sve grupe',

# E-mail user
'mailnologin'     => 'Nema adrese za slanje',
'mailnologintext' => 'Morate biti [[Special:UserLogin|prijavljeni]]
i imati ispravnu adresu e-pošte u vašim [[Special:Preferences|podešavanjima]]
da biste slali e-poštu drugim korisnicima.',
'emailuser'       => 'Pošalji e-poštu ovom korisniku',
'emailpage'       => 'Pošalji e-pismo korisniku',
'emailpagetext'   => 'Možete korisiti formu ispod za slanje e-mail poruka ovom korisniku.
E-mail adresa koju ste unijeli u [[Special:Preferences|Vašim korisničkim postavkama]] će biti prikazana kao adresa pošiljaoca, tako da će primaoc poruke moći da Vam odgovori.',
'usermailererror' => 'Objekat pošte je vratio grešku:',
'defemailsubject' => '{{SITENAME}} e-pošta',
'noemailtitle'    => 'Nema adrese e-pošte',
'noemailtext'     => 'Ovaj korisnik nije naveo ispravnu adresu e-pošte,
ili je izabrao da ne prima e-poštu od drugih korisnika.',
'email-legend'    => 'Slanje e-maila drugom {{SITENAME}} korisniku',
'emailfrom'       => 'Od:',
'emailto'         => 'Za:',
'emailsubject'    => 'Tema:',
'emailmessage'    => 'Poruka:',
'emailsend'       => 'Pošalji',
'emailccme'       => 'Pošalji mi kopiju moje poruke.',
'emailccsubject'  => 'Kopiraj Vašu poruku za $1: $2',
'emailsent'       => 'Poruka poslata',
'emailsenttext'   => 'Vaša poruka je poslata e-poštom.',
'emailuserfooter' => 'Ovaj e-mail je poslao $1 korisniku $2 putem funkcije "Pošalji e-mail korisniku" sa {{SITENAME}}.',

# Watchlist
'watchlist'            => 'Praćeni članci',
'mywatchlist'          => 'Praćeni članci',
'watchlistfor'         => "(korisnika '''$1''')",
'nowatchlist'          => 'Nemate ništa na svom spisku praćenih članaka.',
'watchlistanontext'    => 'Molimo da $1 da možete vidjeti ili urediti stavke na Vašem spisku praćenja.',
'watchnologin'         => 'Niste prijavljeni',
'watchnologintext'     => 'Morate biti [[Special:UserLogin|prijavljeni]] da bi ste mijenjali spisak praćenih članaka.',
'addedwatch'           => 'Dodato u spisak praćenih članaka',
'addedwatchtext'       => 'Stranica "[[:$1]]" je dodata vašem [[Special:Watchlist|spisku praćenih članaka]]. Buduće promjene ove stranice i njoj pridružene stranice za razgovor će biti navedene ovde, i stranica će biti <b>podebljana</b> u [[Special:RecentChanges|spisku]] nedavnih izmjena da bi se lakše uočila.

Ako kasnije želite da uklonite stranicu sa vašeg spiska praćenih članaka, kliknite na "prekini praćenje" na paleti.',
'removedwatch'         => 'Uklonjeno iz spiska praćenih članaka',
'removedwatchtext'     => 'Stranica "<nowiki>$1</nowiki>" je uklonjena iz vašeg spiska praćenih članaka.',
'watch'                => 'Prati članak',
'watchthispage'        => 'Prati ovu stranicu',
'unwatch'              => 'Ukinite praćenje',
'unwatchthispage'      => 'Ukinite praćenje',
'notanarticle'         => 'Nije članak',
'notvisiblerev'        => 'Revizija je obrisana',
'watchnochange'        => 'Ništa što pratite nije promjenjeno u prikazanom vremenu.',
'watchlist-details'    => '{{PLURAL:$1|$1 stranica praćena|$1 stranice praćene|$1 stranica praćeno}} ne računajući stranice za razgovor.',
'wlheader-enotif'      => '* Obavještavanje e-poštom je omogućeno.',
'wlheader-showupdated' => "* Stranice koje su izmjenjene od kad ste ih poslednji put posjetili su prikazane '''podebljanim slovima'''",
'watchmethod-recent'   => 'provjerava se da li ima praćenih stranica u nedavnim izmjenama',
'watchmethod-list'     => 'provjerava se da li ima nedavnih izmjena u praćenim stranicama',
'watchlistcontains'    => 'Vaš spisak praćenih članaka sadrži $1 {{PLURAL:$1|stranicu|stranica}}.',
'iteminvalidname'      => "Problem sa '$1', neispravno ime...",
'wlnote'               => "Ispod je {{PLURAL:$1|najskorija izmjena|'''$1''' najskorije izmjene|'''$1''' najskorijih izmjena}} načinjenih {{PLURAL:$2|posljednjeg sata|u posljednjih '''$2''' sata|u posljednjih '''$2''' sati}}.",
'wlshowlast'           => 'Prikaži poslednjih $1 sati $2 dana $3',
'watchlist-options'    => 'Opcije spiska praćenja',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Pratim...',
'unwatching' => 'Ne pratim...',

'enotif_mailer'                => '{{SITENAME}} obaviještenje o pošti',
'enotif_reset'                 => 'Označi sve strane kao posjećene',
'enotif_newpagetext'           => 'Ovo je novi članak.',
'enotif_impersonal_salutation' => '{{SITENAME}} korisnik',
'changed'                      => 'promijenjeno',
'created'                      => 'napravljeno',
'enotif_subject'               => '{{SITENAME}} strana $PAGETITLE je bila $CHANGEDORCREATED od strane $PAGEEDITOR',
'enotif_lastvisited'           => 'Pogledajte $1 za sve izmjene od vaše posljednje posjete.',
'enotif_lastdiff'              => 'Vidi $1 da pregledate ovu promjenu.',
'enotif_anon_editor'           => 'anonimni korisnik $1',
'enotif_body'                  => 'Dragi $WATCHINGUSERNAME,

{{SITENAME}} strana $PAGETITLE je bila $CHANGEDORCREATED $PAGEEDITDATE od strane $PAGEEDITOR,
pogledajte {{fullurl:$PAGETITLE}} za trenutnu verziju.

$NEWPAGE

Rezime editora: $PAGESUMMARY $PAGEMINOREDIT

Kontaktirajte editora:
pošta {{fullurl:Special:Emailuser|target=$PAGEEDITOR}}
viki {{fullurl:User:$PAGEEDITOR}}

Neće biti drugih obaviještenja u slučaju daljih izmjena ukoliko ne posjetite ovu stranu.
Takođe možete da resetujete zastavice za obaviještenja za sve Vaše praćene stranice na vašem spisku praćenenih članaka.

             Vaš prijateljski {{SITENAME}} sistem obaviještavanja

--
Da promjenite podešavanja vezana za spisak praćenenih članaka posjetite
{{fullurl:Special:Watchlist|edit=yes}}

Fidbek i dalja pomoć:
{{fullurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'             => 'Obrišite stranicu',
'confirm'                => 'Potvrdite',
'excontent'              => "sadržaj je bio: '$1'",
'excontentauthor'        => "sadržaj je bio: '$1' (i jedini korisnik koji je mijenjao bio je '[[Special:Contributions/$2|$2]]')",
'exbeforeblank'          => "sadržaj prije brisanja je bio: '$1'",
'exblank'                => 'stranica je bila prazna',
'delete-confirm'         => 'Brisanje "$1"',
'delete-legend'          => 'Obriši',
'historywarning'         => 'Upozorenje:  Stranica koju želite da obrišete ima historiju:',
'confirmdeletetext'      => 'Brisanjem ćete obrisati stranicu ili sliku zajedno sa historijom iz baze podataka, ali će se iste moći vratiti kasnije. 
Molim potvrdite svoju namjeru, da razumijete posljedice i da ovo radite u skladu sa [[{{MediaWiki:Policy-url}}|pravilima]].',
'actioncomplete'         => 'Akcija završena',
'deletedtext'            => 'Članak "<nowiki>$1</nowiki>" je obrisan.
Pogledajte $2 za zapis o skorašnjim brisanjima.',
'deletedarticle'         => 'obrisan "[[$1]]"',
'suppressedarticle'      => 'promijeni vidljivost od "[[$1]]"',
'dellogpage'             => 'Protokol brisanja',
'dellogpagetext'         => 'Ispod je spisak najskorijih brisanja.',
'deletionlog'            => 'zapis brisanja',
'reverted'               => 'Vraćeno na prijašnju reviziju',
'deletecomment'          => 'Razlog brisanja:',
'deleteotherreason'      => 'Ostali/dodatni razlozi:',
'deletereasonotherlist'  => 'Ostali razlozi',
'deletereason-dropdown'  => '*Uobičajeni razlozi brisanja
** Zahtjev autora
** Kršenje autorskih prava
** Vandalizam',
'delete-edit-reasonlist' => 'Uredi razloge brisanja',
'delete-toobig'          => 'Ova stranica ima veliku historju promjena, preko $1 {{PLURAL:$1|revizije|revizija}}.
Brisanje takvih stranica nije dopušteno da bi se spriječilo slučajno preopterećenje servera na kojem je {{SITENAME}}.',
'delete-warning-toobig'  => 'Ova stranica ima veliku historiju izmjena, preko $1 {{PLURAL:$1|izmjene|izmjena}}.
Njeno brisanje može dovesti do opterećenja operacione baze na {{SITENAME}};
nastavite s oprezom.',

# Rollback
'rollback'         => 'Vrati izmjene',
'rollback_short'   => 'Vrati',
'rollbacklink'     => 'vrati',
'rollbackfailed'   => 'Vraćanje nije uspjelo',
'cantrollback'     => 'Ne može se vratiti izmjena; poslednji autor je ujedno i jedini.',
'alreadyrolled'    => 'Ne može se vratiti posljednja izmjena [[:$1]] od korisnika [[User:$2|$2]] ([[User talk:$2|razgovor]] | [[Special:Contributions/$2|{{int:contribslink}}]]); neko drugi je već izmjenio ili vratio članak.

Posljednja izmjena je bila od korisnika [[User:$3|$3]] ([[User talk:$3|razgovor]] | [[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment'      => 'Komentar izmjene je: "<i>$1</i>".', # only shown if there is an edit comment
'revertpage'       => 'Vraćene izmjene $2 na poslednju izmjenu korisnika $1', # Additionally available: $3: revid of the revision reverted to, $4: timestamp of the revision reverted to, $5: revid of the revision reverted from, $6: timestamp of the revision reverted from
'rollback-success' => 'Poništene izmjene korisnika $1;
vraćeno na posljednju verziju koju je sačuvao $2.',
'sessionfailure'   => "Izgleda da postoji problem sa vašom sesijom; ova akcija je otkazana kao prevencija protiv napadanja sesija. Kliknite \"back\" (''nazad'') i osvježite stranicu sa koje ste došli, i opet pokušajte.",

# Protect
'protectlogpage'              => 'Protokol zaključavanja',
'protectlogtext'              => 'Ispod je spisak zaštićenja stranice.',
'protectedarticle'            => 'stranica "[[$1]]" je zaštićena',
'modifiedarticleprotection'   => 'promijenjen stepen zaštite za "[[$1]]"',
'unprotectedarticle'          => 'odštićena "$1"',
'movedarticleprotection'      => 'podešavanja zaštite premještena sa "[[$2]]" na "[[$1]]"',
'protect-title'               => 'Zaštićuje se "$1"',
'prot_1movedto2'              => 'članak [[$1]] premješten na [[$2]]',
'protect-legend'              => 'Potvrdite zaštitu',
'protectcomment'              => 'Komentar:',
'protectexpiry'               => 'Ističe:',
'protect_expiry_invalid'      => 'Upisani vremenski rok nije valjan.',
'protect_expiry_old'          => 'Upisani vremenski rok je u prošlosti.',
'protect-unchain'             => 'Deblokirajte dozvole premještanja',
'protect-text'                => 'Ovdje možete gledati i izmjeniti level zaštite za stranicu <strong><nowiki>$1</nowiki></strong>.',
'protect-locked-blocked'      => 'Ne možete promijeniti nivo zaštite dok ste blokirani.
Ovo su trenutne postavke za stranicu <strong>$1</strong>:',
'protect-locked-dblock'       => 'Nivoi zaštite se ne mogu mijenjati jer je aktivna baza podataka zaključana.
Trenutna postavka za stranicu <strong>$1</strong> je:',
'protect-locked-access'       => 'Nemate ovlasti za mijenjanje stepena zaštite.
Slijede trenutne postavke stranice <strong>$1</strong>:',
'protect-cascadeon'           => 'Ova stranica je tenutno zaštićena jer je uključena u {{PLURAL:$1|stranicu, koja ima|stranice, koje imaju|stranice, koje imaju}} uključenu prenosnu zaštitu. 
Možete promijeniti stepen zaštite ove stranice, ali to neće uticati na prenosnu zaštitu.',
'protect-default'             => '(standardno)',
'protect-fallback'            => 'Potrebno je imati "$1" ovlasti',
'protect-level-autoconfirmed' => 'Blokiraj neregistrovane korisnike',
'protect-level-sysop'         => 'Samo administratori',
'protect-summary-cascade'     => 'prenosna zaštita',
'protect-expiring'            => 'ističe $1 (UTC)',
'protect-expiry-indefinite'   => 'neograničeno',
'protect-cascade'             => 'Zaštiti sve stranice koje su uključene u ovu (kaskadna zaštita)',
'protect-cantedit'            => 'Ne možete mijenjati nivo zaštite ove stranice, jer nemate prava da je uređujete.',
'protect-othertime'           => 'Ostali period:',
'protect-othertime-op'        => 'ostali period',
'protect-existing-expiry'     => 'Postojeće vrijeme isticanja: $3, $2',
'protect-otherreason'         => 'Ostali/dodatni razlozi:',
'protect-otherreason-op'      => 'ostali/dodatni razlozi',
'protect-dropdown'            => '*Uobičajeni razlozi zaštite
** Prekomjerni vandalizam
** Prekomjerno spamovanje
** Ne produktivni rat izmjena
** Stranica velikog prometa',
'protect-edit-reasonlist'     => 'Uredi razloge zaštićavanja',
'protect-expiry-options'      => '15 minuta:15 min,1 sat:1 hour,2 sata:2 hours,6 sati:6 hours,12 sati:12 hours,1 dan:1 day,3 dana:3 days,1 sedmica:1 week,2 sedmice:2 weeks,1 mjesec:1 month,3 mjeseca:3 months,6 mjeseci:6 months,1 godine:1 year,zauvijek:infinite', # display1:time1,display2:time2,...
'restriction-type'            => 'Dopuštenje:',
'restriction-level'           => 'Stepen ograničenja:',
'minimum-size'                => 'Najmanja veličina',
'maximum-size'                => 'Najveća veličina:',
'pagesize'                    => '(bajta)',

# Restrictions (nouns)
'restriction-edit'   => 'Uredi',
'restriction-move'   => 'Premještanje',
'restriction-create' => 'Napraviti',
'restriction-upload' => 'Postavljanje',

# Restriction levels
'restriction-level-sysop'         => 'potpuno zaštićeno',
'restriction-level-autoconfirmed' => 'poluzašićeno',
'restriction-level-all'           => 'svi nivoi',

# Undelete
'undelete'                     => 'Pogledaj izbrisane stranice',
'undeletepage'                 => 'Pogledaj i vrati izbrisane stranice',
'undeletepagetitle'            => "'''Slijedeći sadržaj prikazuje obrisane revizije od [[:$1|$1]]'''.",
'viewdeletedpage'              => 'Pogledaj izbrisane stranice',
'undeletepagetext'             => 'Sledeće stranice su izbrisane ali su još uvijek u arhivi i
mogu biti vraćene.  Arhiva moše biti periodično čišćena.',
'undelete-fieldset-title'      => 'Vraćanje revizija',
'undeleteextrahelp'            => "Da vratite cijeli članak, ostavite sve kutijice neoznačene i kliknite '''''Vrati'''''.
Da bi izvršili selektivno vraćanje članaka, odaberite kutijice koje odgovaraju revizijama koje želite vratiti, i kliknite '''''Vrati'''''.
Klikom na '''''Očisti''''' ćete očistiti polje za komentar i sve kutijice.",
'undeleterevisions'            => '{{PLURAL:$1|$1 revizija arhivirana|$1 revizije arhivirane|$1 revizija arhivirano}}',
'undeletehistory'              => 'Ako vratite stranicu, sve revizije će biti vraćene njenoj historiji.
Ako je nova stranica istog imena napravljena od brisanja, vraćene revizije će se pojaviti u njenoj ranijoj historiji.',
'undeleterevdel'               => 'Vraćanje obrisanog se neće izvršiti ako bi rezultiralo da zaglavlje stranice ili revizija datoteke bude djelomično obrisano.
U takvim slučajevima, morate ukloniti označene ili otkriti sakrivene najskorije obrisane revizije.',
'undeletehistorynoadmin'       => 'Ova stranica je izbrisana.  Ispod se nalazi dio istorije brisanja i istorija revizija izbrisane stranice.  Tekst izbrisane stranice je vidljiv samo korisnicima koji su administratori.',
'undelete-revision'            => 'Obrisana revizija stranice $1 (dana $4, u $5) od strane $3:',
'undeleterevision-missing'     => 'Nepoznata ili nedostajuća revizija.
Možda ste unijeli pogrešan link, ili je revizija vraćena ili uklonjena iz arhive.',
'undelete-nodiff'              => 'Nije pronađena ranija revizija.',
'undeletebtn'                  => 'Vrati',
'undeletelink'                 => 'vrati',
'undeletereset'                => 'Očisti',
'undeleteinvert'               => 'Izmijeni odabir',
'undeletecomment'              => 'Komentar:',
'undeletedarticle'             => 'vraćeno "$1"',
'undeletedrevisions'           => '{{PLURAL:$1|$1 revizija vraćena|$1 revizije vraćene|$1 revizija vraćeno}}',
'undeletedrevisions-files'     => '{{PLURAL:$1|1 revizija|$1 revizije|$1 revizija}} i {{PLURAL:$2|1 datoteka|$2 datoteke|$2 datoteka}} vraćeno',
'undeletedfiles'               => '{{PLURAL:$1|1 datoteka vraćena|$1 datoteke vraćene|$1 datoteka vraćeno}}',
'cannotundelete'               => 'Vraćanje nije uspjelo;
neko drugi je već vratio ovu stranicu.',
'undeletedpage'                => "<big>'''$1 je vraćena'''</big>

Provjerite [[Special:Log/delete|zapis brisanja]] za zapise najskorijih brisanja i vraćanja.",
'undelete-header'              => 'Pogledajte [[Special:Log/delete|zapisnik brisanja]] za nedavno obrisane stranice.',
'undelete-search-box'          => 'Pretraga obrisanih stranica',
'undelete-search-prefix'       => 'Prikaži stranice koje počinju sa:',
'undelete-search-submit'       => 'Traži',
'undelete-no-results'          => 'Nije pronađena odgovarajuća stranica u arhivi brisanja.',
'undelete-filename-mismatch'   => 'Ne može se vratiti revizija datoteke od $1: pogrešno ime datoteke',
'undelete-bad-store-key'       => 'Ne može se vratiti revizija datoteke sa vremenskom oznakom $1: datoteka je nestala prije brisanja.',
'undelete-cleanup-error'       => 'Greške pri brisanju nekorištene arhivske datoteke "$1".',
'undelete-missing-filearchive' => 'Ne može se vratiti arhivska datoteka sa ID oznakom $1 jer nije u bazi podataka.
Možda je već ranije vraćena.',
'undelete-error-short'         => 'Greška pri vraćanju datoteke: $1',
'undelete-error-long'          => 'Desile su se pogreške pri vraćanju datoteke:

$1',
'undelete-show-file-confirm'   => 'Da li ste sigurni da želite pogledati obrisanu reviziju datoteke "<nowiki>$1</nowiki>" od $2 u $3?',
'undelete-show-file-submit'    => 'Da',

# Namespace form on various pages
'namespace'      => 'Vrsta članka:',
'invert'         => 'Sve osim odabranog',
'blanknamespace' => '(Glavno)',

# Contributions
'contributions'       => 'Doprinos korisnika',
'contributions-title' => 'Doprinosi korisnika $1',
'mycontris'           => 'Moj doprinos',
'contribsub2'         => 'Za $1 ($2)',
'nocontribs'          => 'Nisu nađene promjene koje zadovoljavaju ove uslove.',
'uctop'               => ' (vrh)',
'month'               => 'Od mjeseca (i ranije):',
'year'                => 'Od godine (i ranije):',

'sp-contributions-newbies'       => 'Prikaži samo doprinose novih korisnika',
'sp-contributions-newbies-sub'   => 'Za nove korisnike',
'sp-contributions-newbies-title' => 'Doprinosi novih korisnika',
'sp-contributions-blocklog'      => 'Evidencija blokiranja',
'sp-contributions-search'        => 'Pretraga doprinosa',
'sp-contributions-username'      => 'IP adresa ili korisničko ime:',
'sp-contributions-submit'        => 'Traži',

# What links here
'whatlinkshere'            => 'Šta je povezano ovdje',
'whatlinkshere-title'      => 'Stranice koje vode na "$1"',
'whatlinkshere-page'       => 'Stranica:',
'linkshere'                => "Sljedeći članci vode na '''[[:$1]]''':",
'nolinkshere'              => "Nema linkova na '''[[:$1]]'''.",
'nolinkshere-ns'           => "Nijedna stranica nije povezana sa '''[[:$1]]''' u odabranom imenskom prostoru.",
'isredirect'               => 'preusmjerivač',
'istemplate'               => 'kao šablon',
'isimage'                  => 'link datoteke',
'whatlinkshere-prev'       => '{{PLURAL:$1|prethodni|prethodna|prethodnih}} $1',
'whatlinkshere-next'       => '{{PLURAL:$1|sljedeći|sljedeća|sljedećih}} $1',
'whatlinkshere-links'      => '← linkovi',
'whatlinkshere-hideredirs' => '$1 preusmjerenja',
'whatlinkshere-hidetrans'  => '$1 uključenja',
'whatlinkshere-hidelinks'  => '$1 linkove',
'whatlinkshere-hideimages' => '$1 linkove slika',
'whatlinkshere-filters'    => 'Filteri',

# Block/unblock
'blockip'                         => 'Blokiraj korisnika',
'blockip-legend'                  => 'Blokiranje korisnika',
'blockiptext'                     => 'Upotrebite donji upitnik da biste uklonili prava pisanja sa određene IP adrese ili korisničkog imena.  Ovo bi trebalo da bude urađeno samo da bi se spriječio vandalizam, i u skladu sa [[{{MediaWiki:Policy-url}}|smjernicama]]. Unesite konkretan razlog ispod (na primjer, navodeći koje stranice su vandalizovane).',
'ipaddress'                       => 'IP adresa:',
'ipadressorusername'              => 'IP adresa ili korisničko ime:',
'ipbexpiry'                       => 'Trajanje',
'ipbreason'                       => 'Razlog',
'ipbreasonotherlist'              => 'Ostali razlozi',
'ipbreason-dropdown'              => '*Najčešći razlozi blokiranja
**Netačne informacije
**Uklanjanje sadržaja stranica
**Postavljanje spam vanjskih linkova
**Ubacivanje gluposti/grafita
**Osobni napadi (ili napadačko ponašanje)
**Čarapare (zloupotreba više korisničkih računa)
**Neprihvatljivo korisničko ime',
'ipbanononly'                     => 'Blokiraj samo anonimne korisnike',
'ipbcreateaccount'                => 'Onemogući pravljenje računa',
'ipbemailban'                     => 'Onemogući korisnika da šalje e-mail',
'ipbenableautoblock'              => 'Automatski blokiraj zadnju IP adresu koju je koristio ovaj korisnik i sve druge IP adrese s kojih je on pokušao uređivati',
'ipbsubmit'                       => 'Blokirajte ovog korisnika',
'ipbother'                        => 'Ostali period:',
'ipboptions'                      => '15 minuta:15 min,1 sat:1 hour,2 sata:2 hours,6 sati:6 hours,12 sati:12 hours,1 dan:1 day,3 dana:3 days,1 sedmica:1 week,2 sedmice:2 weeks,1 mjesec:1 month,3 mjeseca:3 months,6 mjeseci:6 months,1 godine:1 year,zauvijek:infinite', # display1:time1,display2:time2,...
'ipbotheroption'                  => 'ostalo',
'ipbotherreason'                  => 'Ostali/dodatni razlozi:',
'ipbhidename'                     => 'Sakrij korisničko ime iz zapisa blokiranja, spiska aktivnih blokiranja i spisak korisnika',
'ipbwatchuser'                    => 'Prati korisničku stranicu i stranicu za razgovor ovog korisnika',
'ipballowusertalk'                => 'Dopusti ovom korisniku da mijenja vlastitu stranicu za razgovor dok je blokiran',
'ipb-change-block'                => 'Ponovno blokiraj korisnika sa novim postavkama',
'badipaddress'                    => 'Pogrešna IP adresa',
'blockipsuccesssub'               => 'Blokiranje je uspjelo',
'blockipsuccesstext'              => '[[Special:Contributions/$1|$1]] je blokiran.
<br />Pogledajte [[Special:IPBlockList|IP spisak blokiranih korisnika]] za pregled blokiranja.',
'ipb-edit-dropdown'               => 'Uredi razloge blokiranja',
'ipb-unblock-addr'                => 'Deblokiraj $1',
'ipb-unblock'                     => 'Deblokiraj korisničko ime ili IP adresu',
'ipb-blocklist-addr'              => 'Postojeće blokade za $1',
'ipb-blocklist'                   => 'Vidi postojeće blokade',
'ipb-blocklist-contribs'          => 'Doprinosi za $1',
'unblockip'                       => 'Odblokiraj korisnika',
'unblockiptext'                   => 'Upotrebite donji upitnik da bi ste vratili
pravo pisanja ranije blokiranoj IP adresi
ili korisničkom imenu.',
'ipusubmit'                       => 'Deblokirajte ovog korisnika',
'unblocked'                       => '[[User:$1|$1]] je deblokiran',
'unblocked-id'                    => 'Blokada ID oznake $1 je uklonjena',
'ipblocklist'                     => 'Spisak blokiranih IP adresa i korisničkih imena',
'ipblocklist-legend'              => 'Traži blokiranog korisnika',
'ipblocklist-username'            => 'Korisničko ime ili IP adresa:',
'ipblocklist-sh-userblocks'       => '$1 blokade računa',
'ipblocklist-sh-tempblocks'       => '$1 privremene blokade',
'ipblocklist-sh-addressblocks'    => '$1 pojedinačne IP blokade',
'ipblocklist-submit'              => 'Traži',
'blocklistline'                   => '$1, $2 blokirao korisnika $3 ($4)',
'infiniteblock'                   => 'nije ograničena',
'expiringblock'                   => 'ističe $1',
'anononlyblock'                   => 'samo anonimni korisnici',
'noautoblockblock'                => 'automatsko blokiranje onemogućeno',
'createaccountblock'              => 'blokirano pravljenje računa',
'emailblock'                      => 'e-mail blokiran',
'blocklist-nousertalk'            => 'ne može uređivati vlastitu stranicu za razgovor',
'ipblocklist-empty'               => 'Spisak blokiranja je prazan.',
'ipblocklist-no-results'          => 'Tražena IP adresa ili korisničko ime nisu blokirani.',
'blocklink'                       => 'blokirajte',
'unblocklink'                     => 'deblokiraj',
'contribslink'                    => 'doprinosi',
'autoblocker'                     => 'Automatski ste blokirani jer dijelite IP adresu sa "$1".  Razlog za blokiranje je: "\'\'\'$2\'\'\'"',
'blocklogpage'                    => 'Evidencija blokiranja',
'blocklog-fulllog'                => 'Potpuni spisak zapisa blokiranja',
'blocklogentry'                   => 'je blokirao [[$1]] sa vremenom isticanja blokade od $2 $3',
'reblock-logentry'                => 'promjena postavki blokiranja za [[$1]] sa vremenom isteka u $2 $3',
'blocklogtext'                    => 'Ovo je istorija blokiranja i deblokiranja korisnika.  Automatsko blokirane IP adrese nisu uspisane ovde.  Pogledajte [[Special:IPBlockList|blokirane IP adrese]] za spisak trenutnih zabrana i blokiranja.',
'unblocklogentry'                 => 'deblokiran $1',
'block-log-flags-anononly'        => 'samo anonimni korisnici',
'block-log-flags-nocreate'        => 'pravljenje računa onemogućeno',
'block-log-flags-noautoblock'     => 'automatsko blokiranje onemogućeno',
'block-log-flags-noemail'         => 'e-mail je blokiran',
'block-log-flags-nousertalk'      => 'ne može uređivati vlastitu stranicu za razgovor',
'block-log-flags-angry-autoblock' => 'omogućeno napredno autoblokiranje',
'range_block_disabled'            => 'Administratorska mogućnost da blokira grupe je isključena.',
'ipb_expiry_invalid'              => 'Pogrešno vrijeme trajanja.',
'ipb_expiry_temp'                 => 'Sakrivene blokade korisničkih imena moraju biti stalne.',
'ipb_already_blocked'             => '"$1" je već blokiran',
'ipb-needreblock'                 => '== Već blokirano ==
$1 je već blokiran. Da li želite promijeniti postavke?',
'ipb_cant_unblock'                => 'Greška: Blokada sa ID oznakom $1 nije pronađena.
Možda je već deblokirana.',
'ipb_blocked_as_range'            => 'Greška: IP adresa $1 nije direktno blokirana i ne može se deblokirati.
Međutim, možda je blokirana kao dio bloka $2, koji se ne može deblokirati.',
'ip_range_invalid'                => 'Netačan raspon IP adresa.',
'blockme'                         => 'Blokiraj me',
'proxyblocker'                    => 'Bloker proksija',
'proxyblocker-disabled'           => 'Ova funkcija je onemogućena.',
'proxyblockreason'                => 'Vaša IP adresa je blokirana jer je ona otvoreni proksi.  Molimo vas da kontaktirate vašeg davatelja internetskih usluga (Internet Service Provider-a) ili tehničku podršku i obavijestite ih o ovom ozbiljnom sigurnosnom problemu.',
'proxyblocksuccess'               => 'Proksi uspješno blokiran.',
'sorbsreason'                     => 'Vaša IP adresa je prikazana kao otvoreni proxy u DNSBL koji koristi {{SITENAME}}.',
'sorbs_create_account_reason'     => 'Vaša IP adresa je prikazana kao otvoreni proxy u DNSBL korišten od {{SITENAME}}.
Ne možete napraviti račun',
'cant-block-while-blocked'        => 'Ne možete blokirati druge korisnike dok ste blokirani.',

# Developer tools
'lockdb'              => 'Zaključajte bazu',
'unlockdb'            => 'Otključaj bazu',
'lockdbtext'          => 'Zaključavanje baze će svim korisnicima ukinuti mogućnost izmjene stranica,
promjene korisničkih podešavanja, izmjene praćenih članaka, i svega ostalog
što zahtjeva promjene u bazi.
Molimo Vas da potvrdite da je ovo zaista ono što namjeravate da uradite, i da ćete
otkučati bazu kad završite posao oko njenog održavanja.',
'unlockdbtext'        => 'Otključavanje baze će svim korisnicima vratiti mogućnost
izmjene stranica, promjene korisničkih stranica, izmjene spiska praćenih članaka,
i svega ostalog što zahtjeva promjene u bazi.
Molimo Vas da potvrdite da je ovo zaista ono što namijeravate da uradite.',
'lockconfirm'         => 'Da, zaista želim da zaključam bazu.',
'unlockconfirm'       => 'Da, zaista želim da otključam bazu.',
'lockbtn'             => 'Zaključajte bazu',
'unlockbtn'           => 'Otključaj bazu',
'locknoconfirm'       => 'Niste potvrdili svoju namjeru.',
'lockdbsuccesssub'    => 'Baza je zaključana',
'unlockdbsuccesssub'  => 'Baza je otključana',
'lockdbsuccesstext'   => '{{SITENAME}} baza podataka je zaključana. <br /> Sjetite se da je otključate kad završite sa održavanjem.',
'unlockdbsuccesstext' => '{{SITENAME}} baza podataka je otključana.',
'lockfilenotwritable' => 'Datoteka zaključavanja baze je zaštićena za pisanje.
Ako želite otključati ili zaključati bazu, ova datoteka mora biti omogućena za pisanje od strane web servera.',
'databasenotlocked'   => 'Baza podataka je zaključana.',

# Move page
'move-page'                 => 'Preusmjeravanje $1',
'move-page-legend'          => 'Premjestite stranicu',
'movepagetext'              => "Korištenjem ovog formulara možete preusmjeriti članak 
zajedno sa stranicom za diskusiju tog članka.

Članak pod starim imenom će postati stranica koja preusmjerava 
na članak pod novim imenom. Linkovi koji vode na članak sa 
starim imenom neće biti preusmjereni. Vaša je dužnost da se 
pobrinete da svi linkovi koji vode na članak sa starim imenom 
budu adekvatno preusmjereni (stranica posebne namjene za 
održavanje je korisna za obavještenje o [[Special:BrokenRedirects|mrtvim]] i [[Special:DoubleRedirects|duplim]] preusmjerenjima).

Imajte na umu da članak '''neće''' biti preusmjeren ukoliko 
već postoji članak pod imenom na koje namjeravate da 
preusmjerite.

'''Pažnja!'''
Imajte na umu da preusmjeravanje popularnog članka može biti 
drastična i neočekivana promjena za korisnike.",
'movepagetalktext'          => "Odgovarajuća stranica za razgovor, ako postoji, će automatski biti premještena istovremeno '''osim:'''
*Ako premještate stranicu preko imenskih prostora,
*Neprazna stranica za razgovor već postoji pod novim imenom, ili
*Odčekirajte donju kutiju.

U tim slučajevima, moraćete ručno da premjestite stranicu ukoliko to želite.",
'movearticle'               => 'Premjestite stranicu',
'movenologin'               => 'Niste prijavljeni',
'movenologintext'           => 'Morate biti registrovani korisnik i [[Special:UserLogin|prijavljeni]] da biste premjestili stranicu.',
'movenotallowed'            => 'Nemate dopuštenje za premještanje stranica.',
'cant-move-user-page'       => 'Nemate dopuštenje da premještate korisničke stranice (bez podstranica).',
'cant-move-to-user-page'    => 'Nemate dopuštenje da premjestite stranicu na korisničku stranicu (osim na korisničku podstranicu).',
'newtitle'                  => 'Novi naslov',
'move-watch'                => 'Prati ovu stranicu',
'movepagebtn'               => 'premjestite stranicu',
'pagemovedsub'              => 'Premještanje uspjelo',
'movepage-moved'            => '<big>\'\'\'"$1" je premještena na "$2"\'\'\'</big>', # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'articleexists'             => 'Stranica pod tim imenom već postoji, ili je ime koje ste izabrali neispravno.  Molimo Vas da izaberete drugo ime.',
'cantmove-titleprotected'   => 'Ne možete premjestiti stranicu na ovu lokaciju, jer je novi naslov zaštićen od pravljenja',
'talkexists'                => 'Sama stranica je uspješno premještena, ali
stranica za razgovor nije mogla biti premještena jer takva već postoji na novom naslovu.  Molimo Vas da ih spojite ručno.',
'movedto'                   => 'premještena na',
'movetalk'                  => 'Premjestite "stranicu za razgovor" takođe, ako je moguće.',
'move-subpages'             => 'Premjesti sve podstranice, ako je moguće',
'move-talk-subpages'        => 'Premjesti sve podstranice stranice za razgovor, ako je moguće',
'movepage-page-exists'      => 'Stranica $1 već postoji i ne može biti automatski zamijenjena.',
'movepage-page-moved'       => 'Stranica $1 je premještena na $2.',
'movepage-page-unmoved'     => 'Stranica $1 ne može biti premještena na $2.',
'movepage-max-pages'        => 'Maksimum od $1 {{PLURAL:$1|stranice|stranice|stranica}} je premješteno i više nije moguće premjestiti automatski.',
'1movedto2'                 => 'članak [[$1]] premješten na [[$2]]',
'1movedto2_redir'           => 'stranica [[$1]] premještena u stranicu [[$2]] putem preusmjerenja',
'movelogpage'               => 'Protokol premještanja',
'movelogpagetext'           => 'Ispod je spisak stranica koje su premještene.',
'movereason'                => 'Razlog:',
'revertmove'                => 'vrati',
'delete_and_move'           => 'Brisanje i premještanje',
'delete_and_move_text'      => '==Brisanje neophodno==
Odredišna stranica "[[:$1]]" već postoji.
Da li je želite obrisati kako bi ste mogli izvršiti premještanje?',
'delete_and_move_confirm'   => 'Da, obriši stranicu',
'delete_and_move_reason'    => 'Obrisano da bi se napravio prostor za premještanje',
'selfmove'                  => 'Izvorni i ciljani naziv su isti; strana ne može da se premjesti preko same sebe.',
'immobile-source-namespace' => 'Ne mogu premjestiti stranice u imenski prostor "$1"',
'immobile-target-namespace' => 'Ne mogu se premjestiti stranice u imenski prostor "$1"',
'immobile-source-page'      => 'Ova stranica se ne može premještati.',
'immobile-target-page'      => 'Ne može se preusmjeriti na taj odredišni naslov.',
'imagenocrossnamespace'     => 'Ne može se premjestiti datoteka u nedatotečni imenski prostor',
'imagetypemismatch'         => 'Ekstenzija nove datoteke ne odgovara njenom tipu',
'imageinvalidfilename'      => 'Ciljno ime datoteke nije valjano',
'fix-double-redirects'      => 'Ažuriraj sva preusmjerenja koja vode ka originalnom naslovu',
'move-leave-redirect'       => 'Ostavi preusmjerenje',

# Export
'export'            => 'Izvezite stranice',
'exporttext'        => 'Možete izvesti tekst i historiju jedne ili više stranica uklopljene u XML kod. U budućim verzijama MediaWiki programa bit će moguće uvesti ovakvu stranicu u neki drugi wiki. Trenutna verzija to još ne podržava.

Za izvoz stranica unesite njihove naslove u polje ispod, jedan naslov po retku, i označite želite li trenutačnu verziju zajedno sa svim prijašnjima, ili samo trenutnu verziju sa informacijom o zadnjoj promjeni.

U drugom slučaju možete koristiti i vezu, npr. [[{{ns:special}}:Export/{{MediaWiki:Mainpage}}]] za članak [[{{MediaWiki:Mainpage}}]].',
'exportcuronly'     => 'Uključite samo trenutnu reviziju, ne cijelu istoriju',
'exportnohistory'   => "----
'''Pažnja:''' Izvoz cjelokupne historije stranica preko ovog obrasca je onemogućeno iz tehničkih razloga.",
'export-submit'     => 'Izvezi',
'export-addcattext' => 'Dodaj stranice iz kategorije:',
'export-addcat'     => 'Dodaj',
'export-download'   => 'Spremi kao datoteku',
'export-templates'  => 'Uključi šablone',

# Namespace 8 related
'allmessages'               => 'Sve sistemske poruke',
'allmessagesname'           => 'Naziv',
'allmessagesdefault'        => 'Pretpostavljeni tekst',
'allmessagescurrent'        => 'Trenutni tekst',
'allmessagestext'           => 'Ovo je spisak svih sistemskih poruka u {{ns:mediawiki}} imenskom prostoru.',
'allmessagesnotsupportedDB' => 'Ova stranica ne može biti korištena jer je <i>wgUseDatabaseMessages</i> isključen.',
'allmessagesfilter'         => 'Filter naziva poruka:',
'allmessagesmodified'       => 'Prikaži samo izmijenjeno',

# Thumbnails
'thumbnail-more'           => 'uvećajte',
'filemissing'              => 'Nedostaje fajl',
'thumbnail_error'          => 'Greška pri pravljenju umanjene slike: $1',
'djvu_page_error'          => 'DjVu stranica je van opsega',
'djvu_no_xml'              => 'Za XML-datoteku se ne može pozvati DjVu datoteka',
'thumbnail_invalid_params' => 'Pogrešne postavke smanjenog prikaza',
'thumbnail_dest_directory' => 'Ne može se napraviti odredišni folder',

# Special:Import
'import'                     => 'Ivoz stranica',
'importinterwiki'            => 'Međuwiki uvoz',
'import-interwiki-text'      => 'Izaberi wiki i naslov stranice za uvoz.
Datumi revizija i imena autora će biti sačuvani.
Sve akcije pri međuwiki uvozu će biti zapisane u [[Special:Log/import|zapisu uvoza]].',
'import-interwiki-history'   => 'Kopiraj sve verzije historije za ovu stranicu',
'import-interwiki-submit'    => 'Uvoz',
'import-interwiki-namespace' => 'Uvoz stranica u imenski prostor:',
'importtext'                 => 'Molimo Vas da izvezete datoteku iz izvornog wikija koristeći [[Special:Export|izvoz]], sačuvajte ga kod sebe i pošaljite ovdje.',
'importstart'                => 'Uvoz stranica...',
'import-revision-count'      => '$1 {{PLURAL:$1|revizija|revizije|revizija}}',
'importnopages'              => 'Nema stranica za uvoz.',
'importfailed'               => 'Uvoz nije uspjeo: $1',
'importunknownsource'        => 'Nepoznat izvorni tip uvoza',
'importcantopen'             => 'Ne može se otvoriti uvozna datoteka',
'importbadinterwiki'         => 'Loš interwiki link',
'importnotext'               => 'Stranica je prazna, ili bez teksta',
'importsuccess'              => 'Uspješno ste uvezli stranicu!',
'importhistoryconflict'      => 'Postoji konfliktna istorija revizija',
'importnosources'            => 'Nije definisan međuwiki izvor za uvoz i direktna postavljanja historije su onemogućena.',
'importnofile'               => 'Uvozna datoteka nije postavljena.',
'importuploaderrorsize'      => 'Postavljanje uvozne datoteke nije uspjelo.
Datoteka je veća nego što je dopušteno.',
'importuploaderrorpartial'   => 'Postavljanje uvozne datoteke nije uspjelo.
Datoteka je samo djelimično postavljena.',
'importuploaderrortemp'      => 'Postavljanje uvozne datoteke nije uspjelo.
Nedostaje privremeni folder.',
'import-parse-failure'       => 'Greška pri parsiranju XML uvoza',
'import-noarticle'           => 'Nema stranica za uvoz!',
'import-nonewrevisions'      => 'Sve revizije su prethodno uvežene.',
'xml-error-string'           => '$1 na liniji $2, kolona $3 (bajt $4): $5',
'import-upload'              => 'Postavljanje XML podataka',
'import-token-mismatch'      => 'Izgubljeni podaci sesije. Molimo pokušajte ponovno.',
'import-invalid-interwiki'   => 'Ne može se uvesti iz navedenog wikija.',

# Import log
'importlogpage'                    => 'Zapisnik uvoza',
'importlogpagetext'                => 'Administrativni uvozi stranica sa historijom izmjena sa drugih wikija.',
'import-logentry-upload'           => 'uveženo [[$1]] putem postavljanja datoteke',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|revizija|revizije|revizija}}',
'import-logentry-interwiki'        => "uveženo (''transwikied'') $1",
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|revizija|revizije|revizija}} od $2',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Moja korisnička stranica',
'tooltip-pt-anonuserpage'         => 'Korisnička stranica za ip koju Vi uređujete kao',
'tooltip-pt-mytalk'               => 'Moja stranica za razgovor',
'tooltip-pt-anontalk'             => 'Razgovor o doprinosu sa ove IP adrese',
'tooltip-pt-preferences'          => 'Moja podešavanja',
'tooltip-pt-watchlist'            => 'Spisak članaka koje pratite.',
'tooltip-pt-mycontris'            => 'Spisak mog doprinosa',
'tooltip-pt-login'                => 'Predlažemo da se prijavite, ali nije obvezno.',
'tooltip-pt-anonlogin'            => 'Prijava nije obavezna, ali donosi mnogo koristi.',
'tooltip-pt-logout'               => 'Odjava sa projekta {{SITENAME}}',
'tooltip-ca-talk'                 => 'Razgovor o sadržaju',
'tooltip-ca-edit'                 => 'Možete da uređujete ovaj članak. Molimo Vas, koristite dugme "Prikaži izgled',
'tooltip-ca-addsection'           => 'Dodajte svoj komentar.',
'tooltip-ca-viewsource'           => 'Ovaj članak je zaključan. Možete ga samo vidjeti ili kopirati kod.',
'tooltip-ca-history'              => 'Prethodne verzije ove stranice.',
'tooltip-ca-protect'              => 'Zaštitite stranicu od budućih izmjena',
'tooltip-ca-delete'               => 'Izbrišite ovu stranicu',
'tooltip-ca-undelete'             => 'Vratite izmjene koje su načinjene prije brisanja stranice',
'tooltip-ca-move'                 => 'Pomjerite stranicu',
'tooltip-ca-watch'                => 'Dodajte stranicu u listu praćnih članaka',
'tooltip-ca-unwatch'              => 'Izbrišite stranicu sa liste praćnih članaka',
'tooltip-search'                  => 'Pretraži projekat {{SITENAME}}',
'tooltip-search-go'               => 'Idi na stranicu sa tačno ovim imenom ako postoji',
'tooltip-search-fulltext'         => 'Pretraga stranica sa ovim tekstom',
'tooltip-p-logo'                  => 'Glavna stranica',
'tooltip-n-mainpage'              => 'Posjetite početnu stranicu',
'tooltip-n-portal'                => 'O projektu, šta možete da uradite, gdje se šta nalazi',
'tooltip-n-currentevents'         => 'Podaci o onome na čemu se trenutno radi',
'tooltip-n-recentchanges'         => 'Spisak nedavnih izmjena na wiki.',
'tooltip-n-randompage'            => 'Otvorite slučajan članak',
'tooltip-n-help'                  => 'Mjesto gdje možete nešto da naučite.',
'tooltip-t-whatlinkshere'         => 'Spisak svih članaka koji su povezani sa ovim',
'tooltip-t-recentchangeslinked'   => 'Nedavne izmjene na stranicama koje su povezane sa ovom',
'tooltip-feed-rss'                => 'RSS za ovu stranicu',
'tooltip-feed-atom'               => 'Atom za ovu stranicu',
'tooltip-t-contributions'         => 'Pogledajte spisak doprinosa ovog korisnika',
'tooltip-t-emailuser'             => 'Pošaljite pismo ovom korisniku',
'tooltip-t-upload'                => 'Postavi slike i druge medije',
'tooltip-t-specialpages'          => 'Spisak svih posebnih stranica',
'tooltip-t-print'                 => 'Verzija ove stranice za štampanje',
'tooltip-t-permalink'             => 'Stalni link ove verzije stranice',
'tooltip-ca-nstab-main'           => 'Pogledajte sadržaj članka',
'tooltip-ca-nstab-user'           => 'Pogledajte korisničku stranicu',
'tooltip-ca-nstab-media'          => 'Pogledajte medija fajl',
'tooltip-ca-nstab-special'        => 'Ovo je specijalna stranica i zato je ne možete uređivati',
'tooltip-ca-nstab-project'        => 'Pogledajte projekat stranicu',
'tooltip-ca-nstab-image'          => 'Pogledajte stranicu slike',
'tooltip-ca-nstab-mediawiki'      => 'Pogledajte sistemsku poruku',
'tooltip-ca-nstab-template'       => 'Pogledajte šablon',
'tooltip-ca-nstab-help'           => 'Pogledajte stranicu za pomoć',
'tooltip-ca-nstab-category'       => 'Pogledajte stranicu kategorije',
'tooltip-minoredit'               => 'Naznačite da se radi o maloj izmjeni',
'tooltip-save'                    => 'Sačuvajte Vaše izmjene',
'tooltip-preview'                 => 'Pregledajte Vaše izmjene; molimo Vas da koristite ovo prije nego što sačuvate stranicu!',
'tooltip-diff'                    => 'Prikaži moje izmjene u tekstu.',
'tooltip-compareselectedversions' => 'Pogledajte pazlike između dvije selektovane verzije ove stranice.',
'tooltip-watch'                   => 'Dodajte ovu stranicu na Vaš spisak praćenih članaka',
'tooltip-recreate'                => 'Ponovno pravljenje stranice iako je već brisana',
'tooltip-upload'                  => 'Započni postavljanje',
'tooltip-rollback'                => 'Brzo vraćanje izmjene(izmjena) ove stranice posljednjeg uređivača jednim klikom.',
'tooltip-undo'                    => 'Vraća posljednju izmjenu i otvara formu za uređivanje u modu pregleda.
Dopušta unos razloga u sažetak.',

# Metadata
'nodublincore'      => 'Dublin Core RDF metapodaci onemogućeni za ovaj server.',
'nocreativecommons' => 'Creative Commons RDF metapodaci onemogućeni za ovaj server.',
'notacceptable'     => 'Viki server ne može da pruži podatke u onom formatu koji Vaš klijent može da pročita.',

# Attribution
'anonymous'        => '{{PLURAL:$1|Anonimni korisnik|$1 anonimna korisnika|$1 anonimnih korisnika}} projekta {{SITENAME}}',
'siteuser'         => '{{SITENAME}} korisnik $1',
'lastmodifiedatby' => 'Ovu stranicu je posljednji put promjenio $3, u $2, $1', # $1 date, $2 time, $3 user
'othercontribs'    => 'Bazirano na radu od strane korisnika $1.',
'others'           => 'ostali',
'siteusers'        => '{{SITENAME}} {{PLURAL:$2|korisnik|korisnika}} $1',
'creditspage'      => 'Autori stranice',
'nocredits'        => 'Autori ove stranice nisu navedeni.',

# Spam protection
'spamprotectiontitle' => 'Filter za zaštitu od neželjenih poruka',
'spamprotectiontext'  => 'Strana koju želite da sačuvate je blokirana od strane filtera za neželjene poruke. 
Ovo je vjerovatno izazvao vezom ka vanjskoj nepoželjnoj stranici.',
'spamprotectionmatch' => 'Sledeći tekst je izazvao naš filter za neželjene poruke: $1',
'spambot_username'    => 'MediaWiki čišćenje spama',
'spam_reverting'      => 'Vraćanje na zadnju verziju koja ne sadrži linkove ka $1',
'spam_blanking'       => 'Sve revizije koje sadrže linkove ka $1, očisti',

# Info page
'infosubtitle'   => 'Informacije za stranicu',
'numedits'       => 'Broj izmjena (stranica): $1',
'numtalkedits'   => 'Broj izmjena (stranice za razgovor): $1',
'numwatchers'    => 'Broj onih koji pregledaju: $1',
'numauthors'     => 'Broj različitih autora (stranice): $1',
'numtalkauthors' => 'Broj različitih autora (stranice za razgovor): $1',

# Math options
'mw_math_png'    => 'Uvijek prikaži kao PNG',
'mw_math_simple' => 'HTML ako je jednostavno, inače PNG',
'mw_math_html'   => 'HTML ako je moguće, inače PNG',
'mw_math_source' => 'Ostavi kao TeX (za tekstualne preglednike)',
'mw_math_modern' => 'Preporučeno za moderne preglednike',
'mw_math_mathml' => 'MathML ako je moguće (eksperimentalno)',

# Patrolling
'markaspatrolleddiff'                 => 'Označi kao patrolirano',
'markaspatrolledtext'                 => 'Označi ovaj članak kao patroliran',
'markedaspatrolled'                   => 'Označeno kao patrolirano',
'markedaspatrolledtext'               => 'Izabrana revizija je označena kao patrolirana.',
'rcpatroldisabled'                    => 'Patroliranje nedavnih izmjena onemogućeno',
'rcpatroldisabledtext'                => 'Funkcija patroliranja nedavnih izmjena je trenutno isključena.',
'markedaspatrollederror'              => 'Ne može se označiti kao patrolirano',
'markedaspatrollederrortext'          => 'Morate naglasiti reviziju koju treba označiti kao patroliranu.',
'markedaspatrollederror-noautopatrol' => 'Nije Vam dopušteno da vlastite izmjene označavate patroliranim.',

# Patrol log
'patrol-log-page'      => 'Zapisnik patroliranja',
'patrol-log-header'    => 'Ovdje se nalazi zapis patroliranih revizija.',
'patrol-log-line'      => 'označeno $1 od $2 patrolirano $3',
'patrol-log-auto'      => '(automatsko)',
'log-show-hide-patrol' => '$1 zapis patroliranja',

# Image deletion
'deletedrevision'                 => 'Obrisana stara revizija $1',
'filedeleteerror-short'           => 'Greška pri brisanju datoteke: $1',
'filedeleteerror-long'            => 'Desile su se greške pri brisanju datoteke:

$1',
'filedelete-missing'              => 'Datoteka "$1" ne može biti obrisana, jer ne postoji.',
'filedelete-old-unregistered'     => 'Određena revizija datoteke "$1" se ne nalazi u bazi podataka.',
'filedelete-current-unregistered' => 'Određena datoteka "$1" se ne nalazi u bazi podataka.',
'filedelete-archive-read-only'    => 'Arhivski folder "$1" se postavljen samo za čitanje na serveru.',

# Browsing diffs
'previousdiff' => '← Starija izmjena',
'nextdiff'     => 'Novija izmjena →',

# Visual comparison
'visual-comparison' => 'Vizuelna usporedba',

# Media information
'mediawarning'         => "'''Upozorenje''': Ovaj fajl sadrži loš kod, njegovim izvršavanjem možete da ugrozite Vaš sistem.
<hr />",
'imagemaxsize'         => 'Ograniči slike na stranicama opisa datoteke na:',
'thumbsize'            => 'Veličina umanjenog prikaza:',
'widthheightpage'      => '$1×$2, $3 {{PLURAL:$3|stranica|stranice|stranica}}',
'file-info'            => '(veličina datoteke: $1, MIME tip: $2)',
'file-info-size'       => '($1 × $2 piksela, veličina datoteke: $3, MIME tip: $4)',
'file-nohires'         => '<small>Veća rezolucija nije dostupna.</small>',
'svg-long-desc'        => '(SVG fajl, dozvoljeno $1 × $2 piksela, veličina fajla: $3)',
'show-big-image'       => 'Vidi sliku u punoj veličini (rezoluciji)',
'show-big-image-thumb' => '<small>Veličina ovoga prikaza: $1 × $2 piksela</small>',

# Special:NewFiles
'newimages'             => 'Galerija novih slika',
'imagelisttext'         => "Ispod je spisak od '''$1''' {{PLURAL:$1|datoteke|datoteke|datoteka}} poređanih $2.",
'newimages-summary'     => 'Ova specijalna stranica prikazuje posljednje postavljene datoteke.',
'newimages-legend'      => 'Filter',
'newimages-label'       => 'Ime datoteke (ili dio imena):',
'showhidebots'          => '($1 botove)',
'noimages'              => 'Ništa za prikazati.',
'ilsubmit'              => 'Traži',
'bydate'                => 'po datumu',
'sp-newimages-showfrom' => 'Prikaz novih datoteka počev od $2, $1',

# Bad image list
'bad_image_list' => "Koristi se sljedeći format:

Razmatraju se samo stavke u spisku (linije koje počinju sa *). 
Prvi link u liniji mora biti povezan sa lošom slikom.
Svi drugi linkovi u istoj liniji se smatraju izuzecima, npr. kod stranica gdje se slike pojavljuju ''inline''.",

# Metadata
'metadata'          => 'Metapodaci',
'metadata-help'     => 'Ova datoteka sadržava dodatne podatke koje je vjerojatno dodala digitalna kamera ili skener u procesu snimanja odnosno digitalizacije. Ako je datoteka mijenjana, podatci možda nisu u skladu sa stvarnim stanjem.',
'metadata-expand'   => 'Pokaži sve detalje',
'metadata-collapse' => 'Sakrij dodatne podatke',
'metadata-fields'   => "Slijedeći EXIF metapodaci će biti prikazani ispod slike u tablici s metapodacima. Ostali će biti sakriveni (možete ih vidjeti ako kliknete na link ''Pokaži sve detalje'').
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* focallength", # Do not translate list items

# EXIF tags
'exif-imagewidth'                  => 'Širina',
'exif-imagelength'                 => 'Visina',
'exif-bitspersample'               => 'Bita po komponenti',
'exif-compression'                 => 'Šema kompresije',
'exif-photometricinterpretation'   => 'Sastav piksela',
'exif-orientation'                 => 'Orjentacija',
'exif-samplesperpixel'             => 'Broj komponenti',
'exif-planarconfiguration'         => 'Aranžiranje podataka',
'exif-ycbcrsubsampling'            => 'Odnos subsampling od Y do C',
'exif-ycbcrpositioning'            => 'Pozicioniranje Y i C',
'exif-xresolution'                 => 'Horizontalna rezolucija',
'exif-yresolution'                 => 'Vertikalna rezolucija',
'exif-resolutionunit'              => 'Jedinice X i Y rezolucije',
'exif-stripoffsets'                => 'Lokacija podataka slike',
'exif-rowsperstrip'                => 'Broj redaka po liniji',
'exif-stripbytecounts'             => 'Bita po kompresovanoj liniji',
'exif-jpeginterchangeformat'       => 'Presijek do JPEG SOI',
'exif-jpeginterchangeformatlength' => 'Bita JPEG podataka',
'exif-transferfunction'            => 'Transferna funkcija',
'exif-whitepoint'                  => 'Hromiranost bijele tačke',
'exif-primarychromaticities'       => 'Hromaticitet primarnih boja',
'exif-ycbcrcoefficients'           => 'Koeficijenti transformacije matrice prostora boja',
'exif-referenceblackwhite'         => 'Par crnih i bijelih referentnih vrijednosti',
'exif-datetime'                    => 'Vrijeme i datum promjene datoteke',
'exif-imagedescription'            => 'Naslov slike',
'exif-make'                        => 'Proizvođač kamere',
'exif-model'                       => 'Model kamere',
'exif-software'                    => 'Korišteni softver',
'exif-artist'                      => 'Autor',
'exif-copyright'                   => 'Vlasnik autorskih prava',
'exif-exifversion'                 => 'Exif verzija',
'exif-flashpixversion'             => 'Podržana verzija Flashpix',
'exif-colorspace'                  => 'Prostor boje',
'exif-componentsconfiguration'     => 'Značenje svake komponente',
'exif-compressedbitsperpixel'      => 'Način kompresije slike',
'exif-pixelydimension'             => 'Određena širina slike',
'exif-pixelxdimension'             => 'Određena visina slike',
'exif-makernote'                   => 'Bilješke proizvođača',
'exif-usercomment'                 => 'Korisnički komentari',
'exif-relatedsoundfile'            => 'Povezana zvučna datoteka',
'exif-datetimeoriginal'            => 'Datum i vrijeme generisanja podataka',
'exif-datetimedigitized'           => 'Datum i vrijeme digitalizacije',
'exif-subsectime'                  => 'Datum i vrijeme u dijelovima sekunde',
'exif-subsectimeoriginal'          => 'Originalno vrijeme i datum u dijelovima sekunde',
'exif-subsectimedigitized'         => 'Datum i vrijeme digitalizacije u dijelovima sekunde',
'exif-exposuretime'                => 'Vrijeme izlaganja (ekspozicije)',
'exif-exposuretime-format'         => '$1 sekundi ($2)',
'exif-fnumber'                     => 'F broj',
'exif-exposureprogram'             => 'Program ekspozicije',
'exif-spectralsensitivity'         => 'Spektralna osjetljivost',
'exif-isospeedratings'             => 'Rejting ISO brzine',
'exif-oecf'                        => 'Optoelektronski faktor konvezije',
'exif-shutterspeedvalue'           => 'Brzina okidača',
'exif-aperturevalue'               => 'Otvor blende',
'exif-brightnessvalue'             => 'Osvijetljenost',
'exif-exposurebiasvalue'           => 'Kompozicija ekspozicije',
'exif-maxaperturevalue'            => 'Najveći broj otvora blende',
'exif-subjectdistance'             => 'Udaljenost objekta',
'exif-meteringmode'                => 'Način mjerenja',
'exif-lightsource'                 => 'Izvor svjetlosti',
'exif-flash'                       => 'Blijesak',
'exif-focallength'                 => 'Fokusna dužina objektiva',
'exif-subjectarea'                 => 'Površina objekta',
'exif-flashenergy'                 => 'Energija blijeska',
'exif-spatialfrequencyresponse'    => 'Prostorna frekvencija odgovora',
'exif-focalplanexresolution'       => 'Rezolucija fokusne ravni X',
'exif-focalplaneyresolution'       => 'Rezolucija fokusne ravni Y',
'exif-focalplaneresolutionunit'    => 'Jedinica rezolucije fokusne ravni',
'exif-subjectlocation'             => 'Lokacija objekta',
'exif-exposureindex'               => 'Indeks ekspozicije',
'exif-sensingmethod'               => 'Vrsta senzora',
'exif-filesource'                  => 'Izvor datoteke',
'exif-scenetype'                   => 'Vrsta scene',
'exif-cfapattern'                  => 'CFA šema',
'exif-customrendered'              => 'Podešeno uređivanje slike',
'exif-exposuremode'                => 'Vrsta ekspozicije',
'exif-whitebalance'                => 'Bijeli balans',
'exif-digitalzoomratio'            => 'Odnos digitalnog zuma',
'exif-focallengthin35mmfilm'       => 'Fokusna dužina kod 35 mm filma',
'exif-scenecapturetype'            => 'Vrsta scene snimanja',
'exif-gaincontrol'                 => 'Kontrola scene',
'exif-contrast'                    => 'Kontrast',
'exif-saturation'                  => 'Saturacija',
'exif-sharpness'                   => 'Izoštrenost',
'exif-devicesettingdescription'    => 'Opis postavki uređaja',
'exif-subjectdistancerange'        => 'Udaljenost od objekta',
'exif-imageuniqueid'               => 'Jedinstveni ID slike',
'exif-gpsversionid'                => 'Verzija GPS bloka informacija',
'exif-gpslatituderef'              => 'Sjeverna ili južna širina',
'exif-gpslatitude'                 => 'Širina',
'exif-gpslongituderef'             => 'Istočna ili zapadna dužina',
'exif-gpslongitude'                => 'Dužina',
'exif-gpsaltituderef'              => 'Referenca visine',
'exif-gpsaltitude'                 => 'Nadmorska visina',
'exif-gpstimestamp'                => 'GPS vrijeme (atomski sat)',
'exif-gpssatellites'               => 'Sateliti korišteni pri mjerenju',
'exif-gpsstatus'                   => 'Status prijemnika',
'exif-gpsmeasuremode'              => 'Način mjerenja',
'exif-gpsdop'                      => 'Preciznost mjerenja',
'exif-gpsspeedref'                 => 'Jedinica brzine',
'exif-gpsspeed'                    => 'Brzina GPS prijemnika',
'exif-gpstrackref'                 => 'Referenca za smijer kretanja',
'exif-gpstrack'                    => 'Smijer kretanja',
'exif-gpsimgdirectionref'          => 'Referenca za smijer slike',
'exif-gpsimgdirection'             => 'Smijer slike',
'exif-gpsmapdatum'                 => 'Upotrijebljeni podaci geoloških mjerenja',
'exif-gpsdestlatituderef'          => 'Referenca za širinu odredišta',
'exif-gpsdestlatitude'             => 'Širina odredišta',
'exif-gpsdestlongituderef'         => 'Referenca za dužinu odredišta',
'exif-gpsdestlongitude'            => 'Dužina odredišta',
'exif-gpsdestbearingref'           => 'Indeks azimuta odredišta',
'exif-gpsdestbearing'              => 'Azimut odredišta',
'exif-gpsdestdistanceref'          => 'Referenca za udaljenost od odredišta',
'exif-gpsdestdistance'             => 'Udaljenost do odredišta',
'exif-gpsprocessingmethod'         => 'Naziv GPS metoda procesiranja',
'exif-gpsareainformation'          => 'Naziv GPS područja',
'exif-gpsdatestamp'                => 'GPS datum',
'exif-gpsdifferential'             => 'GPS diferencijalna korekcija',

# EXIF attributes
'exif-compression-1' => 'Nekompresovano',

'exif-unknowndate' => 'Nepoznat datum',

'exif-orientation-1' => 'Normalna', # 0th row: top; 0th column: left
'exif-orientation-2' => 'Horizontalno preokrenuto', # 0th row: top; 0th column: right
'exif-orientation-3' => 'Rotirano 180°', # 0th row: bottom; 0th column: right
'exif-orientation-4' => 'Vertikalno preokrenuto', # 0th row: bottom; 0th column: left
'exif-orientation-5' => 'Rotirano 90° suprotno kazaljke i vertikalno obrnuto', # 0th row: left; 0th column: top
'exif-orientation-6' => 'Rotirano 90° u smijeru kazaljke', # 0th row: right; 0th column: top
'exif-orientation-7' => 'Rotirano 90° u smijeru kazaljke i preokrenuto vertikalno', # 0th row: right; 0th column: bottom
'exif-orientation-8' => 'Rotirano 90° suprotno kazaljke', # 0th row: left; 0th column: bottom

'exif-planarconfiguration-1' => 'grubi format',
'exif-planarconfiguration-2' => 'format u ravni',

'exif-componentsconfiguration-0' => 'ne postoji',

'exif-exposureprogram-0' => 'Nije određen',
'exif-exposureprogram-1' => 'Ručno',
'exif-exposureprogram-2' => 'Normalni program',
'exif-exposureprogram-3' => 'Prioritet otvora blende',
'exif-exposureprogram-4' => 'Prioritet okidača',
'exif-exposureprogram-5' => 'Kreativni program (usmjeren ka dubini polja)',
'exif-exposureprogram-6' => 'Program akcije (usmjereno na veću brzinu okidača)',
'exif-exposureprogram-7' => 'Način portreta (za fotografije iz blizine sa pozadinom van fokusa)',
'exif-exposureprogram-8' => 'Način pejsaža (za pejsažne fotografije sa pozadinom u fokusu)',

'exif-subjectdistance-value' => '$1 metara',

'exif-meteringmode-0'   => 'Nepoznat',
'exif-meteringmode-1'   => 'Prosječan',
'exif-meteringmode-2'   => 'Srednji prosjek težišta',
'exif-meteringmode-3'   => 'Tačka',
'exif-meteringmode-4'   => 'Višestruka tačka',
'exif-meteringmode-5'   => 'Šema',
'exif-meteringmode-6'   => 'Djelimični',
'exif-meteringmode-255' => 'Ostalo',

'exif-lightsource-0'   => 'Nepoznat',
'exif-lightsource-1'   => 'Dnevno svjetlo',
'exif-lightsource-2'   => 'Fluorescentni',
'exif-lightsource-3'   => 'Volfram (svjetlo)',
'exif-lightsource-4'   => 'Blijesak',
'exif-lightsource-9'   => 'Lijepo vrijeme',
'exif-lightsource-10'  => 'Oblačno vrijeme',
'exif-lightsource-11'  => 'Osjenčeno',
'exif-lightsource-12'  => 'Dnevna fluorescencija (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Dnevna bijela fluorescencija (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Hladno bijela fluorescencija (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Bijela fluorescencija (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Standardno svjetlo A',
'exif-lightsource-18'  => 'Standardno svjetlo B',
'exif-lightsource-19'  => 'Standardno svjetlo C',
'exif-lightsource-24'  => 'ISO studio volfram',
'exif-lightsource-255' => 'Ostali izvori svjetlosti',

# Flash modes
'exif-flash-fired-0'    => 'Blijesak nije radio',
'exif-flash-fired-1'    => 'Blijesak radio',
'exif-flash-return-0'   => 'blijesak nije poslao nikakav odziv',
'exif-flash-return-2'   => 'nije otkriven blijesak',
'exif-flash-return-3'   => 'otkriven blijesak',
'exif-flash-mode-1'     => 'obavezan rad blijeska',
'exif-flash-mode-2'     => 'obavezno izbjegavanje blijeska',
'exif-flash-mode-3'     => 'automatski način',
'exif-flash-function-1' => 'Bez funkcije blijeska',
'exif-flash-redeye-1'   => 'način redukcije "crvenila očiju"',

'exif-focalplaneresolutionunit-2' => 'inči',

'exif-sensingmethod-1' => 'Nedefinisan',
'exif-sensingmethod-2' => 'Senzor boje površine sa jednim čipom',
'exif-sensingmethod-3' => 'Senzor boje površine sa dva čipa',
'exif-sensingmethod-4' => 'Senzor boje površine sa tri čipa',
'exif-sensingmethod-5' => 'Sekvencijalni senzor boje površine',
'exif-sensingmethod-7' => 'Trilinearni senzor',
'exif-sensingmethod-8' => 'Sekvencijalni senzor boje linija',

'exif-scenetype-1' => 'Direktno fotografisana slika',

'exif-customrendered-0' => 'Normalni proces',
'exif-customrendered-1' => 'Podešeni proces',

'exif-exposuremode-0' => 'Automatska ekpozicija',
'exif-exposuremode-1' => 'Ručna ekspozicija',
'exif-exposuremode-2' => 'Automatski određen raspon',

'exif-whitebalance-0' => 'Automatski bijeli balans',
'exif-whitebalance-1' => 'Ručno podešeni bijeli balans',

'exif-scenecapturetype-0' => 'Standardna',
'exif-scenecapturetype-1' => 'Pejsaž',
'exif-scenecapturetype-2' => 'Portret',
'exif-scenecapturetype-3' => 'Noćna scena',

'exif-gaincontrol-0' => 'Ništa',
'exif-gaincontrol-1' => 'Malo povećanje',
'exif-gaincontrol-2' => 'Veće povećanje',
'exif-gaincontrol-3' => 'Manje smanjenje',
'exif-gaincontrol-4' => 'Veće smanjenje',

'exif-contrast-0' => 'Normalni',
'exif-contrast-1' => 'Mehki',
'exif-contrast-2' => 'Snažni',

'exif-saturation-0' => 'Normalna',
'exif-saturation-1' => 'Niska zasićenost',
'exif-saturation-2' => 'Jako zasićenje',

'exif-sharpness-0' => 'Normalna',
'exif-sharpness-1' => 'Blago',
'exif-sharpness-2' => 'Oštro',

'exif-subjectdistancerange-0' => 'Nepoznat',
'exif-subjectdistancerange-1' => 'Makro',
'exif-subjectdistancerange-2' => 'Pogled izbliza',
'exif-subjectdistancerange-3' => 'Pogled iz daljine',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Sjeverna širina',
'exif-gpslatitude-s' => 'Južna širina',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Istočna dužina',
'exif-gpslongitude-w' => 'Zapadna dužina',

'exif-gpsstatus-a' => 'Mjerenje u toku',
'exif-gpsstatus-v' => 'Mjerenje van funkcije',

'exif-gpsmeasuremode-2' => 'dvodimenzionalno mjerenje',
'exif-gpsmeasuremode-3' => 'trodimenzionalno mjerenje',

# Pseudotags used for GPSSpeedRef and GPSDestDistanceRef
'exif-gpsspeed-k' => 'Kilometara na sat',
'exif-gpsspeed-m' => 'Milja na sat',
'exif-gpsspeed-n' => 'Čvorova',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Stvarni pravac',
'exif-gpsdirection-m' => 'Magnetski smijer',

# External editor support
'edit-externally'      => 'Izmjeni ovu sliku koristeći vanjski program',
'edit-externally-help' => '(Pogledajte [http://www.mediawiki.org/wiki/Manual:External_editors instrukcije za podešavanje] za više informacija)',

# 'all' in various places, this might be different for inflected languages
'recentchangesall' => 'sve',
'imagelistall'     => 'sve',
'watchlistall2'    => 'sve',
'namespacesall'    => 'sve',
'monthsall'        => 'sve',

# E-mail address confirmation
'confirmemail'             => 'Potvrdite adresu e-pošte',
'confirmemail_noemail'     => 'Niste unijeli tačnu e-mail adresu u Vaše [[Special:Preferences|korisničke postavke]].',
'confirmemail_text'        => 'Ova viki zahtjeva da potvrdite adresu Vaše e-pošte prije nego što koristite mogućnosti e-pošte. Aktivirajte dugme ispod kako bi ste poslali poštu za potvrdu na Vašu adresu. Pošta uključuje poveznicu koja sadrži kod; učitajte poveznicu u Vaš brauzer da bi ste potvrdili da je adresa Vaše e-pošte validna.',
'confirmemail_pending'     => '<div class="error">Konfirmacioni kod Vam je već poslan putem e-maila;
ako ste nedavno otvorili Vaš račun, trebali bi pričekati par minuta da poslana pošta stigne, prije nego što ponovno zahtijevate novi kod.</div>',
'confirmemail_send'        => 'Pošaljite kod za potvrdu',
'confirmemail_sent'        => 'E-pošta za potvrđivanje poslata.',
'confirmemail_oncreate'    => 'Kod za potvrđivanje Vam je poslat na Vašu e-mail adresu.
Taj kod nije neophodan za prijavljivanje, ali Vam ne potreban kako bi ste omogućili funkcije wikija zasnovane na e-mailu.',
'confirmemail_sendfailed'  => '{{SITENAME}} Vam ne može poslati poštu za potvrđivanje. Provjerite adresu zbog nepravilnih karaktera.

Povratna pošta: $1',
'confirmemail_invalid'     => 'Netačan kod za potvrdu. Moguće je da je kod istekao.',
'confirmemail_needlogin'   => 'Morate $1 da bi ste potvrdili Vašu e-mail adresu.',
'confirmemail_success'     => 'Adresa vaše e-pošte je potvrđena. Možete sad da se prijavite i uživate u viki.',
'confirmemail_loggedin'    => 'Adresa Vaše e-pošte je potvrđena.',
'confirmemail_error'       => 'Nešto je pošlo po zlu prilikom sačuvavanja vaše potvrde.',
'confirmemail_subject'     => 'Vikiriječnik adresa e-pošte za potvrđivanje',
'confirmemail_body'        => 'Neko, vjerovatno Vi, je sa IP adrese $1 registrovao nalog "$2" sa ovom adresom e-pošte na {{SITENAME}}.

Da potvrdite da ovaj nalog stvarno pripada vama i da aktivirate mogućnost e-pošte na {{SITENAME}}, otvorite ovu poveznicu u vašem pretraživaču:

$3

Ako ovo niste vi, pratite ovaj link da prekinete prijavu:
$5

Ovaj kod za potvrdu će isteći u $4.',
'confirmemail_invalidated' => 'Potvrda e-mail adrese otkazana',
'invalidateemail'          => 'Odustani od e-mail potvrde',

# Scary transclusion
'scarytranscludedisabled' => '[Međuwiki umetanje je isključeno]',
'scarytranscludefailed'   => '[Neuspješno preusmjerenje šablona na $1]',
'scarytranscludetoolong'  => '[URL je predugačak]',

# Trackbacks
'trackbackbox'      => '<div id="mw_trackbacks">Trackbacks za ovu stranicu:<br />
$1
</div>',
'trackbackremove'   => ' ([$1 Brisanje])',
'trackbacklink'     => 'Vraćanje',
'trackbackdeleteok' => 'Trackback je uspješno obrisan.',

# Delete conflict
'deletedwhileediting' => "'''Upozorenje''': Ova stranica je obrisana prije nego što ste počeli uređivati!",
'confirmrecreate'     => "Korisnik [[User:$1|$1]] ([[User talk:$1|razgovor]]) je obrisao ovaj članak pošto ste počeli uređivanje sa razlogom:
: ''$2''

Molimo Vas da potvrdite da stvarno želite da ponovo napravite ovaj članak.",
'recreate'            => 'Ponovno napravi',

# action=purge
'confirm_purge_button' => 'U redu',
'confirm-purge-top'    => 'Da li želite obrisati keš ove stranice?',
'confirm-purge-bottom' => 'Ispražnjava keš stranice i prikazuje najsvježiju verziju.',

# Multipage image navigation
'imgmultipageprev' => '← prethodna stranica',
'imgmultipagenext' => 'slijedeća stranica →',
'imgmultigo'       => 'Idi!',
'imgmultigoto'     => 'Idi na stranicu $1',

# Table pager
'ascending_abbrev'         => 'rast',
'descending_abbrev'        => 'opad',
'table_pager_next'         => 'Slijedeća stranica',
'table_pager_prev'         => 'Prethodna stranica',
'table_pager_first'        => 'Prva stranica',
'table_pager_last'         => 'Zadnja stranica',
'table_pager_limit'        => 'Pokaži $1 stavki po stranici',
'table_pager_limit_submit' => 'Idi',
'table_pager_empty'        => 'Bez rezultata',

# Auto-summaries
'autosumm-blank'   => 'Uklanjanje cjelokupnog sadržaja stranice',
'autosumm-replace' => "Zamjena stranice sa '$1'",
'autoredircomment' => 'Preusmjereno na [[$1]]',
'autosumm-new'     => 'Nova stranica: $1',

# Live preview
'livepreview-loading' => 'Punjenje…',
'livepreview-ready'   => 'Punjenje… Spreman!',
'livepreview-failed'  => 'Pregled uživo nije uspio! Pokušajte normalni pregled.',
'livepreview-error'   => 'Spajanje nije uspjelo: $1 "$2".
Pokušajte normalni pregled.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Promjene načinjene prije manje od $1 {{PLURAL:$1|sekunde|sekunde|sekundi}} možda neće biti prikazane na ovom spisku.',
'lag-warn-high'   => 'Zbog dužeg zastoja baze podataka na serveru, izmjene novije od $1 {{PLURAL:$1|sekunde|sekunde|sekundi}} možda neće biti prikazane na ovom spisku.',

# Watchlist editor
'watchlistedit-numitems'       => 'Vaš spisak praćenja sadrži {{PLURAL:$1|1 naslov|$1 naslova}}, izuzimajući stranice za razgovor.',
'watchlistedit-noitems'        => 'Vaš spisak praćenja ne sadrži naslove.',
'watchlistedit-normal-title'   => 'Uredi spisak praćenja',
'watchlistedit-normal-legend'  => 'Ukloni naslove iz spiska praćenja',
'watchlistedit-normal-explain' => 'Naslovi na Vašem spisku praćenja su prikazani ispod.
Da bi ste uklonili naslov, označite kutiju pored naslova, i kliknite Ukloni naslove.
Također možete [[Special:Watchlist/raw|napredno urediti spisak]].',
'watchlistedit-normal-submit'  => 'Ukloni naslove',
'watchlistedit-normal-done'    => '{{PLURAL:$1|1 naslov|$1 naslova}} je uklonjeno iz Vašeg spiska praćenja:',
'watchlistedit-raw-title'      => 'Napredno uređivanje spiska praćenja',
'watchlistedit-raw-legend'     => 'Napredno uređivanje spiska praćenja',
'watchlistedit-raw-explain'    => 'Naslovi u Vašem spisku praćenja su prikazani ispod, i mogu biti uređeni dodavanje ili brisanjem sa spiska; jedan naslov u svakom redu.
Kada završite, kliknite Ažuriraj spisak praćenja.
Također možete [[Special:Watchlist/edit|koristiti standardni uređivač]].',
'watchlistedit-raw-titles'     => 'Naslovi:',
'watchlistedit-raw-submit'     => 'Ažuriraj spisak praćenja',
'watchlistedit-raw-done'       => 'Vaš spisak praćenja je ažuriran.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|1 naslov je dodan|$1 naslova su dodana|$1 naslova je dodano}}:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|1 naslov je uklonjen|$1 naslova je uklonjeno}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Pregled promjena praćenih stranica',
'watchlisttools-edit' => 'Pogledaj i uredi listu praćenih članaka.',
'watchlisttools-raw'  => 'Uređivanje praćenih stranica u okviru praćenja.',

# Iranian month names
'iranian-calendar-m1' => 'Farvardin (Iranski kalendar)',

# Core parser functions
'unknown_extension_tag' => 'Nepoznata oznaka ekstenzije "$1"',
'duplicate-defaultsort' => 'Upozorenje: Postavljeni ključ sortiranja "$2" zamjenjuje raniji ključ "$1".',

# Special:Version
'version'                          => 'Verzija', # Not used as normal message but as header for the special page itself
'version-extensions'               => 'Instalirana proširenja (ekstenzije)',
'version-specialpages'             => 'Posebne stranice',
'version-parserhooks'              => 'Kuke parsera',
'version-variables'                => 'Promjenjive',
'version-other'                    => 'Ostalo',
'version-mediahandlers'            => 'Upravljači medije',
'version-hooks'                    => 'Kuke',
'version-extension-functions'      => 'Funkcije proširenja (ekstenzije)',
'version-parser-extensiontags'     => "Parser proširenja (''tagovi'')",
'version-parser-function-hooks'    => 'Kuke parserske funkcije',
'version-skin-extension-functions' => 'Funkcije proširenja kože',
'version-hook-name'                => 'Naziv kuke',
'version-hook-subscribedby'        => 'Pretplaćeno od',
'version-version'                  => 'Verzija',
'version-license'                  => 'Licenca',
'version-software'                 => 'Instalirani softver',
'version-software-product'         => 'Proizvod',
'version-software-version'         => 'Verzija',

# Special:FilePath
'filepath'         => 'Putanja datoteke',
'filepath-page'    => 'Datoteka:',
'filepath-submit'  => 'Putanja',
'filepath-summary' => 'Ova posebna stranica prikazuje potpunu putanju za datoteku.
Slike su prikazane u punoj veličini, ostale vrste datoteka su prikazane direktno sa, s njima povezanim, programom.

Unesite ime datoteke bez "{{ns:file}}:" prefiksa.',

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Pretraga za duplim datotekama',
'fileduplicatesearch-summary'  => 'Pretraga za duplim datotekama na bazi njihove haš vrijednosti.

Unesite ime datoteke bez "{{ns:file}}:" prefiksa.',
'fileduplicatesearch-legend'   => 'Pretraga za dvojnicima',
'fileduplicatesearch-filename' => 'Ime datoteke:',
'fileduplicatesearch-submit'   => 'Traži',
'fileduplicatesearch-info'     => '$1 × $2 piksel<br />Veličina datoteke: $3<br />MIME vrsta: $4',
'fileduplicatesearch-result-1' => 'Datoteka "$1" ne identičnih dvojnika.',
'fileduplicatesearch-result-n' => 'Datoteka "$1" ima {{PLURAL:$2|1 identičnog|$2 identična|$2 identičnih}} dvojnika.',

# Special:SpecialPages
'specialpages'                   => 'Posebne stranice',
'specialpages-note'              => '----
* Normalne posebne stranice.
* <span class="mw-specialpagerestricted">Zaštićene posebne stranice.</span>',
'specialpages-group-maintenance' => 'Izvještaji za održavanje',
'specialpages-group-other'       => 'Ostale posebne stranice',
'specialpages-group-login'       => 'Prijava / Otvaranje računa',
'specialpages-group-changes'     => 'Nedavne izmjene i evidencije',
'specialpages-group-media'       => 'Mediji i postavljanje datoteka',
'specialpages-group-users'       => 'Korisnici i korisnička prava',
'specialpages-group-highuse'     => 'Najčešće korištene stranice',
'specialpages-group-pages'       => 'Spisak stranica',
'specialpages-group-pagetools'   => 'Alati stranice',
'specialpages-group-wiki'        => 'Wiki podaci i alati',
'specialpages-group-redirects'   => 'Preusmjeravanje posebnih stranica',
'specialpages-group-spam'        => 'Alati za spam',

# Special:BlankPage
'blankpage'              => 'Prazna stranica',
'intentionallyblankpage' => 'Ova stranica je namjerno ostavljena prazna',

# External image whitelist
'external_image_whitelist' => ' #Ostavite ovu liniju onakva kakva je<pre>
#Stavite obične fragmente opisa (samo dio koji ide između //) ispod
#Ovi će biti spojeni sa URLovima sa vanjskih (eksternih) slika
#One koji se spoje biće prikazane kao slike, u suprotnom će se prikazati samo link
#Linije koje počinju sa # se tretiraju kao komentari

#Stavite sve regex fragmente iznad ove linije. Ostavite ovu liniju onakvu kakva je</pre>',

);
