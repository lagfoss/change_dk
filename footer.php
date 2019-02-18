</section>

<footer>
      <!-- Need a successfull project start -->

  <div class="footer_project">
    <h2><?php the_field('footer_project', 'option'); ?></h2>
  <a class="footer_button" href="<?php the_field('footer_button_url', 'option'); ?>"><?php the_field('footer_button_text', 'option'); ?>

  <?php if( get_field('footer_button_icon', 'option') ): ?>
  <img class="" src="<?php the_field('footer_button_icon', 'option'); ?>" />
  <?php endif; ?></a>
  </div>
  <!-- Need a successfull project slut -->

  <!-- lets talk start -->
  <div class="letstalk_footer">
    <p><?php the_field('footer_lets_talk', 'option'); ?></p>
    <h2><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></h2>
  </div>
  <!-- lets talk slut -->

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
    <a href="<?php the_field('google_maps_link', 'option'); ?>" class="footer_address"><?php the_field('footer_address', 'option'); ?></a>

  </div>
  <!-- kontakt information footer slut -->

  <!-- aps start -->

  <div class="container-fluid">
    <div class="row justify-content-center cvr">
      <div class="align-self-center">Change Aps &#9474; CVR: 37197351</div>
    </div>
  </div>
  <!-- aps slut -->


</footer>

<script type="text/javascript">

$(document).ready(function() {
  $('.whitebg .logoimg').attr('src', '<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg');

});

  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
  });

  var owl = $('.autoplay');
  owl.owlCarousel({
      items:4,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      dots:false
  });

  var owl = $('.hello');
  owl.owlCarousel({
    items:1,
    nav: false,
  })

  var owl = $('.carousel_om_change');
  owl.owlCarousel({
    nav: true,
    navText: ["",""],
    slideby: 1,
    dots: false,
    items: 2,
    margin: 30,
  })

  var owl = $('.autowidth');
  owl.owlCarousel({
    autoWidth:true,
    rtl: true
})





</script>
</body>

</html>


<?php wp_footer(); ?>
