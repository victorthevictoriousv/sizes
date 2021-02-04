<?php
if ( have_rows('flexible_content') ):
    while ( have_rows('flexible_content') ) : the_row();

        if (get_row_layout() == 'press_release'):
            include(locate_template('components/modules/module-press-release.php'));
        elseif (get_row_layout() == 'project'):
            include(locate_template('components/modules/module-projects.php'));
        elseif (get_row_layout() == 'teaser_with_icons'):
            include(locate_template('components/modules/module-teaser-with-icons.php'));
        elseif (get_row_layout() == 'teaser_with_image_background'):
            include(locate_template('components/modules/module-teaser-with-image-background.php'));
        elseif (get_row_layout() == 'teaser'):
            include(locate_template('components/modules/module-teaser.php'));
        elseif (get_row_layout() == 'investors'):
            include(locate_template('components/modules/module-investors.php'));
        endif;

    endwhile;
endif;