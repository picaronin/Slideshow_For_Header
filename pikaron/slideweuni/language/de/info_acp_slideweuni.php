<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
 * Deutsch translation by jan_2017
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
		'ACP_SLIDE_WEUNI'					=> 'Slideshow for Header',
		'ACP_SLIDE_WEUNI_SETTINGS'			=> 'Einstellungen',
		'ACP_SLIDE_WEUNI_EXPLAIN'			=> 'Empfohlene maximale Bildgröße: 2570px x 465px. <br>FTP Verzeichnis wenn das Bild auf euren Webserver liegt: root/ext/pikaron/slideweuni/images/ oder für Bilderadresse mit externer Bildquelle aus dem Internet',
		'ACP_SLIDE_WEUNI_VERSION'			=> 'Aktuelle Version der Erweiterung: ',
		'ACP_SLIDE_WEUNI_IMAGES'			=> 'Einstellungen zu den Bildern',
		'L_SLIDE_WEUNI_ACTIVE'				=> 'Bilderpräsentation aktivieren',
		'L_SLIDE_WEUNI_DELAY'				=> 'Verzögerung für den Übergang zwischen den einzelnen Bildern:',
		'L_SLIDE_WEUNI_DELAY_EXPLAIN'		=> '(Minimum: 1000 ms = 1 Sekunde , Maximum: 20000 ms = 20 Sekunden)',
		'L_UNI_DELAY'						=> 'Millisekunden',
		'L_SLIDE_WEUNI_INTER'				=> 'The User can interact with the transition of the images',
		'L_SLIDE_WEUNI_CONTROLS'			=> 'Zeige Kontrollvorrichtung an',
		'L_SLIDE_WEUNI_ALEATORY'			=> 'Bilder in Zufallsreihenfolge zeigen',
		'L_SLIDE_WEUNI_TITLE'				=> 'Zeige Bildtitel und Bildbeschreibung',
		'L_SLIDE_WEUNI_SEARCH'				=> 'Zeige Suchfunktion in Kopfzeile an',
		'L_SLIDE_WEUNI_EFFECT'				=> 'Übergangseffekte',
		'L_SLIDE_WEUNI_COLOR_TIT_F'			=> 'Füllfarbe für Bildtitel und Bildbeschreibung',
		'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(CSS Farbcode: #ffffff)',
		'L_SLIDE_WEUNI_COLOR_TIT_B'			=> 'Randfarbe für Bildtitel und Bildbeschreibung',
		'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(CSS Farbcode: #000000)',
		'L_SLIDE_WEUNI_COLOR_SELECT'		=> 'Klicken Sie in das Feld, um eine Farbe auszuwählen',
		'L_SLIDE'							=> 'Gleiteffekt',
		'L_FADE'							=> 'Verwischeffekt',
		'L_SLIDE_WEUNI_CANT_IMG'			=> 'Anzahl der Bilder',
		'L_SLIDE_WEUNI_CANT_IMG_EXPLAIN'	=> '(Minimum: 2 - Maximum: 60)',
		'LOG_CONFIG_SLIDE'					=> '<strong>Bearbeitete Erweiterung zur Bildpräsentation in der Kopfzeile</strong>',
		'L_SLIDE_WEUNI_NO_IMG'				=> 'Das Bild mit der Nummer konnte nicht gefunden werden: ',
		'L_SLIDE_WEUNI_NO_IMG_URL'			=> 'Das externe Image ist NICHT zugänglich.',
		'L_SLIDE_WEUNI_NO_IMG_RUTE'			=> ' auf der Route ',
		'L_SLIDE_WEUNI_IMG'					=> 'Dateiname im FTP Verzeichnis oder externe Internetadresse des %s. Bildes',
		'L_SLIDE_WEUNI_URL'					=> 'Internetadresse auf die umgeleitet werden soll wenn auf das %s. Bild geklickt wird',
));
