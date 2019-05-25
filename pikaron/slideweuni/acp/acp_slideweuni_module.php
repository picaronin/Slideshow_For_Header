<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\slideweuni\acp;

/**
* @package acp
*/
class acp_slideweuni_module
{
	/** @var string */
	public $tpl_name;

	/** @var string */
	public $page_title;

	/** @var string */
	public $u_action;

	/**
	 * ACP module constructor.
	 *
	 * @return void
	 */
	public function __construct()
	{
		global $phpbb_container;

		$this->config				= $phpbb_container->get('config');
		$this->request				= $phpbb_container->get('request');
		$this->language				= $phpbb_container->get('language');
		$this->user					= $phpbb_container->get('user');
		$this->template				= $phpbb_container->get('template');
		$this->phpbb_log			= $phpbb_container->get('log');
		$this->phpbb_root_path		= $phpbb_container->getParameter('core.root_path');
		$this->functions_slideweuni = $phpbb_container->get('pikaron.slideweuni.core.functions.slideweuni');
	}

	public function main($id, $mode)
	{
		$submit = $this->request->is_set_post('submit');

		$form_key = 'acp_slide';
		add_form_key($form_key);

		$display_vars = array(
			'vars'	=> array(
				'legend'					=> 'GENERAL_OPTIONS',
				'slideweuni_active'			=> array('lang' => 'L_SLIDE_WEUNI_ACTIVE', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'slideweuni_delay'			=> array('lang' => 'L_SLIDE_WEUNI_DELAY', 'validate' => 'int:1000:20000', 'type' => 'number:1000:20000', 'explain' => true, 'append' => ' ' . $this->language->lang('L_UNI_DELAY')),
				'slideweuni_effect'		=> array('lang' => 'L_SLIDE_WEUNI_EFFECT', 'validate' => 'int', 'type' => 'select', 'function' => array($this->functions_slideweuni, 'slideweuni_take_effect'), 'explain' => false),
				'slideweuni_title'			=> array('lang' => 'L_SLIDE_WEUNI_TITLE', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'slideweuni_color_tit_f'	=> array('lang' => 'L_SLIDE_WEUNI_COLOR_TIT_F', 'validate' => 'string', 'type' => 'text:7:7', 'explain' => true),
				'slideweuni_color_tit_b'	=> array('lang' => 'L_SLIDE_WEUNI_COLOR_TIT_B', 'validate' => 'string', 'type' => 'text:7:7', 'explain' => true),
				'slideweuni_search'			=> array('lang' => 'L_SLIDE_WEUNI_SEARCH', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'slideweuni_inter'			=> array('lang' => 'L_SLIDE_WEUNI_INTER', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'slideweuni_controls'		=> array('lang' => 'L_SLIDE_WEUNI_CONTROLS', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'slideweuni_aleatory'		=> array('lang' => 'L_SLIDE_WEUNI_ALEATORY', 'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => false),
				'slideweuni_cant_img'		=> array('lang' => 'L_SLIDE_WEUNI_CANT_IMG', 'validate' => 'int:2:60', 'type' => 'number:2:60', 'explain' => true),
			)
		);

		$this->tpl_name		= 'acp_slideweuni';
		$this->page_title	= $this->language->lang('ACP_SLIDE_WEUNI');

		// The necessary fields to display are defined with relation of slideweuni_cant_img
		$images = array();
		for ($i = 1; $i <= $this->config['slideweuni_cant_img']; $i++)
		{
			$value_image = $this->functions_slideweuni->image_values($i);
			if ($value_image)
			{
				$there_image = $http_image = $there_http_image = $local_image = false;

				// Check if the image name is not empty
				if ($value_image['image'] != '')
				{
					$there_image = true;
					// Verify if the image is in an external URL
					if (filter_var($value_image['image'], FILTER_VALIDATE_URL))
					{
						$http_image = true;
						$img_headers = @get_headers($value_image['image']);
						$there_http_image = isset($img_headers[0]) && strpos($img_headers[0], ' 200 OK') !== false ? true : false;
					}
					else
					{
						// Verify if local image exist
						$local_image = file_exists($this->phpbb_root_path . 'ext/pikaron/slideweuni/images/' . $value_image['image']) ? true : false;
					}
				}

				$this->template->assign_block_vars('images', array(
					'KEY'					=> $i,
					'IMAGE'					=> $value_image['image'],
					'URL'					=> $value_image['url'],
					'THERE_IMAGE'			=> $there_image,
					'HTTP_IMAGE'			=> $http_image,
					'THERE_HTTP_IMAGE'		=> $there_http_image,
					'LOCAL_IMAGE'			=> $local_image,
				));

				// Store in array values of images
				$images['id' . $i] = $value_image['id'];
				$images['image' . $i] = $value_image['image'];
				$images['url' . $i] = $value_image['url'];

				unset($value_image);
			}
		}

		$cfg_array = $this->request->is_set('config') ? $this->request->variable('config', array('' => ''), true) : $this->config;
		$img_array = $this->request->is_set('images') ? $this->request->variable('images', array('' => ''), true) : $images;
		$error = array();

		// We validate the complete config if whished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

		if ($submit && !check_form_key($form_key))
		{
			$error[] = $this->language->lang('FORM_INVALID');
		}

		// Do not write values if there is an error
		if (sizeof($error))
		{
			$submit = false;
		}

		// Save the config vars if submit
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]))
			{
				continue;
			}

			if ($submit)
			{
				$this->config->set($config_name, $cfg_array[$config_name]);
			}
		}

		if ($submit)
		{
			// Will be created or updated dynamically $images vars in base to the slideweuni_cant_img (Max: 60)
			for ($i = 1; $i <= 60; $i++)
			{
				if ($i <= $this->config['slideweuni_cant_img'])
				{
					if (isset($img_array['image' . $i]) && isset($img_array['url' . $i]))
					{
						$this->functions_slideweuni->image_store($i, $img_array['image' . $i], $img_array['url' . $i]);
					}
					else
					{
						$this->functions_slideweuni->image_store($i, '', '');
					}
				}
			}

			// If no inter, then no controls
			if ($this->config['slideweuni_inter'] == 0)
			{
				$this->config->set('slideweuni_controls', 0);
			}

			// Save log
			$this->phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_CONFIG_' . strtoupper($mode));
			trigger_error($this->language->lang('CONFIG_UPDATED') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'S_SLIDEWEUNI_ACTIVE'		 => $cfg_array['slideweuni_active'],
			'S_SLIDEWEUNI_DELAY'		 => $cfg_array['slideweuni_delay'],
			'S_SLIDEWEUNI_EFFECT'		 => $cfg_array['slideweuni_effect'],
			'S_SLIDEWEUNI_TITLE'		 => $cfg_array['slideweuni_title'],
			'S_SLIDEWEUNI_COLOR_TIT_F'	 => $cfg_array['slideweuni_color_tit_f'],
			'S_SLIDEWEUNI_COLOR_TIT_B'	 => $cfg_array['slideweuni_color_tit_b'],
			'S_SLIDEWEUNI_SEARCH'		 => $cfg_array['slideweuni_search'],
			'S_SLIDEWEUNI_INTER'		 => $cfg_array['slideweuni_inter'],
			'S_SLIDEWEUNI_CONTROLS'		 => $cfg_array['slideweuni_controls'],
			'S_SLIDEWEUNI_ALEATORY'		 => $cfg_array['slideweuni_aleatory'],
			'S_SLIDEWEUNI_CANT_IMG'		 => $cfg_array['slideweuni_cant_img'],
			'SLIDE_WEUNI_MOD_VERSION'	 => $this->config['slideweuni_version'],
			'S_ERROR'					 => sizeof($error) ? true : false,
			'ERROR_MSG'					 => implode('<br />', $error),
			'U_ACTION'					 => $this->u_action
		));
	}
}
