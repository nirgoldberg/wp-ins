<?php
/**
 * Main sections
 *
 * @author		Nir Goldberg
 * @package		views/main
 * @version		1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( ! ACF_EXISTS )
	return;

/**
 * Variables
 */
$sections	= get_field( 'acf-homepage_homepage_sections' );

if ( ! $sections )
	return;

while ( have_rows( 'acf-homepage_homepage_sections' ) ) : the_row();

	$layout = get_row_layout();

	?>

	<section class="main-section <?php echo $layout; ?>">

		<?php
			/**
			 * Display the main section
			 */
			include( locate_template( 'views/main/main-section-' . $layout . '.php' ) );
		?>

	</section><!-- .main-section.<?php echo $layout; ?> -->

<?php endwhile;