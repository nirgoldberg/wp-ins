<?php
/**
 * Footer column - facebook page plugin
 *
 * @author		Nir Goldberg
 * @package		views/footer
 * @version		1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! ACF_EXISTS )
	return;

/**
 * Variables
 */
$title				= get_sub_field( 'title' );
$facebook_page_url	= get_sub_field( 'facebook_page_url' );

if ( ! $facebook_page_url )
	return;

if ( $title ) { ?>

	<h5 class="widget-title"><span><?php echo $title; ?></span></h5>

<?php } ?>

<div class="textwidget facebook_page_plugin-widget">

	<div class="fb-page"
		 data-href="<?php echo $facebook_page_url; ?>"
		 data-tabs=""
		 data-width=""
		 data-height=""
		 data-small-header="false"
		 data-adapt-container-width="true"
		 data-hide-cover="false"
		 data-show-facepile="false">
	</div>

</div><!-- .contact_form-widget -->