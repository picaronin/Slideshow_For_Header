<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
 * Portuguese translation by null2
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
		'SLIDE_WEUNI_PHPBB_ERROR'			=> 'Slideshow for Header não pôde ser instalada. Ele requer phpBB 3.3.0 ou posterior.',
		'SLIDE_WEUNI_PHP_ERROR'				=> 'Slideshow for Header não pôde ser instalada. Ele requer php 7.1.0 ou posterior.',
		'SLIDE_WEUNI_OLD_VERSION'			=> 'Slideshow for Header não pôde ser instalada.<br><br>An outdated version of the installed extension exists.<br><br>Before installing the new version, it is necessary to completely uninstall the SlideWeUni_%1$s version<br><br>You can download the obsolete version from the following link <a href="http://www.siteproall.com/SlideWeUni/SlideWeUni_%2$s.zip">Download SlideWeUni_%3$s</a>.',
));
