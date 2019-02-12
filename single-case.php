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


        elseif( get_row_layout() == 'case_client_info' ):

        	$clienturl = get_sub_field('case_client_url');
          $clienturltext = get_sub_field('case_client_url_text');
          /*$ = get_sub_field('case_client_');
          $ = get_sub_field('case_client_');*/
          $abouttitle = get_sub_field('case_about_client_title');
          $about = get_sub_field('case_about_client');

        elseif( get_row_layout() == 'case_client_image' ):

        	$clienturl = get_sub_field('case_image');

        elseif( get_row_layout() == 'case_goal' ):

        	$pregoal = get_sub_field('case_pre_goal');
          $goaltitle = get_sub_field('case_goal_title');
          $goaltext = get_sub_field('case_goal_text');

        elseif( get_row_layout() == 'case_strategi' ):

        	$pregoal = get_sub_field('case_strategi_title');
          $goaltitle = get_sub_field('case_strategi_text');
        	// check if the nested repeater field has rows of data
        	if( have_rows('case_strategi_box') ):
			 	       echo '<ul>';
			 	       // loop through the rows of data
			         while ( have_rows('case_strategi_box') ) : the_row();
					          $image = get_sub_field('case_strategi_icon');
					          echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';
				       endwhile;
				       echo '</ul>';
          endif;

        elseif( get_row_layout() == 'case_social_media' ):

        	$clienturl = get_sub_field('case_image');

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

<div class="container-fluid wrapper">
  <div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-7">

    </div>
  </div>
</div>


<?php get_footer(); ?>
