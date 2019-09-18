<?php
/**
 * Scripts and styles functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

add_action( 'login_enqueue_scripts',	'isp_login_scripts_n_styles' );
add_action( 'admin_enqueue_scripts',	'isp_admin_scripts_n_styles' );
add_action( 'wp_enqueue_scripts',		'isp_wp_scripts_n_styles' );

/**
 * isp_login_scripts_n_styles
 * 
 * used before authentication
 *
 * @param	N/A
 * @return	N/A
 */
function isp_login_scripts_n_styles() {

	wp_register_style( 'admin-login',	CSS_DIR . 'admin/login.css',	array(),	VERSION );

}

/**
 * isp_admin_scripts_n_styles
 *
 * @param	N/A
 * @return	N/A
 */
function isp_admin_scripts_n_styles() {

	wp_register_style( 'admin-general',	CSS_DIR . 'admin/general.css',	array(),	VERSION );

}

/**
 * isp_wp_scripts_n_styles
 *
 * @param	N/A
 * @return	N/A
 */
function isp_wp_scripts_n_styles() {

	/**
	 * Styles
	 */
	wp_enqueue_style( 'general',		CSS_DIR . 'general.css',		array(),	VERSION );
	wp_enqueue_style( 'responsive',		CSS_DIR . 'responsive.css',		array(),	VERSION );

	/**
	 * Scripts
	 */
	wp_register_script( 'general',		JS_DIR . 'general.js',			array( 'jquery' ),	VERSION,	true );

	wp_enqueue_script( 'general' );

}