<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/qeh8rgu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>
  <header class="position-fixed">
    <!-- Sociale medier -->
    <div class="container-fluid">
      <div class="row justify-content-between SoMe">
        <div class="col-6-float-left align-self-center"><?php the_field('header_text'); ?> <a id="SoMecalendar" href="<?php the_field('header_url'); ?>"><?php the_field('header_url_text'); ?></a></div>
        <div class="col-6-float-right align-self-center">
          <?php if( have_rows('header_some') ): ?>
            <ul>
              <?php while( have_rows('header_some') ): the_row();
              // vars
                $someimage = get_sub_field('header_some_icon');
                $somelink = get_sub_field('header_some_url');
              ?>

              <li class="header_some_icon">
                <?php if( $somelink ): ?>
                  <a href="<?php echo $somelink; ?>" target="_blank">
                    <?php endif; ?>
                    <img src="<?php echo $someimage['url']; ?>" alt="<?php echo $someimage['alt'] ?>" />
                    <?php if( $somelink ): ?>
                  </a>
                <?php endif; ?>
              </li>
            <?php endwhile; ?>
          </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>

 <!-- Menu/Nav -->
  <ul class="navbar">
    <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" alt="">
    </a>

  <div class="topnav" id="myTopnav">
  <a href="javascript:void(0);" class="icon" onclick="navCollapse()">
  <i class="fa fa-bars"></i>
  </a>
  <div class="NavMenu animate fadeInRight four">
  <a class="navlinks" href="#" class="active"></a>
  <a class="navlinks" href="#">YDELSER</a>
  <a class="navlinks" href="#">CASES</a>
  <a class="navlinks" href="#">OM CHANGE</a>
  <a class="navlinks" href="#">BLOG</a>
  <a class="navlinks" href="#">KONTAKT</a>
  <a id="NavJob" class="navlinks" href="#">Job</a>
  <a href="#"><img class="SoMeNavIcon" src="img/dark.png" alt=""></a>
  <p class="NavP">Edisonsvej 2</p>
  <p class="NavP">5000 Odense C</p>
  </div>
  </div>

  <script type="text/javascript">
  function navCollapse() {
var x = document.getElementById("myTopnav");
if (x.className === "topnav") {
  x.className += " responsive";
} else {
  x.className = "topnav";
}
}
  </script>

  </ul>


  </header>
  <section class="content_area">
   <!-- Header content -->




    <!-- Content 1 -->




    <!-- Content 2 -->
