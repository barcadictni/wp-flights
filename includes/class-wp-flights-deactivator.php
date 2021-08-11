<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/barcadictni
 * @since      1.0.0
 *
 * @package    Wp_Flights
 * @subpackage Wp_Flights/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Wp_Flights
 * @subpackage Wp_Flights/includes
 * @author     Héctor Sevilla <sevillasandoval.hector@gmail.com>
 */
class Wp_Flights_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		$timestamp = wp_next_scheduled( 'wp_flights_cron_hook' );
		wp_unschedule_event( $timestamp, 'wp_flights_cron_hook' );
	}

}
