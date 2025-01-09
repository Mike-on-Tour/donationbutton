# Donation Button

![Version: 1.0.0](https://img.shields.io/badge/Version-1.0.0-green)  
  
![phpBB 3.3.x Compatible](https://img.shields.io/badge/phpBB-3.3.x%20Compatible-009BDF)
![phpBB 4.0.x-dev Compatible](https://img.shields.io/badge/phpBB-4.0.x%20dev%20Compatible-009BDF)  

[![Build Status](https://github.com/Mike-on-Tour/donationbutton/workflows/Tests/badge.svg)](https://github.com/Mike-on-Tour/donationbutton/actions)

## Description

Donation Button is an extension to the phpBB bulletin board (**version 3.3.0 and later**) which adds a donation button (e.g. PayPal) as HTML at a selectable position
(one position only) of your board's template.  
In the ACP you can select this position and the horizontal alignment within Donation Button's display bar which looks like the navigation or the footer bar.
In addition you can (must) enter the HTML code representing the button itself (or any other HTML code) and you can enter a short legend (e.g. `Donate to the board's operation`);
please refer to the explanations for the individual settings.  
This extension adds a new permission to phpBB's permission system allowing the admin to decide who can see the Donation Button, please set the permissions
according to your preferences.
  
## Installation

1. Download the latest release.
2. Unzip the downloaded file.
3. Copy the unzipped folder to `/ext/` (if done correctly, you'll have the main extension class at `(your forum root)/ext/amot/donationbutton/composer.json`).
4. Navigate in the ACP to `Customise -> Manage extensions`.
5. Look for `Add a donation button` under the Disabled Extensions list, and click its `Enable` link.

## Update

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Add a donation button` under the Enabled Extensions list, and click its `Disable` link.
3. Using your favorite FTP software go to the `(your forum root)/ext/amot/donationbutton` folder and delete all files and directories.
4. Locally unzip the file `mot_donationbutton_x.y.z.zip` file (x, y and z are numbers indicating the major version, minor version and patch level).
5. Upload all files from your unzipped `donationbutton` folder to your server into the `(your forum root)/ext/amot/donationbutton`, please make certain that you use the binary mode for uploading.
6. Go back to the ACP and look for `Add a donation button` under the Disabled Extensions list, and click its `Enable` link.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Look for `Add a donation button` under the Enabled Extensions list, and click its `Disable` link.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/amot/donnationbutton` folder.

## License
[GNU General Public License v2](http://opensource.org/licenses/GPL-2.0)
