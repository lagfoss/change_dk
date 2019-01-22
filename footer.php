</section>

<footer>
  <div class="FooterProject">
    <h2 class="footer_project"><?php the_field('footer_project'); ?></h2>
  <a class="CallToActionFooter" href="<?php the_field('footer_button_url'); ?>"><?php the_field('footer_button_text'); ?>

  <?php if( get_field('footer_button_icon') ): ?>
  <img class="" src="<?php the_field('footer_button_icon'); ?>" />
  <?php endif; ?></a>
  </div>

  <div class="letstalkfooter">
    <?php the_field('footer_lets_talk'); ?>
    <a href="tel:<?php the_field('phone_number'); ?>" class="phone_number"><?php the_field('phone_number'); ?></a>
  </div>

  <div class="container-fluid ">
    <div class="row SoMefooter">
      <div class="col align-self-center">
    <?php if( have_rows('footer_some') ): ?>
      <ul>
        <?php while( have_rows('footer_some') ): the_row();
        // vars
          $footsomeimage = get_sub_field('footer_some_icon');
          $footsomelink = get_sub_field('footer_some_url');
        ?>

        <li class="footer_some_icon">
          <?php if( $footsomelink ): ?>
            <a href="<?php echo $footsomelink; ?>" target="_blank">
              <?php endif; ?>
              <img src="<?php echo $footsomeimage['url']; ?>" alt="<?php echo $footsomeimage['alt'] ?>" />
              <?php if( $footsomelink ): ?>
            </a>
          <?php endif; ?>
        </li>
      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
  </div>
  </div>
  </div>

  <div class="ContactFooter">
   <a href="mailto:<?php the_field('footer_mail'); ?>" class="footer_mail"><?php the_field('footer_mail'); ?></a>
    <a href="<?php the_field('google_maps_link'); ?>" class="footer_address"><?php the_field('footer_address'); ?></a>
  </div>

<div class="container-fluid">
  <div class="row justify-content-center cvr">
    <div class="align-self-center">Change Aps &#9474; CVR: 37197351</div>
  </div>
</div>

</footer>





</body>

</html>


<?php wp_footer(); ?>
