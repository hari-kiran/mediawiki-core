<?php
/** Tatar (Latin) (Tatarça)
 *
 * @addtogroup Language
 *
 * @author לערי ריינהארט
 * @author Siebrand
 */

$namespaceNames = array(
        NS_MEDIA            => 'Media',
        NS_SPECIAL          => 'Maxsus',
        NS_MAIN             => '',
        NS_TALK             => 'Bäxäs',
        NS_USER             => 'Äğzä',
        NS_USER_TALK        => "Äğzä_bäxäse",
        # NS_PROJECT set by $wgMetaNamespace
        NS_PROJECT_TALK     => '$1_bäxäse',
        NS_IMAGE            => "Räsem",
        NS_IMAGE_TALK       => "Räsem_bäxäse",
        NS_MEDIAWIKI        => "MediaWiki",
        NS_MEDIAWIKI_TALK   => "MediaWiki_bäxäse",
        NS_TEMPLATE         => "Ürnäk",
        NS_TEMPLATE_TALK    => "Ürnäk_bäxäse",
        NS_HELP             => "Yärdäm",
        NS_HELP_TALK        => "Yärdäm_bäxäse",
        NS_CATEGORY         => "Törkem",
        NS_CATEGORY_TALK    => "Törkem_bäxäse"
);

$datePreferences = false;

$defaultDateFormat = 'dmy';

$dateFormats = array(
        'mdy time' => 'H:i',
        'mdy date' => 'M j, Y',
        'mdy both' => 'H:i, M j, Y',
        'dmy time' => 'H:i',
        'dmy date' => 'j. M Y',
        'dmy both' => 'j. M Y, H:i',
        'ymd time' => 'H:i',
        'ymd date' => 'Y M j',
        'ymd both' => 'H:i, Y M j',
        'ISO 8601 time' => 'xnH:xni:xns',
        'ISO 8601 date' => 'xnY-xnm-xnd',
        'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$magicWords = array(
#       ID                                 CASE  SYNONYMS
        'redirect'               => array( 0,    '#yünältü',                '#REDIRECT'),
        'notoc'                  => array( 0,    '__ETYUQ__',              '__NOTOC__'),
        'forcetoc'               => array( 0,    '__ETTIQ__',              '__FORCETOC__'),
        'toc'                    => array( 0,    '__ET__',                 '__TOC__'),
        'noeditsection'          => array( 0,    '__BÜLEMTÖZÄTÜYUQ__',     '__NOEDITSECTION__'),
        'currentmonth'           => array( 1,    'AĞIMDAĞI_AY',            'CURRENTMONTH'),
        'currentmonthname'       => array( 1,    'AĞIMDAĞI_AY_İSEME',      'CURRENTMONTHNAME'),
        'currentday'             => array( 1,    'AĞIMDAĞI_KÖN',           'CURRENTDAY'),
        'currentdayname'         => array( 1,    'AĞIMDAĞI_KÖN_İSEME',     'CURRENTDAYNAME'),
        'currentyear'            => array( 1,    'AĞIMDAĞI_YIL',           'CURRENTYEAR'),
        'currenttime'            => array( 1,    'AĞIMDAĞI_WAQIT',         'CURRENTTIME'),
        'numberofarticles'       => array( 1,    'MÄQÄLÄ_SANI',            'NUMBEROFARTICLES'),
        'currentmonthnamegen'    => array( 1,    'AĞIMDAĞI_AY_İSEME_GEN',  'CURRENTMONTHNAMEGEN'),
        'pagename'               => array( 1,    'BİTİSEME',               'PAGENAME'),
        'namespace'              => array( 1,    'İSEMARA',                'NAMESPACE'),
        'subst'                  => array( 0,    'TÖPÇEK:',                'SUBST:'),
        'img_right'              => array( 1,    'uñda',                   'right'),
        'img_left'               => array( 1,    'sulda',                  'left'),
        'img_none'               => array( 1,    'yuq',                    'none'),
        'int'                    => array( 0,    'EÇKE:',                   'INT:'),
        'sitename'               => array( 1,    'SÄXİFÄİSEME',            'SITENAME'),
        'ns'                     => array( 0,    'İA:',                    'NS:'),
        'localurl'               => array( 0,    'URINLIURL:',              'LOCALURL:'),
        'localurle'              => array( 0,    'URINLIURLE:',             'LOCALURLE:'),
);

$fallback8bitEncoding = "windows-1254";

$linkTrail = '/^([a-zäçğıñöşü“»]+)(.*)$/sDu';

