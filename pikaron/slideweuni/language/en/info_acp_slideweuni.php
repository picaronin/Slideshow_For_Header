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
		'ACP_SLIDE_WEUNI'					=> 'Slideshow for Header',
		'ACP_SLIDE_WEUNI_SETTINGS'			=> 'Settings',
		'ACP_SLIDE_WEUNI_EXPLAIN'			=> 'Recommended maximum size of the images: 2570px x 465px.<br>Hosting route of the images: ./ext/pikaron/slideweuni/images/ or URL with external link (Images hosted on the Internet)<br>(Optional - The images are shown randomly)<br>(Optional - URL fields to redirect to external links)',
		'ACP_SLIDE_WEUNI_VERSION'			=> 'Extension Version: ',
		'ACP_SLIDE_WEUNI_IMAGES'			=> 'Data of Image',
		'L_SLIDE_WEUNI_ACTIVE'				=> 'Enable SlideShow',
		'L_SLIDE_WEUNI_DELAY'				=> 'Delay for transition between images',
		'L_SLIDE_WEUNI_DELAY_EXPLAIN'		=> '(Minimum: 1000 ms = 1 Second, Maximum: 20000 ms = 20 Seconds)',
		'L_UNI_DELAY'						=> 'MiliSeconds',
		'L_SLIDE_WEUNI_INTER'				=> 'The User can interact with the transition of the images',
		'L_SLIDE_WEUNI_CONTROLS'			=> 'Show Controls',
		'L_SLIDE_WEUNI_ALEATORY'			=> 'Images in random order',
		'L_SLIDE_WEUNI_TITLE'				=> 'Show Title and Description',
		'L_SLIDE_WEUNI_SEARCH'				=> 'Show Search Box in Header',
		'L_SLIDE_WEUNI_EFFECT'				=> 'Effect',
		'L_SLIDE_WEUNI_COLOR_TIT_F'			=> 'FILL color of the Title and Description',
		'L_SLIDE_WEUNI_COLOR_TIT_F_EXPLAIN' => '(Format: #ffffff)',
		'L_SLIDE_WEUNI_COLOR_TIT_B'			=> 'Color of the BORDER of the Title and Description',
		'L_SLIDE_WEUNI_COLOR_TIT_B_EXPLAIN' => '(Format: #000000)',
		'L_SLIDE_WEUNI_COLOR_SELECT'		=> 'Click in the box to select a colour',
		'L_SLIDE'							=> 'Slide',
		'L_FADE'							=> 'Blur',
		'L_SLIDE_WEUNI_CANT_IMG'			=> 'Amount of Images',
		'L_SLIDE_WEUNI_CANT_IMG_EXPLAIN'	=> '(Minimum: 2 - Maximum: 60)',
		'LOG_CONFIG_SLIDE'					=> '<strong>Edited Extension Slideshow for Header</strong>',
		'L_SLIDE_WEUNI_NO_IMG'				=> 'Unable to locate the Image with number',
		'L_SLIDE_WEUNI_NO_IMG_URL'			=> 'The External image is NOT accessible.',
		'L_SLIDE_WEUNI_NO_IMG_RUTE'			=> ' in the route ',
		'L_SLIDE_WEUNI_IMG'					=> 'Full Name or URL of Image number %s',
		'L_SLIDE_WEUNI_URL'					=> 'URL to redirect when clicking on the Image number %s',
));
