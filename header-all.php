<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Sydney
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
        <?php if (get_theme_mod('site_favicon')) : ?>
            <link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon')); ?>"/>
        <?php endif; ?>
    <?php endif; ?>

    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Prompt:400,700,800" rel="stylesheet">

</head>

<body <?php body_class(); ?>>

<?php do_action('sydney_before_site'); //Hooked: sydney_preloader() ?>

<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'sydney'); ?></a>

    <?php do_action('sydney_before_header'); //Hooked: sydney_header_clone() ?>

    <header id="masthead" class="site-header topo-internas" role="banner">

        <!--<div class="bg-internas"></div>-->
        <div class="header-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-8 col-xs-12">
                        <?php if (get_theme_mod('site_logo')) : ?>
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>"><img
                                        class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>"
                                        alt="<?php bloginfo('name'); ?>"/></a>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                                      rel="home"><?php bloginfo('name'); ?></a></h1>
                            <h2 class="site-description"><?php bloginfo('description'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-12">
                        <div class="btn-menu"></div>
                        <nav id="mainnav" class="mainnav" role="navigation">
                            <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback')); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div class="col-md-2 col-sm-8 col-xs-12">
                        <div class="textwidget custom-html-widget social-widget">
                            <a href="https://www.instagram.com/gabriel_chalita/" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.facebook.com/facechalita" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.youtube.com/user/TVChalita" class="youtube"><i class="fa fa-youtube"></i></a>
                            <a href="https://twitter.com/gabriel_chalita" class="twitter"><i class="fa fa-twitter"></i></a>
                            <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <?php do_action('sydney_after_header'); ?>

    <div class="topo-interna container">
        <?php

        if (in_category(array('noticias', 'artigos'))) {
            $category = get_the_category();
            echo '<h2 class="container">' . $category[0]->name . '</h2>';
        } elseif (is_page() || is_single()) {
            the_title('<h2 class="container">', '</h2>', true);

        } else {
            /*if( ! is_post_type_archive() ){
                echo get_the_title();
            }*/
        }  ?>

        <div class="bg-internas"></div>
    </div>


    <div id="content" class="page-wrap container-internas">
        <div class="container content-wrapper">
            <div class="row">