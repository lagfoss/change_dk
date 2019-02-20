</section>

<footer>

  <div class="container-fluid next_case">
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>
  <?php $next_post = get_adjacent_post(false, '', false); ?>
   <?php if ( !empty($next_post) ) {  ?>
   	<a class="case_card_link" href="<?php echo get_permalink( $next_post->ID ); ?>">
      <div class="case_card_content"  style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
        <?php echo get_the_title( $next_post->ID ); ?>
        <div class="">
          <?php $image = get_field('client_logo_neg'); if( !empty($image) ): ?>
          <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <?php endif; ?>
        </div>

        <h2 class="case_card_h2"><?php the_field('case_headline');?></h2>

        <div class="category_wrapper">
          <div class="cases_tags"><?php the_tags( ' ', ', ', '<br />' ); ?> </div>
          <?php the_category(); ?>

        </div>
      </div>
    </a>
   <?php } ?>

  </div>


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

ScrollReveal().reveal('.footer_project', { distance: '250px' });
ScrollReveal().reveal('.letstalk_footer', { distance: '250px' });
ScrollReveal().reveal('.SoMe_footer', { distance: '250px' });
ScrollReveal().reveal('.contact_footer', { distance: '250px' });

</script>
</body>

</html>


<?php wp_footer(); ?>
