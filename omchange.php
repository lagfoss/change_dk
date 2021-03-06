<?php /* Template Name: Om Change */ ?>

<?php get_header(); ?>
<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>


  <div class="hero background_img_services" style="background-image:url(<?php the_field('omchange_hero'); ?>);">
    <div class="container-fluid">
      <div class="row wrapper">
        <div class="omchange_hero_info">
          <div class="stroke_position_services">
            <div class="stroke_services"></div>
          </div>
          <h1><?php the_field('om_hero_title'); ?></h1>
        </div>
  	  </div>
      <div class="om_menu_wrapper">
        <div class="om_menu">
          <div class="row align-items-center">
            <?php if( get_field('box_process_image') ): ?>
            <a class="scrollProcess"><img alt="<?php echo $alt_text; ?>" class="om_menu_img" src=" <?php the_field('box_process_image'); ?>" />
            <?php endif; ?><h3><?php the_field('box_process_title'); ?></h3></a>

            <?php if( get_field('box_team_image') ): ?>
            <a class="scrollTeam"><img alt="<?php echo $alt_text; ?>" class="om_menu_img" src=" <?php the_field('box_team_image'); ?>" />
            <?php endif; ?><h3><?php the_field('box_team_title'); ?></h3></a>

            <?php
            if( get_field('job_submenu_toggle') )
              $value = get_field('job_submenu_toggle');
              ?>
              <?php  if( $value == true ) : ?>
                <?php if( get_field('box_job_image') ): ?>
              <a href="<?php the_field('box_job_link'); ?>"><img alt="<?php echo $alt_text; ?>" class="om_menu_img" src=" <?php the_field('box_job_image'); ?>" />
              <?php endif; ?><h3><?php the_field('box_job_title'); ?></h3></a>
              <?php else : ?>
                <span></span>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Vores process steps start -->
    <div class="row wrapper" id="steps">

      <?php if( have_rows('steps_box') ): ?>
      <?php while ( have_rows('steps_box') ) : the_row();
        $stepsimage = get_sub_field('steps_img'); ?>

        <div class="om_steps">

        <div id="steps" class="om_steps_content">
  				<div class="half steps_img">
            <div class="row stroke_position_om mobile">
              <div class="stroke_om"></div>
              <p class="steps_number">
                <?php the_sub_field('steps_number'); ?>
              </p>
            </div>
            <img alt="<?php echo $alt_text; ?>" src="<?php echo $stepsimage['url']; ?>"
              alt="<?php echo $stepsimage['alt'] ?>"/>
      		</div>
      		<div class="half steps_text">
            <div class="row stroke_position_om desktop">
              <div class="stroke_om"></div>
              <p class="steps_number">
                <?php the_sub_field('steps_number'); ?>
              </p>
            </div>
      			<h2><?php the_sub_field('steps_title'); ?></h2>
      			<p><?php the_sub_field('steps_text'); ?></p>

            <?php
            if( get_field('learn_more_available'))
              $test = get_field('learn_more_available');
              ?>
              <?php if( $test == true ) : ?>
                <a class="om_button" href="<?php the_sub_field('steps_link'); ?>"><?php the_sub_field('om_button_text'); ?> <?php if( get_sub_field('om_button_icon') ): ?>
                  <img alt="<?php echo $alt_text; ?>" src="<?php the_sub_field('om_button_icon'); ?>" />
                <?php endif; ?></a>
              <?php else : ?>
                <span></span>
              <?php endif; ?>

      		</div>
      	</div>
        <div class="arrow_left">
          <img alt="<?php echo $alt_text; ?>" src="<?php echo get_bloginfo('template_directory'); ?>/images/orange_stroke_left.svg">
        </div>
        <div class="arrow_right">
          <img alt="<?php echo $alt_text; ?>" src="<?php echo get_bloginfo('template_directory'); ?>/images/orange_stroke_right.svg">
        </div>
      </div>
      <?php endwhile; ?>
      <?php else : endif; ?>
  </div>

