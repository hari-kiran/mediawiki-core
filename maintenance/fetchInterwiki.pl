#!/usr/bin/perl

$intermap = "http://usemod.com/intermap.txt";
unless( -r "intermap.txt" ) {
	print "Fetching $intermap...\n";
	# For some reason we're redirected to microsoft.com with wget useragent
	print `wget -U "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.0.1) Gecko/20020823 Netscape/7.0" $intermap`;
}

open IW, ">Interwiki.php";
print IW "<?
# Note -- this file is generated by maintenance/fetchInterwiki.pl
# Edit and rerun that script rather than modifying this directly.

/* private */ \$wgValidInterwikis = array(
	# General interwiki links from the InterMap
";

open MAP, "<intermap.txt";
while( $x = <MAP> ) {
	$x =~ /^([a-z0-9]+)\s(http:\/\/.+)$/i;
	($name, $url) = ($1, $2);
	print IW "\t\"$name\" => \"$url\$1\",\n";
}

print IW <<arrgghsomanyofthem

	# Some custom additions:
	"ReVo"	=>	"http://purl.org/NET/voko/revo/art/\$1.html",
	  # eg [[ReVo:cerami]], [[ReVo:astero]] - note X-sensitive!
	"EcheI"	=>	"http://www.ikso.net/cgi-bin/wiki.pl?\$1",
	"E\\xc4\\x89eI" =>	"http://www.ikso.net/cgi-bin/wiki.pl?\$1",
	"UnuMondo"	=>	"http://unumondo.com/cgi-bin/wiki.pl?\$1", # X-sensitive!
	"JEFO"	=>	"http://esperanto.jeunes.free.fr/vikio/index.php?\$1",
	"PMEG"	=>	"http://www.bertilow.com/pmeg/\$1.php",
		# ekz [[PMEG:gramatiko/kunligaj vortetoj/au]]
	"EnciclopediaLibre" => "http://enciclopedia.us.es/wiki.phtml?title=\$1",
	"PageHistory" => "http://www.wikipedia.org/w/wiki.phtml?title=\$1&action=history",
	"UserContributions" => "http://www.wikipedia.org/w/wiki.phtml?title=Special:Contributions&target=\$1",
	"BackLinks" => "http://www.wikipedia.org/w/wiki.phtml?title=Special:Whatlinkshere&target=\$1",

	# Wikipedia-specific stuff:
	# Special cases
	"w"		=> "http://www.wikipedia.org/wiki/\$1",
	"m"		=> "http://meta.wikipedia.org/wiki/\$1",
	"meta"		=> "http://meta.wikipedia.org/wiki/\$1",
	"sep11"		=> "http://sep11.wikipedia.org/wiki/\$1",
	"simple"=> "http://simple.wikipedia.com/wiki.cgi?\$1",
	"wiktionary"	=> "http://wiktionary.wikipedia.org/wiki/\$1",

	# ISO 639 2-letter language codes
	"aa"    => "http://aa.wikipedia.com/wiki.cgi?\$1",
	"ab"    => "http://ab.wikipedia.com/wiki.cgi?\$1",
	"af"    => "http://af.wikipedia.com/wiki.cgi?\$1",
	"am"    => "http://am.wikipedia.com/wiki.cgi?\$1",
	"ar"	=> "http://ar.wikipedia.com/wiki.cgi?\$1",
	"as"    => "http://as.wikipedia.com/wiki.cgi?\$1",
	"ay"    => "http://ay.wikipedia.com/wiki.cgi?\$1",
	"az"    => "http://az.wikipedia.com/wiki.cgi?\$1",
	"ba"    => "http://ba.wikipedia.com/wiki.cgi?\$1",
	"be"    => "http://be.wikipedia.com/wiki.cgi?\$1",
	"bh"    => "http://bh.wikipedia.com/wiki.cgi?\$1",
	"bi"    => "http://bi.wikipedia.com/wiki.cgi?\$1",
	"bn"    => "http://bn.wikipedia.com/wiki.cgi?\$1",
	"bs"    => "http://bs.wikipedia.org/wiki/\$1",
	"bo"    => "http://bo.wikipedia.com/wiki.cgi?\$1",
	"ca"	=> "http://ca.wikipedia.com/wiki.cgi?\$1",
	"co"    => "http://co.wikipedia.com/wiki.cgi?\$1",
	"cs"    => "http://cs.wikipedia.org/wiki/\$1",
	"cy"    => "http://cy.wikipedia.com/wiki.cgi?\$1",
	"da"    => "http://da.wikipedia.org/wiki/\$1",
	"de"	=> "http://de.wikipedia.org/wiki/\$1",
	"dk"    => "http://da.wikipedia.org/wiki/\$1",
	"dz"    => "http://dz.wikipedia.com/wiki.cgi?\$1",
	"el"    => "http://el.wikipedia.org/wiki/\$1",
	"en"	=> "http://www.wikipedia.org/wiki/\$1",    # May in future be renamed to en.wikipedia.org; should work as alternate
	"eo"	=> "http://eo.wikipedia.org/wiki/\$1",
	"es"	=> "http://es.wikipedia.org/wiki/\$1",
	"et"    => "http://et.wikipedia.com/wiki.cgi?\$1",
	"eu"    => "http://eu.wikipedia.com/wiki.cgi?\$1",
	"fa"    => "http://fa.wikipedia.com/wiki.cgi?\$1",
	"fi"    => "http://fi.wikipedia.com/wiki.cgi?\$1",
	"fj"    => "http://fj.wikipedia.com/wiki.cgi?\$1",
	"fo"    => "http://fo.wikipedia.com/wiki.cgi?\$1",
	"fr"	=> "http://fr.wikipedia.org/wiki/\$1",
	"fy"    => "http://fy.wikipedia.com/wiki.cgi?\$1",
	"ga"    => "http://ga.wikipedia.com/wiki.cgi?\$1",
	"gl"    => "http://gl.wikipedia.com/wiki.cgi?\$1",
	"gn"    => "http://gn.wikipedia.com/wiki.cgi?\$1",
	"gu"    => "http://gu.wikipedia.com/wiki.cgi?\$1",
	"ha"    => "http://ha.wikipedia.com/wiki.cgi?\$1",
	"he"	=> "http://he.wikipedia.com/wiki.cgi?\$1",
	"hi"    => "http://hi.wikipedia.com/wiki.cgi?\$1",
	"hr"    => "http://hr.wikipedia.org/wiki/\$1",
	"hu"	=> "http://hu.wikipedia.com/wiki.cgi?\$1",
	"hy"    => "http://hy.wikipedia.com/wiki.cgi?\$1",
	"ia"    => "http://ia.wikipedia.com/wiki.cgi?\$1",
	"id"    => "http://id.wikipedia.com/wiki.cgi?\$1",
	"ik"    => "http://ik.wikipedia.com/wiki.cgi?\$1",
	"is"    => "http://is.wikipedia.com/wiki.cgi?\$1",
	"it"	=> "http://it.wikipedia.com/wiki.cgi?\$1",
	"iu"    => "http://iu.wikipedia.com/wiki.cgi?\$1",
	"ja"	=> "http://ja.wikipedia.org/wiki/\$1",
	"jv"    => "http://jv.wikipedia.com/wiki.cgi?\$1",
	"ka"    => "http://ka.wikipedia.com/wiki.cgi?\$1",
	"kk"    => "http://kk.wikipedia.com/wiki.cgi?\$1",
	"kl"    => "http://kl.wikipedia.com/wiki.cgi?\$1",
	"km"    => "http://km.wikipedia.com/wiki.cgi?\$1",
	"kn"    => "http://kn.wikipedia.com/wiki.cgi?\$1",
	"ko"    => "http://ko.wikipedia.org/wiki/\$1",
	"ks"    => "http://ks.wikipedia.com/wiki.cgi?\$1",
	"ku"    => "http://ku.wikipedia.com/wiki.cgi?\$1",
	"ky"    => "http://ky.wikipedia.com/wiki.cgi?\$1",
	"la"    => "http://la.wikipedia.com/wiki.cgi?\$1",
	"lo"    => "http://lo.wikipedia.com/wiki.cgi?\$1",
	"lv"    => "http://lv.wikipedia.com/wiki.cgi?\$1",
	"mg"    => "http://mg.wikipedia.com/wiki.cgi?\$1",
	"mi"    => "http://mi.wikipedia.com/wiki.cgi?\$1",
	"mk"    => "http://mk.wikipedia.com/wiki.cgi?\$1",
	"ml"    => "http://ml.wikipedia.org/wiki/\$1",
	"mn"    => "http://mn.wikipedia.com/wiki.cgi?\$1",
	"mo"    => "http://mo.wikipedia.com/wiki.cgi?\$1",
	"mr"    => "http://mr.wikipedia.com/wiki.cgi?\$1",
	"ms"    => "http://ms.wikipedia.org/wiki/\$1",
	"my"    => "http://my.wikipedia.com/wiki.cgi?\$1",
	"na"    => "http://na.wikipedia.com/wiki.cgi?\$1",
	"ne"    => "http://ne.wikipedia.com/wiki.cgi?\$1",
	"nl"	=> "http://nl.wikipedia.org/wiki/\$1",
	"no"    => "http://no.wikipedia.com/wiki.cgi?\$1",
	"oc"    => "http://oc.wikipedia.com/wiki.cgi?\$1",
	"om"    => "http://om.wikipedia.com/wiki.cgi?\$1",
	"or"    => "http://or.wikipedia.com/wiki.cgi?\$1",
	"pa"    => "http://pa.wikipedia.com/wiki.cgi?\$1",
	"pl"	=> "http://pl.wikipedia.org/wiki/\$1",
	"ps"    => "http://ps.wikipedia.com/wiki.cgi?\$1",
	"pt"	=> "http://pt.wikipedia.com/wiki.cgi?\$1",
	"qu"    => "http://qu.wikipedia.com/wiki.cgi?\$1",
	"rm"    => "http://rm.wikipedia.com/wiki.cgi?\$1",
	"rn"    => "http://rn.wikipedia.com/wiki.cgi?\$1",
	"ro"    => "http://ro.wikipedia.com/wiki.cgi?\$1",
	"ru"	=> "http://ru.wikipedia.org/wiki/\$1",
	"rw"    => "http://rw.wikipedia.com/wiki.cgi?\$1",
	"sa"    => "http://sa.wikipedia.com/wiki.cgi?\$1",
	"sd"    => "http://sd.wikipedia.com/wiki.cgi?\$1",
	"sg"    => "http://sg.wikipedia.com/wiki.cgi?\$1",
	"sh"    => "http://sh.wikipedia.org/wiki/\$1",
	"si"    => "http://si.wikipedia.com/wiki.cgi?\$1",
	"sk"    => "http://sk.wikipedia.com/wiki.cgi?\$1",
	"sl"    => "http://sl.wikipedia.com/wiki.cgi?\$1",
	"sm"    => "http://sm.wikipedia.com/wiki.cgi?\$1",
	"sn"    => "http://sn.wikipedia.com/wiki.cgi?\$1",
	"so"    => "http://so.wikipedia.com/wiki.cgi?\$1",
	"sq"    => "http://sq.wikipedia.com/wiki.cgi?\$1",
	"sr"    => "http://sr.wikipedia.org/wiki/\$1",
	"ss"    => "http://ss.wikipedia.com/wiki.cgi?\$1",
	"st"    => "http://st.wikipedia.com/wiki.cgi?\$1",
	"su"    => "http://su.wikipedia.com/wiki.cgi?\$1",
	"sv"	=> "http://sv.wikipedia.org/wiki/\$1",
	"sw"    => "http://sw.wikipedia.com/wiki.cgi?\$1",
	"ta"    => "http://ta.wikipedia.com/wiki.cgi?\$1",
	"te"    => "http://te.wikipedia.com/wiki.cgi?\$1",
	"tg"    => "http://tg.wikipedia.com/wiki.cgi?\$1",
	"th"    => "http://th.wikipedia.com/wiki.cgi?\$1",
	"ti"    => "http://ti.wikipedia.com/wiki.cgi?\$1",
	"tk"    => "http://tk.wikipedia.com/wiki.cgi?\$1",
	"tl"    => "http://tl.wikipedia.com/wiki.cgi?\$1",
	"tn"    => "http://tn.wikipedia.com/wiki.cgi?\$1",
	"to"    => "http://to.wikipedia.com/wiki.cgi?\$1",
	"tr"    => "http://tr.wikipedia.org/wiki/\$1",
	"ts"    => "http://ts.wikipedia.com/wiki.cgi?\$1",
	"tt"    => "http://tt.wikipedia.com/wiki.cgi?\$1",
	"tw"    => "http://tw.wikipedia.com/wiki.cgi?\$1",
	"ug"    => "http://ug.wikipedia.com/wiki.cgi?\$1",
	"uk"    => "http://uk.wikipedia.com/wiki.cgi?\$1",
	"ur"    => "http://ur.wikipedia.com/wiki.cgi?\$1",
	"uz"    => "http://uz.wikipedia.com/wiki.cgi?\$1",
	"vi"    => "http://vi.wikipedia.com/wiki.cgi?\$1",
	"vo"    => "http://vo.wikipedia.com/wiki.cgi?\$1",
	"wo"    => "http://wo.wikipedia.com/wiki.cgi?\$1",
	"xh"    => "http://xh.wikipedia.com/wiki.cgi?\$1",
	"yi"    => "http://yi.wikipedia.com/wiki.cgi?\$1",
	"yo"    => "http://yo.wikipedia.com/wiki.cgi?\$1",
	"za"    => "http://za.wikipedia.com/wiki.cgi?\$1",
	"zh"	=> "http://zh.wikipedia.org/wiki/\$1",
	"zu"    => "http://zu.wikipedia.com/wiki.cgi?\$1"
);
?>
arrgghsomanyofthem
;
