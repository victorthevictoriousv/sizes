<?php

// Add Google Fonts
function wpb_add_google_fonts() {
 wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

add_post_type_support( 'page', 'excerpt' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Footer settings',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'footer-settings',
		'redirect'		=> false
	));
}