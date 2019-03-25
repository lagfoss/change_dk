<?php
/*
Template Name: Cases
Template Post Type: cases
*/
?>

<?php get_header('case'); ?>

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
            <div class="row">
              <div class="col-md-8 case_hero">
                <div class="stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="hero_client"><?php echo $heroname; ?></p>
                </div>
                <h1><?php echo $clienttitle; ?></h1>
              </div>
              <div class="col-md-4">
                <!--
                <a href="#">
                  <img class="case_down" src="<?php echo $herobutton['url']; ?>" alt="<?php echo $herobutton['alt'] ?>" />
                </a> -->
              </div>
            </div>
          </div>
        </div>

  <?php elseif( get_row_layout() == 'case_client' ):

        	$clientpre = get_sub_field('case_client_pre');
          $clientlogo = get_sub_field('client_logo');
          $clientname = get_sub_field('case_client_name');
          $clientservice = get_sub_field('case_client_service'); ?>

    <?php elseif( get_row_layout() == 'case_client_info' ):
          $clienturl = get_sub_field('case_client_url');
          $clienturltext = get_sub_field('case_client_url_text');
          $clientcontact = get_sub_field('case_contact');
          $clientcontacttext = get_sub_field('case_contact_text');
          $abouttitle = get_sub_field('case_about_client_title');
          $about = get_sub_field('case_about_client'); ?>


          <div class="container-fluid case_client">
            <div class="row wrapper">
              <div class="col-md-5">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $clientpre; ?></p>
                </div>
                <div class="row">
                  <img class="client_logo" src="<?php echo $clientlogo['url']; ?>" alt="<?php echo $clientlogo['alt'] ?>"/>
                  <a href="<?php echo $clienturl; ?>" class="case_link" target="_blank"><?php echo $clienturltext; ?></a>
                </div>
              <div class="row stroke_position_case">
                <div class="stroke_case"></div>
                <p class="pre_client"><?php echo $clientservice; ?></p>
              </div>
              <div class="client_cat">

                <?php
                  foreach((get_the_category($post->ID)) as $category){
                    echo $category->name.", ";
                  }
                ?>
              </div>

              </div>
              <div class="col-md-7 client_about">
                <h2><?php echo $abouttitle; ?></h2>
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

          <div class="container-fluid goal_line">
            <div class="row wrapper">
              <div class="case_goal">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $pregoal; ?></p>
                </div>
                <div class="goal_text">
                  <h2><?php echo $goaltitle; ?></h2>
                  <p><?php echo $goaltext; ?></p>
                </div>
              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_strategi' ):

        	$strategititle = get_sub_field('case_strategi_title');
          $strategitext = get_sub_field('case_strategi_text'); ?>

          <div class="container-fluid strategi_line">
            <div class="strategi_dots" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/dot.png');">
            </div>
            <div class="wrapper">
              <div class="row case_strategi">
                <h2 class="h2_case"><?php echo $strategititle; ?></h2>
                <p><?php echo $strategitext; ?></p>
              </div>
              <div class="row justify-content-center">
    <?php // check if the nested repeater field has rows of data
        	if( have_rows('case_strategi_box') ):
			 	       // loop through the rows of data
			         while ( have_rows('case_strategi_box') ) : the_row(); ?>

                <div class="case_strategi_img">
                  <img alt="strategi ikon" src="<?php the_sub_field('case_strategi_icon'); ?>" />
                </div>
            <?php	       endwhile; ?>

              <?php	  endif; ?>

              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_social_media' ):

          $presome = get_sub_field('case_pre_some');
          $sometitle = get_sub_field('case_some_title');
          $sometext = get_sub_field('case_some_text'); ?>

          <div class="container-fluid">
            <div class="case_some">
              <div class="row wrapper case_some_content">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $presome; ?></p>
                </div>
                <div class="case_some_text">
                  <h2 class="h2_case"><?php echo $sometitle; ?></h2>
                  <p><?php echo $sometext; ?></p>
                </div>
              </div>

              <div class="row case_some_wrapper">
    <?php // check if the nested repeater field has rows of data
        	if( have_rows('case_some_example') ):
			 	       // loop through the rows of data
			         while ( have_rows('case_some_example') ) : the_row();
                  $somexamptitle = get_sub_field('case_some_example_title'); ?>
                <div class="row case_some_ex">
                <div class="case_some_empty">
                </div>
                <div class="case_some_half">
                  <div class="row stroke_position_case">
                    <div class="stroke_case"></div>
                    <p class="pre_client"><?php echo $somexamptitle; ?></p>
                  </div>
                  <img alt="social media" src="<?php the_sub_field('case_some_example_image'); ?>" />
                </div>
                </div>
            <?php	       endwhile; ?>

              <?php	  endif; ?>

              </div>
        </div>
      </div>

    <?php elseif( get_row_layout() == 'case_rekrutering' ):

            $prerekru = get_sub_field('case_pre_rekrutering');
            $rekrutitle = get_sub_field('case_rekru_title');
            $rekrutext = get_sub_field('case_rekru_text');
            $rekruvideo = get_sub_field('case_rekru_embed');
            $yt_thumbnail = get_sub_field('yt_thumbnail');
            $yt_play_button = get_sub_field('yt_play_button');?>

            <div class="container-fluid rekru_wrapper">
              <div class="row rekru">
                <div class="rekru_dots" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/dot.png');">
                </div>
                <div class="col-lg-6 d-flex justify-content-end align-items-center">
                  <div class="rekru_content">
                    <div class="row stroke_position_case">
                      <div class="stroke_case"></div>
                      <p class="pre_client"><?php echo $prerekru; ?></p>
                    </div>
                    <div class="rekru_text">
                      <h2 class="h2_case"><?php echo $rekrutitle; ?></h2>
                      <p><?php echo $rekrutext; ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="rekru_video">
                  <div id="thumbnail_container" class="thumbnail_container">
                    <img src="<?php echo $yt_thumbnail ?>" class="thumbnail" id="thumbnail"></div>
                   <a class="start-video"><img width="64" src="<?php echo $yt_play_button ?>" ></a>
                  <?php
                   // get iframe HTML
                   $iframe = get_sub_field('case_rekru_embed');
                   // use preg_match to find iframe src
                   preg_match('/src="(.+?)"/', $iframe, $matches);
                   $src = $matches[1];


                   // add extra params to iframe src
                   $params = array(
                       'controls'    => 1,
                       'hd'        => 1,
                       'autohide'    => 0,
                       'autoplay'  => 0,
                       'mute'  => 1,
                       'loop'  => 1,
                       'rel' => 0,
                       'showinfo' => 0,
                       'modestbranding' => 1,
                   );

                   $new_src = add_query_arg($params, $src);

                   $iframe = str_replace($src, $new_src, $iframe);


                   // add extra attributes to iframe html
                   $attributes = 'frameborder="0"';

                   $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                   // echo $iframe
