<?php if( have_rows('case_slider') ): ?>

  <ul class="slides">

    <?php while( have_rows('case_slider') ): the_row();

    // vars
    $title = get_sub_field('case_title');
    $category = get_sub_field('case_category');
    $text = get_sub_field('case_text');
    $button = get_sub_field('case_button_text');
    $link = get_sub_field('case_button_url');
    $image = get_sub_field('case_image');

    ?>

    <li class="slide">
      <div class="row">
        <div class="col-7 order-2 case_img style="background-image:url(<?php the_field('hero_image'); ?>);"">

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

      </div>

      <div class="col-3 order-1 case_info">
        <p>CASE:</p>
      <h2><?php echo $title; ?></h2>
      <p class="cat"><?php echo $category; ?></p>
      <p><?php echo $text; ?><p>
        <button type="button" name="button"><a class="hero_button" href="<?php echo $link; ?>"><?php echo $button; ?> &#8594;</a></button>
    </div>
    </div>

    </li>

  <?php endwhile; ?>

</ul>

<?php endif; ?>



<?php
   $params = array('posts_per_page' => 10,'orderby' => 'menu_order',
   'order' => 'ASC', 'post_type' => 'products');
   $query = new WP_Query($params);
   ?>
    <?php if ($query->have_posts()) : ?>
    <?php $counter = 01;?>
    <?php while ($query->have_posts()) :
      $query->the_post(); ?>
    <div class="product_content">
      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <a href="<?php the_permalink(); ?>" class="product_slider_img" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;"></a>
      <?php $counter++; // add one per row ?>
      <a class="product_link" href="<?php the_permalink(); ?>">
        <?php the_title();?></a>
      <p><?php the_excerpt(); ?></p>
      <a class="btn" href="<?php the_permalink(); ?>"><?php the_field('products_btn_text');?></a>
    </div>

  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

  <?php else:  ?>

  <li>
  <?php _e( 'No cases' ); ?>
  <?php endif; ?>
