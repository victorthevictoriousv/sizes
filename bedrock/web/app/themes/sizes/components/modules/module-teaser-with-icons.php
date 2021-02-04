<?php
if( have_rows('card') ): ?>
    <div class="teaser-with-icons section">
        <div class="container">
            <?php while( have_rows('card') ): the_row(); ?>
                <div class="teaser-with-icons__card">
                    <img src="<?php echo get_sub_field('icon')['url'] ?>" />
                    <h3><?php echo get_sub_field('title'); ?></h3>
                    <p><?php echo get_sub_field('text'); ?></p>
                </div>            
            <?php endwhile; ?>
        </div>
        <a class="link" href="<?php echo get_sub_field('link')['url']; ?>"><?php echo get_sub_field('link')['title']; ?></a>
    </div>
<?php endif; ?>