<?php 

if (have_rows('logos', get_the_ID())) : ?>
    <div class="investors section">
        <div class="container">
            <h4>Några av våra investerare</h4>
            <div class="investors__logos">
                <?php while(have_rows('logos', get_the_ID())) : the_row(); ?>
                    <div class="investors__image" style="background-image: url(<?php echo get_sub_field('logo')['url']; ?>)"></div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif;