<?php get_header();
the_post();
$categoria = get_the_category();
$nomeCategoria = $categoria[0]->cat_name; ?>
    <div id="main" class="single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 conteudoblog">
                    <h3><?php echo $nomeCategoria; ?></h3>
                    <h1><?php the_title(); ?></h1>
                    <h2><?php echo get_the_date(); ?></h2>
                    <?php
                    if (has_post_thumbnail())
                        the_post_thumbnail('thumb-single', array('class' => 'img-responsive w-100 h-auto')); ?>
                    <div class="row m-0">
                        <a target="_blank" class="col-4 btn-primary text-center item-compart facebook"
                           href='http://www.facebook.com/share.php?u=<?= wp_get_shortlink() ?>&title=<?= get_the_title() ?>'>
                            <span>COMPARTILHAR</span> <i class="fab fa-facebook"></i>
                        </a><a target="_blank" class="col-4 btn-primary text-center item-compart twitter"
                               href='https://twitter.com/share?text=<?= get_the_title() ?>&url=<?= wp_get_shortlink() ?>'>
                            <span>COMPARTILHAR</span> <i class="fab fa-twitter"></i></a>
                        <a target="_blank" class="col-4 btn-primary text-center item-compart google"
                           href='https://plus.google.com/share?url=<?= wp_get_shortlink() ?>'>
                            <span>COMPARTILHAR</span> <i class="fab fa-google-plus-g"></i></a>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="col-md-4">
                    <form method="get">
                        <input type="text" placeholder="Pesquisar" name="s">
                    </form>

                    <h3>Categorias</h3>
                    <div class="row m-0">
                        <a href="<?php bloginfo('url') ?>/categoria/eventos" class="btn-primary col-12 item-categoria">
                            <span class="col-md-10 pl-3">Eventos</span><span class="col-md-2"><i
                                        class="far fa-calendar-alt"></i></span></a>
                        <a href="<?php bloginfo('url') ?>/categoria/dicas" class="btn-primary col-12 item-categoria">
                            <span class="col-md-10 pl-3">Dicas</span><span class="col-md-2"><i
                                        class="fas fa-lightbulb"></i></span></a>
                        <a href="<?php bloginfo('url') ?>/categoria/novidades" class="btn-primary col-12 item-categoria">
                            <span class="col-md-10 pl-3">Novidades</span><span class="col-md-2"><i
                                        class="fas fa-plus-circle"></i></span></a>
                        <a href="<?php bloginfo('url') ?>/categoria/promocoes"
                           class="btn-primary col-12 item-categoria">
                            <span class="col-md-10 pl-3">Promoções</span><span class="col-md-2"><i
                                        class="fas fa-percentage"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();