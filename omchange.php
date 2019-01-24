<?php /* Template Name: Om Change */ ?>

<?php get_header(); ?>

  <div class="container-fluid om_intro">
    <div class="row">
      <div class="om_intro_title">
        <h2><?php the_field('om_intro_title'); ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="stroke_position">
        <div class="stroke"></div>
      </div>
    </div>
    <div class="row">
      <div class="row intro_boxes">
        <?php if( have_rows('om_intro_boxes') ): ?>

            <?php while( have_rows('om_intro_boxes') ): the_row();
              // vars
              $introimage = get_sub_field('intro_box_image');
              $introtitle = get_sub_field('intro_box_title');
              $introtext = get_sub_field('intro_box_text');
              $introlink = get_sub_field('intro_box_link');
            ?>
        <a class="intro_box" href="<?php echo $introlink; ?>">
        	<img src="<?php echo $introimage['url']; ?>" alt="<?php echo $introimage['alt'] ?>"/>
          <h3><?php echo $introtitle; ?></h3>
          <p><?php echo $introtext; ?></p>
      	</a>
  		<?php endwhile; ?>

  <?php endif; ?>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
