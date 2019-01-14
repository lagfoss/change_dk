<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />


    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css" type="text/css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/qeh8rgu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js"></script>

    <script type="text/javascript" charset="utf-8">
      $(window).load(function() {
        $('.flexslider').flexslider();
      });
    </script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="position-fixed">
    <!-- Sociale medier -->
    <div class="container-fluid">
      <div class="row justify-content-between SoMe">
        <div class="col-6-float-left align-self-center"><p>Gratis SoMe kalender: </p><a id="SoMecalendar" href="#">Content calendar</a></div>
        <div class="col-6-float-right align-self-center"> Sociale medier iconer</div>
      </div>
    </div>

 <!-- Menu/Nav -->
  <ul class="navbar">
    <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" alt="">
        </a>
    <?php
    $menuargs = array('container' => 'nav', 'container_class' => 'main-nav');
    wp_nav_menu($menuargs);
    ?>
  </ul>
  </header>
  <section class="content_area">
   <!-- Header content -->









    <!-- Content 1 -->




    <!-- Content 2 -->
