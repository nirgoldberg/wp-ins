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
			'blog_id'							=> '',
			'front_page_id'						=> '',

			// site settings
			'site_settings'						=> array(
				'blogdescription'				=> '',
				'timezone_string'				=> 'Asia/Jerusalem',
				'start_of_week'					=> 0,
				'blog_public'					=> 0,
				'default_pingback_flag'			=> '',
				'default_ping_status'			=> 'closed',
				'default_comment_status'		=> 'closed',
				'medium_size_w'					=> 1920,
				'medium_size_h'					=> 1080,
				'large_size_w'					=> 1920,
				'large_size_h'					=> 1080,
				'uploads_use_yearmonth_folders'	=> false,
				'permalink_structure'			=> '/%postname%/',
			),

			// pages
			'pages'								=> array(
				array(
					'id'						=> '',
					'post_title'				=> __( 'Home', 'pojochild' ),
					'page_template'				=> PAGE_TEMPLATE_DIR . 'page-template-main.php',
				),
				array(
					'id'						=> '',
					'post_title'				=> __( 'About', 'pojochild' ),
					'page_template'				=> '',
				),
				array(
					'id'						=> '',
					'post_title'				=> __( 'Products', 'pojochild' ),
					'page_template'				=> '',
				),
				array(
					'id'						=> '',
					'post_title'				=> __( 'Testimonials', 'pojochild' ),
					'page_template'				=> '',
				),
				array(
					'id'						=> '',
					'post_title'				=> __( 'Press', 'pojochild' ),
					'page_template'				=> '',
				),
				array(
					'id'						=> '',
					'post_title'				=> __( 'Blog', 'pojochild' ),
					'page_template'				=> '',
				),
				array(
					'id'						=> '',
					'post_title'				=> __( 'Contact', 'pojochild' ),
					'page_template'				=> '',
				),
			),

			// menu
			'menu'								=> array(
				'menu_name'						=> __( 'Primary Menu', 'pojochild' ),
				'menu_id'						=> '',
				'locations'						=> array( 'primary', 'primary_mobile' ),
			),

			// theme mods
			'theme_mods'						=> array(
				'nav_menu_locations'			=> array(),
				'custom_css_post_id'			=> -1,
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

		// defualt menu
		$this->set_default_menu();

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
	 * set_default_menu
	 *
	 * This function will create default menu
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_menu() {

		/**
		 * Variables
		 */
		$blog_id	= $this->settings[ 'blog_id' ];
		$menu_name	= $this->settings[ 'menu' ][ 'menu_name' ];
		$locations	= $this->settings[ 'menu' ][ 'locations' ];

		// create menu
		$menu_id	= wp_create_nav_menu( $menu_name );

		if ( ! is_wp_error( $menu_id ) ) {

			// set menu ID
			$this->settings[ 'menu' ][ 'menu_id' ] = $menu_id;

			// assign menu to locations
			foreach ( $locations as $location ) {
				$this->settings[ 'theme_mods' ][ 'nav_menu_locations' ][ $location ] = $menu_id;
			}

			// default menu items
			$this->set_default_menu_items();

			// set site theme mod
			update_blog_option( $blog_id, 'theme_mods_frame-child', $this->settings[ 'theme_mods' ] );

		}

	}

	/**
	 * set_default_menu_items
	 *
	 * This function will create default menu items
	 *
	 * @param	N/A
	 * @return	N/A
	 */
	function set_default_menu_items() {

		/**
		 * Variables
		 */
		$pages		= $this->settings[ 'pages' ];
		$menu_id	= $this->settings[ 'menu' ][ 'menu_id' ];

		foreach ( $pages as $page ) {

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
	if( ! isset( $isp_wpmu_site ) ) {

		$isp_wpmu_site = new ISP_WPMU_Site();
		$isp_wpmu_site->initialize();

	}

	// return
	return $isp_wpmu_site;

}

// initialize
isp_wpmu_site();

endif; // class_exists check