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
      <?php echo do_shortcode("[contact-form-7 id=1552]") ; ?>
  	</div>
  </div>
    </div>

    <?php
    $computerimg = get_field('content_calendar_preview_computer_image');
    $calendarimg = get_field('content_calendar_preview_calendar_image');
    $previewheader = get_field('content_calendar_preview_header');
    $previewtext = get_field('content_calendar_preview_text');
     ?>

  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-md-6">
        <img class="content_calendar_computer" src="<?php echo $computerimg; ?>" alt="">
        <img class="content_calendar_preview" src="<?php echo $calendarimg; ?>" alt="">
      </div>

      <div class="col-md-6">
        <h2><?php echo $previewheader; ?></h2>
        <p><?php echo $previewtext; ?></p> 
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

document.addEventListener( 'wpcf7mailsent', function( event ) {
		if ( '1552' == event.detail.contactFormId) {
			var inputs = event.detail.inputs;
			var urs = inputs[2].value;
			window.location.href=urs;
			setTimeout(function(){ location.reload(); }, 3000);
		}
	}, false );

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
