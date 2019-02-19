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

      $loop = new WP_query (array(
     'posts_per_page' => 2,
     'paged' => get_query_var( 'paged' ),
     'orderby' => 'publish_date',
     'order' => 'DESC',
     'post_type' => 'cases',
   ));

           if ($loop->have_posts()) :
               while ($loop->have_posts()) : $loop->the_post();  ?>

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
                        </div>

                </div></a>

              <?php endwhile; ?>

              <div class="pagination">
              <?php

                  echo paginate_links( array(
                      'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                      'total'        => $loop->max_num_pages,
                      'current'      => max( 1, get_query_var( 'paged' ) ),
                      'format'       => 'paged=%#%',
                      'show_all'     => true,
                      'type'         => 'plain',
                      'end_size'     => 2,
                      'mid_size'     => 1,
                      'prev_next'    => true,
                      'prev_text'    => __( '/images/arrow_left.svg', 'text-domain' ) ,
                      'next_text'    => __( '/images/arrow_right.svg', 'text-domain' ) ,
                      'add_args'     => true,
                      'add_fragment' => '',
                  ) );
              ?>
              </div>

              <?php wp_reset_postdata(); ?>

                    <?php else:  ?>

                        <?php _e( 'No cases' ); ?>

                          <?php endif; ?>

                          <?php ?>



<?php get_footer();?>
