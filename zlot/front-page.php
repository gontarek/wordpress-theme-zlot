  <?php get_header();?>
  <div class="container">
  <!--SLIDER-->
  <div class="bg-slider">
    <div class="container">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <img src="<?php bloginfo('template_url'); ?>/images/_01-k2.jpg" class="img-responsive" alt="...">
            <p class="flex-caption">Zlot Zuchmistrzowski "Maluch" </br>Poznań, 14-16.10.2016</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_url'); ?>/images/_07-k2.jpg" class="img-responsive" alt="...">
            <p class="flex-caption">Zlot Zuchmistrzowski "Maluch" </br>Poznań, 14-16.10.2016</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_url'); ?>/images/_03-k2.jpg" class="img-responsive" alt="...">
            <p class="flex-caption">Zlot Zuchmistrzowski "Maluch" </br>Poznań, 14-16.10.2016</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_url'); ?>/images/_04-k2.jpg" class="img-responsive" alt="...">
            <p class="flex-caption">Zlot Zuchmistrzowski "Maluch" </br>Poznań, 14-16.10.2016</p>
          </li>
          <li>
            <img src="<?php bloginfo('template_url'); ?>/images/_08-k2.jpg" class="img-responsive" alt="...">
            <p class="flex-caption">Zlot Zuchmistrzowski "Maluch" </br>Poznań, 14-16.10.2016</p>
          </li>
        </ul>
      </div>
    </div>
  </div>



<div class="container text-center">
  <h2>OGŁOSZENIA</h2><br>
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
</div><br>
</div>
<?php get_footer();?>
