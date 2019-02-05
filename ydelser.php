<?php /* Template Name: Ydelser */ ?>

<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>

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

<?php get_footer(); ?>
