<?php
/**
 * Theme functions
 *
 * @author		Nir Goldberg
 * @package		functions
 * @version		1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * isp_body_classes
 *
 * This function adds classes to body tag
 *
 * @param	$classes (array)
 * @return	(array)
 */
function isp_body_classes( $classes ) {

	// set all pages to 100% width
	$classes[] = 'layout-section';

	// return
	return $classes;

}
add_filter( 'body_class', 'isp_body_classes' );

/**
 * isp_load_facebook_sdk
 *
 * This function loads facebook SDK
 *
 * @param	N/A
 * @return	N/A
 */
function isp_load_facebook_sdk() {

	/**
	 * Variables
	 */
	$locale = get_locale() ?? 'en_US';

	?>

	<!-- load Facebook SDK for JavaScript -->
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?php echo $locale; ?>/sdk.js#xfbml=1&version=v3.0"></script>

	<?php

}
add_action( 'wp_body_open', 'isp_load_facebook_sdk' );

/**
 * isp_admin_post_thumbnail_html
 *
 * This function modifies post thumbnail HTML
 *
 * @param	$content (string)
 * @param	$post_id (int)
 * @param	$thumbnail_id (int)
 * @return	(string)
 */
function isp_admin_post_thumbnail_html( $content, $post_id, $thumbnail_id ) {

	if ( 'insurance' == get_post_type( $post_id ) ) {

		$content .= '<p>' . __( 'Image Dimensions:', 'pojochild' ) . ' 737 x 465(px)</p>';

	}

	// return
	return $content;

}
add_filter( 'admin_post_thumbnail_html', 'isp_admin_post_thumbnail_html', 10, 3 );