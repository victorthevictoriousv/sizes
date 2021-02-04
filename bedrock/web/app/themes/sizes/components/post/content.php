<?php
/**
 * This is the component that displays post content
 *
 * @package WLSN
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="section__content">
    <?php

        if (is_single()) {
            the_title('<h1 class="post-title">', '</h1>');
            the_content();
        } else {
            the_title('<h2 class="post-title">', '</h2>');
            the_excerpt();
            echo '<a class="button" href="' . esc_url(get_permalink()) . '" rel="bookmark">' . __('Läs mer', 'wlsn') . '</a>';
        } ?>

    </div>
</article>