<?php
/* Template Name: Artigos */
get_header('all');
?>
    <div id="primary" class="fp-content-area">
        <main id="main" class="site-main main-artigos" role="main">

            <div id="artigos-1" class="col-lg-12 clearfix">
                <article class="noticias col-lg-8 col-md-8 col-xs-12">
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'category_name' => 'artigos-em-destaque'
                        );
                        $the_query = new WP_Query($args);

                        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="col-md-6">
                                <article class="article-box box-img box-img--taller corner">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb'); ?>" class="corner hidden-xs"/>
                                        <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb-mobile'); ?>" class="corner visible-xs"/>
                                    </a>
                                    <i class="fa fa-bookmark-o"></i>
                                    <div class="box-title row">
                                        <div class="col-md-12 no-padding">
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

                </article>

                <aside class="videos videos-no-pd col-lg-4 col-md-4 col-xs-12">
                    <?php if (dynamic_sidebar('videos')) : else : endif; ?>
                </aside>
            </div>

            <div id="artigos-2" class="lista-2 col-lg-12">
                <div class="articles-area" data-index="12">
                    <?php
                    $args = array(
                        'category_name' => 'artigos',
                        'posts_per_page' => 6,
                        'category__not_in' => array(863)
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="col-lg-4 col-md-6 margin-bottom-30">
                                <article class="article-box box-img corner <?php echo has_post_thumbnail() ? '' : 'news-special'; ?>">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb'); ?>" class="corner hidden-xs"/>
                                        <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb-mobile'); ?>" class="corner visible-xs"/>
                                    </a>
                                    <div class="box-title row">
                                        <div class="col-md-12 no-padding">
                                            <?php
                                            $post_tags = get_the_tags();
                                            if ($post_tags) {
                                                echo '<a href="#" class="cat">' . $post_tags[0]->name . '</a>';
                                            }
                                            ?>
                                        </div>
                                        <div class="col-md-12 no-padding-left <?php echo has_post_thumbnail() ? 'article-box-heading article-box-heading--less-padding' : 'article-box-heading article-box-heading--news-special'; ?> ">
                                            <h3 class="title">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                            <?php if( !has_post_thumbnail() ){
                                                echo get_chalita_excerpt(35);
                                            } ?>
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </div>

                <div class="col-md-12">
                    <p class="text-center"><a href="#" id="load-more-articles-btn">Carregar mais</a></p>
                </div>
            </div>


        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>