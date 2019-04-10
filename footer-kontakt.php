</section>

<footer>

  <!-- sociale medier footer start -->

  <div class="container-fluid">
    <div class="row SoMe_footer">
      <div class="col align-self-center">
    <?php if( have_rows('footer_some', 'option') ): ?>
      <ul>
        <?php while( have_rows('footer_some', 'option') ): the_row();
        // vars

          $footsomeimage = get_sub_field('footer_some_icon', 'option');
          $footsomelink = get_sub_field('footer_some_url', 'option');
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
  <!-- sociale medier footer slut -->

  <!-- kontakt information footer start -->

  <div class="container-fluid contact_footer">
   <h3><a href="mailto:<?php the_field('footer_mail', 'option'); ?>" class="footer_mail"><?php the_field('footer_mail', 'option'); ?></a></h3>
   <h3><a href="tel:<?php the_field('phone_number', 'option'); ?>" class="footer_mail"><?php the_field('phone_number', 'option'); ?></a></h3>
    <a target="_blank" href="<?php the_field('google_maps_link', 'option'); ?>" class="footer_address"><?php the_field('footer_address', 'option'); ?></a>

  </div>
  <!-- kontakt information footer slut -->

  <!-- aps start -->

  <div class="container-fluid">
    <div class="row justify-content-center cvr">
      <div class="align-self-center">Change ApS &#9474; CVR: 37197351</div>
    </div>
  </div>
  <!-- aps slut -->


</footer>

<script>

/*$(document).ready(function() {
  $('.whitebg .logoimg').attr('src', '<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg');

});*/

var owl = $('.contact_carousel');
owl.owlCarousel({

  items: 1,
  margin: 100,
  padding: 0,
  mouseDrag: false,
  dots: false,
  nav: false,
  autoplay: true,
  autoplayTimeout: 10000,
  navText: ["<img src='<?php echo get_template_directory_uri() ?>/images/arrow_left.svg'>","<img src='<?php echo get_template_directory_uri() ?>/images/arrow_right.svg'>"],

  responsive:{
    993: {
      items: 1,
      autoplay: true,
      loop: true,
    },

    769: {
      nav: false,
      autoplay: true,
    },

    320: {
      autoplay: true,
      nav: false,
      loop: false,
      items: 1,
    },
  }
})



ScrollReveal().reveal('.SoMe_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });
ScrollReveal().reveal('.contact_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });

</script>
</body>

</html>
