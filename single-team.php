<?php
/*
Template Name: Team
Template Post Type: team
*/
?>
<?php get_header(kontakt); ?>
<body <?php body_class(whitebg); ?>>


<!-- DESKTOP START  -->

  <div class="wrapper_single_team desktop_single_team">
    <div class="row">
      <div class="col-md-3 team_single_left">
        <div class="single_team_info">
          <h1 class="single_team_name"><?php the_field('team_single_name') ?></h1>
          <p class="single_team_title"><?php the_field('team_single_title') ?></p>
          <p class="single_team_text"><?php the_field('team_single_text') ?></p>
          <a href="tel:<?php the_field('team_single_phone') ?>" class="single_team_phone"><?php the_field('team_single_phone') ?></a>
          <a href="mailto:<?php the_field('team_single_mail') ?>" class="single_team_mail"><?php the_field('team_single_mail') ?></a>

          <?php if( have_rows('team_single_some') ): ?>
          <?php while( have_rows('team_single_some') ): the_row();
          $image = get_sub_field('team_single_some_img');
          $link = get_sub_field('team_single_some_link');
          $name = get_sub_field('team_single_some_name');

          ?>

            <?php if( $link ): ?>
              <a href="<?php echo $link; ?>">
              <?php endif; ?>
              <div class="single_team_some_wrapper">
                 <img href="<?php echo $link; ?>" class="single_team_some_icon" src="<?php echo $image; ?>" /><?php if( $link ): ?>
                <p class="single_team_some_text"><?php echo $name; ?> </p> </a>
              </div>
              <?php endif; ?>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
      </div>

      <div class="col-md-7 team_single_right">
        <img class="single_team_image" src="<?php the_field('team_single_img') ?>" alt="">
      </div>

      <div class="col-md-2 desktop_single_team_next_employee_wrapper">
        <div class="flex_wrapper_team team_next_employee">
          <?php $next_post = get_adjacent_post(false, '', false); ?>
          <?php if ( !empty($next_post) ) {  ?>
          <a class="next_employee_wrapper team_next_employee_content" href="<?php echo get_permalink( $next_post->ID ); ?>">
            <div class="orange_filter"></div>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>

            <div class="employee_img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
            </div>
          </a>
          <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="team_next_employee_wrapper">
            <p class="team_next_employee_next">NÆSTE:</p>
            <p class="team_next_employee_name"><?php the_field('team_single_name', $next_post->ID) ?></p>
            <img alt="calltoaction arrow" src="<?php the_field('team_single_arrow'); ?>" />
          </a>
        </div>

        <?php }
         else {  ?>
           <div class="flex_wrapper_team team_next_employee">
             <a class="next_employee_wrapper team_next_employee_content" href="<?php echo get_permalink( 1791 ); ?>">
               <div class="orange_filter"></div>
               <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(1791), 'full' );?>

               <div class="employee_img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
               </div>
             </a>
             <a href="<?php echo get_permalink( 1791 ); ?>" class="team_next_employee_wrapper">
               <p class="team_next_employee_next">NÆSTE:</p>
               <p class="team_next_employee_name"><?php the_field('team_single_name', 1791) ?></p>
               <img alt="calltoaction arrow" src="<?php the_field('team_single_arrow'); ?>" />
             </a>
           </div>

        <?php  } ?>

      </div>
    </div>
  </div>
</div>

<!-- DESKTOP SLUT  -->

<!-- TABLET START  -->

