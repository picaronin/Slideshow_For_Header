<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
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
		// Requires phpBB 3.2.4 or newer.
		$config = $this->container->get('config');
		$is_enableable = phpbb_version_compare($config['version'], '3.2.4', '>=');

		// Display a custom warning message if requirement fails.
		if (!$is_enableable)
		{
			$language = $this->container->get('language');
			$language->add_lang('slideweuni', 'pikaron/slideweuni');
			trigger_error($language->lang('SLIDE_WEUNI_INSTALL_ERROR'), E_USER_WARNING);
		}

		return $is_enableable;
	}
}
