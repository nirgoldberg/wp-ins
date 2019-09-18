<?php
/**
 * ACF configuration functions
 *
 * @author		Nir Goldberg
 * @package		functions/acf
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! ACF_EXISTS )
	return;

/**
 * isp_acf_init
 *
 * This function initializes ACF configuration
 *
 * @param	N/A
 * @return	N/A
 */
function isp_acf_init() {

	if ( function_exists( 'acf_add_options_page' ) ) {

		acf_add_options_page( array(
			'page_title'	=> __( 'Site Setup',				'pojochild' ),
			'menu_title'	=> __( 'Site Setup',				'pojochild' ),
			'menu_slug'		=> 'acf-site-setup',
			'icon_url'		=> 'dashicons-admin-tools',
		));

		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'Theme',						'pojochild' ),
			'menu_title' 	=> __( 'Theme',						'pojochild' ),
			'menu_slug' 	=> 'acf-theme-settings',
			'parent_slug' 	=> 'acf-site-setup',
		));

		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'Header & Footer',			'pojochild' ),
			'menu_title' 	=> __( 'Header & Footer',			'pojochild' ),
			'menu_slug' 	=> 'acf-header-footer-settings',
			'parent_slug' 	=> 'acf-site-setup',
		));

		acf_add_options_sub_page( array(
			'page_title' 	=> __( 'Customers',					'pojochild' ),
			'menu_title' 	=> __( 'Customers',					'pojochild' ),
			'menu_slug' 	=> 'acf-customers-settings',
			'parent_slug' 	=> 'acf-site-setup',
		));

	}

}
add_action( 'acf/init', 'isp_acf_init' );