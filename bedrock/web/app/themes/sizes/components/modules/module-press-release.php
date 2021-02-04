<?php
    $press_release_query = new WP_Query( array(
        'post_type' => 'press_release',
        'posts_per_page' => 3 
    ) );
?>

<?php if ( $press_release_query->have_posts() ) : ?>
    <div class="latest-press-release section__small">
        <div class="container">
            <?php while ( $press_release_query->have_posts() ) : $press_release_query->the_post(); ?>
                <div class="latest-press-release__card">
                    <span><?php echo get_the_date('j F Y'); ?></span>
                    <h2><?php the_title(); ?></h2>
                    <a class="link" href="<?php echo get_permalink(); ?>">Läs pressmeddelande</a>
                </div>
            <?php endwhile;?>
        </div>

    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>