<?php
/* Template Name: Obras */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">

        <div id="listas" class="col-lg-12 works-cpt-area" data-index="12">
            <?php $args = array('category_name' => 'obras', 'posts_per_page' => 18,);
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>


                <div class="col-md-2 lista-obras">
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="corner"/>
                    </a>
                    <strong><?php the_title(); ?></strong>
                    <?php
                    $post_tags = get_the_tags();
                    if ($post_tags) {
                        echo '<span class="cat">' . $post_tags[0]->name . '</span>';
                    }
                    ?>
                </div>

                <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <p class="text-center"><a href="#" id="load-more-works-cpt">Carregar mais</a></p>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
			
			
			
			
			
			
			
		

	
	
