<?php
/**
 *
 * Slideshow for Header extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019 Picaron
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace pikaron\slideweuni\event;

/**
 * Event listener
 */
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \pikaron\slideweuni\core\functions_slideweuni */
	protected $functions_slideweuni;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var string */
	protected $phpbb_root_path;

	/**
	 * Listener constructor.
	 *
	 * @var \pikaron\slideweuni\core\functions_slideweuni	$functions_slideweuni
	 * @param \phpbb\config\config							$config
	 * @param \phpbb\template\template						$template
	 * @param string										$phpbb_root_path
	 *
	 * @return void
	 */
	public function __construct
	(
		\pikaron\slideweuni\core\functions_slideweuni $functions_slideweuni,
		\phpbb\config\config $config,
		\phpbb\template\template $template,
		$phpbb_root_path
	)
	{
		$this->functions_slideweuni = $functions_slideweuni;
		$this->config				= $config;
		$this->template				= $template;
		$this->phpbb_root_path		= $phpbb_root_path;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 * @static
	 * @access public
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'	=> 'page_header',
		);
	}

	public function page_header()
	{
		if ($this->config['slideweuni_active'])
		{
			$values = $url_on = $img_in_url = $img_img = $url_img = $url_dest = array();
			for ($i = 1; $i <= $this->config['slideweuni_cant_img']; $i++)
			{
				// Random images NO
				$values[$i] = $i;

				// By default variables are defined false/null
				$url_on[$i] = $img_in_url[$i] = false;
				$img_img[$i] = $url_img[$i] = '';
				$url_dest[$i] = '_parent';
			}

			// Random images YES
			if ($this->config['slideweuni_aleatory'])
			{
				shuffle($values);
			}

			// Only variables are assigned if the image exists
			$counter = 0;
			$activated = false;
			foreach ($values as $key)
			{
				$value_image = $this->functions_slideweuni->image_values($key);

				if ($value_image)
				{
					if ($value_image['image'] != '')
					{
						// Verify if the image is in an external URL
						if (filter_var($value_image['image'], FILTER_VALIDATE_URL))
						{
							$img_headers = @get_headers($value_image['image']);
							if (isset($img_headers[0]) && strpos($img_headers[0], ' 200 OK') !== false)
							{
								$counter ++;
								$activated = $img_in_url[$counter] = true;
								$img_img[$counter] = $value_image['image'];
							}
						}
						else
						{
							// Verify if local image exist
							if (file_exists($this->phpbb_root_path . 'ext/pikaron/slideweuni/images/' . $value_image['image']))
							{
								$counter ++;
								$activated = true;
								$img_img[$counter] = $value_image['image'];
							}
						}

						if (isset($img_img[$counter]) && $img_img[$counter] != '')
						{
							if ($value_image['url'] != '')
							{
								$url_on[$counter] = true;
								$url_img[$counter] = $value_image['url'];
								$pos = strpos($value_image['url'], $this->config['server_name']);
								if ($pos === false)
								{
									$url_dest[$counter] = '_blank';
								}
							}
						}
					}
					unset($value_image);
				}
			}

			// Any image to Show in Slide?
			if ($activated == true)
			{
				$activated = $this->config['slideweuni_active'] ? true : false;
			}

			// Add images to Template
			for ($i = 1; $i <= $counter; $i++)
			{
				$this->template->assign_block_vars('slideco', array(
					'S_SLIDE_WEUNI_C'			=>	$i-1,
				));

				$this->template->assign_block_vars('slideim', array(
					'S_SLIDE_WEUNI_I'			=>	$i-1,
					'S_IMAGE_IN_URL'			=>	$img_in_url[$i],
					'S_SLIDE_WEUNI_IMG_IMG'		=>	$img_img[$i],
					'S_SLIDE_WEUNI_URL_ON'		=>	$url_on[$i],
					'S_SLIDE_WEUNI_URL_IMG'		=>	$url_img[$i],
					'S_SLIDE_WEUNI_URL_DEST'	=>	$url_dest[$i],
				));
			}

			// Asign vars to Template
			$this->template->assign_vars(array(
				'S_SLIDE_WEUNI_ACTIVE'		=> $activated,
				'S_SLIDE_WEUNI_DELAY'		=> $this->config['slideweuni_delay'],
				'S_SLIDE_WEUNI_TITLE'		=> $this->config['slideweuni_title'] == 1 ? true : false,
				'S_SLIDE_WEUNI_SEARCH'		=> $this->config['slideweuni_search'] == 1 ? true : false,
				'S_SLIDE_WEUNI_EFFECT'		=> $this->config['slideweuni_effect'] == 1 ? null : ' carousel-fade',
				'S_SLIDE_WEUNI_COLOR_TIT_F' => $this->config['slideweuni_color_tit_f'],
				'S_SLIDE_WEUNI_COLOR_TIT_B' => $this->config['slideweuni_color_tit_b'],
				'S_SLIDE_WEUNI_INTER'		=> $this->config['slideweuni_inter'] == 1 ? true : false,
				'S_SLIDE_WEUNI_CONTROLS'	=> $this->config['slideweuni_controls'] == 1 ? true : false,
			));
		}
	}
}
