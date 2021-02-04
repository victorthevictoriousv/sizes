<?php 

if (have_rows('links')) : ?>
<div class="teaser section">
    <div class="container">
        <?php while(have_rows('links')) : the_row();
            $link = get_sub_field('link');
            $id = $link->ID;
            $title = get_the_title($id);
            $permalink = get_the_permalink( $id );
            $excerpt = get_the_excerpt( $id );
            $image = get_the_post_thumbnail_url( $id, 'full' ) ? get_the_post_thumbnail_url( $id, 'full' ) : get_the_post_thumbnail_url( get_option( 'page_on_front' ), 'full' );
        ?>
        <div class="teaser__card">
            <div class="teaser__image" style="background-image: url(<?php echo $image; ?>)"></div>
            <div class="teaser__details">
                <h2><?php echo $title; ?></h2>
                <p><?php echo  strlen($excerpt) > 150 ? substr($excerpt, 0, 150) . "..." : $excerpt; ?></p>
                <a class="link" href="<?php echo $permalink; ?>">Läs mer</a>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif;