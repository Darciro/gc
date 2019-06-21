<?php
/**
 * The template for displaying all single posts.
 *
 * @package Sydney
 */

get_header('all'); ?>

<?php if (get_theme_mod('fullwidth_single')) { //Check if the post needs to be full width
    $fullwidth = 'fullwidth';
} else {
    $fullwidth = '';
} ?>

<?php do_action('sydney_before_content'); ?>

<div id="primary" class="content-area col-md-8 <?php echo $fullwidth; ?>">

    <?php sydney_yoast_seo_breadcrumbs(); ?>

    <main id="main" class="post-wrap" role="main">

        <?php while (have_posts()) : the_post(); ?>

            <?php get_template_part('content', 'single'); ?>

            <?php // sydney_post_navigation(); ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template
            /* if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif; */
            ?>

        <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<div id="secondary" class="col-md-4">
    <?php if (dynamic_sidebar('interna-noticias')) : else : endif; ?>
</div>

<?php get_footer(); ?>
