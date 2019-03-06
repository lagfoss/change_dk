<?php /* Template Name: Kontakt */ ?>

<?php get_header(); ?>
<body <?php body_class(whitebg); ?>>

  <div class="container-fluid">
    <div class="row wrapper">
      <div class="col-6-md contact_intro">
        <h1 class="black"><?php the_field('contact_title'); ?></h1>
        <p class="gray"><?php the_field('contact_text'); ?></p>
      </div>
      <div class="col-6-md contact_img">

      </div>
	  </div>
  </div>
  <div class="container-fluid">
    <div class="row wrapper">
        <?php echo do_shortcode("[contact-form-7 id=1061 title=Contact form 1]") ; ?>
    </div>

  </div>

<?php get_footer(kontakt); ?>
