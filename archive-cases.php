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
        <a class="case_card_content" href="<?php the_permalink(); ?>" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">

            <?php $image = get_field('client_logo_neg'); if( !empty($image) ): ?>
            <img alt="client logo" class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>

          <h2 class="case_card_h2"><?php the_field('case_headline');?></h2>

          <div class="category_wrapper">
          <div class="cases_tags">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
              foreach($posttags as $tag) {
                echo $tag->name . ' ';
              }
            }
            ?> </div>

          <div>
            <?php
            foreach((get_the_category()) as $category){
              echo $category->name.", ";
            }
            ?>
          </div>



          </div></a>

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
                      'next_text'    => ("<img src='http://xn--kronbr-tua.dk/wp-content/themes/change_dk/images/arrow_right.svg'>"),
                      'prev_text'    => ("<img src='http://xn--kronbr-tua.dk/wp-content/themes/change_dk/images/arrow_left.svg'>"),
                  ) );
              ?>
              </div>

              <?php wp_reset_postdata(); ?>

</div>
</div>

<?php get_footer();?>

<script type="text/javascript">

ScrollReveal().reveal('.dark', { distance: '350px', opacity: 0.5 });
ScrollReveal().reveal('.stroke', { distance: '450px', opacity: 0.5 });
ScrollReveal().reveal('.case_card_content', { distance: '650px', opacity: 0.5 });
ScrollReveal().reveal('.pagination', { distance: '450px', opacity: 0.5 });

</script>
