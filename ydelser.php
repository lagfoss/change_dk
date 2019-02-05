<?php /* Template Name: Ydelser */ ?>

<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>

  <div class="container-fluid">
    <div class="row background_img_ydelser" style="background-image:url(<?php the_field('background_img_ydelser'); ?>);">
  		<div class="col-md-6">
        <div class="hero_info">
          <div class="stroke_position">
            <div class="stroke"></div>
          </div>
          <h1 class="h1_hero_ydelser"><?php the_field('h1_hero_ydelser'); ?></h1>

          <a class="calltoaction_hero_ydelser" href="#"> <?php if( get_field('calltoaction_hero_ydelser') ): ?>
            <img class="1" src="<?php the_field('calltoaction_hero_ydelser'); ?>" />
            <?php endif; ?></a>
        </div>
  		</div>
  	</div>
  </div>

<?php get_footer(); ?>