$messages = array(
'skinpreview' => '(Küzläw)',

# Dates
'sunday'    => 'Yäkşämbe',
'monday'    => 'Düşämbe',
'tuesday'   => 'Sişämbe',
'wednesday' => 'Çärşämbe',
'thursday'  => 'Pänceşämbe',
'friday'    => 'Comğa',
'saturday'  => 'Şimbä',
'sun'       => 'Yäk',
'mon'       => 'Düş',
'tue'       => 'Siş',
'wed'       => 'Çär',
'thu'       => 'Pän',
'fri'       => 'Com',
'sat'       => 'Şim',
'january'   => 'Ğínwar',
'february'  => 'Febräl',
'march'     => 'Mart',
'april'     => 'Äpril',
'june'      => 'Yün',
'july'      => 'Yül',
'september' => 'Sentäber',
'october'   => 'Öktäber',
'november'  => 'Nöyäber',
'december'  => 'Dekäber',
'jan'       => 'Ğín',
'apr'       => 'Äpr',
'jun'       => 'Yün',
'jul'       => 'Yül',
'sep'       => 'Sen',
'oct'       => 'Ökt',
'nov'       => 'Nöy',
'dec'       => 'Dek',

# Categories related messages
'categories'         => 'Cíıntıqlar',
'categoriespagetext' => "Bu wiki'dä kiläse cíıntıqlar bar.",
'pagecategories'     => '{{PLURAL:$1|Cíıntıq|Cíıntıqlar}}',
'category_header'    => '«$1» cíıntığınıñ mäqäläläre',
'subcategories'      => 'Eçke cíıntıqlar',

'linkprefix'   => '/^(.*?)([a-zäçğıñöşüA-ZÄÇĞİÑÖŞÜ«„]+)$/sDu',
'mainpagetext' => 'Wiki programı uñışlı quyıldı.',

'about'          => 'Turında',
'article'        => 'Eçtälek bite',
'newwindow'      => '(yaña täräzädä açılır)',
'cancel'         => 'Kiräkmi',
'qbfind'         => 'Tap',
'qbbrowse'       => 'Qaraw',
'qbedit'         => 'Üzgärtü',
'qbpageoptions'  => 'Bu bit',
'qbpageinfo'     => 'Eçtälek',
'qbmyoptions'    => 'Bitlärem',
'qbspecialpages' => 'Maxsus bitlär',
'moredotdotdot'  => 'Kübräk...',
'mypage'         => 'Bitem',
'mytalk'         => 'Bäxäsem',
'anontalk'       => 'Bu IP turında bäxäs',
'navigation'     => 'Küçü',
'and'            => 'wä',

'errorpagetitle'    => 'Xata',
'returnto'          => '«$1» bitenä qaytu.',
'tagline'           => "{{SITENAME}}'dan",
'help'              => 'Yärdäm',
'search'            => 'Ezläw',
'searchbutton'      => 'Ezläw',
'go'                => 'Küç',
'searcharticle'     => 'Küç',
'history'           => 'Bit taríxı',
'history_short'     => 'Taríx',
'info_short'        => 'Belem',
'printableversion'  => 'Bastırulı yurama',
'edit'              => 'Üzgärtü',
'editthispage'      => 'Bit üzgärtü',
'delete'            => 'Beter',
'deletethispage'    => 'Beter bu bitne',
'undelete_short'    => 'Torğız',
'protect'           => 'Yaqla',
'protectthispage'   => 'Yaqla bu bitne',
'unprotect'         => 'İreklä',
'unprotectthispage' => 'İreklä bu biten',
'newpage'           => 'Yaña bit',
'talkpage'          => 'Bit turında bäxäs',
'specialpage'       => 'Maxsus Bit',
'personaltools'     => 'Şäxes qoralı',
'postcomment'       => 'Yazma qaldıru',
'articlepage'       => 'Eçtälek biten kürü',
'talk'              => 'Bäxäs',
'toolbox'           => 'Äsbäptirä',
'userpage'          => 'Äğzä biten qaraw',
'imagepage'         => 'Räsem biten qaraw',
'viewtalkpage'      => 'Bäxäsen qaraw',
'otherlanguages'    => 'Başqa tellärdä',
'redirectedfrom'    => '(«$1» bitennän yünältelde)',
'viewcount'         => 'Bu bit $1 märtäbä qaralğan.',
'protectedpage'     => 'Yaqlanğan bit',
'jumpto'            => 'Küç:',
'jumptosearch'      => 'ezläw',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => '{{SITENAME}} Turında',
'aboutpage'         => 'Project:Turında',
'bugreports'        => 'Xatanamä',
'bugreportspage'    => 'Project:Xata_yomğağı',
'copyright'         => 'Eçtälek $1 buyınça ireşüle.',
'copyrightpagename' => '{{SITENAME}} qälämxaqı',
'copyrightpage'     => '{{ns:project}}:Qälämxaq',
'currentevents'     => 'Xäzerge waqíğalar',
'currentevents-url' => 'Project:Xäzerge waqíğalar',
'edithelp'          => 'Üzgärtü xaqında',
'edithelppage'      => 'Help:Üzgärtü',
'faq'               => 'YBS',
'faqpage'           => 'Project:YBS',
'helppage'          => 'Help:Eçtälek',
'mainpage'          => 'Täwge Bit',
'portal'            => 'Cämğiät üzäge',
'portal-url'        => 'Project:Cämğiät Üzäge',
'sitesupport'       => 'Ximäyäçegä',
'sitesupport-url'   => 'Project:Ximäyäçegä',

'retrievedfrom'   => 'Bu bitneñ çığanağı: "$1"',
'newmessageslink' => 'yaña xäbär',
'editsection'     => 'üzgärtü',
'editold'         => 'üzgärtü',
'toc'             => 'Eçtälek tezmäse',
'showtoc'         => 'kürsät',
'hidetoc'         => 'yäşer',
'thisisdeleted'   => 'Qaraw/torğızu: $1',
'restorelink'     => '$1 beterelgän bit',
'feedlinks'       => 'Tasma:',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Mäqälä',
'nstab-user'      => 'Äğzä bite',
'nstab-media'     => 'Media bite',
'nstab-special'   => 'Maxsus',
'nstab-project'   => 'Proyekt bite',
'nstab-image'     => 'Räsem',
'nstab-mediawiki' => 'Sätir',
'nstab-template'  => 'Äzerlämä',
'nstab-help'      => 'Yärdäm',
'nstab-category'  => 'Cíıntıq',

# Main script and global functions
'nosuchaction'      => 'Andí ğämäl barlıqta yuq',
'nosuchspecialpage' => 'Andí maxsus bit yuq',

# General errors
'error'           => 'Xata',
'databaseerror'   => 'Biremlek xatası',
'readonly'        => 'Biremlek yabılğan ide',
'internalerror'   => 'Eçke xata',
'filecopyerror'   => 'Bu «$1» biremen «$2» iseme belän küpli almím.',
'filerenameerror' => 'Bu «$1» biremen «$2» iseme belän küçerä almím.',
'filedeleteerror' => 'Bu «$1» biremen beterep bulmí.',
'filenotfound'    => 'Bu «$1» biremen tabalmím.',
'formerror'       => 'Xata: formını künderä almím',
'badtitle'        => 'Yaraqsız başlıq',
'badtitletext'    => 'The requested page title was invalid, empty, or an incorrectly linked inter-language or inter-wiki title. It may contain one more characters which cannot be used in titles.',
'perfdisabled'    => 'Kiçer! Biremlekneñ äkren buluına säbäple, bu mömkinlek waqıtlıça sünderelgän ide.',
'perfcached'      => 'Astağı belem alxäterdän alındı wä anıñ xäzerge xäl belän turı kilmäwe bar:',
'viewsource'      => 'Mäqälä çığanağı',

# Login and logout pages
'logouttitle'           => 'Äğzä çığuı',
'welcomecreation'       => "== Räxim it, $1! ==

Sineñ xísabıñ yasaldı. {{SITENAME}}'dağı köyläwläreñne dä üzgärtergä onıtma.",
'loginpagetitle'        => 'Atama belän kerü',
'yourname'              => 'İreşü isemeñ',
'yourpassword'          => 'Sersüzeñ',
'yourpasswordagain'     => 'Sersüz qabat',
'remembermypassword'    => 'Tanı mine kergändä.',
'loginproblem'          => '<b>Kerüeñ waqıtında nindider qíınlıq bulıp çıqtı.</b><br />Qabat kerep qara!',
'login'                 => 'İreşü',
'userlogin'             => 'Xísap yasaw yä ki kerü',
'logout'                => 'Çığış',
'userlogout'            => 'Çığış',
'notloggedin'           => 'Kermädeñ äle',
'createaccount'         => 'Yaña xísap yasaw',
'createaccountmail'     => 'email buyınça',
'badretype'             => 'Kertelgän sersüzeñ kileşmi.',
'userexists'            => 'Äle genä kertkäneñ äğzä iseme qullanıla inde. Başqa isem sayla zínhar.',
'youremail'             => "Email'ıñ*",
'yourrealname'          => 'Çın isemeñ*',
'yournick'              => 'Atamañ:',
'loginerror'            => 'Kerü xatası',
'loginsuccesstitle'     => 'Uñışlı kergänbez',
'loginsuccess'          => "Sin {{SITENAME}}'ğa «$1» atama belän kergän buldıñ.",
'wrongpassword'         => 'Sin kertän sersüz xatalı axrısı. Tağın kertep qara zínhar.',
'mailmypassword'        => 'Yaña sersüzne xat belän cibär',
'passwordremindertitle' => '{{SITENAME}} sersüz xäterlätkeçe',
'passwordsent'          => 'Yaña sersüz «$1» terkälüendä kertelgän e-mail buyınça cibärelde.
Anı alğaç monda tağın kerep qara.',
'mailerror'             => 'Xat künderü xatası: $1',

# Edit page toolbar
'bold_sample'     => 'Qalın mäten',
'bold_tip'        => 'Qalın mäten',
'italic_sample'   => 'Awışlı mäten',
'italic_tip'      => 'Awışlı mäten',
'link_sample'     => 'Läñker başlığı',
'link_tip'        => 'Eçke läñker',
'extlink_sample'  => 'http://www.example.com läñker başlığı',
'extlink_tip'     => 'Tışqı läñker (alğı http:// quşımtasın onıtma)',
'headline_sample' => 'Başlıq mätene',
'headline_tip'    => '2. däräcäle başlıq',
'math_sample'     => 'Formulnı monda kert',
'math_tip'        => 'İsäpläw formulı (LaTeX)',
'nowiki_sample'   => 'Taqır mäten urnaştıram',
'nowiki_tip'      => 'Wiki-qalıp eşkärtmäskä',
'image_tip'       => 'Quşılğan räsem',
'sig_tip'         => 'Ímzañ belän zaman/waqıt tamğası',
'hr_tip'          => 'Yatma sızıq (siräk qullan)',

# Edit pages
'summary'              => 'Yomğaq',
'subject'              => 'Ni turında/başlıq',
'minoredit'            => 'Bu waq-töyäk üzgärmä genä',
'watchthis'            => 'Bitne küzätep torası',
'savearticle'          => 'Saqla biremne',
'preview'              => 'Küzläw',
'showpreview'          => 'Qarap alu...',
'blockedtitle'         => 'Qullanuçı tíıldı',
'whitelistedittitle'   => 'Üzgärtü öçen, kerü täläp itelä',
'whitelistedittext'    => 'Bitlärne üzgärtü öçen,
säxifägä isem belän [[Special:Userlogin|keräse]].',
'whitelistreadtitle'   => 'Uqu öçen kerü täläp itelä',
'whitelistreadtext'    => 'Bitlärne uqu öçen,
säxifägä isem belän [[Special:Userlogin|keräse]].',
'whitelistacctitle'    => 'Siña xísap yasaw tíılğan',
'loginreqtitle'        => 'Kerergä Kiräk',
'loginreqlink'         => 'keräse',
'accmailtitle'         => 'Sersüz künderelde.',
'accmailtext'          => "Bu '$1' öçen digän sersüz '$2' adrésına cibärelde.",
'newarticle'           => '(Yaña)',
'newarticletext'       => "Bulmağan bitkä kürsätkän läñker buyınça küçkänseñ.
Bu bit başlaw öçen, eçtälegen astağı qırda cía başla
(kübräge [[Yärdäm:Eçtälek|yärdäm bitendä]] tarwírlana).
Xata çığuınnan monda eläkkänseñ ikän, browserıñnıñ '''kire''' sädäfenä genä basası.",
'clearyourcache'       => "'''İskärmä:''' Saqlawdan soñ, üzgärmälärne kürü öçen browserıñnıñ alxäteren buşatası bar: '''Mozilla:''' click ''reload''(yä ki ''ctrl-r''), '''IE / Opera:''' ''ctrl-f5'', '''Safari:''' ''cmd-r'', '''Konqueror''' ''ctrl-r''.",
'updated'              => '(Yañartıldı)',
'note'                 => '<strong>İskärmä:</strong>',
'editing'              => 'Üzgärtü: $1',
'editconflict'         => 'Üzgärtü qíınlığı: $1',
'yourtext'             => 'Mäteneñ',
'storedversion'        => 'Saqlanğan yurama',
'editingold'           => '<strong>KİSÄTMÄ: Sin bu bitneñ iskergän yuramasın üzgärtäsen.
Ägär sin monı saqlísıñ ikän, şul yuramadan soñ yasalğan üzgärmälär yuğalır.</strong>',
'yourdiff'             => 'Ayırmalar',
'longpagewarning'      => "KİSÄTMÄ: Bu bit zurlığı $1 KB; qayber browserlarda 32 KB'tan da zurraq bulğan bitlärne kürsätkändä qíınlıqlar bula.
Zínhar, bu bitneñ wağraq kisäklärgä bülü turında uylap qara.",
'protectedpagewarning' => 'KİSÄTMÄ: Bu bit yaqlanğan ide wä anı idäräçe xoquqı iä bulğan genä keşe üzgärtä ala. Kübrägen [[Project:Bit_yaqlaw_qullanması|bit yaqlaw qullanmasında]] uqıp bula.',

# History pages
'currentrev' => 'Ağımdağı yurama',
'cur'        => 'xäzer',
'next'       => 'kiläse',
'last'       => 'soñğı',

# Diffs
'difference'              => '(Yuramalar ayırması)',
'lineno'                  => '$1. yul:',
'compareselectedversions' => 'Saylanğan yurama çağıştıru',

# Search results
'searchresults'     => 'Ezläw näticäse',
'titlematches'      => 'Mäqälä başlığı kileşä',
'notitlematches'    => 'Kileşkän bit başlığı yuq',
'notextmatches'     => 'Kileşkän bit mätene yuq',
'prevn'             => 'uzğan $1',
'nextn'             => 'kiläse $1',
'showingresults'    => 'Asta <b>$1</b> näticä kürsätelä <b>$2</b>. keremnän başlap.',
'showingresultsnum' => 'Asta <b>$3</b> näticä kürsätelä <b>$2</b>. keremnän başlap.',
'powersearch'       => 'Ezläw',

# Preferences page
'preferences'           => 'Köyläwem',
'mypreferences'         => 'Köyläwem',
'prefsnologin'          => 'Kermägänseñ',
'qbsettings'            => 'Tiztirä caylawı',
'changepassword'        => 'Sersüz üzgärtü',
'skin'                  => 'Tışlaw',
'dateformat'            => 'Waqıt qalıbı',
'math_failure'          => 'Uqí almadım',
'math_unknown_error'    => 'tanılmağan xata',
'math_unknown_function' => 'tanılmağan funksí',
'math_lexing_error'     => 'nöhü xatası',
'math_syntax_error'     => 'nöhü xatası',
'prefs-misc'            => 'Başqa köyläwlär',
'saveprefs'             => 'Saqla köyläwlärne',
'resetprefs'            => 'Awdar köyläwne',
'oldpassword'           => 'İske sersüz',
'newpassword'           => 'Yaña sersüz',
'retypenew'             => 'Yaña sersüz (qabat)',
'textboxsize'           => 'Mätenqır ülçäme',
'rows'                  => 'Yul:',
'columns'               => 'Buy:',
'searchresultshead'     => 'Ezläw',
'resultsperpage'        => 'Bit sayın näticä sanı',
'recentchangescount'    => 'Soñğı üzgärtmä tezmäsendä başlıq sanı',
'savedprefs'            => 'Köyläwläreñ saqlandı.',
'timezonelegend'        => 'Waqıt quşağı',
'localtime'             => 'Cirle waqıt belän kürsätäse',
'timezoneoffset'        => 'Çigenü',
'servertime'            => 'Serverda xäzerge waqıt',
'guesstimezone'         => 'Browserdan alası',
'defaultns'             => 'Ğädättä bu isemarada ezlise:',
'files'                 => 'Fayllar',

# Recent changes
'recentchanges'     => 'Soñğı üzgärtmälär',
'recentchangestext' => 'Bu bittä wikidä bulğan iñ soñğı üzgärtmäläre kürsätelä.',
'rcnote'            => 'Asta söñğı <strong>$2</strong> kön eçendä bulğan soñğı <strong>$1</strong> üzgärmä kürsätelä.',
'rcnotefrom'        => 'Asta <b>$2</b> zamanınnan soñ bulğan üzgärtmälär (<b>$1</b> tikle).',
'rclistfrom'        => '$1 zamannan soñ bulğan üzgärtmälär.',
'rclinks'           => 'Soñğı $2 kön eçendä bulğan $1 üzgärtmä<br />$3',
'diff'              => 'ayırma',
'hist'              => 'taríx',
'hide'              => 'yäşer',
'show'              => 'kürsät',
'minoreditletter'   => 'w',
'newpageletter'     => 'Y',

# Recent changes linked
'recentchangeslinked' => 'Bäyle üzgärmä',

# Upload
'upload'            => 'Birem yökläw',
'uploadbtn'         => 'Yöklä biremne',
'reupload'          => 'Qabat yökläw',
'reuploaddesc'      => 'Yökläw bitenä qaytu.',
'uploadnologin'     => 'Kermädeñ',
'uploadnologintext' => 'Birem yökläw öçen,
säxifägä isem belän [[Special:Userlogin|keräse]].',
'uploaderror'       => 'Yökläw xatası',
'uploadlog'         => 'yökläw könlege',
'uploadlogpage'     => 'Yökläw_könlege',
'uploadlogpagetext' => 'Asta soñğı arada yöklängän birem tezmäse kiterelä.',
'filename'          => 'Birem iseme',
'filedesc'          => 'Yomğaq',
'fileuploadsummary' => 'Yomğaq:',
'filestatus'        => 'Qälämxaq xäläte:',
'filesource'        => 'Çığanaq:',
'uploadedfiles'     => 'Yöklängän biremnär',
'ignorewarning'     => 'Kisätmägä qaramíçı biremne härxäldä saqla.',
'badfilename'       => 'Räsem iseme «$1» itep üzgärtelde.',
'successfulupload'  => 'Yökläw uñışlı uzdı',
'uploadwarning'     => 'Yökläw kisätmäse',
'savefile'          => 'Saqla biremne',
'uploadedimage'     => 'yöklände "$1"',
'uploaddisabled'    => 'Ğafu it, yökläw sünderelgän kileş tora.',
'uploadcorrupt'     => 'Bu birem yä üze watıq, yä quşımtası yaraqsız. Birem tikşerüdän soñ qabat yöklä zínhar.',

# Special:Imagelist
'imgdesc'   => 'añlatma',
'imgfile'   => 'fayl',
'imagelist' => 'Räsem tezmäse',

# Image description page
'imagelinks' => 'Räsem läñkerläre',

# Random page
'randompage' => 'Berär bit kürü',

# Statistics
'statistics' => 'Nöfüs',
'sitestats'  => '{{SITENAME}} nöfüse',
'userstats'  => 'Qullanuçı nöfüse',

'disambiguations'     => 'Saylaqbit tezmäse',
'disambiguationspage' => '{{ns:template}}:Disambig',

'doubleredirects' => 'Küpmälle yünältü',

'brokenredirects'     => 'Watıq Yünältülär',
'brokenredirectstext' => 'Kiläse yünältülär bulmağan bitlärgä qarílar.',

# Miscellaneous special pages
'nbytes'             => '$1 bayt',
'nlinks'             => '$1 läñker',
'nviews'             => '$1 qaraw',
'lonelypages'        => 'Yätim bitlär',
'uncategorizedpages' => 'Cíıntıqlanmağan bitlär',
'unusedimages'       => 'Qullanılmağan räsemnär',
'popularpages'       => 'Ğämäli bitlär',
'wantedpages'        => 'Kiräkle bitlär',
'shortpages'         => 'Qısqa bitlär',
'longpages'          => 'Ozın bitlär',
'listusers'          => 'Äğzä isemlege',
'specialpages'       => 'Maxsus bitlär',
'spheading'          => 'Bar keşelär öçen',
'newpages'           => 'Yaña bitlär',
'ancientpages'       => 'İñ iske bitlär',
'move'               => 'Küçerü',
'movethispage'       => 'Bu bit küçerü',
'notargettitle'      => 'Maqsatsız',

# Book sources
'booksources' => 'Kitap çığanağı',

# Special:Allpages
'allpages' => 'Bar bitlär',
'nextpage' => 'Kiläse bit ($1)',

# E-mail user
'emailuser'     => 'E-mail künderü',
'emailpage'     => 'E-mail künderü',
'noemailtitle'  => 'E-mail adres kürsätelmäde',
'emailfrom'     => 'Kemnän',
'emailto'       => 'Kemgä',
'emailsubject'  => 'Ni turında',
'emailmessage'  => 'Xäbär',
'emailsend'     => 'Künder',
'emailsent'     => 'E-mail künderelde',
'emailsenttext' => "E-mail'ıñ künderelde.",

# Watchlist
'watchlist'         => 'Saqtezmäm',
'mywatchlist'       => 'Saqtezmäm',
'nowatchlist'       => 'Saqtezmäñdä kertemnär yuq.',
'watchnologin'      => 'Kermädeñ',
'watchnologintext'  => 'Saqtezmäñ üzgärtü öçen, säxifägä isem belän [[Special:Userlogin|keräse]].',
'addedwatch'        => 'Saqtezmägä quşıldı',
'addedwatchtext'    => "«[[:\$1]]»  isemle mäqälä [[{{ns:special}}:Saqtezmä|saqtezmäseñä]] salındı.
Future changes to this page and its associated Talk page will be listed there,
and the page will appear '''bolded''' in the [[Special:Recentchanges|list of recent changes]] to
make it easier to pick out.

If you want to remove the page from your watchlist later, click \"Unwatch\" in the sidebar.",
'removedwatch'      => 'Saqtezmädän salındı',
'removedwatchtext'  => '«[[:$1]]» atlı bit saqtezmäñnän töşerelde.',
'watch'             => 'Saqlaw',
'watchthispage'     => 'Bitne küzätep torası',
'notanarticle'      => 'Eçtälek belän bit tügel',
'watchlistcontains' => 'Saqtezmäñ eçenä $1 bit kertelgän.',
'wlnote'            => 'Asta soñğı <b>$2</b> säğät eçendä yasalğan $1 üzgärmä kürsätelä.',

# Delete/protect/revert
'deletepage'         => 'Beter bitne',
'confirm'            => 'Raslaw',
'excontent'          => 'eçtälege ide:',
'exblank'            => 'bit buş ide',
'historywarning'     => 'Íğtíbar: Beterergä telägän biteneñ üz taríxı bar:',
'actioncomplete'     => 'Ğämäl tämam',
'deletedtext'        => '«<nowiki>$1</nowiki>» beterelgän buldı.
Soñğı beterülär $2 bitendä terkälenä.',
'deletedarticle'     => '«$1» beterelde',
'dellogpage'         => 'Beterü_köndälege',
'deletionlog'        => 'beterü köndälege',
'reverted'           => 'Aldağı yuramanı qaytart',
'deletecomment'      => 'Beterü säbäbe',
'editcomment'        => 'Bu üzgärtü taswírı: "<i>$1</i>".', # only shown if there is an edit comment
'protectlogpage'     => 'Yaqlaw_köndälege',
'protectedarticle'   => '[[$1]] yaqlandı',
'unprotectedarticle' => '[[$1]] ireklände',
'protect-title'      => '«$1» yaqlaw',
'protect-legend'     => 'Yaqlawnı raslaw',
'protectcomment'     => 'Yaqlaw säbäbe',

# Undelete
'undelete'         => 'Beterelgän bit torğızu',
'undeletebtn'      => 'Torğız!',
'undeletedarticle' => '«$1» torğızıldı',

# Namespace form on various pages
'blanknamespace' => '(Töp)',

# Contributions
'contributions' => 'Äğzä qatnaşuı',
'mycontris'     => 'Qatnaşuım',
'contribsub2'   => '$1 ($2) öçen',
'uctop'         => ' (öskä)',

# What links here
'whatlinkshere' => 'Kem bäyle moña',
'linklistsub'   => '(Läñker tezmäse)',
'nolinkshere'   => 'Moña bäyle bitlär yuq.',
'isredirect'    => 'küçerelü bite',

# Block/unblock
'blockip'            => 'Qullanuçı tíu',
'ipaddress'          => 'IP Adres/äğzäisem',
'ipbexpiry'          => 'İskerer',
'ipbreason'          => 'Säbäp',
'ipbsubmit'          => 'Bu keşene tíu',
'badipaddress'       => 'Xatalı IP adrésı',
'blockipsuccesssub'  => 'Tíu uzdı',
'blockipsuccesstext' => '«$1» tíılğan buldı.
<br />See [[Special:Ipblocklist|IP block list]] to review blocks.',
'unblockip'          => 'Äğzäne irekläw',
'ipusubmit'          => 'Bu adresnı irekläw',
'ipblocklist'        => 'Tíılğan IP/äğzä tezmäse',
'blocklink'          => 'tíu',
'contribslink'       => 'qatnaşuı',
'blocklogpage'       => 'Tíu_köndälege',
'ipb_expiry_invalid' => 'İskärü waqıtı xatalı.',
'ip_range_invalid'   => 'Xatalı IP arası.',
'proxyblocker'       => 'Proxy tíu',
'proxyblocksuccess'  => 'Buldı.',

# Developer tools
'lockdb'              => 'Biremlekne yozaqlaw',
'unlockdb'            => 'Biremlek irekläw',
'lockconfirm'         => 'Äye, min biremlekne çınlap ta yozaqlarğa buldım.',
'lockbtn'             => 'Biremlekne yozaqlaw',
'lockdbsuccesssub'    => 'Biremlek yözaqlandı',
'unlockdbsuccesssub'  => 'Biremlek yozağı salındı',
'unlockdbsuccesstext' => 'Bu biremlek yozağı salınğan ide.',

# Move page
'move-page-legend' => 'Bit küçerü',
'movepagetalktext' => "Bäyle bulğan bäxäs bite kiläse oçraqlarda töp bite belän beryulı '''küçerelmi qala''':
* Töp bit [[Yärdäm:İsemara|isemara]] arqılı küçerelä;
* Yaña başlıq astında buş bulmağan ikençe bit bulğanda;
* Astağı tamğaqır sünderelgän bulsa.

Bu äytelgän oçraqlarda bäxäs biten ayırım küçerergä turı kiler.",
'movearticle'      => 'Küçeräse bit',
'movenologin'      => 'Kermädeñ',
'newtitle'         => 'Yaña başlıq',
'movepagebtn'      => 'Küçer bitne',
'pagemovedsub'     => 'Küçerü uñışlı uzdı',
'articleexists'    => 'Andí atlı bit bar inde,
yä isä saylanğan isem yaraqsız buldı. Başqa isem sayla zínhar.',
'movedto'          => 'küçerelde:',
'movetalk'         => 'Mömkin bulsa, «bäxäs» biten dä küçer.',
'talkpagemoved'    => 'Aña bäyle bäxäs bite şulay uq küçerelde.',
'talkpagenotmoved' => 'Aña bäyle bäxäs bite <strong>küçerelmäde</strong>.',
'1movedto2'        => '$1 moña küçte: $2',
'1movedto2_redir'  => '$1 moña küçte: $2 (yünältü aşa)',

# Namespace 8 related
'allmessages'     => 'Säxifäneñ bar sätirläre',
'allmessagestext' => 'Bu säxifäneñ MediaWiki: atarasında bulğan yazmalar tezmäse.',

# Thumbnails
'thumbnail-more' => 'Zuraytası',

# Special:Import
'import'        => 'Bitlärne yökläw',
'importfailed'  => 'Yökläw xatası: $1',
'importnotext'  => 'Buş yä ki mäten tügel',
'importsuccess' => 'Yökläw uñışlı buldı!',

# Tooltip help for the actions
'tooltip-pt-userpage'           => 'Şäxsi bitem',
'tooltip-pt-anonuserpage'       => 'The user page for the ip you',
'tooltip-pt-mytalk'             => 'Bäxäs bitem',
'tooltip-pt-preferences'        => 'Köyläwlärem',
'tooltip-pt-watchlist'          => 'The list of pages you',
'tooltip-pt-mycontris'          => 'Qatnaşuım tezmäse',
'tooltip-pt-logout'             => 'Çığış',
'tooltip-ca-edit'               => 'You can edit Bu bit. Please use the preview button before saving.',
'tooltip-ca-addsection'         => 'Bu bäxästä yazma östäw.',
'tooltip-ca-viewsource'         => 'Bu bit yaqlanğan ide. Anıñ çığanağın kürä alasıñ.',
'tooltip-ca-history'            => 'Bu bitneñ soñğı yuramaları.',
'tooltip-ca-protect'            => 'Bu bit yaqlaw',
'tooltip-ca-delete'             => 'Bu bit beterü',
'tooltip-ca-undelete'           => 'Restore the edits done to Bu bit before it was deleted',
'tooltip-ca-move'               => 'Bu bit küçerü',
'tooltip-ca-watch'              => 'Bu bitne saqtezmägä östäw',
'tooltip-ca-unwatch'            => 'Bu bitne saqtezmädän töşerü',
'tooltip-search'                => 'Äydä, ezlä monı',
'tooltip-p-logo'                => 'Täwge Bit',
'tooltip-n-mainpage'            => 'Täwge Bitkä küçü',
'tooltip-n-randompage'          => 'Berär nindi bit kürsätä',
'tooltip-n-sitesupport'         => 'Ximäyäçe bul',
'tooltip-t-recentchangeslinked' => 'Recent changes in pages linking to Bu bit',
'tooltip-feed-rss'              => 'Bu bitneñ RSS tasması',
'tooltip-feed-atom'             => 'Bu bitneñ Atom tasması',
'tooltip-t-upload'              => 'Upload images or media files',
'tooltip-t-specialpages'        => 'Bar maxsus bitlär tezmäse',
'tooltip-ca-nstab-main'         => 'Bu bit eçtälegen kürü',
'tooltip-ca-nstab-user'         => 'Bu äğzä biten kürü',
'tooltip-ca-nstab-media'        => 'Bu media biten kürü',
'tooltip-ca-nstab-special'      => 'Bu bit maxsus, wä sin anı üzgärtä almísıñ.',
'tooltip-ca-nstab-project'      => 'Proékt biten kürü',
'tooltip-ca-nstab-image'        => 'Bu räsem biten kürü',
'tooltip-ca-nstab-mediawiki'    => 'Bu säxifä sätiren kürü',
'tooltip-ca-nstab-template'     => 'Bu qalıpnı kürü',
'tooltip-ca-nstab-help'         => 'Bu yärdäm biten kürü',
'tooltip-minoredit'             => 'Bu üzgärtmä waq-töyäk dip bilgelä',
'tooltip-save'                  => 'Üzgärtüne saqlaw',

# Attribution
'anonymous'     => "{{SITENAME}}'nıñ tanılmağan kerüçe",
'siteuser'      => '{{SITENAME}} ägzäse $1',
'othercontribs' => '«$1» eşenä nigezlänä.',
'others'        => 'başqalar',
'siteusers'     => '{{SITENAME}} ägzäse $1',
'creditspage'   => 'Bit yasawında qatnaşqan',

# Spam protection
'spamprotectiontitle' => 'Çüpläwdän saqlanu eläge',

# Info page
'infosubtitle' => 'Bit turında',
'numedits'     => 'Üzgärtü sanı (mäqälä):',
'numtalkedits' => 'Üzgärtü sanı (bäxäs bite):',
'numwatchers'  => 'Küzätep toruçı sanı:',

# Special:Newimages
'ilsubmit' => 'Ezläw',
'bydate'   => 'waqıt buyınça',

# Special:Version
'version' => 'Yurama', # Not used as normal message but as header for the special page itself

);
