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

class release_1_3_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return !empty($this->config['slideweuni_version']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('slideweuni_version', '1.3.0')),
			array('config.add', array('slideweuni_title', 1)),
			array('config.add', array('slideweuni_active', 1)),
			array('config.add', array('slideweuni_cant_img', 3)),
			array('config.add', array('slideweuni_effect', 1)),
			array('config.add', array('slideweuni_delay', 3500)),
			array('config.add', array('slideweuni_aleatory', 1)),
			array('config.add', array('slideweuni_controls', 1)),
			array('config.add', array('slideweuni_inter', 1)),
			array('config.add', array('slideweuni_search', 1)),
			array('config.add', array('slideweuni_color_tit_f', '#0b9f0d')),
			array('config.add', array('slideweuni_color_tit_b', '#ecfb06')),

			// Add ACP extension category
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_SLIDE_WEUNI',
			)),

			// Add ACP preferences module
			array('module.add', array(
				'acp',
				'ACP_SLIDE_WEUNI',
				array(
					'module_basename'	=> '\pikaron\slideweuni\acp\acp_slideweuni_module',
					'modes'				=> array(
						'slide',
					),
				),
			)),

			// Add sample data
			array('custom', array(array($this, 'insert_data'))),
		);
	}

	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'slideweuni'	=> array(
					'COLUMNS'	=> array(
						'id'	=> array('UINT:10', 0),
						'image'	=> array('VCHAR', ''),
						'url'	=> array('VCHAR', ''),
					),
					'PRIMARY_KEY'	=> 'id',
				),
			),
		);
	}

	public function revert_schema()
	{
		return	array(
			'drop_tables' => array(
				$this->table_prefix . 'slideweuni',
			),
		);
	}

	public function insert_data()
	{
		if ($this->db_tools->sql_table_exists($this->table_prefix . 'slideweuni'))
		{
			// Define sample data
			$config_data = array(
				array(
					'id'	=> '1',
					'image' => 'https://i.imgur.com/ZVzD4JP.jpg',
					'url'	=> 'https://github.com/picaronin',
					),
				array(
					'id'	=> '2',
					'image' => 'https://i.imgur.com/UBamNmp.jpg',
					'url'	=> 'http://www.phpbb-es.com',
				),
				array(
					'id'	=> '3',
					'image' => 'slide_we.jpg',
					'url'	=> 'https://www.phpbb-es.com/foro/viewtopic.php?f=147&t=42139',
				),
			);
			// Insert sample data
			$this->db->sql_multi_insert($this->table_prefix . 'slideweuni', $config_data);
		}
	}
}
