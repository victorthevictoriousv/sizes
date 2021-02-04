<div class="teaser-with-image-background section" style="background-image: url(<?php echo get_sub_field('image', get_the_ID())['url']; ?>)">
    <div class="container">
            <p><?php echo get_sub_field('text', get_the_ID()); ?></p>
            <a class="link" href="<?php echo get_sub_field('link', get_the_ID())['url']; ?>"><?php echo get_sub_field('link', get_the_ID())['title']; ?></a>    
    </div>
</div>
