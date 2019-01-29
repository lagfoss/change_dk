<?php /* Template Name: Om Change */ ?>

<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>

  <div class="container-fluid om_intro">
    <div class="row">
      <div class="om_intro_title">
        <h2><?php the_field('om_intro_title'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="stroke_position">
        <div class="stroke"></div>
      </div>
    </div>
    <div class="row justify-content-center intro_boxes">
        <?php if( have_rows('om_intro_boxes') ): ?>

            <?php while( have_rows('om_intro_boxes') ): the_row();
              // vars
              $introimage = get_sub_field('intro_box_image');
              $introtitle = get_sub_field('intro_box_title');
              $introtext = get_sub_field('intro_box_text');
              $introlink = get_sub_field('intro_box_link');
            ?>
        <a class="intro_box" href="<?php echo $introlink; ?>">
        	<img src="<?php echo $introimage['url']; ?>" alt="<?php echo $introimage['alt'] ?>"/>
          <h3><?php echo $introtitle; ?></h3>
          <p><?php echo $introtext; ?></p>
      	</a>
  		<?php endwhile; ?>
      <?php endif; ?>
      <div class="arrow_down">
        <?php if( get_field('call_to_action_intro') ): ?>
        <a href="#"><img class="omchange_calltoaction" src=" <?php the_field('call_to_action_intro'); ?>" />
        <?php endif; ?></a>
      </div>
    </div>
  </div>

  <!-- Vores process -->

  <div class="container-fluid">
    <div class="row">
      <div class="vores_process">
        <h2><?php the_field('vores_process_title'); ?></h2>
        <p><?php the_field('vores_process_text'); ?></p>
      </div>
    </div>

    <!-- Steps start -->
    <div class="row">

      <?php if( have_rows('steps_box') ): ?>
      <?php while ( have_rows('steps_box') ) : the_row();
        $stepsimage = get_sub_field('steps_img'); ?>


      <a href="<?php the_sub_field('steps_link'); ?>" class="om_steps">
        <div class="steps_number">
          <?php the_sub_field('steps_number'); ?>
        </div>
        <div id="steps" class="om_steps_content">
          <img id="slide" src="<?php echo get_bloginfo('template_directory'); ?>/images/btn_arrow_white.svg" alt="">
  				<div id="steps_img" class="half">
            <img src="<?php echo $stepsimage['url']; ?>"
              alt="<?php echo $stepsimage['alt'] ?>"/>
      		</div>
      		<div id="steps_text" class="half">
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

  <div class="container-fluid">
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
    <div class="row logo_slider">
      <div class="col align-self-center">
        <div class="owl-carousel owl-theme autoplay">
          <?php
          $images = get_field('firma_slider');
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
