# Change Log
All changes to `Donation Button` will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).
  
## [1.0.0] - 2025-01-10

### Added

### Changed
-	Maximum PHP version to 8.4.x
-	Added a TWIG macro for select fields and a control structure for it to `adm/style/acp_mot_donbutton_settings.html` and `controller/donbutton_acp.php`
	(many thanks to LukeWCS for the macro and the PHP controller function)
-	Code improvements in `includes/constants.php` and in `controller/donbutton_acp.php`

### Fixed

### Removed
-	Old XHTML remnants
  
  
## [0.2.2] - 2022-10-04

### Added
-	Styles `aero` and `prosilver` with specific content

### Changed

### Fixed

### Removed
-	Content from style `all`
  
  
## [0.2.1] - 2022-01-09

### Added

### Changed
-	Load permissions routine in `event/listener.php`

### Fixed
-	Error message due to undefined variable `motDonButton` if extension is activated but no button is displayed by shifting the definition from
	`styles/all/template/amot_donbutton_content.html` to `styles/all/template/event/overall_header_head_append.html`

### Removed

  
  
## [0.2.0] - 2021-12-09

### Added
-	An ACP tab including a controller to set the parameters
-	An event listener to set up the template variables
-	Permission to view the donation button
-	The necessary files for migrations, services, constants, styles and languages (de, de_x_sie, en)

### Changed

### Fixed
  
### Removed
  
  
## [0.1.0] - 2021-12-01
-	First working version with just five event templates containing a hard-coded PayPal donation button
