<?php
/**
 * Custom Post Types functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * isp_register_custom_post_types
 *
 * This function registers custom post types
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_custom_post_types() {

	isp_register_insurance_post_type();
	isp_register_team_member_post_type();
	isp_register_press_item_post_type();
	isp_register_news_item_post_type();
	isp_register_testimonial_post_type();

}
add_action( 'init', 'isp_register_custom_post_types' );

/**
 * isp_register_insurance_post_type
 *
 * This function registers the insurance custom post type
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_insurance_post_type() {

	$labels = array(
		'name'						=> __( 'Insurances',					'pojochild' ),
		'singular_name'				=> __( 'Insurance',						'pojochild' ),
		'add_new'					=> __( 'Add New',						'pojochild' ),
		'add_new_item'				=> __( 'Add New Insurance',				'pojochild' ),
		'edit_item'					=> __( 'Edit Insurance',				'pojochild' ),
		'new_item'					=> __( 'New Insurance',					'pojochild' ),
		'view_item'					=> __( 'View Insurance',				'pojochild' ),
		'view_items'				=> __( 'View Insurances',				'pojochild' ),
		'search_items'				=> __( 'Search Insurances',				'pojochild' ),
		'not_found'					=> __( 'No Insurances Found',			'pojochild' ),
		'not_found_in_trash'		=> __( 'No Insurances Found in Trash',	'pojochild' ),
		'parent_item_colon'			=> __( 'Parent Insurance:',				'pojochild' ),
		'all_items'					=> __( 'All Insurances',				'pojochild' ),
		'archives'					=> __( 'Insurance Archives',			'pojochild' ),
		'attributes'				=> __( 'Insurance Attributes',			'pojochild' ),
		'insert_into_item'			=> __( 'Insert into Insurance',			'pojochild' ),
		'uploaded_to_this_item'		=> __( 'Uploaded to this Insurance',	'pojochild' ),
		'menu_name'					=> __( 'Insurances',					'pojochild' ),
		'name_admin_bar'			=> __( 'Insurance',						'pojochild' ),
		'item_published'			=> __( 'Insurance published',			'pojochild' ),
		'item_published_privately'	=> __( 'Insurance published privately',	'pojochild' ),
		'item_reverted_to_draft'	=> __( 'Insurance reverted to draft',	'pojochild' ),
		'item_scheduled'			=> __( 'Insurance scheduled',			'pojochild' ),
		'item_updated'				=> __( 'Insurance updated',				'pojochild' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'exclude_from_search'		=> false,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_nav_menus'			=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'			=> true,
		'menu_position'				=> 25.1,
		'menu_icon'					=> 'dashicons-cart',
		'capability_type'			=> 'post',
		'hierarchical'				=> false,
		'supports'					=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'				=> array(),
		'has_archive'				=> true,
		'rewrite'					=> array( 'slug' => 'insurance', 'with_front' => false ),
		'query_var'					=> true,
		'can_export'				=> true,
		'delete_with_user'			=> false,
		'show_in_rest'				=> true,
		'rest_base'					=> 'insurance',
	);

	register_post_type( 'insurance', $args );

}

/**
 * isp_register_team_member_post_type
 *
 * This function registers the team-member custom post type
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_team_member_post_type() {

	$labels = array(
		'name'						=> __( 'Team',								'pojochild' ),
		'singular_name'				=> __( 'Team Member',						'pojochild' ),
		'add_new'					=> __( 'Add New',							'pojochild' ),
		'add_new_item'				=> __( 'Add New Team Member',				'pojochild' ),
		'edit_item'					=> __( 'Edit Team Member',					'pojochild' ),
		'new_item'					=> __( 'New Team Member',					'pojochild' ),
		'view_item'					=> __( 'View Team Member',					'pojochild' ),
		'view_items'				=> __( 'View Team',							'pojochild' ),
		'search_items'				=> __( 'Search Team Members',				'pojochild' ),
		'not_found'					=> __( 'No Team Members Found',				'pojochild' ),
		'not_found_in_trash'		=> __( 'No Team Members Found in Trash',	'pojochild' ),
		'parent_item_colon'			=> __( 'Parent Team Member:',				'pojochild' ),
		'all_items'					=> __( 'All Team Members',					'pojochild' ),
		'archives'					=> __( 'Team Member Archives',				'pojochild' ),
		'attributes'				=> __( 'Team Member Attributes',			'pojochild' ),
		'insert_into_item'			=> __( 'Insert into Team Member',			'pojochild' ),
		'uploaded_to_this_item'		=> __( 'Uploaded to this Team Member',		'pojochild' ),
		'menu_name'					=> __( 'Team',								'pojochild' ),
		'name_admin_bar'			=> __( 'Team Member',						'pojochild' ),
		'item_published'			=> __( 'Team Member published',				'pojochild' ),
		'item_published_privately'	=> __( 'Team Member published privately',	'pojochild' ),
		'item_reverted_to_draft'	=> __( 'Team Member reverted to draft',		'pojochild' ),
		'item_scheduled'			=> __( 'Team Member scheduled',				'pojochild' ),
		'item_updated'				=> __( 'Team Member updated',				'pojochild' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'exclude_from_search'		=> false,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_nav_menus'			=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'			=> true,
		'menu_position'				=> 25.2,
		'menu_icon'					=> 'dashicons-groups',
		'capability_type'			=> 'post',
		'hierarchical'				=> false,
		'supports'					=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'				=> array(),
		'has_archive'				=> true,
		'rewrite'					=> array( 'slug' => 'team-member', 'with_front' => false ),
		'query_var'					=> true,
		'can_export'				=> true,
		'delete_with_user'			=> false,
		'show_in_rest'				=> true,
		'rest_base'					=> 'team-member',
	);

	register_post_type( 'team-member', $args );

}

/**
 * isp_register_press_item_post_type
 *
 * This function registers the press-item custom post type
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_press_item_post_type() {

	$labels = array(
		'name'						=> __( 'Press',								'pojochild' ),
		'singular_name'				=> __( 'Press Item',						'pojochild' ),
		'add_new'					=> __( 'Add New',							'pojochild' ),
		'add_new_item'				=> __( 'Add New Press Item',				'pojochild' ),
		'edit_item'					=> __( 'Edit Press Item',					'pojochild' ),
		'new_item'					=> __( 'New Press Item',					'pojochild' ),
		'view_item'					=> __( 'View Press Item',					'pojochild' ),
		'view_items'				=> __( 'View Press Items',					'pojochild' ),
		'search_items'				=> __( 'Search Press Items',				'pojochild' ),
		'not_found'					=> __( 'No Press Items Found',				'pojochild' ),
		'not_found_in_trash'		=> __( 'No Press Items Found in Trash',		'pojochild' ),
		'parent_item_colon'			=> __( 'Parent Press Item:',				'pojochild' ),
		'all_items'					=> __( 'All Press Items',					'pojochild' ),
		'archives'					=> __( 'Press Item Archives',				'pojochild' ),
		'attributes'				=> __( 'Press Item Attributes',				'pojochild' ),
		'insert_into_item'			=> __( 'Insert into Press Item',			'pojochild' ),
		'uploaded_to_this_item'		=> __( 'Uploaded to this Press Item',		'pojochild' ),
		'menu_name'					=> __( 'Press',								'pojochild' ),
		'name_admin_bar'			=> __( 'Press Item',						'pojochild' ),
		'item_published'			=> __( 'Press Item published',				'pojochild' ),
		'item_published_privately'	=> __( 'Press Item published privately',	'pojochild' ),
		'item_reverted_to_draft'	=> __( 'Press Item reverted to draft',		'pojochild' ),
		'item_scheduled'			=> __( 'Press Item scheduled',				'pojochild' ),
		'item_updated'				=> __( 'Press Item updated',				'pojochild' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'exclude_from_search'		=> false,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_nav_menus'			=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'			=> true,
		'menu_position'				=> 25.3,
		'menu_icon'					=> 'dashicons-admin-site',
		'capability_type'			=> 'post',
		'hierarchical'				=> false,
		'supports'					=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'				=> array(),
		'has_archive'				=> true,
		'rewrite'					=> array( 'slug' => 'press-item', 'with_front' => false ),
		'query_var'					=> true,
		'can_export'				=> true,
		'delete_with_user'			=> false,
		'show_in_rest'				=> true,
		'rest_base'					=> 'press-item',
	);

	register_post_type( 'press-item', $args );

}

/**
 * isp_register_news_item_post_type
 *
 * This function registers the news-item custom post type
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_news_item_post_type() {

	$labels = array(
		'name'						=> __( 'News',							'pojochild' ),
		'singular_name'				=> __( 'News Item',						'pojochild' ),
		'add_new'					=> __( 'Add New',						'pojochild' ),
		'add_new_item'				=> __( 'Add New News Item',				'pojochild' ),
		'edit_item'					=> __( 'Edit News Item',				'pojochild' ),
		'new_item'					=> __( 'New News Item',					'pojochild' ),
		'view_item'					=> __( 'View News Item',				'pojochild' ),
		'view_items'				=> __( 'View News Items',				'pojochild' ),
		'search_items'				=> __( 'Search News Items',				'pojochild' ),
		'not_found'					=> __( 'No News Items Found',			'pojochild' ),
		'not_found_in_trash'		=> __( 'No News Items Found in Trash',	'pojochild' ),
		'parent_item_colon'			=> __( 'Parent News Item:',				'pojochild' ),
		'all_items'					=> __( 'All News Items',				'pojochild' ),
		'archives'					=> __( 'News Item Archives',			'pojochild' ),
		'attributes'				=> __( 'News Item Attributes',			'pojochild' ),
		'insert_into_item'			=> __( 'Insert into News Item',			'pojochild' ),
		'uploaded_to_this_item'		=> __( 'Uploaded to this News Item',	'pojochild' ),
		'menu_name'					=> __( 'News',							'pojochild' ),
		'name_admin_bar'			=> __( 'News Item',						'pojochild' ),
		'item_published'			=> __( 'News Item published',			'pojochild' ),
		'item_published_privately'	=> __( 'News Item published privately',	'pojochild' ),
		'item_reverted_to_draft'	=> __( 'News Item reverted to draft',	'pojochild' ),
		'item_scheduled'			=> __( 'News Item scheduled',			'pojochild' ),
		'item_updated'				=> __( 'News Item updated',				'pojochild' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'exclude_from_search'		=> false,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_nav_menus'			=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'			=> true,
		'menu_position'				=> 25.4,
		'menu_icon'					=> 'dashicons-twitter',
		'capability_type'			=> 'post',
		'hierarchical'				=> false,
		'supports'					=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'				=> array(),
		'has_archive'				=> true,
		'rewrite'					=> array( 'slug' => 'news-item', 'with_front' => false ),
		'query_var'					=> true,
		'can_export'				=> true,
		'delete_with_user'			=> false,
		'show_in_rest'				=> true,
		'rest_base'					=> 'news-item',
	);

	register_post_type( 'news-item', $args );

}

/**
 * isp_register_testimonial_post_type
 *
 * This function registers the testimonial custom post type
 *
 * @param	N/A   
 * @return	N/A
 */
