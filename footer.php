</section>

<footer>
      <!-- Need a successfull project start -->

  <div class="footer_project">
    <h2><?php the_field('footer_project', 'option'); ?></h2>
  <a class="footer_button" href="<?php the_field('footer_button_url', 'option'); ?>"><?php the_field('footer_button_text', 'option'); ?>

  <?php if( get_field('footer_button_icon', 'option') ): ?>
  <img  alt="calltoaction arrow" src="<?php the_field('footer_button_icon', 'option'); ?>" />
  <?php endif; ?></a>
  </div>
  <!-- Need a successfull project slut -->

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
    <a href="<?php the_field('google_maps_link', 'option'); ?>" class="footer_address"><?php the_field('footer_address', 'option'); ?></a>

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

$(document).ready(function() {
  $('.whitebg .logoimg').attr('src', '<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg');

});

  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
  });

  var owl = $('.autoplay');
  owl.owlCarousel({
      items: 4,
      margin:10,
      nav: true,
      navText: ["<img src='<?php echo get_template_directory_uri() ?>/images/arrow_left.svg'>","<img src='<?php echo get_template_directory_uri() ?>/images/arrow_right.svg'>"],
      autoplay:true,
      loop: true,
      dots:false,

      responsive:{

        992: {
          items: 4,
        },

        420: {
          items: 3,
        },

        320: {
          items: 2,
        },
      }
  });

  var owl = $('.forside_carousel_wrapper');
  owl.owlCarousel({
    items: 1,
    dots: true,
    nav: false,
    mouseDrag: true,
    autoplaySpeed: 2000,
    autoplayTimeout: 10000,
    margin: 1,
    autoplay: true,
  });

  var owl = $('.process_carousel_wrapper');
  owl.owlCarousel({
    items: 3,
    dots: false,
    nav: false,
    mouseDrag: true,
    autoplay: false,
    loop: false,
  });


  var owl = $('.carousel_om_change');
  owl.owlCarousel({
    nav: true,
    navText: ["<img src='<?php echo get_template_directory_uri() ?>/images/arrow_left.svg'>","<img src='<?php echo get_template_directory_uri() ?>/images/arrow_right.svg'>"],
    slideby: 1,
    dots: false,
    mouseDrag: false,
    autoplay: true,
    autoplayTimeout: 30000,
    items: 2,
    margin: 40,
    responsive:{



      993: {
        items: 2,
        autoplay: true,
      },

      320: {
        autoplay: true,
        items: 1,
      }
    }

  })

  var owl = $('.autowidth');
  owl.owlCarousel({
    autoWidth:true,
    autoplay: true,
})


"use strict";

!function() {
  var t = window.driftt = window.drift = window.driftt || [];
  if (!t.init) {
    if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
    t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
    t.factory = function(e) {
      return function() {
        var n = Array.prototype.slice.call(arguments);
        return n.unshift(e), t.push(n), t;
      };
    }, t.methods.forEach(function(e) {
      t[e] = t.factory(e);
    }), t.load = function(t) {
      var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
      o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
      var i = document.getElementsByTagName("script")[0];
      i.parentNode.insertBefore(o, i);
    };
  }
}();
drift.SNIPPET_VERSION = '0.3.1';
drift.load('anm7w6fdv44n');

ScrollReveal().reveal('.footer_project', { distance: '250px', easing: 'ease-in-out', duration: 700 });
ScrollReveal().reveal('.letstalk_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });
ScrollReveal().reveal('.SoMe_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });
ScrollReveal().reveal('.contact_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });

</script>
</body>

</html>
