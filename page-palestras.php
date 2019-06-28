<?php
/* Template Name: Palestras */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main palestras-main" role="main">

        <div class="lista-1 col-lg-12">
            <div class="showcase-interna col-lg-12">
		            <?php
		            $args = array(
			            'post_type' => 'palestras',
			            'posts_per_page' => 4
		            );
		            $the_query = new WP_Query($args);

		            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

		                <div class="col-lg-6 margin-bottom-30">
			                <article class="article-box box-img box-img-land corner">
				            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					            <img src="<?php the_post_thumbnail_url('chalita-palestras-thumb'); ?>" class="corner"/>
				            </a>
				            <i class="fa fa-bookmark-o"></i>
				            <div class="box-title row">
					            <div class="col-md-6">
						            <?php
						            $post_tags = get_the_tags();
						            if ($post_tags) {
							            echo '<a href="#" class="cat">' . $post_tags[0]->name . '</a>';
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
		                </div>

		            <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

	        <div class="col-lg-12">
		        <p class="hat-home">Clientes</p>
	        </div>

	        <div class="feature-clients-row col-lg-12">
		        <?php
		        $args = array(
			        'post_type' => 'clientes',
			        'meta_key' => '_feature-client',
			        'posts_per_page' => 10
		        );
		        $the_query = new WP_Query($args);

		        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

			        <div class="item" data-post-id="<?php echo get_the_ID();?>">
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

        </div>
    </main>
</div>

<?php get_footer(); ?>
