<?php /*Template Name: Forside*/?>

<?php get_header(); ?>

<!-- Hero image, text and call to action -->
<?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>


	<div class="hero" style="background-image:url(<?php the_field('hero_image'); ?>);">
		<div class="container-fluid wrapper load-hidden">
			<div class="row">
		<div class="col-md-7">
		<div class="hero_info">
			<h1 class="hero_title"><?php the_field('hero_title'); ?></h1>
			<p class="hero_text white"><?php the_field('hero_text'); ?></p>

			<a class="hero_button" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?> <?php if( get_field('calltoaction_arrow_right') ): ?>
				<img alt="<?php echo $alt_text; ?>" src="<?php the_field('calltoaction_arrow_right'); ?>" />
				<?php endif; ?></a>
		</div>
		</div>

		<!-- Showreel on hero -->
		<div class="col-md-5">
		<?php
		if( get_field('showreel_toggle') )
			$value = get_field('showreel_toggle');
			?>
			<?php  if( $value == true ) : ?>

					<div class="row justify-content-center watchourshowreel">
						<div class="col-2">
						<a href="#modal" class="open-modal" rel="modal:open nofollow">
							<?php if( get_field('showreel_icon') ): ?>
							<img  alt="<?php echo $alt_text; ?>" class="playcircle" src="<?php the_field('showreel_icon'); ?>" />
							<?php endif; ?>
						</a>
						</div>
						<div class="col-2">
						<p class="watch"><?php the_field('showreel_text'); ?></p>
						<p class="showreel"><?php the_field('showreel_title'); ?></p>
						</div>
					</div>
					<div id="modal" class="modal" style="display:none;">
					  <?php
						// get iframe HTML
						$iframe = get_field('showreel_video');

						// use preg_match to find iframe src
						preg_match('/src="(.+?)"/', $iframe, $matches);
						$src = $matches[1];

						// add extra params to iframe src
						$params = array(
    					'controls'    => 0,
    					'hd'        => 1,
							'autohide'    => 1
						);

						$new_src = add_query_arg($params, $src);
						$iframe = str_replace($src, $new_src, $iframe);

						// add extra attributes to iframe html
						$attributes = '';
						$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

						// echo $iframe
						echo $iframe;
						?>
					</div>

			<?php else : ?>
				<span></span>
			<?php endif; ?>
		</div>
	</div>
		</div>
	</div>

	<!-- CASE SLIDER -->
	<div class="wrapper_cases">
		  <div class="col-12 owl-carousel forside_carousel_wrapper owl-theme">
	    <?php
	    $params = array(
					 'post_type' => 'cases',
			     'posts_per_page' => 4,
			     'paged' => $paged,
			     'orderby' => 'publish_date',
			     'order' => 'DESC',);
	    $query = new WP_Query($params);
	    ?>
	          <?php if ($query->have_posts()) : ?>
	              <?php while ($query->have_posts()) :
	                $query->the_post(); ?>

	                  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
	                  <div class="row">
												<div class="col-lg-5 forside_cases_wrapper">
												<p class="forside_case_client">CASE: <?php the_field('forside_klient_navn');?></p>
												<h3 class="forside_cases_header"><?php the_field('case_headline');?></h3>
												<div class="forside_cases_catergories"><?php the_tags( ' ', ', ', '<br />' ); ?> </div>
												<p class="forside_cases_text"><?php the_field('forside_case_text');?><p>
													<a class="forside_case_button" href="<?php the_permalink(); ?>">
														<?php the_field('case_call_to_action_text') ?>
														<img src="<?php the_field('case_call_to_action_icon') ?>" alt="<?php echo $alt_text; ?> ">
													</a>
											</div>
												<a class="col-lg-7 case_img" href="<?php the_permalink(); ?>"  style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;"></a>


								</div>
	                <?php endwhile; ?>
	                  <?php wp_reset_postdata(); ?>
	                    <?php else:  ?>

	                        <?php _e( 'No cases' ); ?>

	                          <?php endif; ?>

	</div>
</div>

	<!-- Process steps -->
	<div class="container-fluid wrapper_process">
		<div class="process_intro">
		<h2><?php the_field('process_title'); ?></h2>
		<p><?php the_field('process_intro'); ?></p>
</div>
		  <div class="col-12 owl-carousel process_carousel_wrapper owl-theme">

		<?php if( have_rows('process') ): ?>

	<?php while( have_rows('process') ): the_row();
		// vars
		$processimg =	 get_sub_field('process_img');
		$processtitle = get_sub_field('process_single_title');
		$procestext = get_sub_field('process_text');
		$procesarrow = get_sub_field('process_arrow');
	?>

		<div class="row flex_display">
			<div class="slider_arrows"><img alt="<?php echo $alt_text; ?>" class="process_image" src="<?php echo $processimg; ?>"></div>
			<img class="process_arrow_left" src="<?php echo $procesarrow; ?>" alt="<?php echo $alt_text; ?>">
			<img class="process_arrow_right" src="<?php echo $procesarrow; ?>" alt="<?php echo $alt_text; ?>">
			<div class="process_text_wrapper">
				<h3 class=""><?php echo $processtitle; ?></h3>
				<p><?php echo $procestext; ?></p>
			</div>

		</div>
	<?php endwhile; ?>