<!-- Klient citat -->
  <div class="container-fluid om_quote">
    <div class="row wrapper">
        <div class="client_quote">
        <img alt="<?php echo $alt_text; ?>" class="quote_img" src="<?php the_field('om_client_image'); ?>" />
        <p class="quote orange">“<span class="black"><?php the_field('om_client_citat'); ?></span>”</p>
        <p class="quote_name"><?php the_field('om_client_name'); ?></p>
        <img alt="<?php echo $alt_text; ?>" class="quote_logo" src="<?php the_field('om_client_logo'); ?>" />
      </div>
    </div>
  </div>

  <?php
  $title = get_field('team_title_icon');
  $phone = get_field('team_phone_icon');
  $mail = get_field('team_mail_icon');
  ?>

  <div class="container-fluid wrapper team">
    <div class="row" id="team">
      <div class="col-md-3">
        <h2><?php the_field('team_title'); ?></h2>
        <div class="stroke_position">
          <div class="team_stroke"></div>
        </div>
        <p class="gray"><?php the_field('team_text'); ?></p>
      </div>
      <div class="col-md-9">
        <?php // check if the nested repeater field has rows of data
            if( have_rows('team_members') ):
    			 	  // loop through the rows of data
    			    while ( have_rows('team_members') ) : the_row(); ?>
                <div class="row team_members">
                  <div class="team_members_empty"></div>
                  <div class="d-flex team_members_half">
                    <div class="col-12">
                      <div href="<?php the_sub_field('team_url'); ?>"  class="team_img_container">
                    <a href="<?php the_sub_field('team_url'); ?>" ><img alt="<?php echo $alt_text; ?>" class="" src="<?php the_sub_field('team_img'); ?>" /></a>
                      <a href="<?php the_sub_field('team_url'); ?>" class="team_img_overlay">

                        <div class="team_img_text">
                          <p class="team_overlay_content" href="<?php the_sub_field('team_url'); ?>"><img alt="<?php echo $alt_text; ?>" src="<?php echo $title ?>" alt=""> <?php the_sub_field('team_title') ?></p>
                          <p class="team_overlay_content" href="mailto:<?php the_sub_field('team_mail') ?>"><img alt="<?php echo $alt_text; ?>" src="<?php echo $mail ?>" alt=""> <?php the_sub_field('team_mail') ?></p>
                          <p class="team_overlay_content" href="tel:<?php the_sub_field('team_phone_number') ?>"><img alt="<?php echo $alt_text; ?>" src="<?php echo $phone ?>" alt=""> <?php the_sub_field('team_phone_number') ?></p>
                        </div>
                      </a>
                      </div>
                      <div class="row team_name">
                        <h3 class="left"><?php the_sub_field('team_number'); ?></h3>
                        <div class="stroke_team"></div>
                        <h3 class="right"><?php the_sub_field('team_name'); ?></h3>
                      </div>
                    </div>
                  </div>
                </div>
                <?php	       endwhile; ?>

                  <?php	  endif; ?>
      </div>
    </div>
  </div>

  <!-- Slider med firma logoer (klienter?) -->
    <div class="container-fluid">
      <div class="row logo_slider">
        <div class="col align-self-center">
          <div class="owl-carousel owl-theme autoplay">
            <?php
            $images = get_field('firma_slider', 'option');
            foreach ($images as $image):?>
              <div>
                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </div>
              <?php endforeach;?>
          </div>
        </div>
      </div>
    </div>

<!-- Slider -->

  <div class="container-fluid wrapper">
    <div class="row">
      <div class="om_slider_title">
        <h2><?php the_field('om_slider_title'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="stroke_position_om_case">
        <div class="stroke"></div>
      </div>
    </div>

  <div class="col-12 owl-carousel owl-theme carousel_om_change">

    <?php

      global $wp_query;
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
     'post_type' => 'cases',
     'posts_per_page' => 4,
     'paged' => $paged,
     'orderby' => 'publish_date',
     'order' => 'DESC',
      );

      $wp_query = new WP_Query($args);
      while ($wp_query->have_posts()) : $wp_query->the_post();  ?>

      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <a class="omchange_card_content" href="<?php the_permalink(); ?>" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; ">

            <?php $image = get_field('client_logo_neg'); if( !empty($image) ): ?>
            <img class="omchange_client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>

          <h2 class="omchange_card_h3"><?php the_field('case_headline');?></h2>

          <div class="omchange_category_wrapper">
          <div class="omchange_card_tags">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
              foreach($posttags as $tag) {
                echo $tag->name . ' ';
              }
            }
            ?> </div>

          <div class="omchange_card_categories">
            <?php
            foreach((get_the_category()) as $category){
              echo $category->name.", ";
            }
            ?>
          </div>

          </div></a>

              <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">

/* Logo transition script */
$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {

  $(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

  $(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});
$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".input").addClass("out_black2");
    } else {
        $(".input").removeClass("out_black2");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".menubtn").addClass("menu_black");
    } else {
        $(".menubtn").removeClass("menu_black");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".header").addClass("out_white");
    } else {
        $(".header").removeClass("out_white");
    }
});

$('.scrollProcess').on('click', function(event){
    event.preventDefault();
    $('html, body').stop().animate({scrollTop: $('#steps').offset().top}, 300);
});

$('.scrollTeam').on('click', function(event){
    event.preventDefault();
    $('html, body').stop().animate({scrollTop: $('#team').offset().top}, 300);
});

ScrollReveal().reveal('.stroke_position_services', { distance: '300px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.omchange_hero_info h1', { distance: '400px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.om_menu', { distance: '450px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.om_menu a', { distance: '550px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.steps_img', { distance: '300px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.stroke_om', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.steps_number', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.steps_text h2', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.steps_text p', { distance: '500px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.om_button a', { distance: '30px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.om_button img', { distance: '400px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.arrow_left img', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.arrow_right img', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.quote_img', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.quote', { distance: '400px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.quote_name', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.quote_logo', { distance: '500px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.team h2', { distance: '450px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.team_stroke', { distance: '550px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.gray', { distance: '550px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.team_members_half img', { distance: '500px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.team_name h3', { distance: '550px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.stroke_team', { distance: '500px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.logo_slider', { distance: '550px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.om_slider_title', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.stroke_position', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.carousel_om_change', { distance: '550px', easing: 'ease-in-out', duration: 900 });
</script>
