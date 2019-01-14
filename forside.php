<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->

<div class="hero">

	<?php $hero_image = get_field( 'hero_image' ); ?>
	<?php if ( $hero_image ) { ?>
		<img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
	<?php } ?>

	<div class="col hero_info">
	<div class="hero_info">

		<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
		<p><?php the_field('hero_text'); ?></p>

		<button class="calltoaction" type="button" name="button">
			<a class="hero_button" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> &#8594;</a>
		</button>
		<div class="row test">
			<img src="images/play-circle-copy.svg"
				 class="play-circle-Copy">
				<p class="Watch">Watch our:</p>
				<p class="Showreel">Showreel</p>
		</div>

<div class="watchourshowreel">
	<img src="images/play-circle-copy.svg"
     class="play-circle-Copy">
		<p class="Watch">Watch our:</p>
		<p class="Showreel">Showreel</p>
</div>
	</div>


</div>
</div>

<div class="case_area">

	<div class="container-fluid case">

	</div>
</div>

<?php get_footer(); ?>
