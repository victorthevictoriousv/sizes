<?php
// Register Custom Post Type

// Press Release
function press_release_cpt() {

	$labels = array(
		'name'                  => _x( 'Pressmeddelanden', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Pressmeddelande', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Pressmeddelande', 'text_domain' ),
		'name_admin_bar'        => __( 'Pressmeddelanden', 'text_domain' ),
		'all_items'             => __( 'Alla', 'text_domain' ),
		'add_new_item'          => __( 'Nytt', 'text_domain' ),
		'add_new'               => __( 'Nytt', 'text_domain' ),
		'new_item'              => __( 'Nytt', 'text_domain' ),
		'edit_item'             => __( 'Redigera', 'text_domain' ),
		'update_item'           => __( 'Uppdatera', 'text_domain' ),
		'view_item'             => __( 'Se', 'text_domain' ),
		'view_items'            => __( 'Se', 'text_domain' ),
		'search_items'          => __( 'Sök', 'text_domain' ),
		'not_found'             => __( 'Hittade inte', 'text_domain' ),
		'not_found_in_trash'    => __( 'Hittade inte i papperskorgen', 'text_domain' ),
		'featured_image'        => __( 'Utvald bild', 'text_domain' ),
		'set_featured_image'    => __( 'Välj utvald bild', 'text_domain' ),
		'remove_featured_image' => __( 'Ta bort utvald bild', 'text_domain' ),
		'use_featured_image'    => __( 'Andvänd bild', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Pressmeddelande', 'text_domain' ),
		'description'           => __( 'Pressmeddelanden', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'press_release', $args );

}
add_action( 'init', 'press_release_cpt', 0 );

// Projects
function projects_cpt() {

	$labels = array(
		'name'                  => _x( 'Projekt', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projekt', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projekt', 'text_domain' ),
		'name_admin_bar'        => __( 'Projekt', 'text_domain' ),
		'archives'              => __( 'Arkiv projekt', 'text_domain' ),
        'all_items'             => __( 'Alla', 'text_domain' ),
		'add_new_item'          => __( 'Nytt', 'text_domain' ),
		'add_new'               => __( 'Nytt', 'text_domain' ),
		'new_item'              => __( 'Nytt', 'text_domain' ),
		'edit_item'             => __( 'Redigera', 'text_domain' ),
		'update_item'           => __( 'Uppdatera', 'text_domain' ),
		'view_item'             => __( 'Se', 'text_domain' ),
		'view_items'            => __( 'Se', 'text_domain' ),
		'search_items'          => __( 'Sök', 'text_domain' ),
		'not_found'             => __( 'Hittade inte', 'text_domain' ),
		'not_found_in_trash'    => __( 'Hittade inte i papperskorgen', 'text_domain' ),
		'featured_image'        => __( 'Utvald bild', 'text_domain' ),
		'set_featured_image'    => __( 'Välj utvald bild', 'text_domain' ),
		'remove_featured_image' => __( 'Ta bort utvald bild', 'text_domain' ),
		'use_featured_image'    => __( 'Andvänd bild', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Projekt', 'text_domain' ),
		'description'           => __( 'Projects', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'projects_cpt', 0 );