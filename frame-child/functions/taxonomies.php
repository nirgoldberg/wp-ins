<?php
/**
 * Custom Taxonomies functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * isp_register_custom_taxonomies
 *
 * This function registers custom taxonomies
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_custom_taxonomies() {

	isp_register_insurance_category_taxonomy();

}
add_action( 'init', 'isp_register_custom_taxonomies' );

/**
 * isp_register_insurance_category_taxonomy
 *
 * This function registers the insurance-category custom taxonomy
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_insurance_category_taxonomy() {

	$labels = array(

		'name'							=> __( 'Insurance Categories',								'pojochild' ),
		'singular_name'					=> __( 'Insurance Category',								'pojochild' ),
		'menu_name'						=> __( 'Insurance Categories',								'pojochild' ),
		'all_items'						=> __( 'All Insurance Categories',							'pojochild' ),
		'edit_item'						=> __( 'Edit Insurance Category',							'pojochild' ),
		'view_item'						=> __( 'View Insurance Category',							'pojochild' ),
		'update_item'					=> __( 'Update Insurance Category',							'pojochild' ),
		'add_new_item'					=> __( 'Add New Insurance Category',						'pojochild' ),
		'new_item_name'					=> __( 'New Insurance Category Name',						'pojochild' ),
		'parent_item'					=> __( 'Parent Insurance Category',							'pojochild' ),
		'parent_item_colon'				=> __( 'Parent Insurance Category:',						'pojochild' ),
		'search_items'					=> __( 'Search Insurance Categories',						'pojochild' ),
		'popular_items'					=> __( 'Popular Insurance Categories',						'pojochild' ),
		'separate_items_with_commas'	=> __( 'Separate Insurance Categories with commas',			'pojochild' ),
		'add_or_remove_items'			=> __( 'Add or remove Insurance Categories',				'pojochild' ),
		'choose_from_most_used'			=> __( 'Choose from the most used Insurance Categories',	'pojochild' ),
		'not_found'						=> __( 'No Insurance Categories found',						'pojochild' ),
		'back_to_items'					=> __( '← Back to Insurance Categories',					'pojochild' ),

	);

	$args = array(

		'labels'						=> $labels,
		'public'						=> true,
		'publicly_queryable'			=> true,
		'show_ui'						=> true,
		'show_in_menu'					=> true,
		'show_in_nav_menus'				=> true,
		'show_in_rest'					=> false,
		'rest_base'						=> 'insurance-category',
		'show_tagcloud'					=> true,
		'show_in_quick_edit'			=> true,
		'show_admin_column'				=> true,
		'description'					=> '',
		'hierarchical'					=> true,
		'query_var'						=> 'insurance-category',
		'rewrite'						=> array( 'slug' => 'insurance-category', 'with_front' => false ),

	);

	register_taxonomy( 'insurance-category', array( 'insurance' ) , $args );

}