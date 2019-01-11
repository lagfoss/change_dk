<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<div class="hero">

	<?php $hero_image = get_field( 'hero_image' ); ?>
	<?php if ( $hero_image ) { ?>
		<img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
	<?php } ?>

	<div class="hero_info">
		<h1><?php the_field('hero_title'); ?></h1>
		<p><?php the_field('hero_tekst'); ?></p>
		<a class="hero_button" href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?></a>
	</div>

</div>

<div class="case">

</div>

<?php get_footer(); ?>
