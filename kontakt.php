<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>

  <div class="container-fluid">
    <div class="row contact">
      <div class="col-md-6 justify-content-end contact_intro">
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
        <?php echo do_shortcode("[contact-form-7 id=1061 title=Contact form 1]") ; ?>
    </div>

  </div>

<?php get_footer(kontakt); ?>
