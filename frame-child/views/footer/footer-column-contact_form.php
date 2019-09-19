<?php
/**
 * Footer column - contact form
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
$form_shortcode		= get_sub_field( 'form_shortcode' );

if ( ! $form_shortcode )
	return;

if ( $title ) { ?>

	<h5 class="widget-title"><span><?php echo $title; ?></span></h5>

<?php } ?>

<div class="textwidget contact_form-widget">

	<?php echo do_shortcode( $form_shortcode ); ?>

</div><!-- .contact_form-widget -->