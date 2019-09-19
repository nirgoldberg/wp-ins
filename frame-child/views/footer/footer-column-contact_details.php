<?php
/**
 * Footer column - contact details
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
$title		= get_sub_field( 'title' );
$details	= array(
	'mobile'	=> array(
		'icon'		=> 'mobile',
		'value'		=> get_sub_field( 'mobile' ),
		'pattern'	=> '<a href="tel:%s">%s</a>',
	),
	'phone'		=> array(
		'icon'		=> 'phone',
		'value'		=> get_sub_field( 'phone' ),
		'pattern'	=> '<a href="tel:%s">%s</a>',
	),
	'fax'		=> array(
		'icon'		=> 'fax',
		'value'		=> get_sub_field( 'fax' ),
		'pattern'	=> '%s',
	),
	'email'		=> array(
		'icon'		=> 'envelope',
		'value'		=> get_sub_field( 'email' ),
		'pattern'	=> '<a href="mailto:%s">%s</a>',
	),
	'address'	=> array(
		'icon'		=> 'home',
		'value'		=> get_sub_field( 'address' ),
		'pattern'	=> '%s',
	),
);

if ( $title ) { ?>

	<h5 class="widget-title"><span><?php echo $title; ?></span></h5>

<?php } ?>

<div class="textwidget contact_details-widget">
	<ul>

		<?php foreach ( $details as $d ) {

			if ( $d[ 'value' ] ) { ?>

				<li>
					<span class="list-icon"> 
						<i class="fa fa-<?php echo $d[ 'icon' ]; ?>" aria-hidden="true"></i>
					</span>
					<span class="elementor-icon-list-text">
						<?php echo str_replace( '%s', $d[ 'value' ], $d[ 'pattern' ] ); ?>
					</span>
				</li>

			<?php }

		} ?>

	</ul>
</div><!-- .contact_details-widget -->