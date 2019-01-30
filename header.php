<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/qeh8rgu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/javascript.js"></script>

  <?php wp_head(); ?>

</head>

<body>
  <header class="position-fixed">
    <!-- Content calendar og Sociale medier start -->
    <div class="container-fluid">
      <div class="row justify-content-between SoMe">
        <div class="col-6-float-left align-self-center">
            <?php the_field('header_text', 'option'); ?>
          <a id="SoMecalendar" href="<?php the_field('header_url', 'option'); ?>">
          <?php the_field('header_url_text' , 'option'); ?></a></div>
        <div class="col-6-float-right align-self-center">
          <?php if( have_rows('header_some', 'option') ): ?>
            <ul>
              <?php while( have_rows('header_some', 'option') ): the_row();
              // vars
                $someimage = get_sub_field('header_some_icon', 'option');
                $somelink = get_sub_field('header_some_url', 'option');
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
    <!-- Content calendar og Sociale medier slut -->


    <!-- Menu/Nav start -->
    <nav>
      <a class="navbar-brand logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
        <img class="logoimg" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg" alt="">
      </a>

      <div onclick="openNav()" class="menubtn">
        <span></span>
      </div>


      <div class="container-fluid">
        <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
          <div>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

          <?php if(get_field('job_available')): ?>
            <p>hello</p>
           <li class="nav_job"><a style="font-size: 16px;font-family: Montserrat;" href="https://www.google.dk/?hl=da">Job</a></li>

          <?php else: ?>
            <p>goodbye</p>

          <?php endif; ?>

        </div>

          <div class="something">
            <?php if( have_rows('nav_some', 'option') ): ?>
            <div class="row slides1">
              <?php while( have_rows('nav_some', 'option') ): the_row();
                // vars
              $image = get_sub_field('some_icons_nav', 'option');
              $link = get_sub_field('some_url_nav', 'option');
              ?>

              <li class="slide1">
                <?php if( $link ): ?>
                <a href="<?php echo $link; ?>">
                  <?php endif; ?>
                  <img style="width:20px; height:20px;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                  <?php if( $link ): ?>
                </a>
                <?php endif; ?>
                <?php echo $content; ?>
              </li>

              <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <a href="<?php the_field('google_maps_link', 'option'); ?>" class="nav_address"><?php the_field('footer_address', 'option'); ?></a>
          </div>
        </div>
        </div>

        <script type="text/javascript">
        function openNav() {
          document.getElementById("myNav").style.width = "100%";
          }

          function closeNav() {
          document.getElementById("myNav").style.width = "0%";
          }

          $('.menubtn').on('click', function(){
            $(this).toggleClass('close','menubtn');
          });
        </script>

    </div>


<!--
   <script>
      jQuery(document).ready(function($){
        $(".menu-collapsed").click(function() {
          $(this).toggleClass("menu-expanded");
        });
      });


    </script> -->
    </nav>
        <!-- Menu/Nav slut -->


  </header>
    <section class="content_area">
      <!-- Header content -->
