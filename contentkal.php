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


  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-6">
        <h2><?php the_field('content_calendar_header'); ?></h2>
        <div class="stroke_position">
          <div class="stroke"></div>
        </div>
        <p><?php the_field('content_calendar_content'); ?></p>
      </div>



    <div class="col-md-6 komme_uden_om_det">
      <h2 class="services_main_content_overskrift"> <?php the_field('services_main_content_overskrift') ?> </h2>
      <p class="services_main_content_text"> <?php the_field('services_main_content_text') ?> </p>
      <div class="stroke_position">
        <div class="stroke"></div>
      </div>
      <?php echo do_shortcode("[email-download download_id=1553 contact_form_id=1552]") ; ?>
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

          <!--
          <div id="services_contact" class="col-sm-4 wcwd_content">
            <div class="services_dots" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/dot_grid.png');">

            </div>


            <div class="stroke_position_services">
              <div class="stroke_services"></div>
            </div>
            <h2><?php the_field('services_contact_button_header')  ?></h2>
              <a class="services_button" href="<?php the_field('services_contact_button_url');?>">
              <?php the_field('services_contact_button_text'); ?>
              <?php if( get_field('services_contact_button_arrow') ): ?>
              <img alt="calltoaction arrow" src="<?php the_field('services_contact_button_arrow'); ?>" />
              </a>
            <?php endif; ?>
          </div> -->
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

</script>
