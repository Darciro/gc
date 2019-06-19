<?php
/* Template Name: Obras */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">

        <div id="listas" class="col-lg-12">
            <?php $args = array('category_name' => 'obras', 'posts_per_page' => 12,);
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
                ?>
                <?php
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="col-md-2 lista-obras">

                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" class="corner"/>
                        </a>
                        <strong><?php the_title(); ?></strong>
                    </div>
                <?php endwhile; ?>

            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
			
			
			
			
			
			
			
		

	
	
