<?php /* Template Name: Kontakt */ ?>

<?php get_header(kontakt); ?>

  <div class="container-fluid">
    <div class="row wrapper_contact contact">
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
      <div class="col-md-6 d-flex align-items-end contact_address_wrapper">
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
        <div class="col-md-6 stroke_position_contact_map">
          <div class="stroke_contact_map"></div>
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
    </div>

    <div class="acf-map">
	     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2265.2671592411302!2d10.38604231559358!3d55.4056910261771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464d2001c05ee5b7%3A0x9b6cec66bcaafc61!2sChange+%7C+PR+%26+Kommunikation+%7C+Bureau+4.0!5e0!3m2!1sda!2sdk!4v1554291492329!5m2!1sda!2sdk" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>


  </div>

<?php get_footer(kontakt); ?>

<script>

  ScrollReveal().reveal('.contact_intro h1', { distance: '350px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.stroke_position_contact', { distance: '450px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.contact_intro p', { distance: '550px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.contact_form', { distance: '850px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.contact_address h2', { distance: '450px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.contact_address p', { distance: '650px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.stroke_position_contact_map', { distance: '550px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.contact_map_dots', { distance: '550px', easing: 'ease-in-out', duration: 900 });
  ScrollReveal().reveal('.acf-map', { distance: '650px', easing: 'ease-in-out', duration: 900 });

</script>
