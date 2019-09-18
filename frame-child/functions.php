<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Put your custom code here.

// config
require_once( 'functions/config.php' );

// scripts and styles
require_once( 'functions/scripts-n-styles.php' );

// WPMU site
require_once( 'includes/class-isp-wpmu-site.php' );

// post types
require_once( 'functions/post-types.php' );

// taxonomies
require_once( 'functions/taxonomies.php' );

// ACF config
require_once( 'functions/acf/acf-config.php' );

if ( ! is_main_site() ) {
	require_once( 'functions/acf/acf-field-groups.php' );
}

// helpers
require_once( 'functions/helpers.php' );

// pojo
require_once( 'functions/pojo.php' );

// menus
require_once( 'functions/menus.php' );