<?php
/**
 * Main content
 *
 * @author		Nir Goldberg
 * @package		views/main
 * @version		1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * homepage banner
 */
get_template_part( 'views/main/main', 'banner' );

/**
 * homepage sections
 */
get_template_part( 'views/main/main', 'sections' );