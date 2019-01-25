<?php /* Template Name: Om Change */ ?>
<body <?php body_class(whitebg); ?>>
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
      <div class="arrow_down">
        <?php if( get_field('call_to_action_intro') ): ?>
        <a href="#"><img class="omchange_calltoaction" src=" <?php the_field('call_to_action_intro'); ?>" />
        <?php endif; ?></a>
      </div>
    </div>

  </div>

  <div class="container-fluid vores_process">
    <div class="row">
      <div class="vores_process">
        <h2><?php the_field('vores_process_title'); ?></h2>
        <p><?php the_field('vores_process_text'); ?></p>
      </div>
    </div>
  </div>




    <!-- Steps start -->
    <div class="row justify-content-center om_change_steps_left">

      <?php if( have_rows('steps_left_aligned') ): ?>
          <?php while( have_rows('steps_left_aligned') ): the_row();
            // vars
            $stepsimage = get_sub_field('steps_img_left_aligned');
            $stepsheader = get_sub_field('steps_header');
            $stepstext = get_sub_field('steps_text');
            $stepslink = get_sub_field('stepslink');
            $stepsnumber = get_sub_field('steps_number'); ?>
      <a class="steps_box_left row" href="<?php echo $stepslink; ?>">
        <img class="steps_img" src="<?php echo $stepsimage['url']; ?>" alt="<?php echo $stepsimage['alt'] ?>"/>

      <!--    <div class=" steps_number row" ><div class="steps_number_inner">
            <?php echo $stepsnumber; ?></div></div> -->
        <div class="steps_textbox">
          <h3 class="steps_header"><?php echo $stepsheader; ?></h3>
          <p class="steps_text" style="text-align:left;"><?php echo $stepstext; ?></p>
        </div>
      </a>
    <?php endwhile; ?>
    <?php endif; ?>

    </div>


    <div class="row justify-content-center om_change_steps_right">

      <?php if( have_rows('steps_right_aligned') ): ?>
          <?php while( have_rows('steps_right_aligned') ): the_row();
            // vars
            $stepsimage = get_sub_field('steps_img_right_aligned');
            $stepsheader = get_sub_field('steps_header');
            $stepstext = get_sub_field('steps_text');
            $stepslink = get_sub_field('stepslink');
            $stepsnumber = get_sub_field('steps_number');
          ?>
      <a class="steps_box_right row" href="<?php echo $stepslink; ?>">
        <img class="steps_img" src="<?php echo $stepsimage['url']; ?>" alt="<?php echo $stepsimage['alt'] ?>"/>

      <!--    <div class=" steps_number row" ><div class="steps_number_inner"> -->
            <?php echo $stepsnumber; ?></div></div>
        <div class="steps_textbox">
          <h3 class="steps_header"><?php echo $stepsheader; ?></h3>
          <p class="steps_text" style="text-align:left;"><?php echo $stepstext; ?></p>
        </div>
      </a>
    <?php endwhile; ?>
  <?php endif; ?>
    </div>

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


  </div>

<?php get_footer(); ?>
