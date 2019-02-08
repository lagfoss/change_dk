<?php /* Template Name: Ydelser */ ?>

<?php get_header(); ?>

  <div class="hero background_img_ydelser" style="background-image:url(<?php the_field('background_img_ydelser'); ?>);">
  <div class="container-fluid wrapper">
    <div class="row">
  		<div class="col-sm-6">
        <div class="hero_info">
          <div class="stroke_position_ydelser">
            <div class="stroke_ydelser"></div>
          </div>
          <h1 class="h1_hero_ydelser"><?php the_field('h1_hero_ydelser'); ?></h1>
        </div>
  		</div>
      <div class="col-sm-6">
        <a class="" href="#"> <?php if( get_field('calltoaction_hero_ydelser') ): ?>
          <img class="calltoaction_hero_ydelser" src="<?php the_field('calltoaction_hero_ydelser'); ?>" />
          <?php endif; ?></a>
      </div>
  	</div>

  </div>
</div>


  <div class="container-fluid">
    <div class="row komme_uden_om_det">
      <h2 class="ydelser_main_content_overskrift"> <?php the_field('ydelser_main_content_overskrift') ?> </h2>
      <p class="ydelser_main_content_text"> <?php the_field('ydelser_main_content_text') ?> </p>
      <div class="stroke_position">
        <div class="stroke"></div>
      </div>
  	</div>
  </div>

  <div class="container-fluid wrapper">
    <div class="row justify-content-center buttons_wrapper">
        <?php if( have_rows('ydelser_buttons') ): ?>

          <?php while( have_rows('ydelser_buttons') ): the_row();
            $image = get_sub_field('ydelser_img');
            $header = get_sub_field('ydelser_header');
            $text = get_sub_field('ydelser_text');
            ?>
            <div class="hover col-sm-4 wcwd_content">
                <img class="wcwd_img" src="<?php echo $image; ?>" alt="" />
                <h3><?php echo $header; ?></h3>
                <p><?php echo $text; ?></p>
            </div>
          <?php endwhile; ?>
          <div id="ydelser_contact" class="col-sm-4 wcwd_content">
            <div class="ydelser_dots" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/dot_grid.png');">

            </div>
            <div class="stroke_position_ydelser">
              <div class="stroke_ydelser"></div>
            </div>
            <h2><?php the_field('ydelser_contact_button_header')  ?></h2>
              <a class="ydelser_button" href="<?php the_field('ydelser_contact_button_url');?>">
              <?php the_field('ydelser_contact_button_text'); ?>
              <?php if( get_field('ydelser_contact_button_arrow') ): ?>
              <img class="1" src="<?php the_field('ydelser_contact_button_arrow'); ?>" />
              </a>
            <?php endif; ?>
          </div>
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


      <div class="container-fluid">
        <div class="row komme_uden_om_det">
          <h2 class="ydelser_main_content_overskrift"> <?php the_field('ydelser_main_content_overskrift') ?> </h2>
          <p class="ydelser_main_content_text"> <?php the_field('ydelser_main_content_text') ?> </p>
          <div class="stroke_position">
            <div class="stroke"></div>
          </div>
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
