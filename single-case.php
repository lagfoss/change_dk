<?php
/*
Template Name: Cases
Template Post Type: cases
*/
?>

<?php get_header('case'); ?>
<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>

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
                $categories = get_the_category('');
                $separator = '
                 ';
                $output = '';
                if ( ! empty( $categories ) ) {
                  foreach( $categories as $category ) {
                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                  }
                  echo trim( $output, $separator );
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


  <?php elseif( get_row_layout() == 'case_client_banner' ):
  	$clientimagebanner = get_sub_field('case_image_banner'); ?>
    <img class="container-fluid case_image_banner" src="<?php echo $clientimagebanner; ?>" alt="<?php echo $alt_text; ?>">


  <?php elseif( get_row_layout() == 'case_text' ):

        	$stroketext = get_sub_field('case_stroke_text');
          $texttitle = get_sub_field('case_text_title');
          $texttext = get_sub_field('case_text_text'); ?>

          <div class="container-fluid">
            <div class="row wrapper">
              <div class="case_text">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $stroketext; ?></p>
                </div>
                <div class="case_text_area">
                  <h2><?php echo $texttitle; ?></h2>
                  <p><?php echo $texttext; ?></p>
                </div>
              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_strategi' ):

        	$strategititle = get_sub_field('case_strategi_title');
          $strategitext = get_sub_field('case_strategi_text'); ?>

          <div class="container-fluid strategi">
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
                  <img alt="<?php echo $alt_text; ?>" src="<?php the_sub_field('case_strategi_icon'); ?>" />
                </div>
            <?php	       endwhile; ?>

              <?php	  endif; ?>

              </div>
            </div>
          </div>

  <?php elseif( get_row_layout() == 'case_social_media' ): ?>

          <div class="container-fluid">
            <div class="case_some">

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
                  <img alt="<?php echo $alt_text; ?>" src="<?php the_sub_field('case_some_example_image'); ?>" />
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
                    <img src="<?php echo $yt_thumbnail ?>" class="thumbnail" alt="<?php echo $alt_text; ?>" id="thumbnail"></div>
                   <a class="start-video"><img width="64" alt="<?php echo $alt_text; ?>" src="<?php echo $yt_play_button ?>" ></a>
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
                <div class="col-lg-6 d-flex justify-content-end align-items-center">
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
                <div class="col-lg-6 pr_wrapper align-items-center">
                  <div class="orange_square_case"></div>
                  <div> <img class="iphone_wrapper" src="<?php echo get_bloginfo('template_directory'); ?>/images/iphone_new.svg" alt="<?php echo $alt_text; ?>"> </div>
                   <div id="info" class="owl-carousel slider owl-theme carousel_2 ">
                      <?php foreach( $brandgallery as $brandgallery ): ?>
                        <img alt="<?php echo $alt_text; ?>" class="brand_img" src="<?php echo $brandgallery['url'] ; ?>"/>

                       <?php endforeach; ?>
                  </div>

                </div>
              </div>
            </div>

    <?php elseif( get_row_layout() == 'logo_design' ):
            $logotext = get_sub_field('logo_stroke_text'); ?>

            <div class="container-fluid">
              <div class="row wrapper logo_design">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $logotext; ?></p>
                </div>
                <div class="logo_ex">
                  <img alt="Logo" src="<?php the_sub_field('logo_img'); ?>" />
                </div>
              </div>
            </div>

          <?php elseif( get_row_layout() == 'font' ):
                  $fonttext = get_sub_field('font_stroke_text');
                  $fontexamples = get_sub_field('font_examples'); ?>

                  <div class="container-fluid">
                    <div class="wrapper font_design">
                      <div class="row stroke_position_case">
                        <div class="stroke_case"></div>
                        <p class="pre_client"><?php echo $fonttext; ?></p>
                      </div>
                      <div class="font_examples">
                        <img src="<?php echo $fontexamples ?>" alt="<?php echo $alt_text; ?>">
                      </div>
                    </div>
                  </div>

          <?php elseif( get_row_layout() == 'farver' ):
                  $colortext = get_sub_field('color_stroke_text'); ?>

                  <div class="container-fluid">
                    <div class="row wrapper color_design">
                      <div class="row stroke_position_case">
                        <div class="stroke_case"></div>
                        <p class="pre_client"><?php echo $colortext; ?></p>
                      </div>
                      <div class="color_wrapper">
                        <?php // check if the nested repeater field has rows of data
                            	if( have_rows('color_examples') ):
                    			 	       // loop through the rows of data
                    			         while ( have_rows('color_examples') ) : the_row();
                                      $colorname = get_sub_field('color_name');
                                      $colorhex = get_sub_field('color_hex'); ?>
                                    <div class="color_examples">
                                      <div class="color_color" style="background-color:<?php the_sub_field('color_picker'); ?>"></div>
                                      <p class="color_name"><?php echo $colorname; ?></p>
                                      <p class="color_hex"><?php echo $colorhex; ?></p>
                                    </div>
                                <?php	       endwhile; ?>

                                  <?php	  endif; ?>

                      </div>
                    </div>
                  </div>

    <?php elseif( get_row_layout() == 'design_examples' ):
            $designtext = get_sub_field('design_stroke_text'); ?>

            <div class="container-fluid">
              <div class="row wrapper design_ex">
                <div class="row stroke_position_case">
                  <div class="stroke_case"></div>
                  <p class="pre_client"><?php echo $designtext; ?></p>
                </div>
                <div class="design_img">
                  <img alt="<?php echo $alt_text; ?>" src="<?php the_sub_field('design_img'); ?>" />
                </div>
              </div>
            </div>

    <?php elseif( get_row_layout() == 'separation_line' ): ?>

            <div class="container-fluid">
              <div class="row separation_line"></div>
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

/* Logo transition script */
$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".input").addClass("out_black2");
    } else {
        $(".input").removeClass("out_black2");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".menubtn").addClass("menu_black");
    } else {
        $(".menubtn").removeClass("menu_black");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".header").addClass("out_white");
    } else {
        $(".header").removeClass("out_white");
    }
});


ScrollReveal().reveal('.stroke_position_case', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_hero h1', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_client', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.client_image', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.separation_line', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_strategi', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.strategi_dots', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_strategi_img', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_text_area', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_some_half', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.rekru_wrapper', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.brand', { distance: '250px', easing: 'ease-in-out', duration: 900});
ScrollReveal().reveal('.case_results', { distance: '250px', easing: 'ease-in-out', duration: 900});

</script>
