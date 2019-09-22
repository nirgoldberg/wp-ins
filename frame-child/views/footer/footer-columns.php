<?php
/**
 * Footer columns
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
$columns	= get_field( 'acf-options_footer_columns', 'options' );
$index		= 0;

if ( ! $columns )
	return;

$column_class = pojo_get_sidebar_columns_class(
	array(
		'1' => 'col-sm-12',
		'2' => 'col-sm-6',
		'3' => 'col-lg-4 col-sm-6',
		'4' => 'col-lg-3 col-sm-6',
	),
	count( $columns ),
	'sidebar_footer_columns'
);

?>

<div id="sidebar-footer">

	<div class="<?php echo WRAP_CLASSES; ?>">
		<div class="<?php echo CONTAINER_CLASSES; ?>">

			<?php while ( have_rows( 'acf-options_footer_columns', 'options' ) ) : the_row();

				$layout = get_row_layout();
				$index++;

				?>

				<section class="widget <?php echo $column_class . ' ' . $layout; ?>">
					<div class="widget-inner">

						<?php
							/**
							 * Display the footer column
							 */
							include( locate_template( 'views/footer/footer-column-' . $layout . '.php' ) );
						?>

					</div>
				</section><!-- .widget.<?php echo $layout; ?> -->

				<?php if ( 2 == $index ) { ?>

					<div class="clearfix visible-md visible-sm"></div>

				<?php }

			endwhile; ?>

		</div>
	</div>

</div><!-- #sidebar-footer -->