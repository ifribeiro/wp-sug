<?php get_header();
$categoria = get_the_category();
putRevSlider('headerblog'); ?>
<div class="main">
    <div class="text-center loc wow fadeInUpBig">
        <a class="item active"><span> <?php echo (!empty($categoria[1]->name)) ? $categoria[1]->name : $categoria[0]->name; ?></span></a>
        <a class="item"><i class="fas fa-tags"></i></a>
    </div>
    <div class="container pb-5">
        <div class="row">
            <?php
            while (have_posts()): the_post(); ?>
                    <div class='col-md-4 wow flipInX'>
                        <a href='<?php the_permalink(); ?>'>
                        <div class="post">
                            <?php the_post_thumbnail('thumb-blog', array('class' => 'img-responsive w-100')) ?>
                            <h1><?php echo resumo(get_the_title(), 20); ?></h1>
                            <p class='p-data'><?php echo get_the_date(); ?></p>
                            <p><?php echo excerpt(20); ?></p>
                        </div>
                        </a>
                    </div>
                <?php endwhile;
            wp_reset_query(); ?>
        </div>
        <div class="row">
            <?php if (function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
