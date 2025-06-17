<?php
/**
 * Plugin Name:           DesignsLabz Tools
 * Plugin URI:            https://github.com/team-designslabz/designslabz-tools
 * Description:           Customizes the WordPress admin: replaces "Howdy", renames "Post", adds footer text, and disables file editors.
 * Version:               1.0.0
 * Requires PHP:          7.4
 * Requires at least:     6.1
 * Tested up to:          6.8.1
 * Author:                DesignsLabz
 * Author URI:            https://designslabz.com/
 * License:               GPL-3.0-or-later
 * License URI:           https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:           designslabz-tools
 * GitHub Plugin URI:     https://github.com/team-designslabz/designslabz-tools
 * GitHub Branch:         main
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Ensure the file path for including other classes is correct
require_once plugin_dir_path( __FILE__ ) . 'includes/class-loader.php';

// Initialize the plugin
Designslabz_Tools_Loader::init();