<?php endif; ?>
	</div>
		</div>
			</div>

	<!-- Section med hvad vi gøre -->
	<div class="container-fluid do_for_u wrapper">
		<div class="wcwd_intro">
				<h2><?php the_field('wcwd_header'); ?></h2>
				<p><?php the_field('wcwd_text'); ?></p>
		</div>
		<div class="row justify-content-center align-items-center">

			<div class="col-sm-4 wcwd_hover wcwd_content">
					<?php if( get_field('brandstrategi_img') ): ?>
					<img alt="<?php echo $alt_text; ?>" class="wcwd_img" src="<?php the_field('brandstrategi_img'); ?>" />
					<?php endif; ?>
					<h3><?php the_field('brandstrategi_header'); ?></h3>
					<p><?php the_field('brandstrategi_text'); ?></p>
			</div>

			<div class="col-sm-4 wcwd_hover wcwd_content">
				<?php if( get_field('kommunikationsdesign_img') ): ?>
				<img alt="<?php echo $alt_text; ?>" class="wcwd_img" src="<?php the_field('kommunikationsdesign_img'); ?>" />
				<?php endif; ?>
				<h3><?php the_field('kommunikationsdesign_header'); ?></h3>
				<p><?php the_field('kommunikationsdesign_text'); ?></p>
			</div>

			<div class="col-sm-4 wcwd_hover wcwd_content">
				<?php if( get_field('social_media_img') ): ?>
				<img alt="<?php echo $alt_text; ?>" class="wcwd_img" src="<?php the_field('social_media_img'); ?>" />
				<?php endif; ?>
				<h3><?php the_field('social_media_header'); ?></h3>
				<p><?php the_field('social_media_text'); ?></p>
			</div>

			<div class="col-sm-4 wcwd_hover wcwd_content">
					<?php if( get_field('pressemeddelelse_img') ): ?>
					<img alt="<?php echo $alt_text; ?>" class="wcwd_img" src="<?php the_field('pressemeddelelse_img'); ?>" />
					<?php endif; ?>
					<h3><?php the_field('pressemeddelelse_header'); ?></h3>
					<p><?php the_field('pressemeddelelse_text'); ?></p>
			</div>

			<div class="col-sm-4 wcwd_hover wcwd_content">
				<?php if( get_field('kommunikationsstrategi_img') ): ?>
				<img alt="<?php echo $alt_text; ?>" class="wcwd_img" src="<?php the_field('kommunikationsstrategi_img'); ?>" />
				<?php endif; ?>
				<h3><?php the_field('kommunikationsstrategi_header'); ?></h3>
				<p><?php the_field('kommunikationsstrategi_text'); ?></p>
			</div>

			<div class="col-sm-4 wcwd_hover wcwd_content">
				<?php if( get_field('socialemedier_img') ): ?>
				<img alt="<?php echo $alt_text; ?>" class="wcwd_img" src="<?php the_field('socialemedier_img'); ?>" />
				<?php endif; ?>
				<h3><?php the_field('socialemedier_header'); ?></h3>
				<p><?php the_field('socialemedier_text'); ?></p>
			</div>

		</div>
		<div class="row justify-content-center">
			<a class="wcwd_button" href="<?php the_field('wcwd_button_url'); ?>"><?php the_field('wcwd_button_text'); ?> <?php if( get_field('wcwd_button_icon') ): ?>
			<img alt="calltoaction arrow" src="<?php the_field('wcwd_button_icon'); ?>" />
			<?php endif; ?></a>
		</div>
	</div>

	<!-- Slider med firma logoer (klienter?) -->
	<div class="container-fluid">
		<div class="row logo_slider">
			<div class="col align-self-center">
				<div class="owl-carousel owl-theme autoplay">
					<?php
					$images = get_field('firma_slider', 'option');
					foreach ($images as $image):?>
						<div>
							<img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
							</div>
						<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>

	<!-- Image carousel and get to know us -->
	<div class="container-fluid">
		<div class="row know_us align-items-center">
			<div class="know_us_dots" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/images/dot.png');">
	    </div>

			<!-- Know us text -->
			<div class="col-lg-5 know_us_content">
					<h2><?php the_field('know_us_title'); ?></h2>
					<p><?php the_field('know_us_text'); ?></p>

					<a class="know_button" href="<?php the_field('know_us_button_url'); ?>"><?php the_field('know_us_button_text'); ?> <?php if( get_field('know_us_button_icon') ): ?>
					<img  alt="calltoaction arrow" src="<?php the_field('know_us_button_icon'); ?>" />
					<?php endif; ?></a>
			</div>

			<div class="col-lg-7">
				<!-- Image carousel -->
				<div class="owl-carousel owl-theme autowidth">
					<?php
						$images = get_field('know_us_gallery');
						foreach ($images as $image):?>
					<div class="know_us_gallery">
						<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
	    		</div>
    			<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>


<?php get_footer(); ?>


<script>

/* Logo transition script */
$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".input").addClass("out_black2");
    } else {
        $(".input").removeClass("out_black2");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".menubtn").addClass("menu_black");
    } else {
        $(".menubtn").removeClass("menu_black");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 80) {
$(".header").addClass("out_white");
    } else {
        $(".header").removeClass("out_white");
    }
});

ScrollReveal().reveal('.hero_title', { distance: '250px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.hero_text', { distance: '300px',easing   : 'ease-in-out', duration: 900  });
ScrollReveal().reveal('.hero_button', { distance: '350px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.playcircle', { distance: '300px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.watch', { distance: '350px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.showreel', { distance: '350px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.wrapper_cases', { distance: '400px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.process_intro', { distance: '300px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.flex_display', { distance: '350px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.wcwd_intro', { distance: '250px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.wcwd_content', { distance: '350px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.wcwd_button', { distance: '300px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.logo_slider', { distance: '400px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.know_us_dots', { distance: '250px',easing   : 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.know_us', { distance: '350px',easing   : 'ease-in-out', duration: 900 });

</script>
