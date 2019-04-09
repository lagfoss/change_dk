<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

  <div class="hero background_img_services" style="background-image:url(<?php the_field('background_img_services'); ?>);">
  <div class="container-fluid wrapper">
    <div class="row">
  		<div class="hero_services">
        <div class="stroke_position_services">
          <div class="stroke_services"></div>
        </div>
        <h1><?php the_field('h1_hero_services'); ?></h1>
      </div>
  	</div>

  </div>
</div>

  <div class="container-fluid">
    <div class="row">
        <?php if( have_rows('services_content') ): ?>

          <?php while( have_rows('services_content') ): the_row();

              // check if the flexible content field has rows of data
              if( have_rows('flexible_services') ):

                 // loop through the rows of data
                while ( have_rows('flexible_services') ) : the_row();

                if( get_row_layout() == 'text_content' ):
                    $title = get_sub_field('title');
                    $text = get_sub_field('text');

                elseif( get_row_layout() == 'popup_1column' ):
                    if( have_rows('1_column') ):
                    while ( have_rows('1_column') ) : the_row();
                      $popup1col = get_sub_field('popup_title1'); ?>
                    <p><?php echo $popup1col; ?></p>
                  <?php endwhile;
                    endif;

                elseif( get_row_layout() == 'popup_2column' ):
                    if( have_rows('2_column') ):
                    while ( have_rows('2_column') ) : the_row();
                      $popup1col = get_sub_field('popup_title2'); ?>
                    <p><?php echo $popup1col; ?></p>
                  <?php endwhile;
                    endif;

                elseif( get_row_layout() == 'image_wrapper' ):
                    $imgwrap = get_sub_field('img_w_wrapper');

                elseif( get_row_layout() == 'image_no_wrap' ):
                    $imgnowrap = get_sub_field('img_no_wrapper'); ?>

                  <?php endif;
                                        endwhile;
                                    else :
                                        // no layouts found
                                    endif; ?>
                            <?php endwhile; ?>
                    <?php endif; //if( get_sub_field('files') ): ?>

                      <div class="hvorerdu">
                        <h2> <?php echo $title; ?></h2>
                      <p><?php echo $text; ?></p>
                      <img class="" src="<?php echo $imgwrap; ?>" />
                      <img class="" src="<?php echo $imgnowrap; ?>" />
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

<?php get_footer(services); ?>

<script type="text/javascript">

/* Logo transition script */
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


ScrollReveal().reveal('.stroke_position_services', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('h1', { distance: '500px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.services_main_content_overskrift', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.services_main_content_text', { distance: '650px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.stroke', { distance: '550px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.wcwd_img', { distance: '300px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.scroll_header', { distance: '500px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.scroll_text', { distance: '600px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.logo_slider', { distance: '450px', easing: 'ease-in-out', duration: 900 });

</script>
