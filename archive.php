<?php get_header();?>

    <h1>HVIS DU KAN SE DET HER VIRKER SKIDTET!!!!!!!!!!</h1>


    <?php

      global $wp_query;
      $args = array(
     'post_type' => 'team',
     'posts_per_page' => 10,
     'orderby' => 'publish_date',
     'order' => 'DESC',
      );

      $wp_query = new WP_Query($args);
      while ($wp_query->have_posts()) : $wp_query->the_post();  ?>

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

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
