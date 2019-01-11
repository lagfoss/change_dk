<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->

<div class="hero">

	<?php $hero_image = get_field( 'hero_image' ); ?>
	<?php if ( $hero_image ) { ?>
		<img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" />
	<?php } ?>

	<div class="hero_info">

		<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
		<p><?php the_field('hero_tekst'); ?></p>

		<button class="calltoaction" type="button" name="button">
			<a class="hero_button" href="<?php the_field('button_url'); ?>"><?php the_field('button_text'); ?> &#8594;</a>
		</button>
	<img src="img/play-circle-copy.svg"
     class="play-circle-Copy">
		<p class="Watch">Watch our:</p>
		<p class="Showreel">Showreel</p>
</div>
	</div>



</div>

<div class="case_area">

<div class="case">
<!--	<?php

	$images = get_field('case_slider');

	if( $images ): ?>
	    <div id="slider" class="flexslider">
	        <ul class="slides">
	            <?php foreach( $images as $image ): ?>
	                <li>
	                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	                    <p><?php echo $image['caption']; ?></p>
	                </li>
	            <?php endforeach; ?>
	        </ul>
	    </div>
	    <div id="carousel" class="flexslider">
	        <ul class="slides">
	            <?php foreach( $images as $image ): ?>
	                <!-- <li>
	                <li>
	                    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
	                </li>
	            <?php endforeach; ?>
	        </ul>
	    </div>
	<?php endif; ?>
-->
</div>
</div>

<?php get_footer(); ?>
