<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->
<div class="hero">

	<?php $hero_image = get_field( 'hero_image' ); ?>
	<?php if ( $hero_image ) { ?>
		<img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
	<?php } ?>

	<div class="hero_info">
		<h1><?php the_field('hero_title'); ?></h1>
		<p><?php the_field('hero_tekst'); ?></p>
		<button class="calltoaction" type="button" name="button">
			<a class="hero_button" href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?></a>
			<svg id="arrowright" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10px" height="30px" viewBox="0 0 50 80" xml:space="preserve">
    <polyline fill="none" stroke="#FFFFFF" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" points="
		0.375,0.375 45.63,38.087 0.375,75.8 "/>
  	</svg>
		</button>
	</div>

</div>

<div class="case">

</div>

<?php get_footer(); ?>
