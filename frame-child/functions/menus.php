<?php
/**
 * Menus functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * isp_wp_nav_menu_items
 *
 * @param	$items (string)   
 * @param	$args (object)   
 * @return	(string)
 */
function isp_wp_nav_menu_items( $items, $args ) {

	if ( ! ACF_EXISTS || ! in_array( $args->theme_location, array( 'primary', 'primary_mobile' ) ) )
		return $items;

	$personal_area_system_link = get_field( 'acf-options_header_personal_area_system_link', 'options' );
	$personal_area_system_text = get_field( 'acf-options_header_personal_area_system_text', 'options' );

	if ( $personal_area_system_link && $personal_area_system_text ) {

		$items .=  sprintf( '<li class="personal-area-system menu-item menu-item-type-custom menu-item-object-custom"><a href="%s" target="_blank">%s</a></li>',
			esc_url( $personal_area_system_link ),
			esc_attr( $personal_area_system_text )
		);

	}

	// return
	return $items;

}
add_filter( 'wp_nav_menu_items', 'isp_wp_nav_menu_items', 10, 2 );