<?php
/**
 * Helper functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * isp_get_theme_color_scheme
 *
 * @param	N/A   
 * @return	(array)
 */
function isp_get_theme_color_scheme() {

	/**
	 * Variables
	 */
	$theme_color_scheme	= array(
		'type'			=> 'one',
		'first-color'	=> '#246ad3',
		'second-color'	=> '#777777',
	);

	if ( ! ACF_EXISTS )
		return false;

	$scheme_type	= get_field( 'acf-options_scheme_type', 'options' );
	$first_color	= get_field( 'acf-options_scheme_color_1', 'options' );

	if ( $scheme_type ) {

		switch ( $scheme_type ) {

			case 'one' :

				if ( $first_color ) {
					$theme_color_scheme[ 'first-color' ] = $first_color;
				}

				break;

			case 'two':

				$second_color = get_field( 'acf-options_scheme_color_2', 'options' );

				$theme_color_scheme = array(
					'type'			=> $scheme_type,
					'first-color'	=> $first_color ? $first_color : '#00b7c6',
					'second-color'	=> $second_color ? $second_color : '#7c829e',
				);

		}

	}

	// return
	return $theme_color_scheme;

}