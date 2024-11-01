<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              www.welltraveled.io
 * @since             1.0.1
 * @package           Well_Traveled
 *
 * @wordpress-plugin
 * Plugin Name:       Well Traveled
 * Plugin URI:        https://github.com/isaac-martin/wt-wp-plugin
 * Description:       This plugin adds the Well Traveled Tracking script to your wordpress install.
 * Version:           1.0.1
 * Author:            Isaac Martin
 * Author URI:        www.welltraveled.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       well-traveled
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-well-traveled-activator.php
 */
function activate_well_traveled() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-well-traveled-activator.php';
	Well_Traveled_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-well-traveled-deactivator.php
 */
function deactivate_well_traveled() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-well-traveled-deactivator.php';
	Well_Traveled_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_well_traveled' );
register_deactivation_hook( __FILE__, 'deactivate_well_traveled' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-well-traveled.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_well_traveled() {

	$plugin = new Well_Traveled();
	$plugin->run();

}
run_well_traveled();