function isp_register_testimonial_post_type() {

	$labels = array(
		'name'						=> __( 'Testimonials',						'pojochild' ),
		'singular_name'				=> __( 'Testimonial',						'pojochild' ),
		'add_new'					=> __( 'Add New',							'pojochild' ),
		'add_new_item'				=> __( 'Add New Testimonial',				'pojochild' ),
		'edit_item'					=> __( 'Edit Testimonial',					'pojochild' ),
		'new_item'					=> __( 'New Testimonial',					'pojochild' ),
		'view_item'					=> __( 'View Testimonial',					'pojochild' ),
		'view_items'				=> __( 'View Testimonials',					'pojochild' ),
		'search_items'				=> __( 'Search Testimonials',				'pojochild' ),
		'not_found'					=> __( 'No Testimonials Found',				'pojochild' ),
		'not_found_in_trash'		=> __( 'No Testimonials Found in Trash',	'pojochild' ),
		'parent_item_colon'			=> __( 'Parent Testimonial:',				'pojochild' ),
		'all_items'					=> __( 'All Testimonials',					'pojochild' ),
		'archives'					=> __( 'Testimonial Archives',				'pojochild' ),
		'attributes'				=> __( 'Testimonial Attributes',			'pojochild' ),
		'insert_into_item'			=> __( 'Insert into Testimonial',			'pojochild' ),
		'uploaded_to_this_item'		=> __( 'Uploaded to this Testimonial',		'pojochild' ),
		'menu_name'					=> __( 'Testimonials',						'pojochild' ),
		'name_admin_bar'			=> __( 'Testimonial',						'pojochild' ),
		'item_published'			=> __( 'Testimonial published',				'pojochild' ),
		'item_published_privately'	=> __( 'Testimonial published privately',	'pojochild' ),
		'item_reverted_to_draft'	=> __( 'Testimonial reverted to draft',		'pojochild' ),
		'item_scheduled'			=> __( 'Testimonial scheduled',				'pojochild' ),
		'item_updated'				=> __( 'Testimonial updated',				'pojochild' ),
	);

	$args = array(
		'labels'					=> $labels,
		'public'					=> true,
		'exclude_from_search'		=> false,
		'publicly_queryable'		=> true,
		'show_ui'					=> true,
		'show_in_nav_menus'			=> true,
		'show_in_menu'				=> true,
		'show_in_admin_bar'			=> true,
		'menu_position'				=> 25.5,
		'menu_icon'					=> 'dashicons-heart',
		'capability_type'			=> 'post',
		'hierarchical'				=> false,
		'supports'					=> array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'				=> array(),
		'has_archive'				=> true,
		'rewrite'					=> array( 'slug' => 'testimonial', 'with_front' => false ),
		'query_var'					=> true,
		'can_export'				=> true,
		'delete_with_user'			=> false,
		'show_in_rest'				=> true,
		'rest_base'					=> 'testimonial',
	);

	register_post_type( 'testimonial', $args );

}