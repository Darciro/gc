<?php
/* Template Name: Palestras */
get_header('all');
?>
<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">

        <div id="listas" class="lista-1 col-lg-12">

            <article class="showcase-interna col-lg-12">
                <?php if (dynamic_sidebar('interna-palestras')) : else : endif; ?>
            </article>

        </div>
    </main>
</div>

<?php get_footer(); ?>
