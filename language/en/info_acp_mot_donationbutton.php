<?php
/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, [
	// Title and messages
	'ACP_MOT_DONBUTTON'						=> 'Donation Button',
	'ACP_MOT_DONBUTTON_SETTINGS'			=> 'Settings',
	'ACP_MOT_DONBUTTON_SETTINGS_SAVED'		=> 'Settings for the Donation Button successfully saved.',
	'ACP_MOT_DONBUTTON_SETTINGS_EXPLAIN'	=> 'Here you can select the position at which the Donation Button will be displayed within your board´s template
												and the alignment within its display bar.<br>
												It is important that you enter the code you have got from your payment service provider in the appropriate text
												field to ensure displaying it correctly. Additionally you can input a short legend but this is not mandatory.<br>
												Please keep in mind to set under ´Permissions´ what users/user groups should have permission to view and
												therefore use the Donation Button. By default the User roles ´Standard Features´ and ´All Features´ will get
												this permission during installation. Please set the permissions of other User roles according to your
												preferences.',
	// Position vars
	'ACP_MOT_DONBUTTON_POSITION'			=> 'Donation Button position',
	'ACP_MOT_DONBUTTON_POSITION_EXP'		=> 'Please select the position where the Donation Button will be displayed in your boards template.',
	'ACP_MOT_DONBUTTON_NOPOS'				=> 'None',
	'ACP_MOT_DONBUTTON_UNDER_HEADER'		=> 'Beneath the header',
	'ACP_MOT_DONBUTTON_UNDER_LISTS'			=> 'Beneath the forum list/topic list/posts',
	'ACP_MOT_DONBUTTON_ABOVE_FOOTER'		=> 'Above the footer',
	// Alignment vars
	'ACP_MOT_DONBUTTON_ALIGN'				=> 'Donation Button alignment',
	'ACP_MOT_DONBUTTON_ALIGN_EXP'			=> 'Please select whether the Donation Button will be aligned left, right or centered in its display bar.',
	'ACP_MOT_DONBUTTON_LEFT'				=> 'left',
	'ACP_MOT_DONBUTTON_CENTER'				=> 'centered',
	'ACP_MOT_DONBUTTON_RIGHT'				=> 'right',
	// Text fields
	'ACP_MOT_DONBUTTON_BUTTON_HTML'			=> 'Donation Button HTML code',
	'ACP_MOT_DONBUTTON_BUTTON_HTML_EXP'		=> 'Please insert here the HTML code for your Donation Button. This HTML code will be provided by your payment
												service provider.',
	'ACP_MOT_DONBUTTON_TINY_TEXT'			=> 'Legend',
	'ACP_MOT_DONBUTTON_TINY_TEXT_EXP'		=> 'Here you can - but you are not obligated - input a short text (max. 50 characters) which will be displayed
												before the Donation Button.',
	// Support and version
	'ACP_MOT_DONBUTTON_SUPPORT'				=> 'If you want to donate to Donation Button´s development please use this link:<br>',
	'ACP_MOT_DONATIONBUTTON_VERSION'		=> '<img src="https://img.shields.io/badge/Version-%1$s-green.svg?style=plastic" /><br>&copy; 2021 - %2$d by Mike-on-Tour',
]);
