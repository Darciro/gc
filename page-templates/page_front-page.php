<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<div id="primary" class="fp-content-area col-lg-12">
    <main id="main" class="site-main" role="main">

        <div id="sessao" class="sessao-1 col-lg-12 col-xs-12">
            <article class="noticias col-lg-8 col-xs-12">
                <?php // if (dynamic_sidebar('noticias')) : else : endif; ?>
                <p class="hat-home">Notícias</p>
                <?php
                $args = array('category_name' => 'noticias', 'posts_per_page' => 2);
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) : ?>
                    <div class="glider-contain">
                        <div class="glider-noticias">
                            <?php
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <article class="article-box box-img corner">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img src="<?php the_post_thumbnail_url(); ?>" class="corner"/>
                                    </a>
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
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h3>
                                        </div>
                                        <div class="col-md-12">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                                        </div>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                        </div>
                        <div role="tablist" class="dots"></div>
                    </div>
                <?php endif; wp_reset_postdata(); ?>

            </article>
            <aside class="videos col-lg-4 col-xs-12">
                <?php if (dynamic_sidebar('videos')) : else : endif; ?>

            </aside>
        </div>
        <div id="sessao" class="sessao-2 col-lg-12 col-xs-12">
            <article class="palestras col-lg-8 col-xs-12">
                <?php if (dynamic_sidebar('palestras')) : else : endif; ?>

            </article>
            <article class="bio col-lg-4 col-xs-12">
                <?php if (dynamic_sidebar('bio')) : else : endif; ?>

            </article>
        </div>

        <div id="sessao" class="sessao-3 obras col-lg-12 col-xs-12">
            <?php if (dynamic_sidebar('obras')) : else : endif; ?>
        </div>

        <div id="sessao" class="sessao-4 col-lg-12 col-xs-12 ">
            <article class="artigos col-lg-8 col-xs-12">
                <?php if (dynamic_sidebar('artigos')) : else : endif; ?>
            </article>
            <aside class="podcasts col-lg-4 col-xs-12">
                <?php if (dynamic_sidebar('podcast')) : else : endif; ?>
            </aside>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
