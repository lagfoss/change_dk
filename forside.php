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
		<?php if( have_rows('case_slider') ): ?>

		  <ul class="slides">

		    <?php while( have_rows('case_slider') ): the_row();

		    // vars
		    $title = get_sub_field('case_title');
		    $category = get_sub_field('case_category');
		    $text = get_sub_field('case_text');
		    $button = get_sub_field('case_button_text');
		    $link = get_sub_field('case_button_url');
		    $image = get_sub_field('case_image');

		    ?>

		    <li class="slide">
		      <div class="row">
		        <div class="col-7 order-2 case_img style="background-image:url(<?php the_field('hero_image'); ?>);"">

		        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

		      </div>

		      <div class="col-3 order-1 case_info">
		        <p>CASE:</p>
		      <h2><?php echo $title; ?></h2>
		      <p class="cat"><?php echo $category; ?></p>
		      <p><?php echo $text; ?><p>
		        <button type="button" name="button"><a class="hero_button" href="<?php echo $link; ?>"><?php echo $button; ?> &#8594;</a></button>
		    </div>
		    </div>

		    </li>

		  <?php endwhile; ?>

		</ul>

		<?php endif; ?>


	</div>
</div>

<?php get_footer(); ?>
