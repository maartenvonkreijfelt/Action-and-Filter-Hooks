<?php

/**
 * Plugin Name: Custom WP Login
 * Version: 0.1
 * Author: Carrie Dils
 * License: GPL2+
 * Text Domain: cwpl
 */

add_action( 'login_enqueue_scripts', 'cwpl_login_stylesheet' );
/**
 * Load custom stylesheet on login page.
 */
function cwpl_login_stylesheet() {
	wp_enqueue_style( 'cwpl-custom-stylsheet', plugin_dir_url(__FILE__) . 'login-styles.css' );
}
