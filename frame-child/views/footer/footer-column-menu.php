<?php
/**
 * Footer column - menu
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
$title			= get_sub_field( 'title' );
$menu_location	= get_sub_field( 'menu_location' );
$menu_args		= array(
	'depth'				=> 1,
	'theme_location'	=> $menu_location,
);

if ( ! has_nav_menu( $menu_location ) )
	return;

if ( $title ) { ?>

	<h5 class="widget-title"><span><?php echo $title; ?></span></h5>

<?php } ?>

<div class="textwidget menu-widget">

	<?php wp_nav_menu( $menu_args ); ?>

</div><!-- .menu-widget -->