<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
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
		'SLIDE_WEUNI_PHPBB_ERROR'			=> 'Slideshow for Header no se puede instalar.<br><br>- Se requiere phpBB 3.3.0 o posterior.',
		'SLIDE_WEUNI_PHP_ERROR'				=> 'Slideshow for Header no se puede instalar.<br><br>- Se requiere php 7.1.0 o posterior.',
		'SLIDE_WEUNI_OLD_VERSION'			=> 'Slideshow for Header no se puede instalar.<br><br>Existe una versión obsoleta de la extension instalada.<br><br>Antes de instalar la nueva version, es necesario desinstalar completamente la version SlideWeUni_%1$s<br><br>Puede descargar la version obsoleta desde el siguiente enlace <a href="http://www.siteproall.com/SlideWeUni/SlideWeUni_%2$s.zip">Descargar SlideWeUni_%3$s</a>.',
));
