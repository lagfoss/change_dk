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
        $herobutton = get_sub_field('client_hero_button'); ?>

        <div class="hero" <?php echo $hero_bg; ?>>
          <div class="container-fluid wrapper">
            <div class="case_hero">
              <div class="row stroke_position_case">
                <div class="stroke_case"></div>
                <p class="white hero_client"><?php echo $heroname; ?></p>
              </div>
              <h1 class="h1_hero_ydelser"><?php echo $clienttitle; ?></h1>
            </div>
            <div class="row">
                <a class="" href="#">
                  <img class="case_down" src="<?php echo $herobutton['url']; ?>" alt="<?php echo $herobutton['alt'] ?>" />
                </a>
              </div>
            </div>
          </div>
        </div>

  <?php elseif( get_row_layout() == 'case_client' ):

        	$clientpre = get_sub_field('case_client_pre');
          $clientlogo = get_sub_field('client_logo');
          $clientname = get_sub_field('case_client_name');
          $clientservice = get_sub_field('case_client_service');
          $clientcategories = get_sub_field('case_client_categories'); ?>

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

  <?php elseif( get_row_layout() == 'case_client_info' ):

        	$clienturl = get_sub_field('case_client_url');
          $clienturltext = get_sub_field('case_client_url_text');
          /*$ = get_sub_field('case_client_');
          $ = get_sub_field('case_client_');*/
          $abouttitle = get_sub_field('case_about_client_title');
          $about = get_sub_field('case_about_client'); ?>

  <?php elseif( get_row_layout() == 'case_client_image' ):

        	$clientimage = get_sub_field('case_image'); ?>

          <div class="">
            <div class="container-fluid wrapper">
              <div class="row">
                <img src="<?php echo $clientimage['url']; ?>" alt="<?php echo $clientimage['alt'] ?>"/>
              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_goal' ):

        	$pregoal = get_sub_field('case_pre_goal');
          $goaltitle = get_sub_field('case_goal_title');
          $goaltext = get_sub_field('case_goal_text'); ?>

  <?php elseif( get_row_layout() == 'case_strategi' ):

        	$strategititle = get_sub_field('case_strategi_title');
          $strategitext = get_sub_field('case_strategi_text');

          // check if the nested repeater field has rows of data
        	if( have_rows('case_strategi_box') ):
			 	       // loop through the rows of data
			         while ( have_rows('case_strategi_box') ) : the_row(); ?>


          <div class="container-fluid wrapper">
            <div class="row">
              <div class="col-md-5">
                <img src="<?php the_sub_field('case_strategi_icon'); ?>" />
              </div>
              <div class="col-md-7">
              </div>
            </div>
          </div>
        <?php	       endwhile; ?>
          <?php	  endif; ?>

  <?php elseif( get_row_layout() == 'case_social_media' ):

        	$clienturl = get_sub_field('case_image'); ?>

  <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>


<?php get_footer(); ?>
