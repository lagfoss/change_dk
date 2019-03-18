<?php /* Template Name: Kontakt */ ?>

<?php get_header(kontakt); ?>

  <div class="container-fluid">
    <div class="row contact">
      <div class="pink_square"></div>
      <div class="col-md-6 contact_intro col-md-push-6">
        <h1 class="big black"><?php the_field('contact_title'); ?></h1>
        <div class="stroke_position_contact">
          <div class="stroke_contact"></div>
        </div>
        <p class="gray"><?php the_field('contact_text'); ?></p>
      </div>
      <div class="col-md-6 contact_img col-md-pull-6">
        <!-- Image carousel -->
				<div class="owl-carousel owl-theme contact_carousel">
					<?php
						$images = get_field('contact_gallery');
						foreach ($images as $image):?>
					<div class="contact_gallery">
						<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
	    		</div>
    			<?php endforeach;?>
				</div>
      </div> 
	  </div>
  </div>
  <div class="container-fluid">
    <div class="row wrapper">
      <div class="col-md-6 contact_form">
        <?php echo do_shortcode("[contact-form-7 id=1061]") ; ?>
      </div>
      <div class="col-md-6 d-flex align-items-end">
        <div class="contact_address">
        <h2><?php the_field('contact_city'); ?></h2>
        <p class="gray"><?php the_field('contact_address'); ?></p>
        <p class="gray">
          <a href="tel:<?php the_field('phone_number', 'option'); ?>">
            <?php the_field('phone_number', 'option'); ?></a><br>
          <a href="mailto:<?php the_field('footer_mail', 'option'); ?>">
            <?php the_field('footer_mail', 'option'); ?></a>
        </p>
        </div>
      </div>
    </div>

  </div>
  <div class="container-fluid contact_map">
    <div class="row">
      <div class="col-md-6">
      <div class="contact_map_dots" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/dot.png');">
      </div>
      </div>
      <div class="col-md-6 stroke_position_contact_map">
        <div class="stroke_contact_map"></div>
      </div>
    </div>
    <?php

      $location = get_field('contact_map');

      if( !empty($location) ):
    ?>
    <div class="acf-map">
	     <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
     </div>
   <?php endif; ?>

  </div>

<?php get_footer(kontakt); ?>
