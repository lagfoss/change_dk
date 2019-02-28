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

    </div>
    <div class="col-md-8">

    </div>
  </div>
</div>

<?php get_footer(); ?>
