</section>

<footer>
  <div class="FooterProject">
    <h2 class="footer_project"><?php the_field('footer_project'); ?></h2>
  <a class="CallToActionFooter" href="<?php the_field('hero_button_url'); ?>"><?php the_field('hero_button_text'); ?>

  <?php if( get_field('calltoaction_arrow_right') ): ?>
  <img class="" src="<?php the_field('calltoaction_arrow_right'); ?>" />
  <?php endif; ?></a>
  </div>

  <div class="letstalkfooter">
    <?php the_field('footer_lets_talk'); ?>
    <a href="tel:<?php the_field('phone_number'); ?>" class="phone_number"><?php the_field('phone_number'); ?></a>
  </div>

  <div class="SoMefooter">
    <?php if( get_field('someicons') ): ?>
    <img src="<?php the_field('someicons'); ?>" />
    <?php endif; ?>
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
<script type="text/javascript" src="public_html/wp-content/themes/change_dk/js/javascript.js">

</script>
</html>


<?php wp_footer(); ?>
