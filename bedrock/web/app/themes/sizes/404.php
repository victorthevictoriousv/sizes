<?php
/**
 * Wilson theme 404
 *
 * This is the template that displays 404 errors
 *
 * @package WLSN
 */

// Header
get_header(); ?>

<div class="container">
    <h1 class="page-title"><?php _e('Oops! Sidan du letar efter kan inte hittas.', 'wlsn'); ?></h1>
    <?php _e('Inget verkar ha hittats på denna sökväg. Kanske vill du prova att söka?', 'wlsn'); ?>
    <?php get_search_form(); ?>
</div>

<?php get_footer();