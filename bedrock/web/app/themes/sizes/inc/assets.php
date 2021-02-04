<?php

// Enqueue front-end scripts and styles
function wlsn_enqueue_scripts()
{
    // Enqueue our scripts with versioning based on last modified time
    wp_enqueue_script('wlsn-scripts', get_stylesheet_directory_uri() . '/dist/js/app.js', array('jquery'), filemtime(get_template_directory() . '/dist/js/app.js'), true);

    // Register and enqueue our main stylesheet with versioning based on last modified time
    wp_register_style('theme-style', get_stylesheet_directory_uri() . '/style.css', $dependencies = array(), filemtime(get_template_directory() . '/style.css'));
    wp_register_style('wlsn-style', get_stylesheet_directory_uri() . '/dist/css/app.css', $dependencies = array(), filemtime(get_template_directory() . '/dist/css/app.css'));
    wp_enqueue_style('theme-style');
    wp_enqueue_style('wlsn-style');
}
add_action('wp_enqueue_scripts', 'wlsn_enqueue_scripts');