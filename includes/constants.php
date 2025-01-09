<?php
/**
*
* @package Donation Button v1.0.0
* @copyright (c) 2021 - 2025 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace amot\donationbutton\includes;

class constants
{
	// position constants
	const MOT_DONBUTTON_NOPOS = 0;
	const MOT_DONBUTTON_UNDER_HEADER = 1;
	const MOT_DONBUTTON_UNDER_LISTS = 2;
	const MOT_DONBUTTON_ABOVE_FOOTER = 4;

	// alignment constants
	const MOT_DONBUTTON_LEFT = 1;
	const MOT_DONBUTTON_CENTER = 2;
	const MOT_DONBUTTON_RIGHT = 4;

	public function __construct()
	{
		$this->pos_arr = [
			'ACP_MOT_DONBUTTON_NOPOS'			=> self::MOT_DONBUTTON_NOPOS,
			'ACP_MOT_DONBUTTON_UNDER_HEADER'	=> self::MOT_DONBUTTON_UNDER_HEADER,
			'ACP_MOT_DONBUTTON_UNDER_LISTS'		=> self::MOT_DONBUTTON_UNDER_LISTS,
			'ACP_MOT_DONBUTTON_ABOVE_FOOTER'	=> self::MOT_DONBUTTON_ABOVE_FOOTER,
		];

		$this->align_arr = [
			'ACP_MOT_DONBUTTON_LEFT'	=> self::MOT_DONBUTTON_LEFT,
			'ACP_MOT_DONBUTTON_CENTER'	=> self::MOT_DONBUTTON_CENTER,
			'ACP_MOT_DONBUTTON_RIGHT'	=> self::MOT_DONBUTTON_RIGHT,
		];
	}
}
