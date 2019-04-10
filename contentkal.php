<?php /* Template Name: Content kalender */ ?>

<?php get_header(); ?>

  <div class="hero background_img_services" style="background-image:url(<?php the_field('calender_hero_image'); ?>);">
  <div class="container-fluid wrapper">
    <div class="row">
  		<div class="col-sm-6 hero_services">
        <div class="stroke_position_services">
          <div class="stroke_services"></div>
        </div>
        <h1><?php the_field('calender_hero_title'); ?></h1>
      </div>
      <div class="col-sm-6">
      </div>
  	</div>

  </div>
</div>


  <div class="container-fluid wrapper_content">
    <div class="row">
      <div class="col-md-6 download_wrapper">
        <h2><?php the_field('content_calendar_header'); ?></h2>
        <div class="stroke_position">
          <div class="content_calendar_stroke"></div>
        </div>
        <p class="gray content_calendar_text"><?php the_field('content_calendar_content'); ?></p>
      </div>
      <div class="contact_form col-md-6 download">
        <?php echo do_shortcode("[contact-form-7 id=1552]") ; ?>
  	  </div>
    </div>
  </div>

    <?php
    $calendarimg = get_field('content_calendar_preview_calendar_image');
    $previewheader = get_field('content_calendar_preview_header');
    $previewtext = get_field('content_calendar_preview_text');
     ?>

  <div class="container-fluid wrapper_content">
    <div class="row">
      <div class="col-md-6 preview_wrapper">
        <img class="content_calendar_preview" src="<?php echo $calendarimg; ?>" alt="">
      </div>

      <div class="col-md-6 preview_wrapper">
        <h2><?php echo $previewheader; ?></h2>
        <div class="stroke_position">
          <div class="content_calendar_stroke"></div>
        </div>
        <div class="gray content_calendar_text"><?php echo $previewtext; ?></div>
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

ScrollReveal().reveal('.stroke_position_services', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.hero_services h1', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.download_wrapper h2', { distance: '650px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.stroke_position', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.download_wrapper p', { distance: '650px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.contact_form', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.content_calendar_computer', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.preview_wrapper h2', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.content_calendar_text', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.logo_slider', { distance: '450px', easing: 'ease-in-out', duration: 900 });

</script>
