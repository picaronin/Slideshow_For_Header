<?php
/**
 *
 * Slideshow for Header extension for the phpBB >=3.3.0 Forum Software package.
 *
 * @copyright (c) 2020 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\slideweuni\acp;

class acp_slideweuni_info
{
	public function module()
	{
		return array(
			'filename'	=> '\pikaron\slideweuni\acp\acp_slideweuni_module',
			'title'		=> 'ACP_SLIDE_WEUNI_SETTINGS',
			'modes'		=> array(
				'slide'		=> array('title' => 'ACP_SLIDE_WEUNI_SETTINGS', 'auth' => 'ext_pikaron/slideweuni && acl_a_board', 'cat' => array('ACP_SLIDE_WEUNI')),
			),
		);
	}
}
