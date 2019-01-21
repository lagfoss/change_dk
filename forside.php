<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->

<div class="hero" style="background-image:url(<?php the_field('hero_image'); ?>);">

	<div class=" hero_info">
		<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
		<p class="white"><?php the_field('hero_text'); ?></p>

			<a class="hero_button" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> <?php if( get_field('calltoaction_arrow_right') ): ?>
			<img class="" src="<?php the_field('calltoaction_arrow_right'); ?>" />
			<?php endif; ?></a>
	</div>

<div class="watchourshowreel">
	<img src="http://xn--kronbr-tua.dk/wp-content/uploads/2019/01/play-circle-copy.png"
     class="playcircle" style="width:50px;">
		<p class="white Watch">Watch our:</p>
		<p class="white Showreel">Showreel</p>
</div>

</div>

	<div class="container-fluid  case">
	<div class="row">
			<?php

			if( have_rows('case_slider') ):

			    while( have_rows('case_slider') ) : the_row();

			        ?>

							<div class="col-4 case_info">
								<p style="font-weight:bold;">CASE:</p>
							<h2><?php the_sub_field('case_title'); ?></h2>
							<p class="cat"><?php the_sub_field('case_category'); ?></p>
							<p><?php the_sub_field('case_text'); ?><p>
								<a class="case_button" href="<?php the_sub_field('case_button_url'); ?>"><?php the_sub_field('case_button_text'); ?><?php if( get_field('case_button_icon') ): ?>
								<img class="" src="<?php the_field('case_button_icon'); ?>" />
								<?php endif; ?></a>
						</div>

						<div class="col-7 case_img" style="background-image:url(<?php the_sub_field('case_image'); ?>);">

						</div>

					<?php

			    endwhile;

			endif;

			?>

	</div>
	</div>

<div class="container-fluid">
<div class="row">
	<div class="col-6 process-img" style="background-image:url(<?php the_field('process_image'); ?>);">
	</div>

	<div class="col-6 process">
		<h2><?php the_field('process_title'); ?></h2>

			<?php if( have_rows('process') ): ?>

					<?php while( have_rows('process') ): the_row();
						// vars
						$processnumber = get_sub_field('process_number');
						$processtitle = get_sub_field('process_single_title');
						$procestext = get_sub_field('process_text');
					?>
			<div class="row ourprocess">
			<div class="col-1 process-steps"><div class="dash">&#8212;</div><div class="inner"><?php echo $processnumber; ?></div></div>
    	<div class="col-11 font-weight-bold">
      	<?php echo $processtitle; ?>
      	<div class="row">
        	<div class="col-11 font-weight-normal"><?php echo $procestext; ?></div>
      	</div>
    	</div>
		<?php endwhile; ?>

<?php endif; ?>
			</div>

		</div>

	</div>
</div>

<div class="container-fluid">

	<div class="row wcwd_section">
			<div class="col-sm">
						<div class="col-sm-12 hover1">
							<h2 class="wcwd_header"><?php the_field('wcwd_header'); ?></h2>
							<p class="wcwd_text"><?php the_field('wcwd_text'); ?></p>
						</div>
				</div>

			<div class="col-sm hover">
					<div class="wcwd-content col-sm-12">
						<?php if( get_field('brandstrategi_img') ): ?>
						<img class="wcwd_img" src="<?php the_field('brandstrategi_img'); ?>" />
						<?php endif; ?>
						<h6 class="wcwd_headline"><?php the_field('brandstrategi_header'); ?></h6>
						<p class="wcwd_text"><?php the_field('brandstrategi_text'); ?></p>
					</div>
			</div>

		<div class="col-sm hover">
				<div class="wcwd-content col-sm-12">
					<?php if( get_field('kommunikationsdesign_img') ): ?>
					<img class="wcwd_img" src="<?php the_field('kommunikationsdesign_img'); ?>" />
					<?php endif; ?>
					<h6 class="wcwd_headline"><?php the_field('kommunikationsdesign_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('kommunikationsdesign_text'); ?></p>
				</div>
		</div>
	</div>

	<div class="row wcwd_section">
		<div class="col-sm hover">
				<div class="wcwd-content col-sm-12">
					<?php if( get_field('social_media_img') ): ?>
					<img class="wcwd_img" src="<?php the_field('social_media_img'); ?>" />
					<?php endif; ?>
					<h6 class="wcwd_headline"><?php the_field('social_media_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('social_media_text'); ?></p>
				</div>
		</div>

		<div class="col-sm hover">
				<div class="wcwd-content col-sm-12">
					<?php if( get_field('pressemeddelelse_img') ): ?>
					<img class="wcwd_img" src="<?php the_field('pressemeddelelse_img'); ?>" />
					<?php endif; ?>
					<h6 class="wcwd_headline"><?php the_field('pressemeddelelse_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('pressemeddelelse_text'); ?></p>
				</div>
		</div>

		<div class="col-sm hover">
				<div class="wcwd-content col-sm-12">
					<?php if( get_field('kommunikationsstrategi_img') ): ?>
					<img class="wcwd_img" src="<?php the_field('kommunikationsstrategi_img'); ?>" />
					<?php endif; ?>
					<h6 class="wcwd_headline"><?php the_field('kommunikationsstrategi_header'); ?></h6>
					<p class="wcwd_text"><?php the_field('kommunikationsstrategi_text'); ?></p>
				</div>
		</div>

</div>
	<div class="row justify-content-center">
		<a class="wcwd_button" href="<?php the_field('wcwd_button_url'); ?>"><?php the_field('wcwd_button_text'); ?> <?php if( get_field('wcwd_button_icon') ): ?>
		<img class="" src="<?php the_field('wcwd_button_icon'); ?>" />
		<?php endif; ?></a>
	</div>
</div>

<?php get_footer(); ?>
