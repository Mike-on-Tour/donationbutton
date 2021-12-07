<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace amot\donationbutton\acp;

class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\amot\donationbutton\acp\main_module',
			'title'		=> 'MOT_DONBUTTON_NAV_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_MOT_DONBUTTON_SETTINGS',
					'auth'	=> 'ext_amot/donationbutton && acl_a_board',
					'cat'	=> ['MOT_DONBUTTON_NAV_TITLE'],
				],
			],
		];
	}
}
