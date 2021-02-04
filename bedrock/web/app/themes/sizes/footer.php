<?php
/**
 * Wilson theme footer
 *
 * This is the partial that displays the page footer and includes scripts
 *
 * @package WLSN
 */

?>

            </main>
            <footer class="site__footer footer">
                <div class="container">
                    <div class="footer__logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" >
                            <?php the_svg('site-logo-grey', 'lg'); ?>
                        </a>
                        <span class="footer__flag">
                            <img src="<?php echo get_stylesheet_directory_uri().'/dist/img/sv-flag.png'; ?>" /> 
                            <img src="<?php echo get_stylesheet_directory_uri().'/dist/img/gb-flag.png'; ?>" /> 
                        </span>
                    </div>
                    <div>
                        <h4 class="footer__title">Besöksadress</h4>
                        <?php echo the_field('contacts', 'option')?>
                    </div>  
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer',
                                'menu_id' => 'footer__menu',
                                'menu_class' => 'footer__menu',
                                'container' => '',
                                'container_class' => '',
                            )); 
                        ?>  
                        <?php if (have_rows('social_media', 'option')) : ?>
                            <div class="footer__social-media">
                                <h4 class="footer__title">Följ oss</h4>
                                <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                                    <a href="<?php echo get_sub_field('link')['url'] ?>"><?php echo get_sub_field('link')['title']; ?></a>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                </div>
                <div class="container">
                    <img class="footer__eu-logo" src="<?php echo get_stylesheet_directory_uri().'/dist/img/eu-logo.png'; ?>" /> 
                    <p>©Copyright 2020 Sizes Works AB. Alla rättigheter reserverade</p>
                </div>
            </footer>
        </div>
        <?php get_template_part('components/alert/notice', 'cookie'); ?>
        <?php wp_footer(); ?>
    </body>
</html>
