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
		'SLIDE_WEUNI_PHPBB_ERROR'			=> 'Slideshow voor Header kan niet worden geïnstalleerd. Het vereist phpBB 3.3.0 of nieuwer.',
		'SLIDE_WEUNI_PHP_ERROR'				=> 'Slideshow voor Header kan niet worden geïnstalleerd. Het vereist php 7.1.0 of nieuwer.',
		'SLIDE_WEUNI_OLD_VERSION'			=> 'Slideshow voor Header kan niet worden geïnstalleerd.<br><br>Er is een verouderde versie van de geïnstalleerde extensie aanwezig.<br><br>Voordat u de nieuwe versie installeert, moet u de SlideWeUni_%1$s versie volledig verwijderen<br><br>U kunt de verouderde versie downloaden via de volgende link <a href="http://www.siteproall.com/SlideWeUni/SlideWeUni_%2$s.zip">Download SlideWeUni_%3$s</a>.',
));
