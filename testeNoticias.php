 <?php $args = array('category_name' => 'noticias','posts_per_page' => 2,);
 $the_query = new WP_Query( $args );
 if ( $the_query->have_posts() ) :
?>
<div class="glider-contain">
  <div class="glider-noticias">
<?php
        while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <div>
                <article class="box-img corner">
                        <i class="fa fa-bookmark-o"></i>
                        <div class="box-title">
                                <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><h3>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="leia">Leia</a>
                        </div>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <img src="<?php the_post_thumbnail_url(); ?>" class="corner" /></a>
                </article>
                </div>
        <?php endwhile; ?>
 </div>
>
  <div role="tablist" class="dots"></div>
</div>
<?php
endif;
wp_reset_postdata();
?>