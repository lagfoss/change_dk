<?php get_header();?>

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
    <?php
$params = array('posts_per_page' => 10,'orderby' => 'menu_order',
'order' => 'ASC', 'post_type' => 'cases');
$query = new WP_Query($params);
?>

          <?php if ($query->have_posts()) : ?>



              <?php while ($query->have_posts()) :
        $query->the_post(); ?>

                  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                  <a class="case_card_link" href="<?php the_permalink(); ?>"><div class="case_card_content"  style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">


                        <?php $image = get_field('client_logo_neg'); if( !empty($image) ): ?>
                        <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        <?php endif; ?>

                        <h2 class="case_card_h2"><?php the_field('case_headline');?></h2>

                        <div class="category">
                        <h3></h3>
                        <?php the_category(); ?>
                        <?php the_tags( ' ' ); ?>
                        </div>







                </div></a>

                <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                    <?php else:  ?>

                        <?php _e( 'No cases' ); ?>

                          <?php endif; ?>
  </div>
</div>

<?php get_footer();?>
