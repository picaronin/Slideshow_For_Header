<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2020 Picaron
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
		'ACP_SLIDE_WEUNI'					=> 'Slideshow voor Header',
		'ACP_SLIDE_WEUNI_SETTINGS'			=> 'Instellingen',
		'ACP_SLIDE_WEUNI_EXPLAIN'			=> 'Voorgestelde grootte van afbeeldingen: 2570px x 465px.<br>Pad voor de upload:: ./ext/pikaron/slideweuni/images/ of URL met externe link (Afbeeldingen gehost op het internet)<br>(Optioneel - De afbeeldingen worden willekeurig weergegeven)<br>(Optioneel - URL-velden die moeten worden omgeleid naar externe links)',
		'ACP_SLIDE_WEUNI_VERSION'			=> 'Extensie versie: ',
		'ACP_SLIDE_WEUNI_IMAGES'			=> 'Gegevens van afbeeldingen',
		'L_SLIDE_WEUNI_ACTIVE'				=> 'SlideShow inschakelen',
		'L_SLIDE_WEUNI_DELAY'				=> 'Vertraging voor overgang tussen afbeeldingen',
		'L_SLIDE_WEUNI_DELAY_EXPLAIN'		=> '(Minimum: 1000 ms = 1 Seconde, Maximum: 20000 ms = 20 Seconden)',
		'L_UNI_DELAY'						=> 'Milliseconden',
		'L_SLIDE_WEUNI_INTER'				=> 'De gebruiker kan spelen met de overgang van de afbeeldingen',
		'L_SLIDE_WEUNI_CONTROLS'			=> 'Toon bedieningselementen',
		'L_SLIDE_WEUNI_ALEATORY'			=> 'Afbeeldingen in willekeurige volgorde.',
		'L_SLIDE_WEUNI_TITLE'				=> 'Toon titel en beschrijving',
		'L_SLIDE_WEUNI_SEARCH'				=> 'Toon Zoek box in de kop',
		'L_SLIDE_WEUNI_EFFECT'				=> 'Effect',
		'L_SLIDE_WEUNI_COLOR_TIT_F'			=> 'Vul de kleur in van de titel en de beschrijving',
		'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(Formaat: #ffffff)',
		'L_SLIDE_WEUNI_COLOR_TIT_B'			=> 'Kleur van de RAND van de titel en beschrijving',
		'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(Formaat: #000000)',
		'L_SLIDE_WEUNI_COLOR_SELECT'		=> 'Klik in het vak om een kleur te selecteren',
		'L_SLIDE'							=> 'Schuiven',
		'L_FADE'							=> 'vervagen',
		'L_SLIDE_WEUNI_CANT_IMG'			=> 'Aantal afbeeldingen',
		'L_SLIDE_WEUNI_CANT_IMG_EXPLAIN'	=> '(Minimum: 2 - Maximum: 60)',
		'LOG_CONFIG_SLIDE'					=> '<strong>Bewerkte Slideshow extensie voor header</strong>',
		'L_SLIDE_WEUNI_NO_IMG'				=> 'Kon de afbeelding niet vinden met nummer ',
		'L_SLIDE_WEUNI_NO_IMG_URL'			=> 'Het externe beeld is NIET toegankelijk.',
		'L_SLIDE_WEUNI_NO_IMG_RUTE'			=> ' in de route ',
		'L_SLIDE_WEUNI_IMG'					=> 'Volledige naam of URL van Afbeelding nummer %s',
		'L_SLIDE_WEUNI_URL'					=> 'URL om naar door te verwijzen bij het klikken op de Afbeelding nummer %s',
));
