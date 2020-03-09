<?php
/**
 *
 * Slideshow for Header extension for the phpBB >=3.3.0 Forum Software package.
 *
 * @copyright (c) 2020 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\slideweuni;

/**
* Extension class Slideshow for Header for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/**
	* Check whether or not the extension can be enabled.
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$config = $this->container->get('config');
		$language = $this->container->get('language');
		$language->add_lang('slideweuni', 'pikaron/slideweuni');

		// Verify if there is a previous version installed
		if (isset($config['slide_weuni_version']))
		{
			trigger_error($language->lang('SLIDE_WEUNI_OLD_VERSION', $config['slide_weuni_version'], $config['slide_weuni_version'], $config['slide_weuni_version']), E_USER_WARNING);
		}

		/**
		 * Check phpBB requirements
		 *
		 * Requires phpBB 3.3.0 or greater
		 *
		 * @return bool
		 */
		$is_ver_phpbb = phpbb_version_compare($config['version'], '3.3.0', '>=');

		// Display a custom warning message if requirement fails.
		if (!$is_ver_phpbb)
		{
			trigger_error($language->lang('SLIDE_WEUNI_PHPBB_ERROR'), E_USER_WARNING);
		}

		/**
		 * Check PHP requirements
		 *
		 * Requires PHP 7.1.0 or greater
		 *
		 * @return bool
		 */
		$is_ver_php = phpbb_version_compare(PHP_VERSION, '7.1.0', '>=');

		// Display a custom warning message if requirement fails.
		if (!$is_ver_php)
		{
			trigger_error($language->lang('SLIDE_WEUNI_PHP_ERROR'), E_USER_WARNING);
		}

		return $is_ver_phpbb && $is_ver_php;
	}
}
