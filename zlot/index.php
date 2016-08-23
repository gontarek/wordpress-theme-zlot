<?php get_header();?>

<div class="bg-slider">
<div class="container text-center">
  <h1 class="title"><?php single_cat_title('', true); ?>
  </h1>
</div>
</div>
<div class="container">
  <div class="row">

      <?php if (have_posts() ) : while ( have_posts() ) : the_post();
      ?>
      <div class="col-sm-4">
        <a href="<?php the_permalink(); ?>"><?php the_title('<h3>', '</h3>'); ?></a>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class' => 'img-responsive img-rouned')); ?></a>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>" class="btn btn-default btn-home-more" role="button">czytaj więcej...</a></p>
      </div>
      <?php endwhile; else : ?>
        <p><?php _e( 'Przepraszamy, brak wpisów'); ?></p>
      <?php endif; ?>
  </div>
</div>
<?php get_footer();?>
