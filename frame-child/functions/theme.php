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
 * isp_load_facebook_sdk
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