<?php
/** Punjabi (ਪੰਜਾਬੀ)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author AS Alam
 * @author Aalam
 * @author Amire80
 * @author Anjalikaushal
 * @author Babanwalia
 * @author Gman124
 * @author Guglani
 * @author Jimidar
 * @author Kaganer
 * @author Raj Singh
 * @author Saurabh123
 * @author Sukh
 * @author Surinder.wadhawan
 * @author TariButtar
 * @author VibhasKS
 * @author Ævar Arnfjörð Bjarmason
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'ਮੀਡੀਆ',
	NS_SPECIAL          => 'ਖਾਸ',
	NS_TALK             => 'ਚਰਚਾ',
	NS_USER             => 'ਮੈਂਬਰ',
	NS_USER_TALK        => 'ਮੈਂਬਰ_ਚਰਚਾ',
	NS_PROJECT_TALK     => '$1_ਚਰਚਾ',
	NS_FILE             => 'ਤਸਵੀਰ',
	NS_FILE_TALK        => 'ਤਸਵੀਰ_ਚਰਚਾ',
	NS_MEDIAWIKI        => 'ਮੀਡੀਆਵਿਕਿ',
	NS_MEDIAWIKI_TALK   => 'ਮੀਡੀਆਵਿਕਿ_ਚਰਚਾ',
	NS_TEMPLATE         => 'ਨਮੂਨਾ',
	NS_TEMPLATE_TALK    => 'ਨਮੂਨਾ_ਚਰਚਾ',
	NS_HELP             => 'ਮਦਦ',
	NS_HELP_TALK        => 'ਮਦਦ_ਚਰਚਾ',
	NS_CATEGORY         => 'ਸ਼੍ਰੇਣੀ',
	NS_CATEGORY_TALK    => 'ਸ਼੍ਰੇਣੀ_ਚਰਚਾ',
);

$digitTransformTable = array(
	'0' => '੦', # &#x0a66;
	'1' => '੧', # &#x0a67;
	'2' => '੨', # &#x0a68;
	'3' => '੩', # &#x0a69;
	'4' => '੪', # &#x0a6a;
	'5' => '੫', # &#x0a6b;
	'6' => '੬', # &#x0a6c;
	'7' => '੭', # &#x0a6d;
	'8' => '੮', # &#x0a6e;
	'9' => '੯', # &#x0a6f;
);
$linkTrail = '/^([ਁਂਃਅਆਇਈਉਊਏਐਓਔਕਖਗਘਙਚਛਜਝਞਟਠਡਢਣਤਥਦਧਨਪਫਬਭਮਯਰਲਲ਼ਵਸ਼ਸਹ਼ਾਿੀੁੂੇੈੋੌ੍ਖ਼ਗ਼ਜ਼ੜਫ਼ੰੱੲੳa-z]+)(.*)$/sDu';

$digitGroupingPattern = "##,##,###";

$messages = array(
# User preference toggles
'tog-underline'               => 'ਲਿੰਕ ਹੇਠ-ਲਾਈਨ:',
'tog-justify'                 => 'ਪੈਰਾਗਰਾਫ਼ ਇਕਸਾਰ',
'tog-hideminor'               => 'ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਵਿੱਚੋਂ ਛੋਟੀਆਂ ਸੋਧਾਂ ਲੁਕਾਓ',
'tog-hidepatrolled'           => 'ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਵਿੱਚੋਂ ਜਾਂਚੀਆਂ ਸੋਧਾਂ ਲੁਕਾਓ',
'tog-newpageshidepatrolled'   => 'ਨਵੀਂ ਸਫ਼ਾ ਸੂਚੀ ਵਿੱਚੋਂ ਜਾਂਚੇ ਸਫ਼ੇ ਲੁਕਾਓ',
'tog-extendwatchlist'         => 'ਸਿਰਫ਼ ਤਾਜ਼ਾ ਹੀ ਨਹੀਂ, ਸਗੋਂ ਸਾਰੀਆਂ ਤਬਦੀਲੀਆਂ ਨੂੰ ਵਖਾਉਣ ਲਈ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਨੂੰ ਵਧਾਓ',
'tog-usenewrc'                => 'ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਅਤੇ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਸਫ਼ੇ ਮੁਤਾਬਕ ਤਬਦੀਲੀਆਂ ਦੇ ਗਰੁੱਕ ਬਣਾਓ (ਜਾਵਾਸਕਰਿਪਟ ਲੋੜੀਂਦੀ ਹੈ)',
'tog-numberheadings'          => 'ਆਟੋ-ਨੰਬਰ ਸਿਰਨਾਵੇਂ',
'tog-showtoolbar'             => 'ਸੋਧ ਸੰਦਬਕਸਾ ਵੇਖੋ',
'tog-editondblclick'          => "ਦੋ ਵਾਰ ਕਲਿੱਕ ਕਰਨ 'ਤੇ ਸਫ਼ੇ ਸੋਧੋ",
'tog-editsection'             => '[ਸੋਧੋ] ਲਿੰਕਾਂ ਰਾਹੀਂ ਭਾਗ ਸੋਧਣਾ ਚਾਲੂ ਕਰੋ',
'tog-editsectiononrightclick' => 'ਸੈਕਸ਼ਨ ਸਿਰਲੇਖਾਂ ’ਤੇ ਸੱਜੀ ਕਲਿੱਕ ਨਾਲ਼ ਸੋਧ ਚਾਲੂ ਕਰੋ (ਜਾਵਾਸਕਰਿਪਟ ਲੋੜੀਂਦੀ ਹੈ)',
'tog-showtoc'                 => 'ਤਤਕਰਾ ਵਿਖਾਓ (੩ ਤੋਂ ਵੱਧ ਸਿਰਲੇਖਾਂ ਵਾਲੇ ਸਫ਼ਿਆਂ ਲਈ)',
'tog-rememberpassword'        => 'ਇਸ ਬਰਾਊਜ਼ਰ ਉੱਤੇ ਮੇਰਾ ਦਾਖ਼ਲਾ ਯਾਦ ਰੱਖੋ (ਵੱਧ ਤੋਂ ਵੱਧ $1 {{PLURAL:$1|ਦਿਨ|ਦਿਨਾਂ}} ਲਈ)',
'tog-watchcreations'          => 'ਮੇਰੇ ਵਲੋਂ ਬਣਾਏ ਗਏ ਸਫ਼ੇ ਅਤੇ ਅੱਪਲੋਡ ਕੀਤੀਆਂ ਫ਼ਾਈਲਾਂ ਮੇਰੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਪਾਓ',
'tog-watchdefault'            => 'ਮੇਰੇ ਵੱਲੋਂ ਸੋਧੇ ਗਏ ਸਫ਼ੇ ਅਤੇ ਫ਼ਾਈਲਾਂ ਮੇਰੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਪਾਓ',
'tog-watchmoves'              => 'ਮੇਰੇ ਵੱਲੋਂ ਬਦਲੇ ਸਿਰਲੇਖਾਂ ਵਾਲ਼ੇ ਸਫ਼ੇ ਅਤੇ ਫ਼ਾਈਲਾਂ ਮੇਰੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਪਾਓ',
'tog-watchdeletion'           => 'ਮੇਰੇ ਵਲੋਂ ਮਿਟਾਏ ਗਏ ਸਫ਼ੇ ਅਤੇ ਫ਼ਾਈਲਾਂ ਮੇਰੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਪਾਓ',
'tog-minordefault'            => 'ਸਾਰੀਆਂ ਸੋਧਾਂ ’ਤੇ ਮੂਲ ਰੂਪ ਵਿਚ ਛੋਟੇ ਹੋਣ ਦਾ ਨਿਸ਼ਾਨ ਲਾਓ',
'tog-previewontop'            => 'ਸੋਧ ਬਕਸੇ ਤੋਂ ਪਹਿਲਾਂ ਝਲਕ ਵਖਾਓ',
'tog-previewonfirst'          => 'ਪਹਿਲੀ ਸੋਧ ਉੱਤੇ ਝਲਕ ਵਖਾਓ',
'tog-nocache'                 => 'ਬਰਾਊਜ਼ਰ ਸਫ਼ਾ ਕੈਸ਼ ਕਰਨਾ ਬੰਦ ਕਰੋ',
'tog-enotifwatchlistpages'    => 'ਜਦੋਂ ਮੇਰੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਦਰਜ ਕੋਈ ਸਫ਼ਾ ਜਾਂ ਫ਼ਾਈਲ ਬਦਲੀ ਜਾਵੇ ਤਾਂ ਮੈਨੂੰ ਈਮੇਲ ਭੇਜੋ',
'tog-enotifusertalkpages'     => 'ਜਦੋਂ ਮੇਰਾ ਗੱਲ-ਬਾਤ ਸਫ਼ਾ ਬਦਲਿਆ ਜਾਵੇ ਤਾਂ ਮੈਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ',
'tog-enotifminoredits'        => 'ਸਫ਼ਿਆਂ ਅਤੇ ਫ਼ਾਈਲਾਂ ਦੀਆਂ ਛੋਟੀਆਂ ਤਬਦੀਲੀਆਂ ਲਈ ਵੀ ਮੈਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ',
'tog-enotifrevealaddr'        => 'ਇਤਲਾਹ ਦੇਣ ਵਾਲੀਆਂ ਈ-ਮੇਲਾਂ ਵਿੱਚ ਮੇਰਾ ਈ-ਮੇਲ ਪਤਾ ਜ਼ਾਹਰ ਕਰੋ',
'tog-shownumberswatching'     => 'ਨਜ਼ਰ ਰੱਖ ਰਹੇ ਵਰਤੋਂਕਾਰਾਂ ਦੀ ਗਿਣਤੀ ਵਖਾਓ',
'tog-oldsig'                  => 'ਮੌਜੂਦਾ ਦਸਤਖ਼ਤ:',
'tog-fancysig'                => 'ਦਸਤਖ਼ਤ ਨੂੰ ਬਤੌਰ ਵਿਕੀਲਿਖਤ ਮੰਨੋ (ਬਿਨਾਂ ਆਟੋਮੈਟਿਕ ਲਿੰਕ)',
'tog-externaleditor'          => 'ਪਹਿਲਾਂ ਤੋਂ ਹੀ ਬਾਹਰੀ ਸੋਧਕ ਵਰਤੋ (ਸਿਰਫ਼ ਮਾਹਿਰਾਂ ਲਈ ਹੈ, ਤੁਹਾਡੇ ਕੰਪਿਊਟਰ ਤੇ ਖ਼ਾਸ ਸੈਟਿੰਗਾਂ ਲੋੜੀਂਦੀਆਂ ਹਨ। [//
www.mediawiki.org/wiki/
Manual:External_editors More
information.])',
'tog-externaldiff'            => 'ਪਹਿਲਾਂ ਤੋਂ ਹੀ ਬਾਹਰੀ ਫ਼ਰਕ ਵਰਤੋ (ਸਿਰਫ਼
ਮਾਹਿਰਾਂ ਲਈ ਹੈ, ਤੁਹਾਡੇ ਕੰਪਿਊਟਰ ਤੇ ਖ਼ਾਸ
ਸੈਟਿੰਗਾਂ ਲੋੜੀਂਦੀਆਂ ਹਨ। [//
www.mediawiki.org/wiki/
Manual:External_editors ਹੋਰ ਜਾਣਕਾਰੀ।])',
'tog-showjumplinks'           => '"ਇਸ ’ਤੇ ਜਾਓ" ਅਸੈਸਬਿਲਟੀ ਲਿੰਕ ਚਾਲੂ ਕਰੋ',
'tog-uselivepreview'          => 'ਸਿੱਧੀ ਝਲਕ ਵਰਤੋ (ਤਜਰਬੇ-ਅਧੀਨ)',
'tog-forceeditsummary'        => 'ਜਦੋਂ ਮੈਂ ਖ਼ਾਲੀ ਸੋਧ ਸਾਰ ਦੇਵਾਂ ਤਾਂ ਮੈਨੂੰ ਆਗਾਹ ਕਰੋ',
'tog-watchlisthideown'        => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚੋਂ ਮੇਰੀਆਂ ਸੋਧਾਂ ਲੁਕਾਓ',
'tog-watchlisthidebots'       => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚੋਂ ਬੋਟਾਂ ਦੀਆਂ ਸੋਧਾਂ ਲੁਕਾਓ',
'tog-watchlisthideminor'      => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚੋਂ ਛੋਟੀਆਂ ਸੋਧਾਂ ਲੁਕਾਓ',
'tog-watchlisthideliu'        => 'ਨਿਗਰਾਨੀ-ਸੂਚੀ ਵਿਚੋਂ ਦਾਖ਼ਲ ਹੋਏ ਮੈਂਬਰਾਂ ਦੀਆਂ ਸੋਧਾਂ ਓਹਲੇ ਕਰੋ',
'tog-watchlisthideanons'      => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚੋਂ ਗੁਮਨਾਮ ਮੈਂਬਰਾਂ ਦੇ ਕੀਤੇ ਫੇਰ-ਬਦਲ ਲੁਕਾਓ',
'tog-watchlisthidepatrolled'  => 'ਵੇਖੀਆਂ ਜਾ ਚੁੱਕੀਆਂ ਸੋਧਾਂ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚੋਂ ਲੁਕਾਓ',
'tog-ccmeonemails'            => 'ਜੋ ਈ-ਮੇਲਾਂ ਮੈਂ ਦੂਜੇ ਮੈਂਬਰਾਂ ਨੂੰ ਭੇਜਦਾ ਹਾਂ ਓਹਨਾਂ ਦੀਆਂ ਨਕਲਾਂ ਮੈਨੂੰ ਭੇਜੋ',
'tog-diffonly'                => 'ਫ਼ਰਕ ਤੋਂ ਹੇਠ ਸਫ਼ੇ ਦੀ ਸਮੱਗਰੀ ਨਾ ਵਖਾਓ',
'tog-showhiddencats'          => 'ਲੁਕਵੀਆਂ ਸ਼੍ਰੇਣੀਆਂ ਵਖਾਓ',
'tog-norollbackdiff'          => '"ਵਾਪਸ ਮੋੜੋ" ਅਮਲ ਵਿਚ ਲਿਆਣ ਮਗਰੋਂ ਫ਼ਰਕ ਨਾ ਵਖਾਓ',

'underline-always'  => 'ਹਮੇਸ਼ਾਂ',
'underline-never'   => 'ਕਦੇ ਨਹੀਂ',
'underline-default' => 'ਸਕਿਨ ਜਾਂ ਬਰਾਊਜ਼ਰ ਮੂਲ',

# Font style option in Special:Preferences
'editfont-style'     => 'ਸੋਧ ਖੇਤਰ ਫ਼ੌਂਟ ਸਟਾਈਲ:',
'editfont-default'   => 'ਬਰਾਊਜ਼ਰ ਮੂਲ',
'editfont-monospace' => 'ਮੋਨੋਸਪੇਸ ਫ਼ੌਂਟ',
'editfont-sansserif' => 'Sans-serif ਫ਼ੌਂਟ',
'editfont-serif'     => 'ਨੋਕਦਾਰ ਫ਼ੌਂਟ',

# Dates
'sunday'        => 'ਐਤਵਾਰ',
'monday'        => 'ਸੋਮਵਾਰ',
'tuesday'       => 'ਮੰਗਲਵਾਰ',
'wednesday'     => 'ਬੁੱਧਵਾਰ',
'thursday'      => 'ਵੀਰਵਾਰ',
'friday'        => 'ਸ਼ੁੱਕਰਵਾਰ',
'saturday'      => 'ਸ਼ਨਿੱਚਰਵਾਰ',
'sun'           => 'ਐਤ',
'mon'           => 'ਸੋਮ',
'tue'           => 'ਮੰਗਲ',
'wed'           => 'ਬੁੱਧ',
'thu'           => 'ਵੀਰ',
'fri'           => 'ਸ਼ੁੱਕਰ',
'sat'           => 'ਸ਼ਨਿੱਚਰ',
'january'       => 'ਜਨਵਰੀ',
'february'      => 'ਫਰਵਰੀ',
'march'         => 'ਮਾਰਚ',
'april'         => 'ਅਪ੍ਰੈਲ',
'may_long'      => 'ਮਈ',
'june'          => 'ਜੂਨ',
'july'          => 'ਜੁਲਾਈ',
'august'        => 'ਅਗਸਤ',
'september'     => 'ਸਤੰਬਰ',
'october'       => 'ਅਕਤੂਬਰ',
'november'      => 'ਨਵੰਬਰ',
'december'      => 'ਦਸੰਬਰ',
'january-gen'   => 'ਜਨਵਰੀ',
'february-gen'  => 'ਫ਼ਰਵਰੀ',
'march-gen'     => 'ਮਾਰਚ',
'april-gen'     => 'ਅਪ੍ਰੈਲ',
'may-gen'       => 'ਮਈ',
'june-gen'      => 'ਜੂਨ',
'july-gen'      => 'ਜੁਲਾਈ',
'august-gen'    => 'ਅਗਸਤ',
'september-gen' => 'ਸਤੰਬਰ',
'october-gen'   => 'ਅਕਤੂਬਰ',
'november-gen'  => 'ਨਵੰਬਰ',
'december-gen'  => 'ਦਸੰਬਰ',
'jan'           => 'ਜਨ',
'feb'           => 'ਫ਼ਰ',
'mar'           => 'ਮਾਰ',
'apr'           => 'ਅਪ',
'may'           => 'ਮਈ',
'jun'           => 'ਜੂਨ',
'jul'           => 'ਜੁਲਾ',
'aug'           => 'ਅਗ',
'sep'           => 'ਸਤ',
'oct'           => 'ਅਕ',
'nov'           => 'ਨਵ',
'dec'           => 'ਦਸ',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|ਸ਼੍ਰੇਣੀ|ਸ਼੍ਰੇਣੀਆਂ}}',
'category_header'                => 'ਸ਼੍ਰੇਣੀ "$1" ਵਿੱਚ ਲੇਖ',
'subcategories'                  => 'ਉਪਸ਼੍ਰੇਣੀਆਂ',
'category-media-header'          => 'ਸ਼੍ਰੇਣੀ "$1" ਵਿੱਚ ਮੀਡੀਆ',
'category-empty'                 => "''ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ ਇਸ ਵੇਲੇ ਕੋਈ ਵੀ ਸਫ਼ਾ ਜਾਂ ਮੀਡੀਆ ਨਹੀਂ ਹੈ।''",
'hidden-categories'              => '{{PLURAL:$1|ਲੁਕਵੀਂ ਸ਼੍ਰੇਣੀ|ਲੁਕਵੀਂਆਂ ਸ਼੍ਰੇਣੀਆਂ}}',
'hidden-category-category'       => 'ਲੁਕਵੀਆਂ ਸ਼੍ਰੇਣੀਆਂ',
'category-subcat-count'          => '{{PLURAL:$2|ਇਸ ਸ਼੍ਰੇਣੀ ਵਿਚ ਸਿਰਫ਼ ਇਹ ਉਪ-ਸ਼੍ਰੇਣੀ ਹੈ।|ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ, ਕੁੱਲ $2 ਵਿੱਚੋਂ, {{PLURAL:$1|ਸਿਰਫ਼ ਇਹ ਉਪਸ਼੍ਰੇਣੀ ਹੈ|ਇਹ $1 ਉਪਸ਼੍ਰੇਣੀਆਂ ਹਨ}}}}।',
'category-subcat-count-limited'  => 'ਇਸ ਸ਼੍ਰੇਣੀ ਵਿਚ {{PLURAL:$1|ਉਪ-ਸ਼੍ਰੇਣੀ ਹੈ|$1 ਉਪ-ਸ਼੍ਰੇਣੀਆਂ ਹਨ}}।',
'category-article-count'         => '{{PLURAL:$2|ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ ਕੇਵਲ ਇਹ ਸਫ਼ਾ ਹੈ।|ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ, ਕੁੱਲ $2 ਵਿੱਚੋਂ, ਇਹ {{PLURAL:$1|ਸਫ਼ਾ ਹੈ|$1 ਸਫ਼ੇ ਹਨ}}}}।',
'category-article-count-limited' => 'ਮੌਜੂਦਾ ਕੈਟੇਗਰੀ ਵਿਚ ਇਹ {{PLURAL:$1|ਸਫ਼ਾ ਹੈ|$1 ਸਫ਼ੇ ਹਨ}}।',
'category-file-count'            => '{{PLURAL:$2|ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ ਕੇਵਲ ਇਹ ਫ਼ਾਈਲ ਹੈ।| ਇਸ ਸ਼੍ਰੇਣੀ ਵਿੱਚ, ਕੁੱਲ $2 ਵਿੱਚੋਂ, ਇਹ {{PLURAL:$1|ਫ਼ਾਈਲ ਹੈ|$1 ਫ਼ਾਈਲਾਂ ਹਨ}}}}।',
'category-file-count-limited'    => 'ਮੌਜੂਦਾ ਕੈਟੇਗਰੀ ਵਿਚ ਇਹ {{PLURAL:$1|ਫ਼ਾਈਲ ਹੈ|$1 ਫ਼ਾਈਲਾਂ ਹਨ}}।',
'listingcontinuesabbrev'         => 'ਜਾਰੀ',
'index-category'                 => 'ਤਤਕਰੇ ਵਾਲ਼ੇ ਸਫ਼ੇ',
'noindex-category'               => 'ਬਿਨਾਂ ਤਤਕਰੇ ਵਾਲੇ ਸਫ਼ੇ',
'broken-file-category'           => 'ਟੁੱਟੇ ਹੋਏ ਫ਼ਾਈਲ ਜੋੜਾਂ ਵਾਲ਼ੇ ਸਫ਼ੇ',

'about'         => 'ਇਸ ਬਾਰੇ',
'article'       => 'ਸਮੱਗਰੀ ਸਫ਼ਾ',
'newwindow'     => '(ਨਵੀਂ ਵਿੰਡੋ ਵਿੱਚ ਖੁੱਲ੍ਹਦੀ ਹੈ)',
'cancel'        => 'ਰੱਦ ਕਰੋ',
'moredotdotdot' => 'ਹੋਰ...',
'mypage'        => 'ਸਫ਼ਾ',
'mytalk'        => 'ਗੱਲ-ਬਾਤ',
'anontalk'      => 'ਇਸ IP ਲਈ ਗੱਲ-ਬਾਤ',
'navigation'    => 'ਫੇਰੀ ਪਾਓ',
'and'           => '&#32;ਅਤੇ',

# Cologne Blue skin
'qbfind'         => 'ਖੋਜ',
'qbbrowse'       => 'ਝਲਕ',
'qbedit'         => 'ਸੋਧ',
'qbpageoptions'  => 'ਇਹ ਸਫ਼ਾ',
'qbpageinfo'     => 'ਭਾਗ',
'qbmyoptions'    => 'ਮੇਰੇ ਸਫ਼ੇ',
'qbspecialpages' => 'ਖ਼ਾਸ ਸਫ਼ੇ',
'faq'            => 'ਅਕਸਰ ਪੁੱਛੇ ਜਾਂਦੇ ਸੁਆਲ',
'faqpage'        => 'Project:ਸਵਾਲ-ਜਵਾਬ',

# Vector skin
'vector-action-addsection'       => 'ਵਿਸ਼ਾ ਜੋੜੋ',
'vector-action-delete'           => 'ਹਟਾਓ',
'vector-action-move'             => 'ਭੇਜੋ',
'vector-action-protect'          => 'ਸੁਰੱਖਿਆ',
'vector-action-undelete'         => 'ਹਟਾਉਣਾ-ਵਾਪਸ',
'vector-action-unprotect'        => 'ਸੁਰੱਖਿਆ ਬਦਲੋ',
'vector-simplesearch-preference' => 'ਸਧਾਰਨ ਖੋਜ ਸਲਾਹ ਪੱਟੀ ਯੋਗ ਕਰੋ (ਸਿਰਫ਼ ਵਿਕਟਰ ਸਕਿੰਨ ਵਿਚ)',
'vector-view-create'             => 'ਬਣਾਓ',
'vector-view-edit'               => 'ਸੋਧੋ',
'vector-view-history'            => 'ਅਤੀਤ ਵੇਖੋ',
'vector-view-view'               => 'ਪੜ੍ਹੋ',
'vector-view-viewsource'         => 'ਸਰੋਤ ਵੇਖੋ',
'actions'                        => 'ਕਾਰਵਾਈਆਂ',
'namespaces'                     => 'ਨਾਮਸਥਾਨ',
'variants'                       => 'ਬਦਲ',

'errorpagetitle'    => 'ਗਲਤੀ',
'returnto'          => '$1 ’ਤੇ ਵਾਪਸ ਜਾਓ।',
'tagline'           => '{{SITENAME}} ਤੋਂ',
'help'              => 'ਮਦਦ',
'search'            => 'ਖੋਜ',
'searchbutton'      => 'ਖੋਜ',
'go'                => 'ਜਾਓ',
'searcharticle'     => 'ਜਾਓ',
'history'           => 'ਸਫ਼ੇ ਦਾ ਅਤੀਤ',
'history_short'     => 'ਅਤੀਤ',
'updatedmarker'     => 'ਮੇਰੀ ਆਖਰੀ ਫੇਰੀ ਤੋਂ ਬਾਅਦ ਦੇ ਅੱਪਡੇਟ',
'printableversion'  => 'ਛਪਣਯੋਗ ਵਰਜਨ',
'permalink'         => 'ਪੱਕੀ ਲਿੰਕ',
'print'             => 'ਛਾਪੋ',
'view'              => 'ਵੇਖੋ',
'edit'              => 'ਸੋਧੋ',
'create'            => 'ਬਣਾਓ',
'editthispage'      => 'ਇਹ ਸਫ਼ਾ ਸੋਧੋ',
'create-this-page'  => 'ਇਹ ਸਫ਼ਾ ਬਣਾਓ',
'delete'            => 'ਹਟਾਓ',
'deletethispage'    => 'ਇਹ ਸਫ਼ਾ ਹਟਾਓ',
'undelete_short'    => '{{PLURAL:$1|ਇੱਕ ਸੋਧ|$1 ਸੋਧਾਂ}} ਹਟਾਉਣਾ-ਵਾਪਸ',
'viewdeleted_short' => '{{PLURAL:$1|ਹਟਾਈ ਸੋਧ|$1 ਹਟਾਈਆਂ ਸੋਧਾਂ}} ਵੇਖੋ',
'protect'           => 'ਸੁਰੱਖਿਆ',
'protect_change'    => 'ਬਦਲੋ',
'protectthispage'   => 'ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਕਰੋ',
'unprotect'         => 'ਸੁਰੱਖਿਆ ਬਦਲੋ',
'unprotectthispage' => 'ਇਹ ਸਫ਼ੇ ਦੀ ਸੁਰੱਖਿਆ ਬਦਲੋ',
'newpage'           => 'ਨਵਾਂ ਸਫ਼ਾ',
'talkpage'          => 'ਇਸ ਸਫ਼ੇ ਬਾਰੇ ਚਰਚਾ ਕਰੋ',
'talkpagelinktext'  => 'ਗੱਲ-ਬਾਤ',
'specialpage'       => 'ਖ਼ਾਸ ਸਫ਼ਾ',
'personaltools'     => 'ਨਿੱਜੀ ਸੰਦ',
'postcomment'       => 'ਨਵਾਂ ਭਾਗ',
'articlepage'       => 'ਸਮੱਗਰੀ ਸਫ਼ਾ ਵੇਖੋ',
'talk'              => 'ਚਰਚਾ',
'views'             => 'ਵਿਊ',
'toolbox'           => 'ਸੰਦ ਬਕਸਾ',
'userpage'          => 'ਵਰਤੋਂਕਾਰ ਸਫ਼ਾ ਵੇਖੋ',
'projectpage'       => 'ਪ੍ਰੋਜੈਕਟ ਸਫ਼ਾ ਵੇਖੋ',
'imagepage'         => 'ਫਾਇਲ ਸਫ਼ਾ ਵੇਖੋ',
'mediawikipage'     => 'ਸੁਨੇਹਾ ਸਫ਼ਾ ਵੇਖੋ',
'templatepage'      => 'ਫਰਮਾ ਸਫ਼ਾ ਵੇਖੋ',
'viewhelppage'      => 'ਮਦਦ ਸਫ਼ਾ ਵੇਖੋ',
'categorypage'      => 'ਸ਼੍ਰੇਣੀ ਸਫ਼ਾ ਵੇਖੋ',
'viewtalkpage'      => 'ਚਰਚਾ ਵੇਖੋ',
'otherlanguages'    => 'ਹੋਰ ਭਾਸ਼ਾਵਾਂ ਵਿਚ',
'redirectedfrom'    => '($1 ਤੋਂ ਰੀਡਿਰੈਕਟ)',
'redirectpagesub'   => 'ਰੀਡਿਰੈਕਟ ਸਫ਼ਾ',
'lastmodifiedat'    => 'ਇਸ ਸਫ਼ੇ ਵਿੱਚ ਆਖ਼ਰੀ ਸੋਧ $1 ਨੂੰ $2 ਵਜੇ ਹੋਈ।',
'viewcount'         => 'ਇਹ ਸਫ਼ਾ {{PLURAL:$1|ਇੱਕ ਵਾਰ|$1 ਵਾਰ}} ਵੇਖਿਆ ਗਿਆ।',
'protectedpage'     => 'ਸੁਰੱਖਿਅਤ ਸਫ਼ਾ',
'jumpto'            => 'ਇਸ ’ਤੇ ਜਾਓ:',
'jumptonavigation'  => 'ਨੇਵੀਗੇਸ਼ਨ',
'jumptosearch'      => 'ਖੋਜ',
'view-pool-error'   => 'ਅਫ਼ਸੋਸ, ਸਰਵਰ ਇਸ ਵੇਲੇ ਓਵਰਲੋਡ ਹੈ।
ਬਹੁਤ ਸਾਰੇ ਮੈਂਬਰ ਇਸ ਸਫ਼ੇ ਨੂੰ ਵੇਖਣ ਦੀ ਕੋਸ਼ਿਸ਼ ਕਰ ਰਹੇ ਹਨ।
ਫੇਰ ਕੋਸ਼ਿਸ਼ ਕਰਨ ਤੋਂ ਪਹਿਲਾਂ ਥੋੜੀ ਉਡੀਕ ਕਰੋ ਜੀ।
$1',
'pool-timeout'      => 'ਲਾਕ ਲਈ ਉਡੀਕ ਦਾ ਵਕਤ ਖ਼ਤਮ ਹੋ ਗਿਆ ਹੈ',
'pool-queuefull'    => 'ਪੂਲ ਕਤਾਰ ਭਰੀ ਹੋਈ ਹੈ',
'pool-errorunknown' => 'ਅਣਜਾਣ ਗਲਤੀ',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}} ਬਾਰੇ',
'aboutpage'            => 'Project:ਬਾਰੇ',
'copyright'            => 'ਸਮੱਗਰੀ $1 ਹੇਠ ਉਪਲੱਬਧ ਹੈ।',
'copyrightpage'        => '{{ns:project}}:ਕਾਪੀਰਾਈਟ',
'currentevents'        => 'ਹਾਲ ਦੀਆਂ ਘਟਨਾਵਾਂ',
'currentevents-url'    => 'Project:ਹਾਲ ਦੀਆਂ ਘਟਨਾਵਾਂ',
'disclaimers'          => 'ਦਾਅਵੇ',
'disclaimerpage'       => 'Project:ਆਮ ਦਾਅਵੇ',
'edithelp'             => 'ਸੋਧ ਸਬੰਧੀ ਮਦਦ',
'edithelppage'         => 'Help:ਸੋਧ',
'helppage'             => 'Help:ਸਮੱਗਰੀ',
'mainpage'             => 'ਮੁੱਖ ਸਫ਼ਾ',
'mainpage-description' => 'ਮੁੱਖ ਸਫ਼ਾ',
'policy-url'           => 'Project:ਨੀਤੀ',
'portal'               => 'ਭਾਈਚਾਰਕ ਸੱਥ',
'portal-url'           => 'Project:ਸੱਥ',
'privacy'              => 'ਪਰਾਈਵੇਸੀ ਪਾਲਸੀ',
'privacypage'          => 'Project:ਪਰਾਈਵੇਸੀ ਪਾਲਸੀ',

'badaccess'        => 'ਮਨਜ਼ੂਰੀ ਗਲਤੀ',
'badaccess-group0' => 'ਤੁਹਾਨੂੰ ਉਹ ਕਾਰਵਾਈ ਕਰਨ ਦੀ ਮਨਜ਼ੂਰੀ ਨਹੀਂ ਜਿਹਦੀ ਤੁਸੀਂ ਮੰਗ ਕੀਤੀ ਹੈ।',
'badaccess-groups' => 'ਜੋ ਕਾਰਵਾਈ ਤੁਸੀਂ ਕਰਨੀ ਚਾਹੀ ਹੈ ਓਹ {{PLURAL:$2|ਇਸ ਸਮੂਹ|ਇਹਨਾਂ ਸਮੂਹਾਂ}} ਦੇ ਮੈਂਬਰ ਹੀ ਕਰ ਸਕਦੇ ਹਨ: $1',

'versionrequired'     => 'ਮੀਡੀਆਵਿਕੀ ਦੇ $1 ਵਰਜਨ ਦੀ ਲੋੜ ਹੈ',
'versionrequiredtext' => 'ਇਸ ਸਫ਼ੇ ਦੀ ਵਰਤੋਂ ਕਰਨ ਲਈ ਮੀਡੀਆਵਿਕੀ ਦੇ $1 ਵਰਜਨ ਦੀ ਲੋੜ ਹੈ।
ਵੇਖੋ [[Special:Version|ਵਰਜਨ ਸਫ਼ੇ]]।',

'ok'                      => 'ਠੀਕ ਹੈ',
'retrievedfrom'           => '"$1" ਤੋਂ ਲਿਆ',
'youhavenewmessages'      => 'ਤੁਹਾਡੇ ਲਈ $1। ($2)',
'newmessageslink'         => 'ਨਵੇਂ ਸੁਨੇਹੇ',
'newmessagesdifflink'     => 'ਆਖ਼ਰੀ ਤਬਦੀਲੀ',
'youhavenewmessagesmulti' => '$1 ’ਤੇ ਤੁਹਾਡੇ ਲਈ ਨਵੇਂ ਸੁਨੇਹੇ ਹਨ',
'editsection'             => 'ਸੋਧੋ',
'editold'                 => 'ਸੋਧ',
'viewsourceold'           => 'ਸਰੋਤ ਵੇਖੋ',
'editlink'                => 'ਸੋਧੋ',
'viewsourcelink'          => 'ਸਰੋਤ ਵੇਖੋ',
'editsectionhint'         => 'ਭਾਗ ਸੋਧ: $1',
'toc'                     => 'ਵਿਸ਼ਾ ਸੂਚੀ',
'showtoc'                 => 'ਵਿਖਾਓ',
'hidetoc'                 => 'ਓਹਲੇ',
'collapsible-collapse'    => 'ਸਮੇਟੋ',
'collapsible-expand'      => 'ਫੈਲਾਓ',
'thisisdeleted'           => '$1 ਵੇਖੋ ਜਾਂ ਮੁੜ ਸਟੋਰ ਕਰੋ',
'viewdeleted'             => '$1 ਵੇਖਣੀਆਂ ਹਨ?',
'restorelink'             => '{{PLURAL:$1|ਇਕ ਮਿਟਾਈ ਹੋਈ ਸੋਧ|$1 ਮਿਟਾਈਆਂ ਹੋਈਆਂ ਸੋਧਾਂ}}',
'feedlinks'               => 'ਫੀਡ:',
'feed-invalid'            => 'ਸਬਸਕ੍ਰਿਪਸ਼ਨ ਫ਼ੀਡ ਦੀ ਗ਼ਲਤ ਕਿਸਮ',
'feed-unavailable'        => 'ਸਿੰਡੀਕੇਸ਼ਨ ਫ਼ੀਡਾਂ ਉਪਲਬਧ ਨਹੀਂ',
'site-rss-feed'           => '$1 RSS ਫੀਡ',
'site-atom-feed'          => '$1 ਦੀ ਐਟਮ ਫ਼ੀਡ',
'page-rss-feed'           => '"$1" RSS ਫੀਡ',
'page-atom-feed'          => '"$1" ਐਟਮ ਫੀਡ',
'red-link-title'          => '$1 (ਸਫ਼ਾ ਮੌਜੂਦ ਨਹੀਂ ਹੈ)',
'sort-descending'         => 'ਘਟਦਾ ਕ੍ਰਮ',
'sort-ascending'          => 'ਵਧਦਾ ਕ੍ਰਮ',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'ਸਫ਼ਾ',
'nstab-user'      => 'ਯੂਜ਼ਰ ਸਫ਼ਾ',
'nstab-media'     => 'ਮੀਡੀਆ ਸਫ਼ਾ',
'nstab-special'   => 'ਖ਼ਾਸ ਸਫ਼ਾ',
'nstab-project'   => 'ਪਰੋਜੈਕਟ ਸਫ਼ਾ',
'nstab-image'     => 'ਫ਼ਾਈਲ',
'nstab-mediawiki' => 'ਸੁਨੇਹਾ',
'nstab-template'  => 'ਫਰਮਾ',
'nstab-help'      => 'ਮਦਦ ਸਫ਼ਾ',
'nstab-category'  => 'ਸ਼੍ਰੇਣੀ',

# Main script and global functions
'nosuchaction'      => 'ਅਜਿਹੀ ਕੋਈ ਕਾਰਵਾਈ ਨਹੀਂ ਹੈ',
'nosuchactiontext'  => 'URL ਦੁਆਰਾ ਦੱਸਿਆ ਕੰਮ ਗ਼ਲਤ ਹੈ।
ਸ਼ਾਇਦ ਤੁਸੀਂ URL ਸਹੀ ਨਹੀਂ ਲਿਖਿਆ ਜਾਂ ਕਿਸੇ ਗ਼ਲਤ ਲਿੰਕ ਤੇ ਆਏ ਹੋ।
ਇਹ ਵੀ ਹੋ ਸਕਦਾ ਹੈ ਕਿ ਇਹ {{SITENAME}} ਦੁਆਰੇ ਵਰਤੇ ਜਾਂਦੇ ਸਾਫ਼ਟਵੇਅਰ ਵਿਚਲੀ ਗ਼ਲਤੀ ਵੱਲ ਇਸ਼ਾਰਾ ਹੋਵੇ।',
'nosuchspecialpage' => 'ਅਜਿਹਾ ਕੋਈ ਖ਼ਾਸ ਸਫ਼ਾ ਨਹੀਂ ਹੈ',
'nospecialpagetext' => '<strong>ਤੁਸੀਂ ਇੱਕ ਗ਼ਲਤ ਖ਼ਾਸ ਸਫ਼ੇ ਲਈ ਬੇਨਤੀ ਕੀਤੀ ਹੈ।</strong>
ਸਹੀ ਖ਼ਾਸ ਸਫ਼ਿਆਂ ਦੀ ਲਿਸਟ [[Special:SpecialPages|{{int:specialpages}}]] ’ਤੇ ਵੇਖੀ ਜਾ ਸਕਦੀ ਹੈ।',

# General errors
'error'                => 'ਗ਼ਲਤੀ',
'databaseerror'        => 'ਡਾਟਾਬੇਸ ਗਲਤੀ',
'dberrortext'          => 'ਡਾਟਾਬੇਸ ਪੁ੍ਛ-ਗਿੱਛ ਦੀਆਂ ਹਿਦਾਇਤਾਂ ਵਿਚ ਦੋਸ਼ ਆਇਆ ਹੈ।
ਹੋ ਸਕਦਾ ਹੈ ਇਹ ਦੋਸ਼ ਸਾਫ਼ਟਵੇਅਰ ਦਾ ਹੋਵੇ।
ਡਾਟਾਬੇਸ ਪੁਛ-ਗਿੱਛ ਦੀ ਆਖ਼ਰੀ ਕੋਸ਼ਿਸ਼ ਸੀ:
<blockquote><code>$1</code></blockquote>
"<code>$2</code>" ਫੰਕਸ਼ਨ ਵਿੱਚੋਂ।
ਡਾਟਾਬੇਸ ਨੇ "<samp>$3: $4</samp>" ਦੋਸ਼ ਕੱਢਿਆ।',
'dberrortextcl'        => 'ਡੈਟਾਬੇਸ ਪੁੱਛਗਿੱਛ ਵਿਚ ਹਿਦਾਇਤ ਗਲਤੀ ਮਿਲੀ ਹੈ।
ਫੰਕਸ਼ਨ "$2" ਤੋਂ ਪਿਛਲੀ ਡਾਟਬਾਸ ਪੁੱਛ ਗਿੱਛ ਸੀ: "$1".
ਡੈਟਾਬੇਸ ਨੇ ਇਹ ਗਲਤੀ "$3:$4" ਦਿੱਤੀ',
'laggedslavemode'      => "'''ਖ਼ਬਰਦਾਰ:''' ਹੋ ਸਕਦਾ ਹੈ ਸਫ਼ੇ ਵਿਚ ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਸ਼ਾਮਲ ਨਾ ਹੋਣ।",
'readonly'             => 'ਡਾਟਾਬੇਸ ਨੂੰ ਤਾਲ਼ਾ ਲੱਗਿਆ ਹੋਇਆ ਹੈ',
'enterlockreason'      => 'ਤਾਲਾ-ਬੰਦੀ ਲਈ ਕਾਰਨ ਦਾਖ਼ਲ ਕਰੋ, ਨਾਲ਼ ਹੀ ਤਾਲਾ-ਬੰਦੀ ਦੇ ਰਿਲੀਜ਼ ਹੋਣ ਦਾ ਅੰਦਾਜ਼ਨ ਵਕਤ',
'readonlytext'         => 'ਡੈਟਾਬੇਸ ਨੂੰ ਇਸ ਵੇਲ਼ੇ ਤਾਲਾ ਲੱਗਾ ਹੋਇਆ ਹੈ, ਸ਼ਾਇਦ ਆਮ ਰੱਖ-ਰਖਾਵ ਲਈ, ਇਸਤੋਂ ਬਾਅਦ ਇਹ ਆਮ ਵਾਂਗ ਉਪਲੱਬਧ ਹੋਵੇਗਾ।
ਜਿਸ ਪ੍ਰਬੰਧਕ ਨੇ ਇਸਨੂੰ ਤਾਲਾ ਲਾਇਆ ਹੈ ਉਸਦਾ ਕਹਿਣਾ ਹੈ ਕਿ: $1',
'missing-article'      => "ਡਾਟਾਬੇਸ ਨੂੰ ''$1'' $2 ਨਾਮ ਦਾ ਕੋਈ ਸਫ਼ਾ ਨਹੀਂ ਮਿਲਿਆ।
ਆਮ ਤੌਰ ਤੇ ਹਟਾਏ ਜਾ ਚੁੱਕੇ ਸਫ਼ੇ ਦੀ ਅਤੀਤ ਕੜੀ ਦੀ ਵਰਤੋਂ ਕਰਨ ਨਾਲ ਇੰਝ ਹੁੰਦਾ ਹੈ।
ਜੇ ਇਹ ਗੱਲ ਨਹੀਂ ਤਾਂ ਹੋ ਸਕਦਾ ਹੈ ਤੁਹਾਨੂੰ ਸਾਫ਼ਟਵੇਅਰ ਵਿਚ ਖਾਮੀ ਮਿਲ ਗਈ ਹੈ। ਕਿਰਪਾ ਕਰਕੇ ਸਫ਼ੇ ਦੇ ਪਤੇ ਸਮੇਤ [[Special:ListUsers/sysop|ਪ੍ਰਸ਼ਾਸਕ]] ਨੂੰ ਇਤਲਾਹ ਦਿਓ।",
'missingarticle-rev'   => '(ਰੀਵਿਜ਼ਨ#: $1)',
'missingarticle-diff'  => '(ਅੰਤਰ: $1, $2)',
'readonly_lag'         => 'ਜਦੌਂ ਤਕ ਅਧੀਨ ਡੇਟਾਬੇਸ ਸਰਵਰ ਸੁਤੰਤਰ ਡੈਟਾਬੇਸ ਸਰਵਰ ਦੀ ਪਕੜ ਵਿਚ ਨਹੀਂ ਆ ਜਾਂਦੇ ਡੈਟਾਬੇਸ ਸਵੈ ਜਕੜਿਆ ਗਿਆ ਹੈ।',
'internalerror'        => 'ਅੰਦਰੂਨੀ ਗ਼ਲਤੀ',
'internalerror_info'   => 'ਅੰਦਰੂਨੀ ਗ਼ਲਤੀ: $1',
'fileappenderrorread'  => 'ਅੰਤਕਾ ਜੋੜਨ ਲਗਿਆਂ "$1"ਪੜ੍ਹਿਆ ਨਹੀਂ ਜਾ ਸਕਿਆ।',
'fileappenderror'      => "''$1'' ''$2'' ਨਾਲ਼ ਜੋੜਿਆ ਨਹੀ ਜਾ ਸਕਦਾ",
'filecopyerror'        => "ਫ਼ਾਈਲ '''$1'' '$2''' ਵਿੱਚ ਕਾਪੀ ਨਹੀਂ ਕੀਤੀ ਜਾ ਸਕੀ।",
'filerenameerror'      => "ਫ਼ਾਈਲ ''$1'' ਦਾ ਨਾਂ ''$2'' ਨਹੀਂ ਸਾ ਸਕਿਆ।",
'filedeleteerror'      => "''$1'' ਫ਼ਾਈਲ ਹਟਾਈ ਨਹੀਂ ਜਾ ਸਕੀ।",
'directorycreateerror' => "ਡਾਇਰੈਕਟਰੀ ''$1'' ਬਣਾਈ ਨਹੀਂ ਜਾ ਸਕੀ।",
'filenotfound'         => "ਫ਼ਾਈਲ ''$1'' ਲੱਭੀ ਨਹੀਂ ਜਾ ਸਕੀ।",
'fileexistserror'      => 'ਫ਼ਾਈਲ "$1" ਉੱਤੇ ਲਿਖ ਨਹੀਂ ਸਕਦੇ: ਫ਼ਾਈਲ ਮੌਜੂਦ ਹੈ।',
'unexpected'           => 'ਅਣਉਮੀਦਿਆ ਮੁੱਲ: "$1"="$2"।',
'formerror'            => 'ਗ਼ਲਤੀ: ਫ਼ਾਰਮ ਪੇਸ਼ ਨਹੀਂ ਕੀਤਾ ਜਾ ਸਕਿਆ',
'badarticleerror'      => 'ਇਹ ਕਾਰਵਾਈ ਇਸ ਸਫ਼ੇ ਤੇ ਨਹੀਂ ਕੀਤੀ ਜਾ ਸਕਦੀ।',
'cannotdelete'         => "ਫ਼ਾਈਲ ਜਾਂ ਸਫ਼ਾ ''$1'' ਨੂੰ ਮਿਟਾਇਆ ਨਹੀਂ ਜਾ ਸਕਿਆ।
ਸ਼ਾਇਦ ਕੋਈ ਪਹਿਲਾਂ ਹੀ ਇਸਨੂੰ ਮਿਟਾ ਚੁੱਕਾ ਹੈ।",
'cannotdelete-title'   => "ਸਫ਼ਾ ''$1'' ਨੂੰ ਹਟਾਇਆ ਨਹੀਂ ਜਾ ਸਕਿਆ",
'badtitle'             => 'ਗ਼ਲਤ ਸਿਰਲੇਖ',
'badtitletext'         => 'ਤੁਹਾਡਾ ਦਰਖਾਸਤਸ਼ੁਦਾ ਸਿਰਲੇਖ ਨਾਕਾਬਿਲ, ਖਾਲੀ ਜਾਂ ਗਲਤ ਜੁੜਿਆ ਹੋਇਆ inter-languagd ਜਾਂ inter-wiki ਸਿਰਲੇਖ ਹੈ। ਇਹ ਵੀ ਹੋ ਸਕਦਾ ਹੈ ਕਿ ਇਸ ਵਿੱਚ ਇਕ-ਦੋ ਅੱਖਰ ਐਸੇ ਹੋਣ ਜੋ ਸਿਰਲੇਖ ਵਿੱਚ ਵਰਤੇ ਨਹੀਂ ਜਾ ਸਕਦੇ।',
'perfcached'           => 'ਹੇਠ ਦਿੱਤੀ ਸਮੱਗਰੀ ਕੈਸ਼ ਵਿਚ ਹੈ ਅਤੇ ਪੁਰਾਣੀ ਹੋ ਸਕਦੀ ਹੈ। ਕੈਸ਼ ਵਿਚ ਵੱਧ ਤੋਂ ਵੱਧ {{PLURAL:$1|ਇੱਕ ਨਤੀਜੇ ਦੀ|$1 ਨਤੀਜਿਆਂ ਦੀ}} ਉਪਲਬਧੀ ਹੈ।',
'perfcachedts'         => 'ਹੇਠ ਦਿੱਤੀ ਸਮੱਗਰੀ ਕੈਸ਼ ਵਿਚ ਹੈ ਅਤੇ ਆਖ਼ਰੀ ਵਾਰ ਅੱਪਡੇਟ $1 ਨੂੰ ਕੀਤੀ ਗਈ ਸੀ। ਕੈਸ਼ ਵਿਚ ਵੱਧ ਤੋਂ ਵੱਧ {{PLURAL:$4|ਇੱਕ ਨਤੀਜੇ|$4 ਨਤੀਜਿਆਂ}} ਦੀ ਉਪਲਬਧੀ ਹੈ।',
'querypage-no-updates' => 'ਇਸ ਪੇਜ  ਦਾ ਆਧੁਨੀਕਰਣ ਵਰਜਿਤ ਹੈ।
ਆਂਕੜੇ ਹੱਲੇ ਤਾਜ਼ੇ ਨਹੀ ਹੋ ਸਕਦੇ ।',
'wrong_wfQuery_params' => ' wfQuery()<br /> ਨੂ ਲਤ ਰਾਸ਼ੀ ਮਿਲੇ ਹੋਯੇ ਨੇ
 ਫੁਨ੍ਕ੍ਤਿਓਂ:$1<br />
 ਪ੍ਰਸ਼ਨ: $2',
'viewsource'           => 'ਸਰੋਤ ਵੇਖੋ',
'viewsource-title'     => '$1 ਲਈ ਸਰੋਤ ਵੇਖੋ',
'actionthrottled'      => 'ਕਾਰਵਾਈ ਬੰਦ ਕੀਤੀ ਗਈ।',
'actionthrottledtext'  => 'ਸਪੈਮ ਦੀ ਰੋਕਥਾਮ ਲਈ, ਇਹ ਕਾਰਵਾਈ ਇੱਕ ਮਿੱਥੇ ਸਮੇਂ ਵਿੱਚ ਇੱਕ ਤੋਂ ਜ਼ਿਆਦਾ ਵਾਰ ਕਰਨ ਦੀ ਮਨਾਹੀ ਹੈ ਅਤੇ ਤੁਸੀਂ ਇਸ ਹੱਦ ਪਾਰ ਕਰ ਚੁੱਕੇ ਹੋ।
ਕਿਰਪਾ ਕਰਕੇ ਕੁਝ ਸਮੇਂ ਬਾਅਦ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।',
'protectedpagetext'    => 'ਇਹ ਪੰਨੇ ਸੰਪਾਦਨ ਅਤੇ ਹੋਰ ਕੰਮ ਤੋਂ ਸੁਰੱਖਿਅਤ ਕੀਤਾ ਹੋਇਆ ਹੈ।',
'viewsourcetext'       => 'ਤੁਸੀਂ ਇਸ ਸਫ਼ੇ ਦਾ ਸਰੋਤ ਵੇਖ ਅਤੇ ਕਾਪੀ ਕਰ ਸਕਦੇ ਹੋ:',
'viewyourtext'         => 'ਤੁਸੀਂ ਇਸ ਸਫ਼ੇ ’ਤੇ ਕੀਤੀਆਂ "ਆਪਣੀਆਂ ਸੋਧਾਂ" ਦਾ ਸਰੋਤ ਵੇਖ ਅਤੇ ਨਕਲ ਕਰ ਸਕਦੇ ਹੋ:',
'protectedinterface'   => 'ਇਹ ਸਫ਼ਾ ਇਸ ਵਿਕੀ ਉਤਲੇ ਸਾਫ਼ਟਵੇਅਰ ਲਈ ਇੰਟਰਫ਼ੇਸ-ਲਿਖਤ ਦਿੰਦਾ ਹੈ ਅਤੇ ਦੁਰਵਰਤੋਂ ਤੋਂ ਬਚਾਉਣ ਲਈ ਰਾਖਵਾਂ ਰੱਖਿਆ ਗਿਆ ਹੈ।
ਸਾਰੇ ਵਿਕੀਆਂ ਲਈ ਅਨੁਵਾਦ ਜੋੜਨ ਜਾਂ ਬਦਲਣ ਲਈ [//translatewiki.net/ translatewiki.net], ਮੀਡੀਆਵਿਕੀ ਸਥਾਨੀਕਰਨ ਪ੍ਰੋਜੈਕਟ ਦੀ ਵਰਤੋਂ ਕਰੋ ਜੀ।',
'editinginterface'     => "'''ਚਿਤਾਵਨੀ''' ਤੁਸੀਂ ਐਸੇ ਸਫ਼ੇ ਨੂੰ ਬਦਲ ਰਹੇ ਹੋ ਜੋ ਸਾਫ਼ਟਵੇਅਰ ਇੰਟਰਫ਼ੇਸ ਦੇ ਮੂਲ ਪਾਠ ਲਈ ਵਰਤਿਆ ਗਿਆ ਹੈ।
ਇਸ ਸਫ਼ੇ ਵਿਚਲੀ ਤਬਦੀਲੀ ਦੂਜੇ ਵਰਤੋਂਕਾਰਾਂ ਲਈ ਵਰਤੇ ਜਾਣ ਵਾਲੇ ਇੰਟਰਫ਼ੇਸ ਦੀ ਸ਼ਕਲ ’ਤੇ ਅਸਰ ਪਾ ਦੇਵੇਗੀ। ਉਲਥਾ ਕਰਨ ਲਈ ਕਿਰਪਾ ਕਰਕੇ [//translatewiki.net/wiki/Main_Page?setlang=pa ਟ੍ਰਾਂਸਲੇਟਵਿਕੀ.ਨੈਟ] ਦੀ ਵਰਤੋਂ ਕਰੋ, ਇਹ ਮੀਡੀਆਵਿਕੀ ਦੀ ਸਥਾਨੀਕਰਨ ਪ੍ਰੋਜੈਕਟ ਹੈ।",
'sqlhidden'            => '(SQL ਪੁਛ-ਗਿੱਛ ਲੁਕੀ ਹੋਈ ਹੈ)',
'cascadeprotected'     => 'ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਹੈ, ਕਿਉਂਕਿ ਇਹ ਹੇਠ ਲਿਖੇ {{PLURAL:$1|ਸਫ਼ੇ|ਸਫ਼ਿਆਂ}} ਦੀ ਸੁਰੱਖਿਆ-ਪੌੜੀ ਵਿੱਚ ਸ਼ਾਮਲ ਹੈ:
$2',
'namespaceprotected'   => "ਤੁਹਾਨੂੰ '''$1''' ਥਾਂ-ਨਾਮ ਵਾਲ਼ੇ ਸਫ਼ਿਆਂ ਵਿਚ ਫੇਰ-ਬਦਲ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।",
'customcssprotected'   => 'ਤੁਹਾਨੂੰ ਇਸ CSS ਸਫ਼ੇ ਵਿਚ ਸੋਧ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ ਕਿਉਂਕਿ ਇਸ ਵਿਚ ਕਿਸੇ ਹੋਰ ਮੈਂਬਰ ਦੀਆਂ ਨਿੱਜੀ ਸੈਟਿੰਗਾਂ ਹਨ।',
'customjsprotected'    => 'ਤੁਹਾਨੂੰ ਇਸ CSS ਸਫ਼ੇ ਵਿਚ ਸੋਧ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ ਕਿਉਂਕਿ ਇਸ ਵਿਚ ਕਿਸੇ ਹੋਰ ਮੈਂਬਰ ਦੀਆਂ ਨਿੱਜੀ ਸੈਟਿੰਗਾਂ ਹਨ।',
'ns-specialprotected'  => 'ਖ਼ਾਸ ਸਫ਼ਿਆਂ ’ਚ ਫੇਰ-ਬਦਲ ਨਹੀਂ ਹੋ ਸਕਦੇ।',
'titleprotected'       => 'ਇਹ ਸਿਰਲੇਖ [[User:$1|$1]] ਵੱਲੋਂ ਸੁਰੱਖਿਅਤ ਕੀਤਾ ਗਿਆ ਹੈ ਅਤੇ ਵਰਤਿਆ ਨਹੀਂ ਜਾ ਸਕਦਾ। ਦਿੱਤਾ ਹੋਇਆ ਕਾਰਨ ਹੈ, "\'\'$2\'\'"।',

# Virus scanner
'virus-badscanner'     => "ਮੰਦਾ ਪ੍ਰਬੰਧ: ਅਣਜਾਣ ਵਾਇਰਸ ਸਕੈਨਰ: ''$1''",
'virus-scanfailed'     => 'ਸਕੈਨ ਫੇਲ੍ਹ ਹੈ (ਕੋਡ $1)',
'virus-unknownscanner' => 'ਅਣਪਛਾਤਾ ਐਂਟੀਵਾਇਰਸ:',

# Login and logout pages
'logouttext'                 => "'''ਹੁਣ ਤੁਸੀਂ ਲਾਗਆਉਟ ਹੋ ਗਏ ਹੋ।'''

You can continue to use {{SITENAME}} anonymously, or you can log in again as the same or as a different user.
Note that some pages may continue to be displayed as if you were still logged in, until you clear your browser cache.",
'welcomecreation'            => '== ਜੀ ਆਇਆਂ ਨੂੰ, $1! ==

ਤੁਹਾਡਾ ਖਾਤਾ ਬਣ ਚੁੱਕਾ ਹੈ। ਆਪਣੀਆਂ [[Special:Preferences|{{SITENAME}} ਪਸੰਦਾਂ]] ਬਦਲਣੀਆਂ ਨਾ ਭੁੱਲੋ।',
'yourname'                   => 'ਵਰਤੋਂਕਾਰ-ਨਾਂ:',
'yourpassword'               => 'ਪਾਸਵਰਡ:',
'yourpasswordagain'          => 'ਪਾਸਵਰਡ ਮੁੜ ਲਿਖੋ:',
'remembermypassword'         => 'ਇਸ ਕੰਪਿਊਟਰ ’ਤੇ ਮੇਰਾ ਦਾਖ਼ਲਾ ਯਾਦ ਰੱਖੋ (ਵੱਧ ਤੋਂ ਵੱਧ $1 {{PLURAL:$1|ਦਿਨ|ਦਿਨਾਂ}} ਲਈ)',
'securelogin-stick-https'    => 'ਦਾਖ਼ਲ ਕਰਨ ਮਗਰੋਂ HTTPS ਨਾਲ ਜੁੜੇ ਰਹੋ',
'yourdomainname'             => 'ਤੁਹਾਡਾ ਡੋਮੇਨ:',
'externaldberror'            => 'ਜਾਂ ਤਾਂ ਪ੍ਰਮਾਣਕੀ ਡਾਟਾਬੇਸ ਦੋਸ਼ ਆਇਆ ਹੈ ਜਾਂ ਤੁਹਾਨੂੰ ਆਪਣੇ ਬਾਹਰੀ ਖਾਤੇ ਨੂੰ ਅੱਪਡੇਟ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'login'                      => 'ਲਾਗਇਨ',
'nav-login-createaccount'    => 'ਲਾਗਇਨ/ਖਾਤਾ ਬਣਾਓ',
'loginprompt'                => 'ਤੁਹਾਨੂੰ {{SITENAME}} ’ਤੇ ਲਾਗਇਨ ਕਰਨ ਲਈ ਕੂਕੀਸ ਯੋਗ ਕਰਨੇ ਜ਼ਰੂਰੀ ਹਨ।',
'userlogin'                  => 'ਲਾਗਇਨ/ਖਾਤਾ ਬਣਾਓ',
'userloginnocreate'          => 'ਲਾਗਇਨ',
'logout'                     => 'ਲਾਗ ਆਉਟ',
'userlogout'                 => 'ਲਾਗ ਆਉਟ',
'notloggedin'                => 'ਲਾਗਇਨ ਨਹੀਂ ਹੋ',
'nologin'                    => 'ਖਾਤਾ ਨਹੀਂ ਹੈ? $1।',
'nologinlink'                => 'ਖਾਤਾ ਬਣਾਓ',
'createaccount'              => 'ਖਾਤਾ ਬਣਾਓ',
'gotaccount'                 => 'ਖਾਤਾ ਪਹਿਲਾਂ ਹੀ ਹੈ? $1',
'gotaccountlink'             => 'ਲਾਗਇਨ',
'userlogin-resetlink'        => 'ਆਪਣੀ ਲਾਗਇਨ ਜਾਣਕਾਰੀ ਭੁੱਲ ਗਏ ਹੋ?',
'createaccountmail'          => 'ਈ-ਮੇਲ ਜ਼ਰੀਏ',
'createaccountreason'        => 'ਕਾਰਨ:',
'badretype'                  => 'ਤੁਹਾਡੇ ਵਲੋਂ ਦਿੱਤੇ ਪਾਸਵਰਡ ਮਿਲਦੇ ਨਹੀਂ ਹਨ।',
'userexists'                 => 'ਯੂਜ਼ਰ-ਨਾਂ ਪਹਿਲਾਂ ਹੀ ਮੌਜੂਦ ਹੈ। ਵੱਖਰਾ ਨਾਂ ਚੁਣੋ ਜੀ।',
'loginerror'                 => 'ਲਾਗਇਨ ਗਲਤੀ',
'createaccounterror'         => 'ਖਾਤਾ ਬਣਾਇਆ ਨਹੀਂ ਜਾ ਸਕਿਆ: $1',
'nocookiesnew'               => 'ਯੂਜ਼ਰ ਅਕਾਊਂਟ ਬਣਾਇਆ ਗਿਆ ਹੈ, ਪਰ ਤੁਸੀਂ ਲਾਗਇਨ ਨਹੀਂ ਕੀਤਾ ਹੈ।{{SITENAME}} uses cookies to log in users. You have cookies disabled. Please enable them, then log in with your new username and password.',
'nocookieslogin'             => '{{SITENAME}} ਯੂਜ਼ਰਾਂ ਨੂੰ ਲਾਗਇਨ ਕਰਨ ਲਈ ਕੂਕੀਜ਼ ਵਰਤਦੀ ਹੈ। ਤੁਹਾਡੇ ਕੂਕੀਜ਼ ਆਯੋਗ ਕੀਤੇ ਹੋਏ ਹਨ। ਉਨ੍ਹਾਂ ਨੂੰ ਯੋਗ ਕਰਕੇ ਮੁੜ ਟਰਾਈ ਕਰੋ।',
'nocookiesfornew'            => 'ਵਰਤੋਂਕਾਰ ਖਾਤਾ ਨਹੀਂ ਬਣਾਇਆ ਗਿਆ ਕਿਉਂਕਿ ਅਸੀਂ ਇਹਦੇ ਸਰੋਤ ਨੂੰ ਤਸਦੀਕ ਨਹੀਂ ਕਰ ਸਕੇ।
ਯਕੀਨੀ ਬਣਾਓ ਕਿ ਤੁਹਾਡੀਆਂ ਕੁਕੀਆਂ ਕੰਮ ਕਰ ਰਹੀਆਂ ਹਨ, ਸਫ਼ਾ ਫੇਰ ਲੋਡ ਕਰੋ ਅਤੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।',
'noname'                     => 'ਤੁਸੀਂ ਇੱਕ ਸਹੀ ਯੂਜ਼ਰ-ਨਾਂ ਨਹੀਂ ਦਿੱਤਾ।',
'loginsuccesstitle'          => 'ਲਾਗਇਨ ਸਫ਼ਲ',
'loginsuccess'               => "'''ਤੁਸੀਂ {{SITENAME}} ਉੱਤੇ \"\$1\" ਵਜੋਂ ਲਾਗਇਨ ਹੋ ਚੁੱਕੇ ਹੋ।'''",
'nosuchuser'                 => '!"$1" ਨਾਂ ਨਾਲ਼ ਕੋਈ ਵਰਤੋਂਕਾਰ ਨਹੀਂ ਹੈ। ਵੱਡੇ ਅਤੇ ਛੋਟੇ ਅੱਖਰ ਵਰਤਣ ਨਾਲ ਫ਼ਰਕ ਪੈਂਦਾ ਹੈ।
ਆਪਣੇ ਸਪੈਲਿੰਗ ਨੂੰ ਧਿਆਨ ਨਾਲ ਚੈੱਕ ਕਰੋ ਜਾਂ [[Special:UserLogin/signup|ਨਵਾਂ ਖਾਤਾ ਬਣਾਓ]]',
'nosuchusershort'            => '"$1" ਨਾਂ ਨਾਲ ਕੋਈ ਵੀ ਵਰਤੋਂਕਾਰ ਨਹੀਂ ਹੈ। ਆਪਣੇ ਸਪੈਲਿੰਗ ਧਿਆਨ ਨਾਲ ਚੈੱਕ ਕਰੋ।',
'nouserspecified'            => 'ਤੁਹਾਨੂੰ ਇੱਕ ਯੂਜ਼ਰ-ਨਾਂ ਦੇਣਾ ਪਵੇਗਾ।',
'login-userblocked'          => 'ਇਹ ਯੂਜ਼ਰ-ਨਾਂ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੈ। ਲਾਗਇਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'wrongpassword'              => 'ਗ਼ਲਤ ਪਾਸਵਰਡ ਦਿੱਤਾ ਹੈ। ਮੁੜ-ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜੀ।',
'wrongpasswordempty'         => 'ਖ਼ਾਲੀ ਪਾਸਵਰਡ ਦਿੱਤਾ ਹੈ। ਮੁੜ-ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜੀ।',
'passwordtooshort'           => 'ਪਾਸਵਰਡ {{PLURAL:$1|1 ਅੱਖਰ|$1 ਅੱਖਰਾਂ}} ਦਾ ਹੋਣਾ ਲਾਜ਼ਮੀ ਹੈ।',
'password-name-match'        => 'ਤੁਹਾਡਾ ਪਾਸਵਰਡ ਤੁਹਾਡੇ ਯੂਜ਼ਰ ਨਾਂ ਤੋਂ ਵੱਖਰਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
'password-login-forbidden'   => 'ਇਹ ਯੂਜ਼ਰ-ਨਾਂ ਅਤੇ ਪਾਸਵਰਡ ਵਰਤਣ ਦੀ ਮਨਾਹੀ ਹੈ।',
'mailmypassword'             => 'ਨਵਾਂ ਪਾਸਵਰਡ ਈ-ਮੇਲ ਕਰੋ',
'passwordremindertitle'      => '{{SITENAME}} ਲਈ ਪਾਸਵਰਡ ਯਾਦ ਰੱਖੋ',
'passwordremindertext'       => 'ਕਿਸੇ ਨੇ (ਸ਼ਾਇਦ ਤੁਸੀਂ, IP ਪਤਾ $1 ਤੋਂ) {{SITENAME}} ਲਈ ਪਾਸਵਰਡ ਬਦਲਣ ਦੀ ਬੇਨਤੀ ਕੀਤੀ ਹੈ ($4)।
ਮੈਂਬਰ "$2" ਲਈ ਆਰਜ਼ੀ ਪਾਸਵਰਡ ਬਣਾ ਕੇ "$3" ਤੇ ਭੇਜ ਦਿੱਤਾ ਗਿਆ ਹੈ।
ਜੇ ਤੁਹਾਡਾ ਇਹੀ ਇਰਾਦਾ ਸੀ ਤਾਂ ਤੁਹਾਨੂੰ ਚਾਹੀਦਾ ਹੈ ਹੁਣੇ ਲਾਗਇਨ ਕਰਕੇ ਆਪਣਾ ਪਾਸਵਰਡ ਲਓ।
ਤੁਹਾਡਾ ਆਰਜ਼ੀ ਪਾਸਵਰਡ {{PLURAL:$5|ਇਕ ਦਿਨ|$5 ਦਿਨਾਂ}} ਵਿਚ ਖ਼ਤਮ ਹੋ ਜਾਵੇਗਾ।

ਜੇ ਕਿਸੇ ਹੋਰ ਨੇ ਇਹ ਬੇਨਤੀ ਕੀਤੀ ਸੀ ਜਾਂ ਜੇ ਤੁਹਾਨੂੰ ਆਪਣਾ ਪਾਸਵਰਡ ਯਾਦ ਹੈ ਅਤੇ ਤੁਸੀਂ ਇਸਨੂੰ ਬਦਲਣਾ ਨਹੀਂ ਚਾਹੁੰਦੇ ਤਾਂ ਤੁਸੀਂ ਇਸ ਸੁਨੇਹੇ ਨੂੰ ਨਜ਼ਰਅੰਦਾਜ਼ ਕਰ ਕੇ ਆਪਣਾ ਪੁਰਾਣਾ ਪਾਸਵਰਡ ਵਰਤਣਾ ਜਾਰੀ ਰੱਖ ਸਕਦੇ ਹੋ।',
'noemail'                    => 'ਯੂਜ਼ਰ "$1" ਲਈ ਰਿਕਾਰਡ ਵਿੱਚ ਕੋਈ ਈਮੇਲ ਐਡਰੈੱਸ ਨਹੀਂ ਹੈ।',
'noemailcreate'              => 'ਤੁਹਾਨੂੰ ਠੀਕ ਈਮੇਲ ਪਤਾ ਦੇਣਾ ਪਵੇਗਾ',
'passwordsent'               => '"$1" ਨਾਲ ਰਜਿਸਟਰ ਕੀਤੇ ਈਮੇਲ ਪਤੇ ਉੱਤੇ ਈਮੇਲ ਭੇਜੀ ਗਈ ਹੈ।
ਇਹ ਮਿਲਣ ਮਗਰੋਂ ਮੁੜ ਦਾਖ਼ਲ ਹੋਵੋ ਜੀ।',
'blocked-mailpassword'       => 'ਤੁਹਾਡੇ IP ਪਤੇ ਤੇ ਸੋਧ ਕਰਨ ਤੇ ਪਾਬੰਦੀ ਹੈ ਅਤੇ ਇਸੇ ਕਰਕੇ, ਗ਼ਲਤ ਵਰਤੋਂ ਤੋਂ ਬਚਣ ਲਈ, ਪਾਸਵਰਡ ਹਾਸਲ ਕਰਨ ਵਾਲ਼ੀ ਸਹੂਲਤ ਦੀ ਵਰਤੋਂ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'eauthentsent'               => 'ਇਕ ਤਸਦੀਕੀ ਈ-ਮੇਲ ਨਾਮਜ਼ਦ ਕੀਤੇ ਈ-ਮੇਲ ਪਤੇ ਤੇ ਭੇਜੀ ਜਾ ਚੁੱਕੀ ਹੈ।
ਤੁਹਾਡੇ ਪਤੇ ਤੇ ਕੋਈ ਹੋਰ ਈ-ਮੇਲ ਭੇਜਣ ਤੋਂ ਪਹਿਲਾਂ, ਇਹ ਤਸਦੀਕ ਕਰਨ ਲਈ ਕਿ ਖਾਤਾ ਅਸਲ ਵਿਚ ਤੁਹਾਡਾ ਹੀ ਹੈ, ਤੁਹਾਨੂੰ ਉਸ ਈ-ਮੇਲ ਵਿਚਲੀਆਂ ਹਦਾਇਤਾਂ ਤੇ ਅਮਲ ਕਰਨਾ ਹੋਵੇਗਾ।',
'throttled-mailpassword'     => 'ਆਖ਼ਰੀ {{PLURAL:$1|ਇੱਕ ਘੰਟੇ|$1 ਘੰਟਿਆਂ}} ਵਿਚ ਇੱਕ ਪਾਸਵਰਡ ਯਾਦ-ਦਹਾਨੀ ਪਹਿਲਾਂ ਹੀ ਭੇਜੀ ਜਾ ਚੁੱਕੀ ਹੈ।
ਗ਼ਲਤ ਵਰਤੋਂ ਤੋਂ ਬਚਣ ਲਈ, {{PLURAL:$1|ਇੱਕ ਘੰਟੇ|$1 ਘੰਟਿਆਂ}} ਵਿੱਚ ਸਿਰਫ਼ ਇੱਕ ਹੀ ਪਾਸਵਰਡ ਯਾਦ-ਦਹਾਨੀ ਭੇਜੀ ਜਾਂਦੀ ਹੈ।',
'mailerror'                  => 'ਈਮੇਲ ਭੇਜਣ ਦੌਰਾਨ ਗਲਤੀ: $1',
'acct_creation_throttle_hit' => 'ਤੁਹਾਡਾ IP ਪਤਾ ਵਰਤ ਕੇ ਆਉਣ ਵਾਲ਼ਿਆਂ ਨੇ ਆਖ਼ਰੀ ਦਿਨਾਂ ਵਿਚ ਇਸ ਵਿਕੀ ’ਤੇ {{PLURAL:$1|੧ ਖਾਤਾ ਬਣਾਇਆ ਹੈ|$1 ਖਾਤੇ ਬਣਾਏ ਹਨ}} ਜੋ ਕਿ, ਹਾਲ ਦੀ ਘੜੀ, ਖਾਤੇ ਬਣਾਉਣ ਦੀ ਆਖ਼ਰੀ ਹੱਦ ਹੈ।
ਨਤੀਜੇ ਵਜੋਂ ਇਸ IP ਪਤੇ ਨੂੰ ਵਰਤਣ ਵਾਲ਼ੇ ਫ਼ਿਲਹਾਲ ਹੋਰ ਖਾਤੇ ਨਹੀਂ ਬਣਾ ਸਕਦੇ।',
'emailauthenticated'         => 'ਤੁਹਾਡਾ ਈ-ਮੇਲ ਪਤਾ $2 ਨੂੰ $3 ’ਤੇ ਤਸਦੀਕ ਕੀਤਾ ਗਿਆ।',
'emailnotauthenticated'      => 'ਤੁਹਾਡਾ ਈਮੇਲ ਪਤਾ ਹਾਲੇ ਤਸਕਦੀਕ ਨਹੀਂ ਹੋਇਆ। ਹੇਠ ਦਿੱਤੇ ਫੀਚਰਾਂ ਲਈ ਕੋਈ ਵੀ ਈਮੇਲ ਨਹੀਂ ਭੇਜੀ ਜਾਵੇਗੀ।',
'noemailprefs'               => 'ਇਹਨਾਂ ਸਹੂਲਤਾਂ ਦੀ ਵਰਤੋਂ ਲਈ ਆਪਣੀਆਂ ਪਸੰਦਾਂ ਵਿਚ ਇਕ ਈ-ਮੇਲ ਪਤਾ ਦਿਓ।',
'emailconfirmlink'           => 'ਆਪਣਾ ਈਮੇਲ ਪਤਾ ਤਸਦੀਕ ਕਰਾਓ',
'invalidemailaddress'        => 'ਈਮੇਲ ਪਤਾ ਕਬੂਲ ਨਹੀਂ ਕੀਤਾ ਜਾ ਸਕਦਾ ਹੈ ਕਿਉਂਕਿ ਇਹ ਸਹੀ ਅੰਦਾਜ਼ ਵਿਚ ਲਿਖਿਆ ਨਹੀਂ ਜਾਪਦਾ ਹੈ।
ਸਹੀ ਅੰਦਾਜ਼ ਵਿਚ ਲਿਖੋ ਜਾਂ ਇਹ ਖ਼ਾਨਾ ਖ਼ਾਲੀ ਛੱਡ ਦਿਓ।',
'cannotchangeemail'          => 'ਇਸ ਵਿਕੀ ਤੇ ਈ-ਮੇਲ ਪਤੇ ਬਦਲੇ ਨਹੀਂ ਜਾ ਸਕਦੇ।',
'accountcreated'             => 'ਖਾਤਾ ਬਣਾਇਆ',
'accountcreatedtext'         => '[[{{ns:User}}:$1|$1]] ([[{{ns:User talk}}:$1|ਗੱਲਬਾਤ]]) ਲਈ ਵਰਤੋਂਕਾਰ ਖਾਤਾ ਬਣਾਇਆ ਗਿਆ।',
'createaccount-title'        => '{{SITENAME}} ਲਈ ਅਕਾਊਂਟ ਬਣਾਉਣਾ',
'createaccount-text'         => 'ਕਿਸੇ ਨੇ "$2" ਮੈਂਬਰ-ਨਾਮ ਅਤੇ "$3" ਪਾਸਵਰਡ ਨਾਲ਼ {{SITENAME}} ($4) ਤੇ, ਤੁਹਾਡਾ ਈ-ਮੇਲ ਪਤਾ ਵਰਤਦੇ ਹੋਏ, ਖਾਤਾ ਬਣਾਇਆ ਹੈ।
ਤੁਹਾਨੂੰ ਹੁਣੇ ਲਾਗਇਨ ਕਰਕੇ ਆਪਣਾ ਪਾਸਵਰਡ ਬਦਲਣਾ ਚਾਹੀਦਾ ਹੈ।

ਜੇ ਇਹ ਖਾਤਾ ਗ਼ਲਤੀ ਨਾਲ਼ ਬਣ ਗਿਆ ਹੈ ਤਾਂ ਤੁਸੀਂ ਇਸ ਸੁਨੇਹੇ ਨੂੰ ਨਜ਼ਰਅੰਦਾਜ਼ ਕਰ ਸਕਦੇ ਹੋ।',
'usernamehasherror'          => 'ਵਰਤੋਂਕਾਰ ਦੇ ਨਾਂ ਵਿਚ ਹੈਸ਼ ਅੱਖਰ ਨਹੀਂ ਹੋ ਸਕਦੇ',
'login-throttled'            => 'ਤੁਸੀਂ ਬਹੁਤ ਸਾਰੀਆਂ ਤਾਜ਼ਾ ਲਾਗਇਨ ਕੋਸ਼ਿਸ਼ਾਂ ਕੀਤੀਆਂ ਹਨ।
ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰਨ ਤੋਂ ਪਹਿਲਾਂ ਥੋੜੀ ਉਡੀਕ ਕਰੋ।',
'login-abort-generic'        => 'ਤੁਹਾਡਾ ਦਾਖ਼ਲਾ ਨਾਕਾਮ ਸੀ - ਅਧੂਰਾ ਛੱਡਿਆ',
'loginlanguagelabel'         => 'ਭਾਸ਼ਾ: $1',
'suspicious-userlogout'      => 'ਤੁਹਾਡੀ ਵਿਦਾਇਗੀ ਦੀ ਬੇਨਤੀ ਨਕਾਰ ਦਿੱਤੀ ਗਈ ਕਿਉਂਕਿ ਲੱਗਦਾ ਹੈ ਕਿ ਇਹ ਕਿਸੇ ਟੁੱਟੇ ਹੋਏ ਬਰਾਊਜ਼ਰ ਜਾਂ ਕੈਸ਼ ਹੋਈ ਪ੍ਰਾਕਸੀ ਤੋਂ ਭੇਜੀ ਗਈ ਸੀ।',

# Email sending
'php-mail-error-unknown' => 'PHP ਦੇ ਮੇਲ() ਕਰਜ ਵਿੱਚ ਅਣਜਾਣ ਦੋਸ਼',
'user-mail-no-addy'      => 'ਬਿਨਾਂ ਈ-ਮੇਲ ਪਤਾ ਦਿੱਤੇ ਈ-ਮੇਲ ਭੇਜਣ ਦੀ ਕੋਸ਼ਿਸ਼ ਕੀਤੀ।',

# Change password dialog
'resetpass'                 => 'ਪਾਸਵਰਡ ਬਦਲੋ',
'resetpass_announce'        => 'ਤੁਸੀਂ ਇੱਕ ਆਰਜ਼ੀ ਈ-ਮੇਲ ਕੀਤੇ ਕੋਡ ਨਾਲ ਲਾਗਇਨ ਕੀਤਾ ਹੈ। ਲਾਗਇਨ ਪੂਰਾ ਕਰਨ ਲਈ, ਤੁਹਾਨੂੰ ਇੱਥੇ ਨਵਾਂ ਪਾਸਵਰਡ ਦੇਣਾ ਪਵੇਗਾ:',
'resetpass_header'          => 'ਅਕਾਊਂਟ ਪਾਸਵਰਡ ਬਦਲੋ',
'oldpassword'               => 'ਪੁਰਾਣਾ ਪਾਸਵਰਡ:',
'newpassword'               => 'ਨਵਾਂ ਪਾਸਵਰਡ:',
'retypenew'                 => 'ਨਵਾਂ ਪਾਸਵਰਡ ਮੁੜ-ਲਿਖੋ:',
'resetpass-abort-generic'   => 'ਇੱਕ ਐਕਸਟੈਂਸ਼ਨ ਵੱਲੋਂ ਪਾਸਵਰਡ ਦੀ ਤਬਦੀਲੀ ਰੱਦ ਕੀਤੀ ਗਈ',
'resetpass_submit'          => 'ਪਾਸਵਰਡ ਸੈੱਟ ਕਰੋ ਅਤੇ ਲਾਗਇਨ ਕਰੋ',
'resetpass_success'         => 'ਤੁਹਾਡਾ ਪਾਸਵਰਡ ਠੀਕ ਤਰਾਂ ਬਦਲਿਆ ਗਿਆ ਹੈ! ਹੁਣ ਤੁਸੀਂ ਲਾਗਇਨ ਕਰ ਸਕਦੇ ਹੋ...',
'resetpass_forbidden'       => 'ਪਾਸਵਰਡ ਬਦਲਿਆ ਨਹੀਂ ਜਾ ਸਕਦਾ',
'resetpass-no-info'         => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਸਿੱਧੇ ਹੀ ਵੇਖਣ ਲਈ ਤੁਹਾਨੂੰ ਲਾਗਇਨ ਕਰਨਾ ਪਵੇਗਾ।',
'resetpass-submit-loggedin' => 'ਪਾਸਵਰਡ ਬਦਲੋ',
'resetpass-submit-cancel'   => 'ਰੱਦ ਕਰੋ',
'resetpass-wrong-oldpass'   => 'ਗ਼ਲਤ ਆਰਜ਼ੀ ਜਾਂ ਚਾਲੂ ਪਾਸਵਰਡ।
ਸ਼ਾਇਦ ਤੁਸੀਂ ਕਾਮਯਾਬੀ ਨਾਲ਼ ਆਪਣਾ ਪਾਸਵਰਡ ਬਦਲ ਚੁੱਕੇ ਹੋ ਜਾਂ ਆਰਜ਼ੀ ਪਾਸਵਰਡ ਲਈ ਬੇਨਤੀ ਕੀਤੀ ਸੀ।',
'resetpass-temp-password'   => 'ਆਰਜ਼ੀ ਪਾਸਵਰਡ:',

# Special:PasswordReset
'passwordreset'                   => 'ਪਾਸਵਰਡ ਮੁੜ-ਸੈੱਟ ਕਰੋ',
'passwordreset-text'              => 'ਆਪਣਾ ਪਾਸਵਰਡ ਮੁੜ-ਸੈੱਟ ਕਰਨ ਲਈ ਇਹ ਫਾਰਮ ਪੂਰਾ ਕਰੋ।',
'passwordreset-legend'            => 'ਪਾਸਵਰਡ ਮੁੜ-ਸੈੱਟ ਕਰੋ',
'passwordreset-disabled'          => 'ਇਸ ਵਿਕੀ ਤੇ ਪਾਸਵਰਡ ਰੀਸੈੱਟ ਬੰਦ ਕੀਤੇ ਗਏ ਹਨ।',
'passwordreset-pretext'           => '{{PLURAL:$1||ਹੇਠਾਂ ਸਮੱਗਰੀ ਦੀ ਕੋਈ ਇੱਕ ਵਸਤੂ ਭਰੋ}}',
'passwordreset-username'          => 'ਯੂਜ਼ਰ-ਨਾਂ:',
'passwordreset-domain'            => 'ਡੋਮੇਨ:',
'passwordreset-capture'           => 'ਨਤੀਜੇ ਵਜੋਂ ਬਣਦੀ ਈਮੇਲ ਵੇਖੋ?',
'passwordreset-capture-help'      => 'ਜੇਕਰ ਤੁਸੀਂ ਇਹ ਬਕਸਾ ਸਹੀ ਕਰਦੇ ਹੋ ਤਾਂ ਇਹ ਈਮੇਲ (ਅਸਥਾਈ ਪਾਸਵਰਡ ਸਮੇਤ) ਤੁਹਾਨੂੰ ਵਿਖਾਈ ਜਾਵੇਗੀ ਅਤੇ ਵਰਤੋਂਕਾਰ ਨੂੰ ਵੀ ਭੇਜੀ ਜਾਵੇਗੀ।',
'passwordreset-email'             => 'ਈਮੇਲ ਐਡਰੈੱਸ:',
'passwordreset-emailtitle'        => '{{SITENAME}} ਤੇ ਖਾਤੇ ਦੀ ਜਾਣਕਾਰੀ',
'passwordreset-emailtext-ip'      => 'ਕਿਸੇ ਨੇ (ਸ਼ਾਇਦ ਤੁਸੀਂ, IP ਪਤਾ $1 ਤੋਂ) {{SITENAME}}
($4) ਲਈ ਖਾਤਾ ਤਫ਼ਸੀਲ ਯਾਦ-ਦਹਾਨੀ ਦੀ ਬੇਨਤੀ ਕੀਤੀ ਹੈ। ਇਹ {{PLURAL:
$3|ਖਾਤਾ ਇਸ ਈ-ਮੇਲ ਪਤੇ ਨਾਲ਼ ਜੁੜਿਆ ਹੈ|ਖਾਤੇ ਇਸ ਈ-ਮੇਲ ਪਤੇ ਨਾਲ਼ ਜੁੜੇ ਹਨ}}:
$2

ਇਹ ਆਰਜ਼ੀ ਪਾਸਵਰਡ
{{PLURAL:$5|ਇੱਕ ਦਿਨ|$5 ਦਿਨਾਂ}} ਵਿਚ ਖ਼ਤਮ ਹੋ {{PLURAL:$3|ਜਾਵੇਗਾ|ਜਾਣਗੇ}}।
ਤੁਹਾਨੂੰ ਹੁਣੇ ਲਾਗਇਨ ਕਰਕੇ ਨਵਾਂ ਪਾਸਵਰਡ ਬਣਾਉਣਾ ਚਾਹੀਦਾ ਹੈ। ਜੇ ਕਿਸੇ ਹੋਰ ਨੇ ਇਹ ਬੇਨਤੀ ਕੀਤੀ ਸੀ ਜਾਂ ਜੇ ਤੁਹਾਨੂੰ ਆਪਣਾ ਪਾਸਵਰਡ ਯਾਦ ਹੈ ਅਤੇ ਤੁਸੀਂ ਇਸਨੂੰ ਬਦਲਣਾ ਨਹੀਂ ਚਾਹੁੰਦੇ ਤਾਂ ਤੁਸੀਂ ਇਸ ਸੁਨੇਹੇ ਨੂੰ ਨਜ਼ਰਅੰਦਾਜ਼ ਕਰ ਕੇ ਆਪਣਾ ਪੁਰਾਣਾ ਪਾਸਵਰਡ ਵਰਤਣਾ ਜਾਰੀ ਰੱਖ ਸਕਦੇ ਹੋ।',
'passwordreset-emailelement'      => 'ਯੂਜ਼ਰ-ਨਾਂ: $1
ਆਰਜ਼ੀ ਪਾਸਵਰਡ: $2',
'passwordreset-emailsent'         => 'ਇੱਕ ਪਾਸਵਰਡ ਮੁੜ-ਸੈੱਟ ਈ-ਮੇਲ ਭੇਜੀ ਜਾ ਚੁੱਕੀ ਹੈ।',
'passwordreset-emailsent-capture' => 'ਇੱਕ ਯਾਦ-ਦਹਾਨੀ ਈ-ਮੇਲ, ਜਿਹੜੀ ਕਿ ਹੇਠਾਂ ਦਿੱਸ ਰਹੀ ਹੈ, ਭੇਜੀ ਜਾ ਚੁੱਕੀ ਹੈ।',

# Special:ChangeEmail
'changeemail'          => 'ਈ-ਮੇਲ ਸਿਰਨਾਵਾਂ ਬਦਲੋ',
'changeemail-header'   => 'ਖਾਤੇ ਵਾਲਾ ਈ-ਮੇਲ ਸਿਰਨਾਵਾਂ ਬਦਲੋ',
'changeemail-text'     => 'ਆਪਣਾ ਈ-ਮੇਲ ਪਤਾ ਬਦਲਣ ਲਈ ਇਹ ਫ਼ਾਰਮ ਮੁਕੰਮਲ ਕਰੋ। ਇਸ ਤਬਦੀਲੀ ਨੂੰ ਤਸਦੀਕ ਕਰਨ ਲਈ ਤੁਹਾਨੂੰ ਆਪਣਾ ਪਾਸਵਰਡ ਦਾਖ਼ਲ ਕਰਨਾ ਪਵੇਗਾ।',
'changeemail-no-info'  => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਸਿੱਧੇ ਹੀ ਵੇਖਣ ਲਈ ਤੁਹਾਨੂੰ ਲਾਗਇਨ ਕਰਨਾ ਪਵੇਗਾ।',
'changeemail-oldemail' => 'ਮੌਜੂਦਾ ਈਮੇਲ ਸਿਰਨਾਵਾਂ:',
'changeemail-newemail' => 'ਨਵਾਂ ਈ-ਮੇਲ ਸਿਰਨਾਵਾਂ:',
'changeemail-none'     => '(ਕੋਈ ਨਹੀਂ)',
'changeemail-submit'   => 'ਈ-ਮੇਲ ਬਦਲੋ',
'changeemail-cancel'   => 'ਰੱਦ ਕਰੋ',

# Edit page toolbar
'bold_sample'     => 'ਗੂੜੀ ਲਿਖਤ',
'bold_tip'        => 'ਗੂੜੇ ਅੱਖਰ',
'italic_sample'   => 'ਟੇਢੇ ਅੱਖਰ',
'italic_tip'      => 'ਟੇਢੇ ਅੱਖਰ',
'link_sample'     => 'ਲਿੰਕ ਸਿਰਲੇਖ',
'link_tip'        => 'ਅੰਦਰੂਨੀ ਲਿੰਕ',
'extlink_sample'  => 'http://www.example.com ਲਿੰਕ ਸਿਰਲੇਖ',
'extlink_tip'     => 'ਬਾਹਰੀ ਲਿੰਕ (http:// ਅਗੇਤਰ ਯਾਦ ਰੱਖੋ)',
'headline_sample' => 'ਸੁਰਖੀ ਅੱਖਰ',
'headline_tip'    => 'ਪੱਧਰ 2 ਸੁਰਖੀ',
'nowiki_sample'   => 'ਅਸੰਗਠਿਤ ਪਾਠ (NON -FORMATTED) ਇੱਥੇ ਰਖੋ।',
'nowiki_tip'      => 'ਵਿਕੀ ਫਾਰਮੈਟਿੰਗ ਨਜ਼ਰਅੰਦਾਜ਼ ਕਰੋ',
'image_tip'       => 'ਇੰਬੈੱਡ ਫ਼ਾਈਲ',
'media_tip'       => 'ਫਾਇਲ ਲਿੰਕ',
'sig_tip'         => 'ਤੁਹਾਡੇ ਦਸਤਖ਼ਤ, ਸਮੇਂ ਸਮੇਤ',
'hr_tip'          => 'ਲੇਟਵੀਂ ਰੇਖਾ (ਟਾਵੀਂ-ਟਾਵੀਂ ਵਰਤੋਂ ਕਰੋ)',

# Edit pages
'summary'                          => 'ਸਾਰ:',
'subject'                          => 'ਵਿਸ਼ਾ/ਹੈੱਡਲਾਈਨ:',
'minoredit'                        => 'ਇਹ ਇੱਕ ਛੋਟੀ ਸੋਧ ਹੈ',
'watchthis'                        => 'ਇਸ ਸਫ਼ੇ ’ਤੇ ਨਜ਼ਰ ਰੱਖੋ',
'savearticle'                      => 'ਸਫ਼ਾ ਸੰਭਾਲੋ',
'preview'                          => 'ਝਲਕ',
'showpreview'                      => 'ਝਲਕ ਵਿਖਾਓ',
'showlivepreview'                  => 'ਲਾਈਵ ਝਲਕ',
'showdiff'                         => 'ਤਬਦੀਲੀਆਂ ਵਖਾਓ',
'anoneditwarning'                  => "'''ਖ਼ਬਰਦਾਰ:''' ਤੁਸੀਂ ਲਾਗਇਨ ਨਹੀਂ ਕੀਤਾ ਹੋਇਆ। ਤੁਹਾਡਾ IP ਪਤਾ ਇਸ ਸਫ਼ੇ ਦੇ ਅਤੀਤ ਵਿੱਚ ਰਿਕਾਰਡ ਕੀਤਾ ਜਾਵੇਗਾ।",
'anonpreviewwarning'               => "''ਤੁਸੀਂ ਲਾਗਇਨ ਨਹੀਂ ਕੀਤਾ ਹੋਇਆ। ਤਬਦੀਲੀ ਸਾਂਭਣ ਨਾਲ਼ ਤੁਹਾਡਾ IP ਪਤਾ ਸਫ਼ੇ ਦੇ ਸੋਧ ਅਤੀਤ ਵਿਚ ਰਿਕਾਰਡ ਹੋ ਜਾਵੇਗਾ।''",
'missingsummary'                   => "'''ਯਾਦ-ਦਹਾਨੀ:''' ਤੁਸੀਂ ਸੋਧ ਸਾਰ ਮੁਹੱਈਆ ਨਹੀਂ ਕਰਵਾਇਆ। ਜੇ ਤੁਸੀਂ \"{{int:savearticle}}\" ਤੇ ਦੁਬਾਰਾ ਕਲਿੱਕ ਕੀਤਾ ਤਾਂ ਤੁਹਾਡਾ ਸਫ਼ਾ ਇਸਦੇ ਬਿਨਾਂ ਹੀ ਸਾਂਭਿਆ ਜਾਵੇਗਾ।",
'missingcommenttext'               => 'ਹੇਠਾਂ ਇੱਕ ਟਿੱਪਣੀ ਦਿਓ।',
'summary-preview'                  => 'ਸੋਧ ਸਾਰ ਦੀ ਝਲਕ:',
'subject-preview'                  => 'ਵਿਸ਼ੇ/ਸਿਰਨਾਵੇਂ ਦੀ ਝਲਕ:',
'blockedtitle'                     => 'ਵਰਤੋਂਕਾਰ ਉੱਤੇ ਪਾਬੰਦੀ ਲੱਗੀ ਹੋਈ ਹੈ',
'blockedtext'                      => "'''ਤੁਹਾਡੇ ਮੌਮਬਰ ਨਾਮ ਜਾਂ IP ਪਤੇ ’ਤੇ ਪਾਬੰਦੀ ਲੱਗ ਚੁੱਕੀ ਹੈ।'''

ਪਾਬੰਦੀ $1 ਨੇ ਲਾਈ ਹੈ।
ਦਿੱਤਾ ਗਿਆ ਕਾਰਨ ਇਹ ਹੈ, ''$2''।

* ਪਾਬੰਦੀ ਸ਼ੁਰੂ: $8
* ਪਾਬੰਦੀ ਖਤਮ: $6
* ਪਾਬੰਦੀ ਲਾਉਣ ਵਾਲੇ ਦਾ ਇਰਾਦਾ: $7

ਪਾਬੰਦੀ ਬਾਰੇ ਚਰਚਾ ਕਰਨ ਲਈ ਤੁਸੀਂ $1 ਜਾਂ ਕਿਸੇ ਹੋਰ
[[{{MediaWiki:Grouppage-
sysop}}|administrator]] ਨਾਲ ਰਾਬਤਾ ਕਰ ਸਕਦੇ ਹੋ।
ਤੁਸੀਂ 'ਇਸ ਮੈਂਬਰ ਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ' ਸਹੂਲਤ ਦੀ ਵਰਤੋਂ ਨਹੀਂ ਕਰ ਸਕਦੇ ਜੇ ਤੁਹਾਡੀਆਂ [[Special:Preferences|ਖਾਤਾ ਪਸੰਦਾਂ]] ਵਿੱਚ ਇੱਕ ਸਹੀ ਈ-ਮੇਲ ਪਤਾ ਨਹੀਂ ਦਿੱਤਾ ਗਿਆ ਜਾਂ ਜੇ ਤੁਹਾਡੇ ਇਸਨੂੰ ਵਰਤਣ ਤੇ ਪਾਬੰਦੀ ਹੈ।
ਤੁਹਾਡਾ ਚਾਲੂ IP ਪਤਾ $3 ਹੈ,
ਅਤੇ ਪਾਬੰਦੀ ਪਤਾ #$5 ਹੈ।
ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਆਪਣੇ ਕਿਸੇ ਵੀ ਸਵਾਲ ਜਾਂ ਪੁੱਛ-ਗਿੱਛ ਵਿਚ ਇਹ ਉੱਪਰਲੀ ਤਫ਼ਸੀਲ ਜ਼ਰੂਰ ਸ਼ਾਮਲ ਕਰੋ।",
'blockednoreason'                  => 'ਕੋਈ ਕਾਰਨ ਨਹੀਂ ਦੱਸਿਆ ਗਿਆ',
'whitelistedittext'                => 'ਸਫ਼ੇ ਸੋਧਣ ਲਈ ਤੁਹਾਨੂੰ $1 ਕਰਨਾ ਪਵੇਗਾ।',
'confirmedittext'                  => 'ਸਫ਼ਿਆਂ ਨੂੰ ਸੋਧਣ ਤੋਂ ਪਹਿਲਾਂ ਤੁਹਾਨੂੰ ਆਪਣਾ ਈ-ਮੇਲ ਪਤਾ ਤਸਦੀਕ ਕਰਨਾ ਪਵੇਗਾ।
ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਆਪਣੀਆਂ [[Special:Preferences|ਖਾਤਾ ਪਸੰਦਾ]] ਜ਼ਰੀਏ ਸਹੀ ਈ-ਮੇਲ ਪਤਾ ਦਿਓ ਅਤੇ ਤਸਦੀਕ ਕਰੋ।',
'nosuchsectiontitle'               => 'ਭਾਗ ਲੱਭ ਨਹੀਂ ਰਿਹਾ',
'nosuchsectiontext'                => 'ਤੁਸੀਂ ਨਾ-ਮੌਜੂਦ ਭਾਗ ਨੂੰ ਸੋਧਣ ਦੀ ਕੋਸ਼ਿਸ਼ ਕੀਤੀ ਹੈ।
ਸ਼ਾਇਦ ਤੁਹਾਡੇ ਸਫ਼ੇ ਨੂੰ ਵੇਖਣ ਦੇ ਦੌਰਾਨ ਇਹ ਮਿਟਾਇਆ ਜਾਂ ਇਸਦਾ ਸਿਰਲੇਖ ਬਦਲਿਆ ਜਾ ਚੁੱਕਾ ਹੈ।',
'loginreqtitle'                    => 'ਲਾਗਇਨ ਚਾਹੀਦਾ ਹੈ',
'loginreqlink'                     => 'ਲਾਗਇਨ',
'loginreqpagetext'                 => 'ਹੋਰ ਸਫ਼ੇ ਵੇਖਣ ਲਈ ਤੁਹਾਨੂੰ $1 ਕਰਨਾ ਪਵੇਗਾ।',
'accmailtitle'                     => 'ਪਾਸਵਰਡ ਭੇਜਿਆ।',
'accmailtext'                      => "[[User talk:$1|$1]] ਲਈ ਰਲ਼ਵੇਂ ਤੌਰ ’ਤੇ ਬਣਿਆ ਪਾਸਵਰਡ $2 ਨੂੰ ਭੇਜਿਆ ਜਾ ਚੁੱਕਾ ਹੈ।
ਇਸ ਨਵੇਂ ਖਾਤੇ ਲਈ ਲਾਗਇਨ ਕਰਨ ਤੋਂ ਬਾਅਦ ''[[Special:ChangePassword|ਪਾਸਵਰਡ ਬਦਲੋ]]'' ’ਤੇ ਜਾ ਕੇ ਪਾਸਵਰਡ ਬਦਲਿਆ ਜਾ ਸਕਦਾ ਹੈ।",
'newarticle'                       => '(ਨਵਾਂ)',
'newarticletext'                   => "ਤੁਸੀਂ ਕਿਸੇ ਅਜਿਹੇ ਸਫ਼ੇ ਦੇ ਕੜੀ ’ਤੇ ਹੋ ਜੋ ਹਾਲੇ ਬਣਾਇਆ ਨਹੀਂ ਗਿਆ।
ਸਫ਼ਾ ਬਣਾਉਣ ਲਈ ਹੇਠ ਦਿੱਤੇ ਖਾਨੇ ਵਿਚ ਲਿਖਣਾ ਸ਼ੁਰੂ ਕਰੋ। (ਹੋਰ ਮਦਦ ਲਈ [[{{MediaWiki:Helppage}}|ਮਦਦ ਸਫ਼ਾ]] ਵੇਖੋ।)
ਜੇ ਤੁਸੀਂ ਗ਼ਲਤੀ ਨਾਲ ਇੱਥੇ ਆਏ ਹੋ ਤਾਂ ਆਪਣੇ ਬ੍ਰਾਊਜ਼ਰ ਦੇ '''ਪਿੱਛੇ''' ਬਟਨ ’ਤੇ ਕਲਿੱਕ ਕਰੋ।",
'anontalkpagetext'                 => "----''ਇਹ ਇਕ ਗੁਮਨਾਮ ਮੈਂਬਰ ਲਈ ਇਕ ਚਰਚਾ ਸਫ਼ਾ ਹੈ ਜਿਸਨੇ ਹਾਲੇ ਖਾਤਾ ਨਹੀ ਬਣਾਇਆ ਜਾਂ ਉਸਨੂੰ ਵਰਤ ਨਹੀਂ ਰਿਹਾ।
ਇਸ ਵਾਸਤੇ ਸਾਡੇ ਕੋਲ ਉਸਨੂੰ ਪਛਾਨਣ ਲਈ IP ਪਤਾ ਹੈ।
ਇਕ IP ਪਤਾ ਕਈ ਵਰਤਣ ਵਾਲ਼ਿਆਂ ਦੁਆਰਾ ਸਾਂਝਾ ਕੀਤਾ ਜਾ ਸਕਦਾ ਹੈ।
ਜੇ ਤੁਸੀਂ ਇੱਕ ਗੁਮਨਾਮ ਮੈਂਬਰ ਹੋ ਅਤੇ ਸਮਝਦੇ ਹੋ ਕਿ ਇਹ ਟਿੱਪਣੀਆਂ ਤੁਹਾਡੇ ਲਈ ਹਨ ਤਾਂ ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਹੋਰਾਂ ਗੁਮਨਾਮ ਮੈਂਬਰਾਂ ਨਾਲ਼ ਪੈਦਾ ਹੋਣ ਵਾਲ਼ੀ ਉਲਝਣ ਤੋਂ ਬਚਣ ਲਈ [[Special:UserLogin/signup|ਖਾਤਾ ਬਣਾਓ]] ਜਾਂ [[Special:UserLogin|ਲਾਗਇਨ ਕਰੋ]]।''",
'noarticletext'                    => 'ਫ਼ਿਲਹਾਲ ਇਸ ਸਫ਼ੇ ’ਤੇ ਕੋਈ ਲਿਖਤ ਨਹੀਂ ਹੈ। ਤੁਸੀਂ ਦੂਜੇ ਸਫ਼ਿਆਂ ’ਤੇ [[Special:Search/{{PAGENAME}}|ਇਸ ਸਿਰਲੇਖ ਦੀ ਖੋਜ]] ਕਰ ਸਕਦੇ ਹੋ, <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} ਸਬੰਧਤ ਚਿੱਠੇ ਲੱਭ] ਸਕਦੇ ਹੋ ਜਾਂ ਇਸ [{{fullurl:{{FULLPAGENAME}}|action=edit}} ਸਫ਼ੇ ਵਿਚ ਲਿਖ] ਸਕਦੇ ਹੋ</span>।',
'noarticletext-nopermission'       => 'ਫ਼ਿਲਹਾਲ ਇਸ ਸਫ਼ੇ ’ਤੇ ਕੋਈ ਲਿਖਤ ਨਹੀਂ ਹੈ। ਤੁਸੀਂ ਦੂਸਰੇ ਸਫ਼ਿਆਂ ਤੇ [[Special:Search/{{PAGENAME}}|ਇਸ ਪਾਠ ਦੀ ਖੋਜ]] ਕਰ ਸਕਦੇ ਹੋ, ਸਬੰਧਤ <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} ਚਿੱਠੇ] ਖੋਜ ਸਕਦੇ ਹੋ, ਜਾਂ [{{fullurl:{{FULLPAGENAME}}|action=edit}} ਇਸ ਸਫ਼ੇ ਵਿਚ ਲਿਖ] ਸਕਦੇ ਹੋ</span>।',
'userpage-userdoesnotexist'        => 'ਵਰਤੋਂਕਾਰ ਖਾਤਾ "$1" ਰਜਿਸਟਰ ਨਹੀਂ ਹੈ।
ਜੇ ਤੁਸੀਂ ਇਸਨੂੰ ਬਣਾਉਣਾ/ਸੋਧਣਾ ਚਾਹੁੰਦੇ ਹੋ ਤਾਂ ਮਿਰਬਾਨੀ ਕਰਕੇ ਜਾਂਚ ਕਰ ਲਓ।',
'userpage-userdoesnotexist-view'   => 'ਵਰਤੋਂਕਾਰ ਖਾਤਾ "$1" ਰਜਿਸਟਰਡ ਨਹੀਂ ਹੈ।',
'blocked-notice-logextract'        => 'ਇਹ ਵਰਤੋਂਕਾਰ ਇਸ ਵੇਲ਼ੇ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੈ।
ਹਵਾਲੇ ਲਈ ਪਾਬੰਦੀ ਚਿੱਠੇ ਦਾ ਨਵਾਂ ਦਾਖ਼ਲਾ ਹੇਠ ਦਿੱਤਾ ਗਿਆ ਹੈ:',
'usercssyoucanpreview'             => "'''ਟੋਟਕਾ:''' ਆਪਣੇ ਨਵੇਂ CSS ਸਫ਼ੇ ਨੂੰ ਸਾਂਭਣ ਤੋਂ ਪਹਿਲਾਂ ਪਰਖ ਕਰਨ ਲਈ \"{{int:showpreview}}\" ਬਟਨ ਵਰਤੋ।",
'userjsyoucanpreview'              => "'''ਟੋਟਕਾ:''' ਆਪਣੀ ਜਾਵਾਸਕ੍ਰਿਪਟ ਨੂੰ ਸਾਂਭਣ ਤੋਂ ਪਹਿਲਾਂ ਪਰਖ ਕਰਨ ਲਈ \"{{int:showpreview}}\" ਬਟਨ ਵਰਤੋ।",
'usercsspreview'                   => "'''ਯਾਦ ਰੱਖੋ ਤੁਸੀਂ ਆਪਣੀ ਮੈਂਬਰ CSS ਦੀ ਸਿਰਫ਼ ਇਕ ਝਲਕ ਵੇਖ ਰਹੇ ਹੋ।'''
'''ਇਹ ਹਾਲੇ ਸਾਂਭੀ ਨਹੀਂ ਗਈ ਹੈ!'''",
'userjspreview'                    => "'''ਯਾਦ ਰੱਖੋ ਤੁਸੀਂ ਆਪਣੀ ਮੈਂਬਰ ਜਾਵਾਸਕ੍ਰਿਪਟ ਦੀ ਸਿਰਫ਼ ਇਕ ਪਰਖ/ਝਲਕ ਵੇਖ ਰਹੇ ਹੋ।'''
'''ਇਹ ਹਾਲੇ ਸਾਂਭੀ ਨਹੀਂ ਗਈ ਹੈ!'''",
'sitecsspreview'                   => "'''ਯਾਦ ਰੱਖੋ ਤੁਸੀਂ ਇਸ CSS ਦੀ ਸਿਰਫ਼ ਇਕ ਝਲਕ ਵੇਖ ਰਹੇ ਹੋ।'''
'''ਇਹ ਹਾਲੇ ਸਾਂਭੀ ਨਹੀਂ ਗਈ ਹੈ!'''",
'sitejspreview'                    => "'''ਯਾਦ ਰੱਖੋ ਤੁਸੀਂ ਇਸ ਜਾਵਾਸਕ੍ਰਿਪਟ ਕੋਡ ਦੀ ਸਿਰਫ਼ ਇਕ ਝਲਕ ਵੇਖ ਰਹੇ ਹੋ।'''
'''ਇਹ ਹਾਲੇ ਸਾਂਭੀ ਨਹੀਂ ਗਈ ਹੈ!'''",
'updated'                          => '(ਅੱਪਡੇਟ)',
'note'                             => "'''ਟਿੱਪਣੀ:'''",
'previewnote'                      => "'''ਯਾਦ ਰੱਖੋ ਇਹ ਸਿਰਫ਼ ਇੱਕ ਝਲਕ ਹੈ।'''
ਤੁਹਾਡੀਆਂ ਤਬਦੀਲੀਆਂ ਹਾਲੇ ਸਾਂਭੀਆਂ ਨਹੀਂ ਗਈਆਂ!",
'previewconflict'                  => 'ਇਹ ਝਲਕ ਲਿਖਤ ਦਾ ਓਹ ਅਕਸ ਪੇਸ਼ ਕਰਦੀ ਹੈ ਜਿਵੇਂ ਓਹ ਤੁਹਾਡੇ ਸਾਂਭੇ ਜਾਣ ਤੋਂ ਬਾਅਦ ਦਿੱਸੇਗਾ।',
'editing'                          => '$1 ਸੋਧਣਾ ਜਾਰੀ',
'editingsection'                   => '$1 (ਭਾਗ) ਸੋਧ ਜਾਰੀ',
'editingcomment'                   => '$1 (ਨਵਾਂ ਭਾਗ) ਸੋਧ ਜਾਰੀ',
'editconflict'                     => 'ਸੋਧ ਤਕਰਾਰ: $1',
'yourtext'                         => 'ਤੁਹਾਡੀ ਲਿਖਤ',
'storedversion'                    => 'ਸੰਭਾਲਿਆ ਵਰਜਨ',
'yourdiff'                         => 'ਫ਼ਰਕ',
'longpageerror'                    => "'''ਗ਼ਲਤੀ: ਤੁਹਾਡੀ ਪੇਸ਼ ਕੀਤੀ ਲਿਖਤ {{PLURAL:$1|ਇੱਕ ਕਿਲੋਬਾਈਟ|$1 ਕਿਲੋਬਾਈਟ}} ਦੀ ਹੈ ਜੋ ਕਿ {{PLURAL:$2|ਇੱਕ ਕਿਲੋਬਾਈਟ|$2 ਕਿਲੋਬਾਈਟ}} ਦੇ ਵੱਧ ਤੋਂ ਵੱਧ ਅਕਾਰ ਤੋਂ ਜ਼ਿਆਦਾ ਹੈ।'''
ਇਹ ਸਾਂਭੀ ਨਹੀਂ ਜਾ ਸਕਦੀ।",
'readonlywarning'                  => "'''ਖ਼ਬਰਦਾਰ: ਡੈਟਾਬੇਸ ਰੱਖ-ਰਖਾਵ ਦੇ ਕਰਕੇ ਤਾਲਾ-ਬੱਧ ਹੈ ਇਸ ਕਰਕੇ ਤੁਸੀਂ ਹੁਣੇ ਆਪਣੀ ਤਬਦੀਲੀ ਨਹੀਂ ਸਾਂਭ ਸਕਦੇ।'''
ਸ਼ਾਇਦ ਤੁਸੀਂ ਇਸ ਲਿਖਤ ਨੂੰ ਕੱਟ ਅਤੇ ਪੇਸਟ ਕਰ ਕੇ ਇਕ ਫ਼ਾਈਲ ਵਜੋਂ ਬਾਅਦ ਵਿਚ ਵਰਤਣ ਲਈ ਸਾਂਭਣਾ ਚਾਹੋਗੇ।

ਜਿਹੜੇ ਪ੍ਰਬੰਧਕ ਨੇ ਇਸਨੂੰ ਤਾਲਾ ਲਾਇਆ ਹੈ ਉਸਦਾ ਕਹਿਣਾ ਹੈ ਕਿ: $1",
'protectedpagewarning'             => "'''ਖ਼ਬਰਦਾਰ: ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਹੈ ਜਿਸ ਕਰਕੇ ਸਿਰਫ਼ ਐਡਮਨਿਸਟ੍ਰੇਟਰ ਹੱਕ ਵਾਲ਼ੇ ਮੈਂਬਰ ਹੀ ਇਸ ਨੂੰ ਸੋਧ ਸਕਦੇ ਹਨ।'''
ਚਿੱਠੇ ਦਾ ਨਵਾਂ ਦਾਖ਼ਲਾ ਹਵਾਲੇ ਲਈ ਹੇਠਾਂ ਦਿੱਤਾ ਗਿਆ ਹੈ:",
'semiprotectedpagewarning'         => "'''ਨੋਟ:''' ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਹੈ ਤਾਂ ਕਿ ਸਿਰਫ਼ ਰਜਿਸਟਰ ਹੋਏ ਮੈਂਬਰ ਹੀ ਇਸ ਨੂੰ ਸੋਧ ਸਕਣ।
ਚਿੱਠੇ ਵਿਚਲਾ ਨਵਾਂ ਦਾਖ਼ਲਾ ਹਵਾਲੇ ਲਈ ਹੇਠਾਂ ਦਿੱਤਾ ਗਿਆ ਹੈ:",
'titleprotectedwarning'            => "'''ਖ਼ਬਰਦਾਰ: ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਹੈ ਸੋ ਇਸਨੂੰ ਬਣਾਉਣ ਲਈ [[Special:ListGroupRights|ਖ਼ਾਸ ਹੱਕਾਂ]] ਦੀ ਲੋੜ ਹੈ।'''
ਚਿੱਠੇ ਦਾ ਨਵਾਂ ਦਾਖ਼ਲਾ ਹਵਾਲੇ ਲਈ ਹੇਠਾਂ ਦਿੱਤਾ ਗਿਆ ਹੈ:",
'templatesused'                    => 'ਇਸ ਪੰਨੇ ’ਤੇ {{PLURAL:$1|ਵਰਤਿਆ ਸਾਂਚਾ|ਵਰਤੇ ਸਾਂਚੇ}}:',
'templatesusedpreview'             => "{{PLURAL:$1|ਟੈਪਲੇਟ|ਟੈਪਲੇਟ}} ਇਹ ਝਲਕ 'ਚ ਵਰਤੇ ਜਾਂਦੇ ਹਨ:",
'templatesusedsection'             => 'ਇਹ ਭਾਗ ਵਿੱਚ {{PLURAL:$1|ਸਾਂਚਾ|ਸਾਂਚੇ}} ਵਰਤਿਆ ਜਾਂਦਾ ਹੈ:',
'template-protected'               => '(ਸੁਰੱਖਿਅਤ)',
'template-semiprotected'           => '(ਨੀਮ-ਸੁਰੱਖਿਅਤ)',
'hiddencategories'                 => 'ਇਹ ਸਫ਼ਾ {{PLURAL:$1|੧ ਲੁਕਵੀਂ ਸ਼੍ਰੇਣੀ|
$1 ਲੁਕਵੀਆਂ ਸ਼੍ਰੇਣੀਆਂ}} ਦਾ ਮੈਂਬਰ ਹੈ:',
'nocreatetitle'                    => 'ਸਫ਼ਾ ਬਣਾਉਣ ਦੀ ਹੱਦ ਹੈ',
'nocreatetext'                     => '{{SITENAME}} ਨੇ ਨਵੇਂ ਸਫ਼ੇ ਬਣਾਉਣ ਤੇ ਰੋਕ ਲਾਈ ਹੋਈ ਹੈ।
ਤੁਸੀਂ ਵਾਪਸ ਜਾ ਕੇ ਮੌਜੂਦਾ ਸਫ਼ੇ ਸੋਧ ਸਕਦੇ ਹੋ ਜਾਂ [[Special:UserLogin|ਲਾਗਇਨ ਜਾਂ ਖਾਤਾ ਬਣਾ]] ਸਕਦੇ ਹੋ।',
'nocreate-loggedin'                => 'ਤੁਹਾਨੂੰ ਨਵੇਂ ਸਫ਼ੇ ਬਣਾਉਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'sectioneditnotsupported-title'    => 'ਭਾਗ ਦੀ ਸੋਧ ਬੰਦ ਕੀਤੀ ਹੋਈ ਹੈ',
'sectioneditnotsupported-text'     => 'ਇਸ ਸਫ਼ੇ ਉੱਤੇ ਭਾਗ ਦੀ ਸੋਧ ਬੰਦ ਹੈ',
'permissionserrors'                => 'ਇਜਾਜ਼ਤ ਦੀਆਂ ਗ਼ਲਤੀਆਂ',
'permissionserrorstext'            => 'ਤੁਹਾਨੂੰ ਇੰਝ ਕਰਨ ਦੇ ਅਧਿਕਾਰ ਨਹੀਂ ਹਨ। ਹੇਠ ਦਿੱਤੇ {{PLURAL:$1|ਕਾਰਨ|ਕਾਰਨ}} ਨੇ:',
'permissionserrorstext-withaction' => 'ਅੱਗੇ ਦਿੱਤੇ {{PLURAL:$1|ਕਾਰਨ|ਕਾਰਨਾਂ}} ਕਰਕੇ ਤੁਹਾਡੇ ਕੋਲ $2 ਲਈ ਹੱਕ ਨਹੀਂ ਹਨ:',
'recreate-moveddeleted-warn'       => "'''ਖ਼ਬਰਦਾਰ:ਤੁਸੀਂ ਅਜਿਹਾ ਸਫ਼ਾ ਬਣਾ ਰਹੇ ਹੋ ਜੋ ਪਹਿਲਾਂ ਮਿਟਾਇਆ ਜਾ ਚੁੱਕਾ ਹੈ।'''
ਵਿਚਾਰ ਕਰੋ ਕਿ ਕੀ ਇਸ ਸਫ਼ੇ ਨੂੰ ਸੋਧਣਾ ਠੀਕ ਹੈ।
ਇਸਨੂੰ ਮਿਟਾਉਣ ਜਾਂ ਸਿਰਲੇਖ ਬਦਲੀ ਦਾ ਚਿੱਠਾ ਸੌਖ ਲਈ ਇੱਥੇ ਦਿੱਤਾ ਗਿਆ ਹੈ।",
'moveddeleted-notice'              => 'ਇਹ ਸਫ਼ਾ ਮਿਟਾ ਦਿੱਤਾ ਗਿਆ ਹੈ।
ਇਸਦੇ ਮਿਟਾਉਣ ਜਾਂ ਸਿਰਲੇਖ ਬਦਲੀ ਦਾ ਚਿੱਠਾ ਹਵਾਲੇ ਲਈ ਹੇਠ ਦਿੱਤਾ ਗਿਆ ਹੈ।',
'log-fulllog'                      => 'ਪੂਰਾ ਇੰਦਰਾਜ ਵਿਖਾਓ',
'edit-hook-aborted'                => 'ਹੁੱਕ ਨੇ ਮਿਟਾਉਣਾ ਨਾਕਾਮ ਕੀਤਾ।
ਇਹਨੇ ਕੋਈ ਕਾਰਨ ਨਹੀਂ ਦੱਸਿਆ।',
'edit-gone-missing'                => 'ਇਹ ਸਫ਼ਾ ਅੱਪਡੇਟ ਨਹੀਂ ਹੋ ਸਕਿਆ।
ਜਾਪਦਾ ਹੈ ਕਿ ਇਹ ਹਟਾਇਆ ਜਾ ਚੁੱਕਾ ਹੈ।',
'edit-conflict'                    => 'ਸੋਧ ਤਕਰਾਰ',
'edit-no-change'                   => 'ਤੁਹਾਡੀ ਸੋਧ ਨਜ਼ਰਅੰਦਾਜ਼ ਕਰ ਦਿੱਤੀ ਗਈ ਹੈ ਕਿਉਂਕਿ ਲਿਖਤ ਵਿਚ ਕੋਈ ਤਬਦੀਲੀ ਨਹੀਂ ਕੀਤੀ ਗਈ।',
'edit-already-exists'              => 'ਨਵਾਂ ਸਫ਼ਾ ਨਹੀਂ ਬਣਾਇਆ ਜਾ ਸਕਿਆ।
ਇਹ ਪਹਿਲਾਂ ਹੀ ਮੌਜੂਦ ਹੈ।',

# Parser/template warnings
'post-expand-template-inclusion-warning'  => "'''ਖ਼ਬਰਦਾਰ:''' ਫਰਮੇ ਦਾ ਅਕਾਰ ਬਹੁਤ ਵੱਡਾ ਹੈ। ਕੁਝ ਫਰਮੇ ਸ਼ਾਮਲ ਨਹੀਂ ਹੋਣਗੇ।",
'post-expand-template-inclusion-category' => 'ਉਹ ਸਫ਼ੇ ਜਿੱਥੇ ਫਰਮੇ ਸ਼ਾਮਲ ਕਰਨ ਦਾ ਅਕਾਰ ਹੱਦੋਂ ਵੱਧ ਗਿਆ ਹੈ',
'post-expand-template-argument-warning'   => "'''ਚੇਤਾਵਨੀ:'''
ਇਸ ਪੰਨੇ ਤੇ ਘੱਟੋ ਘੱਟ ਇੱਕ ਐਸੀ ਸਾਂਚਾ ਬਹਿਸ ਹੈ ਜਿਸ ਦਾ ਅਕਾਰ ਬਹੁਤ ਵੱਡਾ ਹੈ। ਅਜਿਹੀਆਂ ਬਹਿਸਾਂ ਨੂੰ ਛੱਡ ਦਿੱਤਾ ਗਿਆ ਹੈ।",
'post-expand-template-argument-category'  => 'ਐਸੇ ਸਫ਼ੇ ਜਿਨ੍ਹਾਂ ਵਿੱਚ ਫਰਮੇ ਦੇ ਆਰਗੂਮੈਂਟ ਛੁੱਟ ਗਏ ਹਨ।',
'parser-template-loop-warning'            => 'ਫਰਮੇ ਦਾ ਲੂਪ ਲੱਭਿਆ: [[$1]]',

# "Undo" feature
'undo-success' => 'ਇਹ ਸੋਧ ਨਕਾਰੀ ਜਾ ਸਕਦੀ ਹੈ।
ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਇਹ ਤਸਦੀਕ ਕਰਨ ਲਈ ਹੇਠਲੀ ਤੁਲਨਾ ਜਾਂਚੋ ਕਿ ਇਹ ਓਹੀ ਹੈ ਜੋ ਤੁਸੀਂ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ ਅਤੇ ਫਿਰ ਸੋਧ ਨਕਾਰਨ ਲਈ ਤਬਦੀਲੀਆਂ ਸਾਂਭ ਦਿਓ।',
'undo-norev'   => 'ਸੋਧ ਨਕਾਰੀ ਨਹੀਂ ਜਾ ਸਕਦੀ ਕਿਉਂਕਿ ਇਹ ਮੌਜੂਦ ਨਹੀਂ ਜਾਂ ਮਿਟਾ ਦਿੱਤੀ ਗਈ ਹੈ।',
'undo-summary' => '[[Special:Contributions/$2|$2]] ([[User talk:$2|ਗੱਲ-ਬਾਤ]]) ਦੀ ਸੋਧ $1 ਨਕਾਰੀ',

# Account creation failure
'cantcreateaccounttitle' => 'ਖਾਤਾ ਬਣਾਇਆ ਨਹੀਂ ਜਾ ਸਕਦਾ',
'cantcreateaccount-text' => "[[User:$3|$3]] ਨੇ ਇਸ IP ਪਤੇ ('''$1''') ਤੋਂ ਖਾਤਾ ਬਣਾਉਣ ਤੇ ਪਾਬੰਦੀ ਲਾਈ ਹੈ।

$3 ਨੇ ਕਾਰਨ ਇਹ ਦੱਸਿਆ ਹੈ, ''$2''",

# History pages
'viewpagelogs'           => 'ਇਹ ਸਫ਼ੇ ਲਈ ਇੰਦਰਾਜ ਵੇਖੋ',
'nohistory'              => 'ਇਸ ਸਫ਼ੇ ਲਈ ਕੋਈ ਸੋਧ ਅਤੀਤ ਨਹੀਂ ਹੈ।',
'currentrev'             => 'ਮੌਜੂਦਾ ਰੀਵਿਜ਼ਨ',
'currentrev-asof'        => '$1 ਮੁਤਾਬਕ ਸਭ ਤੋਂ ਨਵਾਂ ਰੀਵਿਜਨ',
'revisionasof'           => '$1 ਦਾ ਰੀਵਿਜਨ',
'revision-info'          => '$2 ਦਾ ਬਣਾਇਆ $1 ਦਾ ਰੀਵਿਜਨ',
'previousrevision'       => '←ਪੁਰਾਣਾ ਰੀਵਿਜਨ',
'nextrevision'           => 'ਨਵਾਂ ਰੀਵਿਜਨ →',
'currentrevisionlink'    => 'ਸਭ ਤੋ ਨਵਾਂ ਰੀਵਿਜਨ',
'cur'                    => 'ਮੌਜੂਦਾ',
'next'                   => 'ਅੱਗੇ',
'last'                   => 'ਪਿਛਲਾ',
'page_first'             => 'ਪਹਿਲਾਂ',
'page_last'              => 'ਆਖ਼ਰੀ',
'histlegend'             => "ਫ਼ਰਕ ਵੇਖੋ:
ਮੁਕਾਬਲਾ ਕਰਨ ਲਈ ਰੀਵਿਜਨਾਂ ਦੇ ਰੇਡੀਓ ਬਟਨਾਂ ਵਿੱਚ ਨਿਸ਼ਾਨ ਲਾਓ ਅਤੇ \"ਜਾਓ\" ਜਾਂ ਸਭ ਤੋਂ ਥੱਲੇ ਵਾਲੇ ਬਟਨ ਤੇ ਕਲਿੱਕ ਕਰੋ। <br />
ਲੈਜਅੰਡ:
'''({{int:cur}})''' = ਨਵੇਂ ਰੀਵਿਜਨ ਨਾਲੋਂ ਫ਼ਰਕ, '''({{int:last}})''' = ਪਿਛਲੇ ਰੀਵਿਜਨ ਨਾਲੋਂ ਫ਼ਰਕ, '''({{int:minoreditletter}})''' = ਛੋਟੀ ਤਬਦੀਲੀ।",
'history-fieldset-title' => 'ਬਰਾਊਜ਼ਰ ਅਤੀਤ',
'history-show-deleted'   => 'ਸਿਰਫ਼ ਮਿਟਾਏ ਗਏ',
'histfirst'              => 'ਸਭ ਤੋਂ ਪੁਰਾਣੇ',
'histlast'               => 'ਸਭ ਤੋਂ ਨਵੇਂ',
'historysize'            => '({{PLURAL:$1|1 ਬਾਈਟ|$1 ਬਾਈਟ}})',
'historyempty'           => '(ਖ਼ਾਲੀ)',

# Revision feed
'history-feed-title'          => 'ਰੀਵਿਜ਼ਨ ਦਾ ਅਤੀਤ',
'history-feed-description'    => 'ਵਿਕੀ ’ਤੇ ਇਸ ਸਫ਼ੇ ਦਾ ਰੀਵਿਜ਼ਨ ਅਤੀਤ',
'history-feed-item-nocomment' => '$1 ਤੋਂ $2 ’ਤੇ',
'history-feed-empty'          => 'ਦਰਖ਼ਾਸਤਸ਼ੁਦਾ ਸਫ਼ਾ ਮੌਜੂਦ ਨਹੀਂ ਹੈ।
ਸ਼ਾਇਦ ਇਸਨੂੰ ਵਿਕੀ ਤੋਂ ਮਿਟਾ ਦਿੱਤਾ ਗਿਆ ਹੈ ਜਾਂ ਨਾਮ ਬਦਲ ਦਿੱਤਾ ਗਿਆ ਹੈ।
ਵਿਕੀ ਦੇ ਨਵੇਂ ਮੁਨਾਸਿਬ ਸਫ਼ਿਆਂ ਵਿਚ [[Special:Search|ਲੱਭਣ]] ਦੀ ਕੋਸ਼ਿਸ਼ ਕਰੋ।',

# Revision deletion
'rev-deleted-comment'         => '(ਸੋਧ ਸਾਰ ਹਟਾਇਆ)',
'rev-deleted-user'            => '(ਵਰਤੋਂਕਾਰ ਨਾਂ ਹਟਾਇਆ)',
'rev-deleted-event'           => '(ਲਾਗ ਕਾਰਵਾਈ ਹਟਾਈ ਗਈ)',
'rev-deleted-user-contribs'   => '[ਮੈਂਬਰ-ਨਾਂ ਜਾਂ IP ਪਤਾ ਹਟਾਇਆ - ਸੋਧ ਯੋਗਦਾਨਾਂ ਵਿਚੋਂ ਓਹਲੇ ਕੀਤੀ]',
'rev-deleted-text-permission' => "ਸਫ਼ੇ ਦੀ ਇਹ ਰੀਵਿਜ਼ਨ '''ਮਿਟਾਈ''' ਜਾ ਚੁੱਕੀ ਹੈ।
ਤਫ਼ਸੀਲ [{{fullurl:{{#Special:Log}}/delete|
page={{FULLPAGENAMEE}}}} ਮਿਟਾਉਣ ਦੇ ਚਿੱਠੇ] ਵਿਚ ਵੇਖੀ ਜਾ ਸਕਦੀ ਹੈ।",
'rev-deleted-text-unhide'     => "ਸਫ਼ੇ ਦੀ ਇਹ ਰੀਵਿਜ਼ਨ '''ਮਿਟਾਈ''' ਜਾ ਚੁੱਕੀ ਹੈ।
ਤਫ਼ਸੀਲ [{{fullurl:{{#Special:Log}}/delete|
page={{FULLPAGENAMEE}}}} ਮਿਟਾਉਣ ਦੇ ਚਿੱਠੇ] ਵਿਚ ਵੇਖੀ ਜਾ ਸਕਦੀ ਹੈ।
ਜੇ ਤੁਸੀਂ ਅੱਗੇ ਵਧਣਾ ਚਾਹੋ ਤਾਂ ਹਾਲੇ ਵੀ [$1 ਇਹ ਰੀਵਿਜ਼ਨ ਵੇਖ] ਸਕਦੇ ਹੋ।",
'rev-deleted-no-diff'         => "ਤੁਸੀਂ ਇਹ ਫ਼ਰਕ ਨਹੀਂ ਵੇਖ ਸਕਦੇ ਕਿਉਂਕਿ ਇਹਨਾਂ ਵਿੱਚੋਂ ਇੱਕ ਰੀਵਿਜ਼ਨ '''ਮਿਟਾਈ''' ਜਾ ਚੁੱਕੀ ਹੈ।
ਤਫ਼ਸੀਲ [{{fullurl:{{#Special:Log}}/delete|
page={{FULLPAGENAMEE}}}} ਮਿਟਾਉਣ ਦੇ ਚਿੱਠੇ] ਵਿਚ ਵੇਖੀ ਜਾ ਸਕਦੀ ਹੈ।",
'rev-suppressed-no-diff'      => "ਤੁਸੀਂ ਇਹ ਫ਼ਰਕ ਨਹੀਂ ਵੇਖ ਸਕਦੇ ਕਿਉਂਕਿ ਇਹਨਾਂ ਵਿੱਚੋਂ ਇੱਕ ਰੀਵਿਜ਼ਨ '''ਮਿਟਾਈ''' ਜਾ ਚੁੱਕੀ ਹੈ।",
'rev-deleted-unhide-diff'     => "ਇਸ ਫ਼ਰਕ ਵਿੱਚੋਂ ਇੱਕ ਰੀਵਿਜ਼ਨ '''ਮਿਟਾਈ''' ਜਾ ਚੁੱਕੀ ਹੈ।
ਤਫ਼ਸੀਲ [{{fullurl:{{#Special:Log}}/delete|
page={{FULLPAGENAMEE}}}} ਮਿਟਾਉਣ ਦੇ ਚਿੱਠੇ] ਵਿਚ ਵੇਖੀ ਜਾ ਸਕਦੀ ਹੈ।
ਜੇ ਤੁਸੀਂ ਅੱਗੇ ਵਧਣਾ ਚਾਹੋ ਤਾਂ ਹਾਲੇ ਵੀ [$1 ਇਹ ਰੀਵਿਜ਼ਨ ਵੇਖ] ਸਕਦੇ ਹੋ।",
'rev-suppressed-diff-view'    => "ਇਸ ਫ਼ਰਕ ਵਿੱਚੋਂ ਇੱਕ ਰੀਵਿਜ਼ਨ '''ਜ਼ਬਤ''' ਕੀਤੀ ਜਾ ਚੁੱਕੀ ਹੈ।
ਤਫ਼ਸੀਲ [{{fullurl:{{#Special:Log}}/delete|
page={{FULLPAGENAMEE}}}} ਜ਼ਬਤੀ ਦੇ ਚਿੱਠੇ] ਵਿਚ ਵੇਖੀ ਜਾ ਸਕਦੀ ਹੈ।",
'rev-delundel'                => 'ਵਿਖਾਓ/ਲੁਕਾਓ',
'rev-showdeleted'             => 'ਵਿਖਾਓ',
'revisiondelete'              => 'ਰੀਵਿਜ਼ਨ ਹਟਾਓ/ਹਟਾਇਆ-ਵਾਪਸ',
'revdelete-nooldid-title'     => 'ਕੋਈ ਨਿਸ਼ਾਨੇ ਵਾਲੀ ਰੀਵਿਜ਼ਨ ਨਹੀਂ',
'revdelete-nologtype-title'   => 'ਚਿੱਠੇ ਦੀ ਕਿਸਮ ਨਹੀਂ ਦੱਸੀ ਗਈ',
'revdelete-nologtype-text'    => 'ਇਹ ਕਾਰਵਾਈ ਕਰਨ ਲਈ ਤੁਸੀਂ ਚਿੱਠੇ ਦੀ ਕਿਸਮ ਨਹੀਂ ਦੱਸੀ।',
'revdelete-nologid-title'     => 'ਗ਼ਲਤ ਦਾਖ਼ਲਾ ਇੰਦਰਾਜ',
'revdelete-no-file'           => 'ਦਿੱਤੀ ਗਈ ਫਾਇਲ ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',
'revdelete-show-file-confirm' => 'ਤੁਹਾਨੂੰ ਯਕੀਨ ਹੈ ਤੁਸੀਂ $2 ਨੂੰ $3 ਦੀ ਫ਼ਾਈਲ "<nowiki>$1</nowiki>" ਦੀ ਮਿਟਾਈ ਗਈ ਰੀਵਿਜ਼ਨ ਵੇਖਣਾ ਚਾਹੁੰਦੇ ਹੋ?',
'revdelete-show-file-submit'  => 'ਹਾਂ',
'revdelete-selected'          => "'''[[:$1]] {{PLURAL:$2|ਦੀ ਚੁਣੀ ਹੋਈ ਰੀਵਿਜ਼ਨ|ਦੀਆਂ ਚੁਣੀਆਂ ਹੋਈਆਂ ਰੀਵਿਜ਼ਨਾਂ}}:'''",
'revdelete-legend'            => 'ਵੇਖਣ ਪਾਬੰਦੀਆਂ ਸੈੱਟ ਕਰੋ:',
'revdelete-hide-text'         => 'ਰੀਵਿਜ਼ਨ ਲਿਖਤ ਓਹਲੇ',
'revdelete-hide-image'        => 'ਫ਼ਾਈਲ ਸਮੱਗਰੀ ਓਹਲੇ',
'revdelete-hide-name'         => 'ਕਾਰਵਾਈ ਅਤੇ ਟਾਰਗੇਟ ਓਹਲੇ',
'revdelete-hide-comment'      => 'ਸੋਧ ਸਾਰ ਲੁਕਾਓ',
'revdelete-hide-user'         => 'ਸੋਧਣ ਵਾਲ਼ੇ ਦਾ ਮੈਂਬਰ-ਨਾਂ/IP ਪਤਾ ਲੁਕਾਓ',
'revdelete-hide-restricted'   => 'ਪ੍ਰਸ਼ਾਸਕਾਂ ਅਤੇ ਹੋਰਾਂ ਦੀ ਸਮੱਗਰੀ ਲੁਕਾਓ',
'revdelete-radio-same'        => '(ਨਾ ਬਦਲੋ)',
'revdelete-radio-set'         => 'ਲੁਕਵਾਂ',
'revdelete-radio-unset'       => 'ਪਰਗਟ',
'revdelete-suppress'          => 'ਪ੍ਰਸ਼ਾਸਕਾਂ ਅਤੇ ਹੋਰਾਂ ਦੀ ਸਮੱਗਰੀ ਲੁਕਾਓ',
'revdelete-unsuppress'        => 'ਮੁੜ ਬਹਾਲ ਕੀਤੀਆਂ ਰੀਵਿਜ਼ਨਾਂ ਤੋਂ ਰੋਕਾਂ ਹਟਾਓ',
'revdelete-log'               => 'ਕਾਰਨ:',
'revdelete-submit'            => 'ਚੁਣੇ ਹੋਏ {{PLURAL:$1|ਸੁਧਾਰ|ਸੁਧਾਰਾਂ}} ਉੱਤੇ ਲਾਗੂ ਕਰੋ',
'logdelete-success'           => "'''ਚਿੱਠੇ ਦੀ ਦਿੱਖ ਕਾਮਯਾਬੀ ਨਾਲ਼ ਸੈੱਟ ਕੀਤੀ।'''",
'logdelete-failure'           => "'''ਚਿੱਠੇ ਦੀ ਦਿੱਖ ਸੈੱਟ ਨਹੀਂ ਕੀਤੀ ਜਾ ਸਕਦੀ:''' $1",
'revdel-restore'              => 'ਦਿੱਖ ਬਦਲੋ',
'revdel-restore-deleted'      => 'ਹਟਾਏ ਗਏ ਰੀਵੀਜਨ',
'revdel-restore-visible'      => 'ਦਿਸਣਯੋਗ ਰੀਵੀਜਨ',
'pagehist'                    => 'ਸਫ਼ਾ ਅਤੀਤ',
'deletedhist'                 => 'ਹਟਾਇਆ ਗਿਆ ਅਤੀਤ',
'revdelete-hide-current'      => 'ਤਾਰੀਖ &2, $1 ਦੀ ਚੀਜ਼ ਲੁਕਾਉਣ ਵਿਚ ਗਲਤੀ: ਇਹ ਮੌਜੂਦਾ ਰੀਵਿਜ਼ਨ ਹੈ।
ਇਹ ਲੁਕਾਈ ਨਹੀਂ ਜਾ ਸਕਦੀ।',
'revdelete-otherreason'       => 'ਹੋਰ/ਵਾਧੂ ਕਾਰਨ:',
'revdelete-reasonotherlist'   => 'ਹੋਰ ਕਾਰਨ',
'revdelete-edit-reasonlist'   => 'ਮਿਟਾਏ ਜਾਣ ਦੇ ਕਾਰਨ ਸੋਧੋ',
'revdelete-offender'          => 'ਰੀਵਿਜ਼ਨ ਲੇਖਕ:',

# Suppression log
'suppressionlog' => 'ਲੁਕਾਅ ਇੰਦਰਾਜ',

# History merging
'mergehistory'                     => 'ਸਫ਼ਿਆਂ ਦੇ ਅਤੀਤ ਰਲ਼ਾਓ',
'mergehistory-box'                 => 'ਦੋ ਸਫ਼ਿਆਂ ਦੇ ਸੁਧਾਰ ਮਿਲਾਓ:',
'mergehistory-from'                => 'ਸਰੋਤ ਸਫ਼ਾ:',
'mergehistory-into'                => 'ਮੰਜਲੀ ਸਫ਼ਾ:',
'mergehistory-list'                => 'ਰਲ਼ਾਉਣਯੋਗ ਸੋਧ ਅਤੀਤ',
'mergehistory-go'                  => 'ਰਲ਼ਾਉਣਯੋਗ ਸੋਧਾਂ ਵਖਾਓ',
'mergehistory-submit'              => 'ਰੀਵਿਜ਼ਨਾਂ ਰਲ਼ਾਓ',
'mergehistory-empty'               => 'ਕੋਈ ਰੀਵਿਜ਼ਨ ਰਲ਼ਾਈ ਨਹੀ ਜਾ ਸਕਦੀ।',
'mergehistory-success'             => '[[:$1]] {{PLURAL:|ਦੀ|ਦੀਆਂ}} $3 {{PLURAL:$3|ਰੀਵਿਜ਼ਨ|ਰੀਵਿਜ਼ਨਾਂ}} ਕਾਮਯਾਬੀ ਨਾਲ਼ [[:$2]] ਵਿਚ {{PLURAL:$3|ਰਲ਼ਾਈ|ਰਲ਼ਾਈਆਂ}}।',
'mergehistory-no-source'           => 'ਸਰੋਤ ਸਫ਼ਾ $1 ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',
'mergehistory-invalid-source'      => 'ਸਰੋਤ ਸਫ਼ਾ ਇੱਕ ਸਹੀ ਸਿਰਲੇਖ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
'mergehistory-invalid-destination' => 'ਮੰਜ਼ਿਲ ਸਫ਼ਾ ਇੱਕ ਸਹੀ ਸਿਰਲੇਖ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
'mergehistory-autocomment'         => '[[:$1]] ਨੂੰ [[:$2]] ਵਿੱਚ ਰਲ਼ਾਇਆ',
'mergehistory-comment'             => '[[:$1]] ਨੂੰ [[:$2]] ਵਿੱਚ ਰਲ਼ਾਇਆ: $3',
'mergehistory-same-destination'    => 'ਸਰੋਤ ਸਫ਼ਾ ਅਤੇ ਮੰਜ਼ਿਲ ਸਫ਼ਾ ਇੱਕੋ ਜਿਹੇ ਨਹੀਂ ਹੋ ਸਕਦੇ',
'mergehistory-reason'              => 'ਕਾਰਨ:',

# Merge log
'mergelog'           => 'ਰਲ਼ਾਉਣ ਦਾ ਚਿੱਠਾ',
'pagemerge-logentry' => '[[$1]] ਨੂੰ [[$2]] ਵਿੱਚ ਰਲ਼ਾਇਆ ($3 ਤੱਕ ਦੀਆ ਰੀਵਿਜ਼ਨਾਂ)',
'revertmerge'        => 'ਅਨ-ਮਰਜ',
'mergelogpagetext'   => 'ਹੇਠਾਂ ਇੱਕ ਸਫ਼ੇ ਦੇ ਅਤੀਤ ਨੂੰ ਦੂਜੇ ਦੇ ਅਤੀਤ ਵਿਚ ਰਲ਼ਾਉਣ ਦੀ ਸਭ ਤੋਂ ਤਾਜ਼ਾ ਲਿਸਟ ਹੈ।',

# Diffs
'history-title'            => '"$1" ਦੇ ਰੀਵਿਜਨ ਦਾ ਅਤੀਤ',
'difference'               => '(ਰੀਵਿਜ਼ਨ ਵਿੱਚ ਅੰਤਰ)',
'difference-multipage'     => '(ਦੋ ਸਫ਼ਿਆਂ ਵਿਚਕਾਰ ਫ਼ਰਕ)',
'lineno'                   => 'ਲਾਈਨ $1:',
'compareselectedversions'  => 'ਚੁਣੇ ਵਰਜਨਾਂ ਦੀ ਤੁਲਨਾ',
'showhideselectedversions' => 'ਚੁਣੇ ਰੀਵਿਜ਼ਨ ਵਖਾਓ/ਲੁਕਾਓ',
'editundo'                 => 'ਰੱਦ ਕਰੋ',
'diff-multi'               => '({{PLURAL:$2|ਵਰਤੋਂਕਾਰ ਦੀ|$2 ਵਰਤੋਂਕਾਰਾਂ ਦੀਆਂ}} {{PLURAL:$1|ਵਿਚਕਾਰਲੀ ਰੀਵਿਜਨ ਨਹੀਂ ਦਿਖਾਈ ਜਾ ਰਹੀ|ਵਿਚਕਾਰਲੀਆਂ $1 ਰੀਵਿਜਨਾਂ ਨਹੀਂ ਦਿਖਾਈਆਂ ਜਾ ਰਹੀਆਂ}})',

# Search results
'searchresults'                    => 'ਖੋਜ ਨਤੀਜੇ',
'searchresults-title'              => '"$1" ਲਈ ਖੋਜ ਨਤੀਜੇ',
'searchresulttext'                 => '{{SITENAME}} ਖੋਜ ਬਾਰੇ ਹੋਰ ਜਾਣਕਾਰੀ ਲਵੋ, ਵੇਖੋ [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle'                   => 'ਤੁਸੀਂ \'\'\'[[:$1]]\'\'\' ਲਈ ਖੋਜ ਕੀਤੀ ([[Special:Prefixindex/$1|"$1" ਨਾਲ ਸ਼ੁਰੂ ਹੁੰਦੇ ਸਭ ਸਫ਼ੇ]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|"$1" ਨਾਲ ਲਿੰਕ ਹੋਏ ਸਭ ਸਫ਼ੇ]])',
'searchsubtitleinvalid'            => "ਤੁਸੀਂ'''$1''' ਲਈ ਖੋਜ ਕੀਤੀ।",
'titlematches'                     => 'ਆਰਟੀਕਲ ਟੈਕਸਟ ਮਿਲਦਾ',
'notitlematches'                   => 'ਕੋਈ ਪੇਜ ਟਾਇਟਲ ਨਹੀਂ ਮਿਲਦਾ',
'textmatches'                      => 'ਸਫ਼ੇ ਦੀ ਲਿਖਤ ਮੇਲ ਖਾਂਦੀ ਹੈ',
'notextmatches'                    => 'ਕਿਸੇ ਸਫ਼ੇ ਦੀ ਲਿਖਤ ਮੇਲ ਨਹੀਂ ਖਾਂਦੀ',
'prevn'                            => 'ਪਿੱਛੇ {{PLURAL:$1|$1}}',
'nextn'                            => 'ਅੱਗੇ {{PLURAL:$1|$1}}',
'prevn-title'                      => 'ਪਿਛਲੇ $1 {{PLURAL:$1|ਨਤੀਜਾ|ਨਤੀਜੇ}}',
'nextn-title'                      => '{{PLURAL:$1|ਅਗਲਾ|ਅਗਲੇ}} $1 {{PLURAL:$1|ਨਤੀਜਾ|ਨਤੀਜੇ}}',
'shown-title'                      => 'ਪ੍ਰਤੀ ਸਫ਼ਾ $1 {{PLURAL:$1|ਨਤੀਜਾ|ਨਤੀਜੇ}} ਵਿਖਾਓ',
'viewprevnext'                     => 'ਵੇਖੋ ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend'                => 'ਖੋਜ-ਸਬੰਧੀ ਚੋਣਾਂ',
'searchmenu-exists'                => "'''ਇਸ ਵਿਕੀ ’ਤੇ \"[[:\$1]]\" ਨਾਮ ਦਾ ਸਫਾ ਹੈ।'''",
'searchmenu-new'                   => "'''ਇਸ ਵਿਕੀ ’ਤੇ \"[[:\$1]]\" ਸਫ਼ਾ ਬਣਾਓ!'''",
'searchhelp-url'                   => 'Help:ਸਮੱਗਰੀ',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|ਇਸ ਅਗੇਤਰ ਵਾਲ਼ੇ ਸਫ਼ੇ ਵੇਖੋ]]',
'searchprofile-articles'           => 'ਸਮੱਗਰੀ ਸਫ਼ੇ',
'searchprofile-project'            => 'ਮਦਦ ਤੇ ਪਰੋਜੈਕਟ ਸਫ਼ੇ',
'searchprofile-images'             => 'ਮਲਟੀਮੀਡੀਆ',
'searchprofile-everything'         => 'ਸਭ ਕੁਝ',
'searchprofile-advanced'           => 'ਉੱਨਤ',
'searchprofile-articles-tooltip'   => '$1 ਵਿੱਚ ਖੋਜ',
'searchprofile-project-tooltip'    => '$1 ਵਿੱਚ ਖੋਜ',
'searchprofile-images-tooltip'     => 'ਫ਼ਾਈਲਾਂ ਖੋਜੋ',
'searchprofile-everything-tooltip' => 'ਸਾਰੀ ਸਮੱਗਰੀ ਵਿੱਚੋਂ ਖੋਜੋ (ਗੱਲ-ਬਾਤ ਸਫ਼ਿਆਂ ਸਮੇਤ)',
'searchprofile-advanced-tooltip'   => 'ਆਪਣੀਆਂ ਬਣਾਈਆਂ ਨਾਂ-ਥਾਂਵਾਂ ਵਿੱਚ ਖੋਜੋ',
'search-result-size'               => '$1 ({{PLURAL:$2|1 ਸ਼ਬਦ|$2 ਸ਼ਬਦ}})',
'search-result-category-size'      => '{{PLURAL:$1|1 ਮੈਂਬਰ|$1 ਮੈਂਬਰ}} ({{PLURAL:$2|1 ਉਪਸ਼੍ਰੇਣੀ|$2 ਉਪਸ਼੍ਰੇਣੀਆਂ}}, {{PLURAL:$3|1 ਫ਼ਾਈਲ|$3 ਫ਼ਾਈਲਾਂ}})',
'search-result-score'              => 'ਸਹੀ: $1%',
'search-redirect'                  => '($1 ਰੀਡਿਰੈਕਟ)',
'search-section'                   => '(ਹਿੱਸਾ $1)',
'search-suggest'                   => 'ਕੀ ਤੁਹਾਡਾ ਮਤਲਬ ਸੀ: $1',
'search-interwiki-caption'         => 'ਸਾਥੀ ਪ੍ਰੋਜੈਕਟ',
'search-interwiki-default'         => '$1 ਨਤੀਜੇ:',
'search-interwiki-more'            => '(ਹੋਰ)',
'search-mwsuggest-enabled'         => 'ਸੁਝਾਆਵਾਂ ਨਾਲ',
'search-mwsuggest-disabled'        => 'ਕੋਈ ਸੁਝਾਅ ਨਹੀਂ',
'search-relatedarticle'            => 'ਸਬੰਧਤ',
'mwsuggest-disable'                => 'ਖੋਜ ਦੀਆਂ ਸਲਾਹਾਂ ਬੰਦ ਕਰੋ',
'searcheverything-enable'          => 'ਸਾਰੇ ਥਾਂ-ਨਾਂਵਾਂ ਵਿਚ ਖੋਜੋ',
'searchrelated'                    => 'ਸਬੰਧਤ',
'searchall'                        => 'ਸਭ',
'showingresults'                   => "ਹੇਠਾਂ #'''$2''' ਨਾਲ਼ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੇ {{PLURAL:
$1|'''1''' ਨਤੀਜਾ|'''$1''' ਤੱਕ ਨਤੀਜੇ}} ਵਖਾਓ।",
'showingresultsnum'                => "ਹੇਠਾਂ #'''$2''' ਨਾਲ਼ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੇ {{PLURAL:
$3|'''1''' ਨਤੀਜਾ|'''$3''' ਨਤੀਜੇ}} ਵਖਾਓ।",
'showingresultsheader'             => "'''$4''' ਵਾਸਤੇ {{PLURAL:$5|'''$3''' ਵਿੱਚੋਂ '''$1''' ਨਤੀਜੇ|'''$3''' ਵਿੱਚੋਂ '''$1 - $2''' ਨਤੀਜੇ}}",
'search-nonefound'                 => 'ਤੁਹਾਡੀ ਖੋਜ ਨਾਲ ਮੇਲ ਖਾਂਦੇ ਕੋਈ ਨਤੀਜੇ ਨਹੀਂ ਮਿਲੇ।',
'powersearch'                      => 'ਤਕਨੀਕੀ ਖੋਜ',
'powersearch-legend'               => 'ਤਕਨੀਕੀ ਖੋਜ',
'powersearch-ns'                   => 'ਨੇਮ-ਸਪੇਸ ਵਿੱਚ ਖੋਜ:',
'powersearch-redir'                => 'ਰੀ-ਡਿਰੈਕਟ ਸੂਚੀਬੱਧ ਕਰੋ',
'powersearch-field'                => 'ਇਸ ਲਈ ਖੋਜ',
'powersearch-togglelabel'          => 'ਜਾਂਚੋ:',
'powersearch-toggleall'            => 'ਸਭ',
'powersearch-togglenone'           => 'ਕੋਈ ਨਹੀਂ',
'search-external'                  => 'ਬਾਹਰੀ ਖੋਜ',

# Quickbar
'qbsettings'                => 'ਤੁਰੰਤ ਬਾਰ',
'qbsettings-none'           => 'ਕੋਈ ਨਹੀਂ',
'qbsettings-fixedleft'      => 'ਖੱਬੇ ਪਾਸੇ ਮੜ੍ਹਿਆ',
'qbsettings-fixedright'     => 'ਸੱਜੇ ਪਾਸੇ ਮੜ੍ਹਿਆ',
'qbsettings-floatingleft'   => 'ਖੱਬੇ ਪਾਸੇ ਤੈਰਦਾ',
'qbsettings-floatingright'  => 'ਸੱਜੇ ਪਾਸੇ ਤੈਰਦਾ',
'qbsettings-directionality' => 'ਤੁਹਾਡੀ ਭਾਸ਼ਾ ਦੀ ਲਿਪੀ ਦਿਸ਼ਾ ਮੁਤਾਬਕ ਮੜ੍ਹਿਆ ਗਿਆ',

# Preferences page
'preferences'                   => 'ਪਸੰਦਾਂ',
'mypreferences'                 => 'ਪਸੰਦਾਂ',
'prefs-edits'                   => 'ਸੋਧਾਂ ਦੀ ਗਿਣਤੀ:',
'prefsnologin'                  => 'ਦਾਖ਼ਲ ਨਹੀਂ ਹੋ',
'prefsnologintext'              => 'ਵਰਤੋਂਕਾਰ ਪਸੰਦਾਂ ਸੈੱਟ ਕਰਨ ਲਈ ਤੁਹਾਨੂੰ <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} ਲਾਗਇਨ]</span> ਕਰਨਾ ਪਵੇਗਾ।',
'changepassword'                => 'ਪਾਸਵਰਡ ਬਦਲੋ',
'prefs-skin'                    => 'ਸਕਿਨ',
'skin-preview'                  => 'ਝਲਕ',
'datedefault'                   => 'ਕੋਈ ਪਸੰਦ ਨਹੀਂ',
'prefs-beta'                    => 'ਬੀਟਾ ਫੀਚਰ',
'prefs-datetime'                => 'ਮਿਤੀ ਅਤੇ ਸਮਾਂ',
'prefs-labs'                    => 'ਲੈਬ ਫੀਚਰ',
'prefs-personal'                => 'ਯੂਜ਼ਰ ਪਰੋਫਾਇਲ',
'prefs-rc'                      => 'ਤਾਜ਼ਾ ਬਦਲਾਅ',
'prefs-watchlist'               => 'ਨਿਗਰਾਨ-ਸੂਚੀ',
'prefs-watchlist-days'          => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਦਿਖਾਉਣ ਲਈ ਦਿਨ:',
'prefs-watchlist-days-max'      => 'ਵੱਧ ਤੋਂ ਵੱਧ $1 {{PLURAL:$1|ਦਿਨ|ਦਿਨ}}',
'prefs-watchlist-edits'         => 'ਵਧਾਈ ਹੋਈ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਦਿਖਾਉਣ ਲਈ ਵੱਧ ਤੋਂ ਵੱਧ ਤਬਦੀਲੀਆਂ:',
'prefs-watchlist-edits-max'     => 'ਵੱਧ ਤੋਂ ਵੱਧ ਨੰਬਰ: ੧੦੦੦',
'prefs-watchlist-token'         => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਟੋਕਨ:',
'prefs-misc'                    => 'ਫੁਟਕਲ',
'prefs-resetpass'               => 'ਪਾਸਵਰਡ ਬਦਲੋ',
'prefs-changeemail'             => 'ਈ-ਮੇਲ ਪਤਾ ਬਦਲੋ',
'prefs-setemail'                => 'ਈ-ਮੇਲ ਪਤਾ ਸੈੱਟ ਕਰੋ',
'prefs-email'                   => 'ਈਮੇਲ ਚੋਣਾਂ',
'prefs-rendering'               => 'ਦਿੱਖ',
'saveprefs'                     => 'ਸੰਭਾਲੋ',
'resetprefs'                    => 'ਅਣ-ਸਾਂਭੀਆਂ ਤਬਦੀਲੀਆਂ ਸਾਫ਼ ਕਰੋ',
'restoreprefs'                  => 'ਸਭ ਮੂਲ ਸੈਟਿੰਗਾਂ ਮੋੜ ਲਿਆਓ',
'prefs-editing'                 => 'ਸੋਧ ਜਾਰੀ',
'prefs-edit-boxsize'            => 'ਸੋਧ ਖਿੜਕੀ ਦਾ ਅਕਾਰ',
'rows'                          => 'ਕਤਾਰਾਂ:',
'columns'                       => 'ਕਾਲਮ:',
'searchresultshead'             => 'ਖੋਜ',
'resultsperpage'                => 'ਪ੍ਰਤੀ ਸਫ਼ਾ ਫੇਰੀਆਂ:',
'stub-threshold-disabled'       => 'ਬੰਦ ਹੈ',
'recentchangesdays'             => 'ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਵਿਚ ਵਿਖਾਉਣ ਲਈ ਦਿਨ:',
'recentchangesdays-max'         => 'ਵੱਧ ਤੋਂ ਵੱਧ $1 {{PLURAL:$1|ਦਿਨ|ਦਿਨ}}',
'recentchangescount'            => "ਮੂਲ ਤੌਰ 'ਤੇ ਵਿਖਾਈਆਂ ਸੋਧਾਂ ਦੀ ਗਿਣਤੀ:",
'prefs-help-recentchangescount' => 'ਇਸ ਵਿਚ ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ, ਸਫ਼ਿਆਂ ਦੇ ਅਤੀਤ ਅਤੇ ਚਿੱਠੇ ਸ਼ਾਮਲ ਹਨ।',
'savedprefs'                    => 'ਤੁਹਾਡੀਆਂ ਪਸੰਦਾਂ ਸਾਂਭੀਆਂ ਗਈਆਂ ਹੈ।',
'timezonelegend'                => 'ਸਮਾਂ ਜੋਨ:',
'localtime'                     => 'ਸਥਾਨਕ ਸਮਾਂ:',
'timezoneuseserverdefault'      => 'ਵਿਕੀ ਮੂਲ ($1) ਵਰਤੋ',
'timezoneuseoffset'             => 'ਹੋਰ (ਆਫ਼ਸੈੱਟ ਦੱਸੋ)',
'timezoneoffset'                => 'ਆਫ਼ਸੈੱਟ¹:',
'servertime'                    => 'ਸਰਵਰ ਦਾ ਟਾਈਮ:',
'guesstimezone'                 => 'ਬਰਾਊਜ਼ਰ ਤੋਂ ਭਰੋ',
'timezoneregion-africa'         => 'ਅਫ਼ਰੀਕਾ',
'timezoneregion-america'        => 'ਅਮਰੀਕਾ',
'timezoneregion-antarctica'     => 'ਅੰਟਾਰਕਟਿਕਾ',
'timezoneregion-arctic'         => 'ਆਰਕਟਿਕ',
'timezoneregion-asia'           => 'ਏਸ਼ੀਆ',
'timezoneregion-atlantic'       => 'ਅੰਧ ਮਹਾਂਸਾਗਰ',
'timezoneregion-australia'      => 'ਆਸਟਰੇਲੀਆ',
'timezoneregion-europe'         => 'ਯੂਰਪ',
'timezoneregion-indian'         => 'ਹਿੰਦ ਮਹਾਂਸਾਗਰ',
'timezoneregion-pacific'        => 'ਪ੍ਰਸ਼ਾਂਤ ਮਹਾਂਸਾਗਰ',
'allowemail'                    => 'ਹੋਰ ਯੂਜ਼ਰਾਂ ਤੋਂ ਈਮੇਲ ਯੋਗ ਕਰੋ',
'prefs-searchoptions'           => 'ਖੋਜ',
'prefs-namespaces'              => 'ਥਾਂ-ਨਾਮ',
'defaultns'                     => 'ਨਹੀਂ ਤਾਂ ਇਹਨਾਂ ਥਾਂ-ਨਾਂਵਾਂ ਵਿਚ ਖੋਜੋ:',
'default'                       => 'ਮੂਲ',
'prefs-files'                   => 'ਫ਼ਾਈਲਾਂ',
'prefs-custom-css'              => 'ਰਿਵਾਇਤੀ CSS',
'prefs-custom-js'               => 'ਰਿਵਾਇਤੀ ਜਾਵਾਸਕਰਿਪਟ',
'prefs-common-css-js'           => 'ਸਾਰੀਆਂ ਸਕਿਨਾਂ ਲਈ ਸਾਂਝਾ CSS/ਜਾਵਾਸਕਰਿਪਟ:',
'prefs-emailconfirm-label'      => 'ਈ-ਮੇਲ ਪੁਸ਼ਟੀ:',
'prefs-textboxsize'             => 'ਸੋਧ ਖਿੜਕੀ ਦਾ ਅਕਾਰ',
'youremail'                     => 'ਈ-ਮੇਲ:',
'username'                      => 'ਯੂਜ਼ਰ ਨਾਂ:',
'uid'                           => 'ਯੂਜ਼ਰ ID:',
'prefs-memberingroups'          => '{{PLURAL:$1|ਗਰੁੱਪ|ਗਰੁੱਪਾਂ}} ਦਾ ਮੈਂਬਰ:',
'prefs-registration'            => 'ਰਜਿਸਟਰੇਸ਼ਨ ਸਮਾਂ:',
'yourrealname'                  => 'ਅਸਲੀ ਨਾਂ:',
'yourlanguage'                  => 'ਭਾਸ਼ਾ:',
'yourvariant'                   => 'ਸਮੱਗਰੀ ਭਾਸ਼ਾ ਦਾ ਹੋਰ ਰੂਪ:',
'yournick'                      => 'ਨਵੇਂ ਦਸਤਖ਼ਤ:',
'prefs-help-signature'          => 'ਗੱਲ-ਬਾਤ ਸਫ਼ਿਆਂ ਉੱਤੇ ਟਿੱਪਣੀਆਂ ਦੇ ਆਖ਼ਰ ਵਿਚ "<nowiki>~~~~</nowiki>" ਲਾਓ ਜੋ ਤੁਹਾਡੇ ਦਸਤਖ਼ਤ ਅਤੇ ਵਕਤ ਦੀ ਮੋਹਰ ਵਿਚ ਤਬਦੀਲ ਹੋ ਜਾਵੇਗਾ।',
'badsig'                        => 'ਗ਼ਲਤ ਕੱਚੇ ਦਸਤਖ਼ਤ।
HTML ਟੈਗ ਚੈੱਕ ਕਰੋ।',
'badsiglength'                  => 'ਦਸਤਖ਼ਤ ਬਹੁਤ ਲੰਬਾ ਹੋ ਗਿਆ ਹੈ। ਇਹ {{PLURAL:$1|ਅੱਖਰ|ਅੱਖਰਾਂ}} ਤੋਂ ਲੰਬਾ ਨਹੀਂ ਹੋਣਾ ਚਾਹੀਦਾ।',
'yourgender'                    => 'ਲਿੰਗ:',
'gender-unknown'                => 'ਮੈਂ ਦੱਸਣਾ ਨਹੀਂ ਚਾਹੁੰਦਾ/ਚਾਹੁੰਦੀ',
'gender-male'                   => 'ਉਹ ਵਿਕੀ ਸਫ਼ੇ ਸੋਧਦਾ ਹੈ',
'gender-female'                 => 'ਉਹ ਵਿਕੀ ਸਫ਼ੇ ਸੋਧਦੀ ਹੈ',
'email'                         => 'ਈਮੇਲ',
'prefs-help-realname'           => 'ਅਸਲੀ ਨਾਂ ਚੋਣਵਾਂ ਹੈ, ਅਤੇ ਜੇ ਤੁਸੀਂ ਇਹ ਦਿੱਤਾ ਹੈ ਤਾਂ ਤੁਹਾਡੇ ਕੰਮ ਵਾਸਤੇ ਗੁਣ ਦੇ ਤੌਰ ਉੱਤੇ ਵਰਤਿਆ ਜਾਵੇਗਾ।',
'prefs-help-email'              => 'ਈਮੇਲ ਪਤਾ ਦੇਣਾ ਤੁਹਾਡੀ ਮਰਜ਼ੀ ਹੈ, ਦਿਓ ਜਾਂ ਨਾ ਦਿਓ ਪਰ ਪਾਸਵਰਡ ਭੁੱਲ ਜਾਣ ਤੇ ਨਵਾਂ ਪਾਸਵਰਡ ਹਾਸਲ ਕਰਨ ਲਈ ਇਹ ਜ਼ਰੂਰੀ ਹੈ।',
'prefs-help-email-others'       => 'ਤੁਸੀਂ ਇਹ ਵੀ ਚੁਣ ਸਕਦੇ ਹੋ ਕਿ ਤੁਹਾਡੇ ਵਰਤੋਂਕਾਰ ਜਾਂ ਚਰਚਾ ਪੰਨੇ ਤੋਂ ਹੋਰ ਵਰਤੋਂਕਾਰ ਤੁਹਾਨੂੰ ਈ-ਮੇਲ ਭੇਜ ਸਕਣ?
ਜਦੋਂ ਹੋਰ ਵਰਤੋਂਕਾਰ ਤੁਹਾਨੂੰ ਈ-ਮੇਲ ਭੇਜਦੇ ਹਨ ਤਾਂ ਤੁਹਾਡਾ ਈ-ਮੇਲ ਪਤਾ ਜ਼ਾਹਰ ਨਹੀਂ ਕੀਤਾ ਜਾਂਦਾ।',
'prefs-help-email-required'     => 'ਈ-ਮੇਲ ਪਤਾ ਚਾਹੀਦਾ ਹੈ।',
'prefs-info'                    => 'ਮੁਢਲੀ ਜਾਣਕਾਰੀ',
'prefs-i18n'                    => 'ਅੰਤਰਰਾਸ਼ਟਰੀਕਰਨ',
'prefs-signature'               => 'ਦਸਤਖ਼ਤ',
'prefs-dateformat'              => 'ਮਿਤੀ ਦਾ ਅੰਦਾਜ਼',
'prefs-timeoffset'              => 'ਸਮੇਂ ਦਾ ਆਫ਼ਸੈੱਟ',
'prefs-advancedediting'         => 'ਆਮ ਚੋਣਾਂ',
'prefs-advancedrc'              => 'ਤਕਨੀਕੀ ਚੋਣਾਂ',
'prefs-advancedrendering'       => 'ਤਕਨੀਕੀ ਚੋਣਾਂ',
'prefs-advancedsearchoptions'   => 'ਤਕਨੀਕੀ ਚੋਣਾਂ',
'prefs-advancedwatchlist'       => 'ਤਕਨੀਕੀ ਚੋਣਾਂ',
'prefs-displayrc'               => 'ਵੇਖਾਉਣ ਚੋਣਾਂ',
'prefs-displaysearchoptions'    => 'ਵੇਖਾਉਣ ਚੋਣਾਂ',
'prefs-displaywatchlist'        => 'ਵੇਖਾਉਣ ਚੋਣਾਂ',
'prefs-diffs'                   => 'ਫ਼ਰਕ',

# User preference: email validation using jQuery
'email-address-validity-valid'   => 'ਈ-ਮੇਲ ਪਤਾ ਸਹੀ ਲਗਦਾ ਹੈ',
'email-address-validity-invalid' => 'ਸਹੀ ਈ-ਮੇਲ ਪਤਾ ਦਾਖ਼ਲ ਕਰੋ',

# User rights
'userrights'                   => 'ਵਰਤੋਂਕਾਰ ਦੇ ਅਧਿਕਾਰਾਂ ਦਾ ਰੱਖ-ਰਖਾਓ',
'userrights-lookup-user'       => 'ਵਰਤੋਂਕਾਰ ਸਮੂਹਾਂ ਦੀ ਦੇਖਭਾਲ',
'userrights-user-editname'     => 'ਇੱਕ ਵਰਤੋਂਕਾਰ ਨਾਂ ਭਰੋ:',
'editusergroup'                => 'ਵਰਤੋਂਕਾਰ ਸਮੂਹਾਂ ਦੀ ਸੋਧ',
'editinguser'                  => "'''[[User:$1|$1]]''' $2 ਵਰਤੋਂਕਾਰ ਦੇ ਵਰਤੋਂਕਾਰ ਹੱਕ ਬਦਲੇ ਜਾ ਰਹੇ ਹਨ",
'userrights-editusergroup'     => 'ਵਰਤੋਂਕਾਰ ਸਮੂਹਾਂ ਦੀ ਸੋਧ',
'saveusergroups'               => 'ਵਰਤੋਂਕਾਰ ਸਮੂਹ ਸੰਭਾਲੋ',
'userrights-groupsmember'      => 'ਇਸ ਦਾ ਮੈਂਬਰ:',
'userrights-groupsmember-auto' => 'ਇਹਦਾ ਇਤਬਾਰੀ ਮੈਂਬਰ:',
'userrights-reason'            => 'ਕਾਰਨ:',
'userrights-no-interwiki'      => 'ਤੁਹਾਨੂੰ ਦੂਜੇ ਵਿਕੀਆਂ ਤੇ ਮੈਂਬਰਾਂ ਦੇ ਹੱਕਾਂ ਵਿਚ ਤਬਦੀਲੀ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'userrights-nodatabase'        => 'ਡੈਟਾਬੇਸ $1 ਮੌਜੂਦ ਨਹੀਂ ਜਾਂ ਮਕਾਮੀ ਨਹੀਂ ਹੈ।',
'userrights-notallowed'        => 'ਤੁਹਾਨੂੰ ਨੂੰ ਯੂਜ਼ਰ ਹੱਕ ਦੇਣ ਜਾਂ ਖੋਹਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'userrights-changeable-col'    => 'ਉਹ ਸਮੂਹ ਜਿਨ੍ਹਾਂ ਨੂੰ ਤੁਸੀਂ ਬਦਲ ਸਕਦੇ ਹੋ',
'userrights-unchangeable-col'  => 'ਉਹ ਸਮੂਹ ਜਿਨ੍ਹਾਂ ਨੂੰ ਤੁਸੀਂ ਬਦਲ ਨਹੀਂ ਸਕਦੇ',

# Groups
'group'               => 'ਸਮੂਹ:',
'group-user'          => 'ਵਰਤੋਂਕਾਰ',
'group-autoconfirmed' => 'ਖ਼ੁਦ-ਤਸਦੀਕਸ਼ੁਦਾ ਮੈਂਬਰ',
'group-bot'           => 'ਬੌਟ',
'group-sysop'         => 'ਪ੍ਰਸ਼ਾਸਕ',
'group-bureaucrat'    => 'ਅਫ਼ਸਰ',
'group-suppress'      => 'ਨਿਗਰਾਨੀਆਂ',
'group-all'           => '(ਸਭ)',

'group-user-member' => '{{GENDER:$1|ਵਰਤੋਂਕਾਰ}}',
'group-bot-member'  => 'ਬੌਟ',

'grouppage-user'       => '{{ns:project}}:ਵਰਤੋਂਕਾਰ',
'grouppage-bot'        => '{{ns:project}}:ਬੌਟ',
'grouppage-sysop'      => '{{ns:project}}:ਪ੍ਰਸ਼ਾਸਕ',
'grouppage-bureaucrat' => '{{ns:project}}:ਅਫ਼ਸਰ',
'grouppage-suppress'   => '{{ns:project}}:ਨਿਗਰਾਨੀ',

# Rights
'right-read'                 => 'ਸਫ਼ੇ ਪੜ੍ਹਨਾ',
'right-edit'                 => 'ਸਫ਼ੇ ਸੋਧ',
'right-createpage'           => 'ਸਫ਼ੇ ਬਣਾਉਣਾ (ਜੋ ਚਰਚਾ ਸਫ਼ੇ ਨਾ ਹੋਣ)',
'right-createtalk'           => 'ਚਰਚਾ ਸਫ਼ੇ ਬਣਾਉਣਾ',
'right-createaccount'        => 'ਨਵੇਂ ਖਾਤੇ ਬਣਾਉਣਾ',
'right-minoredit'            => 'ਸੋਧਾਂ ਦੇ ਛੋਟਾ ਹੋਣ ਲਈ ਨਿਸ਼ਾਨ ਲਾਉਣਾ',
'right-move'                 => 'ਸਫ਼ੇ ਭੇਜਣਾ',
'right-move-subpages'        => 'ਉਪ-ਸਫ਼ਿਆਂ ਸਮੇਤ ਸਫ਼ੇ ਭੇਜੋ',
'right-movefile'             => 'ਫਾਇਲਾਂ ਭੇਜਣੀਆਂ',
'right-upload'               => 'ਫਾਇਲਾਂ ਅੱਪਲੋਡ',
'right-upload_by_url'        => 'URL ਤੋਂ ਫਾਇਲਾਂ ਅੱਪਲੋਡ ਕਰੋ',
'right-autoconfirmed'        => 'ਨੀਮ-ਸੁਰੱਖਿਅਤ ਸਫ਼ਿਆਂ ਨੂੰ ਸੋਧਣਾ',
'right-delete'               => 'ਸਫ਼ੇ ਹਟਾਓ',
'right-bigdelete'            => 'ਵੱਡੇ ਅਤੀਤ ਵਾਲੇ ਪੰਨੇ ਮਿਟਾਉਣੇ',
'right-browsearchive'        => 'ਮਿਟਾਏ ਹੋਏ ਸਫ਼ੇ ਖੋਜੋ',
'right-undelete'             => 'ਸਫ਼ੇ ਨੂੰ ਅਣ-ਮਿਟਾਇਆ ਕਰਨਾ',
'right-suppressionlog'       => 'ਨਿੱਜੀ ਚਿੱਠੇ ਵੇਖਣਾ',
'right-block'                => 'ਦੂਜੇ ਵਰਤੋਂਕਾਰਾਂ ਦੇ ਸੋਧ ਕਰਨ ਤੇ ਪਾਬੰਦੀ ਲਾਉਣੀ',
'right-blockemail'           => 'ਵਰਤੋਂਕਾਰ ਦੇ ਈ-ਮੇਲ ਭੇਜਣ ਤੇ ਪਾਬੰਦੀ ਲਾਉਣੀ',
'right-hideuser'             => 'ਵਰਤੋਂਕਾਰ ਦੇ ਨਾਂ ਤੇ ਪਾਬੰਦੀ ਲਾਉਣੀ ਅਤੇ ਇਸਨੂੰ ਲੋਕਾਂ ਤੋਂ ਲੁਕਾਉਣਾ',
'right-unblockself'          => 'ਕਿਸੇ ਤੋਂ ਪਾਬੰਦੀ ਹਟਾਓ',
'right-editinterface'        => 'ਵਰਤੋਂਕਾਰ ਇੰਟਰਫ਼ੇਸ ਸੋਧੋ',
'right-editusercss'          => 'ਹੋਰ ਵਰਤੋਂਕਾਰਾਂ ਦੀਆਂ CSS ਫ਼ਾਈਲਾਂ ਸੋਧਣ',
'right-edituserjs'           => 'ਹੋਰ ਵਰਤੋਂਕਾਰਾਂ ਦੀਆਂ ਜਾਵਾਸਕਰਿਪਟ ਫ਼ਾਈਲਾਂ ਸੋਧਣ',
'right-unwatchedpages'       => 'ਨਜ਼ਰ ਨਾ ਰੱਖੇ ਜਾ ਰਹੇ ਸਫ਼ਿਆਂ ਦੀ ਲਿਸਟ ਵੇਖਣੀ',
'right-mergehistory'         => 'ਸਫ਼ਿਆਂ ਦੇ ਅਤੀਤਾਂ ਨੂੰ ਰਲ਼ਾਉਣਾ',
'right-userrights'           => 'ਸਾਰੇ ਵਰਤੋਂਕਾਰਾਂ ਦੇ ਹੱਕ ਬਦਲਣੇ',
'right-userrights-interwiki' => 'ਦੂਜੇ ਵਿਕੀਆਂ ਤੇ ਮੈਂਬਰਾਂ ਦੇ ਮੈਂਬਰ ਹੱਕਾਂ ਵਿਚ ਸੋਧ ਕਰਨਾ',
'right-siteadmin'            => 'ਡੈਟਾਬੇਸ ਨੂੰ ਤਾਲਾ ਲਾਉਣਾ ਤੇ ਖੋਲ੍ਹਣਾ',
'right-sendemail'            => 'ਦੂਜੇ ਮੈਂਬਰਾਂ ਨੂੰ ਈ-ਮੇਲ ਭੇਜਣਾ',
'right-passwordreset'        => 'ਪਾਸਵਰਡ ਮੁੜ-ਸੈੱਟ ਈਮੇਲ ਵੇਖੋ',

# User rights log
'rightslog'                  => 'ਵਰਤੋਂਕਾਰ ਹੱਕਾਂ ਦਾ ਚਿੱਠਾ',
'rightslogtext'              => 'ਇਹ ਮੈਂਬਰ ਹੱਕਾਂ ਵਿਚ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ ਦਾ ਚਿੱਠਾ ਹੈ।',
'rightslogentry-autopromote' => '$2 ਤੋਂ ਆਪਣੇ ਆਪ $3 ਤੱਕ ਤਰੱਕੀ ਕਰੀ',
'rightsnone'                 => '(ਕੋਈ ਨਹੀਂ)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'ਇਹ ਸਫ਼ਾ ਪੜ੍ਹੋ',
'action-edit'                 => 'ਇਹ ਸਫ਼ਾ ਸੋਧੋ',
'action-createpage'           => 'ਸਫ਼ੇ ਬਣਾਓ',
'action-createtalk'           => 'ਚਰਚਾ ਸਫ਼ੇ ਬਣਾਉਣ',
'action-createaccount'        => 'ਇਹ ਵਰਤੋਂਕਾਰ ਖਾਤਾ ਬਣਾਓ',
'action-minoredit'            => 'ਇਹ ਸੋਧ ਨੂੰ ਛੋਟੀ ਤੌਰ ਉੱਤੇ ਮੰਨੋ',
'action-move'                 => 'ਇਹ ਸਫ਼ਾ ਭੇਜੋ',
'action-move-subpages'        => 'ਇਹ ਸਫ਼ਾ ਤੇ ਇਸ ਦੇ ਅਧੀਨ-ਸਫ਼ਿਆਂ ਨੂੰ ਭੇਜੋ',
'action-movefile'             => 'ਇਹ ਫ਼ਾਈਲ ਭੇਜੋ',
'action-upload'               => 'ਇਹ ਫ਼ਾਈਲ ਅੱਪਲੋਡ ਕਰੋ',
'action-reupload'             => 'ਇਹ ਮੌਜੂਦਾ ਫ਼ਾਈਲ ਉੱਤੇ ਲਿਖੋ',
'action-reupload-shared'      => 'ਇਸ ਫ਼ਾਈਲ ਨੂੰ ਸਾਂਝੀ ਕੀਤੀ ਰਿਪੋਜ਼ਟਰੀ ਉੱਤੇ ਧਰੋ',
'action-upload_by_url'        => 'ਇਹ ਫ਼ਾਈਲ ਨੂੰ ਇੱਕ URL ਤੋਂ ਅੱਪਲੋਡ ਕਰੋ',
'action-writeapi'             => 'ਲਿਖਾਈ API ਵਰਤੋ',
'action-delete'               => 'ਇਹ ਸਫ਼ਾ ਮਿਟਾਓ',
'action-deleterevision'       => 'ਇਹ ਰਿਵੀਜ਼ਨ ਮਿਟਾਓ',
'action-deletedhistory'       => 'ਇਸ ਸਫ਼ੇ ਦਾ ਮਿਟਾਇਆ ਅਤੀਤ ਵੇਖੋ',
'action-browsearchive'        => 'ਮਿਟਾਏ ਸਫ਼ੇ ਲੱਭੋ',
'action-undelete'             => 'ਇਹ ਸਫ਼ਾ ਅਣ-ਮਿਟਿਆ ਕਰੋ',
'action-suppressrevision'     => 'ਇਹ ਲੁਕਵਾਂ ਰੀਵਿਜ਼ਨ ਜਾਂਚੋ ਅਤੇ ਮੁੜ-ਸਟੋਰ ਕਰੋ',
'action-suppressionlog'       => 'ਇਹ ਨਿੱਜੀ ਇੰਦਰਾਜ ਵੇਖੋ',
'action-block'                => 'ਇਸ ਮੈਂਬਰ ਦੇ ਸੋਧ ਕਰਨ ਤੇ ਪਾਬੰਦੀ ਲਾਓ',
'action-protect'              => 'ਇਸ ਸਫ਼ੇ ਦੀ ਸੁਰੱਖਿਆ ਬਦਲੋ',
'action-import'               => 'ਹੋਰ ਵਿਕੀ ਤੋਂ ਇਹ ਸਫ਼ਾ ਲਵੋ',
'action-importupload'         => 'ਫ਼ਾਈਲ ਅੱਪਲੋਡ ਤੋਂ ਇਹ ਸਫ਼ਾ ਮੰਗਾਓ',
'action-unwatchedpages'       => 'ਨਜ਼ਰ ਨਾ ਰੱਖੇ ਜਾ ਰਹੇ ਸਫ਼ਿਆਂ ਦੀ ਸੂਚੀ ਵੇਖੋ',
'action-mergehistory'         => 'ਇਸ ਸਫ਼ੇ ਦੇ ਅਤੀਤ ਨੂੰ ਰਲ਼ਾਉਣ',
'action-userrights'           => 'ਵਰਤੋਂਕਾਰ ਦੇ ਸਾਰੇ ਹੱਕ ਸੋਧਣ',
'action-userrights-interwiki' => 'ਦੂਜੇ ਵਿਕੀਆਂ ਦੇ ਵਰਤੋਂਕਾਰਾਂ ਦੇ ਵਰਤੋਂਕਾਰ-ਹੱਕ ਸੋਧਣ',
'action-siteadmin'            => 'ਡਾਟਾਬੇਸ ਨੂੰ ਤਾਲਾ ਲਾਓ ਜਾਂ ਖੋਲ੍ਹੋ',
'action-sendemail'            => 'ਈ-ਮੇਲਾਂ ਭੇਜੋ',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|ਤਬਦੀਲੀ|ਤਬਦੀਲੀਆਂ}}',
'recentchanges'                     => 'ਹਾਲ ’ਚ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ',
'recentchanges-legend'              => 'ਹਾਲ ਦੀਆਂ ਤਬਦੀਲੀਆਂ ਸਬੰਧੀ ਚੋਣਾਂ',
'recentchangestext'                 => 'ਇਸ ਵਿਕੀ ਪਰ ਹਾਲ ਵਿਚ ਹੋਏ ਬਦਲਾਅਦੇਖੇ ਜਾ ਸਕਦੇ ਹਨ।',
'recentchanges-feed-description'    => 'ਇਸ ਵਿਕੀ ’ਤੇ ਹਾਲ ‘ਚ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ ਇਸ ਫ਼ੀਡ ’ਚ ਵੇਖੀਆਂ ਜਾ ਸਕਦੀਆਂ ਹਨ।',
'recentchanges-label-newpage'       => 'ਇਸ ਸੋਧ ਨਾਲ਼ ਨਵਾਂ ਸਫ਼ਾ ਬਣਿਆ ਹੈ',
'recentchanges-label-minor'         => 'ਇਹ ਇੱਕ ਛੋਟੀ ਸੋਧ ਹੈ',
'recentchanges-label-bot'           => 'ਇਹ ਸੋਧ ਇੱਕ ਬੋਟ ਦੁਆਰਾ ਕੀਤੀ ਗਈ ਸੀ',
'recentchanges-label-unpatrolled'   => 'ਇਹ ਫੇਰ-ਬਦਲ ਹਾਲੇ ਵੇਖਿਆ ਨਹੀਂ ਗਿਆ',
'rcnote'                            => "$4, $5 ਤੱਕ ਆਖਰੀ {{PLURAL:$2|ਦਿਨ|'''$2''' ਦਿਨਾਂ}} ਵਿੱਚ {{PLURAL:$1|'''1''' ਬਦਲੀ ਹੋਈ ਹੈ।|'''$1''' ਬਦਲੀਆਂ ਹੋਈਆਂ ਹਨ।}}",
'rcnotefrom'                        => "'''$2''' ਤੱਕ ('''$1''' ਤੱਕ ਦਿੱਸਦੇ) ਬਦਲਾਵ ਹੇਠ ਦਿੱਤੀਆਂ ਹਨ।",
'rclistfrom'                        => '$1 ਤੋਂ ਸ਼ੁਰੂ ਕਰਕੇ ਨਵੀਆਂ ਸੋਧਾਂ ਵਖਾਓ',
'rcshowhideminor'                   => 'ਛੋਟੀਆਂ ਤਬਦੀਲੀਆਂ $1',
'rcshowhidebots'                    => '$1 ਬੌਟ',
'rcshowhideliu'                     => '$1 ਦਾਖ਼ਲ ਹੋਏ ਵਰਤੋਂਕਾਰ',
'rcshowhideanons'                   => '$1 ਗੁਮਨਾਮ ਵਰਤੋਂਕਾਰ',
'rcshowhidepatr'                    => 'ਜਾਂਚੀਆਂ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ $1',
'rcshowhidemine'                    => 'ਮੇਰੀਆਂ ਤਬਦੀਲੀਆਂ  $1',
'rclinks'                           => 'ਪਿਛਲੇ $2 ਦਿਨਾਂ ਵਿੱਚ ਹੋਈਆਂ $1 ਤਬਦੀਲੀਆਂ ਵਖਾਓ<br /> $3',
'diff'                              => 'ਫ਼ਰਕ',
'hist'                              => 'ਅਤੀਤ',
'hide'                              => 'ਲੁਕਾਓ',
'show'                              => 'ਵਖਾਓ',
'minoreditletter'                   => 'ਛੋ',
'newpageletter'                     => 'ਨ',
'boteditletter'                     => 'ਬੋਟ',
'number_of_watching_users_pageview' => '[$1 ਵੇਖ ਰਹੇ ਹਨ {{PLURAL:$1|ਯੂਜ਼ਰ}}]',
'rc_categories_any'                 => 'ਕੋਈ ਵੀ',
'newsectionsummary'                 => '/* $1 */ ਨਵਾਂ ਭਾਗ',
'rc-enhanced-expand'                => 'ਵੇਰਵੇ ਵੇਖਾਓ',
'rc-enhanced-hide'                  => 'ਵੇਰਵਾ ਲੁਕਾਓ',
'rc-old-title'                      => 'ਅਸਲ ਵਿੱਚ "$1" ਵਜੋਂ ਬਣਾਇਆ',

# Recent changes linked
'recentchangeslinked'          => 'ਸਬੰਧਤ ਤਬਦੀਲੀਆਂ',
'recentchangeslinked-feed'     => 'ਸਬੰਧਤ ਤਬਦੀਲੀਆਂ',
'recentchangeslinked-toolbox'  => 'ਸਬੰਧਤ ਤਬਦੀਲੀਆਂ',
'recentchangeslinked-title'    => '"$1" ਨਾਲ ਸਬੰਧਤ ਤਬਦੀਲੀਆਂ',
'recentchangeslinked-noresult' => 'ਜੁੜੇ ਪੰਨਿਆਂ ’ਤੇ, ਦਿੱਤੇ ਸਮੇਂ ’ਚ ਕੋਈ ਬਦਲਾਵ ਨਹੀਂ ਹੋਈ।',
'recentchangeslinked-summary'  => 'ਇਹ ਕਿਸੇ ਖ਼ਾਸ ਸਫ਼ੇ ਤੋਂ ਲਿੰਕ ਕੀਤੇ ਸਫ਼ਿਆਂ (ਜਾਂ ਕਿਸੇ ਖ਼ਾਸ ਸ਼੍ਰੇਣੀ ਦੇ ਮੈਂਬਰਾਂ) ਵਿੱਚ ਹੋਈਆਂ ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਦੀ ਲਿਸਟ ਹੈ। [[Special:Watchlist|ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ]] ਵਿੱਚ ਮੌਜੂਦ ਸਫ਼ੇ ਮੋਟੇ ਅੱਖਰਾਂ ਵਿੱਚ ਵਖਾਈ ਦੇਣਗੇ।',
'recentchangeslinked-page'     => 'ਸਫ਼ੇ ਦਾ ਨਾਂ:',
'recentchangeslinked-to'       => 'ਇਹਦੇ ਬਦਲੇ ਇਸ ਸਫ਼ੇ ਨਾਲ ਜੁੜੇ ਸਫ਼ਿਆਂ ਵਿੱਚ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ ਵਿਖਾਓ',

# Upload
'upload'                    => 'ਫ਼ਾਈਲ ਅੱਪਲੋਡ ਕਰੋ',
'uploadbtn'                 => 'ਫ਼ਾਈਲ ਅੱਪਲੋਡ ਕਰੋ',
'reuploaddesc'              => 'ਅੱਪਲੋਡ ਫਾਰਮ ਉੱਤੇ ਜਾਓ।',
'upload-tryagain'           => 'ਬਦਲਿਆ ਹੋਇਆ ਫ਼ਾਈਲ ਵੇਰਵਾ ਪੇਸ਼ ਕਰੋ',
'uploadnologin'             => 'ਦਾਖ਼ਲ ਨਹੀਂ ਹੋ',
'uploadnologintext'         => 'ਤੁਹਾਨੂੰ[[Special:UserLogin|logged in] ਕਰਨਾ ਪਵੇਗਾ]
to upload files.',
'uploaderror'               => 'ਅੱਪਲੋਡ ਗਲਤੀ',
'upload-recreate-warning'   => "'''ਖ਼ਬਰਦਾਰ: ਇਸ ਨਾਮ ਦੀ ਫ਼ਾਈਲ ਮਿਟਾਈ ਜਾਂ ਹੋਰ ਨਾਮ ਤੇ ਭੇਜੀ ਜਾ ਚੁੱਕੀ ਹੈ।'''
ਮਿਟਾਉਣ ਅਤੇ ਭੇਜੇ ਜਾਣ ਦਾ ਚਿੱਠਾ ਸਹੂਲਤ ਲਈ ਇੱਥੇ ਦਿੱਤਾ ਗਿਆ ਹੈ:",
'uploadlog'                 => 'ਅੱਪਲੋਡ ਲਾਗ',
'uploadlogpage'             => 'ਅਪਲੋਡਾਂ ਦਾ ਚਿੱਠਾ',
'filename'                  => 'ਫ਼ਾਈਲ ਦਾ ਨਾਂ:',
'filedesc'                  => 'ਸਾਰ',
'fileuploadsummary'         => 'ਸਾਰ:',
'filereuploadsummary'       => 'ਫ਼ਾਈਲ ਤਬਦੀਲੀਆਂ:',
'filestatus'                => 'ਕਾਪੀਰਾਈਟ ਹਾਲਤ:',
'filesource'                => 'ਸਰੋਤ:',
'uploadedfiles'             => 'ਅੱਪਲੋਡ ਕੀਤੀਆਂ ਫ਼ਾਈਲਾਂ',
'ignorewarning'             => 'ਚਿਤਾਵਨੀ ਅਣਡਿੱਠੀ ਕਰਕੇ ਕਿਵੇਂ ਵੀ ਫ਼ਾਈਲ ਸਾਂਭੋ।',
'ignorewarnings'            => 'ਕੋਈ ਚਿਤਾਵਨੀ ਹੋਈ ਤਾਂ ਨਜ਼ਰਅੰਦਾਜ਼ ਕਰੋ',
'minlength1'                => 'ਫ਼ਾਈਲ ਦੇ ਨਾਂ ਵਿਚ ਘੱਟੋ-ਘੱਟ ਇੱਕ ਅੱਖਰ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
'filename-toolong'          => 'ਫ਼ਾਈਲਾਂ ਦੇ ਨਾਂ ੨੪੦ ਬਾਈਟਾਂ ਤੋਂ ਵੱਡੇ ਨਹੀਂ ਹੋ ਸਕਦੇ।',
'badfilename'               => 'ਫ਼ਾਈਲ ਦਾ ਨਾਂ ਬਦਲ ਦੇ "$1" ਕਰ ਦਿੱਤਾ ਗਿਆ ਹੈ।',
'filetype-missing'          => 'ਫ਼ਾਈਲ ਦੀ ਕੋਈ ਐਕਸ਼ਟੇਸ਼ਨ (ਜਿਵੇਂ ".jpg") ਨਹੀਂ ਹੈ।',
'empty-file'                => 'ਤੁਹਾਡੇ ਵਲੋਂ ਦਿੱਤੀ ਫ਼ਾਈਲ ਖ਼ਾਲੀ ਸੀ।',
'file-too-large'            => 'ਤੁਹਾਡੇ ਵਲੋਂ ਦਿੱਤੀ ਫ਼ਾਈਲ ਬਹੁਤ ਵੱਡੀ ਸੀ।',
'filename-tooshort'         => 'ਫ਼ਾਈਲ ਦਾ ਨਾਂ ਬਹੁਤ ਛੋਟਾ ਹੈ।',
'filetype-banned'           => 'ਇਸ ਕਿਸਮ ਦੀ ਫ਼ਾਈਲ ਦੀ ਮਨਾਹੀ ਹੈ।',
'verification-error'        => "ਇਹ ਫ਼ਾਈਲ ਫ਼ਾਈਲ-ਜਾਂਚ 'ਤੇ ਖ਼ਰੀ ਨਾ ਉੱਤਰ ਸਕੀ।",
'illegal-filename'          => 'ਇਸ ਫ਼ਾਈਲ-ਨਾਂ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'unknown-error'             => 'ਅਣਜਾਣ ਗ਼ਲਤੀ ਆਈ ਹੈ।',
'tmp-create-error'          => 'ਆਰਜ਼ੀ ਫ਼ਾਈਲ ਬਣਾਈ ਨਾ ਜਾ ਸਕੀ।',
'tmp-write-error'           => 'ਆਰਜ਼ੀ ਫ਼ਾਈਲ ਲਿਖਣ ਲਈ ਗ਼ਲਤੀ ਆਈ।',
'windows-nonascii-filename' => 'ਵਿਕੀ ਖ਼ਾਸ ਚਿੰਨ੍ਹਾਂ ਵਾਲੇ ਫ਼ਾਈਲ ਨਾਮਾਂ ਨੂੰ ਇਜਾਜ਼ਤ ਨਹੀਂ ਦਿੰਦਾ।',
'fileexists'                => 'ਇਹ ਫ਼ਾਈਲ ਨਾਂ ਪਹਿਲਾਂ ਹੀ ਮੌਜੂਦ ਹੈ। ਜੇ ਤੁਸੀਂ ਇਹਨੂੰ ਬਦਲਣ ਬਾਰੇ ਦ੍ਰਿੜ ਨਹੀਂ ਹੋ ਤਾਂ  <strong>[[:$1]]</strong> ਵੇਖੋ ਜੀ। [[$1|thumb]]',
'fileexists-extension'      => 'ਇਸ ਨਾਂ ਨਾਲ਼ ਰਲਦੀ ਫ਼ਾਈਲ ਮੌਜੂਦ ਹੈ: [[$2|thumb]]
* ਅੱਪਲੋਡ ਕੀਤੀ ਜਾਂਦੀ ਫ਼ਾਈਲ ਦਾ ਨਾਂ: <strong>[[:$1]]</strong>
* ਮੌਜੂਦ ਫ਼ਾਈਲ ਦਾ ਨਾਂ: <strong>[[:$2]]</strong>
ਕੋਈ ਵੱਖਰਾ ਨਾਂ ਚੁਣੋ ਜੀ।',
'file-exists-duplicate'     => 'ਇਹ ਫ਼ਾਈਲ {{PLURAL:$1|ਇਸ ਫ਼ਾਈਲ|ਇਹਨਾਂ ਫ਼ਾਈਲਾਂ}} ਦੀ ਨਕਲ ਹੈ:',
'uploadwarning'             => 'ਅੱਪਲੋਡ ਚਿਤਾਵਨੀ',
'uploadwarning-text'        => 'ਕਿਰਪਾ ਕਰਕੇ ਹੇਠ ਦਿੱਤਾ ਫ਼ਾਈਲ ਵੇਰਵਾ ਬਦਲੋ ਅਤੇ ਦੁਬਾਰਾ ਕੋਸ਼ਿਸ਼ ਕਰੋ।',
'savefile'                  => 'ਫ਼ਾਈਲ ਸਾਂਭੋ',
'uploadedimage'             => '"[[$1]]" ਅੱਪਲੋਡ ਕੀਤੀ',
'overwroteimage'            => '"[[$1]]" ਦਾ ਨਵਾਂ ਰੂਪ ਅੱਪਲੋਡ ਕਰੋ',
'uploaddisabled'            => 'ਅੱਪਲੋਡ ਆਯੋਗ ਹੈ',
'copyuploaddisabled'        => 'URL ਰਾਹੀਂ ਅੱਪਲੋਡ ਰੋਕੇ ਹੋਏ ਹਨ।',
'uploadfromurl-queued'      => 'ਤੁਹਾਡਾ ਅੱਪਲੋਡ ਕਤਾਰ ਵਿਚ ਹੈ।',
'uploaddisabledtext'        => 'ਫ਼ਾਈਲਾਂ ਦੇ ਅੱਪਲੋਡ ਰੋਕੇ ਹੋਏ ਹਨ।',
'uploadvirus'               => 'ਇਹ ਫਾਇਲ ਵਿੱਚ ਵਾਇਰਸ ਹੈ! ਵੇਰਵੇ ਲਈ ਵੇਖੋ: $1',
'upload-source'             => 'ਸਰੋਤ ਫਾਇਲ',
'sourcefilename'            => 'ਸੋਰਸ ਫਾਇਲ ਨਾਂ:',
'sourceurl'                 => 'ਸਰੋਤ URL:',
'destfilename'              => 'ਟਿਕਾਣਾ ਫਾਇਲ-ਨਾਂ:',
'upload-maxfilesize'        => 'ਫਾਈਲ ਦਾ ਵੱਧ ਤੋਂ ਵੱਧ ਅਕਾਰ: $1',
'upload-description'        => 'ਫਾਈਲ ਵੇਰਵਾ',
'upload-options'            => 'ਅੱਪਲੋਡ ਚੋਣਾਂ',
'watchthisupload'           => 'ਇਸ ਫ਼ਾਈਲ ’ਤੇ ਨਜ਼ਰ ਰੱਖੋ',
'upload-success-subj'       => 'ਸਫ਼ਲ ਅੱਪਲੋਡ',
'upload-failure-subj'       => 'ਅੱਪਲੋਡ ਸਮੱਸਿਆ',
'upload-warning-subj'       => 'ਅੱਪਲੋਡ ਚੇਤਾਵਨੀ',

'upload-proto-error'  => 'ਗਲਤ ਪਰੋਟੋਕਾਲ',
'upload-file-error'   => 'ਅੰਦਰੂਨੀ ਗਲਤੀ',
'upload-misc-error'   => 'ਅਣਪਛਾਤੀ ਅੱਪਲੋਡ ਗਲਤੀ',
'upload-unknown-size' => 'ਅਣਪਛਾਤਾ ਅਕਾਰ',
'upload-http-error'   => 'ਇੱਕ HTTP ਗ਼ਲਤੀ ਹੋਈ: $1',

# File backend
'backend-fail-notexists'     => 'ਫ਼ਾਈਲ $1 ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',
'backend-fail-delete'        => 'ਫ਼ਾਈਲ "$1" ਮਿਟਾਈ ਨਹੀਂ ਜਾ ਸਕੀ।',
'backend-fail-alreadyexists' => 'ਫ਼ਾਈਲ "$1" ਪਹਿਲਾਂ ਹੀ ਮੌਜੂਦ ਹੈ।',
'backend-fail-store'         => 'ਫ਼ਾਈਲ "$1", "$2" ਵਿਚ ਸਾਂਭੀ ਨਹੀਂ ਜਾ ਸਕੀ।',
'backend-fail-copy'          => 'ਫ਼ਾਈਲ "$1", "$2" ਵਿਚ ਨਕਲ ਨਹੀਂ ਕੀਤੀ ਜਾ ਸਕੀ।',
'backend-fail-move'          => 'ਫ਼ਾਈਲ "$1", "$2" ਤੇ ਭੇਜੀ ਨਹੀਂ ਜਾ ਸਕੀ।',
'backend-fail-opentemp'      => 'ਆਰਜ਼ੀ ਫ਼ਾਈਲ ਖੋਲ੍ਹੀ ਨਹੀਂ ਜਾ ਸਕੀ।',
'backend-fail-writetemp'     => 'ਆਰਜ਼ੀ ਫ਼ਾਈਲ ਉੱਤੇ ਲਿਖ ਨਹੀਂ ਹੋਇਆ।',
'backend-fail-closetemp'     => 'ਆਰਜ਼ੀ ਫ਼ਾਈਲ ਬੰਦ ਨਹੀਂ ਹੋਈ।',
'backend-fail-read'          => '"$1" ਫ਼ਾਈਲ ਪੜ੍ਹੀ ਨਾ ਜਾ ਸਕੀ।',
'backend-fail-create'        => '"$1" ਫ਼ਾਈਲ ਲਿਖੀ ਨਾ ਜਾ ਸਕੀ।',

# Special:UploadStash
'uploadstash-refresh' => 'ਫ਼ਾਈਲਾਂ ਦੀ ਲਿਸਟ ਨੂੰ ਤਾਜ਼ਾ ਕਰੋ',

# img_auth script messages
'img-auth-nofile' => 'ਫ਼ਾਈਲ "$1" ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'      => 'URL ’ਤੇ ਪਹੁੰਚਿਆ ਨਹੀਂ ਜਾ ਸਕਿਆ।',
'upload-curl-error6-text' => 'ਦਿੱਤੇ ਹੋਏ URL ’ਤੇ ਪਹੁੰਚਿਆ ਨਹੀਂ ਜਾ ਸਕਿਆ।
ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਦੁਬਾਰਾ ਜਾਂਚ ਕਰੋ ਕਿ URL ਸਹੀ ਹੈ ਅਤੇ ਸਾਈਟ ਉਪਲੱਬਧ ਹੈ।',
'upload-curl-error28'     => 'ਅੱਪਲੋਡ ਟਾਈਮ-ਆਉਟ',

'license'            => 'ਲਸੰਸ:',
'license-header'     => 'ਲਸੰਸ',
'nolicense'          => 'ਕੁਝ ਵੀ ਚੁਣਿਆ',
'license-nopreview'  => '(ਝਲਕ ਉਪਲੱਬਧ ਨਹੀਂ)',
'upload_source_file' => ' (ਤੁਹਾਡੇ ਕੰਪਿਊਟਰ ਉੱਤੇ ਇੱਕ ਫਾਇਲ)',

# Special:ListFiles
'listfiles_search_for'  => 'ਇਸ ਮੀਡੀਆ ਨਾਂ ਨੂੰ ਖੋਜੋ:',
'imgfile'               => 'ਫ਼ਾਈਲ',
'listfiles'             => 'ਫ਼ਾਈਲਾਂ ਦੀ ਸੂਚੀ',
'listfiles_thumb'       => 'ਨਮੂਨਾ-ਤਸਵੀਰ',
'listfiles_date'        => 'ਮਿਤੀ',
'listfiles_name'        => 'ਨਾਂ',
'listfiles_user'        => 'ਵਰਤੋਂਕਾਰ',
'listfiles_size'        => 'ਆਕਾਰ',
'listfiles_description' => 'ਵੇਰਵਾ',
'listfiles_count'       => 'ਵਰਜਨ',

# File description page
'file-anchor-link'          => 'ਫ਼ਾਈਲ',
'filehist'                  => 'ਫ਼ਾਈਲ ਦਾ ਅਤੀਤ',
'filehist-help'             => 'ਤਾਰੀਖ/ਸਮੇਂ ’ਤੇ ਕਲਿੱਕ ਕਰੋ ਤਾਂ ਉਸ ਸਮੇਂ ਦੀ ਫਾਈਲ ਪੇਸ਼ ਹੋ ਜਾਵੇਗੀ।',
'filehist-deleteall'        => 'ਸਭ ਹਟਾਓ',
'filehist-deleteone'        => 'ਇਹ ਹਟਾਓ',
'filehist-revert'           => 'ਉਲਟਾਓ',
'filehist-current'          => 'ਮੌਜੂਦਾ',
'filehist-datetime'         => 'ਮਿਤੀ/ਸਮਾਂ',
'filehist-thumb'            => 'ਨਮੂਨਾ',
'filehist-thumbtext'        => '$1 ਵੇਲੇ ਦੇ ਵਰਜਨ ਦਾ ਅੰਗੂਠਾਕਾਰ ਰੂਪ',
'filehist-nothumb'          => 'ਕੋਈ ਨਮੂਨਾ-ਤਸਵੀਰ ਨਹੀਂ',
'filehist-user'             => 'ਵਰਤੋਂਕਾਰ',
'filehist-dimensions'       => 'ਨਾਪ',
'filehist-filesize'         => 'ਫਾਇਲ ਆਕਾਰ',
'filehist-comment'          => 'ਟਿੱਪਣੀ',
'filehist-missing'          => 'ਫਾਈਲ ਗੁੰਮ',
'imagelinks'                => 'ਫ਼ਾਈਲ ਦੀ ਵਰਤੋਂ',
'linkstoimage'              => 'ਇਹ {{PLURAL:$1|ਸਫ਼ਾ|$1 ਸਫ਼ੇ}} ਇਸ ਫ਼ਾਈਲ ਨਾਲ ਜੋੜਦੇ ਹਨ:',
'nolinkstoimage'            => 'ਕੋਈ ਵੀ ਸਫ਼ਾ ਇਸ ਫ਼ਾਈਲ ਨਾਲ ਨਹੀਂ ਜੋੜਦਾ।',
'morelinkstoimage'          => 'ਇਸ ਫ਼ਾਈਲ ਨਾਲ਼ ਜੋੜਦੇ [[Special:WhatLinksHere/$1|ਹੋਰ ਲਿੰਕ]] ਵੇਖੋ।',
'sharedupload'              => 'ਇਹ ਫ਼ਾਈਲ $1 ਤੋਂ ਹੈ ਅਤੇ ਸ਼ਾਇਦ ਦੂਜੇ ਪ੍ਰੋਜੈਕਟਾਂ ਤੇ ਵਰਤੀ ਜਾ ਸਕਦੀ ਹੈ।',
'sharedupload-desc-there'   => 'ਇਹ ਫ਼ਾਈਲ $1 ਤੋਂ ਹੈ ਅਤੇ ਸ਼ਾਇਦ ਦੂਜੇ ਪ੍ਰੋਜੈਕਟਾਂ ਦੁਆਰਾ ਵਰਤੀ ਜਾ ਸਕਦੀ ਹੈ।
ਜ਼ਿਆਦਾ ਜਾਣਕਾਰੀ ਲਈ ਮਿਹਰਬਾਨੀ ਕਰਕੇ [$2 ਫ਼ਾਈਲ ਦਾ ਵੇਰਵਾ ਸਫ਼ਾ] ਵੇਖੋ।',
'sharedupload-desc-here'    => 'ਇਹ ਫ਼ਾਈਲ $1 ਦੀ ਹੈ ਅਤੇ ਹੋਰ ਪਰਿਯੋਜਨਾਵਾਂ ਵਿੱਚ ਵੀ ਵਰਤੀ ਜਾ ਸਕਦੀ ਹੈ । ਇਸ [$2 ਫ਼ਾਈਲ ਦੇ ਵੇਰਵਾ ਸਫ਼ੇ] ਵਿੱਚ ਮੌਜੂਦ ਵੇਰਵਾ ਹੇਠ ਦਿਸ ਰਿਹਾ ਹੈ।',
'filepage-nofile'           => 'ਇਸ ਨਾਮ ਦੀ ਕੋਈ ਫ਼ਾਈਲ ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',
'filepage-nofile-link'      => 'ਇਸ ਨਾਮ ਦੀ ਕੋਈ ਫ਼ਾਈਲ ਮੌਜੂਦ ਨਹੀਂ ਹੈ ਪਰ ਤੁਸੀਂ [$1 ਇਸਨੂੰ ਅੱਪਲੋਡ ਕਰ] ਸਕਦੇ ਹੋ।',
'uploadnewversion-linktext' => 'ਇਸ ਫਾਇਲ ਦਾ ਇੱਕ ਨਵਾਂ ਵਰਜਨ ਅੱਪਲੋਡ ਕਰੋ',
'shared-repo-from'          => '$1 ਤੋਂ',

# File reversion
'filerevert'         => '$1 ਰੀਵਰਟ',
'filerevert-legend'  => 'ਫਾਇਲ ਰੀਵਰਟ',
'filerevert-comment' => 'ਕਾਰਨ:',
'filerevert-submit'  => 'ਰੀਵਰਟ',

# File deletion
'filedelete'                   => '$1 ਹਟਾਓ',
'filedelete-legend'            => 'ਫਾਇਲ ਹਟਾਓ',
'filedelete-intro'             => "ਤੁਸੀਂ ਸਾਰੇ ਅਤੀਤ ਸਮੇਤ ਫ਼ਾਈਲ '''[[Media:$1|$1]]''' ਨੂੰ ਮਿਟਾਉਣ ਵਾਲ਼ੇ ਹੋ।",
'filedelete-intro-old'         => "ਤੁਸੀਂ ਫ਼ਾਈਲ '''[[Media:$1|$1]]''' ਦਾ [$4 $2, $3] ਵਾਲ਼ਾ ਰੂਪ ਮਿਟਾ ਰਹੇ ਹੋ।",
'filedelete-comment'           => 'ਕਾਰਨ:',
'filedelete-submit'            => 'ਹਟਾਓ',
'filedelete-success'           => "'''$1''' ਨੂੰ ਹਟਾਇਆ ਗਿਆ।",
'filedelete-success-old'       => "ਫ਼ਾਈਲ '''[[Media:$1|$1]]''' ਦਾ $2, $3 ਵਾਲ਼ਾ ਰੂਪ ਮਿਟਾਇਆ ਜਾ ਚੁੱਕਾ ਹੈ।",
'filedelete-nofile'            => "'''$1''' ਮੌਜੂਦ ਨਹੀਂ ਹੈ।",
'filedelete-otherreason'       => 'ਹੋਰ/ਵਾਧੂ ਕਾਰਨ:',
'filedelete-reason-otherlist'  => 'ਹੋਰ ਕਾਰਨ',
'filedelete-reason-dropdown'   => '* ਮਿਟਾਉਣ ਦੇ ਆਮ ਕਾਰਨ
** ਡੁਪਲੀਕੇਟ ਫ਼ਾਈਲ
** ਕਾਪੀਰਾਈਟ ਦੀ ਉਲੰਘਣਾ',
'filedelete-edit-reasonlist'   => 'ਮਿਟਾਉਣ ਦੇ ਕਾਰਨ ਸੋਧੋ',
'filedelete-maintenance-title' => 'ਫ਼ਾਈਲ ਮਿਟਾ ਨਹੀਂ ਸਕਦੇ',

# MIME search
'mimesearch' => 'MIME ਖੋਜ',
'mimetype'   => 'MIME ਕਿਸਮ:',
'download'   => 'ਡਾਊਨਲੋਡ',

# Unwatched pages
'unwatchedpages' => 'ਨਜ਼ਰ ਹੇਠ ਨਾ ਰੱਖੇ ਗਏ ਸਫ਼ੇ',

# List redirects
'listredirects' => 'ਰੀਡਾਇਰੈਕਟਾਂ ਦੀ ਲਿਸਟ',

# Unused templates
'unusedtemplates'    => 'ਅਣ-ਵਰਤੇ ਫਰਮੇ',
'unusedtemplateswlh' => 'ਹੋਰ ਕੜੀਆਂ',

# Random page
'randompage'         => 'ਰਲ਼ਵਾਂ ਸਫ਼ਾ',
'randompage-nopages' => '{{PLURAL:$2|ਇਸ ਥਾਂ-ਨਾਮ|ਇਹਨਾਂ ਥਾਂ-ਨਾਂਵਾ}} ਵਿਚ ਕੋਈ ਸਫ਼ਾ ਨਹੀਂ ਹੈ: $1।',

# Random redirect
'randomredirect' => 'ਰਲ਼ਵਾਂ ਰੀਡਿਰੈਕਟ',

# Statistics
'statistics'                   => 'ਅੰਕੜੇ',
'statistics-header-pages'      => 'ਸਫ਼ਾ ਅੰਕੜੇ',
'statistics-header-edits'      => 'ਸੋਧ ਅੰਕੜੇ',
'statistics-header-views'      => 'ਅੰਕੜੇ ਵਿਖਾਓ',
'statistics-header-users'      => 'ਵਰਤੋਂਕਾਰ ਅੰਕੜੇ',
'statistics-header-hooks'      => 'ਹੋਰ ਅੰਕੜੇ',
'statistics-articles'          => 'ਸਮੱਗਰੀ ਸਫ਼ੇ',
'statistics-pages'             => 'ਸਫ਼ੇ',
'statistics-pages-desc'        => 'ਇਸ ਵਿਕੀ ਦੇ ਸਾਰੇ ਸਫ਼ੇ, ਗੱਲ-ਬਾਤ ਸਫ਼ਿਆਂ, ਰੀਡਾਇਰੈਕਟਾਂ ਇਤਿਆਦਿ ਨੂੰ ਸ਼ਾਮਲ ਕਰਦੇ ਹੋਏ',
'statistics-files'             => 'ਅਪਲੋਡ ਕੀਤੀਆਂ ਗਈਆਂ ਫਾਈਲਾਂ',
'statistics-edits-average'     => 'ਪ੍ਰਤੀ ਸਫ਼ਾ ਔਸਤ ਸੋਧਾਂ',
'statistics-views-total'       => 'ਕੁੱਲ ਫੇਰੀਆਂ',
'statistics-views-peredit'     => 'ਪ੍ਰਤੀ ਸੋਧ ਫੇਰੀਆਂ',
'statistics-users'             => 'ਰਜਿਸਟਰਡ [[Special:ListUsers|ਵਰਤੋਂਕਾਰ]]',
'statistics-users-active'      => 'ਸਰਗਰਮ ਵਰਤੋਂਕਾਰ',
'statistics-users-active-desc' => 'ਮੈਂਬਰ, ਜਿੰਨ੍ਹਾ ਨੇ ਆਖ਼ਰੀ {{PLURAL:$1|ਦਿਨ|$1 ਦਿਨਾਂ}} ਵਿਚ ਕੋਈ ਕੰਮ ਕੀਤਾ ਹੈ।',
'statistics-mostpopular'       => 'ਸਭ ਤੋਂ ਵੱਧ ਵੇਖੇ ਸਫ਼ੇ',

'disambiguations'     => 'ਗੁੰਝਲ-ਖੋਲ੍ਹ ਸਫ਼ਿਆਂ ਨਾਲ਼ ਜੁੜਦੇ ਸਫ਼ੇ',
'disambiguationspage' => 'Template:ਗੁੰਝਲ ਖੋਲ੍ਹ',

'doubleredirects' => 'ਦੋਹਰੇ ਰੀਡਿਰੈਕਟ',

'brokenredirects'        => 'ਟੁੱਟੇ ਹੋਏ ਰੀਡਿਰੈਕਟ',
'brokenredirectstext'    => 'ਇਹ ਰਿਡਿਰੈਕਟ ਨਾ-ਮੌਜੂਦ ਸਫ਼ਿਆਂ ’ਤੇ ਜੋੜਦੇ ਹਨ:',
'brokenredirects-edit'   => 'ਸੋਧ',
'brokenredirects-delete' => 'ਹਟਾਓ',

'withoutinterwiki'         => 'ਬਿਨਾਂ ਬੋਲੀ ਲਿੰਕਾਂ ਦੇ ਸਫ਼ੇ',
'withoutinterwiki-summary' => 'ਇਹ ਸਫ਼ੇ ਹੋਰ ਬੋਲੀਆਂ ਵਾਲ਼ੇ ਵਰਜਨਾਂ ਨਾਲ਼ ਨਹੀਂ ਜੁੜਦੇ।',
'withoutinterwiki-legend'  => 'ਅਗੇਤਰ',
'withoutinterwiki-submit'  => 'ਵਿਖਾਓ',

'fewestrevisions' => 'ਸਭ ਤੋਂ ਘੱਟ ਰੀਵਿਜ਼ਨਾਂ ਵਾਲ਼ੇ ਸਫ਼ੇ',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|ਬਾਈਟ|ਬਾਈਟ}}',
'ncategories'             => '$1 {{PLURAL:$1|ਕੈਟੇਗਰੀ|ਕੈਟੇਗਰੀਆਂ}}',
'nlinks'                  => '$1 {{PLURAL:$1|ਲਿੰਕ|ਲਿੰਕ}}',
'nmembers'                => '$1 {{PLURAL:$1|ਮੈਂਬਰ|ਮੈਂਬਰਾਂ}}',
'nrevisions'              => '$1 {{PLURAL:$1|ਰੀਵਿਜ਼ਨ|ਰੀਵਿਜ਼ਨਾਂ}}',
'nviews'                  => '$1 {{PLURAL:$1|ਫੇਰੀ|ਫੇਰੀਆਂ}}',
'nimagelinks'             => '$1 {{PLURAL:$1|ਸਫ਼ੇ|ਸਫ਼ਿਆਂ}} ’ਤੇ ਵਰਤਿਆ ਹੋਇਆ',
'ntransclusions'          => '$1 {{PLURAL:$1|ਸਫ਼ੇ|ਸਫ਼ਿਆਂ}} ’ਤੇ ਵਰਤਿਆ ਹੋਇਆ',
'specialpage-empty'       => 'ਇਸ ਰਿਪੋਟ ਦਾ ਕੋਈ ਨਤੀਜਾ ਨਹੀਂ ਹੈ।',
'lonelypages'             => 'ਯਤੀਮ ਸਫ਼ੇ',
'uncategorizedpages'      => 'ਬਗ਼ੈਰ ਕੈਟੇਗਰੀਆਂ ਵਾਲ਼ੇ ਸਫ਼ੇ',
'uncategorizedcategories' => 'ਬਗ਼ੈਰ ਕੈਟੇਗਰੀਆਂ ਵਾਲ਼ੀਆਂ ਕੈਟੇਗਰੀਆਂ',
'uncategorizedimages'     => 'ਬਗ਼ੈਰ ਕੈਟੇਗਰੀਆਂ ਵਾਲ਼ੀਆਂ ਫ਼ਾਈਲਾਂ',
'uncategorizedtemplates'  => 'ਬਗ਼ੈਰ ਕੈਟੇਗਰੀਆਂ ਵਾਲ਼ੇ ਸਾਂਚੇ',
'unusedcategories'        => 'ਅਣਵਰਤੀਆਂ ਕੈਟਾਗਰੀਆਂ',
'unusedimages'            => 'ਅਣਵਰਤੀਆਂ ਫਾਇਲਾਂ',
'popularpages'            => 'ਹਰਮਨਪਿਆਰੇ ਸਫ਼ੇ',
'wantedcategories'        => 'ਚਾਹੀਦੀਆਂ ਕੈਟੇਗਰੀਆਂ',
'wantedpages'             => 'ਚਾਹੀਦੇ ਸਫ਼ੇ',
'wantedfiles'             => 'ਚਾਹੀਦੀਆਂ ਫਾਇਲਾਂ',
'wantedtemplates'         => 'ਚਾਹੀਦੇ ਟੈਪਲੇਟ',
'mostcategories'          => 'ਸਭ ਤੋਂ ਵੱਧ ਕੈਟੇਗਰੀਆਂ ਵਾਲ਼ੇ ਸਫ਼ੇ',
'prefixindex'             => 'ਇਸ ਅਗੇਤਰ ਵਾਲੇ ਸਾਰੇ ਸਫ਼ੇ',
'shortpages'              => 'ਛੋਟੇ ਸਫ਼ੇ',
'longpages'               => 'ਲੰਮੇ ਸਫ਼ੇ',
'protectedpages'          => 'ਸੁਰੱਖਿਅਤ ਸਫ਼ੇ',
'protectedtitles'         => 'ਸੁਰੱਖਿਅਤ ਸਿਰਲੇਖ',
'protectedtitlestext'     => 'ਹੇਠ ਲਿਖੇ ਸਿਰਲੇਖਾਂ ਨੂੰ ਬਣਾਉਣ ਤੋਂ ਸੁਰੱਖਿਅਤ ਕੀਤਾ ਹੋਇਆ ਹੈ।',
'listusers'               => 'ਯੂਜ਼ਰ ਲਿਸਟ',
'listusers-editsonly'     => 'ਸਿਰਫ਼ ਸੋਧਾਂ ਵਾਲੇ ਵਰਤੋਂਕਾਰ ਵਿਖਾਓ',
'listusers-creationsort'  => 'ਬਣਾਉਣ ਦੀ ਮਿਤੀ ਮੁਤਾਬਕ ਤਰਤੀਬ ਵਿਚ ਕਰੋ',
'usercreated'             => '$1 ਨੂੰ $2 ’ਤੇ {{GENDER:$3|ਬਣਾਇਆ}}',
'newpages'                => 'ਨਵੇਂ ਸਫ਼ੇ',
'newpages-username'       => 'ਵਰਤੋਂਕਾਰ ਨਾਂ:',
'ancientpages'            => 'ਸਭ ਤੋਂ ਪੁਰਾਣੇ ਸਫ਼ੇ',
'move'                    => 'ਸਿਰਲੇਖ ਬਦਲੋ',
'movethispage'            => 'ਇਹ ਸਫ਼ਾ ਭੇਜੋ',
'unusedcategoriestext'    => 'ਇਹ ਕੈਟੇਗਰੀ ਸਫ਼ੇ ਮੌਜੂਦ ਹਨ ਹਾਲਾਂਕਿ ਕਿਸੇ ਵੀ ਸਫ਼ੇ ਜਾਂ ਕੈਟੇਗਰੀ ਨੇ ਇਹਨਾਂ ਦੀ ਵਰਤੋਂ ਨਹੀਂ ਕੀਤੀ।',
'notargettitle'           => 'ਕੋਈ ਨਿਸ਼ਾਨਾ ਨਹੀਂ',
'nopagetitle'             => 'ਕੋਈ ਅਜਿਹਾ ਨਿਸ਼ਾਨਾ ਸਫ਼ਾ ਨਹੀਂ ਹੈ',
'pager-newer-n'           => '{{PLURAL:$1|1 ਨਵਾਂ|$1 ਨਵੇਂ}}',
'pager-older-n'           => '{{PLURAL:$1|1 ਪੁਰਾਣਾ|$1 ਪੁਰਾਣੇ}}',

# Book sources
'booksources'               => 'ਪੁਸਤਕਾਂ ਦੇ ਸਰੋਤ',
'booksources-search-legend' => 'ਕਿਤਾਬਾਂ ਦੇ ਸਰੋਤ ਖੋਜੋ',
'booksources-go'            => 'ਜਾਓ',
'booksources-invalid-isbn'  => 'ਦਿੱਤਾ ਗਿਆ ISBN ਸਹੀ ਨਹੀਂ ਲਗਦਾ, ਅਸਲੀ ਸਰੋਤ ਤੋਂ ਨਕਲ ਕਰਦੇ ਵਕਤ ਹੋਈਆਂ ਗ਼ਲਤੀਆਂ ਜਾਂਚੋ।',

# Special:Log
'specialloguserlabel'  => 'ਕਰਤਾ:',
'speciallogtitlelabel' => 'ਸਿਰਲੇਖ:',
'log'                  => 'ਚਿੱਠੇ',
'all-logs-page'        => 'ਸਾਰੇ ਆਮ ਚਿੱਠੇ',
'logempty'             => 'ਚਿੱਠੇ ’ਚ ਮੇਲ ਖਾਂਦੀ ਕੋਈ ਚੀਜ਼ ਨਹੀਂ ਹੈ।',
'log-title-wildcard'   => 'ਇਸ ਲਿਖਤ ਨਾਲ਼ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੇ ਸਿਰਲੇਖ ਖੋਜੋ',

# Special:AllPages
'allpages'          => 'ਸਭ ਸਫ਼ੇ',
'alphaindexline'    => '$1 ਤੋਂ $2',
'nextpage'          => 'ਅਗਲਾ ਸਫ਼ਾ ($1)',
'prevpage'          => 'ਪਿਛਲਾ ਸਫ਼ਾ ($1)',
'allpagesfrom'      => 'ਇਸਤੋਂ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੇ ਸਫ਼ੇ ਵਿਖਾਓ:',
'allpagesto'        => 'ਇਸਤੇ ਖ਼ਤਮ ਹੋਣ ਵਾਲ਼ੇ ਸਫ਼ੇ ਵਖਾਓ:',
'allarticles'       => 'ਸਭ ਸਫ਼ੇ',
'allinnamespace'    => 'ਸਭ ਸਫ਼ੇ ($1 ਨਾਂ-ਥਾਂ)',
'allnotinnamespace' => 'ਸਭ ਸਫ਼ੇ ($1 ਨਾਂ-ਥਾਂ ਵਿਚ ਨਹੀਂ)',
'allpagesprev'      => 'ਪਿੱਛੇ',
'allpagesnext'      => 'ਅੱਗੇ',
'allpagessubmit'    => 'ਜਾਓ',
'allpagesprefix'    => 'ਇਸ ਅਗੇਤਰ ਵਾਲ਼ੇ ਸਫ਼ੇ ਵਖਾਓ:',
'allpages-bad-ns'   => '{{SITENAME}} ’ਤੇ "$1" ਥਾਂ-ਨਾਮ ਨਹੀਂ ਹੈ।',

# Special:Categories
'categories'                    => 'ਸ਼੍ਰੇਣੀਆਂ',
'categoriesfrom'                => 'ਇਸਤੋਂ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੀਆਂ ਕੈਟੇਗਰੀਆਂ ਵਖਾਓ:',
'special-categories-sort-count' => 'ਗਿਣਤੀ ਮੁਤਾਬਕ ਤਰਤੀਬ ਦੇਵੋ',
'special-categories-sort-abc'   => 'ਅੱਖਰਾਂ ਮੁਤਾਬਕ ਤਰਤੀਬ ਦਿਓ',

# Special:DeletedContributions
'deletedcontributions'             => 'ਮਿਟਾਏ ਹੋਏ ਵਰਤੋਂਕਾਰ ਯੋਗਦਾਨ',
'deletedcontributions-title'       => 'ਮਿਟਾਏ ਹੋਏ ਵਰਤੋਂਕਾਰ ਯੋਗਦਾਨ',
'sp-deletedcontributions-contribs' => 'ਯੋਗਦਾਨ',

# Special:LinkSearch
'linksearch'      => 'ਬਾਹਰੀ ਲਿੰਕ ਖੋਜ',
'linksearch-pat'  => 'ਨਮੂਨਾ ਖੋਜੋ:',
'linksearch-ns'   => 'ਨਾਂ-ਥਾਂ:',
'linksearch-ok'   => 'ਖੋਜ',
'linksearch-line' => '$2 ਵਿੱਚ $1 ਬਾਹਰੀ ਸਿਰਨਾਵਾਂ ਹੈ',

# Special:ListUsers
'listusersfrom'      => 'ਇਸਤੋਂ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੇ ਮੈਂਬਰ ਵਖਾਓ:',
'listusers-submit'   => 'ਵਿਖਾਓ',
'listusers-noresult' => 'ਕੋਈ ਵਰਤੋਂਕਾਰ ਨਹੀਂ ਲੱਭਾ।',
'listusers-blocked'  => '(ਪਾਬੰਦੀਸ਼ੁਦਾ)',

# Special:ActiveUsers
'activeusers'            => 'ਚੁਸਤ ਵਰਤੋਂਕਾਰਾਂ ਦੀ ਸੂਚੀ',
'activeusers-intro'      => 'ਇਹ ਓਹਨਾਂ ਮੈਂਬਰਾਂ ਦੀ ਲਿਸਟ ਹੈ ਜਿੰਨ੍ਹਾਂ ਨੇ ਆਖ਼ਰੀ $1 {{PLURAL:$1|ਦਿਨ|ਦਿਨਾਂ}} ਵਿਚ ਕਿਸੇ ਤਰ੍ਹਾਂ ਦਾ ਕੋਈ ਕੰਮ ਕੀਤਾ ਹੈ।',
'activeusers-count'      => 'ਆਖ਼ਰੀ {{PLURAL:$3|ਦਿਨ|$3 ਦਿਨਾਂ}} ਵਿਚ $1 {{PLURAL:$1|ਸੋਧ|ਸੋਧਾਂ}}',
'activeusers-from'       => 'ਇਸਤੋਂ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੇ ਮੈਂਬਰ ਵਖਾਓ:',
'activeusers-hidebots'   => 'ਬੌਟਾਂ ਨੂੰ ਲੁਕਾਓ',
'activeusers-hidesysops' => 'ਪ੍ਰਸ਼ਾਸਕ ਲੁਕਾਓ',
'activeusers-noresult'   => 'ਕੋਈ ਵਰਤੋਂਕਾਰ ਨਹੀਂ ਲੱਭਾ।',

# Special:Log/newusers
'newuserlogpage'     => 'ਬਣਾਏ ਖਾਤਿਆਂ ਦਾ ਚਿੱਠਾ',
'newuserlogpagetext' => 'ਇਹ ਬਣੇ ਮੈਂਬਰਾਂ ਦਾ ਚਿੱਠਾ ਹੈ।',

# Special:ListGroupRights
'listgrouprights'                      => 'ਵਰਤੋਂਕਾਰ ਸਮੂਹਾਂ ਦੇ ਹੱਕ',
'listgrouprights-group'                => 'ਸਮੂਹ',
'listgrouprights-rights'               => 'ਹੱਕ',
'listgrouprights-helppage'             => 'Help:ਸਮੂਹਾਂ ਦੇ ਹੱਕ',
'listgrouprights-members'              => '(ਮੈਂਬਰਾਂ ਦੀ ਸੂਚੀ)',
'listgrouprights-addgroup'             => '{{PLURAL:$2|ਸਮੂਹ}} ਜੋੜੋ: $1',
'listgrouprights-removegroup'          => '{{PLURAL:$2|ਸਮੂਹ}} ਹਟਾਓ: $1',
'listgrouprights-addgroup-all'         => 'ਸਾਰੇ ਸਮੂਹ ਜੋੜੋ',
'listgrouprights-removegroup-all'      => 'ਸਾਰੇ ਸਮੂਹ ਹਟਾਓ',
'listgrouprights-addgroup-self-all'    => 'ਆਪਣੇ ਖਾਤੇ ਵਿਚ ਸਾਰੇ ਸਮੂਹ ਜੋੜੋ',
'listgrouprights-removegroup-self-all' => 'ਆਪਣੇ ਖਾਤੇ ਤੋਂ ਸਾਰੇ ਸਮੂਹ ਹਟਾਓ',

# Email user
'mailnologin'          => 'ਭੇਜਣ ਲਈ ਕੋਈ ਪਤਾ ਨਹੀਂ',
'mailnologintext'      => 'ਦੂਜੇ ਵਰਤੋਂਕਾਰਾਂ ਨੂੰ ਈ-ਮੇਲ ਭੇਜਣ ਲਈ ਤੁਹਾਨੂੰ [[Special:UserLogin|ਦਾਖ਼ਲ]] ਹੋਣਾ ਪਵੇਗਾ ਅਤੇ ਆਪਣੀਆਂ [[Special:Preferences|ਪਸੰਦਾਂ]] ਵਿਚ ਇੱਕ ਸਹੀ ਈ-ਮੇਲ ਪਤਾ ਦੇਣਾ ਪਵੇਗਾ।',
'emailuser'            => 'ਇਸ ਵਰਤੋਂਕਾਰ ਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ',
'emailpage'            => 'ਯੂਜ਼ਰ ਨੂੰ ਈਮੇਲ ਕਰੋ',
'defemailsubject'      => '{{SITENAME}} ਈਮੇਲ',
'usermaildisabled'     => 'ਵਰਤੋਂਕਾਰ ਦੀ ਈ-ਮੇਲ ਬੰਦ ਹੈ',
'usermaildisabledtext' => 'ਇਸ ਵਿਕੀ ’ਤੇ ਤੁਸੀਂ ਦੂਜੇ ਵਰਤੋਂਕਾਰਾਂ ਨੂੰ ਈ-ਮੇਲ ਨਹੀਂ ਭੇਜ ਸਕਦੇ',
'noemailtitle'         => 'ਕੋਈ ਈਮੇਲ ਪਤਾ ਨਹੀਂ',
'noemailtext'          => 'ਇਸ ਵਰਤੋਂਕਾਰ ਨੇ ਸਹੀ ਈ-ਮੇਲ ਪਤਾ ਨਹੀਂ ਦਿੱਤਾ ਹੋਇਆ।',
'nowikiemailtitle'     => 'ਈ-ਮੇਲ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ',
'nowikiemailtext'      => 'ਇਸ ਮੈਂਬਰ ਨੇ ਦੂਜੇ ਮੈਂਬਰਾਂ ਤੋਂ ਈ-ਮੇਲ ਨਾ ਪ੍ਰਾਪਤ ਕਰਨਾ ਚੁਣ ਰੱਖਿਆ ਹੈ।',
'emailnotarget'        => 'ਪ੍ਰਾਪਤ ਕਰਤਾ ਦਾ ਨਾ-ਮੌਜੂਦ ਜਾਂ ਗ਼ਲਤ ਮੈਂਬਰ-ਨਾਂ।',
'emailtarget'          => 'ਪ੍ਰਾਪਤ ਕਰਤਾ ਦਾ ਮੈਂਬਰ-ਨਾਂ ਦਾਖ਼ਲ ਕਰੋ',
'emailusername'        => 'ਵਰਤੋਂਕਾਰ ਨਾਂ:',
'emailusernamesubmit'  => 'ਭੇਜੋ',
'email-legend'         => 'ਕਿਸੇ ਦੂਜੇ {{SITENAME}} ਮੈਂਬਰ ਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ',
'emailfrom'            => 'ਵਲੋਂ:',
'emailto'              => 'ਵੱਲ:',
'emailsubject'         => 'ਵਿਸ਼ਾ:',
'emailmessage'         => 'ਸੁਨੇਹਾ:',
'emailsend'            => 'ਭੇਜੋ',
'emailccme'            => 'ਸੁਨੇਹੇ ਦੀ ਇੱਕ ਕਾਪੀ ਮੈਨੂੰ ਵੀ ਭੇਜੋ।',
'emailccsubject'       => '$1 ਨੂੰ ਭੇਜੇ ਤੁਹਾਡੇ ਸੁਨੇਹੇ ਦੀ ਨਕਲ: $2',
'emailsent'            => 'ਈਮੇਲ ਭੇਜੀ ਗਈ',
'emailsenttext'        => 'ਤੁਹਾਡੀ ਈਮੇਲ ਭੇਜੀ ਗਈ ਹੈ।',
'emailuserfooter'      => 'ਇਹ ਈ-ਮੇਲ $1 ਨੇ {{SITENAME}} ’ਤੇ "ਇਸ ਮੈਂਬਰ ਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ" ਸਹੂਲਤ ਜ਼ਰੀਏ $2 ਨੂੰ ਭੇਜੀ ਸੀ।',

# User Messenger
'usermessage-summary' => 'ਸਿਸਟਮ ਸੁਨੇਹਾ ਛੱਡਿਆ ਜਾ ਰਿਹਾ ਹੈ।',
'usermessage-editor'  => 'ਸਿਸਟਮ ਦੂਤ',

# Watchlist
'watchlist'         => 'ਨਿਗਰਾਨ-ਸੂਚੀ',
'mywatchlist'       => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ',
'watchlistfor2'     => '$1 $2 ਲਈ',
'nowatchlist'       => 'ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਕੋਈ ਚੀਜ਼ ਨਹੀਂ ਹੈ।',
'watchlistanontext' => 'ਆਪਣੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚਲੀਆਂ ਚੀਜ਼ਾਂ ਵੇਖਣ ਜਾਂ ਸੋਧਣ ਲਈ ਮਿਹਰਬਾਨੀ ਕਰਕੇ $1।',
'watchnologin'      => 'ਲਾਗਇਨ ਨਹੀਂ',
'watchnologintext'  => 'ਆਪਣੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਫੇਰ-ਬਦਲ ਕਰਨ ਲਈ ਤੁਹਾਨੂੰ [[Special:UserLogin|ਲਾਗਇਨ]] ਕਰਨਾ ਪਵੇਗਾ।',
'addwatch'          => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ’ਚ ਜੋੜੋ',
'addedwatchtext'    => "ਪੰਨਾ \"[[:\$1]]\" ਤੁਹਾਡੀ [[Special:Watchlist|ਧਿਆਨਸੂਚੀ]] ’ਚ ਜੁੜ ਚੁੱਕਾ ਹੈ।
ਇਸ ਅਤੇ ਇਸਦੇ ਚਰਚਾ ਪੰਨੇ ’ਚ ਹੋਈਆਂ ਬਦਲੀਆਂ ਓਥੇ ਵਖਾਈ ਦੇਣਗੀਆਂ ਅਤੇ ਵੇਖਣ ਦੀ ਸੌਖ ਲਈ [[Special:RecentChanges|ਹਾਲ ਹੀ ’ਚ ਹੋਈਆਂ ਬਦਲੀਆਂ]] ਵਿੱਚ ਇਹ ਪੰਨਾ '''ਗੂੜ੍ਹਾ''' ਦਿਖਾਈ ਦੇਵੇਗਾ।",
'removewatch'       => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ’ਚੋਂ ਹਟਾਓ',
'removedwatchtext'  => 'ਸਫ਼ਾ "[[:$1]]" [[Special:Watchlist|ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ]] ’ਚੋਂ ਹਟ ਚੁੱਕਾ ਹੈ।',
'watch'             => 'ਨਿਗਰਾਨੀ ਰੱਖੋ',
'watchthispage'     => "ਇਸ ਸਫ਼ੇ 'ਤੇ ਨਿਗਰਾਨੀ ਰੱਖੋ",
'unwatch'           => 'ਨਿਗਰਾਨੀ ਹਟਾਓ',
'unwatchthispage'   => 'ਨਜ਼ਰ ਰੱਖਣੀ ਬੰਦ ਕਰੋ',
'notanarticle'      => 'ਕੋਈ ਸਮੱਗਰੀ ਸਫ਼ਾ ਨਹੀਂ ਹੈ',
'notvisiblerev'     => 'ਇੱਕ ਵੱਖਰੇ ਮੈਂਬਰ ਦੀ ਬਣਾਈ ਆਖ਼ਰੀ ਰੀਵਿਜ਼ਨ ਮਿਟਾਈ ਜਾ ਚੁੱਕੀ ਹੈ',
'watchnochange'     => 'ਵਖਾਏ ਜਾ ਰਹੇ ਸਮੇਂ ਅੰਦਰ ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚਲਾ ਕੋਈ ਵੀ ਸਫ਼ਾ ਸੋਧਿਆ ਨਹੀਂ ਗਿਆ।',
'watchlist-details' => 'ਗੱਲ-ਬਾਤ ਸਫ਼ੇ ਨਾ ਗਿਣਦੇ ਹੋਏ, ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਸੂਚੀ ਵਿਚ{{PLURAL:$1|$1 ਸਫ਼ਾ ਹੈ|$1 ਸਫ਼ੇ ਹਨ}}।',
'watchlistcontains' => 'ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ $1 {{PLURAL:$1|ਸਫ਼ਾ ਹੈ|ਸਫ਼ੇ ਹਨ}}।',
'wlnote'            => "$3, $4 ਮੁਤਾਬਕ ਆਖ਼ਰੀ {{PLURAL:$2|ਘੰਟੇ|'''$2''' ਘੰਟਿਆਂ}} ਵਿਚ {{PLURAL:
$1|ਤਬਦੀਲੀ ਹੋਈ|'''$1''' ਤਬਦੀਲੀਆਂ ਹੋਈਆਂ}}, ਹੇਠਾਂ ਵੇਖੋ।",
'wlshowlast'        => 'ਪਿਛਲੇ $1 ਘੰਟੇ $2 ਦਿਨ $3 ਵਖਾਓ',
'watchlist-options' => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਦੀਆਂ ਚੋਣਾਂ',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'ਨਿਗ੍ਹਾ (ਵਾਚ) ਰੱਖੀ ਜਾ ਰਹੀ ਹੈ...',
'unwatching' => 'ਨਿਗ੍ਹਾ ਰੱਖਣੀ (ਵਾਚ) ਬੰਦ ਕੀਤੀ ਜਾ ਰਹੀ ਹੈ..',

'enotif_newpagetext'           => 'ਇਹ ਨਵਾਂ ਪੇਜ ਹੈ।',
'enotif_impersonal_salutation' => '{{SITENAME}} ਯੂਜ਼ਰ',
'changed'                      => 'ਬਦਲਿਆ',
'created'                      => 'ਬਣਾਇਆ',
'enotif_lastvisited'           => 'ਤੁਹਾਡੀ ਆਖ਼ਰੀ ਆਮਦ ਤੋਂ ਲੈ ਕੇ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ ਵੇਖਣ ਲਈ $1 ਵੇਖੋ।',
'enotif_lastdiff'              => 'ਇਸ ਤਬਦੀਲੀ ਨੂੰ ਵੇਖਣ ਲਈ $1 ਵੇਖੋ।',
'enotif_anon_editor'           => 'ਗੁਮਨਾਮ ਵਰਤੋਂਕਾਰ $1',

# Delete
'deletepage'             => 'ਸਫ਼ਾ ਹਟਾਓ',
'confirm'                => 'ਪੁਸ਼ਟੀ',
'excontent'              => "ਸਮੱਗਰੀ ਸੀ: '$1'",
'exbeforeblank'          => 'ਖ਼ਾਲੀ ਕਰਨ ਤੋਂ ਪਹਿਲਾਂ ਸਮੱਗਰੀ ਸੀ: "$1"',
'exblank'                => 'ਪੇਜ ਖਾਲੀ ਹੈ',
'delete-confirm'         => '"$1" ਹਟਾਓ',
'delete-legend'          => 'ਹਟਾਓ',
'historywarning'         => "'''ਖ਼ਬਰਦਾਰ:''' ਜੋ ਸਫ਼ਾ ਤੁਸੀਂ ਮਿਟਾਉਣ ਜਾ ਰਹੇ ਹੋ ਉਸਦਾ ਅਤੀਤ ਤਕਰੀਬਨ $1 {{PLURAL:$1|ਰੀਵਿਜ਼ਨ|ਰੀਵਿਜ਼ਨਾਂ}} ਦਾ ਹੈ:",
'actioncomplete'         => 'ਕਾਰਵਾਈ ਪੂਰੀ ਹੋਈ',
'actionfailed'           => 'ਕਾਰਵਾਈ ਨਾਕਾਮ',
'deletedtext'            => '"$1" ਮਿਟਾਇਆ ਜਾ ਚੁੱਕਾ ਹੈ।
ਤਾਜ਼ੀਆਂ ਮਿਟਾਉਣਾਂ ਦੇ ਰਿਕਾਰਡ ਲਈ $2 ਵੇਖੋ।',
'dellogpage'             => 'ਹਟਾਉਣ ਦਾ ਚਿੱਠਾ',
'dellogpagetext'         => 'ਹੇਠਾਂ ਸਭ ਤੋਂ ਤਾਜ਼ਾ ਮਿਟਾਉਣਾਂ ਦੀ ਲਿਸਟ ਹੈ।',
'deletionlog'            => 'ਮਿਟਾਉਣ ਦਾ ਚਿੱਠਾ',
'reverted'               => 'ਪੁਰਾਣੀ ਰੀਵਿਜਨ ਵੱਲ ਉਲਟਾਇਆ ਗਿਆ',
'deletecomment'          => 'ਕਾਰਨ:',
'deleteotherreason'      => 'ਹੋਰ/ਵਾਧੂ ਕਾਰਨ:',
'deletereasonotherlist'  => 'ਹੋਰ ਕਾਰਨ',
'deletereason-dropdown'  => '*ਮਿਟਾਉਣ ਦੇ ਆਮ ਕਾਰਨ
**ਲੇਖਕ ਦੇ ਕਹਿਣ ’ਤੇ
**ਕਾਪੀਰਾਈਟ ਦੀ ਉਲੰਘਣਾ
**ਵੰਦਾਲਿਜ਼ਮ',
'delete-edit-reasonlist' => 'ਮਿਟਾਉਣ ਦੇ ਕਾਰਨ ਸੋਧੋ',

# Rollback
'rollback'       => 'ਸੋਧਾਂ ਵਾਪਸ ਮੋੜੋ',
'rollback_short' => 'ਰੋਲਬੈਕ',
'rollbacklink'   => 'ਵਾਪਸ ਮੋੜੋ',
'rollbackfailed' => 'ਰੋਲਬੈਕ ਫੇਲ੍ਹ',
'editcomment'    => "ਸੋਧ ਸਾਰ ਸੀ: \"''\$1''\"",

# Edit tokens
'sessionfailure-title' => 'ਇਜਲਾਸ ਫੇਲ੍ਹ',

# Protect
'protectlogpage'              => 'ਸੁਰੱਖਿਆ ਚਿੱਠਾ',
'protectedarticle'            => '"[[$1]]" ਸੁਰੱਖਿਅਤ ਕੀਤਾ',
'modifiedarticleprotection'   => '"[[$1]]" ਦੀ ਸੁਰੱਖਿਆ ਬਦਲੀ',
'unprotectedarticle'          => '"[[$1]]" ਤੋਂ ਸੁਰੱਖਿਆ ਹਟਾਈ',
'protect-title'               => '"$1" ਦੀ ਸੁਰੱਖਿਆ ਬਦਲੋ',
'protect-title-notallowed'    => '"$1" ਦਾ ਸੁਰੱਖਿਆ ਦਰਜਾ ਵੇਖੋ',
'prot_1movedto2'              => '[[$1]] ਨੂੰ [[$2]] ’ਤੇ ਭੇਜਿਆ',
'protect-badnamespace-title'  => 'ਗ਼ੈਰ-ਸੁਰੱਖਿਆਯੋਗ ਨਾਂ-ਥਾਂ',
'protect-badnamespace-text'   => 'ਇਸ ਥਾਂ-ਨਾਮ ਵਿਚਲੇ ਸਫ਼ੇ ਸੁਰੱਖਿਅਤ ਨਹੀਂ ਕੀਤੇ ਜਾ ਸਕਦੇ।',
'protect-legend'              => 'ਸੁਰੱਖਿਆ ਤਸਦੀਕੀ',
'protectcomment'              => 'ਕਾਰਨ:',
'protectexpiry'               => 'ਮਿਆਦ:',
'protect_expiry_invalid'      => 'ਖ਼ਤਮ ਹੋਣ ਦਾ ਸਮਾਂ ਗ਼ਲਤ ਹੈ।',
'protect_expiry_old'          => 'ਖ਼ਤਮ ਹੋਣ ਦਾ ਸਮਾਂ ਗੁਜ਼ਰਿਆ ਹੋਇਆ ਹੈ।',
'protect-text'                => "ਇੱਥੇ ਸ਼ਾਇਦ ਤੁਸੀਂ ਸਫ਼ਾ '''$1''' ਦਾ ਸੁਰੱਖਿਆ ਦਰਜਾ ਵੇਖ ਅਤੇ ਬਦਲ ਸਕਦੇ ਹੋ।",
'protect-default'             => 'ਸਭ ਵਰਤੋਂਕਾਰ ਮਨਜ਼ੂਰ',
'protect-fallback'            => 'ਸਿਰਫ਼ "$1" ਹੱਕਾਂ ਵਾਲੇ ਵਰਤੋਂਕਾਰਾਂ ਨੂੰ ਇਜਾਜ਼ਤ ਦਿਓ',
'protect-level-autoconfirmed' => 'ਸਿਰ਼ਫ ਖ਼ੁਦ-ਤਸਦੀਕਸ਼ੁਦਾ ਵਰਤੋਂਕਾਰਾਂ ਨੂੰ ਇਜਾਜ਼ਤ ਦਿਓ',
'protect-level-sysop'         => 'ਕੇਵਲ ਪ੍ਰਸ਼ਾਸਕਾਂ ਨੂੰ ਇਜਾਜ਼ਤ ਦਿਓ',
'protect-summary-cascade'     => 'ਕਾਸਕੇਡਿੰਗ',
'protect-expiry-indefinite'   => 'ਅਣਮਿੱਥਿਆ',
'protect-cascade'             => 'ਇਸ ਸਫ਼ੇ ਵਿਚ ਸ਼ਾਮਲ ਸਫ਼ੇ ਸੁਰੱਖਿਅਤ ਕਰੋ (ਕਾਸਕੇਡਿੰਗ ਸੁਰੱਖਿਆ)',
'protect-cantedit'            => 'ਤੁਸੀਂ ਇਸ ਸਫ਼ੇ ਦਾ ਸੁਰੱਖਿਆ ਦਰਜਾ ਨਹੀਂ ਬਦਲ ਸਕਦੇ ਕਿਉਂਕਿ ਤੁਹਾਨੂੰ ਇਸਨੂੰ ਸੋਧਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'protect-othertime'           => 'ਹੋਰ ਸਮਾਂ:',
'protect-othertime-op'        => 'ਹੋਰ ਸਮਾਂ',
'protect-existing-expiry'     => 'ਖ਼ਤਮ ਹੋਣ ਦਾ ਮੌਜੂਦਾ ਸਮਾਂ: $2, $3',
'protect-otherreason'         => 'ਹੋਰ/ਵਾਧੂ ਕਾਰਨ:',
'protect-otherreason-op'      => 'ਹੋਰ ਕਾਰਨ',
'protect-edit-reasonlist'     => 'ਸੁਰੱਖਿਆ ਦੇ ਕਾਰਨ ਸੋਧੋ',
'protect-expiry-options'      => '੧ ਘੰਟਾ:1 hour,੧ ਦਿਨ:1 day,੧ ਹਫ਼ਤਾ:1 week,੨ ਹਫ਼ਤੇ:2 weeks,੧ ਮਹੀਨਾ:1 month,੩ ਮਹੀਨੇ:3 months,੬ ਮਹੀਨੇ:6 months,੧ ਸਾਲ:1 year,ਬੇਹੱਦ:infinite',
'restriction-type'            => 'ਅਧਿਕਾਰ:',
'restriction-level'           => 'ਪਾਬੰਦੀ ਪੱਧਰ:',
'minimum-size'                => 'ਘੱਟੋ-ਘੱਟ ਆਕਾਰ',
'maximum-size'                => 'ਵੱਧੋ-ਵੱਧ ਆਕਾਰ:',
'pagesize'                    => '(ਬਾਈਟ)',

# Restrictions (nouns)
'restriction-edit'   => 'ਸੋਧ',
'restriction-move'   => 'ਭੇਜੋ',
'restriction-create' => 'ਬਣਾਓ',
'restriction-upload' => 'ਅੱਪਲੋਡ',

# Restriction levels
'restriction-level-sysop'         => 'ਪੂਰਾ ਸੁਰੱਖਿਅਤ',
'restriction-level-autoconfirmed' => 'ਅਰਧ-ਸੁਰੱਖਿਅਤ',
'restriction-level-all'           => 'ਕੋਈ ਲੈਵਲ',

# Undelete
'undelete'                  => 'ਮਿਟਾਏ ਹੋਏ ਸਫ਼ੇ ਵੇਖੋ',
'undeletepage'              => 'ਮਿਟਾਏ ਹੋਏ ਸਫ਼ੇ ਵੇਖੋ ਅਤੇ ਮੁੜ ਬਹਾਲ ਕਰੋ',
'viewdeletedpage'           => 'ਮਿਟਾਏ ਹੋਏ ਸਫ਼ੇ ਵੇਖੋ',
'undelete-fieldset-title'   => 'ਰੀਵਿਜ਼ਨਾਂ ਮੁੜ ਬਹਾਲ ਕਰੋ',
'undelete-nodiff'           => 'ਕੋਈ ਪਿਛਲੀ ਰੀਵਿਜ਼ਨ ਨਹੀਂ ਲੱਭੀ',
'undeletebtn'               => 'ਮੁੜ-ਸਟੋਰ',
'undeletelink'              => 'ਵੇਖੋ/ਮੁੜ ਬਹਾਲ ਕਰੋ',
'undeleteviewlink'          => 'ਵੇਖੋ',
'undeletereset'             => 'ਮੁੜ-ਸੈੱਟ',
'undeletecomment'           => 'ਕਾਰਨ:',
'undelete-header'           => 'ਤਾਜ਼ੇ ਹਟਾਏ ਗਏ ਪੰਨਿਆਂ ਲਈ  [[Special:Log/delete|ਹਟਾਇਆ ਚਿੱਠਾ]] ਵੇਖੋ।',
'undelete-search-title'     => 'ਮਿਟਾਏ ਹੋਏ ਸਫ਼ੇ ਖੋਜੋ',
'undelete-search-box'       => 'ਮਿਟਾਏ ਹੋਏ ਸਫ਼ੇ ਖੋਜੋ',
'undelete-search-prefix'    => 'ਇਸ ਨਾਲ਼ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲੇ ਸਫ਼ੇ ਵਿਖਾਓ:',
'undelete-search-submit'    => 'ਖੋਜ',
'undelete-error'            => 'ਸਫ਼ੇ ਨੂੰ ਅਣ-ਮਿਟਿਆ ਕਰਨ ਵਿਚ ਗ਼ਲਤੀ',
'undelete-show-file-submit' => 'ਹਾਂ',

# Namespace form on various pages
'namespace'             => 'ਨਾਂ-ਥਾਂ:',
'invert'                => 'ਉਲਟ ਚੋਣ',
'namespace_association' => 'ਸਬੰਧਤ ਨਾਂ-ਥਾਂ',
'blanknamespace'        => '(ਮੁੱਖ)',

# Contributions
'contributions'       => 'ਵਰਤੋਂਕਾਰ ਦਾ ਯੋਗਦਾਨ',
'contributions-title' => '$1 ਲਈ ਵਰਤੋਂਕਾਰ ਯੋਗਦਾਨ',
'mycontris'           => 'ਯੋਗਦਾਨ',
'contribsub2'         => '$1 ($2) ਲਈ',
'uctop'               => '(ਮੌਜੂਦਾ)',
'month'               => 'ਇਸ (ਅਤੇ ਪਿਛਲੇ) ਮਹੀਨੇ ਤੋਂ :',
'year'                => 'ਇਸ (ਅਤੇ ਪਿਛਲੇ) ਸਾਲ ਤੋਂ :',

'sp-contributions-newbies'             => 'ਸਿਰਫ਼ ਨਵੇਂ ਵਰਤੋਂਕਾਰਾਂ ਦੇ ਯੋਗਦਾਨ ਵਖਾਓ',
'sp-contributions-newbies-sub'         => 'ਨਵੇਂ ਖਾਤਿਆਂ ਲਈ',
'sp-contributions-blocklog'            => 'ਪਾਬੰਦੀ ਚਿੱਠਾ',
'sp-contributions-deleted'             => 'ਮਿਟਾਏ ਗਏ ਵਰਤੋਂਕਾਰ ਯੋਗਦਾਨ',
'sp-contributions-uploads'             => 'ਅੱਪਲੋਡ',
'sp-contributions-logs'                => 'ਚਿੱਠੇ',
'sp-contributions-talk'                => 'ਗੱਲ-ਬਾਤ',
'sp-contributions-userrights'          => 'ਵਰਤੋਂਕਾਰ ਦੇ ਹੱਕਾਂ ਦਾ ਪ੍ਰਬੰਧ',
'sp-contributions-blocked-notice'      => 'ਇਹ ਵਰਤੋਂਕਾਰ ਇਸ ਵੇਲ਼ੇ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੈ।
ਪਾਬੰਦੀ ਚਿੱਠੇ ਦਾ ਤਾਜ਼ਾ ਦਾਖ਼ਲਾ ਹਵਾਲੇ ਲਈ ਹੇਠਾਂ ਦਿੱਤਾ ਗਿਆ ਹੈ:',
'sp-contributions-blocked-notice-anon' => 'ਇਹ IP ਪਤਾ ਇਸ ਵੇਲ਼ੇ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੈ।
ਪਾਬੰਦੀ ਚਿੱਠੇ ਦਾ ਤਾਜ਼ਾ ਦਾਖ਼ਲਾ ਹਵਾਲੇ ਲਈ ਹੇਠਾਂ ਦਿੱਤਾ ਗਿਆ ਹੈ:',
'sp-contributions-search'              => 'ਯੋਗਦਾਨ ਖੋਜੋ',
'sp-contributions-username'            => 'IP ਪਤਾ ਜਾਂ ਵਰਤੋਂਕਾਰਨਾਮ:',
'sp-contributions-toponly'             => 'ਸਿਰਫ ਉਹ ਸੋਧਾਂ ਵਿਖਾਓ ਜੋ ਸਭ ਤੋਂ ਤਾਜ਼ੀਆਂ ਰਿਵੀਜਨਾਂ ਹਨ',
'sp-contributions-submit'              => 'ਖੋਜ',

# What links here
'whatlinkshere'            => 'ਇੱਥੇ ਕੀ ਆ ਕੇ ਜੁੜਦਾ ਹੈ',
'whatlinkshere-title'      => '$1 ਨਾਲ ਜੋੜਨ ਵਾਲੇ ਸਫ਼ੇ',
'whatlinkshere-page'       => 'ਸਫ਼ਾ:',
'linkshere'                => "ਇਹ ਪੰਨੇ '''[[:$1]]''' ਨਾਲ ਜੋੜਦੇ ਹਨ:",
'nolinkshere'              => "ਕੋਈ ਵੀ ਸਫ਼ਾ '''[[:$1]]''' ਨਾਲ ਨਹੀਂ ਜੋੜਦਾ।",
'isredirect'               => 'ਰੀਡਿਰੈਕਟ ਸਫ਼ਾ',
'istemplate'               => 'ਟਾਕਰਾ ਕਰੋ',
'isimage'                  => 'ਫ਼ਾਈਲ ਲਿੰਕ',
'whatlinkshere-prev'       => '{{PLURAL:$1|ਪਿਛਲਾ|ਪਿਛਲੇ $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|ਅਗਲਾ|ਅਗਲੇ $1}}',
'whatlinkshere-links'      => '← ਕੜੀਆਂ',
'whatlinkshere-hideredirs' => 'ਅਸਿੱਧੇ ਰਾਹ $1',
'whatlinkshere-hidetrans'  => '$1 ਇੱਥੇ ਕੀ ਕੀ ਜੁੜਦਾ ਹੈ।',
'whatlinkshere-hidelinks'  => '$1 ਲਿੰਕ',
'whatlinkshere-hideimages' => 'ਫ਼ਾਈਲ ਲਿੰਕ $1',
'whatlinkshere-filters'    => 'ਫਿਲਟਰ',

# Block/unblock
'block'                      => "ਵਰਤੋਂਕਾਰ 'ਤੇ ਪਾਬੰਦੀ ਲਾਓ",
'unblock'                    => "ਵਰਤੋਂਕਾਰ 'ਤੇ ਲੱਗੀ ਪਾਬੰਦੀ ਹਟਾਓ",
'blockip'                    => 'ਵਰਤੋਂਕਾਰ ’ਤੇ ਪਾਬੰਦੀ ਲਾਓ',
'blockip-title'              => "ਵਰਤੋਂਕਾਰ 'ਤੇ ਪਾਬੰਦੀ ਲਾਓ",
'blockip-legend'             => "ਵਰਤੋਂਕਾਰ 'ਤੇ ਪਾਬੰਦੀ ਲਾਓ",
'ipadressorusername'         => 'IP ਐਡਰੈਸ ਜਾਂ ਯੂਜ਼ਰ ਨਾਂ:',
'ipbexpiry'                  => 'ਮਿਆਦ:',
'ipbreason'                  => 'ਕਾਰਨ:',
'ipbreasonotherlist'         => 'ਹੋਰ ਕਾਰਨ',
'ipbcreateaccount'           => "ਖਾਤਾ ਬਣਾਉਣ 'ਤੇ ਰੋਕ ਲਾਓ",
'ipbemailban'                => 'ਵਰਤੋਂਕਾਰ ਉੱਤੇ ਈਮੇਲ ਭੇਜਣ ਦੀ ਰੋਕ ਲਾਓ',
'ipbsubmit'                  => 'ਇਹ ਯੂਜ਼ਰ ਲਈ ਪਾਬੰਦੀ',
'ipbother'                   => 'ਹੋਰ ਟਾਈਮ:',
'ipboptions'                 => '2 ਘੰਟੇ:2 hours, 1 ਦਿਨ:1 day, 3 ਦਿਨ:3 days, 1 ਹਫ਼ਤਾ:1 week, 2 ਹਫ਼ਤੇ:2 weeks, 2 ਮਹੀਨਾ:1 month, 3 ਮਹੀਨੇ:3 months, 6 ਮਹੀਨੇ:6 months, 1 ਸਾਲ:1 year, ਹਮੇਸ਼ਾਂ ਲਈ:infinite',
'ipbotheroption'             => 'ਹੋਰ',
'ipbotherreason'             => 'ਹੋਰ/ਆਮ ਕਾਰਨ:',
'ipbhidename'                => 'ਸੋਧਾਂ ਅਤੇ ਕੜੀਆਂ ਤੋਂ ਵਰਤੋਂਕਾਰ ਦਾ ਨਾਂ ਲੁਕਾਓ',
'ipbwatchuser'               => 'ਇਸ ਵਰਤੋਂਕਾਰ ਦੇ ਵਰਤੋਂਕਾਰ ਅਤੇ ਗੱਲ-ਬਾਤ ਸਫ਼ਿਆਂ ਤੇ ਨਜ਼ਰ ਰੱਖੋ',
'ipb-confirm'                => 'ਪਾਬੰਦੀ ਤਸਦੀਕ ਕਰੋ',
'badipaddress'               => 'ਗਲਤ IP ਐਡਰੈੱਸ',
'blockipsuccesssub'          => 'ਪਾਬੰਦੀ ਕਾਮਯਾਬ',
'ipb-blockingself'           => "ਤੁਸੀਂ ਆਪਣੇ ਆਪ 'ਤੇ ਪਾਬੰਦੀ ਲਾਉਣ ਲੱਗੇ ਹੋ! ਕੀ ਤੁਸੀਂ ਸੱਚੀਂ ਇਹ ਕਰਨਾ ਚਾਹੁੰਦੇ ਹੋ?",
'ipb-edit-dropdown'          => 'ਪਾਬੰਦੀ ਲਾਉਣ ਦੇ ਕਾਰਨ ਸੋਧੋ',
'ipb-unblock-addr'           => '$1 ਤੋਂ ਪਾਬੰਦੀ ਹਟਾਓ',
'ipb-unblock'                => 'ਇੱਕ ਯੂਜ਼ਰ ਨਾਂ ਜਾਂ IP ਐਡਰੈੱਸ ਅਣ-ਬਲਾਕ ਕਰੋ',
'ipb-blocklist'              => 'ਮੌਜੂਦਾ ਪਾਬੰਦੀਆਂ ਵੇਖੋ',
'ipb-blocklist-contribs'     => '$1 ਦੇ ਯੋਗਦਾਨ',
'unblockip'                  => 'ਯੂਜ਼ਰ ਅਣ-ਬਲਾਕ ਕਰੋ',
'ipusubmit'                  => 'ਇਹ ਪਾਬੰਦੀ ਹਟਾਓ',
'unblocked'                  => '[[User:$1|$1]] ਪਾਬੰਦੀ ਮੁਕਤ ਹੋ ਚੁੱਕਾ ਹੈ',
'unblocked-range'            => '$1 ਪਾਬੰਦੀ ਮੁਕਤ ਹੋ ਚੁੱਕੀ ਹੈ',
'unblocked-id'               => 'ਪਾਬੰਦੀ $1 ਹਟ ਚੁੱਕੀ ਹੈ',
'blocklist'                  => 'ਪਾਬੰਦੀਸ਼ੁਦਾ ਮੈਂਬਰ',
'ipblocklist'                => 'ਪਾਬੰਦੀਸ਼ੁਦਾ ਵਰਤੋਂਕਾਰ',
'ipblocklist-legend'         => 'ਪਾਬੰਦੀਸ਼ੁਦਾ ਮੈਂਬਰ ਲੱਭੋ',
'blocklist-userblocks'       => 'ਖਾਤਾ ਪਾਬੰਦੀਆਂ ਲੁਕਾਓ',
'blocklist-tempblocks'       => 'ਆਰਜ਼ੀ ਪਾਬੰਦੀਆਂ ਲੁਕਾਓ',
'blocklist-timestamp'        => 'ਵਕਤ ਦੀ ਮੋਹਰ',
'blocklist-target'           => 'ਨਿਸ਼ਾਨਾ',
'blocklist-expiry'           => 'ਮਿਆਦ',
'blocklist-by'               => 'ਪਾਬੰਦੀ ਲਾਉਣ ਵਾਲ਼ਾ ਪ੍ਰਸ਼ਾਸਕ',
'blocklist-params'           => "ਮਾਪਦੰਡਾਂ 'ਤੇ ਪਾਬੰਦੀ ਲਾਓ",
'blocklist-reason'           => 'ਕਾਰਨ',
'ipblocklist-submit'         => 'ਖੋਜ',
'ipblocklist-localblock'     => 'ਸਥਾਨਕ ਪਾਬੰਦੀ',
'ipblocklist-otherblocks'    => 'ਹੋਰ {{PLURAL:$1|ਪਾਬੰਦੀ|ਪਾਬੰਦੀਆਂ}}',
'infiniteblock'              => 'ਬੇਅੰਤ',
'expiringblock'              => 'ਮਿਆਦ ਖ਼ਤਮ $1 ਨੂੰ $2 ’ਤੇ',
'anononlyblock'              => 'anon. ਹੀ',
'noautoblockblock'           => 'ਖ਼ੁਦ ਪਾਬੰਦੀ ਲਾਉਣੀ ਬੰਦ ਕੀਤੀ ਹੋਈ ਹੈ',
'createaccountblock'         => 'ਖਾਤਾ ਬਣਾਉਣਾ ’ਤੇ ਪਾਬੰਦੀ ਹੈ',
'emailblock'                 => 'ਈਮੇਲ ਬਲਾਕ ਹੈ',
'blocklist-nousertalk'       => 'ਆਪਣਾ ਗੱਲ-ਬਾਤ ਸਫ਼ਾ ਨਹੀਂ ਸੋਧ ਸਕਦਾ',
'ipblocklist-empty'          => 'ਪਾਬੰਦੀ ਲਿਸਟ ਖ਼ਾਲੀ ਹੈ।',
'ipblocklist-no-results'     => 'ਦਿੱਤੇ ਗਏ IP ਪਤੇ ਜਾਂ ਮੈਂਬਰ-ਨਾਂ ’ਤੇ ਪਾਬੰਦੀ ਨਹੀਂ ਹੈ।',
'blocklink'                  => 'ਪਾਬੰਦੀ ਲਾਓ',
'unblocklink'                => 'ਪਾਬੰਦੀ ਹਟਾਓ',
'change-blocklink'           => 'ਪਾਬੰਦੀ ਬਦਲੋ',
'contribslink'               => 'ਯੋਗਦਾਨ',
'emaillink'                  => 'ਈ-ਮੇਲ ਭੇਜੋ',
'blocklogpage'               => 'ਪਾਬੰਦੀ ਚਿੱਠਾ',
'blocklog-showlog'           => 'ਇਸ ਮੈਂਬਰ ’ਤੇ ਪਹਿਲਾਂ ਪਾਬੰਦੀ ਲਾਈ ਗਈ ਸੀ।
ਪਾਬੰਦੀ ਦਾ ਚਿੱਠਾ ਹਵਾਲੇ ਲਈ ਹੇਠਾਂ ਦਿੱਤਾ ਗਿਆ ਹੈ:',
'blocklogentry'              => '[[$1]] ’ਤੇ $2 ਲਈ ਪਾਬੰਦੀ ਲਾਈ। $3',
'unblocklogentry'            => '$1 ਤੋਂ ਪਾਬੰਦੀ ਹਟਾਈ',
'block-log-flags-anononly'   => 'ਸਿਰਫ਼ ਗੁੰਮਨਾਮ ਮੈਂਬਰ',
'block-log-flags-nocreate'   => 'ਖਾਤਾ ਬਣਾਉਣ ’ਤੇ ਪਾਬੰਦੀ ਹੈ',
'block-log-flags-nousertalk' => 'ਆਪਣਾ ਗੱਲ-ਬਾਤ ਸਫ਼ਾ ਨਹੀਂ ਸੋਧ ਸਕਦਾ',
'block-log-flags-hiddenname' => 'ਵਰਤੋਂਕਾਰ ਨਾਂ ਲੁਕਾਇਆ ਹੋਇਆ',
'ipb_expiry_invalid'         => 'ਖ਼ਤਮ ਹੋਣ ਦਾ ਸਮਾਂ ਗ਼ਲਤ।',
'ipb_already_blocked'        => '"$1" ਪਹਿਲਾਂ ਹੀ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੈ',
'ipb-needreblock'            => '$1 ਪਹਿਲਾਂ ਹੀ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੈ। ਕੀ ਤੁਸੀਂ ਸੈਟਿੰਗਾਂ ਬਦਲਣੀਆਂ ਚਾਹੁੰਦੇ ਹੋ?',
'ipb-otherblocks-header'     => 'ਹੋਰ {{PLURAL:$1|ਪਾਬੰਦੀ|ਪਾਬੰਦੀਆਂ}}',
'unblock-hideuser'           => 'ਤੁਸੀਂ ਇਸ ਮੈਂਬਰ ’ਤੇ ਪਾਬੰਦੀ ਨਹੀਂ ਲਾ ਸਕਦੇ ਕਿਉਂਕਿ ਇਸਦਾ ਮੈਂਬਰ-ਨਾਂ ਲੁਕਾਇਆ ਹੋਇਆ ਹੈ।',
'ipb_cant_unblock'           => 'ਗ਼ਲਤੀ: ਪਾਬੰਦੀ ਪਤਾ $1 ਨਹੀਂ ਲੱਭਿਆ। ਸ਼ਾਇਦ ਇਹ ਪਹਿਲਾਂ ਹੀ ਪਾਬੰਦੀ-ਮੁਕਤ ਹੋ ਚੁੱਕਾ ਹੈ।',
'blockme'                    => 'ਮੇਰੇ ’ਤੇ ਪਾਬੰਦੀ ਲਾਓ',
'proxyblocksuccess'          => 'ਪੂਰਾ ਹੋਇਆ',
'cant-block-while-blocked'   => 'ਤੁਸੀਂ ਦੂਜੇ ਮੈਂਬਰਾਂ ’ਤੇ ਪਾਬੰਦੀ ਨਹੀਂ ਲਾ ਸਕਦੇ ਜਦੋਂ ਤੁਸੀਂ ਖ਼ੁਦ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੋ।',
'ipbblocked'                 => 'ਤੁਸੀਂ ਦੂਜੇ ਮੈਂਬਰਾਂ ਨੂੰ ਪਾਬੰਦੀਸ਼ੁਦਾ ਜਾਂ ਪਾਬੰਦੀ-ਮੁਕਤ ਨਹੀਂ ਕਰ ਸਕਦੇ ਕਿਉਂਕਿ ਤੁਸੀਂ ਖ਼ੁਦ ਪਾਬੰਦੀਸ਼ੁਦਾ ਹੋ',
'ipbnounblockself'           => 'ਤੁਹਾਨੂੰ ਖ਼ੁਦ ਨੂੰ ਪਾਬੰਦੀ-ਮੁਕਤ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ',

# Developer tools
'lockdb' => 'ਡਾਟਾਬੇਸ ਲਾਕ',

# Move page
'move-page'               => '$1 ਭੇਜੋ',
'move-page-legend'        => 'ਸਫ਼ਾ ਭੇਜੋ',
'movearticle'             => 'ਸਫ਼ਾ ਭੇਜੋ:',
'movenologin'             => 'ਲਾਗਇਨ ਨਹੀਂ ਹੋ',
'movenologintext'         => 'ਇਕ ਸਫ਼ੇ ਦਾ ਸਿਰਲੇਖ ਬਦਲਣ ਲਈ ਤੁਸੀਂ ਰਜਿਸਟਰਡ ਮੈਂਬਰ ਹੋਣੇ ਚਾਹੀਦੇ ਹੋ ਅਤੇ [[Special:UserLogin|ਲਾਗਇਨ]] ਕੀਤਾ ਹੋਣਾ ਚਾਹੀਦਾ ਹੈ।',
'movenotallowedfile'      => 'ਤੁਹਾਨੂੰ ਫ਼ਾਈਲਾਂ ਭੇਜਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'cant-move-user-page'     => 'ਤੁਹਾਨੂੰ ਵਰਤੋਂਕਾਰ ਸਫ਼ਿਆਂ (ਉਪ-ਸਫ਼ਿਆਂ ਤੋਂ ਛੁੱਟ) ਨੂੰ ਭੇਜਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'newtitle'                => 'ਨਵੇਂ ਟਾਈਟਲ ਲਈ:',
'move-watch'              => 'ਸਰੋਤ ਤੇ ਟਾਰਗੇਟ ਸਫ਼ੇ ਉੱਤੇ ਨਿਗਰਾਨੀ ਰੱਖੋ',
'movepagebtn'             => 'ਸਫ਼ਾ ਭੇਜੋ',
'pagemovedsub'            => 'ਭੇਜਣਾ ਸਫ਼ਲ ਰਿਹਾ',
'movepage-moved'          => '\'\'\'"$1" ਨੂੰ  "$2"\'\'\' ਉੱਤੇ ਭੇਜਿਆ',
'movepage-moved-redirect' => 'ਇੱਕ ਰੀਡਿਰੈਕਟ ਬਣਾ ਦਿੱਤਾ ਗਿਆ।',
'articleexists'           => 'ਇਸ ਨਾਮ ਦਾ ਸਫ਼ਾ ਪਹਿਲਾਂ ਹੀ ਮੌਜੂਦ ਹੈ ਜਾਂ ਤੁਹਾਡਾ ਚੁਣਿਆ ਹੋਇਆ ਨਾਮ ਸਹੀ ਨਹੀਂ ਹੈ।
ਮਿਹਰਬਾਨੀ ਕਰਕੇ ਕੋਈ ਹੋਰ ਨਾਮ ਚੁਣੋ।',
'movedto'                 => 'ਭੇਜਿਆ',
'movetalk'                => 'ਨਾਲ਼ ਲੱਗਦਾ ਗੱਲ-ਬਾਤ ਸਫ਼ਾ ਭੇਜੋ',
'movepage-page-moved'     => 'ਸਫ਼ਾ $1 ਨੂੰ $2 ’ਤੇ ਭੇਜਿਆ ਜਾ ਚੁੱਕਾ ਹੈ।',
'movelogpage'             => 'ਸਿਰਲੇਖ ਬਦਲੀ ਦਾ ਚਿੱਠਾ',
'movesubpage'             => '{{PLURAL:$1|ਉਪਸਫ਼ਾ|ਉਪਸਫ਼ੇ}}',
'movenosubpage'           => 'ਇਸ ਸਫ਼ੇ ਵਿਚ ਕੋਈ ਉਪਸਫ਼ੇ ਨਹੀਂ ਹਨ।',
'movereason'              => 'ਕਾਰਨ:',
'revertmove'              => 'ਉਲਟਾਓ',
'delete_and_move'         => 'ਹਟਾਓ ਅਤੇ ਮੂਵ ਕਰੋ',
'delete_and_move_confirm' => 'ਹਾਂ, ਸਫ਼ਾ ਮਿਟਾ ਦੇਵੋ',
'immobile-source-page'    => 'ਇਹ ਸਫ਼ਾ ਭੇਜਣ ਯੋਗ ਨਹੀਂ ਹੈ।',
'move-leave-redirect'     => 'ਪਿੱਛੇ ਇਕ ਰੀਡਿਰੈਕਟ ਛੱਡੋ',

# Export
'export'            => 'ਸਫ਼ੇ ਨਿਰਯਾਤ ਕਰੋ',
'exportall'         => 'ਸਾਰੇ ਸਫ਼ਿਆਂ ਦਾ ਨਿਰਯਾਤ ਕਰੋ',
'exportcuronly'     => 'ਸਿਰਫ਼ ਮੌਜੂਦਾ ਰੀਵਿਜ਼ਨ ਸ਼ਾਮਲ ਕਰੋ, ਸਾਰਾ ਅਤੀਤ ਨਹੀਂ',
'export-submit'     => 'ਐਕਸਪੋਰਟ',
'export-addcattext' => 'ਇਸ ਸ਼੍ਰੇਣੀ ਤੋਂ ਸਫ਼ੇ ਜੋੜੋ',
'export-addcat'     => 'ਜੋੜੋ',
'export-addnstext'  => 'ਇਸ ਥਾਂ-ਨਾਂ ਤੋਂ ਸਫ਼ੇ ਜੋੜੋ:',
'export-addns'      => 'ਜੋੜੋ',
'export-download'   => 'ਫ਼ਾਈਲ ਵਜੋਂ ਸਾਂਭੋ',
'export-templates'  => 'ਫਰਮੇ ਸ਼ਾਮਲ ਕਰੋ',

# Namespace 8 related
'allmessages'                   => 'ਸਿਸਟਮ ਸੁਨੇਹੇ',
'allmessagesname'               => 'ਨਾਂ',
'allmessagesdefault'            => 'ਮੂਲ ਸੁਨੇਹਾ ਲਿਖਤ',
'allmessagescurrent'            => 'ਮੌਜੂਦਾ ਸੁਨੇਹਾ ਲਿਖਤ',
'allmessages-filter-legend'     => 'ਛਾਨਣੀ',
'allmessages-filter-unmodified' => 'ਅਣ-ਬਦਲਿਆ',
'allmessages-filter-all'        => 'ਸਭ',
'allmessages-filter-modified'   => 'ਬਦਲਿਆ ਗਿਆ',
'allmessages-prefix'            => 'ਇਸ ਅਗੇਤਰ ਨਾਲ਼ ਛਾਣੋ:',
'allmessages-language'          => 'ਭਾਸ਼ਾ:',
'allmessages-filter-submit'     => 'ਜਾਓ',

# Thumbnails
'thumbnail-more'  => 'ਵਧਾਓ',
'filemissing'     => 'ਫ਼ਾਈਲ ਗੁੰਮ ਹੈ',
'thumbnail_error' => 'ਨਮੂਨਾ ਬਣਾਉਣ ਵਿੱਚ ਗਲਤੀ ਹੋਈ ਹੈ: $1',

# Special:Import
'import'                     => 'ਸਫ਼ੇ ਮੰਗਾਓ',
'importinterwiki'            => 'ਅੰਤਰ-ਵਿਕੀ ਮੰਗ',
'import-interwiki-source'    => 'ਸਰੋਤ ਵਿਕੀ/ਸਫ਼ਾ:',
'import-interwiki-templates' => 'ਸਾਰੇ ਫਰਮੇ ਸ਼ਾਮਲ ਕਰੋ',
'import-interwiki-submit'    => 'ਮੰਗਾਓ',
'import-upload-filename'     => 'ਫ਼ਾਈਲ ਦਾ ਨਾਂ:',
'import-comment'             => 'ਟਿੱਪਣੀ:',
'importstart'                => 'ਪੇਜ ਇੰਪੋਰਟ ਕੀਤੇ ਜਾ ਰਹੇ ਹਨ...',
'import-revision-count'      => '$1 {{PLURAL:$1|ਰੀਵਿਜ਼ਨ|ਰੀਵਿਜ਼ਨਾਂ}}',
'importnopages'              => 'ਮੰਗਾਉਣ ਲਈ ਕੋਈ ਸਫ਼ੇ ਨਹੀਂ ਹਨ।',
'importfailed'               => 'ਇੰਪੋਰਟ ਫੇਲ੍ਹ: $1',
'importunknownsource'        => 'ਮੰਗਾਉਣ ਦੇ ਸਰੋਤ ਦੀ ਅਣਪਛਾਤੀ ਕਿਸਮ',
'importcantopen'             => 'ਫ਼ਾਈਲ ਮੰਗਾਈ ਨਾ ਜਾ ਸਕੀ',
'importbadinterwiki'         => 'ਗ਼ਲਤ ਅੰਤਰਵਿਕੀ ਕੜੀ',
'importnotext'               => 'ਖ਼ਾਲੀ ਜਾਂ ਕੋਈ ਲਿਖਤ ਨਹੀਂ',
'importsuccess'              => 'ਇੰਪੋਰਟ ਸਫ਼ਲ!',
'importnofile'               => 'ਕੋਈ ਇੰਪੋਰਟ ਫਾਇਲ ਅੱਪਲੋਡ ਨਹੀਂ ਕੀਤੀ।',
'import-noarticle'           => 'ਮੰਗਾਉਣ ਲਈ ਕੋਈ ਸਫ਼ਾ ਨਹੀਂ!',
'import-token-mismatch'      => 'ਇਸ ਇਜਲਾਸ ਦਾ ਡਾਟਾ ਉੱਡ ਗਿਆ।
ਮੁੜ ਕੋਸ਼ਿਸ਼ ਕਰੋ ਜੀ।',
'import-invalid-interwiki'   => 'ਦੱਸੇ ਹੋਏ ਵਿਕੀ ਤੋਂ ਮੰਗਾਇਆ ਨਹੀਂ ਜਾ ਸਕਦਾ।',

# Import log
'importlogpage'                 => 'ਮੰਗਾਉਣ ਦਾ ਚਿੱਠਾ',
'import-logentry-upload-detail' => '$1 ਰੀਵਿਜਨ',

# Tooltip help for the actions
'tooltip-pt-userpage'                 => 'ਤੁਹਾਡਾ ਵਰਤੋਂਕਾਰ ਸਫ਼ਾ',
'tooltip-pt-mytalk'                   => 'ਤੁਹਾਡਾ ਗੱਲ-ਬਾਤ ਸਫ਼ਾ',
'tooltip-pt-anontalk'                 => 'ਇਸ IP ਪਤੇ ਤੋਂ ਹੋਈਆਂ ਸੋਧਾਂ ਬਾਰੇ ਚਰਚਾ',
'tooltip-pt-preferences'              => 'ਤੁਹਾਡੀਆਂ ਪਸੰਦਾਂ',
'tooltip-pt-watchlist'                => "ਉਹਨਾਂ ਸਫ਼ਿਆਂ ਦੀ ਸੂਚੀ ਜਿਹਨਾਂ ਦੀਆਂ ਤਬਦੀਲੀਆਂ 'ਤੇ ਤੁਸੀਂ ਅੱਖ ਰੱਖ ਰਹੇ ਹੋ",
'tooltip-pt-mycontris'                => 'ਤੁਹਾਡੇ ਯੋਗਦਾਨਾਂ ਦੀ ਸੂਚੀ',
'tooltip-pt-login'                    => 'ਤੁਹਾਨੂੰ ਦਾਖ਼ਲ ਹੋਣ ਲਈ ਪ੍ਰੇਰਿਆ ਜਾਂਦਾ ਹੈ; ਪਰ ਇਹ ਕੋਈ ਲਾਜ਼ਮੀ ਨਹੀਂ',
'tooltip-pt-anonlogin'                => 'ਤੁਹਾਨੂੰ ਲਾਗਇਨ ਕਰਨ ਲਈ ਉਤਸ਼ਾਹਿਤ ਕੀਤਾ ਜਾਂਦਾ ਹੈ; ਪਰ ਇਹ ਕੋਈ ਲਾਜ਼ਮੀ ਨਹੀਂ ਹੈ',
'tooltip-pt-logout'                   => 'ਸਾਈਟ ਤੋਂ ਵਿਦਾਈ ਲਓ',
'tooltip-ca-talk'                     => 'ਸਮਗੱਰੀ ਸਫ਼ੇ ਬਾਰੇ ਚਰਚਾ',
'tooltip-ca-edit'                     => 'ਤੁਸੀਂ ਇਹ ਸਫ਼ਾ ਸੋਧ ਸਕਦੇ ਹੋ। ਕਿਰਪਾ ਕਰਕੇ ਤਬਦੀਲੀ ਸਾਂਭਣ ਤੋਂ ਪਹਿਲਾਂ ਝਲਕ ਵੇਖੋ।',
'tooltip-ca-addsection'               => 'ਨਵਾਂ ਭਾਗ ਸ਼ੁਰੂ ਕਰੋ',
'tooltip-ca-viewsource'               => 'ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਹੈ।
ਤੁਸੀਂ ਇਹਦਾ ਸਰੋਤ ਵੇਖ ਸਕਦੇ ਹੋ।',
'tooltip-ca-history'                  => 'ਇਸ ਸਫ਼ੇ ਦੇ ਪਿਛਲੇ ਰੀਵਿਜਨ',
'tooltip-ca-protect'                  => 'ਇਹ ਸਫ਼ਾ ਸੁਰੱਖਿਅਤ ਕਰੋ',
'tooltip-ca-unprotect'                => 'ਇਸ ਸਫ਼ੇ ਦੀ ਸੁਰੱਖਿਆ ਬਦਲੋ',
'tooltip-ca-delete'                   => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਹਟਾਓ',
'tooltip-ca-move'                     => 'ਇਹ ਸਫ਼ਾ ਭੇਜੋ',
'tooltip-ca-watch'                    => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਆਪਣੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਜੋੜੋ',
'tooltip-ca-unwatch'                  => 'ਇਹ ਸਫ਼ਾ ਆਪਣੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ’ਚੋਂ ਹਟਾਓ',
'tooltip-search'                      => '{{SITENAME}} ’ਤੇ ਖੋਜੋ',
'tooltip-search-go'                   => 'ਠੀਕ ਇਸ ਨਾਮ ਵਾਲੇ ਪੰਨੇ ’ਤੇ ਜਾਉ, ਜੇ ਮੌਜੂਦ ਹੈ ਤਾਂ',
'tooltip-search-fulltext'             => 'ਇਸ ਲਿਖਤ ਲਈ ਸਫ਼ੇ ਲੱਭੋ',
'tooltip-p-logo'                      => 'ਮੁੱਖ ਸਫ਼ੇ ’ਤੇ ਜਾਓ',
'tooltip-n-mainpage'                  => 'ਮੁੱਖ ਸਫ਼ੇ ’ਤੇ ਜਾਓ',
'tooltip-n-mainpage-description'      => 'ਮੁੱਖ ਸਫ਼ੇ ’ਤੇ ਜਾਓ',
'tooltip-n-portal'                    => 'ਪ੍ਰੋਜੈਕਟ ਬਾਰੇ, ਤੁਸੀਂ ਕੀ ਕਰ ਸਕਦੇ ਹੋ, ਕਿੱਥੇ ਕੁਝ ਲੱਭਣਾ ਹੈ',
'tooltip-n-currentevents'             => 'ਹਾਲ ਦੀਆਂ ਘਟਨਾਵਾਂ ਬਾਰੇ ਪਿਛੋਕੜੀ ਜਾਣਕਾਰੀ ਲੱਭੋ',
'tooltip-n-recentchanges'             => 'ਵਿਕੀ ਵਿਚ ਹਾਲ ’ਚ ਹੋਈਆਂ ਤਬਦੀਲੀਆਂ ਦੀ ਸੂਚੀ',
'tooltip-n-randompage'                => 'ਇੱਕ ਰਲ਼ਵਾਂ ਸਫ਼ਾ ਲੋਡ ਕਰੋ',
'tooltip-n-help'                      => 'ਖੋਜਣ ਲਈ ਥਾਂ',
'tooltip-t-whatlinkshere'             => 'ਵਿਕੀ ਦੇ ਸਾਰੇ ਸਫ਼ਿਆ ਦੀ ਸੂਚੀ, ਜੋ ਇੱਥੇ ਜੋੜਦੇ ਹਨ',
'tooltip-t-recentchangeslinked'       => 'ਇਸ ਸਫ਼ੇ ਤੋਂ ਲਿੰਕ ਕੀਤੇ ਸਫ਼ਿਆਂ ਵਿਚ ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ',
'tooltip-feed-rss'                    => 'ਇਸ ਸਫ਼ੇ ਲਈ RSS ਫ਼ੀਡ',
'tooltip-feed-atom'                   => 'ਇਸ ਸਫ਼ੇ ਦੀ ਐਟਮ ਫ਼ੀਡ',
'tooltip-t-contributions'             => 'ਇਸ ਵਰਤੋਂਕਾਰ ਦੇ ਯੋਗਦਾਨ ਦੀ ਸੂਚੀ',
'tooltip-t-emailuser'                 => 'ਇਸ ਵਰਤੋਂਕਾਰ ਨੂੰ ਈ-ਮੇਲ ਭੇਜੋ',
'tooltip-t-upload'                    => 'ਫ਼ਾਈਲਾਂ ਅਪਲੋਡ ਕਰੋ',
'tooltip-t-specialpages'              => 'ਸਾਰੇ ਖ਼ਾਸ ਸਫ਼ਿਆਂ ਦੀ ਲਿਸਟ',
'tooltip-t-print'                     => 'ਇਸ ਸਫ਼ੇ ਦਾ ਛਪਣਯੋਗ ਵਰਜਨ',
'tooltip-t-permalink'                 => 'ਸਫ਼ੇ ਦੇ ਇਸ ਰੀਵਿਜਨ ਲਈ ਪੱਕੀ ਕੜੀ',
'tooltip-ca-nstab-main'               => 'ਸਮੱਗਰੀ ਸਫ਼ਾ ਵੇਖੋ',
'tooltip-ca-nstab-user'               => 'ਵਰਤੋਂਕਾਰ ਸਫ਼ਾ ਵੇਖੋ',
'tooltip-ca-nstab-media'              => 'ਮੀਡਿਆ ਪੇਜ ਵੇਖੋ',
'tooltip-ca-nstab-special'            => 'ਇਹ ਇੱਕ ਖ਼ਾਸ ਸਫ਼ਾ ਹੈ, ਤੁਸੀਂ ਇਸਨੂੰ ਸੋਧ ਨਹੀਂ ਸਕਦੇ।',
'tooltip-ca-nstab-project'            => 'ਪ੍ਰੋਜੈਕਟ ਸਫ਼ਾ ਵੇਖੋ',
'tooltip-ca-nstab-image'              => 'ਫ਼ਾਈਲ ਸਫ਼ਾ ਵੇਖੋ',
'tooltip-ca-nstab-mediawiki'          => 'ਸਿਸਟਮ ਸੁਨੇਹੇ ਵੇਖੋ',
'tooltip-ca-nstab-template'           => 'ਫਰਮਾ ਵੇਖੋ',
'tooltip-ca-nstab-help'               => 'ਮਦਦ ਸਫ਼ਾ ਵੇਖੋ',
'tooltip-ca-nstab-category'           => 'ਸ਼੍ਰੇਣੀ ਸਫ਼ਾ ਵੇਖੋ',
'tooltip-minoredit'                   => 'ਇਸ ’ਤੇ ਬਤੌਰ ਛੋਟੀ ਤਬਦੀਲੀ ਨਿਸ਼ਾਨ ਲਾਓ',
'tooltip-save'                        => 'ਆਪਣੀਆਂ ਤਬਦੀਲੀਆਂ ਸਾਂਭੋ',
'tooltip-preview'                     => 'ਆਪਣੀ ਤਬਦੀਲੀ ਦੀ ਝਲਕ ਵੇਖੋ, ਸਾਂਭਣ ਤੋਂ ਪਹਿਲਾਂ ਇਹ ਵਰਤੋਂ!',
'tooltip-diff'                        => 'ਤੁਹਾਡੇ ਵੱਲੋਂ ਲਿਖਤ ਵਿੱਚ ਕੀਤੀਆਂ ਤਬਦੀਲੀਆਂ ਵਖਾਉਂਦਾ ਹੈ',
'tooltip-compareselectedversions'     => 'ਇਸ ਸਫ਼ੇ ਦੀਆਂ ਦੋ ਚੁਣੀਆਂ ਹੋਈਆਂ ਸੋਧਾਂ ਵਿਚ ਫ਼ਰਕ ਵੇਖੋ',
'tooltip-watch'                       => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਆਪਣੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਪਾਓ',
'tooltip-watchlistedit-normal-submit' => 'ਸਿਰਲੇਖ ਹਟਾਓ',
'tooltip-watchlistedit-raw-submit'    => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਤਾਜ਼ਾ ਕਰੋ',
'tooltip-upload'                      => 'ਅਪਲੋਡ ਸ਼ੁਰੂ ਕਰੋ',
'tooltip-rollback'                    => "''ਵਾਪਸ ਮੋੜੋ'' ਇੱਕ ਹੀ ਕਲਿੱਕ ਨਾਲ ਆਖਰੀ ਯੋਗਦਾਨ ਨੂੰ ਰੱਦ ਕਰ ਦਿੰਦਾ ਹੈ",
'tooltip-undo'                        => '"ਉਧੇੜਨਾ" ਇਸ ਤਬਦੀਲੀ ਨੂੰ ਰੱਦ ਕਰਕੇ ਸੋਧ ਫਾਰਮ ਨੂੰ ਝਲਕ ਦੇ ਅੰਦਾਜ਼ ਵਿੱਚ ਦਿਖਾਉਂਦਾ ਹੈ।
ਇੰਝ "ਸਾਰ" ਵਿੱਚ ਤਬਦੀਲੀ ਨਕਾਰਨ ਦਾ ਕਾਰਨ ਲਿਖਿਆ ਜਾ ਸਕਦਾ ਹੈ।',
'tooltip-preferences-save'            => 'ਪਸੰਦ ਸੰਭਾਲੋ',
'tooltip-summary'                     => 'ਸੰਖੇਪ ਸਾਰ ਦਰਜ ਕਰੋ',

# Attribution
'lastmodifiedatby' => 'ਇਹ ਸਫ਼ਾ ਆਖ਼ਰੀ ਵਾਰ $1 ਨੂੰ $2 ’ਤੇ $3 ਨੇ ਸੋਧਿਆ ਸੀ।',
'others'           => 'ਹੋਰ',
'siteusers'        => '{{SITENAME}} {{PLURAL:$2|ਵਰਤੋਂਕਾਰ|ਵਰਤੋਂਕਾਰਾਂ}} $1',
'creditspage'      => 'ਸਫ਼ੇ ਬਾਬਤ ਕਰਜ਼',

# Spam protection
'spamprotectiontitle' => 'Spam ਸੁਰੱਖਿਆ ਫਿਲਟਰ',

# Info page
'pageinfo-header-edits'     => 'ਸੋਧਾਂ ਦਾ ਅਤੀਤ',
'pageinfo-header-watchlist' => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ',
'pageinfo-header-views'     => 'ਵਖਾਵੇ',
'pageinfo-subjectpage'      => 'ਸਫ਼ਾ',
'pageinfo-talkpage'         => 'ਗੱਲ-ਬਾਤ ਸਫ਼ਾ',
'pageinfo-watchers'         => 'ਸਫ਼ੇ ’ਤੇ ਨਜ਼ਰ ਰੱਖਣ ਵਾਲਿਆਂ ਦੀ ਗਿਣਤੀ',
'pageinfo-edits'            => 'ਸੋਧਾਂ ਦੀ ਗਿਣਤੀ',
'pageinfo-views'            => 'ਵਖਾਵਿਆਂ ਦੀ ਗਿਣਤੀ',
'pageinfo-viewsperedit'     => 'ਪ੍ਰਤੀ ਸੋਧ ਵਖਾਵੇ',

# Skin names
'skinname-standard' => 'ਕਲਾਸਿਕ',
'skinname-monobook' => 'ਮੋਨੋਬੁੱਕ',
'skinname-myskin'   => 'ਮੇਰੀਸਕਿਨ',
'skinname-chick'    => 'ਚੀਚਕ',
'skinname-simple'   => 'ਸੈਂਪਲ',

# Browsing diffs
'previousdiff' => '← ਪੁਰਾਣੀ ਤਬਦੀਲੀ',
'nextdiff'     => 'ਨਵੀਂ ਤਬਦੀਲੀ →',

# Media information
'thumbsize'       => 'ਥੰਮਨੇਲ ਆਕਾਰ:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|ਸਫ਼ਾ|ਸਫ਼ੇ}}',
'file-info'       => 'ਫਾਇਲ ਆਕਾਰ: $1, MIME ਕਿਸਮ: $2',
'file-info-size'  => '$1 × $2 ਪਿਕਸਲ, ਫ਼ਾਈਲ ਅਕਾਰ: $3, MIME ਕਿਸਮ: $4',
'file-nohires'    => 'ਇਸ ਤੋਂ ਵੱਡੀ ਤਸਵੀਰ ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',
'svg-long-desc'   => 'SVG ਫ਼ਾਈਲ, ਆਮ ਤੌਰ ’ਤੇ $1 × $2 ਪਿਕਸਲ, ਫ਼ਾਈਲ ਦਾ ਅਕਾਰ: $3',
'show-big-image'  => 'ਅਸਲ ਫਾਈਲ',

# Special:NewFiles
'newimages'             => 'ਨਵੀਆਂ ਫ਼ਾਈਲਾਂ ਦੀ ਗੈਲਰੀ',
'noimages'              => 'ਵੇਖਣ ਲਈ ਕੁਝ ਨਹੀਂ',
'ilsubmit'              => 'ਖੋਜ',
'bydate'                => 'ਮਿਤੀ ਨਾਲ',
'sp-newimages-showfrom' => '$2, $1 ਤੋਂ ਸ਼ੁਰੂ ਹੋ ਕੇ ਨਵੀਆਂ ਫ਼ਾਈਲਾਂ ਵਿਖਾਓ',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 ਸਕਿੰਟ}}',
'minutes' => '{{PLURAL:$1|$1 ਮਿੰਟ}}',
'hours'   => '{{PLURAL:$1|$1 ਘੰਟਾ|$1 ਘੰਟੇ}}',
'days'    => '{{PLURAL:$1|$1 ਦਿਨ}}',
'ago'     => '$1 ਪਹਿਲਾਂ',

# Bad image list
'bad_image_list' => 'ਤਰਤੀਬ ਇਸ ਤਰਾਂ ਹੈ:
ਸਿਰਫ਼ ਸੂਚੀ ਵਿਚਲੀਆਂ ਚੀਜ਼ਾਂ (* ਨਾਲ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲੀਆਂ ਕਤਾਰਾਂ) ’ਤੇ ਹੀ ਗ਼ੌਰ ਕੀਤਾ ਜਾਵੇਗਾ।
ਲਾਈਨ ਵਿਚ ਪਹਿਲੀ ਕੜੀ ਗ਼ਲਤ ਫ਼ਾਈਲ ਦੀ ਕੜੀ ਹੋਣੀ ਚਾਹੀਦੀ ਹੈ। ਉਸ ਲਾਈਨ ’ਚ ਅੱਗੇ ਦਿਤੀਆਂ ਕੜੀਆਂ ਨੂੰ ਇਤਰਾਜ਼ਯੋਗ ਮੰਨਿਆ ਜਾਵੇਗਾ, ਭਾਵ ਉਹ ਪੰਨੇ ਜਿਨ੍ਹਾਂ ਵਿਚ ਫ਼ਾਈਲ ਕਿਸੇ ਲਾਈਨ ਵਿਚ ਸਥਿਤ ਹੋ ਸਕਦੀ ਹੈ।',

# Metadata
'metadata'          => 'ਮੈਟਾਡੈਟਾ',
'metadata-help'     => 'ਇਸ ਫ਼ਾਈਲ ਵਿੱਚ ਵਾਧੂ ਜਾਣਕਾਰੀਆਂ ਹਨ, ਜੋ ਸ਼ਾਇਦ ਉਸ ਕੈਮਰੇ ਜਾਂ ਸਕੈਨਰ ਦੀ ਦੇਣ ਹਨ ਜੋ ਇਸਨੂੰ ਬਣਾਉਣ ਲਈ ਵਰਤਿਆ ਗਿਆ। ਜੇ ਇਸ ਫ਼ਾਈਲ ਵਿੱਚ ਕੋਈ ਤਬਦੀਲੀ ਕੀਤੀ ਗਈ ਹੈ ਤਾਂ ਹੋ ਸਕਦਾ ਹੈ ਕੁਝ ਵੇਰਵੇ ਬਦਲੀ ਫ਼ਾਈਲ ਦਾ ਸਹੀ ਰੂਪਮਾਨ ਨਾ ਹੋਣ।',
'metadata-expand'   => 'ਵਾਧੂ ਦਾ ਬਿਓਰਾ ਵਿਖਾਓ',
'metadata-collapse' => 'ਵਾਧੂ ਦਾ ਬਿਓਰਾ ਲੁਕਾਓ',
'metadata-fields'   => 'ਇਸ ਸੁਨੇਹੇ ਵਿੱਚ ਸੂਚੀਬੱਧ ਖੇਤਰ ਚਿੱਤਰ ਪੰਨੇ ’ਚ ਸ਼ਾਮਲ ਕੀਤੇ ਜਾਣਗੇ ਜੋ ਉਦੋਂ ਦਿੱਸਦੇ ਹਨ ਜਦੋ ਮੈਟਾਡੈਟਾ ਖਾਕਾ ਬੰਦ ਹੋਵੇ। ਬਾਕੀ ਉਂਞ ਹੀ ਲੁਕੇ ਹੋਣਗੇ।',

# EXIF tags
'exif-imagewidth'                  => 'ਚੌੜਾਈ',
'exif-imagelength'                 => 'ਉਚਾਈ',
'exif-samplesperpixel'             => 'ਭਾਗਾਂ ਦੀ ਗਿਣਤੀ',
'exif-rowsperstrip'                => 'ਪ੍ਰਤੀ ਪੱਟੀ ਕਤਾਰਾਂ ਦੀ ਗਿਣਤੀ',
'exif-jpeginterchangeformatlength' => 'JPEG ਸਮੱਗਰੀ ਦੇ ਬਾਈਟ',
'exif-imagedescription'            => 'ਚਿੱਤਰ ਟਾਇਟਲ',
'exif-make'                        => 'ਕੈਮਰਾ ਨਿਰਮਾਤਾ',
'exif-model'                       => 'ਕੈਮਰਾ ਮਾਡਲ',
'exif-software'                    => 'ਵਰਤਿਆ ਸਾਫਟਵੇਅਰ',
'exif-artist'                      => 'ਲੇਖਕ',
'exif-copyright'                   => 'ਕਾਪੀਰਾਈਟ ਟਾਇਟਲ',
'exif-pixelydimension'             => 'ਤਸਵੀਰ ਦੀ ਚੌੜਾਈ',
'exif-pixelxdimension'             => 'ਤਸਵੀਰ ਦੀ ਲੰਬਾਈ',
'exif-usercomment'                 => 'ਵਰਤੋਂਕਾਰ ਦੀਆਂ ਟਿੱਪਣੀਆਂ',
'exif-relatedsoundfile'            => 'ਮਿਲਦੀ-ਜੁਲਦੀ ਆਡੀਓ ਫ਼ਾਈਲ',
'exif-fnumber'                     => 'ਐੱਫ਼ ਨੰਬਰ',
'exif-subjectdistance'             => 'ਵਿਸ਼ੇ ਦੀ ਵਿੱਥ',
'exif-lightsource'                 => 'ਚਾਨਣ ਦਾ ਸਰੋਤ',
'exif-flash'                       => 'ਫ਼ਲੈਸ਼',
'exif-focallength'                 => 'ਲੈਨਜ਼ ਦੀ ਫੋਕਲ-ਲੰਬਾਈ',
'exif-subjectarea'                 => 'ਵਿਸ਼ਾ ਖੇਤਰ',
'exif-flashenergy'                 => 'ਫ਼ਲੈਸ਼ ਦੀ ਊਰਜਾ',
'exif-filesource'                  => 'ਫ਼ਾਈਲ ਦਾ ਸਰੋਤ',
'exif-scenetype'                   => 'ਸੀਨ ਦੀ ਕਿਸਮ',
'exif-gpslatituderef'              => 'ਉੱਤਰੀ ਜਾਂ ਦੱਖਣੀ ਅਕਸ਼ਾਂਸ਼',
'exif-gpslatitude'                 => 'ਅਕਸ਼ਾਂਸ਼',
'exif-gpslongituderef'             => 'ਪੂਰਬੀ ਜਾਂ ਪੱਛਮੀ ਰੇਖਾਂਸ਼',
'exif-gpslongitude'                => 'ਰੇਖਾਂਸ਼',
'exif-gpsaltituderef'              => 'ਉਚਾਈ ਦਾ ਹਵਾਲਾ',
'exif-gpsaltitude'                 => 'ਉਚਾਈ',
'exif-gpstimestamp'                => 'ਜੀ੦ਪੀ੦ਐੱਸ ਸਮਾਂ (ਪ੍ਰਮਾਣੂ ਘੜੀ)',
'exif-gpssatellites'               => 'ਮਿਣਨ ਲਈ ਵਰਤੇ ਗਏ ਉਪਗ੍ਰਹਿ',
'exif-gpsspeedref'                 => 'ਗਤੀ ਦੀ ਇਕਾਈ',
'exif-gpstrack'                    => 'ਚਾਲ ਦੀ ਦਿਸ਼ਾ',
'exif-gpsimgdirection'             => 'ਤਸਵੀਰ ਦੀ ਦਿਸ਼ਾ',
'exif-gpsareainformation'          => 'ਜੀਪੀਐੱਸ ਖੇਤਰ ਦਾ ਨਾਂ',
'exif-gpsdatestamp'                => 'GPS ਮਿਤੀ',
'exif-countrycreated'              => 'ਉਹ ਦੇਸ਼ ਜਿਸ ਵਿਚ ਇਹ ਤਸਵੀਰ ਲਈ ਗਈ ਸੀ',
'exif-countrycodecreated'          => 'ਉਸ ਦੇਸ਼ ਦਾ ਕੋਡ ਜਿਸ ਵਿਚ ਇਹ ਤਸਵੀਰ ਲਈ ਗਈ ਸੀ',
'exif-provinceorstatecreated'      => 'ਸੂਬਾ ਜਾਂ ਰਾਜ ਜਿਸ ਵਿਚ ਇਹ ਤਸਵੀਰ ਲਈ ਗਈ ਸੀ',
'exif-citycreated'                 => 'ਸ਼ਹਿਰ ਜਿਸ ਵਿਚ ਇਹ ਤਸਵੀਰ ਲਈ ਗਈ ਸੀ',
'exif-worldregiondest'             => 'ਦਰਸਾਇਆ ਗਿਆ ਦੁਨਿਆਵੀ ਖੇਤਰ',
'exif-countrydest'                 => 'ਦਰਸਾਇਆ ਗਿਆ ਦੇਸ਼',
'exif-countrycodedest'             => 'ਦਰਸਾਏ ਗਏ ਦੇਸ਼ ਲਈ ਕੋਡ',
'exif-provinceorstatedest'         => 'ਦਰਸਾਇਆ ਗਿਆ ਸੂਬਾ ਜਾਂ ਰਾਜ',
'exif-citydest'                    => 'ਦਰਸਾਇਆ ਗਿਆ ਸ਼ਹਿਰ',
'exif-objectname'                  => 'ਛੋਟਾ ਸਿਰਲੇਖ',
'exif-specialinstructions'         => 'ਖ਼ਾਸ ਹਦਾਇਤਾਂ',
'exif-headline'                    => 'ਸਿਰਨਾਵਾਂ',
'exif-source'                      => 'ਸਰੋਤ',
'exif-editstatus'                  => 'ਤਸਵੀਰ ਦਾ ਸੰਪਾਦਕੀ ਰੁਤਬਾ',
'exif-locationdest'                => 'ਦਰਸਾਈ ਗਈ ਥਾਂ',
'exif-locationdestcode'            => 'ਦਰਸਾਈ ਥਾਂ ਦਾ ਕੋਡ',
'exif-contact'                     => 'ਰਾਬਤੇ ਦੀ ਜਾਣਕਾਰੀ',
'exif-writer'                      => 'ਲੇਖਕ',
'exif-languagecode'                => 'ਭਾਸ਼ਾ',
'exif-iimversion'                  => 'IIM ਵਰਜ਼ਨ',
'exif-iimcategory'                 => 'ਸ਼੍ਰੇਣੀ',
'exif-lens'                        => 'ਵਰਤਿਆ ਗਿਆ ਲੈਨਜ਼',
'exif-serialnumber'                => 'ਕੈਮਰੇ ਦਾ ਸੀਰੀਅਲ ਨੰਬਰ',
'exif-cameraownername'             => 'ਕੈਮਰੇ ਦਾ ਮਾਲਕ',
'exif-label'                       => 'ਲੇਬਲ',
'exif-datetimemetadata'            => 'ਮੈਟਾਡਾਟਾ ਦੀ ਆਖ਼ਰੀ ਤਬਦੀਲੀ ਦੀ ਮਿਤੀ',
'exif-nickname'                    => 'ਤਸਵੀਰ ਦਾ ਗ਼ੈਰ-ਰਸਮੀ ਨਾਂ',
'exif-rightscertificate'           => 'ਹੱਕਾਂ ਦੇ ਪ੍ਰਬੰਧ ਦਾ ਪ੍ਰਮਾਣ-ਪੱਤਰ',
'exif-copyrighted'                 => 'ਕਾਪੀਰਾਈਟ ਦਰਜਾ',
'exif-copyrightowner'              => 'ਕਾਪੀਰਾਈਟ ਦਾ ਮਾਲਕ',
'exif-usageterms'                  => 'ਵਰਤੋਂ ਦੀਆਂ ਸ਼ਰਤਾਂ',
'exif-webstatement'                => 'ਕਾਪੀਰਾਈਟ ਦਾ ਆਨਲਾਈਨ ਬਿਆਨ',
'exif-pngfilecomment'              => 'PNG ਫ਼ਾਈਲ ਦੀ ਟਿੱਪਣੀ',
'exif-disclaimer'                  => 'ਦਾਅਵੇ',
'exif-contentwarning'              => 'ਸਮੱਗਰੀ ਸਬੰਧੀ ਚਿਤਾਵਨੀ',
'exif-giffilecomment'              => 'GIF ਫ਼ਾਈਲ ਦੀ ਟਿੱਪਣੀ',
'exif-intellectualgenre'           => 'ਚੀਜ਼ ਦੀ ਕਿਸਮ',
'exif-subjectnewscode'             => 'ਵਿਸ਼ੇ ਦਾ ਕੋਡ',
'exif-scenecode'                   => 'IPTC ਸੀਨ ਦਾ ਕੋਡ',
'exif-event'                       => 'ਦਰਸਾਈ ਗਈ ਘਟਨਾ',
'exif-organisationinimage'         => 'ਦਰਸਾਈ ਗਈ ਸੰਸਥਾ',
'exif-personinimage'               => 'ਦਰਸਾਇਆ ਗਿਆ ਇਨਸਾਨ',
'exif-originalimageheight'         => 'ਕੱਟਣ ਤੋਂ ਪਹਿਲਾਂ ਤਸਵੀਰ ਦੀ ਉਚਾਈ',
'exif-originalimagewidth'          => 'ਕੱਟਣ ਤੋਂ ਪਹਿਲਾਂ ਤਸਵੀਰ ਦੀ ਚੌੜਾਈ',

'exif-unknowndate' => 'ਅਣਪਛਾਤੀ ਮਿਤੀ',

'exif-orientation-1' => 'ਸਧਾਰਨ',
'exif-orientation-3' => '੧੮੦° ਘੁਮਾਇਆ ਗਿਆ',

'exif-componentsconfiguration-0' => 'ਮੌਜੂਦ ਨਹੀਂ ਹੈ',

'exif-exposureprogram-0' => 'ਪਰਿਭਾਸ਼ਤ ਨਹੀਂ',
'exif-exposureprogram-1' => 'ਦਸਤੀ',
'exif-exposureprogram-2' => 'ਸਧਾਰਨ ਪਰੋਗਰਾਮ',

'exif-subjectdistance-value' => '$1 ਮੀਟਰ',

'exif-meteringmode-0'   => 'ਅਣਪਛਾਤਾ',
'exif-meteringmode-1'   => 'ਔਸਤ',
'exif-meteringmode-5'   => 'ਪੈਟਰਨ',
'exif-meteringmode-255' => 'ਹੋਰ',

'exif-lightsource-0'   => 'ਅਣਜਾਣ',
'exif-lightsource-4'   => 'ਫ਼ਲੈਸ਼',
'exif-lightsource-9'   => 'ਵਧੀਆ ਮੌਸਮ',
'exif-lightsource-10'  => 'ਬੱਦਲ ਵਾਲਾ ਮੌਸਮ',
'exif-lightsource-17'  => 'ਮਿਆਰੀ ਚਾਨਣ A',
'exif-lightsource-18'  => 'ਮਿਆਰੀ ਚਾਨਣ B',
'exif-lightsource-19'  => 'ਮਿਆਰੀ ਚਾਨਣ C',
'exif-lightsource-255' => 'ਚਾਨਣ ਦਾ ਹੋਰ ਸਰੋਤ',

'exif-focalplaneresolutionunit-2' => 'ਇੰਚ',

'exif-scenecapturetype-0' => 'ਸਟੈਂਡਰਡ',
'exif-scenecapturetype-1' => 'ਲੈਂਡਸਕੇਪ',
'exif-scenecapturetype-2' => 'ਪੋਰਟਰੇਟ',
'exif-scenecapturetype-3' => 'ਰਾਤ ਦਾ ਨਜ਼ਾਰਾ',

'exif-gaincontrol-0' => 'ਕੋਈ ਨਹੀਂ',

'exif-contrast-0' => 'ਸਧਾਰਨ',
'exif-contrast-1' => 'ਕੂਲ਼ਾ',
'exif-contrast-2' => 'ਕਰੜਾ',

'exif-saturation-0' => 'ਸਧਾਰਨ',

'exif-sharpness-0' => 'ਸਧਾਰਨ',
'exif-sharpness-1' => 'ਕੂਲਾ',
'exif-sharpness-2' => 'ਕਰੜਾ',

'exif-subjectdistancerange-0' => 'ਅਣਜਾਣ',
'exif-subjectdistancerange-1' => 'ਮਾਈਕਰੋ',
'exif-subjectdistancerange-2' => 'ਝਲਕ ਬੰਦ ਕਰੋ',
'exif-subjectdistancerange-3' => 'ਦੂਰ ਦਾ ਨਜ਼ਾਰਾ',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'ਉੱਤਰੀ ਅਕਸ਼ਾਂਸ਼',
'exif-gpslatitude-s' => 'ਦੱਖਣੀ ਅਕਸ਼ਾਂਸ਼',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'ਪੂਰਬੀ ਰੇਖਾਂਸ਼',
'exif-gpslongitude-w' => 'ਪੱਛਮੀ ਰੇਖਾਂਸ਼',

# Pseudotags used for GPSAltitudeRef
'exif-gpsaltitude-above-sealevel' => 'ਸਮੁੰਦਰ ਤਲ ਤੋਂ $1 {{PLURAL:$1|ਮੀਟਰ}} ਉੱਤੇ',
'exif-gpsaltitude-below-sealevel' => 'ਸਮੁੰਦਰ ਤਲ ਤੋਂ $1 {{PLURAL:$1|ਮੀਟਰ}} ਹੇਠਾਂ',

'exif-gpsstatus-a' => 'ਮਾਪ ਜਾਰੀ ਹੈ',

'exif-gpsmeasuremode-2' => '੨-ਆਯਾਮੀ ਨਾਪ',
'exif-gpsmeasuremode-3' => '੩-ਆਯਾਮੀ ਨਾਪ',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'ਕਿਲੋਮੀਟਰ ਪ੍ਰਤੀ ਘੰਟਾ',
'exif-gpsspeed-m' => 'ਮੀਲ ਪ੍ਰਤੀ ਘੰਟਾ',
'exif-gpsspeed-n' => 'ਨਾਟ',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'ਕਿਲੋਮੀਟਰ',
'exif-gpsdestdistance-m' => 'ਮੀਲ',
'exif-gpsdestdistance-n' => 'ਸਮੁੰਦਰੀ ਮੀਲ',

'exif-gpsdop-good'     => 'ਵਧੀਆ ($1)',
'exif-gpsdop-moderate' => 'ਠੀਕ-ਠਾਕ ($1)',
'exif-gpsdop-poor'     => 'ਘਟੀਆ ($1)',

'exif-objectcycle-a' => 'ਸਿਰਫ਼ ਸਵੇਰ',
'exif-objectcycle-p' => 'ਸਿਰਫ਼ ਸ਼ਾਮ',
'exif-objectcycle-b' => 'ਸਵੇਰ ਅਤੇ ਸ਼ਾਮ ਦੋਵੇਂ',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'ਅਸਲੀ ਦਿਸ਼ਾ',
'exif-gpsdirection-m' => 'ਚੁੰਬਕੀ ਦਿਸ਼ਾ',

'exif-ycbcrpositioning-1' => 'ਕੇਂਦਰਤ',

'exif-dc-contributor' => 'ਯੋਗਦਾਨੀ',
'exif-dc-coverage'    => 'ਮੀਡੀਆ ਦਾ ਸਥਾਨਕ ਅਤੇ ਵਕਤੀ ਅਧਿਕਾਰ-ਖੇਤਰ',
'exif-dc-date'        => 'ਮਿਤੀ(ਆਂ)',
'exif-dc-publisher'   => 'ਪ੍ਰਕਾਸ਼ਕ',
'exif-dc-relation'    => 'ਸਬੰਧਤ ਮੀਡੀਆ',
'exif-dc-rights'      => 'ਹੱਕ',
'exif-dc-source'      => 'ਸਰੋਤ ਮੀਡੀਆ',
'exif-dc-type'        => 'ਮੀਡੀਆ ਦੀ ਕਿਸਮ',

'exif-rating-rejected' => 'ਨਕਾਰਿਆ ਗਿਆ',

'exif-isospeedratings-overflow' => '੬੫੫੩੫ ਤੋਂ ਵੱਡਾ',

'exif-iimcategory-ace' => 'ਕਲਾ, ਸੱਭਿਆਚਾਰ ਅਤੇ ਮਨੋਰੰਜਨ',
'exif-iimcategory-clj' => 'ਅਪਰਾਧ ਅਤੇ ਕਨੂੰਨ',
'exif-iimcategory-dis' => 'ਆਫ਼ਤਾਂ ਅਤੇ ਦੁਰਘਟਨਾਵਾਂ',
'exif-iimcategory-fin' => 'ਅਰਥਚਾਰਾ ਅਤੇ ਵਪਾਰ',
'exif-iimcategory-edu' => 'ਸਿੱਖਿਆ',
'exif-iimcategory-evn' => 'ਵਾਤਾਵਰਨ',
'exif-iimcategory-hth' => 'ਸਿਹਤ',
'exif-iimcategory-hum' => 'ਮਨੁੱਖੀ ਹਿਤ',
'exif-iimcategory-lab' => 'ਮਜ਼ਦੂਰੀ',
'exif-iimcategory-lif' => 'ਜੀਵਨ-ਸ਼ੈਲੀ ਅਤੇ ਅਰਾਮ',
'exif-iimcategory-pol' => 'ਸਿਆਸਤ',
'exif-iimcategory-rel' => 'ਧਰਮ ਅਤੇ ਮਤ',
'exif-iimcategory-sci' => 'ਵਿਗਿਆਨ ਅਤੇ ਤਕਨਾਲੋਜੀ',
'exif-iimcategory-soi' => 'ਸਮਾਜਕ ਮੁੱਦੇ',
'exif-iimcategory-spo' => 'ਖੇਡਾਂ',
'exif-iimcategory-war' => 'ਯੁੱਧ, ਤਕਰਾਰ ਅਤੇ ਅਸ਼ਾਂਤੀ',
'exif-iimcategory-wea' => 'ਮੌਸਮ',

'exif-urgency-normal' => 'ਸਧਾਰਨ ($1)',
'exif-urgency-low'    => 'ਨੀਵਾਂ ($1)',
'exif-urgency-high'   => 'ਉੱਚਾ ($1)',

# External editor support
'edit-externally'      => 'ਬਾਹਰੀ ਐਪਲੀਕੇਸ਼ਨ ਵਰਤ ਕੇ ਇਸ ਫ਼ਾਈਲ ਨੂੰ ਸੋਧੋ',
'edit-externally-help' => '(ਹੋਰ ਜਾਣਕਾਰੀ ਲਈ [https://www.mediawiki.org/wiki/Manual:External_editors setup instructions] ਵੇਖੋ)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'ਸਭ',
'namespacesall' => 'ਸਭ',
'monthsall'     => 'ਸਭ',
'limitall'      => 'ਸਭ',

# Email address confirmation
'confirmemail'             => 'ਈ-ਮੇਲ ਪਤਾ ਤਸਦੀਕ ਕਰੋ',
'confirmemail_send'        => 'ਇੱਕ ਤਸਦੀਕੀ ਕੋਡ ਭੇਜੋ',
'confirmemail_sent'        => 'ਤਸਦੀਕੀ ਈਮੇਲ ਭੇਜੀ ਗਈ।',
'confirmemail_invalid'     => 'ਗਲਤ ਪੁਸ਼ਟੀ ਕੋਡ ਹੈ। ਕੋਡ ਦੀ ਮਿਆਦ ਪੁੱਗੀ ਹੋ ਸਕਦੀ ਹੈ।',
'confirmemail_success'     => 'ਤੁਹਾਡਾ ਈਮੇਲ ਪਤਾ ਤਸਦੀਕ ਹੋ ਚੁੱਕਾ ਹੈ।
ਤੁਸੀਂ ਹੁਣ [[Special:UserLogin|ਲਾਗਇਨ]] ਕਰ ਕੇ ਵਿਕੀ ਦਾ ਮਜ਼ਾ ਸਕਦੇ ਹੋ।',
'confirmemail_loggedin'    => 'ਤੁਹਾਡਾ ਈ-ਮੇਲ ਪਤਾ ਹੁਣ ਤਸਦੀਕ ਹੋ ਚੁੱਕਾ ਹੈ।',
'confirmemail_subject'     => '{{SITENAME}} ਈ-ਮੇਲ ਪਤਾ ਤਸਦੀਕ',
'confirmemail_invalidated' => 'ਈਮੇਲ ਪਤੇ ਦੀ ਤਸਦੀਕੀ ਰੱਦ ਕੀਤੀ ਗਈ',
'invalidateemail'          => 'ਈਮੇਲ ਤਸਦੀਕੀ ਰੱਦ ਕਰੋ',

# Scary transclusion
'scarytranscludetoolong' => '[URL ਬਹੁਤ ਲੰਬਾ ਹੈ]',

# Delete conflict
'deletedwhileediting' => "'''ਖ਼ਬਰਦਾਰ:''' ਇਹ ਸਫ਼ਾ ਤੁਹਾਡੇ ਸੋਧ ਸ਼ੁਰੂ ਕਰਨ ਮਗਰੋਂ ਮਿਟਾ ਦਿੱਤਾ ਗਿਆ ਸੀ!",
'recreate'            => 'ਮੁੜ-ਬਣਾਓ',

# action=purge
'confirm_purge_button' => 'ਠੀਕ ਹੈ',
'confirm-purge-top'    => 'ਇਸ ਸਫ਼ੇ ਦਾ ਕੈਸ਼ ਸਾਫ਼ ਕੀਤਾ ਜਾਵੇ?',

# action=watch/unwatch
'confirm-watch-button'   => 'ਠੀਕ ਹੈ',
'confirm-watch-top'      => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿਚ ਜੋੜਨਾ ਹੈ?',
'confirm-unwatch-button' => 'ਠੀਕ ਹੈ',
'confirm-unwatch-top'    => 'ਇਸ ਸਫ਼ੇ ਨੂੰ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਤੋਂ ਹਟਾਉਣਾ ਹੈ?',

# Multipage image navigation
'imgmultipageprev' => '← ਪਿਛਲਾ ਸਫ਼ਾ',
'imgmultipagenext' => 'ਅਗਲਾ ਸਫ਼ਾ →',
'imgmultigo'       => 'ਜਾਓ!',
'imgmultigoto'     => '$1 ਸਫ਼ੇ ਉੱਤੇ ਜਾਓ',

# Table pager
'ascending_abbrev'         => 'ਵਧਦਾ',
'descending_abbrev'        => 'ਘਟਦਾ',
'table_pager_next'         => 'ਅਗਲਾ ਸਫ਼ਾ',
'table_pager_prev'         => 'ਪਿਛਲਾ ਸਫ਼ਾ',
'table_pager_first'        => 'ਪਹਿਲਾ ਸਫ਼ਾ',
'table_pager_last'         => 'ਆਖ਼ਰੀ ਸਫ਼ਾ',
'table_pager_limit'        => 'ਹਰੇਕ ਸਫ਼ੇ ਲਈ $1 ਆਈਟਮਾਂ',
'table_pager_limit_label'  => 'ਪ੍ਰਤੀ ਸਫ਼ਾ ਆਈਟਮਾਂ:',
'table_pager_limit_submit' => 'ਜਾਓ',
'table_pager_empty'        => 'ਕੋਈ ਨਤੀਜਾ ਨਹੀਂ',

# Auto-summaries
'autosumm-blank' => 'ਸਫ਼ੇ ਨੂੰ ਖ਼ਾਲੀ ਕੀਤਾ',
'autosumm-new'   => '"$1" ਨਾਲ਼ ਸਫ਼ਾ ਬਣਾਇਆ',

# Live preview
'livepreview-loading' => 'ਲੋਡ ਕੀਤਾ ਜਾ ਰਿਹਾ ਹੈ...',
'livepreview-ready'   => 'ਲੋਡ ਕੀਤਾ ਜਾ ਰਿਹਾ ਹੈ... ਤਿਆਰ!',
'livepreview-failed'  => 'ਲਾਈਵ ਝਲਕ ਫੇਲ੍ਹ ਹੋਈ!
ਸਧਾਰਨ ਝਲਕ ਦੀ ਕੋਸ਼ਿਸ਼ ਕਰੋ।',

# Watchlist editor
'watchlistedit-numitems'      => 'ਗੱਲ-ਬਾਤ ਸਫ਼ਿਆਂ ਤੋਂ ਬਿਨਾਂ, ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ {{PLURAL:$1|1 ਸਿਰਲੇਖ ਹੈ|$1 ਸਿਰਲੇਖ ਹਨ}}।',
'watchlistedit-noitems'       => 'ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਕੋਈ ਸਿਰਲੇਖ ਨਹੀਂ ਹਨ।',
'watchlistedit-normal-title'  => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਸੋਧੋ',
'watchlistedit-normal-legend' => 'ਸਿਰਲੇਖਾਂ ਨੂੰ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚੋਂ ਹਟਾਓ',
'watchlistedit-normal-submit' => 'ਸਿਰਲੇਖ ਹਟਾਓ',
'watchlistedit-normal-done'   => 'ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚੋਂ {{PLURAL:$1|1 ਸਿਰਲੇਖ ਹਟਾਇਆ ਗਿਆ|$1 ਸਿਰਲੇਖ ਹਟਾਏ ਗਏ}}:',
'watchlistedit-raw-title'     => 'ਕੱਚੀ ਨਿਗਰਾਨ-ਸੂਚੀ ਸੋਧੋ',
'watchlistedit-raw-legend'    => 'ਕੱਚੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਸੋਧੋ',
'watchlistedit-raw-explain'   => 'ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਵਿੱਚ ਮੌਜੂਦ ਸਫ਼ੇ ਹਟਾਏ ਜਾਂ ਹੋਰ ਜੋੜੇ ਜਾ ਸਕਦੇ ਹਨ। ਹਟਾਉਣ ਜਾਂ ਜੋੜਨ ਤੋਂ ਬਾਅਦ "{{int:Watchlistedit-raw-submit}}" ’ਤੇ ਕਲਿੱਕ ਕਰੋ।
ਤੁਸੀਂ [[Special:EditWatchlist|ਮਿਆਰੀ ਐਡੀਟਰ]] ਵੀ ਵਰਤ ਸਕਦੇ ਹੋ।',
'watchlistedit-raw-titles'    => 'ਸਿਰਲੇਖ:',
'watchlistedit-raw-submit'    => 'ਨਿਗਰਾਨੀ-ਲਿਸਟ ਤਾਜ਼ੀ ਕਰੋ',
'watchlistedit-raw-done'      => 'ਤੁਹਾਡੀ ਨਿਗਰਾਨੀ-ਲਿਸਟ ਅੱਪਡੇਟ ਹੋ ਗਈ ਹੈ।',
'watchlistedit-raw-added'     => '{{PLURAL:$1|1 ਸਿਰਲੇਖ ਸ਼ਾਮਲ ਕੀਤਾ|$1 ਸਿਰਲੇਖ ਸ਼ਾਮਲ ਕੀਤੇ}}:',
'watchlistedit-raw-removed'   => '{{PLURAL:$1|1 ਸਿਰਲੇਖ ਹਟਾਇਆ|$1 ਸਿਰਲੇਖ ਹਟਾਏ}}:',

# Watchlist editing tools
'watchlisttools-view' => 'ਸਬੰਧਤ ਤਬਦੀਲੀਆਂ ਵੇਖੋ',
'watchlisttools-edit' => 'ਨਿਗਰਾਨੀ-ਸੂਚੀ ਵੇਖੋ ’ਤੇ ਸੋਧੋ',
'watchlisttools-raw'  => 'ਕੱਚੀ ਨਿਗਰਾਨ-ਸੂਚੀ ਸੋਧੋ',

# Core parser functions
'duplicate-defaultsort' => 'ਪੁਰਾਣੀ ਮੂਲ ਕਰਮਾਂਕਨ ਕੁੰਜੀ $1 ਦੇ ਬਜਾਏ ਹੁਣ ਮੂਲ ਕਰਮਾਂਕਨ ਕੁੰਜੀ $2 ਹੋਵੇਗੀ।',

# Special:Version
'version'                  => 'ਵਰਜਨ',
'version-specialpages'     => 'ਖ਼ਾਸ ਸਫ਼ੇ',
'version-skins'            => 'ਸਕਿਨਾਂ',
'version-other'            => 'ਹੋਰ',
'version-hooks'            => 'ਹੁੱਕਾਂ',
'version-hook-name'        => 'ਹੁੱਕ ਦਾ ਨਾਂ',
'version-license'          => 'ਲਸੰਸ',
'version-software'         => 'ਇਨਸਟਾਲ ਕੀਤਾ ਸਾਫ਼ਟਵੇਅਰ',
'version-software-product' => 'ਉਤਪਾਦ',
'version-software-version' => 'ਵਰਜਨ',

# Special:FilePath
'filepath'        => 'ਫ਼ਾਈਲ ਦਾ ਰਾਹ',
'filepath-page'   => 'ਫ਼ਾਈਲ:',
'filepath-submit' => 'ਜਾਓ',

# Special:FileDuplicateSearch
'fileduplicatesearch'           => 'ਨਕਲੀ ਫ਼ਾਈਲਾਂ ਲਈ ਖੋਜ ਕਰੋ',
'fileduplicatesearch-legend'    => 'ਕਿਸੇ ਨਕਲ ਲਈ ਖੋਜੋ',
'fileduplicatesearch-filename'  => 'ਫ਼ਾਈਲ ਦਾ ਨਾਂ:',
'fileduplicatesearch-submit'    => 'ਖੋਜ',
'fileduplicatesearch-noresults' => '"$1" ਨਾਂ ਦੀ ਕੋਈ ਫ਼ਾਈਲ ਨਹੀਂ ਲੱਭੀ।',

# Special:SpecialPages
'specialpages'                   => 'ਖ਼ਾਸ ਸਫ਼ੇ',
'specialpages-group-maintenance' => 'ਪ੍ਰਬੰਧਕੀ ਰਪਟਾਂ',
'specialpages-group-other'       => 'ਹੋਰ ਖ਼ਾਸ ਸਫ਼ੇ',
'specialpages-group-login'       => 'ਲਾਗਇਨ / ਖਾਤਾ ਬਣਾਓ',
'specialpages-group-changes'     => 'ਤਾਜ਼ਾ ਤਬਦੀਲੀਆਂ ਅਤੇ ਚਿੱਠੇ',
'specialpages-group-media'       => 'ਮੀਡੀਆ ਦੀਆਂ ਰਪਟਾਂ ਅਤੇ ਅੱਪਲੋਡ',
'specialpages-group-users'       => 'ਵਰਤੋਂਕਾਰ ਅਤੇ ਹੱਕ',
'specialpages-group-highuse'     => 'ਜ਼ਿਆਦਾ ਵਰਤੋਂ ਵਾਲੇ ਸਫ਼ੇ',
'specialpages-group-pages'       => 'ਸਫ਼ਿਆਂ ਦੀਆਂ ਸੂਚੀਆਂ',
'specialpages-group-pagetools'   => 'ਸਫ਼ੇ ਦੇ ਸੰਦ',
'specialpages-group-wiki'        => 'ਸਮੱਗਰੀ ਅਤੇ ਸੰਦ',
'specialpages-group-redirects'   => 'ਖ਼ਾਸ ਸਫ਼ੇ ਰੀਡਿਰੈਕਟ ਕੀਤੇ ਜਾ ਰਹੇ ਹਨ',
'specialpages-group-spam'        => 'ਸਪੈਮ ਦੇ ਸੰਦ',

# Special:BlankPage
'blankpage'              => 'ਖ਼ਾਲੀ ਸਫ਼ਾ',
'intentionallyblankpage' => 'ਇਹ ਸਫ਼ਾ ਜਾਣ-ਬੁੱਝ ਕੇ ਖ਼ਾਲੀ ਛੱਡਿਆ ਗਿਆ ਹੈ।',

# External image whitelist
'external_image_whitelist' => " #ਇਸ ਲਾਈਨ ਨੂੰ ਇੰਝ ਹੀ ਰਹਿਣ ਦਿਓ <pre>
#ਹੇਠਾਂ ਓਹੀ ਐਕਸਪ੍ਰੈਸ਼ਨ ਪਾਓ (ਜਿਹੜਾ ਹਿੱਸਾ // ਦੇ ਵਿਚਾਲੇ ਹੈ)
#ਇਹ ਬਾਹਰੀ ਤਸਵੀਰਾਂ ਦੇ URLs (ਹੌਟਲਿੰਕਡ) ਨਾਲ ਮਿਲਣਗੀਆਂ
#ਜਿਹੜੀਆਂ ਮਿਲਣਗੀਆਂ ਓਹ ਬਤੌਰ ਤਸਵੀਰਾਂ ਦਿੱਸਣਗੀਆਂ ਨਹੀਂ ਤਾਂ ਤਸਵੀਰ ਦਾ ਸਿਰਫ਼ ਲਿੰਕ ਨਜ਼ਰ ਆਵੇਗਾ
#'#' ਨਾਲ਼ ਸ਼ੁਰੂ ਹੋਣ ਵਾਲ਼ੀਆਂ ਲਾਈਨਾਂ ਟਿੱਪਣੀਆਂ ਵਾਂਗ ਲਈਆਂ ਜਾਂਦੀਆਂ ਹਨ
#ਇਹ ਕੇਸ-ਇਨਸੈਂਸਟਿਵ ਹੈ

#ਸਾਰੇ ਰੈਜੈਕਸ ਫ਼ਰੈਗਮੈਂਟ ਇਸ ਲਾਈਨ ਤੋਂ ਉੱਪਰ ਪਾਓ। ਇਸ ਲਾਈਨ ਨੂੰ ਇੰਝ ਹੀ ਰਹਿਣ ਦਿਓ </pre>",

# Special:Tags
'tag-filter'              => '[[Special:Tags|ਟੈਗ]] ਫਿਲਟਰ:',
'tag-filter-submit'       => 'ਛਾਨਣੀ',
'tags-title'              => 'ਟੈਗ',
'tags-tag'                => 'ਟੈਗ ਦਾ ਨਾਮ',
'tags-description-header' => 'ਅਰਥ ਦਾ ਪੂਰਾ ਬਿਓਰਾ',
'tags-hitcount-header'    => 'ਟੈਗ ਕੀਤੀਆਂ ਤਬਦੀਲੀਆਂ',
'tags-edit'               => 'ਸੋਧੋ',
'tags-hitcount'           => '$1 {{PLURAL:$1|ਤਬਦੀਲੀ|ਤਬਦੀਲੀਆਂ}}',

# Special:ComparePages
'comparepages'                => 'ਸਫ਼ੇ ਮਿਲਾਓ',
'compare-selector'            => 'ਸਫ਼ੇ ਦੀਆਂ ਰਿਵੀਜਨਾਂ ਮਿਲਾਓ',
'compare-page1'               => 'ਸਫ਼ਾ ੧',
'compare-page2'               => 'ਸਫ਼ਾ ੨',
'compare-rev1'                => 'ਰਿਵੀਜਨ 1',
'compare-rev2'                => 'ਰਿਵੀਜਨ ੨',
'compare-submit'              => 'ਮਿਲਾਓ',
'compare-invalid-title'       => 'ਤੁਹਾਡੇ ਵੱਲੋਂ ਦਿੱਤਾ ਗਿਆ ਸਿਰਲੇਖ ਗ਼ਲਤ ਹੈ।',
'compare-title-not-exists'    => 'ਦਿੱਤਾ ਗਿਆ ਸਿਰਲੇਖ ਮੌਜੁਦ ਨਹੀਂ ਹੈ।',
'compare-revision-not-exists' => 'ਦਿੱਤੀ ਗਈ ਰਿਵੀਜਨ ਮੌਜੂਦ ਨਹੀਂ ਹੈ।',

# Database error messages
'dberr-header'    => 'ਇਸ ਵਿਕੀ ਵਿਚ ਔਕੜ ਹੈ',
'dberr-problems'  => "ਅਫ਼ਸੋਸ! ਇਸ ਸਾਈਟ 'ਤੇ ਕੁਝ ਤਕਨੀਕੀ ਔਕੜਾਂ ਆ ਰਹੀਆਂ ਹਨ।",
'dberr-again'     => 'ਕੁਝ ਮਿੰਟਾਂ ਲਈ ਉਡੀਕ ਕਰਨ ਅਤੇ ਮੁੜ ਲੋਡ ਕਰਨ ਦੀ ਕੋਸ਼ਿਸ਼ ਕਰੋ',
'dberr-usegoogle' => 'ਉਨੀ ਦੇਰ ਤੱਕ ਤੁਸੀਂ ਗੂਗਲ ਰਾਹੀਂ ਲੱਭਣ ਦੀ ਕੋਸ਼ਿਸ਼ ਕਰ ਸਕਦੇ ਹੋ।',

# HTML forms
'htmlform-invalid-input'       => 'ਤੁਹਾਡੀ ਕੁਝ ਇਨਪੁਟ ਵਿਚ ਔਕੜਾਂ ਹਨ।',
'htmlform-select-badoption'    => 'ਤੁਹਾਡੇ ਵੱਲੋਂ ਦਿੱਤਾ ਮੁੱਲ ਇੱਕ ਸਹੀ ਚੋਣ ਨਹੀਂ ਹੈ।',
'htmlform-float-invalid'       => 'ਤੁਹਾਡੇ ਵੱਲੋਂ ਦਿੱਤਾ ਮੁੱਲ ਇੱਕ ਅੰਕ ਨਹੀਂ ਹੈ।',
'htmlform-required'            => 'ਇਹ ਮੁੱਲ ਲੋੜੀਂਦਾ ਹੈ',
'htmlform-submit'              => 'ਭੇਜੋ',
'htmlform-reset'               => 'ਤਬਦੀਲੀਆਂ ਵਾਪਸ ਕਰੋ',
'htmlform-selectorother-other' => 'ਹੋਰ',

# New logging system
'logentry-delete-delete'     => '$1 ਨੇ $3 ਸਫ਼ਾ ਮਿਟਾਇਆ',
'logentry-delete-restore'    => '$1 ਨੇ $3 ਸਫ਼ਾ ਬਹਾਲ ਕੀਤਾ',
'logentry-suppress-delete'   => '$1 ਨੇ $3 ਸਫ਼ਾ ਦਬਾਇਆ',
'revdelete-content-hid'      => 'ਸਮੱਗਰੀ ਲੁਕਾਈ ਹੋਈ',
'revdelete-summary-hid'      => 'ਸੋਧ ਸਾਰ ਲੁਕਾਈ ਹੋਈ',
'revdelete-uname-hid'        => 'ਵਰਤੋਂਕਾਰ ਨਾਂ ਲੁਕਾਇਆ ਹੋਇਆ',
'revdelete-content-unhid'    => 'ਸਮੱਗਰੀ ਲੁਕਾਈ ਹੋਈ',
'revdelete-summary-unhid'    => 'ਸੋਧ ਸਾਰ ਲੁਕਾਈ ਹੋਈ',
'revdelete-uname-unhid'      => 'ਵਰਤੋਂਕਾਰ ਨਾਂ ਲੁਕਾਇਆ ਹੋਇਆ',
'logentry-move-move'         => "$1 ਨੇ $3 ਪੰਨੇ $4 'ਤੇ ਸਥਾਨਾਂਤਰਿਤ ਕੀਤਾ",
'logentry-move-move_redir'   => "$1 ਨੇ ਰੀਡਿਰੈਕਟ ਉੱਤੋਂ ਸਫ਼ਾ $3 $4 'ਤੇ ਭੇਜਿਆ",
'logentry-newusers-newusers' => 'ਮੈਂਬਰ ਖਾਤਾ $1 ਬਣਾਇਆ ਗਿਆ',
'logentry-newusers-create'   => 'ਵਰਤੋਂਕਾਰ ਖਾਤਾ $1 ਬਣਾਇਆ ਗਿਆ',
'logentry-newusers-create2'  => 'ਵਰਤੋਂਕਾਰ ਖਾਤਾ $3 $1 ਦੁਆਰਾ ਬਣਾਇਆ ਗਿਆ ਸੀ',
'newuserlog-byemail'         => 'ਪਾਸਵਰਡ ਈਮੇਲ ਰਾਹੀਂ ਭੇਜਿਆ ਗਿਆ',

# Feedback
'feedback-subject' => 'ਵਿਸ਼ਾ:',
'feedback-message' => 'ਸੁਨੇਹਾ:',
'feedback-cancel'  => 'ਰੱਦ ਕਰੋ',
'feedback-submit'  => 'ਵਿਚਾਰ ਦਿਓ',
'feedback-adding'  => 'ਸਫ਼ੇ ਨਾਲ਼ ਵਿਚਾਰ ਜੁੜ ਰਹੇ ਹਨ...',
'feedback-error2'  => 'ਦੋਸ਼:ਸੋਧ ਫੇਲ੍ਹ ਹੋਈ',
'feedback-error3'  => 'ਦੋਸ਼:API ਵੱਲੋਂ ਕੋਈ ਜੁਆਬ ਨਹੀਂ',
'feedback-close'   => 'ਹੋ ਗਿਆ',
'feedback-bugnew'  => 'ਮੈਂ ਚੈੱਕ ਕੀਤਾ। ਇੱਕ ਨਵੇਂ ਦੋਸ਼ ਦੀ ਰਿਪੋਰਟ ਕਰੋ',

# API errors
'api-error-badaccess-groups'   => 'ਤੁਹਾਨੂੰ ਇਸ ਵਿਕੀ ਉੱਤੇ ਫ਼ਾਈਲਾਂ ਅੱਪਲੋਡ ਕਰਨ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'api-error-badtoken'           => 'ਅੰਦਰੂਨੀ ਦੋਸ਼: ਗ਼ਲਤ ਟੋਕਨ',
'api-error-empty-file'         => 'ਤੁਹਾਡੇ ਵਲੋਂ ਦਿੱਤੀ ਫ਼ਾਈਲ ਖ਼ਾਲੀ ਸੀ।',
'api-error-emptypage'          => 'ਨਵੇਂ, ਖ਼ਾਲੀ ਸਫ਼ੇ ਬਣਾਉਣ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'api-error-file-too-large'     => 'ਤੁਹਾਡੇ ਵਲੋਂ ਦਿੱਤੀ ਫ਼ਾਈਲ ਬਹੁਤ ਵੱਡੀ ਸੀ।',
'api-error-filename-tooshort'  => 'ਫ਼ਾਈਲ ਦਾ ਨਾਂ ਬਹੁਤ ਛੋਟਾ ਹੈ।',
'api-error-filetype-banned'    => 'ਇਸ ਕਿਸਮ ਦੀ ਫ਼ਾਈਲ ਦੀ ਮਨਾਹੀ ਹੈ।',
'api-error-filetype-missing'   => 'ਇਸ ਫ਼ਾਈਲ ਨਾਂ ਵਿਚ ਐਕਸਟੈਂਸ਼ਨ ਨਹੀਂ ਹੈ।',
'api-error-http'               => 'ਅੰਦਰੂਨੀ ਦੋਸ਼: ਸਰਵਰ ਨਾਲ਼ ਰਾਬਤਾ ਨਹੀਂ ਹੋ ਰਿਹਾ',
'api-error-illegal-filename'   => 'ਇਸ ਫ਼ਾਈਲ-ਨਾਂ ਦੀ ਇਜਾਜ਼ਤ ਨਹੀਂ ਹੈ।',
'api-error-mustbeloggedin'     => 'ਫ਼ਾਈਲਾਂ ਅੱਪਲੋਡ ਕਰਨ ਲਈ ਤੁਹਾਡਾ ਦਾਖ਼ਲ ਹੋਣਾ ਲਾਜ਼ਮੀ ਹੈ।',
'api-error-mustbeposted'       => 'ਅੰਦਰੂਨੀ ਦੋਸ਼:ਬੇਨਤੀ ਲਈ HTTP POST ਲੋੜੀਂਦੀ ਹੈ।',
'api-error-noimageinfo'        => 'ਅੱਪਲੋਡ ਸਫਲ਼ ਹੋਇਆ ਪਰ ਸਰਵਰ ਨੇ ਇਸ ਫ਼ਾਈਲ ਬਾਰੇ ਸਾਨੂੰ ਕੋਈ ਜਾਣਕਾਰੀ ਨਹੀਂ ਦਿੱਤੀ।',
'api-error-nomodule'           => 'ਅੰਦਰੂਨੀ ਦੋਸ਼:ਕੋਈ ਅੱਪਲੋਡ ਮਾਪਦੰਡ ਨਹੀਂ ਰੱਖਿਆ ਗਿਆ।',
'api-error-ok-but-empty'       => 'ਅੰਦਰੂਨੀ ਦੋਸ਼: ਸਰਵਰ ਵੱਲੋਂ ਕੋਈ ਜੁਆਬ ਨਹੀਂ।',
'api-error-stashfailed'        => 'ਅੰਦਰੂਨੀ ਦੋਸ਼:ਸਰਵਰ ਆਰਜ਼ੀ ਫ਼ਾਈਲ ਦਾ ਨੂੰ ਸਾਂਭ ਨਾ ਸਕਿਆ।',
'api-error-timeout'            => 'ਸਰਵਰ ਨੇ ਉਮੀਦ ਦੇ ਸਮੇਂ ਦੇ ਵਿਚ-ਵਿਚ ਕੋਈ ਜੁਆਬ ਨਹੀਂ ਦਿੱਤਾ।',
'api-error-unclassified'       => 'ਅਣਪਛਾਤਾ ਦੋਸ਼ ਆਇਆ ਹੈ।',
'api-error-unknown-code'       => 'ਅਣਪਛਾਤਾ ਦੋਸ਼: "$1"',
'api-error-unknown-error'      => 'ਅੰਦਰੂਨੀ ਦੋਸ਼:ਤੁਹਾਡੀ ਫ਼ਾਈਲ ਅੱਪਲੋਡ ਕਰਦੇ ਵਕਤ ਕੁਝ ਗੜਬੜ ਹੋ ਗਈ।',
'api-error-unknown-warning'    => 'ਅਣਪਛਾਤੀ ਚਿਤਾਵਨੀ: "$1".',
'api-error-unknownerror'       => 'ਅਣਪਛਾਤਾ ਦੋਸ਼: "$1".',
'api-error-uploaddisabled'     => 'ਇਸ ਵਿਕੀ ਉੱਤੇ ਅੱਪਲੋਡ ਬੰਦ ਕੀਤਾ ਹੋਇਆ ਹੈ।',
'api-error-verification-error' => 'ਸ਼ਾਇਦ ਇਹ ਫ਼ਾਈਲ ਖ਼ਰਾਬ ਹੈ ਜਾਂ ਇਹਦੀ ਐਕਸਟੈਂਸ਼ਨ ਗ਼ਲਤ ਹੈ।',

);
