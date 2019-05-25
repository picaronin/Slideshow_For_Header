<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\slideweuni\core;

use Symfony\Component\DependencyInjection\Container;

class functions_slideweuni
{
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;

	/** @var \phpbb\language\language */
	protected $language;

	/**
	* The database table
	* @var string
	*/
	protected $slideweuni_table;

	/**
	* Constructor
	*
	* @param \phpbb\db\driver\driver_interface	$db
	* @param \phpbb\language\language			$language
	* @param string								$slideweuni_table
	*
	*/
	public function __construct
	(
		\phpbb\db\driver\driver_interface $db,
		\phpbb\language\language $language,
		$slideweuni_table
	)
	{
		$this->db					= $db;
		$this->language				= $language;
		$this->slideweuni_table		= $slideweuni_table;
	}

	/**
	* Read out config img values
	* Get all values
	*/
	function image_values($id)
	{
		$sql = 'SELECT * FROM ' . $this->slideweuni_table . ' WHERE id = ' . (int) $id;
		$result = $this->db->sql_query($sql);
		$image_values = $this->db->sql_fetchrow($result);
		$this->db->sql_freeresult($result);

		return $image_values;
	}

	/**
	* Set images config value. Creates missing config entry.
	*/
	function image_store($id, $image, $url)
	{
		$sql = 'UPDATE ' . $this->slideweuni_table . "
				 SET image = '$image', url = '$url'
				 WHERE id = '$id'";
		$this->db->sql_query($sql);

		if (!$this->db->sql_affectedrows())
		{
			$sql = 'INSERT INTO ' . $this->slideweuni_table . ' ' . $this->db->sql_build_array('INSERT', array(
				'id'	=> $id,
				'image'	=> $image,
				'url'	=> $url));
			$this->db->sql_query($sql);
		}
	}

	/**
	 * Create options for the slideweuni_effect mode select setting
	 *
	 * @param int	$selected The current value of the config setting
	 * @return		string The HTML option tags
	 * @access public
	 */
	public function slideweuni_take_effect($selected)
	{
		$options = '';
		$options .= '<option value="1"' . ($selected == 1 ? ' selected="selected"' : '') . '>' . $this->language->lang('L_SLIDE') . '</option>';
		$options .= '<option value="2"' . ($selected == 2 ? ' selected="selected"' : '') . '>' . $this->language->lang('L_FADE') . '</option>';
		return $options;
	}
}
