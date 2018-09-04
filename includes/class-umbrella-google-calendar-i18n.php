<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       Paul Edmund Janubas
 * @since      1.0.0
 *
 * @package    Umbrella_Google_Calendar
 * @subpackage Umbrella_Google_Calendar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Umbrella_Google_Calendar
 * @subpackage Umbrella_Google_Calendar/includes
 * @author     Paul Edmund Janubas <pauledmundjanubas@gmail.com>
 */
class Umbrella_Google_Calendar_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'umbrella-google-calendar',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
