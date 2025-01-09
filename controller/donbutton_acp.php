<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace amot\donationbutton\controller;

class donbutton_acp
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \amot\donationbutton\includes\constants */
	protected $constants;

	/** @var \phpbb\language\language $language Language object */
	protected $language;

	/** @var \phpbb\extension\manager */
	protected $phpbb_extension_manager;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	public function __construct(\phpbb\config\config $config, \phpbb\config\db_text $config_text, \amot\donationbutton\includes\constants $constants,
								\phpbb\language\language $language, \phpbb\extension\manager $phpbb_extension_manager,
								\phpbb\request\request_interface $request, \phpbb\template\template $template)
	{
		$this->config = $config;
		$this->config_text = $config_text;
		$this->constants = $constants;
		$this->language = $language;
		$this->phpbb_extension_manager = $phpbb_extension_manager;
		$this->request = $request;
		$this->template = $template;

		$this->md_manager = $this->phpbb_extension_manager->create_extension_metadata_manager('amot/donationbutton');
		$this->donationbutton_version = $this->md_manager->get_metadata('version');
	}


	public function settings()
	{
		add_form_key('acp_donationbutton_settings');

		/*
		* this IF clause gets activated when the 'submit' button is pressed, writes all settings to $config
		*/
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_donationbutton_settings'))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$this->config->set('mot_donbutton_position', $this->request->variable('mot_donbutton_position', 0));
			$this->config->set('mot_donbutton_align', $this->request->variable('mot_donbutton_align', 0));
			$this->config_text->set('mot_donbutton_button_html', $this->request->raw_variable('mot_donbutton_button_html', ''));
			$this->config->set('mot_donbutton_tiny_text', $this->request->variable('mot_donbutton_tiny_text', '', true));

			trigger_error($this->language->lang('ACP_MOT_DONBUTTON_SETTINGS_SAVED') . adm_back_link($this->u_action));
		}

		$this->template->assign_vars([
			'U_ACTION'							=> $this->u_action,
			'ACP_MOT_DONBUTTON_POS_ARR'			=> $this->select_struct($this->config['mot_donbutton_position'], $this->constants->pos_arr),
			'ACP_MOT_DONBUTTON_ALIGN_ARR'		=> $this->select_struct($this->config['mot_donbutton_align'], $this->constants->align_arr),
			'ACP_MOT_DONBUTTON_BUTTON_HTML'		=> $this->config_text->get('mot_donbutton_button_html'),
			'ACP_MOT_DONBUTTON_TINY_TEXT'		=> $this->config['mot_donbutton_tiny_text'],
			'ACP_MOT_DONATIONBUTTON_VERSION'	=> $this->language->lang('ACP_MOT_DONATIONBUTTON_VERSION', $this->donationbutton_version, date('Y')),
		]);
	}


// --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

	/**
	 * Set custom form action.
	 *
	 * @param	string	$u_action	Custom form action
	 * @return acp		$this		This controller for chaining calls
	 */
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;

		return $this;
	}

	private function select_struct($cfg_value, array $options): array
	{
		$options_tpl = [];

		foreach ($options as $opt_key => $opt_value)
		{
			if (!is_array($opt_value))
			{
				$opt_value = [$opt_value];
			}
			$options_tpl[] = [
				'label'		=> $opt_key,
				'value'		=> $opt_value[0],
				'bold'		=> $opt_value[1] ?? false,
				'selected'	=> is_array($cfg_value) ? in_array($opt_value[0], $cfg_value) : $opt_value[0] == $cfg_value,
			];
		}

		return $options_tpl;
	}
}
