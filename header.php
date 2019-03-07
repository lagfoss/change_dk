<!DOCTYPE html>
<html class="sr">
<head>
<title><?php bloginfo(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.modal.min.css" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/qeh8rgu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.modal.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/javascript.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>

  <?php wp_head(); ?>

</head>

<body>
  <!-- Content calendar og Sociale medier start -->
  <div class="container-fluid pre_header">
    <div class="row justify-content-between SoMe">
      <div class="col-sm-6-float-left align-self-center">
          <?php the_field('header_text', 'option'); ?>
        <a id="SoMe_calendar" href="<?php the_field('header_url', 'option'); ?>">
        <?php the_field('header_url_text' , 'option'); ?></a></div>
      <div class="col-sm-6-float-right align-self-center">
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
  <header class="position-fixed header test">

    <!-- Menu/Nav start -->


    <nav>
      <div id="primaryNav">
         <a class="navbar-brand logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
        <img class="logoimg" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg" alt="change logo"></a>

      <div class="container-fluid">
        <!-- <?php get_search_form(); ?> -->

        <div id="cf_onclick" class="menubtn">
          <span></span>
        </div>

        <div id="popUpNav" class="overlay" >
          <div class="overlay_content">
          <div class="nav_wrapper">

            <a class="nav_logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
           <img class="nav_logo" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" alt="change logo"></a>

            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

            <!-- Job link til/fra -->
            <?php
            if( get_field('job_available', 'option') )
              $value = get_field('job_available', 'option');
              ?>
              <?php  if( $value == true ) : ?>
                <div class="nav_job"><a href="<?php the_field('job_link', 'option'); ?>"><?php the_field('job', 'option'); ?></a></div>
              <?php else : ?>
                <span></span>
              <?php endif; ?>

            <!-- Social media link -->
            <?php if( have_rows('nav_some', 'option') ): ?>
            <div class="row nav_some_wrapper">
              <?php while( have_rows('nav_some', 'option') ): the_row();
                // vars
              $image = get_sub_field('some_icons_nav', 'option');
              $link = get_sub_field('some_url_nav', 'option');
              ?>

              <div class="nav_some">
                <?php if( $link ): ?>
                <a href="<?php echo $link; ?>">
                  <?php endif; ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                  <?php if( $link ): ?>
                </a>
                <?php endif; ?>
                <?php echo $content; ?>
              </div>

              <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <a href="<?php the_field('google_maps_link', 'option'); ?>" class="nav_address"><?php the_field('nav_address', 'option'); ?></a>

          </div>
        </div>
        </div>
      </div>

        <script>

        // Gør at header vises og forsvinder med scroll
        var header = $('.header'),
        headerHeight = header.height(),
        treshold = 0,
        lastScroll = 0;

        $(document).on('scroll', function (evt) {
          var newScroll = $(document).scrollTop(),
          diff = newScroll-lastScroll;

          // normalize treshold range
          treshold = (treshold+diff>headerHeight) ? headerHeight : treshold+diff;
          treshold = (treshold < 0) ? -23 : treshold;

          header.css('top', (-treshold)+'px');

          lastScroll = newScroll;
        });


        /* Åben/luk menu navigation  */
          function openNav() {
          menubtn.classList.add("is-active");
          document.getElementById("popUpNav").style.width = "100%";
          }

          function closeNav() {
            menubtn.classList.remove("is-active");
            document.getElementById("popUpNav").style.width = "0%";
          }

          var menubtn = document.querySelector(".menubtn");
          menubtn.addEventListener('click', () => menubtn.classList.contains('is-active') ? closeNav() : openNav());

          /* Burger menu animation  */
          closeNav();
          $('.menubtn').on('click', function(){
          $(this).toggleClass('close','menubtn');
          });

          //Search animation
          function expand() {
            $(".search").toggleClass("searchclose", "pseudo_searchclose");
            $(".input").toggleClass("square");
            if ($('.search').hasClass('searchclose', 'pseudo_searchclose')) {
              $('input').focus();
            } else {
              $('input').blur();
            }
          }
          $('button').on('click', expand);

          $(function(){
            $('a').each(function() {
              if ($(this).prop('href') == window.location.href) {
                $(this).addClass('current');
              }
            });
          });

          $("#cf_onclick").click(function() {
          $('.nav_logo').toggleClass('nav_logo-active');
           });

           //Skifter mellem forskellige classes ved at trykke på menu knappen
           $(".menubtn").click(function() {
             $('.menubtn').toggleClass('pos_fix');
             $('.search_form').toggleClass('pos_fix');
             $('.input').toggleClass('out_black');
             $('.pre_header').toggleClass('display_no');

             //Skifter farve på :before & :after i search
             $('.search').slideUp(10, function() {
               var search = $(this);
               if(search.hasClass('pseudo_search')) {
                 search.removeClass('pseudo_search');
                 search.addClass('active_search');
               } else {
                 search.removeClass('active_search');
                 search.addClass('pseudo_search');
               }
             }).slideDown(10);
             $('.searchclose').slideUp(10, function() {
               var search = $(this);
               if(search.hasClass('pseudo_searchclose')) {
                 search.removeClass('pseudo_searchclose');
                 search.addClass('active_searchclose');
               } else {
                 search.removeClass('active_searchclose');
                 search.addClass('pseudo_searchclose');
               }
             }).slideDown(10);
            });

        </script>
      </div>
    </nav>
        <!-- Menu/Nav slut -->


  </header>
    <section class="content_area">
      <!-- Header content -->
