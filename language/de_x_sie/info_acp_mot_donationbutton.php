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
	'ACP_MOT_DONBUTTON_SETTINGS'			=> 'Einstellungen',
	'ACP_MOT_DONBUTTON_SETTINGS_SAVED'		=> 'Die Einstellungen für Donation Button wurden erfolgreich gesichert.',
	'ACP_MOT_DONBUTTON_SETTINGS_EXPLAIN'	=> 'Hier können Sie auswählen, an welcher Stelle im Forum der Donation Button angezeigt werden soll und dessen
												Ausrichtung in seinem Anzeigefeld auswählen.<br>
												Wichtig ist, dass Sie den von Ihrem Zahlungsdienstleister erhaltenen Code im entsprechenden Eingabefeld eingeben,
												denn sonst kann der Donation Button nicht korrekt angezeigt werden. Außerdem besteht die Möglichkeit, einen kurzen
												Hinweistext einzugeben, dies ist jedoch keine Pflicht.<br>
												Denken Sie bitte daran, unter ´Berechtigungen´ noch einzustellen, welche Nutzer/Nutzergruppen den Donation Button
												sehen und damit auch benutzen dürfen. Standardmäßig wird den Benutzer-Rollen ´Standard-Funktionalität´ und
												´Volle Funktionalität´ diese Berechtigung während der Installation erteilt. Passen Sie die Berechtigungen anderer
												Benutzer-Rollen entsprechend Ihrer Wünsche an.',
	// Position vars
	'ACP_MOT_DONBUTTON_POSITION'			=> 'Position des Donation Button',
	'ACP_MOT_DONBUTTON_POSITION_EXP'		=> 'Hier können Sie auswählen, an welcher Stelle der Donation Button angezeigt werden soll.',
	'ACP_MOT_DONBUTTON_NOPOS'				=> 'Keine',
	'ACP_MOT_DONBUTTON_UNDER_HEADER'		=> 'Unter den Kopfzeilen',
	'ACP_MOT_DONBUTTON_UNDER_LISTS'			=> 'Unter Forenliste/Themenliste/Beiträgen',
	'ACP_MOT_DONBUTTON_ABOVE_FOOTER'		=> 'Über der Fußzeile',
	// Alignment vars
	'ACP_MOT_DONBUTTON_ALIGN'				=> 'Ausrichtung des Donation Button',
	'ACP_MOT_DONBUTTON_ALIGN_EXP'			=> 'Hier können Sie auswählen, ob der Donation Button links, rechts oder zentriert im Anzeigefeld dargestellt werden soll.',
	'ACP_MOT_DONBUTTON_LEFT'				=> 'links',
	'ACP_MOT_DONBUTTON_CENTER'				=> 'zentriert',
	'ACP_MOT_DONBUTTON_RIGHT'				=> 'rechts',
	// Text fields
	'ACP_MOT_DONBUTTON_BUTTON_HTML'			=> 'HTML-Code für den Donation Button',
	'ACP_MOT_DONBUTTON_BUTTON_HTML_EXP'		=> 'Hier können Sie den HTML-Code für den Donation Button eingeben. Dieser HTML-Code wird Ihnen in der Regel vom
												Zahlungsdienstleister bereitgestellt.',
	'ACP_MOT_DONBUTTON_TINY_TEXT'			=> 'Hinweistext',
	'ACP_MOT_DONBUTTON_TINY_TEXT_EXP'		=> 'Hier können Sie - müssen Sie aber nicht - einen kurzen Hinweistext (max. 50 Zeichen) eingeben, der vor dem
												Donation Button angezeigt wird.',
	// Support and version
	'ACP_MOT_DONBUTTON_SUPPORT'				=> 'Wenn Sie die Entwicklung der Erweiterung ´Donation Button´ unterstützen möchtest, können Sie das hier tun:<br>',
	'ACP_MOT_DONATIONBUTTON_VERSION'		=> '<img src="https://img.shields.io/badge/Version-%1$s-green.svg?style=plastic" /><br>&copy; 2021 - %2$d by Mike-on-Tour',
]);
