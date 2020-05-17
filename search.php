<?php get_header(); ?>
<article class="page limit category">
    <h1>Pesquisa: <?=$_GET['s']?></h1>
    <hr />
    <ul class="news">
        <?php while(have_posts()): the_post(); ?>
            <li class="noticia">
                <?php if (has_post_thumbnail()):?><img src="<?=get_imagem(array('a'=>270,'l'=>310))?>"><?php endif; ?>
                <div class="cobertor"></div>
                <h1><?=resumo(get_the_title(), 7)?></h1>
                <a href="<?php the_permalink(); ?>" class="leiamais">Leia mais</a>
            </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
    <script language="JavaScript">
        $(".noticia").mouseenter( function(){
            $(this).children("h1").stop().animate({top: "20"}, 350);
            $(this).children("a").stop().animate({top: "180"}, 350);
        });
        $(".noticia").mouseleave( function(){
            $(this).children("h1").stop().animate({top: "65"}, 350);
            $(this).children("a").stop().animate({top: "275"}, 350);
        });
    </script>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</article>
<?php get_footer(); ?>
