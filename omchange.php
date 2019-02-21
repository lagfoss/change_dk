<?php /* Template Name: Om Change */ ?>

<?php get_header(); ?>

  <div class="hero background_img_ydelser" style="background-image:url(<?php the_field('omchange_hero'); ?>);">
    <div class="container-fluid wrapper">
      <div class="row">
        <div class="hero_info">
          <div class="stroke_position_ydelser">
            <div class="stroke_ydelser"></div>
          </div>
          <h1><?php the_field('om_hero_title'); ?></h1>
        </div>
  	  </div>
      <div class="om_menu">
        <div class="row align-items-center">
            <?php if( get_field('box_process_image') ): ?>
          <a href="<?php the_field('box_process_link'); ?>"><img class="" src=" <?php the_field('box_process_image'); ?>" />
          <?php endif; ?><h3><?php the_field('box_process_title'); ?></h3></a>

            <?php if( get_field('box_team_image') ): ?>
          <a href="<?php the_field('box_team_link'); ?>"><img class="" src=" <?php the_field('box_team_image'); ?>" />
          <?php endif; ?><h3><?php the_field('box_team_title'); ?></h3></a>

            <?php if( get_field('box_job_image') ): ?>
          <a href="<?php the_field('box_job_link'); ?>"><img class="" src=" <?php the_field('box_job_image'); ?>" />
          <?php endif; ?><h3><?php the_field('box_job_title'); ?></h3></a>

          <div class="arrow_down">
            <?php if( get_field('call_to_action_intro') ): ?>
          <a href="#"><img class="omchange_calltoaction" src=" <?php the_field('call_to_action_intro'); ?>" />
            <?php endif; ?></a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Vores process steps start -->
    <div class="row wrapper">

      <?php if( have_rows('steps_box') ): ?>
      <?php while ( have_rows('steps_box') ) : the_row();
        $stepsimage = get_sub_field('steps_img'); ?>

      <a href="<?php the_sub_field('steps_link'); ?>" class="om_steps">
        <div class="arrow_left">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/step_3_arrow.svg">
        </div>
        <div class="arrow_right">
          <img src="<?php echo get_bloginfo('template_directory'); ?>/images/step_2_arrow.svg">
        </div>

        <div id="steps" class="om_steps_content">
  				<div class="half steps_img">
            <img src="<?php echo $stepsimage['url']; ?>"
              alt="<?php echo $stepsimage['alt'] ?>"/>
      		</div>
      		<div id="" class="half steps_text">
            <div class="steps_number">
              <?php the_sub_field('steps_number'); ?>
            </div>
      			<h2><?php the_sub_field('steps_title'); ?></h2>
      			<?php the_sub_field('steps_text'); ?>
      		</div>
      	</div>
      </a>
      <?php endwhile; ?>
      <?php else : endif; ?>

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
      <div class="stroke_position">
        <div class="stroke"></div>
      </div>
    </div>

    <div class="col-12 owl-carousel owl-theme carousel_om_change">

  <?php
  $params = array('posts_per_page' => 4,'orderby' => 'menu_order',
  'order' => 'ASC', 'post_type' => 'cases');
  $query = new WP_Query($params);
  ?>
        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) :
              $query->the_post(); ?>

                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <div class="omchange_card_link col-3" href="<?php the_permalink(); ?>">
                  <div class="omchange_card_content"  style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">

                      <div class="">
                      <?php $image = get_field('client_logo_neg'); if( !empty($image) ): ?>
                      <img class="omchange_client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <?php endif; ?>
                      </div>

                      <h3 class="omchange_card_h3"><?php the_field('case_headline');?></h3>

                      <div class="omchange_category_wrapper">
                        <div class="omchange_card_tags"><?php the_tags( ' ', ', ', '<br />' ); ?> </div>

                        <?php the_category(); ?>
                      </div>
              </div></div>

              <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                  <?php else:  ?>

                      <?php _e( 'No cases' ); ?>

                        <?php endif; ?>
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

$(".omchange_calltoaction").click(function() {
$('html,body').animate({
  scrollTop: $(".vores_process").offset().top - 120},
  'slow');
});
</script>
