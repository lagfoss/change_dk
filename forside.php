<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->

<div class="hero" style="background-image:url(<?php the_field('hero_image'); ?>);">

	<div class=" hero_info">
		<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
		<p class="white"><?php the_field('hero_text'); ?></p>

		<button class="calltoaction" type="button" name="button">
			<a class="hero_button" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> &#8594;</a>
		</button>
	</div>

<div class="watchourshowreel">
	<img src="http://xn--kronbr-tua.dk/wp-content/uploads/2019/01/play-circle-copy.png"
     class="play-circle-Copy">
		<p class="white Watch">Watch our:</p>
		<p class="white Showreel">Showreel</p>
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
		        <div class="col-7 order-2 case_img">

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

<div class="container-fluid">
<div class="row">
	<div class="col-6 ourprocess" style="background-image:url(<?php the_field('process_image'); ?>);">
	</div>

	<div class="col-6 process">
		<h2 id="process-headline"><?php the_field('process_title'); ?></h2>
		<div class="process-box col">
			<p class="process-steps"><span class="inner">1</span></p>
			<div class="process-content">
				<h6 class="process-title">Analysér:</h6>
				<p>Med udgangspunkt i research og opstartsmøde, analyserer vi organisationens målgrupper, platforme, medier og interne forhold. Vi identificerer muligheder og trusler, og udarbejder anbefalinger.</p>
			</div>
		</div>

		<div class="process-box col">
			<p class="process-steps"><span class="inner">2</span></p>
			<div class="process-content">
				<h6 class="process-title">Design:</h6>
				<p>På baggrund af anbefalingerne fra analysen og organisationens forretningsstrategi, designer vi en løsning, der understøtter dine målsætninger med budskaber og aktiviteter.</p>
			</div>
		</div>

		<div class="process-box col">
			<span class="process-steps"><span class="inner">3</span></span>
			<div class="process-content">
				<h6 class="process-title">Kommunikér:</h6>
				<p>Vi implementerer løsningen og sikrer at du kommer i mål med det færdigudviklede design - om du vælger os eller andre til eksekveringen, eller ønsker at stå for det hele selv.</p>
			</div>
		</div>
	</div>
</div>
</div>


<div class="what-can-we-do">

	<div class="row">
			<div class="col-sm">
						<div class="col-sm-12">
							<h2 class="wcwd_header"><?php the_field('wcwd_header'); ?></h2>
							<p class="wcwd_text"><?php the_field('wcwd_text'); ?></p>
						</div>
				</div>
			<div class="col-sm hover">

					</a>
					<div class="wcwd-content col-sm-12">
						<?php if( get_field('brandstrategi_img') ): ?>
						<img src="<?php the_field('http://xn--kronbr-tua.dk/wp-content/uploads/2019/01/linkedin.svg'); ?>" />
						<?php endif; ?>
						<h6 class="wcwd_headline"><?php the_field('brandstrategi_header'); ?></h6>
						<p class="wcwd_text"><?php the_field('brandstrategi_text'); ?></p>
					</div>
			</div>
		<div class="col-sm hover">

				</a>
				<div class="wcwd-content col-sm-12">
					<h6 class="wcwd_headline"><?php the_field('kommunikationsdesign_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('kommunikationsdesign_text'); ?></p>
				</div>
		</div>

		<div class="col-sm hover">

				</a>
				<div class="wcwd-content col-sm-12">
					<h6 class="wcwd_headline"><?php the_field('social_media_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('social_media_text'); ?></p>
				</div>
		</div>

		<div class="col-sm hover">
				<div class="wcwd-content col-sm-12">
					<h6 class="wcwd_headline"><?php the_field('pressemeddelelse_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('pressemeddelelse_text'); ?></p>
				</div>
		</div>

		<div class="col-sm hover">
				<div class="wcwd-content col-sm-12">
					<h6 class="wcwd_headline"><?php the_field('kommunikationsstrategi_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('kommunikationsstrategi_text'); ?></p>
				</div>
		</div>

		<button class="calltoaction" type="button" name="button">
			<a class="hero_button" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> &#8594;</a>
		</button>
</div>

<button class="calltoaction" type="button" name="button">
	<a class="wcwd_button" href="<?php the_field('wcwd_button_url'); ?>"><?php the_field('wcwd_button_text'); ?> &#8594;</a>
</button>
</div>

<?php get_footer(); ?>
