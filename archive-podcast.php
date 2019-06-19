<?php
get_header('all');
$layout = sydney_blog_layout();
?>
<div class="topo-interna">
    <h2 class="container">PODCASTS</h2>
    <div class="bg-internas"></div>
</div>


<div id="primary" class="fp-content-area">
    <main id="main" class="site-main" role="main">
        <div id="listas" class="lista-1 col-lg-12">
            <?php
            $pods = ssp_episode_ids();
            $xp = 0;
            $content_items = array('title', 'excerpt', 'content', 'player');
            for ($xp = 0; $xp < count($pods); $xp++) {
                $conteudo = $ss_podcasting->podcast_episode($pods[$xp], $content_items, "widget", "mini");
                echo '<div class="widget widget_podcast_episode col-md-4 podcast-widget" >' . $conteudo . "</div>";
            }
            ?>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
