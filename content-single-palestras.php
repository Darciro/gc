<?php
/**
 * @package Sydney
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php do_action('sydney_inside_top_post'); ?>

    <header class="entry-header">

        <div class="meta-post">
            <strong><?php //sydney_get_first_cat(); ?></strong>
        </div>

        <?php if (get_theme_mod('hide_meta_single') != 1) : ?>
            <div class="single-meta">
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <?php if (has_post_thumbnail() && (get_theme_mod('post_feat_image') != 1)) : ?>
        <div class="entry-thumb">
            <?php the_post_thumbnail('large-thumb'); ?>
        </div>
    <?php endif; ?>

    <h3 class="single-subtitle margin-bottom-30"><?php the_title(); ?></h3>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php /*
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sydney' ),
				'after'  => '</div>',
			) );
		*/ ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php sydney_entry_footer(); ?>
    </footer><!-- .entry-footer -->

    <?php do_action('sydney_inside_bottom_post'); ?>

</article><!-- #post-## -->
