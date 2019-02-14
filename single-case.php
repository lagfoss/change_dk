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
                <p class="hero_client"><?php echo $heroname; ?></p>
              </div>
              <h1 class="h1_case"><?php echo $clienttitle; ?></h1>
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

          <div class="container-fluid case_client">
            <div class="row wrapper">
              <div class="col-md-5">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $clientpre; ?></p>
                </div>
                <div class="row">
                  <img class="client_logo" src="<?php echo $clientlogo['url']; ?>" alt="<?php echo $clientlogo['alt'] ?>"/>
                  <p class="client_text"><?php echo $clientname; ?></p>
                </div>
              </div>
              <div class="col-md-7">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $clientservice; ?></p>
                </div>
                <p class="client_text"><?php echo $clientcategories; ?></p>
              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_client_info' ):

        	$clienturl = get_sub_field('case_client_url');
          $clienturltext = get_sub_field('case_client_url_text');
          $clientcontact = get_sub_field('case_contact');
          $clientcontacttext = get_sub_field('case_contact_text');
          $abouttitle = get_sub_field('case_about_client_title');
          $about = get_sub_field('case_about_client'); ?>

          <div class="container-fluid wrapper">
            <div class="row">
              <div class="col-md-5">
                <a href="<?php echo $clienturl; ?>" class="" target="_blank"><?php echo $clienturltext; ?></a>
                <a href="mailto:<?php echo $clientcontact; ?>" class=""><?php echo $clientcontacttext; ?></a>
              </div>
              <div class="col-md-7">
                <h2 class=""><?php echo $abouttitle; ?></h2>
                <p class=""><?php echo $about; ?></p>
              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_client_image' ):

        	$clientimage = get_sub_field('case_image');
          if ($clientimage) {
  	         $clienti_bg = 'style="background-image: url(' . $clientimage['url'] . '); background-size:cover; background-position: center"';
           } ?>

          <div class="container-fluid client_image" <?php echo $clienti_bg; ?>></div>

  <?php elseif( get_row_layout() == 'case_goal' ):

        	$pregoal = get_sub_field('case_pre_goal');
          $goaltitle = get_sub_field('case_goal_title');
          $goaltext = get_sub_field('case_goal_text'); ?>

          <div class="container-fluid wrapper">
            <div class="row case_goal">
              <div class="row stroke_position_case">
                <div class="stroke_case"></div>
                <p class="pre_client"><?php echo $pregoal; ?></p>
              </div>
              <h2 class=""><?php echo $goaltitle; ?></h2>
              <p class=""><?php echo $goaltext; ?></p>
            </div>
          </div>

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
