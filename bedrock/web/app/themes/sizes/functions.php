<?php
/**
 * Wilson theme functions
 *
 * Here we include all custom functions.
 *
 * @package WLSN
 */

// Load assets
require_once trailingslashit(get_stylesheet_directory()) . 'inc/assets.php';

// Setup the theme
require_once trailingslashit(get_stylesheet_directory()) . 'inc/setup.php';

// Widgets
require_once trailingslashit(get_stylesheet_directory()) . 'inc/widgets.php';

// icon
require_once trailingslashit(get_stylesheet_directory()) . 'inc/icon.php';

// custom post types
require_once trailingslashit(get_stylesheet_directory()) . 'inc/cpt.php';

// custom 
require_once trailingslashit(get_stylesheet_directory()) . 'inc/custom.php';
