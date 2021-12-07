<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
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

	/** @var \phpbb\language\language $language Language object */
	protected $language;

	public function __construct(\phpbb\language\language $language)
	{
		$this->pos_array = [
			['POSITION' => self::MOT_DONBUTTON_NOPOS, 'POSITION_NAME' => $language->lang('ACP_MOT_DONBUTTON_NOPOS')],
			['POSITION' => self::MOT_DONBUTTON_UNDER_HEADER, 'POSITION_NAME' => $language->lang('ACP_MOT_DONBUTTON_UNDER_HEADER')],
			['POSITION' => self::MOT_DONBUTTON_UNDER_LISTS, 'POSITION_NAME' => $language->lang('ACP_MOT_DONBUTTON_UNDER_LISTS')],
			['POSITION' => self::MOT_DONBUTTON_ABOVE_FOOTER, 'POSITION_NAME' => $language->lang('ACP_MOT_DONBUTTON_ABOVE_FOOTER')],
		];

		$this->align_arr = [
			['ALIGN' => self::MOT_DONBUTTON_LEFT, 'ALIGN_NAME' => $language->lang('ACP_MOT_DONBUTTON_LEFT')],
			['ALIGN' => self::MOT_DONBUTTON_CENTER, 'ALIGN_NAME' => $language->lang('ACP_MOT_DONBUTTON_CENTER')],
			['ALIGN' => self::MOT_DONBUTTON_RIGHT, 'ALIGN_NAME' => $language->lang('ACP_MOT_DONBUTTON_RIGHT')],
		];
	}
}
