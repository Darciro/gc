<?php
/* Template Name: Artigos */
get_header('all');
?>
    <div id="primary" class="fp-content-area">
        <main id="main" class="site-main main-artigos" role="main">

            <div id="artigos-1" class="col-lg-12">
                <article class="noticias col-lg-8 col-xs-12">
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
                                <article class="article-box box-img corner">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb'); ?>"
                                             class="corner"/>
                                    </a>
                                    <i class="fa fa-bookmark-o"></i>
                                    <div class="box-title row">
                                        <div class="col-md-6">
                                            <a href="#" class="cat">Tech</a>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="reading-time">6 min de leitura</span>
                                        </div>
                                        <div class="col-md-9">
                                            <h3 class="title">
                                                <a href="<?php the_permalink(); ?>"
                                                   title="<?php the_title(); ?>"><?php the_title(); ?>
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                               class="leia">Leia</a>
                                        </div>
                                    </div>
                                </article>
                            </div>

                        <?php endwhile;
                            wp_reset_postdata(); endif; ?>
                    </div>

                </article>

                <aside class="videos videos-no-pd col-lg-4 col-xs-12">
                    <?php if (dynamic_sidebar('videos')) : else : endif; ?>
                </aside>
            </div>

            <div id="artigos-2" class="lista-2 col-lg-12">
                <div class="col-md-8">
                    <?php
                    $args = array(
                        'category_name' => 'artigos',
                        'posts_per_page' => 1,
                        'category__not_in' => array(863)
                    );
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <article class="article-box box-img box-img-land corner">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_post_thumbnail_url('chalita-palestras-thumb'); ?>"
                                         class="corner"/>
                                </a>
                                <i class="fa fa-bookmark-o"></i>
                                <div class="box-title row">
                                    <div class="col-md-6">
                                        <a href="#" class="cat">Tech</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <span class="reading-time">6 min de leitura</span>
                                    </div>
                                    <div class="col-md-8">
                                        <h3 class="title">
                                            <a href="<?php the_permalink(); ?>"
                                               title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                                    </div>
                                </div>
                            </article>

                        <?php endwhile; endif;
                    wp_reset_postdata(); ?>
                </div>

                <aside class="col-md-4">
                    <?php $args = array('category_name' => 'artigos', 'posts_per_page' => 1,);
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <article class="article-box box-img corner news-special">
                            <i class="fa fa-bookmark-o"></i>
                            <div class="box-title row">
                                <div class="col-md-6">
                                    <a href="#" class="cat">Tech</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="reading-time">6 min de leitura</span>
                                </div>
                                <div class="col-md-12">
                                    <h3 class="title">
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="col-md-12">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                       class="leia">Leia</a>
                                </div>
                            </div>
                        </article>

                    <?php endwhile; ?>
                </aside>
                <?php endif;
                wp_reset_postdata(); ?>

            </div>

            <div id="artigos-3" class="lista-2 col-lg-12">

                <aside class="col-md-4">

                    <?php $args = array('category_name' => 'artigos', 'posts_per_page' => 1,);
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>

                    <?php
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <article class="article-box box-img corner">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_post_thumbnail_url('chalita-artigo-thumb'); ?>" class="corner"/>
                            </a>
                            <i class="fa fa-bookmark-o"></i>
                            <div class="box-title row">
                                <div class="col-md-6">
                                    <a href="#" class="cat">Tech</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="reading-time">6 min de leitura</span>
                                </div>
                                <div class="col-md-9">
                                    <h3 class="title">
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php the_title(); ?>"><?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                                <div class="col-md-3">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                       class="leia">Leia</a>
                                </div>
                            </div>
                        </article>

                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </aside>

                <div class="col-md-8">

                    <?php $args = array('category_name' => 'artigos', 'posts_per_page' => 1,);
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <article class="article-box box-img box-img-land box-img-land-2 corner">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <img src="<?php the_post_thumbnail_url('chalita-palestras-thumb'); ?>" class="corner"/>
                            </a>
                            <i class="fa fa-bookmark-o"></i>
                            <div class="box-title row">
                                <div class="col-md-6">
                                    <a href="#" class="cat">Tech</a>
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="reading-time">6 min de leitura</span>
                                </div>
                                <div class="col-md-8">
                                    <h3 class="title">
                                        <a href="<?php the_permalink(); ?>"
                                           title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                </div>
                                <div class="col-md-4">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"
                                       class="leia">Leia</a>
                                </div>
                            </div>
                        </article>

                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>

            </div>


        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>