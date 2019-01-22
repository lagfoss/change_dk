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
 <div class="menu-collapsed">
    <div class="bar">&#9776;</div>
    <nav>
       <ul>
          <li><a href="#">YDELSER</a></li>
          <li><a href="#">CASES</a></li>
          <li><a href="#">OM CHANGE</a></li>
          <li><a href="#">BLOG</a></li>
          <li><a href="#">KONTAKT</a></li>
          <li class="nav_job"><a style="font-size: 16px;font-family: Montserrat;" href="https://www.google.dk/?hl=da">Job</a></li>
          <?php if( have_rows('nav_some') ): ?>
        	<ul class="row slides1">
        	<?php while( have_rows('nav_some') ): the_row();
        		// vars
        		$image = get_sub_field('some_icons_nav');
        		$link = get_sub_field('nav_some_url');
        		?>
        		<li class="slide1">
        			<?php if( $link ): ?>
        				<a href="<?php echo $link; ?>">
        			<?php endif; ?>
        				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
        			<?php if( $link ): ?>
        				</a>
        			<?php endif; ?>
        		    <?php echo $content; ?>
        		</li>
        	<?php endwhile; ?>
        	</ul>
        <?php endif; ?>
       </ul>
    </nav>
 </div>

 <script type="text/javascript">
 jQuery(document).ready(function($){
 $(".menu-collapsed").click(function() {
 $(this).toggleClass("menu-expanded");
  });
  });
  </script>




<!--  <ul class="navbar">
    <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
      <img src="<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg" alt="">
    </a>

    <?php
    $menuargs = array('container' => 'nav', 'container_class' => 'main-nav');
    wp_nav_menu($menuargs);
    ?>
  </ul> -->




  </header>
  <section class="content_area">
   <!-- Header content -->




    <!-- Content 1 -->




    <!-- Content 2 -->
