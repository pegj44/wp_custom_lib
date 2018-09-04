<?php

/**
 * @link              Paul Edmund Janubas
 * @since             1.0.0
 * @package           Umbrella_Google_Calendar
 *
 * @wordpress-plugin
 * Plugin Name:       Umbrella Google Calendar
 * Plugin URI:        https://www.securesupportcentre.com
 * Description:       Simple calendar plugin that can add events and sync to your google calendar.
 * Version:           1.0.0
 * Author:            Paul Edmund Janubas
 * Author URI:        https://www.securesupportcentre.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       umbrella-google-calendar
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 */
define( 'UMBRELLA_GOOGLE_CALENDAR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-umbrella-google-calendar-activator.php
 */
function activate_umbrella_google_calendar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-umbrella-google-calendar-activator.php';
	Umbrella_Google_Calendar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-umbrella-google-calendar-deactivator.php
 */
function deactivate_umbrella_google_calendar() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-umbrella-google-calendar-deactivator.php';
	Umbrella_Google_Calendar_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_umbrella_google_calendar' );
register_deactivation_hook( __FILE__, 'deactivate_umbrella_google_calendar' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-umbrella-google-calendar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_umbrella_google_calendar() {

	$plugin = new Umbrella_Google_Calendar();
	$plugin->run();

}
run_umbrella_google_calendar();
