<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<div id="primary" class="fp-content-area col-lg-12">
    <main id="main" class="site-main" role="main">

        <div class="sessao-1 row">
            <article class="noticias col-lg-8 col-xs-12">
                <p class="hat-home">Palestras</p>
                <?php
                $args = array(
                    'post_type' => 'palestras',
                    'posts_per_page' => 1
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <article class="article-box box-img box-img-land corner">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php the_post_thumbnail_url('chalita-palestras-thumb'); ?>" class="corner"/>
                        </a>
                        <i class="fa fa-bookmark-o"></i>
                        <div class="box-title row">
                            <div class="col-md-6">
                                <?php
                                $post_tags = get_the_tags();
                                if ( $post_tags ) {
                                    echo '<a href="#" class="cat">'. $post_tags[0]->name .'</a>';
                                }
                                ?>
                            </div>
                            <div class="col-md-8">
                                <h3 class="title">
                                    <a href="<?php the_permalink(); ?>"
                                       title="<?php the_title(); ?>"><?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <div class="col-md-4">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Mais palestras</a>
                            </div>
                        </div>
                    </article>

                <?php endwhile; wp_reset_postdata(); endif; ?>

            </article>

            <aside class="videos col-lg-4 col-xs-12">
                <?php if (dynamic_sidebar('videos')) : else : endif; ?>
            </aside>
        </div>

        <div class="sessao-2 row">
            <article class="col-lg-8 col-xs-12">
                <p class="hat-home">Artigos</p>

                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 2,
                        'category_name' => 'artigos'
                    );
                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="col-md-6">
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
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                                    </div>
                                </div>
                            </article>
                        </div>

                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>

            </article>

            <article class="bio col-lg-4 col-xs-12">
                <p class="hat-home">Biografia</p>
                <?php if (dynamic_sidebar('bio')) : else : endif; ?>
            </article>
        </div>

        <div class="sessao-3 row">
            <article class="col-lg-8 col-xs-12">
                <p class="hat-home">Obras</p>
                <div class="obras-row row">
                    <?php $args = array('category_name' => 'obras', 'posts_per_page' => 4);
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>

                            <div class="col-md-3 lista-obras">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                    <img src="<?php the_post_thumbnail_url(); ?>" class="corner"/>
                                </a>
                                <strong><?php the_title(); ?></strong>
                            </div>
                        <?php endwhile; ?>

                    <?php endif; wp_reset_postdata(); ?>
                    <p class="text-center">
                        <a href="<?php echo home_url('?page_id=367'); ?>" id="load-more-works-cpt-2">Veja mais obras</a>
                    </p>
                </div>
            </article>

            <article class="col-lg-4 col-xs-12">
                <p class="hat-home">Instagram</p>
	            <div class="iframely-embed">
		            <div class="iframely-responsive" style="height: 140px; padding-bottom: 0;">
			            <a href="https://www.instagram.com/gabriel_chalita/" data-iframely-url="//cdn.iframe.ly/qN01buT"></a>
		            </div>
	            </div>
	            <script async src="//cdn.iframe.ly/embed.js" charset="utf-8"></script>
            </article>
        </div>


    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
