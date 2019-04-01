<?php get_header();?>
<body <?php body_class(whitebg); ?>>

<div class="row">
  <div class="wrapper cases_wrap">
    <div class="col">
      <h1 class="black"><?php the_field('cases_hero_h1', 'option');?></h1>
      <div class="stroke"></div>
    </div>
  </div>
</div>

<div class="row flex">
  <div class="flex_wrapper">


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


      <?php wp_reset_postdata(); ?>
