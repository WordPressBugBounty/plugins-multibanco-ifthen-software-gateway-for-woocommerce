<?php
/**
 * Uninstall hooks
 */

// If uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

// Remove legacy cron
wp_clear_scheduled_hook( 'wc_ifthen_hourly_cron' );

// Clear Action Scheduler recurring action
if ( function_exists( 'as_unschedule_all_actions' ) ) {
	as_unschedule_all_actions( 'wc_ifthen_hourly_cron', array(), 'wc-ifthen' );
}
