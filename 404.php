<?php get_header(); ?>
<main id="main">
    <section id="404" class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-right wow fadeIn pt-3">
                    <i class="fas fa-3x fa-exclamation-triangle text-danger"></i>
                </div>
                <div class="col-md-7 wow fadeIn">
                    <h2>Página não encontrada!</h2>
                    <h1 class="text-danger">Erro 404</h1>
                    <a href="<?php bloginfo('url')?>">Clique para ir a página inicial</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();