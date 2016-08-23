<?php
/**
* Temlate name: Strona statyczna
*/
?>

<?php get_header();?>

<div class="container text-center">
  <h1 class="title"><?php single_cat_title(' ',true); ?></h1>
  <div class="row">

      <?php if (have_posts() ) : while ( have_posts() ) : the_post();
      ?>

        <?php the_title('<h3>', '</h3>'); ?>
        <?php the_post_thumbnail('large', array('class' => 'img-responsive img-rouned')); ?>
        <?php the_content(); ?>
      
      <?php endwhile; else : ?>
        <p><?php _e( 'Przepraszamy, brak wpisów'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div><br>
<?php get_footer();?>
