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
			<a class="hero_button" href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?> &#8594;</a>

		</button>
	</div>

</div>

<div class="case">
	<?php

$images = get_field('case_slider');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</div>

<?php get_footer(); ?>
