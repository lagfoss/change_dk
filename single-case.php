<?php
/*
Template Name: Cases
Template Post Type: cases
*/
?>

<?php get_header(); ?>

<?php

  // check if the flexible content field has rows of data
  if( have_rows('case') ):

     // loop through the rows of data
    while ( have_rows('case') ) : the_row();

        if( get_row_layout() == 'case_hero' ):

        $heroimage = get_sub_field('case_hero_image');
        if ($heroimage) {
	         $hero_bg = 'style="background-image: url(' . $heroimage['url'] . '); background-size:cover;"';
         }
        $heroname = get_sub_field('hero_client_name');
        $clienttitle = get_sub_field('hero_client_title');

        elseif( get_row_layout() == 'case_client' ):

        	$clientpre = get_sub_field('case_client_pre');
          $clientlogo = get_sub_field('client_logo');
          $clientname = get_sub_field('case_client_name');
          $clientservice = get_sub_field('case_client_service');
          $clientcategories = get_sub_field('case_client_categories');


        elseif( get_row_layout() == 'download' ):

        	$file = get_sub_field('file');

        endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<div class="hero" <?php echo $hero_bg; ?>>
  <div class="container-fluid wrapper">
    <div class="row">
      <div class="col-sm-6">
        <div class="hero_info">
          <div class="stroke_position_ydelser">
            <div class="stroke_ydelser"></div>
            <p class="white"><?php echo $heroname; ?></p>
          </div>
          <h1 class="h1_hero_ydelser"><?php echo $clienttitle; ?></h1>
        </div>
      </div>
      <div class="col-sm-6">
        <a class="" href="#"> <?php if( get_field('calltoaction_hero_ydelser') ): ?>
          <img class="calltoaction_hero_ydelser" src="<?php the_field('calltoaction_hero_ydelser'); ?>" />
        <?php endif; ?></a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid wrapper">
  <div class="row">
    <div class="col-md-5">
      <?php echo $clientpre; ?>
      <img src="<?php echo $clientlogo['url']; ?>" alt="<?php echo $clientlogo['alt'] ?>"/><?php echo $clientname; ?>
    </div>
    <div class="col-md-7">
      <?php echo $clientservice; ?><?php echo $clientcategories; ?>



    </div>
  </div>
</div>


<?php get_footer(); ?>
