<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace amot\donationbutton\migrations;

class donbutton_v_0_2_0 extends \phpbb\db\migration\migration
{

	/**
	* If our config variable already exists in the db
	* skip this migration.
	*/
	public function effectively_installed()
	{
		return isset($this->config['mot_donbutton_position']);
	}

	public function update_data()
	{
		return [
			// add config variables
			['config.add', ['mot_donbutton_position', 0]],
			['config.add', ['mot_donbutton_align', 1]],
			['config.add', ['mot_donbutton_tiny_text', '']],

			// add config text variable
			['config_text.add', ['mot_donbutton_button_html', '']],

			// add a parent module (ACP_USERREMINDER) to the Extensions tab (ACP_CAT_DOT_MODS)
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_MOT_DONBUTTON'
			]],
			// add ACP modules
			['module.add', [
				'acp',
				'ACP_MOT_DONBUTTON',
				[
					'module_basename'	=> '\amot\donationbutton\acp\main_module',
					'modes'				=> ['settings',],
				]
			]],

			// set the permission values
			array('permission.add', array('u_view_donbutton')),
			// set (at least some) role permissions
			array('permission.permission_set', array('ROLE_USER_FULL', 'u_view_donbutton')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_view_donbutton')),
		];
	}
}
