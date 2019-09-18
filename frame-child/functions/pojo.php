<?php
/**
 * Pojo functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * isp_remove_pojo_page_format_support
 *
 * This function removes pojo page format support
 *
 * @param	N/A
 * @return	N/A
 */
function isp_remove_pojo_page_format_support() {

	// remove pojo page format support
	remove_post_type_support( 'page', 'pojo-page-format' );

}
add_action( 'init', 'isp_remove_pojo_page_format_support', 51 );

/**
 * isp_pojo_register_customize_sections
 *
 * This function modifies Pojo customizer default settings
 *
 * @param	$sections (array)
 * @return	(array)
 */
function isp_pojo_register_customize_sections( $sections = array() ) {

	if ( ! ACF_EXISTS )
		return $sections;

	$theme_color_scheme = isp_get_theme_color_scheme();

	if ( ! $theme_color_scheme )
		return $sections;

	/**
	 * Variables
	 */
	$scheme_type		= $theme_color_scheme[ 'type' ];
	$first_color		= $theme_color_scheme[ 'first-color' ];
	$second_color		= $theme_color_scheme[ 'second-color' ];
	$font_family		= 'he_IL' == get_locale() ? 'Open Sans Hebrew' : 'Open Sans';
	$footer_columns		= get_field( 'acf-options_footer_columns', 'options' );

	/**
	 * Header
	 */
	//  Sticky Header
	$section	= array_search( 'header', array_column( $sections, 'id' ) );
	$field		= array_search( 'chk_enable_sticky_header', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= 0;

	/**
	 * Logo
	 */
	// Site Name
	$section	= array_search( 'logo', array_column( $sections, 'id' ) );
	$field		= array_search( 'typo_site_title', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'size' ]			= '45px';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'weight' ]		= 'bold';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'style' ]			= 'italic';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'color' ]			= $first_color;

	$field		= array_search( 'logo_margin_top', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= '0px';

	$field		= array_search( 'logo_margin_bottom', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= '0px';

	/**
	 * Navigation
	 */
	// Menu Margin Top
	$section	= array_search( 'menus', array_column( $sections, 'id' ) );
	$field		= array_search( 'menu_margin_top', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= '0px';

	// Menu Margin Bottom
	$field		= array_search( 'menu_margin_bottom', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= '0px';

	// Menu Primary
	$field		= array_search( 'typo_menu_primary', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'size' ]			= '20px';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'color' ]			= '#545454';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'transform' ]		= 'none';

	// Menu Hover
	$field		= array_search( 'color_menu_primary_hover', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= $first_color;

	// Sub Menu
	$field		= array_search( 'typo_sub_menu_link', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'size' ]			= '14px';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'color' ]			= '#545454';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'transform' ]		= 'none';

	// Add Search Button
	$field		= array_search( 'chk_enable_menu_search', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= 0;

	/**
	 * Typography
	 */
	// Body Text
	$section	= array_search( 'typography', array_column( $sections, 'id' ) );
	$field		= array_search( 'typo_body_text', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'size' ]			= '18px';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'weight' ]		= '400';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'line_height' ]	= '1.5em';

	// Text Background Selection
	$field		= array_search( 'color_text_bg_selection', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= $first_color;

	// H1-H6 Titles
	$fields		= array( 'typo_h1', 'typo_h2', 'typo_h3', 'typo_h4', 'typo_h5', 'typo_h6' );

	foreach ( $fields as $f ) {

		$field		= array_search( $f, array_column( $sections[ $section ][ 'fields' ], 'id' ) );
		$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]	= $font_family;

	}

	/**
	 * Footer
	 */
	// Background Color
	$section	= array_search( 'footer', array_column( $sections, 'id' ) );
	$field		= array_search( 'color_bg_footer', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= 'one' == $scheme_type ? $first_color : $second_color;

	// Text
	$field		= array_search( 'typo_footer_text', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'size' ]			= '15px';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;

	// Link
	$field		= array_search( 'color_footer_link', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= '#FFF';

	// Link Hover
	$field		= array_search( 'color_footer_link_hover', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= $second_color;

	// Widget Title
	$field		= array_search( 'typo_footer_widget_text', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'size' ]			= '17px';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'weight' ]		= '600';
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'color' ]			= '#FFF';

	// Widget Columns
	$field		= array_search( 'sidebar_footer_columns', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= count( $footer_columns );

	/**
	 * Copyright
	 */
	// Text
	$section	= array_search( 'copyright', array_column( $sections, 'id' ) );
	$field		= array_search( 'typo_copyright_text', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ][ 'family' ]		= $font_family;

	// Link Hover
	$field		= array_search( 'color_copyright_link_hover', array_column( $sections[ $section ][ 'fields' ], 'id' ) );
	$sections[ $section ][ 'fields' ][ $field ][ 'std' ]					= $second_color;

	/**
	 * Layout
	 */
	// General Layout
	$section	= array_search( 'layout', array_column( $sections, 'id' ) );
	$fields		= array(
		'pojo_general_layouts',
		'post_layout_archive',
		'post_layout',
		'page_layout',
		'attachment_layout_archive',
		'attachment_layout',
		'insurance_layout_archive',
		'insurance_layout',
		'team-member_layout_archive',
		'team-member_layout',
		'press-item_layout_archive',
		'press-item_layout',
		'news-item_layout_archive',
		'news-item_layout',
		'testimonial_layout_archive',
		'testimonial_layout',
		'pojo_gallery_layout_archive',
		'pojo_gallery_layout',
		'pojo_404_layouts',
	);

	foreach ( $fields as $f ) {

		$field		= array_search( $f, array_column( $sections[ $section ][ 'fields' ], 'id' ) );
		$sections[ $section ][ 'fields' ][ $field ][ 'std' ]				= 'section';

	}

	// return
	return $sections;

}
add_filter( 'pojo_register_customize_sections', 'isp_pojo_register_customize_sections', 450 );

/**
 * isp_dynamic_style
 *
 * This function adds dynamic style according to theme color scheme
 *
 * @param	N/A
 * @return	N/A
 */
function isp_dynamic_style() {

	if ( ! ACF_EXISTS )
		return;

	$theme_color_scheme = isp_get_theme_color_scheme();

	if ( ! $theme_color_scheme )
		return;

	/**
	 * Variables
	 */
	$css_arr		= array();
	$css			= '';
	$scheme_type	= $theme_color_scheme[ 'type' ];
	$first_color	= $theme_color_scheme[ 'first-color' ];
	$second_color	= $theme_color_scheme[ 'second-color' ];

	/*****************/
	/* navbar-toggle */
	/*****************/

	$css_arr[ '.navbar-toggle' ][ 'border-color' ]											= $first_color . '!important';
	$css_arr[ '.navbar-toggle .icon-bar' ][ 'background-color' ]							= $first_color;

	/****************/
	/* desktop menu */
	/****************/

	$css_arr[ '.sf-menu ul.sub-menu li:hover' ][ 'background-color' ]						= $first_color;
	$css_arr[ '.sf-menu ul.sub-menu li.current-menu-item' ][ 'background-color' ]			= $first_color;

	/***************/
	/* mobile menu */
	/***************/

	$css_arr[ '.mobile-menu a:hover' ][ 'background-color']									= $first_color;
	$css_arr[ '.mobile-menu li.current-menu-item > a'][ 'background-color' ]				= $first_color;
	$css_arr[ '.mobile-menu li.current-menu-ancestor > a' ][ 'background-color' ]			= $first_color;

	// output the CSS
	foreach ( $css_arr as $selector => $styles ) {

		$css .= $selector . '{';

		foreach ( $styles as $property => $value ) {
			$css .= $property . ':' . $value . ';';
		}

		$css .= '}';

	}

	echo '<style>' . $css . '</style>';

}
add_action( 'wp_head', 'isp_dynamic_style', 99 );