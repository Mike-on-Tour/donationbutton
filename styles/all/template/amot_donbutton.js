/**
*
* @package Donation Button v0.2.0
* @copyright (c) 2021 - 2022 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

(function($) {  // Avoid conflicts with other libraries

'use strict';

	$(".mot-donbutton-button").hide();
	$(".mot-donbutton-button").append(motDonButton.buttonHtml);

	$(".mot-donbutton-button").show();

})(jQuery); // Avoid conflicts with other libraries
