<?php
/**
 * ISP_WPMU_Site
 *
 * @author		Nir Goldberg
 * @package		includes
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! class_exists( 'ISP_WPMU_Site' ) ) :

class ISP_WPMU_Site {

	/**
	 * __construct
	 *
	 * A dummy constructor to ensure is only initialized once
	 *
	 * @param		N/A
	 * @return		N/A
	 */
	function __construct() {

		/* Do nothing here */

	}

	/**
	* initialize
	*
	* The real constructor to initialize MSCatSync
	*
	* @since		1.0.0
	* @param		N/A
	* @return		N/A
	*/
	function initialize() {

		// settings
		$this->settings = array(

			// vars
			'blog_id'												=> '',
			'front_page_id'											=> '',

			// site settings
			'site_settings'											=> array(
				'blogdescription'									=> '',
				'timezone_string'									=> 'Asia/Jerusalem',
				'start_of_week'										=> 0,
				'blog_public'										=> 0,
				'default_pingback_flag'								=> '',
				'default_ping_status'								=> 'closed',
				'default_comment_status'							=> 'closed',
				'medium_size_w'										=> 1920,
				'medium_size_h'										=> 1080,
				'large_size_w'										=> 1920,
				'large_size_h'										=> 1080,
				'uploads_use_yearmonth_folders'						=> false,
				'permalink_structure'								=> '/%postname%/',
			),

			// pages
			'pages'													=> array(
				array(
					'id'											=> '',
					'post_title'									=> __( 'Home', 'pojochild' ),
					'page_template'									=> PAGE_TEMPLATE_PATH . 'page-template-main.php',
					'menus'											=> array( 0, 1 ),
				),
				array(
					'id'											=> '',
					'post_title'									=> __( 'About', 'pojochild' ),
					'page_template'									=> '',
					'menus'											=> array( 0 ),
				),
				array(
					'id'											=> '',
					'post_title'									=> __( 'Products', 'pojochild' ),
					'page_template'									=> '',
					'menus'											=> array( 0, 1 ),
				),
				array(
					'id'											=> '',
					'post_title'									=> __( 'Testimonials', 'pojochild' ),
					'page_template'									=> '',
					'menus'											=> array( 0 ),
				),
				array(
					'id'											=> '',
					'post_title'									=> __( 'Press', 'pojochild' ),
					'page_template'									=> '',
					'menus'											=> array( 0 ),
				),
				array(
					'id'											=> '',
					'post_title'									=> __( 'Blog', 'pojochild' ),
					'page_template'									=> '',
					'menus'											=> array( 0 ),
				),
				array(
					'id'											=> '',
					'post_title'									=> __( 'Contact', 'pojochild' ),
					'page_template'									=> '',
					'menus'											=> array( 0 ),
				),
			),

			// forms
			'forms'													=> array(
				array(
					'id'											=> '',
					'post_title'									=> __( 'Short Contact Form', 'pojochild' ),
					'form_fields'									=> array(
						array(
							'type'									=> 'text',
							'name'									=> __( 'Name', 'pojochild' ),
							'placeholder'							=> __( 'Name', 'pojochild' ) . ' *',
							'required'								=> 1,
						),
						array(
							'type'									=> 'tel',
							'name'									=> __( 'Phone', 'pojochild' ),
							'placeholder'							=> __( 'Phone', 'pojochild' ),
						),
						array(
							'type'									=> 'email',
							'name'									=> __( 'Email', 'pojochild' ),
							'placeholder'							=> __( 'Email', 'pojochild' ) . ' *',
							'required'								=> 1,
						),
					),
				),
			),

			// menus
			'menus'													=> array(
				array(
					'menu_name'										=> __( 'Primary Menu', 'pojochild' ),
					'menu_id'										=> '',
					'locations'										=> array( 'primary', 'primary_mobile' ),
				),
				array(
					'menu_name'										=> __( 'Footer Menu', 'pojochild' ),
					'menu_id'										=> '',
					'locations'										=> array( 'footer_menu' ),
				),
			),

			// acf
			'acf'													=> array(
				'acf-options_header_phone'							=> array(
					'value'											=> '03-1234567',
					'post_id'										=> 'options',
				),
				'acf-options_header_personal_area_system_link'		=> array(
					'value'											=> '',
					'post_id'										=> 'options',
				),
				'acf-options_header_personal_area_system_text'		=> array(
					'value'											=> __( 'Personal Area', 'pojochild' ),
					'post_id'										=> 'options',
				),
				'acf-options_footer_columns'						=> array(
					'value'											=> array(
						array(
							'acf_fc_layout'							=> 'menu',
							'title'									=> 'Products',
							'menu_location'							=> 'footer_menu',
						),
						array(
							'acf_fc_layout'							=> 'contact_form',
							'title'									=> 'Contact Us',
							'form_shortcode'						=> '',
						),
						array(
							'acf_fc_layout'							=> 'contact_details',
							'title'									=> 'Contact Details',
							'mobile'								=> '054-1234567',
							'phone'									=> '03-1234567',
							'fax'									=> '03-1234567',
							'email'									=> '',
							'address'								=> 'My Address',
						),
						array(
							'acf_fc_layout'							=> 'facebook_page_plugin',
							'title'									=> 'Join Us at Facebook',
							'facebook_page_url'						=> 'https://www.facebook.com/facebook',
						),
					),
					'post_id'										=> 'options',
				),
			),

			// theme mods
			'theme_mods'											=> array(
				'nav_menu_locations'								=> array(),
				'custom_css_post_id'								=> -1,
			),

		);

		// actions
		add_action( 'wpmu_new_blog', array( $this, 'init' ), 10, 6 );

	}

	/**
	 * init
	 *
	 * This function will run after a new site is created
	 *
	 * @param	$blog_id (int) Blog ID
	 * @param	$user_id (int) User ID
	 * @param	$domain (string) Site domain
	 * @param	$path (string) Site path
	 * @param	$site_id (int) Site ID
	 * @param	$meta (array) Meta data, used to set initial site options
	 * @return	N/A
	 */
	function init( $blog_id, $user_id, $domain, $path, $site_id, $meta ) {

		// set blog ID
		$this->settings[ 'blog_id' ] = $blog_id;

		switch_to_blog( $blog_id );

		// defualt site settings
		$this->set_default_settings();

		// defualt site pages
		$this->set_default_pages();

		// defualt forms
		$this->set_default_forms();

		// defualt menus
		$this->set_default_menus();

		// defualt acf
		$this->set_default_acf();

		restore_current_blog();

	}

	/**
	 * set_default_settings
	 *
	 * This function will set default site settings
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_settings() {

		/**
		 * Variables
		 */
		$site_settings	= $this->settings[ 'site_settings' ];
		$blog_id		= $this->settings[ 'blog_id' ];

		foreach ( $site_settings as $key => $value ) {
			update_blog_option( $blog_id, $key, $value );
		}

	}

	/**
	 * set_default_pages
	 *
	 * This function will create default site pages
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_pages() {

		/**
		 * Variables
		 */
		$blog_id	= $this->settings[ 'blog_id' ];
		$pages		= $this->settings[ 'pages' ];
		$page_args	= array(
			'post_author'		=> 1,
			'post_title'		=> '',
			'post_status'		=> 'publish',
			'post_type'			=> 'page',
			'comment_status'	=> 'closed',
			'ping_status'		=> 'closed',
			'menu_order'		=> 0,
		);

		foreach ( $pages as $key => $page ) {

			$page_args[ 'post_title' ] = $page[ 'post_title' ];
			$page_args[ 'menu_order' ] = $key;

			// create page
			$page_id = wp_insert_post( $page_args );

			if ( $page_id ) {

				// set page ID
				$this->settings[ 'pages' ][ $key ][ 'id' ] = $page_id;

				if ( $page[ 'page_template' ] ) {

					// set page template
					update_post_meta( $page_id, '_wp_page_template', $page[ 'page_template' ] );

				}

			}

		}

		// set front page ID
		$this->settings[ 'front_page_id' ] = $this->settings[ 'pages' ][0][ 'id' ];

		if ( $this->settings[ 'front_page_id' ] ) {

			// set site front page settings
			update_blog_option( $blog_id, 'show_on_front', 'page' );
			update_blog_option( $blog_id, 'page_on_front', $this->settings[ 'front_page_id' ] );

		}

	}

	/**
	 * set_default_forms
	 *
	 * This function will create default forms
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_forms() {

		/**
		 * Variables
		 */
		$forms		= $this->settings[ 'forms' ];
		$form_args	= array(
			'post_author'		=> 1,
			'post_title'		=> '',
			'post_status'		=> 'publish',
			'post_type'			=> 'pojo_forms',
			'comment_status'	=> 'closed',
			'ping_status'		=> 'closed',
			'menu_order'		=> 0,
		);

		foreach ( $forms as $key => $form ) {

			$form_args[ 'post_title' ] = $form[ 'post_title' ];
			$form_args[ 'menu_order' ] = $key;

			// create form
			$form_id = wp_insert_post( $form_args );

			if ( $form_id ) {

				// set form ID
				$this->settings[ 'forms' ][ $key ][ 'id' ] = $form_id;

				// set form fields
				if ( $form[ 'form_fields' ] ) {

					add_post_meta( $form_id, 'form_fields', count( $form[ 'form_fields' ] ) );

					foreach ( $form[ 'form_fields' ] as $field_key => $field_attributes ) {
						foreach ( $field_attributes as $att_key => $att_value ) {

							add_post_meta( $form_id, 'form_fields[' . $field_key . '][' . $att_key . ']', $att_value );

						}
					}

				}

				// set form meta
				add_post_meta( $form_id, 'form_email_to',				get_option( 'admin_email' ) );
				add_post_meta( $form_id, 'form_email_subject',			sprintf( __( 'New message from "%s"', 'pojochild' ), get_bloginfo( 'name' ) ) );
				add_post_meta( $form_id, 'form_email_form_name',		get_bloginfo( 'name' ) );
				add_post_meta( $form_id, 'form_email_form',				'noreply@' . parse_url( home_url(), PHP_URL_HOST ) );
				add_post_meta( $form_id, 'form_metadata',				'date' );
				add_post_meta( $form_id, 'form_metadata',				'time' );
				add_post_meta( $form_id, 'form_metadata',				'page_url' );
				add_post_meta( $form_id, 'form_metadata',				'user_agent' );
				add_post_meta( $form_id, 'form_metadata',				'remote_ip' );
				add_post_meta( $form_id, 'form_metadata',				'credit' );
				add_post_meta( $form_id, 'form_style_align_text',		'inside' );
				add_post_meta( $form_id, 'form_style_field_size',		'medium' );
				add_post_meta( $form_id, 'form_style_button_text',		__( 'Send', 'pojochild' ) );
				add_post_meta( $form_id, 'form_style_button_size',		'medium' );
				add_post_meta( $form_id, 'form_style_button_width',		'12' );
				add_post_meta( $form_id, 'form_style_button_align',		'none' );

			}

		}

		// set acf footer columns form shortcode
		$acf_footer_columns_key = array_search( 'contact_form', array_column( $this->settings[ 'acf' ][ 'acf-options_footer_columns' ][ 'value' ], 'acf_fc_layout' ) );
		$this->settings[ 'acf' ][ 'acf-options_footer_columns' ][ 'value' ][ $acf_footer_columns_key ][ 'form_shortcode' ] = '[pojo-form id="' . $this->settings[ 'forms' ][0][ 'id' ] . '"]';

	}

	/**
	 * set_default_menus
	 *
	 * This function will create default menus
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_menus() {

		/**
		 * Variables
		 */
		$blog_id	= $this->settings[ 'blog_id' ];
		$menus		= $this->settings[ 'menus' ];

		foreach ( $menus as $key => $menu ) {

			$menu_name	= $menu[ 'menu_name' ];
			$locations	= $menu[ 'locations' ];

			// create menu
			$menu_id	= wp_create_nav_menu( $menu_name );

			if ( ! is_wp_error( $menu_id ) ) {

				// set menu ID
				$this->settings[ 'menus' ][ $key ][ 'menu_id' ] = $menu_id;

				// assign menu to locations
				foreach ( $locations as $location ) {
					$this->settings[ 'theme_mods' ][ 'nav_menu_locations' ][ $location ] = $menu_id;
				}

				// default menus items
				$this->set_default_menu_items( $key );

			}

		}

		// set site theme mod
		update_blog_option( $blog_id, 'theme_mods_frame-child', $this->settings[ 'theme_mods' ] );

	}

	/**
	 * set_default_menu_items
	 *
	 * This function will create default menu items
	 *
	 * @param	$menu_key (int)
	 * @return	N/A
	 */
	function set_default_menu_items( $menu_key ) {

		/**
		 * Variables
		 */
		$pages		= $this->settings[ 'pages' ];
		$menu_id	= $this->settings[ 'menus' ][ $menu_key ][ 'menu_id' ];

		foreach ( $pages as $page ) {

			if ( in_array( $menu_key, $page[ 'menus' ] ) ) {

				wp_update_nav_menu_item( $menu_id, 0, array(
					'menu-item-object-id'	=> $page[ 'id' ],
					'menu-item-object'		=> 'page',
					'menu-item-type'		=> 'post_type',
					'menu-item-title'		=> $page[ 'post_title' ],
					'menu-item-status'		=> 'publish',
				));

			}

		}

	}

	/**
	 * set_default_acf
	 *
	 * This function will set default acf
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_acf() {

		// set personal area system link
		$this->settings[ 'acf' ][ 'acf-options_header_personal_area_system_link' ][ 'value' ] = home_url();

		// set acf footer columns email
		$acf_footer_columns_key = array_search( 'contact_details', array_column( $this->settings[ 'acf' ][ 'acf-options_footer_columns' ][ 'value' ], 'acf_fc_layout' ) );
		$this->settings[ 'acf' ][ 'acf-options_footer_columns' ][ 'value' ][ $acf_footer_columns_key ][ 'email' ] = get_option( 'admin_email' );

		foreach ( $this->settings[ 'acf' ] as $selector => $data ) {

			update_field( $selector, $data[ 'value' ], $data[ 'post_id' ] );

		}

	}

}

/**
 * isp_wpmu_site
 *
 * The main function responsible for returning the one true instance
 *
 * @param		N/A
 * @return		(object)
 */
function isp_wpmu_site() {

	// globals
	global $isp_wpmu_site;

	// initialize
	if ( ACF_EXISTS && ! isset( $isp_wpmu_site ) ) {

		$isp_wpmu_site = new ISP_WPMU_Site();
		$isp_wpmu_site->initialize();

	}

	// return
	return $isp_wpmu_site;

}

// initialize
isp_wpmu_site();

endif; // class_exists check