<?php
/**
 * ACF Field Groups
 *
 * @author		Nir Goldberg
 * @package		functions/acf
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * ACF register field groups
 * 
 * @fieldgroup	Homepage Attributes
 * @fieldgroup	Insurance Category Attributes
 * @fieldgroup	Theme Settings
 * @fieldgroup	Header & Footer Settings
 * @fieldgroup	Customers Settings
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d6b01df4b792',
	'title' => 'Homepage Attributes',
	'fields' => array(
		array(
			'key' => 'field_5d6b58344f7d2',
			'label' => 'Slideshow Banner',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b56f730f57',
			'label' => 'Slideshow Banner',
			'name' => 'acf-homepage_slideshow_banner',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add Slide',
			'sub_fields' => array(
				array(
					'key' => 'field_5d6b575830f58',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'instructions' => 'Image Dimensions: 1890 x 480(px)',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5d6b579c30f59',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d6b57bf30f5a',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
			),
		),
		array(
			'key' => 'field_5d6b584e4f7d3',
			'label' => 'Homepage Sections',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b02760b203',
			'label' => 'Homepage Sections',
			'name' => 'acf-homepage_homepage_sections',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_5d6b0288abb7c' => array(
					'key' => 'layout_5d6b0288abb7c',
					'name' => 'insurances',
					'label' => 'Insurances',
					'display' => 'row',
					'sub_fields' => array(
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b03e620958' => array(
					'key' => 'layout_5d6b03e620958',
					'name' => 'news',
					'label' => 'News',
					'display' => 'row',
					'sub_fields' => array(
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b043120959' => array(
					'key' => 'layout_5d6b043120959',
					'name' => 'contact_form',
					'label' => 'Contact Form',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b04542095a',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b04682095b',
							'label' => 'Form Shortcode',
							'name' => 'form_shortcode',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b1d0ec1391',
							'label' => 'Background Image',
							'name' => 'background_image',
							'type' => 'image',
							'instructions' => 'Image Dimensions: 1890 x 1080(px)',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b04d02095c' => array(
					'key' => 'layout_5d6b04d02095c',
					'name' => 'recent_posts',
					'label' => 'Recent Posts',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b04d02095d',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b04d02095e',
							'label' => 'Content Type',
							'name' => 'content_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'post' => 'Posts',
								'press-item' => 'Press',
								'news-item' => 'News',
								'testimonial' => 'Testimonials',
							),
							'default_value' => array(
							),
							'allow_null' => 0,
							'multiple' => 1,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
						array(
							'key' => 'field_5d6b1edac1392',
							'label' => 'Number of Posts',
							'name' => 'number_of_posts',
							'type' => 'range',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 6,
							'min' => 3,
							'max' => 12,
							'step' => 3,
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '0',
					'max' => '',
				),
				'layout_5d6b09572095f' => array(
					'key' => 'layout_5d6b09572095f',
					'name' => 'services',
					'label' => 'Services',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b097b20960',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b098420961',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 0,
							'delay' => 0,
						),
						array(
							'key' => 'field_5d6b1c0bca476',
							'label' => 'Button Text',
							'name' => 'button_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b1c32ca477',
							'label' => 'Button Link',
							'name' => 'button_link',
							'type' => 'file',
							'instructions' => 'File Format: PDF',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => 'pdf',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b09ca20962' => array(
					'key' => 'layout_5d6b09ca20962',
					'name' => 'customers',
					'label' => 'Customers',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b09d720963',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b09fc20965' => array(
					'key' => 'layout_5d6b09fc20965',
					'name' => 'free_text',
					'label' => 'Free Text',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b0a1720966',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b0a3520967',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '0',
					'max' => '',
				),
			),
			'button_label' => 'Add Section',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-templates/page-template-main.php',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'excerpt',
		2 => 'featured_image',
	),
	'active' => true,
	'description' => '',
	'modified' => 1567319381,
));

acf_add_local_field_group(array(
	'key' => 'group_5d6b0f4068bc8',
	'title' => 'Insurance Category Attributes',
	'fields' => array(
		array(
			'key' => 'field_5d6b0fc511a68',
			'label' => 'Image',
			'name' => 'acf-insurance-category_image',
			'type' => 'image',
			'instructions' => 'Image Dimensions: 737 x 465(px)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'insurance-category',
			),
		),
	),
	'menu_order' => 2,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'modified' => 1567319389,
));

acf_add_local_field_group(array(
	'key' => 'group_5d6b1253bb98d',
	'title' => 'Theme Settings',
	'fields' => array(
		array(
			'key' => 'field_5d6b16a769061',
			'label' => 'Color Scheme',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b12a29e90b',
			'label' => 'Scheme Type',
			'name' => 'acf-options_scheme_type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'one' => 'One Color',
				'two' => 'Two Colors',
			),
			'default_value' => array(
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5d6b138a9e90c',
			'label' => 'First Color',
			'name' => 'acf-options_scheme_color_1',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5d6b12a29e90b',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#246ad3',
		),
		array(
			'key' => 'field_5d6b14509e90d',
			'label' => 'Second Color',
			'name' => 'acf-options_scheme_color_2',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5d6b12a29e90b',
						'operator' => '==',
						'value' => 'two',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '#777777',
		),
		array(
			'key' => 'field_5d6b2127fcab2',
			'label' => 'Page Top Banner',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b2176fcab3',
			'label' => 'Banner Image',
			'name' => 'acf-options_page_top_banner_image',
			'type' => 'image',
			'instructions' => 'Image Dimensions: 1890 x 180(px)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-theme-settings',
			),
		),
	),
	'menu_order' => 11,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'modified' => 1567319453,
));

acf_add_local_field_group(array(
	'key' => 'group_5d6b16f163d6c',
	'title' => 'Header & Footer Settings',
	'fields' => array(
		array(
			'key' => 'field_5d6b16f167128',
			'label' => 'Header Content',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b2ae8d55a0',
			'label' => 'Phone',
			'name' => 'acf-options_header_phone',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d6b2b28d55a1',
			'label' => 'Personal Area System Link',
			'name' => 'acf-options_header_personal_area_system_link',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5d749cac3c43d',
			'label' => 'Personal Area System Text',
			'name' => 'acf-options_header_personal_area_system_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d6b17379bb15',
			'label' => 'Footer Content',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b2f3e173c0',
			'label' => 'Footer Sections',
			'name' => 'acf-options_footer_sections',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_5d6b03e620958' => array(
					'key' => 'layout_5d6b03e620958',
					'name' => 'news',
					'label' => 'News',
					'display' => 'row',
					'sub_fields' => array(
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b043120959' => array(
					'key' => 'layout_5d6b043120959',
					'name' => 'contact_form',
					'label' => 'Contact Form',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b2f3e173c1',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173c2',
							'label' => 'Form Shortcode',
							'name' => 'form_shortcode',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173c3',
							'label' => 'Background Image',
							'name' => 'background_image',
							'type' => 'image',
							'instructions' => 'Image Dimensions: 1890 x 1080(px)',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'thumbnail',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b04d02095c' => array(
					'key' => 'layout_5d6b04d02095c',
					'name' => 'recent_posts',
					'label' => 'Recent Posts',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b2f3e173c4',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173c5',
							'label' => 'Content Type',
							'name' => 'content_type',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'post' => 'Posts',
								'press-item' => 'Press',
								'news-item' => 'News',
								'testimonial' => 'Testimonials',
							),
							'default_value' => array(
							),
							'allow_null' => 0,
							'multiple' => 1,
							'ui' => 0,
							'ajax' => 0,
							'return_format' => 'value',
							'placeholder' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173c6',
							'label' => 'Number of Posts',
							'name' => 'number_of_posts',
							'type' => 'range',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => 6,
							'min' => 3,
							'max' => 12,
							'step' => 3,
							'prepend' => '',
							'append' => '',
						),
					),
					'min' => '0',
					'max' => '',
				),
				'layout_5d6b09572095f' => array(
					'key' => 'layout_5d6b09572095f',
					'name' => 'services',
					'label' => 'Services',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b2f3e173c7',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173c8',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 0,
							'delay' => 0,
						),
						array(
							'key' => 'field_5d6b2f3e173c9',
							'label' => 'Button Text',
							'name' => 'button_text',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173ca',
							'label' => 'Button Link',
							'name' => 'button_link',
							'type' => 'file',
							'instructions' => 'File Format: PDF',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'url',
							'library' => 'all',
							'min_size' => '',
							'max_size' => '',
							'mime_types' => 'pdf',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b09ca20962' => array(
					'key' => 'layout_5d6b09ca20962',
					'name' => 'customers',
					'label' => 'Customers',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b2f3e173cb',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b09fc20965' => array(
					'key' => 'layout_5d6b09fc20965',
					'name' => 'free_text',
					'label' => 'Free Text',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b2f3e173cc',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b2f3e173cd',
							'label' => 'Text',
							'name' => 'text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'basic',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '0',
					'max' => '',
				),
			),
			'button_label' => 'Add Section',
			'min' => '',
			'max' => '',
		),
		array(
			'key' => 'field_5d6b30bd978ca',
			'label' => 'Footer Columns',
			'name' => 'acf-options_footer_columns',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_5d6b30ca616b8' => array(
					'key' => 'layout_5d6b30ca616b8',
					'name' => 'menu',
					'label' => 'Menu',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b311d978cb',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b3128978cc',
							'label' => 'Menu Location',
							'name' => 'menu_location',
							'type' => 'select',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'primary' => 'Primary Menu',
								'primary_mobile' => 'Primary Mobile Menu',
								'sticky_menu' => 'Sticky Menu',
								'footer_menu' => 'Footer Menu',
							),
							'default_value' => array(
							),
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b32e2978cd' => array(
					'key' => 'layout_5d6b32e2978cd',
					'name' => 'contact_form',
					'label' => 'Contact Form',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b32e2978ce',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b3324978d0',
							'label' => 'Form Shortcode',
							'name' => 'form_shortcode',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b3376978d1' => array(
					'key' => 'layout_5d6b3376978d1',
					'name' => 'contact_details',
					'label' => 'Contact Details',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b3376978d2',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b338a978d4',
							'label' => 'Mobile',
							'name' => 'mobile',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b33a5978d5',
							'label' => 'Phone',
							'name' => 'phone',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b33ea978d6',
							'label' => 'Fax',
							'name' => 'fax',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b33f1978d7',
							'label' => 'Email',
							'name' => 'email',
							'type' => 'email',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
						),
						array(
							'key' => 'field_5d6b340b978d8',
							'label' => 'Address',
							'name' => 'address',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
				'layout_5d6b342e978d9' => array(
					'key' => 'layout_5d6b342e978d9',
					'name' => 'facebook_page_plugin',
					'label' => 'Facebook Page Plugin',
					'display' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_5d6b342e978da',
							'label' => 'Title',
							'name' => 'title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d6b342e978db',
							'label' => 'Facebook Page URL',
							'name' => 'facebook_page_url',
							'type' => 'url',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
						),
					),
					'min' => '0',
					'max' => '1',
				),
			),
			'button_label' => 'Add Column',
			'min' => '',
			'max' => 4,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-header-footer-settings',
			),
		),
	),
	'menu_order' => 12,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d6b16f67fe97',
	'title' => 'Customers Settings',
	'fields' => array(
		array(
			'key' => 'field_5d6b16f6825f0',
			'label' => 'Customer Gallery',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'left',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d6b373ad96eb',
			'label' => 'Gallery',
			'name' => 'acf-options_customers_gallery',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'insert' => 'append',
			'library' => 'all',
			'min' => '',
			'max' => '',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'acf-customers-settings',
			),
		),
	),
	'menu_order' => 13,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'modified' => 1567319769,
));

endif;