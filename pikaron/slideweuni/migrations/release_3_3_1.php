<?php
/**
 *
 * Slideshow for Header extension for the phpBB >=3.3.0 Forum Software package.
 *
 * @copyright (c) 2020 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\slideweuni\migrations;

class release_3_3_1 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\pikaron\slideweuni\migrations\release_3_3_0',
		);
	}

	public function update_data()
	{
		return array(
			array('config.update', array('slideweuni_version', '3.3.1')),
		);
	}
}