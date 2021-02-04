<?php
    $projects_query = new WP_Query( array(
        'post_type' => 'projects',
        'posts_per_page' => 2 
    ) );
?>

<?php if ( $projects_query->have_posts() ) : 
    $count = 0;
    ?>
    <div class="latest-projects section">
        <div class="container">
            
            <?php while ( $projects_query->have_posts() ) : $projects_query->the_post(); 
                $count++;
            ?>
                <div class="latest-projects__card"> 
                    <?php if ($count === 1) :  ?>
                        <h3>Det här är det senaste som lämnat vår fabrik i Oskarshamn</h3>
                    <?php endif; ?>
                    <div class="latest-projects__image" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID() ); ?>)"></div>
                    <div class="latest-projects__info">
                    <h2><?php the_title(); ?></h2>
                    <?php
                        if (have_rows('project_info', get_the_ID())) : ?>
                            <div class="latest-projects__details"><?php
                                while(have_rows('project_info')) : the_row(); ?>
                                    <div>
                                        <span><?php echo the_sub_field('title', get_the_ID()); ?></span>
                                        <span><?php echo the_sub_field('text', get_the_ID()); ?></span>
                                    </div><?php
                                endwhile; ?>
                            </div><?php
                        endif;
                    ?>
                    <a class="link" href="<?php echo get_permalink(); ?>">Läs mer</a>
                    </div>
                    <?php if ($count === 2) :  ?>
                        <a class="link" href="<?php echo get_post_type_archive_link( 'projects' ); ?>">Se alla projekt</a>
                    <?php endif; ?>
                </div>
            <?php endwhile;?>
        </div>

    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>