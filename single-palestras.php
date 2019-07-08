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

<div id="primary" class="content-area <?php echo $fullwidth; ?>">

    <?php sydney_yoast_seo_breadcrumbs(); ?>

    <main id="main" class="post-wrap" role="main">

        <div class="col-md-8">
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('content', 'single-palestras'); ?>

            <?php endwhile; // end of the loop. ?>
        </div>

        <div id="secondary" class="col-md-4">
            <div class="video-sidebar-widget clearfix margin-bottom-30">
                <?php if (dynamic_sidebar('interna-noticias')) : else : endif; ?>
            </div>

            <div class="clearfix">
                <?php
                $args = array(
                    'post_type' => 'palestras',
                    'meta_key' => '_feature-speech',
                    'posts_per_page' => 2
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <article class="article-box box-img corner margin-bottom-30">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php the_post_thumbnail_url('chalita-palestras-thumb'); ?>" class="corner"/>
                        </a>
                        <i class="fa fa-bookmark-o"></i>
                        <div class="box-title row">
                            <div class="col-md-12">
                                <h3 class="title text-center">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="col-md-12 text-center">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Conheça a palestra</a>
                            </div>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>



    </main>
</div>

<?php get_footer(); ?>
