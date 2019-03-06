<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<div class="hero background_img_services" style="background-image:url(<?php the_field('team_hero'); ?>);">
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="hero_info">
        <div class="stroke_position_services">
          <div class="stroke_services"></div>
        </div>
        <h1><?php the_field('team_hero_title'); ?></h1>
      </div>
    </div>
    <div class="om_menu">
      <div class="row align-items-center">
          <?php if( get_field('box_process_image', 'option') ): ?>
        <a href="<?php the_field('box_process_link', 'option'); ?>"><img class="om_menu_img" src=" <?php the_field('box_process_image', 'option'); ?>" />
        <?php endif; ?><h3><?php the_field('box_process_title', 'option'); ?></h3></a>

          <?php if( get_field('box_team_image', 'option') ): ?>
        <a href="#steps"><img class="om_menu_img" src=" <?php the_field('box_team_image', 'option'); ?>" />
        <?php endif; ?><h3><?php the_field('box_team_title', 'option'); ?></h3></a>

          <?php if( get_field('box_job_image', 'option') ): ?>
        <a href="<?php the_field('box_job_link', 'option'); ?>"><img class="om_menu_img" src=" <?php the_field('box_job_image', 'option'); ?>" />
        <?php endif; ?><h3><?php the_field('box_job_title', 'option'); ?></h3></a>

        <div class="team_arrow_down">
          <?php if( get_field('button_down', 'option') ): ?>
        <a href="#steps"><img class="omchange_calltoaction" src=" <?php the_field('button_down', 'option'); ?>" />
          <?php endif; ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid wrapper team">
  <div class="row" id="steps">
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
                    <img src="<?php the_sub_field('team_img'); ?>" />
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

ScrollReveal().reveal('.stroke_position_services', { distance: '300px' });
ScrollReveal().reveal('.hero_info h1', { distance: '400px' });
ScrollReveal().reveal('.om_menu_img', { distance: '350px' });
ScrollReveal().reveal('.om_menu a', { distance: '450px' });
ScrollReveal().reveal('.team h2', { distance: '450px' });
ScrollReveal().reveal('.team_stroke', { distance: '550px' });
ScrollReveal().reveal('.gray', { distance: '550px' });
ScrollReveal().reveal('.team_members_half img', { distance: '500px' });
ScrollReveal().reveal('.team_name h3', { distance: '550px' });
ScrollReveal().reveal('.stroke_team', { distance: '500px' });
ScrollReveal().reveal('.logo_slider', { distance: '550px' });
</script>
