<?php
/* Template Name: Clientes */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">

        <div id="listas" class="row">
	        <?php
	        $args = array(
		        'post_type' => 'clientes',
		        'posts_per_page' => -1
	        );
	        $the_query = new WP_Query($args);

	        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

		        <div class="col-lg-2 item" data-post-id="<?php echo get_the_ID();?>">
			        <?php
			        $client_url = get_post_meta( get_the_ID(), '_client-url', true ) ? get_post_meta( get_the_ID(), '_client-url', true ) : false;
			        if( $client_url ){
				        echo '<a href="'. $client_url .'" target="_blank">';
			        } ?>

			        <img src="<?php the_post_thumbnail_url('chalita-clients-thumb'); ?>" class="corner" title="<?php the_title(); ?>"/>

			        <?php if( $client_url ){
				        echo '</a>';
			        } ?>
		        </div>

	        <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
			
			
			
			
			
			
			
		

	
	
