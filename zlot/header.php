<!doctype html>
<html lang="pl">
<head>
  <title><?php bloginfo('name'); ?></title>
  <meta name="keywords" content="Zlot Zuchmistrzowski, zuchy, ZHR, harcerstwo, Poznań">
  <meta name="description" content="Oficjalna strona zlotu zuchmistrzowskiego w Poznaniu 2016">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="Agnieszka Gontarek">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head();?>
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/lilijka_zhr_sm.png" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
          wp_nav_menu(array(
            'menu' => 'top-nav',
            'menu_class' => 'nav navbar-nav navbar-right',
            'depth' => 2,
          ));
           ?>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
