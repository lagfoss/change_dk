<?php /* Template Name: Om Change */ ?>

<?php get_header(); ?>

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
    </div>

    <div class="">
      <?php if( get_field('call_to_action_intro') ): ?>
      <a href="#"><img class="omchange_calltoaction" src=" <?php the_field('call_to_action_intro'); ?>" />
      <?php endif; ?></a>
    </div>
  </div>

  <div class="container-fluid vores_process">
    <div class="row">
      <div class="om_intro_title">
        <h2><?php the_field('vores_process_title'); ?></h2>
        <p><?php the_field('vores_process_text'); ?></p>
      </div>
    </div>





    <!-- Steps start -->
    <div class="row">

      <?php if( have_rows('steps') ): ?>
          <?php while( have_rows('steps') ): the_row();
            // vars
            $stepsimage = get_sub_field('steps_img');
            $stepsheader = get_sub_field('steps_header');
            $stepstext = get_sub_field('steps_text');
            $stepslink = get_sub_field('stepslink');
          ?>
      <a class="steps_box" href="<?php echo $stepslink; ?>">
        <img class="steps_img" src="<?php echo $stepsimage['url']; ?>" alt="<?php echo $stepsimage['alt'] ?>"/>
        <h3><?php echo $stepsheader; ?></h3>
        <p><?php echo $stepstext; ?></p>
      </a>
    <?php endwhile; ?>
    <?php endif; ?>

    </div>

  </div>

<?php get_footer(); ?>
