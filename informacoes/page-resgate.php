<?php
/**
* Template Name: Resgate
*
* @package WordPress
* @subpackage SalveUmGatinho
* @since SalveUmGatinho 0.1
*/ ?>
<?php get_header();?>
    <div class="container">
      <div class=row>
        <div class="col-md-12 m-4 text-center">
          <h1 class="entry-title"><?php the_title(); ?></h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
        <?php
          if (have_posts()):
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          else:
            echo '<p>Sorry, no posts matched your criteria.</p>';
          endif;
          ?>
        </div>
      </div>      
    </div>
  <!-- Fim container -->
<?php get_footer(); ?>