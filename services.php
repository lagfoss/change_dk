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

  <div class="container-fluid wrapper">
      <?php if( have_rows('services_content') ): ?>
      <?php while( have_rows('services_content') ): the_row(); ?>

    <div class="row services">
      <div class="pink_square_services"></div>

      <?php // check if the flexible content field has rows of data
            if( have_rows('flexible_services') ):

              // loop through the rows of data
              while ( have_rows('flexible_services') ) : the_row();

              if( get_row_layout() == 'text_content' ):
                  $title = get_sub_field('title');
                  $text = get_sub_field('text');
                  $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);

              elseif( get_row_layout() == 'popup_1column' ): ?>
<!-- Text with 1 column -->
      <div class="services_content">
                  <h2> <?php echo $title; ?></h2>
                  <p><?php echo $text; ?></p>

                  <?php if( have_rows('1_column') ):
                      while ( have_rows('1_column') ) : the_row();
                        $popup1col = get_sub_field('popup_title1');
                        $popup1content = get_sub_field('pop_up_content1');
                        $id1 = get_sub_field('id1'); ?>
                        <a href="#<?php echo $id1; ?>" class="open-modal col_one_content" rel="modal:open nofollow">- <?php echo $popup1col; ?></a>

                        <div id="<?php echo $id1; ?>" class="modal_services" style="display:none;">
                          <h2><?php echo $popup1col ?></h2>
                          <p> <?php echo $popup1content ?></p>
                        </div>
        <?php endwhile;
              endif; ?>

      </div>

<!-- Text with 2 columns -->
    <?php  elseif( get_row_layout() == 'popup_2column' ): ?>
      <div class="services_content">
                  <h2> <?php echo $title; ?></h2>
                  <p><?php echo $text; ?></p>
              <?php if( have_rows('2_column') ): ?>
            <?php  while ( have_rows('2_column') ) : the_row();
                $popup2col = get_sub_field('popup_title2');
                $popup2content = get_sub_field('pop_up_content_2');
                $id2 = get_sub_field('id2'); ?>

                <a href="#<?php echo $id2; ?>" class="open-modal col_two_content" rel="modal:open nofollow">- <?php echo $popup2col; ?></a>


                <div id="<?php echo $id2; ?>" class="modal_services" style="display:none;">
                  <h2><?php echo $popup2col ?></h2>
                  <p><?php echo $popup2content ?> </p>
                </div>
            <?php endwhile;
            endif; ?>

</div>


<!-- Image with wrapper -->
        <?php elseif( get_row_layout() == 'image_wrapper' ):
                $imgwrap = get_sub_field('img_w_wrapper'); ?>
                <img class="img_w_wrapper" src="<?php echo $imgwrap; ?>" alt="<?php echo $alt_text; ?>" />
<!-- Image with no wrapper -->
        <?php elseif( get_row_layout() == 'image_no_wrap' ):
                $imgnowrap = get_sub_field('img_no_wrapper'); ?>

                <img class="img_no_wrapper" alt="<?php echo $alt_text; ?>" src="<?php echo $imgnowrap; ?>" />


              <?php endif;
            endwhile; ?>

          <?php else :
            // no layouts found
                endif; ?>
    </div>

                <?php endwhile; ?>
          <?php endif; ?>

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
ScrollReveal().reveal('.pink_square_services', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.services_content', { distance: '650px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.img_w_wrapper', { distance: '550px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.img_no_wrapper', { distance: '550px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.logo_slider', { distance: '450px', easing: 'ease-in-out', duration: 900 });

</script>
