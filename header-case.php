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
    </script><script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.modal.min.js"></script>
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

  <header class="position-fixed header">

    <!-- Menu/Nav start -->
    <nav>
      <div id="primaryNav">
         <a class="navbar-brand logo" href="<?php echo get_bloginfo( 'wpurl' );?>">
        <img class="logoimg" src="<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg" alt=""></a>

        <div class="container-fluid">
          <a href="#" class="menu_white menubtn close"></a>
        </div>
      </div>

        <script type="text/javascript">

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
          treshold = (treshold < 0) ? -20 : treshold;

          header.css('top', (-treshold)+'px');

          lastScroll = newScroll;
        });

        </script>
      </div>
    </nav>
        <!-- Menu/Nav slut -->


  </header>
    <section class="content_area case_section">
      <!-- Header content -->
