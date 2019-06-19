<?php
/*
Template Name: Front Page
*/

get_header(); ?>

	<div id="primary" class="fp-content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="sessao" class="sessao-1 col-lg-12 .col-xs-12">
				<article class="noticias col-lg-8 .col-xs-12">
				<?php if ( dynamic_sidebar('noticias') ) : else : endif; ?>

				</article>
				<aside class="videos col-lg-4 .col-xs-12">
					<?php if ( dynamic_sidebar('videos') ) : else : endif; ?>

				</aside>
			</div>
			<div id="sessao" class="sessao-2 col-lg-12 .col-xs-12">
				<article class="palestras col-lg-8 .col-xs-12">
										<?php if ( dynamic_sidebar('palestras') ) : else : endif; ?>

				</article>
				<article class="bio col-lg-4 .col-xs-12">
										<?php if ( dynamic_sidebar('bio') ) : else : endif; ?>

				</article>
			</div>
			
		<div id="sessao" class="sessao-3 obras col-lg-12 .col-xs-12">
									<?php if ( dynamic_sidebar('obras') ) : else : endif; ?>

			</div>
			
		<div id="sessao" class="sessao-4 col-lg-12 .col-xs-12 ">
				<article class="artigos col-lg-8 .col-xs-12">
										<?php if ( dynamic_sidebar('artigos') ) : else : endif; ?>

				</article>
				<aside class="podcasts col-lg-4 .col-xs-12">
										<?php if ( dynamic_sidebar('podcast') ) : else : endif; ?>

				</aside>
			</div>
		
		
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
