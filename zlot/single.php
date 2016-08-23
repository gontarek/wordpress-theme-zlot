<?php get_header();?>

<div class="container text-center">
<div class="row single-padding">
<?php if (have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <?php the_title('<h2>', '</h2>'); ?>
      <?php the_post_thumbnail('large', array('class' => 'img-responsive img-rouned')); ?>
      <?php the_content(); ?>
    <?php endwhile; else : ?>
      <p><?php _e( 'Przepraszamy, brak wpisów'); ?></p>
    <?php endif; ?>
</div>
</div>
<br>
<?php get_footer();?>
