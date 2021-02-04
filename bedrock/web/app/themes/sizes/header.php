<?php
/**
 * Wilson theme header
 *
 * This is the partial that displays all of the <head> section and the page header
 *
 * @package WLSN
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="site" class="site">
        <header class="site__header header">
            <div class="header__content">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="header__logo">
                    <?php the_svg('site-logo'); ?>
                </a>
                <?php get_template_part('components/navigation/menu', 'main'); ?>
            </div>
        </header>
        <main class="site__main main">
        <?php get_template_part('components/hero/hero'); ?>
