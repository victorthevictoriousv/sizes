<?php
/**
 * This is the component that displays page content
 *
 * @package WLSN
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="section__content">
        <?php the_content(); ?>
    </div>
    <?php get_template_part('components/modules/modules', 'none'); ?>
</article>