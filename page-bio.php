<?php
/* Template Name: Bio */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">

        <div id="listas" class="col-lg-12 lista-1 biografias">
        <div class="row">
            <?php //I will use WP_Query class instance
            $args = array('category_name' => 'bio', 'posts_per_page' => 3,);

            //Set up a counter
            $counter = 0;

            //Preparing the Loop
            $query = new WP_Query($args);

            //In while loop counter increments by one $counter++
            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                $counter++;
                //We are in loop so we can check if counter is odd or even
                if ($counter % 2 == 0) {
                    echo '<div class="impar col-md-12">';
                    echo '<div class="esq-txt col-md-6">';

                    the_excerpt();
                    echo '</div>';
                    echo '<div class="esq-img col-md-6 box-img corner">';
                    echo '<h3>';
                    the_title();
                    echo '</h3>';
                    the_post_thumbnail();
                    echo '</div>';
                    echo '</div>';
                } else {
                    if (has_post_thumbnail()) {
                        echo '<div class="par col-md-12">';
                        echo '<div class="dir-img col-md-6 box-img corner">';

                        echo '<h3>';
                        the_title();
                        echo '</h3>';
                        the_post_thumbnail();
                        echo '</div>';
                        echo '<div class="dir-txt col-md-6">';

                        the_excerpt();
                        echo '</div>';

                        echo '</div>';

                    }
                }
            endwhile;
                wp_reset_postdata(); endif; ?>
        </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
