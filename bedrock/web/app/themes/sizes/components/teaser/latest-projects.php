<?php 

$args = array(
    'post_type'=> 'projects',
    'order'    => 'ASC',
    'posts_per_page' => 2,
);              

$the_query = new WP_Query( $args ); 
if($the_query->have_posts() ) : ?>

<div class="latest-projects">
  
  <div class="container">
    <h2>Det här är det senaste som lämnat vår fabrik i Oskarshamn</h2>
    <?php
    while ( $the_query->have_posts() ) : 
      $the_query->the_post();
      $thumbnail = get_the_post_thumbnail_url();
    ?>

    <div class="latest-projects__card project-card">

      <div class="project-card__image" style="background-image: url(<?php echo $thumbnail?>)"></div>

      <div class="project-card__info">

        <h2><?php the_title(); ?></h2>

        <p>Byggherre - <?php echo get_field('landlord', get_the_ID()); ?></p>

          <?php
            if (have_rows('project_info', get_the_ID())) : ?>
              <div class="project-card__details"><?php
              while (have_rows('project_info', get_the_ID())) : the_row(); 
                $title = get_sub_field('title');
                $text = get_sub_field('text');
              ?>

              <div>
                <p><?php echo $title; ?></p>
                <p><?php echo $text; ?></p>
              </div><?php

              endwhile; ?>

            </div><?php
            endif; ?>
      </div>
          
    </div>
      
    <?php
    endwhile; 
    wp_reset_postdata(); ?>
    <a href="<?php echo get_post_type_archive_link( 'projects' ); ?>">Se alla projekt</a>
  </div>
 
 
</div><?php

else: 
endif;