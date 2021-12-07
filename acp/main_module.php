<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace amot\donationbutton\acp;

class main_module
{
	public $u_action;
	public $tpl_name;
	public $page_title;

	/**
	 * Main ACP module
	 *
	 * @param	string	$id		The module identifier (\amot\donationbutton\acp\main_module)
	 *		string	$mode	The module mode (settings)
	 *
	 * @throws \Exception
	 */
	public function main($id, $mode)
	{
		global $phpbb_container;

		/** @var \amot.donationbutton.controller.acp $acp_controller */
		$acp_controller = $phpbb_container->get('amot.donationbutton.controller.acp');

		/** @var \phpbb\language\language $language */
		$language = $phpbb_container->get('language');

		// Load a template from adm/style for our ACP page
		$this->tpl_name = 'acp_mot_donbutton_' . $mode;

		// Set the page title for our ACP page
		$this->page_title = $language->lang('ACP_MOT_DONBUTTON') . ' - ' . $language->lang('ACP_MOT_DONBUTTON_' . utf8_strtoupper($mode));

		// Make the $u_action url available in our ACP controller
		$acp_controller->set_page_url($this->u_action)->{$mode}();
	}
}
