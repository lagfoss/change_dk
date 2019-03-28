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
    <div class="row komme_uden_om_det">
      <h2 class="services_main_content_overskrift"> <?php the_field('services_main_content_overskrift') ?> </h2>
      <p class="services_main_content_text"> <?php the_field('services_main_content_text') ?> </p>
      <div class="stroke_position">
        <div class="stroke"></div>
      </div>
  	</div>
  </div>

  <div class="container-fluid wrapper">
    <div class="row justify-content-center buttons_wrapper">
        <?php if( have_rows('services_buttons') ): ?>

          <?php while( have_rows('services_buttons') ): the_row();
            $image = get_sub_field('services_img');
            $header = get_sub_field('services_header');
            $text = get_sub_field('services_text');
            ?>
            <div class="wcwd_hover col-sm-4 wcwd_content">
                <img alt="services billeder" class="wcwd_img" src="<?php echo $image; ?>"/>
                <h3 class="scroll_header"><?php echo $header; ?></h3>
                <p class="scroll_text"><?php echo $text; ?></p>
            </div>
          <?php endwhile; ?>

        <?php endif; ?>

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
                if(scroll_pos > 620) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
$(".input").addClass("out_black2");
    } else {
        $(".input").removeClass("out_black2");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
$(".search").addClass("search_black");
    } else {
        $(".search").removeClass("search_black");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
$(".menubtn").addClass("menu_black");
    } else {
        $(".menubtn").removeClass("menu_black");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
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
