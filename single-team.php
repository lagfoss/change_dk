<?php
/*
Template Name: Team
Template Post Type: team
*/
?>

<?php get_header(); ?>
<h1>HVIS DU KAN SE DET HER VIRKER SKIDTET!!!!!!!!!!</h1>


        <div class="wrapper">
          <div class="col-md-5">
            <h2><?php get_field('team_single_name') ?></h2>
            <p><?php get_field('team_single_title') ?></p>
            <p><?php get_field('team_single_text') ?></p>
            <p><?php get_field('team_single_phone') ?></p>
            <p><?php get_field('team_single_mail') ?></p>
            <?php get_field('team_single_some') ?>
          </div>

          <div class="col-md-7">
            <img src="<?php get_field('team_single_img') ?>" alt="">
          </div>
        </div>


<?php get_footer(); ?>
