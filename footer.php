<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
</div>
</div>
</div><!-- #content -->
<footer id="footer-gc" class="footer footer-widgets" role="contentinfo">
    <div class="bg-footer"></div>
    <?php do_action('sydney_before_footer'); ?>

    <?php if (dynamic_sidebar('newsletter')) : else : endif; ?>
    <div id="sidebar-footer" class="footer-widgets widget-area">
        <div class="container">

            <div class="row">
                <div class="col-f col-lg-3">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
                        <img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo')); ?>" alt="<?php bloginfo('name'); ?>"/>
                    </a>
                </div>
                <div class="col-s col-lg-6">
                    <?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'sydney_menu_fallback')); ?>
                    <p class="text-center">Copyright © 2019. Todos os direitos reservados.</p>
                </div>
                <div class="col-t col-lg-3">
                    <div class="textwidget custom-html-widget">
                        <a href="https://www.instagram.com/gabriel_chalita/" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="https://www.facebook.com/facechalita" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.youtube.com/user/TVChalita" class="youtube"><i class="fa fa-youtube"></i></a>
                        <a href="https://twitter.com/gabriel_chalita" class="twitter"><i class="fa fa-twitter"></i></a>
                        <!--<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
                    </div>
                </div>
            </div>

        </div>
    </div>

</footer>

<?php /* <footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sydney' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sydney' ), 'WordPress' ); ?></a>
<span class="sep"> | </span>
<?php printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="https://athemes.com/theme/sydney" rel="nofollow">Sydney</a>' ); ?>
</div><!-- .site-info -->
</footer><!-- #colophon -->

<?php do_action('sydney_after_footer'); ?> */ ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    window.addEventListener('load', function () {
        new Glider(document.querySelector('.glider-artigo'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            scrollLock: true,
            dots: '#resp-dots',
            responsive: [{
                // screens greater than >= 775px
                breakpoint: 775,
                settings: {
                    slidesToShow: 'auto',
                    slidesToScroll: 'auto',
                    duration: 0.25
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    duration: 0.25
                }
            }]
        })

        new Glider(document.querySelector('.glider-noticias'), {
            slidesToShow: 1,
            slidesToScroll: 1,
            scrollLock: true,
            dots: '#resp-dots',
            responsive: [{
                // screens greater than >= 775px
                breakpoint: 775,
                settings: {
                    slidesToShow: 'auto',
                    slidesToScroll: 'auto',
                    duration: 0.25
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    duration: 0.25
                }
            }]
        })


        new Glider(document.querySelector('.glider-obras'), {
            slidesToScroll: 1,
            slidesToShow: 6,
            draggable: true,
            dots: '#dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [{
                // screens greater than >= 775px
                breakpoint: 775,
                settings: {
                    slidesToShow: 'auto',
                    slidesToScroll: 'auto',
                    duration: 0.25
                }
            }, {
                // screens greater than >= 1024px
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    duration: 0.25
                }
            }]
        })

    })

    new Glider(document.querySelector('.glider-podcast'), {
        slidesToScroll: 1,
        slidesToShow: 1,
        draggable: true,
        dots: '#dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        },
        responsive: [{
            // screens greater than >= 775px
            breakpoint: 775,
            settings: {
                slidesToShow: 'auto',
                slidesToScroll: 'auto',
                duration: 0.25
            }
        }, {
            // screens greater than >= 1024px
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                duration: 0.25
            }
        }]
    })
</script>
</body>

</html>