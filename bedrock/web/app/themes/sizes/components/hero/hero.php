<?php
 
 $hero = get_the_post_thumbnail_url( get_the_ID(), 'full' ) ? get_the_post_thumbnail_url( get_the_ID(), 'full' ) : get_the_post_thumbnail_url( get_option( 'page_on_front' ), 'full' );
 $excerpt = get_the_excerpt() ? get_the_excerpt() : "Sizes"

?>

<div class="hero" style="background-image: url(<?php echo $hero; ?>)">
    <div class="container">
        <h1 class="hero__title">
            <span><?php the_title(); ?></span>
            <span><?php 
                if (strlen($excerpt) > 60) {
                    echo substr($excerpt, 0, 60) . "...";
                } else {
                    echo $excerpt;
                }
            ?></span>
        </h1>
        
    </div>
</div>