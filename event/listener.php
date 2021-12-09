<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace amot\donationbutton\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \amot\donationbutton\includes\constants */
	protected $constants;

	/** @var \phpbb\template\template */
	protected $template;

	public function __construct(\phpbb\auth\auth $auth, \phpbb\config\config $config, \phpbb\config\db_text $config_text,
								\amot\donationbutton\includes\constants $constants, \phpbb\template\template $template)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->config_text = $config_text;
		$this->constants = $constants;
		$this->template = $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.page_header_after'		=> 'define_template_variables',
			'core.permissions'				=> 'load_permissions',
		];
	}

	public function define_template_variables()
	{
		$position = $this->config['mot_donbutton_position'];
		$alignment = $this->config['mot_donbutton_align'];

		$this->template->assign_vars([
			// auth variable
			'MOT_DONBUTTON_CAN_VIEW'		=> $this->auth->acl_get('u_view_donbutton'),
			// config variables
			'MOT_DONBUTTON_BUTTON_HTML'		=> $this->config_text->get('mot_donbutton_button_html'),
			'MOT_DONBUTTON_TINY_TEXT'		=> $this->config['mot_donbutton_tiny_text'],
			// position constants
			'MOT_DONBUTTON_UNDER_HEADER'	=> $position & $this->constants::MOT_DONBUTTON_UNDER_HEADER,
			'MOT_DONBUTTON_UNDER_LISTS'		=> $position & $this->constants::MOT_DONBUTTON_UNDER_LISTS,
			'MOT_DONBUTTON_ABOVE_FOOTER'	=> $position & $this->constants::MOT_DONBUTTON_ABOVE_FOOTER,
			// alignment constants
			'MOT_DONBUTTON_LEFT'			=> $alignment & $this->constants::MOT_DONBUTTON_LEFT,
			'MOT_DONBUTTON_CENTER'			=> $alignment & $this->constants::MOT_DONBUTTON_CENTER,
			'MOT_DONBUTTON_RIGHT'			=> $alignment & $this->constants::MOT_DONBUTTON_RIGHT,
		]);
	}

	/**
	* Load permissions
	*/
	public function load_permissions($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_view_donbutton'] = array('lang' => 'ACL_U_VIEW_DONBUTTON', 'cat' => 'misc');
		$event['permissions'] = $permissions;
	}
}