<div class="wrapper_single_team tablet">
  <div class="row">
    <div class="col-md-4 team_single_left">
      <div class="single_team_info">
        <h1 class="single_team_name"><?php the_field('team_single_name') ?></h1>
        <p class="single_team_title"><?php the_field('team_single_title') ?></p>
        <p class="single_team_text"><?php the_field('team_single_text') ?></p>
        <a href="tel:<?php the_field('team_single_phone') ?>" class="single_team_phone"><?php the_field('team_single_phone') ?></a>
        <a href="mailto:<?php the_field('team_single_mail') ?>" class="single_team_mail"><?php the_field('team_single_mail') ?></a>

        <?php if( have_rows('team_single_some') ): ?>
        <?php while( have_rows('team_single_some') ): the_row();
        $image = get_sub_field('team_single_some_img');
        $link = get_sub_field('team_single_some_link');?>

          <?php if( $link ): ?>
            <a href="<?php echo $link; ?>">
            <?php endif; ?>
              <img class="single_team_some_icon" src="<?php echo $image; ?>" /><?php if( $link ): ?></a>
            <?php endif; ?>

          <?php endwhile; ?>
          <?php endif; ?>

          <div class="flex_wrapper_team team_next_employee">
            <?php $next_post = get_adjacent_post(false, '', false); ?>
            <?php if ( !empty($next_post) ) {  ?>
            <a class="next_employee_wrapper team_next_employee_content" href="<?php echo get_permalink( $next_post->ID ); ?>">
              <div class="orange_filter"></div>
              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>

              <div class="employee_img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
              </div>
            </a>
            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="team_next_employee_wrapper">
              <p class="team_next_employee_next">NÆSTE:</p>
              <p class="team_next_employee_name"><?php the_field('team_single_name', $next_post->ID) ?></p>
              <img alt="calltoaction arrow" src="<?php the_field('team_single_arrow'); ?>" />
            </a>
          </div>

          <?php }
           else {  ?>
             <div class="flex_wrapper_team team_next_employee">
               <a class="next_employee_wrapper team_next_employee_content" href="<?php echo get_permalink( 1791 ); ?>">
                 <div class="orange_filter"></div>
                 <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(1791), 'full' );?>

                 <div class="employee_img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                 </div>
               </a>
               <a href="<?php echo get_permalink( 1791 ); ?>" class="team_next_employee_wrapper">
                 <p class="team_next_employee_next">NÆSTE:</p>
                 <p class="team_next_employee_name"><?php the_field('team_single_name', 1791) ?></p>
                 <img alt="calltoaction arrow" src="<?php the_field('team_single_arrow'); ?>" />
               </a>
             </div>

          <?php  } ?>

      </div>
    </div>

    <div class="col-md-8 team_single_right">
      <img class="single_team_image" src="<?php the_field('team_single_img') ?>" alt="">
    </div>


  </div>
</div>
</div>

<!-- TABLET SLUT  -->

<!-- MOBIL START  -->

  <div class="mobile">
    <div class="row">
      <div class="col-md-6 team_single_right">
        <img class="single_team_image" src="<?php the_field('team_single_img') ?>" alt="">
      </div>
      <div class="col-md-6 wrapper_single_team team_single_left">
        <div class="single_team_info">
          <h1 class="single_team_name"><?php the_field('team_single_name') ?></h1>
          <p class="single_team_title"><?php the_field('team_single_title') ?></p>
          <p class="single_team_text"><?php the_field('team_single_text') ?></p>
          <a href="tel:<?php the_field('team_single_phone') ?>" class="single_team_phone"><?php the_field('team_single_phone') ?></a>
          <a href="mailto:<?php the_field('team_single_mail') ?>" class="single_team_mail"><?php the_field('team_single_mail') ?></a>

          <?php if( have_rows('team_single_some') ): ?>
          <?php while( have_rows('team_single_some') ): the_row();
          $image = get_sub_field('team_single_some_img');
          $link = get_sub_field('team_single_some_link');?>
          <?php if( $link ): ?>
            <a href="<?php echo $link; ?>">
          <?php endif; ?>
            <img class="single_team_some_icon" src="<?php echo $image; ?>" /><?php if( $link ): ?></a>
          <?php endif; ?>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="flex_wrapper_team team_next_employee">
          <?php $next_post = get_adjacent_post(false, '', false); ?>
          <?php if ( !empty($next_post) ) {  ?>
          <a class="next_employee_wrapper team_next_employee_content" href="<?php echo get_permalink( $next_post->ID ); ?>">
            <div class="orange_filter"></div>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>

            <div class="employee_img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
            </div>
          </a>
          <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="team_next_employee_wrapper">
            <p class="team_next_employee_next">NÆSTE:</p>
            <p class="team_next_employee_name"><?php the_field('team_single_name', $next_post->ID) ?></p>
            <img alt="calltoaction arrow" src="<?php the_field('team_single_arrow'); ?>" />
          </a>
        </div>

          <?php }

          else {  ?>
            <div class="flex_wrapper_team team_next_employee">
              <a class="next_employee_wrapper team_next_employee_content" href="<?php echo get_permalink( 1791 ); ?>">
                <div class="orange_filter"></div>
                <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(1791), 'full' );?>

                <div class="employee_img" style="background-image: url('<?php echo $backgroundImg[0]; ?>');">
                </div>
              </a>
              <a href="<?php echo get_permalink( 1791 ); ?>" class="team_next_employee_wrapper">
                <p class="team_next_employee_next">NÆSTE:</p>
                <p class="team_next_employee_name"><?php the_field('team_single_name', 1791) ?></p>
                <img alt="calltoaction arrow" src="<?php the_field('team_single_arrow'); ?>" />
              </a>
            </div>

          <?php  } ?>
      </div>
    </div>
  </div>

  <!-- MOBIL SLUT  -->

</body>

<script type="text/javascript">
$(document).ready(function() {
  $('.whitebg .logoimg').attr('src', '<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg');


</script>
