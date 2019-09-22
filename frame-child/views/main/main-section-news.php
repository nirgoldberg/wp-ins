<?php
/**
 * Main section - news
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
$title	= get_sub_field( 'title' );