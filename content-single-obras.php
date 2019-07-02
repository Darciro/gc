<?php
/**
 * @package Sydney
 */
?>

<div class="col-md-3">
    <?php if (has_post_thumbnail() && (get_theme_mod('post_feat_image') != 1)) :
        the_post_thumbnail('large-thumb', array( 'class' => 'img-responsive responsive--full' ));
    endif; ?>
</div>

<div class="col-md-9">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php do_action('sydney_inside_top_post'); ?>

        <div class="entry-content">
            <h3 class="single-subtitle"><?php the_title(); ?></h3>
            <?php sydney_entry_footer(); ?>

            <div class="margin-top-30">
                <?php the_content(); ?>
            </div>
        </div>

        <?php do_action('sydney_inside_bottom_post'); ?>

    </article><!-- #post-## -->
</div>