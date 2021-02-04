<?php

// Widgets
function wlsn_widgets_init()
{
    // Sidebar declaration
    register_sidebar(array(
        'name'          => __('Sidopanel', 'wlsn'),
        'id'            => 'sidebar',
        'description'   => __('Sidofält med widget', 'wlsn'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));

    // Remove comments widget styles from wp_head
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style',
    ));
}

add_action('widgets_init', 'wlsn_widgets_init');
