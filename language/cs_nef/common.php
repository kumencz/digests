<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2017 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

global $phpbb_container;

$config = $phpbb_container->get('config');

$lang = array_merge($lang, array(
	'PLURAL_RULE'						=> 1,

	'DIGESTS_ALL_FORUMS'				=> 'Všechna',
	'DIGESTS_AM'						=> ' AM', // not used if date/time formats do not permit AM and PM
	'DIGESTS_AUTHOR'					=> 'Autor',
	'DIGESTS_BAD_SEND_HOUR'				=> 'Hodina odeslání přehledu uživateli %s je neplatná. Zadáno %d. Číslo musí být >= 0 a < 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Blokovat obrázky',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Znemožní zobrazení obrázků v přehledech, včetně smajlíků a obrázků přiložených příspěvkům nebo soukromým zprávám. Vhodné pro pomalá přípojení. Textové přehledy nikdy obrázky nezobrazují.',
	'DIGESTS_BOARD_LIMIT'				=> '%d (Nastavený limit)',
	'DIGESTS_BY'						=> 'Od',
	'DIGESTS_CLOSED_QUOTE'				=> '&rdquo;',
	'DIGESTS_CLOSED_QUOTE_TEXT'			=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Maximální počet příspěvků v přehledu',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Vlož číslo větší než 0 pokud chceš omezit počet příspěvků v přehledu.',
	'DIGESTS_DAILY'						=> 'Denně',
	'DIGESTS_DATE'						=> 'Datum',
	'DIGESTS_DELIMITER'					=> ' :: ', // Used to help show the hierarchy of forum names from the index on down
	'DIGESTS_DISABLED_MESSAGE'			=> 'Pro povolení políčka, vyber "Základní nastavení" a zvol typ',
	'DIGESTS_DISCLAIMER'				=> 'Tento přehled je odesílán registrovaným členům fóra <a href="%1$s">%2$s</a>. Můžeš zakázat nebo změnit nastavení zasílání přehledů z fór zde: <a href="%sucp.%s">Uživatelský panel</a>. Dotazy k přehledům posílej na email <a href="mailto:%1$s?subject=Přehledy">%2$s správce</a>.',
	'DIGESTS_EXPLANATION'				=> 'Přehledy jsou emailové souhrny příspěvků za určitě období. Zasílat přehledy je možné každý den, týden nebo měsíc ve zvolený čas. Je možné vybrat pouze některá fóra ze kterých se budou zasílat přehledy nebo si nechat zasílat přehledy ze všech fór kam máte přístup. Kdykoliv je možné zrušit odběr přehledů zde na této stránce. Většina lidí považuje přehledy za velmi užitečné. Doporučujeme vyzkoušet!',
	'DIGESTS_FILTER_ERROR'				=> 'Zasílač emailů byl zavolán s neplatným user_digest_filter_type = %s',
	'DIGESTS_FILTER_FOES'				=> 'Filtrovat příspěvky od mých nepřátel',
	'DIGESTS_FILTER_TYPE'				=> 'Filtrovat typy příspěvků',
	'DIGESTS_FORMAT_HTML'				=> 'HTML',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'HTML umožňuje formátování, BBKódy a podpisy (pokud jsou povoleny). Jsou použity i styly pokud to váš emailový program podporuje',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'HTML, příspěvky jsou vloženy v tabulce',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Podobné k "HTML" jen s rozdílem že příspěvky jsou v tabulkách',
	'DIGESTS_FORMAT_PLAIN'				=> 'Čisté HTML',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Čisté HTML neobsahuje styly a barvy',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Čisté HTML, příspěvky jsou v tabulkách',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Podobné k "Čisté HTML" jen s rozdílem že příspěvky jsou v tabulkách',
	'DIGESTS_FORMAT_STYLING'			=> 'Vzhled přehledů',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Vězte že finální vzhled závisí na schopnostech emailového programu který používáte. Přesuňte kurzor nad jednotlivé typy zobrazení a dozvíte se více o každé možnosti.',
	'DIGESTS_FORMAT_TEXT'				=> 'Text',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Žádné HTML značky se neobjevý v přehledu. Pouze text.',
	'DIGESTS_FORUMS_WANTED'				=> 'Chtěná fóra',
	'DIGESTS_FREQUENCY'					=> 'Četnost přehledů',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Týdenní přehledy jsou zasílány v %s. Měsíční přehledy jsou zasílány první den v měsíci. Koordinovaný Universal Time (UTC) je použit pro zjištění dne v týdnu.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Typ přehledu',
	'DIGESTS_HOURS_ABBREVIATION' 		=> ' h',	// see: http://www.scienceeditingexperts.com/which-is-the-correct-abbreviation-for-hours-2h-2-h-2hs-2-hs-2hrs-or-2-hrs, DIGESTS_AM and DIGESTS_PM are used instead if specified in user_dateformat
	'DIGESTS_INTRODUCTION' 				=> 'Zde je poslední přehled příspěvků z fóra %s. <em>Ne</em>odpovídej na tento email pro odpověď na zaslané témata, příspěvky nebo soukromé zprávy. <em>Navšitv</em> proto fórum a zapoj se do diskuze! (Pokud je formát přehledu divný, ujistit se, že je přístupný vzdálený obsah.)',
	'DIGESTS_JUMP_TO_MSG'				=> 'ID zprávy',
	'DIGESTS_JUMP_TO_POST'				=> 'ID příspěvku', 
	'DIGESTS_LASTVISIT_RESET'			=> 'Přepiš datum poslední návštěvy fóra když mi je zaslán přehled',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Pokud je povoleno, příspěvky na fóru se zobrazí jako přečtené pokud byly zaslány před datem vytvoření tvého posledního přehledu. Výběrem této možnosti dáš najevo že čtení přehledu příspěvků z emailu nahrazuje čtení fóra přímo.',
	'DIGESTS_LINK'						=> 'Odkaz',
	'DIGESTS_MARK_READ'					=> 'Označit jako přečtené pokud se objeví v přehledu',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Maximální počet vypsáných slov z příspěvku',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Pro zajištění konzistentního vykreslení, když se zkracuje zobrazný příspěvek, HTML bude odstraněno z příspěvku. Nech prázdné nebo napiš 0 pro zobrazení vždy celého příspvěku v přehledu. Pokud je vybráno &quot;Nezobrazovat text příspěvků vůbec&quot;, toto pole není bráno v potaz a text příspěvku nebude v přehledu.',
	'DIGESTS_MAX_SIZE'					=> 'Maximální počet vypsáných slov z příspěvku',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Minimální počet slov v příspěvku aby se zobrazil v přehledu',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Pokud necháš prázdné nebo napíšeš 0, jakkoliv dlouhé příspěvky budou zahrnuty.',
	'DIGESTS_MONTHLY'					=> 'Měsíčně',
	'DIGESTS_NEW'						=> 'Nové',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'Zahrnout pouze nové příspěvky',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Toto nastavení filtruje všechny příspěvky zaslané před datem poslední návštěvy tohoto fóra. Pokud fórum navštěvuješ často a čteš většinu příspěvků, nastavení zabrání znovu objevení příspěvků v tvém přehledu. Také to znamená že můžeš prošvihnout nepřečtené příspěvky před poslední návštěvou fóra.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'Nejsou žádné nové příspěvky se záložkou.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Bez omezení',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Musí být vybráno minimálně jedno fórum',
	'DIGESTS_NO_LIMIT'					=> 'Bez limitu',
	'DIGESTS_NO_POSTS'					=> 'Nejsou žádné nové příspěvky.',
	'DIGESTS_NO_POST_TEXT'				=> 'Nezobrazovat text příspěvků vůbec',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Nemáš žádné nové nebo nepřečtené soukromé zprávy.',
	'DIGESTS_NO_TIMEZONE'				=> 'Musíš <a href="%s">upřesnit časové pásmo</a> ve tvém profilu dříve než se přihlásíš k přehledům.',
	'DIGESTS_NONE'						=> 'Žádné (odhlásit)',
	'DIGESTS_ON'						=> 'na',
	'DIGESTS_OPEN_QUOTE'				=> '&ldquo;',
	'DIGESTS_OPEN_QUOTE_TEXT'			=> '"',
	'DIGESTS_PM'						=> ' SZ', // not used if date/time formats do not permit AM and PM
	'DIGESTS_PM_SUBJECT'				=> 'Předmět soukromé zprávy',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br />(Klikněte na obrázek pro zobrazení v plné velikoti.)',
	'DIGESTS_POST_TEXT'					=> 'Text příspěvku', 
	'DIGESTS_POST_TIME'					=> 'Čas příspěvku', 
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br />____________________<br />', // Place here whatever code (make sure it is valid HTML) you want to use to distinguish the end of a post from the beginning of the signature line
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'zasláno do tématu',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Všechny příspěvky',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Pouze první příspěvek témat',
	'DIGESTS_POWERED_BY'				=> 'phpbbservices.com',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Digests rozšíření pro phpBB vytvořil',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Přidat mé nepřečtené soukromé zprávy',
	'DIGESTS_PUBLISH_DATE'				=> 'Tento přehled byl vdán speciálně pro %1$s na %2$s',
	'DIGESTS_REGISTER'					=> 'Příjmout přehled',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Bude použito výchozí nastavení fóra. Po dokončení registrace můžete upravit nebo zrušit zasílání přehledů.',
	'DIGESTS_REMOVE_YOURS'				=> 'Nezahrnout mé příspěvky',
	'DIGESTS_REPLY'						=> 'Odpovědět',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Drahý',
	'DIGESTS_SELECT_FORUMS'				=> 'Zahrnout příspěvky z těchto fór',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Zobrazené kategorie a fóra jsou pouze ta která můžete číst. Výběr fór není povolen pokud jsou žádány pouze témata se záložkou. Heslem chráněná fóra nejsou zobrazena a nemohou být vybrána. Pokud není vybráno Všechno nebo Se záložkou, musíš vybrat alespoň jedno fórum pro zdárné uložení nastavení.<br /><br />Tučně zvýrazněné názvy fór (pokud nějaké), jsou fóra u kterých administrátor vyžádal zahrnutí do všech přehledů (kromě nastavení zasílání pouze témat se záložkou). Nemůžete zrušit zahrnutí těchto fór. Přeškrtnuté názvy fór jsou administrátorem zakázaná fóra pro zahrnutí do přehledů (kromě nastavení zasílání pouze témat se záložkou) a jsou proto nevybrány.',
	'DIGESTS_SEND_HOUR' 				=> 'Hodina odeslání',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'Čas odeslání přehledu je odvozen od časové zóny nastavené pro celé fórum.',
	'DIGESTS_SEND_IF_NO_NEW_MESSAGES'	=> 'Zaslat přehled pokud nejsou nové zprávy:',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Zaslat přehled pokud nejsou nové příspěvky',
	'DIGESTS_SENDER'	 				=> 'Odesílatel',
	'DIGESTS_SENT_TO'					=> 'poslat pro',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'ti poslal soukromou zprávu s předmětem',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Zobrazit přílohy',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Pokud je povoleno, přiložené obrázky se objeví v přehledu na konci příspěvku nebo soukromé zprávy. Neobrázkové přílohy se objeví jako odkazy (pouze HTML přehledy). BBKódy [img] tag není ovlivněn tímto nastavením.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Zobrazit pouze nové příspěvky',
	'DIGESTS_SHOW_PMS' 					=> 'Zobrazit mé soukromé zprávy',
	'DIGESTS_SIZE_ERROR'				=> sprintf("Toto pole je vyžadováno. Musíš vložit kladné celé číslo menší nebo rovno maximálnímu dovolenému administrátorem fóra. Maximální dovolení hodnota je %u. Pokud to je nula, tak zde není žádný limit.", $config['phpbbservices_digests_max_items']),
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Musíš zadat celé číslo nebo nechat pole prázdné. Pokud je tato hodnota nula, tak zde není žádný limit.',
	'DIGESTS_SKIP'						=> 'Přeskočit na obsah',
	'DIGESTS_SORT_BY'					=> 'Řazení příspěvků',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Přehledy jsou řazeny podle kategorie a pak podle fóra, tak jak jsou zobrazeny na úvodní stránce fóra. Nastavení řazení se použije pouze na příspěvky v tématech. Tradiční řazení je výchozí řazení používané již od phpBB 2, tedy témata s nejnovějšími příspěvky nejdříve a příspěvky v tématech od nejstaršího.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Tradiční řazení',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Tradiční řazení, poslední témata nejdříve',
	'DIGESTS_SORT_POST_DATE'			=> 'Od nejstarších k nejnovějším',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'Od nejnovějších k nejstarším',
	'DIGESTS_SORT_USER_ORDER'			=> 'Použít moje nastavení řazení z fóra',
	'DIGESTS_SUBJECT_TITLE'				=> '%1$s %2$s přehled',
	'DIGESTS_TAG_REPLACED'				=> '<strong>Upozornění: obsah odstraněn kvůli bezpečnostním důvodům. Klikni na odkaz příspěvku nebo tématu pro zobrazení celého obsahu příspěvku.</strong>',
	'DIGESTS_TITLE'						=> 'Přehledy',
	'DIGESTS_TRANSLATED_BY'				=> 'Přeložil',
	'DIGESTS_TRANSLATOR_NAME'			=> '',	// Leave null string to suppress translator name
	'DIGESTS_TRANSLATOR_CONTACT'		=> '',	// Leave null string to suppress contact info, if used use: mailto:name@emailaddress.com or a URL if you have a website.
	'DIGESTS_TOC'						=> 'Tabulka obsahu',
	'DIGESTS_TOC_EXPLAIN'				=> 'Pokud je fórum aktivní, můžeš chtít vložit tabulku obsahu do přehledů. V HTML přehledech tabulka obsahuje odkazy na příspěvky nebo soukromé zprávy v přehledu pro rychlejší orientaci.',
	'DIGESTS_UNKNOWN'					=> 'Neznámí',
	'DIGESTS_UNREAD'					=> 'Nepřečtený',
	'DIGESTS_UPDATED'					=> 'Tvoje nastavení přehledů bylo uloženo',
	'DIGESTS_USE_BOOKMARKS'				=> 'Pouze témata se záložkou',
	'DIGESTS_WEEKDAY' 					=> 'Neděle,Pondělí,Úterý,Středa,Čtvrtek,Pátek,Sobota',
	'DIGESTS_WEEKLY'					=> 'Týdně',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => '%s má soukromé zprávy',
	'DIGESTS_YOUR_DIGEST_OPTIONS' 		=> '%s, tvoje nastavení přehledů:',
	
	'UCP_DIGESTS'								=> 'Přehledy',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Další kritéria',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Nastavení dalších kritérií',
	'UCP_DIGESTS_BASICS'						=> 'Základní',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Základní nastavení',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Výběr fór',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Nastavení výběru fór',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Přehledy byly zavolány s neplatným režimem %s',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Filtry příspěvků',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Nastavení filtrů příspěvků',
));
