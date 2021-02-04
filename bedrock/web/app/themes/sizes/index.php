<?php
/**
 * Wilson theme index
 *
 * This is the template that displays content if no more specific file is present
 *
 * @package WLSN
 */

// Header
get_header(); ?>

<div class="container"><?php

// Content
if (have_posts()) :
    while (have_posts()) :
        the_post();
        get_template_part('components/post/content', get_post_format());
    endwhile;

    get_template_part('components/navigation/pagination');
else :
    get_template_part('components/post/content', 'none');
endif; ?>

</div><?php

// Footer
get_footer();
