<?php
/*
Plugin Name: KP Fastest Chat
Description: The fastest WordPress chat plugin. All in one WordPress chat and contact plugin.
Version: 1.0.3
Contributors: kreativopro
Author: Kreativo Pro
Author URI: https://www.kreativopro.com/
License: GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: kp-fastest-chat
Domain Path:  /languages
*/


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}



// Define KPFC_URL as a PHP Constant
define( 'KPFC_URL', plugin_dir_url( __FILE__ ) );

// Define KPFC_BASENAME as a PHP Constant
define ( 'KPFC_BASENAME', plugin_basename( __FILE__ ) );



// Initiate Admin Settings
include( plugin_dir_path( __FILE__ ) . 'includes/kpfc-admin-settings.php');

// Frontend and Backend CSS
include( plugin_dir_path( __FILE__ ) . 'includes/kpfc-styles.php');

// Design of Plugin Settings Page
include( plugin_dir_path( __FILE__ ) . 'includes/kpfc-admin-page.php');

// Setting Sections and Fields
include( plugin_dir_path( __FILE__ ) . 'includes/kpfc-sections-fields.php');

// Frontend Header Code
include( plugin_dir_path( __FILE__ ) . 'includes/kpfc-frontend.php');

// Backend Footer Code
include( plugin_dir_path( __FILE__ ) . 'includes/kpfc-admin-footer.php');

?>