<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->

<div class="hero" style="background-image:url(<?php the_field('hero_image'); ?>);">

	<div class=" hero_info">
		<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
		<p><?php the_field('hero_text'); ?></p>

		<button class="calltoaction" type="button" name="button">
			<a class="hero_button" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> &#8594;</a>
		</button>
	</div>

<div class="row watchourshowreel">
	<img src="<?php echo get_bloginfo('template_directory'); ?>/images/play-circle-copy.svg"
     class="play-circle-Copy">
		<p class="Watch">Watch our:</p>
		<p class="Showreel">Showreel</p>
</div>

</div>

<div class="case_area">

	<div class="container-fluid  case">



	</div>
</div>

<?php get_footer(); ?>
