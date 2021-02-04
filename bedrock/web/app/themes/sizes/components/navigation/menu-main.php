<?php
/**
 * This is the component that displays the main menu
 *
 * @package WLSN
 */

if (has_nav_menu('header')) : ?>
    <nav class="header__nav"><?php
        wp_nav_menu(array(
            'theme_location' => 'header',
            'menu_id' => 'menu',
            'menu_class' => 'menu',
            'container' => '',
            'container_class' => '',
        )); 
        ?>  
        <button id="menuToggle" class="menu-toggle"><?php
            the_svg('menu-toggle', 'lg'); ?>
            <span class="screen-reader-text"><?php _e('Meny', 'wlsn'); ?></span>
        </button>
    </nav><?php
endif;
