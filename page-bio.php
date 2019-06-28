<?php
/* Template Name: Bio */
get_header('all');
?>
<div id="primary" class="fp-content-area col-lg-12">
    <main id="main" class="site-main" role="main">

	    <?php while ( have_posts() ) : the_post(); ?>

		    <div class="content-area col-md-8">
			    <?php the_content(); ?>
		    </div><!-- #primary -->

		    <div id="secondary" class="col-md-4">
			    <p class="hat-home">Palestras</p>
			    <?php
			    $args = array(
				    'post_type' => 'palestras',
				    'posts_per_page' => 2
			    );
			    $the_query = new WP_Query($args);

			    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

				    <article class="article-box box-img corner margin-bottom-30">
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

			    <?php endwhile; wp_reset_postdata(); endif; ?>
		    </div>

	    <?php endwhile; // end of the loop. ?>

    </main>
</div>
<?php get_footer(); ?>
