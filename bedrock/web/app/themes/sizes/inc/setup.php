<?php

// Setup the theme
function wlsn_setup()
{
    // Language loading
    load_theme_textdomain('wlsn', trailingslashit(get_template_directory()) . 'languages');

    // HTML5 support
    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Title tag
    add_theme_support('title-tag');

    // Automatic feed links
    add_theme_support('automatic-feed-links');

    // Post thumbnails support
    add_theme_support('post-thumbnails');

    // Register menus
    register_nav_menu('header', __('Huvudmeny', 'wlsn'));
    register_nav_menu('footer', __('Footer', 'wlsn'));

    // Clean wp_head
    remove_action('wp_head', 'wp_generator'); // Remove version number
    remove_action('wp_head', 'wlwmanifest_link'); // Remove Windows Live Writer manifest
    remove_action('wp_head', 'rsd_link'); // Remove link to Really Simple Discovery service endpoint
    remove_action('wp_head', 'wp_shortlink_wp_head'); // Remove shortlinks
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10); // Remove links to adjacent posts
    remove_action('wp_head', 'print_emoji_detection_script', 7); // Remove emoji detection
    remove_action('wp_print_styles', 'print_emoji_styles'); // Remove emoji styles
    remove_action('wp_head', 'rest_output_link_wp_head', 10); // Remove rest-api link
}
add_action('after_setup_theme', 'wlsn_setup', 11);

// Remove Gutenberg CSS
function remove_gutenberg_assets() {
    wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'remove_gutenberg_assets', 100 );