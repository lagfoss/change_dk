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
      </div>
	  </div>
  </div>
  <div class="container-fluid">
    <div class="row wrapper">
      <div class="col-md-6 contact_form">
        <?php echo do_shortcode("[contact-form-7 id=1061]") ; ?>
      </div>
      <div class="col-md-6 contact_address">

      </div>
    </div>

  </div>

<?php get_footer(kontakt); ?>
