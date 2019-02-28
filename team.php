<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<div class="hero background_img_ydelser" style="background-image:url(<?php the_field('team_hero'); ?>);">
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="hero_info">
        <div class="stroke_position_ydelser">
          <div class="stroke_ydelser"></div>
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

<div class="container-fluid wrapper">
  <div class="row" id="steps">
    <div class="col-md-4">
      <h2 class="h2_case"><?php the_field('team_title'); ?></h2>
      <div class="row stroke_position_case">
        <div class="stroke_case"></div>
      </div>
      <p><?php the_field('team_text'); ?></p>
    </div>
    <div class="col-md-8 team_members">
      <?php // check if the nested repeater field has rows of data
          if( have_rows('team_members') ):
  			 	  // loop through the rows of data
  			    while ( have_rows('team_members') ) : the_row(); ?>
              <div class="row case_some_ex">
                <div class="case_some_empty"></div>
                <div class="case_some_half">
                  <img src="<?php the_sub_field('team_img'); ?>" />
                  <div class="row stroke_position_case">
                    <p><?php the_sub_field('team_number'); ?></p>
                    <div class="stroke_case"></div>
                    <p><?php the_sub_field('team_name'); ?></p>
                    <p class="pre_client"><?php echo $somexamptitle; ?></p>
                  </div>
                </div>
              </div>
              <?php	       endwhile; ?>

                <?php	  endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
