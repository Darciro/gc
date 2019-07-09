<?php
/**
 * @package Sydney
 */
?>

<div class="col-sm-8 col-md-8">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php do_action('sydney_inside_top_post'); ?>

        <div class="entry-content">
            <?php sydney_entry_footer(); ?>
            <h3 class="single-subtitle"><?php the_title(); ?></h3>

            <div class="margin-top-30">
                <?php the_content(); ?>
            </div>
        </div>

        <?php do_action('sydney_inside_bottom_post'); ?>

    </article><!-- #post-## -->
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
            'posts_per_page' => 1
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


<div class="col-md-12 more-articles">
    <h4>Mais artigos</h4>
    <div class="row articles-mobile">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
            'category_name' => 'artigos'
        );
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="col-md-4">
                <article class="article-box box-img corner">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb'); ?>" class="corner"/>
                    </a>
                    <div class="box-title row">
                        <div class="col-md-6 no-padding">
                            <?php
                            $post_tags = get_the_tags();
                            if ($post_tags) {
                                echo '<a href="#" class="cat">' . $post_tags[0]->name . '</a>';
                            }
                            ?>
                        </div>
                        <div class="col-md-12 no-padding-left article-box-heading article-box-heading--less-padding">
                            <h3 class="title">
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php the_title(); ?>"><?php the_title(); ?>
                                </a>
                            </h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                        </div>
                    </div>
                </article>
            </div>

        <?php endwhile;
            wp_reset_postdata(); endif; ?>
    </div>
</div>