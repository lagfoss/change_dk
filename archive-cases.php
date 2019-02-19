<?php get_header();?>
<body <?php body_class(whitebg); ?>>

<div class="row">
  <div class="wrapper cases_wrap">
    <div class="col">
      <h1 class="dark "><?php the_field('cases_hero_h1', 'option');?></h1>
      <div class="stroke"></div>
    </div>
  </div>
</div>

<div class="row flex">
  <div class="flex_wrapper">


      <!-- Case images -->

    <?php

      global $wp_query;
      $paged = get_query_var('paged') ? get_query_var('paged') : 1;
      $args = array(
     'post_type' => 'cases',
     'posts_per_page' => 4,
     'paged' => $paged,
     'orderby' => 'publish_date',
     'order' => 'DESC',
      );

      $wp_query = new WP_Query($args);
      while ($wp_query->have_posts()) : $wp_query->the_post();  ?>

      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <a class="case_card_link" href="<?php the_permalink(); ?>">
          <div class="case_card_content"  style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">

          <img id="cases_slide" src="<?php echo get_bloginfo('template_directory'); ?>/images/btn_arrow_white.svg">

          <div class="">
            <?php $image = get_field('client_logo_neg'); if( !empty($image) ): ?>
            <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>

          <h2 class="case_card_h2"><?php the_field('case_headline');?></h2>

          <div class="category_wrapper">
          <div class="cases_tags"><?php the_tags( ' ', ', ', '<br />' ); ?> </div>

          <?php the_category(); ?>


          </div></div></a>

              <?php endwhile; ?>

              <div class="pagination">

              <?php

                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $wp_query->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => 'paged=%#%',
                      'show_all'     => true,
                      'type'         => 'plain',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      'prev_text'    => ("<img src='echo get_template_directory()/images/arrow_left.svg'>"),
                      'next_text'    => ("<img src='echo get_template_directory()/images/arrow_right.svg'>") ,
                  ) );
              ?>
              </div>

              <script type="text/javascript">
              var prev = document.querySelector('prev');

              prev.style.backgroundImage = '<?php echo get_template_directory() ?>/images/arrow_left.svg';

              document.querySelector("prev").style.backgroundImage = '<?php echo get_template_directory() ?>/images/arrow_left.svg';
              </script>

              <?php wp_reset_postdata(); ?>



<?php get_footer();?>
