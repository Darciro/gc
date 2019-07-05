<?php
/* Template Name: Clientes */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">

        <div class="margin-top-30 lista-1 col-lg-12">
            <div class="showcase-interna col-lg-12">
                <?php
                $args = array(
                    'post_type' => 'clientes',
                    'posts_per_page' => -1
                );
                $the_query = new WP_Query($args);

                if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 item client-item" data-post-id="<?php echo get_the_ID();?>">
                        <div class="client-item-container">
                            <?php
                            $client_url = get_post_meta( get_the_ID(), '_client-url', true ) ? get_post_meta( get_the_ID(), '_client-url', true ) : false;
                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'chalita-clients-thumb');
                            if( $client_url ){
                                echo '<a href="'. $client_url .'" target="_blank">';
                            } ?>

                            <div class="client-item-thumb" style="background-image:url('<?php echo $featured_img_url; ?>')"></div>

                            <?php if( $client_url ){
                                echo '</a>';
                            } ?>
                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
			
			
			
			
			
			
			
		

	
	