echo $iframe;
                   ?>


                  </div>
                </div>
              </div>
            </div>

    <?php elseif( get_row_layout() == 'case_branding' ):

            $prebrand = get_sub_field('case_pre_branding');
            $brandtitle = get_sub_field('case_branding_title');
            $brandtext = get_sub_field('case_branding_text');
            $brandgallery = get_sub_field('case_branding_gallery'); ?>

            <div class="container-fluid">
              <div class="row brand">
                <div class="col-lg-5 d-flex justify-content-end align-items-center">
                  <div class="brand_content">
                    <div class="row stroke_position_case">
                      <div class="stroke_case"></div>
                      <p class="pre_client"><?php echo $prebrand; ?></p>
                    </div>
                    <div class="rekru_text">
                      <h2 class="h2_case"><?php echo $brandtitle; ?></h2>
                      <p class=""><?php echo $brandtext; ?></p>
                      <div id="customNav"></div>
                      <div class="slider-counter">

                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-7 align-items-center">
                  <div class="orange_square_case"></div>
                  <div> <img class="iphone_wrapper" src="http://xn--kronbr-tua.dk/wp-content/uploads/2019/03/iphone.svg" alt="iphone"> </div>
                   <div id="info" class="owl-carousel slider owl-theme carousel_2 ">
                      <?php foreach( $brandgallery as $brandgallery ): ?>
                        <img alt="brand image" class="brand_img" src="<?php echo $brandgallery['url'] ; ?>"/>

                       <?php endforeach; ?>
                  </div>

                </div>
              </div>
            </div>

    <?php elseif( get_row_layout() == 'case_results' ):

            $resultitle = get_sub_field('case_results_title');
            $resultext = get_sub_field('case_results_text'); ?>

            <div class="container-fluid">
              <div class="row wrapper">
                <div class="case_results">
                  <div class="results_text">
                    <h2 class="h2_case"><?php echo $resultitle; ?></h2>
                    <p><?php echo $resultext; ?></p>
                  </div>
                </div>
              </div>
            </div>



  <?php endif;

    endwhile;

  else :

    // no layouts found

  endif;

?>

<?php get_footer('case'); ?>


<script>

/* Logo transition script */
$(window).scroll(function() {
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();
	if (scroll >= windowHeight - 80) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

$(window).scroll(function() {
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();
	if (scroll >= windowHeight - 80) {
$(".input").addClass("out_black2");
    } else {
        $(".input").removeClass("out_black2");
    }
});

$(window).scroll(function() {
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();
	if (scroll >= windowHeight - 80) {
$(".search").addClass("search_black");
    } else {
        $(".search").removeClass("search_black");
    }
});

$(window).scroll(function() {
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();
	if (scroll >= windowHeight - 80) {
$(".close_case").addClass("menu_black");
    } else {
        $(".close_case").removeClass("menu_black");
    }
});


ScrollReveal().reveal('.client_image', { distance: '250px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.stroke_position_case', { distance: '250px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.case_some_ex', { distance: '250px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.case_link', { distance: '250px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.h2_case', { distance: '350px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.client_logo', { distance: '450px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('p', { distance: '450px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.post-categories', { distance: '450px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.case_strategi_img', { distance: '450px', easing: 'ease-in-out', duration: 700});
</script>
