<?php
/*
Template Name: Team
Template Post Type: team
*/
?>
<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>


        <div class="wrapper_single_team">
          <div class="row">

          <div class="col-md-4 team_single_left">
            <div class="single_team_info">


            <h1 class="single_team_name"><?php the_field('team_single_name') ?></h1>
            <p class="single_team_title"><?php the_field('team_single_title') ?></p>
            <p class="single_team_text"><?php the_field('team_single_text') ?></p>
            <a href="<?php the_field('team_single_phone') ?>" class="single_team_phone"><?php the_field('team_single_phone') ?></a>
            <a href="<?php the_field('team_single_mail') ?>" class="single_team_mail"><?php the_field('team_single_mail') ?></a>

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
</div>

          <div class="col-md-8 team_single_right">
            <img class="single_team_image" src="<?php the_field('team_single_img') ?>" alt="">
            <div class="flex_wrapper_team team_next_employee">
              <div class="test">
              <?php $next_post = get_adjacent_post(false, '', false); ?>
              <?php if ( !empty($next_post) ) {  ?>
              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>



                <a class="team_next_employee_content" href="<?php echo get_permalink( $next_post->ID ); ?>" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
                      <?php $image = get_field('client_logo_neg', $next_post->ID); if( !empty($image) ): ?>
                        <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                      <?php endif; ?>

             </a>
             <p class="team_next_employee_text">NÆSTE <br> Anders Jacobsen</p>
             </div>

             <?php }

             else {  ?>
   <?php  } ?>



            </div>
          </div>
</div>

        </div>





</body>
