<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>

  <div class="container-fluid">
    <div class="row contact">
      <div class="col-md-6 contact_intro">
        <h1 class="black"><?php the_field('contact_title'); ?></h1>
        <div class="stroke_position_contact">
          <div class="stroke_contact"></div>
        </div>
        <p class="gray"><?php the_field('contact_text'); ?></p>
      </div>
      <div class="col-md-6 contact_img">
        <div class="pink_square">
        </div>
        <!-- Image carousel -->
				<div class="owl-carousel owl-theme contact_carousel">
					<?php
						$images = get_field('contact_gallery');
						foreach ($images as $image):?>
					<div class="contact_gallery">
						<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
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

<?php get_footer(kontakt); ?>
