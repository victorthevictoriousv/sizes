<?php
/**
 * Wilson theme page
 *
 * This is the template that displays a page
 *
 * @package WLSN
 */

// Header
get_header(); ?>

<?php

// Content
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('components/page/content', 'page');
    endwhile;
endif; ?>

<?php

// Footer
get_footer();
