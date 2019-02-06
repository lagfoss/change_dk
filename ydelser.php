<?php /* Template Name: Ydelser */ ?>

<?php get_header(); ?>

  <div class="container-fluid">
    <div class="row background_img_ydelser" style="background-image:url(<?php the_field('background_img_ydelser'); ?>);">
  		<div class="col-md-6">
        <div class="hero_info">
          <div class="stroke_position_ydelser">
            <div class="stroke_ydelser"></div>
          </div>
          <h1 class="h1_hero_ydelser"><?php the_field('h1_hero_ydelser'); ?></h1>
        </div>
  		</div>
      <div class="col-md-6">
        <a class="" href="#"> <?php if( get_field('calltoaction_hero_ydelser') ): ?>
          <img class="calltoaction_hero_ydelser" src="<?php the_field('calltoaction_hero_ydelser'); ?>" />
          <?php endif; ?></a>
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
    <div class="row justify-content-center">
        <?php if( have_rows('ydelser_buttons') ): ?>

          <?php while( have_rows('ydelser_buttons') ): the_row();
            $image = get_sub_field('ydelser_img');
            $header = get_sub_field('ydelser_header');
            $text = get_sub_field('ydelser_text');
            ?>
            <div class="hover col-sm-4 wcwd_content">
                <img class="wcwd_img" src="<?php echo $image; ?>" alt="" />
                <div class="wcwd_headline"><?php echo $header; ?></div>
                <div class="wcwd_text"><?php echo $text; ?></div>
            </div>
          <?php endwhile; ?>
          <div id="ydelser_contact" class="col-sm-4 wcwd_content">
            <div class="stroke_position_ydelser">
              <div class="stroke_ydelser"></div>
            </div>
            <h2><?php the_field('ydelser_contact_button_header')  ?></h2>
            <button class="ydelser_button">
              <a href="<?php the_field('ydelser_contact_button_url'); ?>">
              <?php the_field('ydelser_contact_button_text'); ?></a>

              <?php if( get_field('ydelser_contact_button_arrow') ): ?>
              <img class="1" src="<?php the_field('ydelser_contact_button_arrow'); ?>" />
            <?php endif; ?></button>
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

<?php get_footer(); ?>

<script type="text/javascript">

/* Logo transition script */
$(window).scroll(function() {
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();
	if (scroll >= windowHeight - 80) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

</script>
