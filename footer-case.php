</section>

<footer class="case_footer">

  <div class="container-fluid next_case">

    <?php $next_post = get_adjacent_post(false, '', false); ?>
    <?php if ( !empty($next_post) ) {  ?>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>
      <a class="case_card_link" href="<?php echo get_permalink( $next_post->ID ); ?>">
        <div class="case_card_content"  style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
          <div class="">
            <?php $image = get_field('client_logo_neg', $next_post->ID); if( !empty($image) ): ?>
              <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>
          </div>

       <h2 class="case_card_h2"><?php the_field('case_headline', $next_post->ID);?></h2>

       <div class="category_wrapper">
         <div class="cases_tags"><?php the_tags( ' ', ', ', '<br />', $next_post->ID); ?></div>
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

;(function($, window, document, undefined) {

    var Linked = function(carousel) {

        this._core = carousel;

        this._handlers = {
            'dragged.owl.carousel changed.owl.carousel': $.proxy(function(e) {
                if (e.namespace && this._core.settings.linked) {
                    this.update(e);
                }
            }, this),
            'linked.to.owl.carousel': $.proxy(function(e, index, speed, standard, propagate) {
                if (e.namespace && this._core.settings.linked) {
                    this.toSlide(index, speed, propagate);
                }
            }, this)
        };

        this._core.$element.on(this._handlers);


        this._core.options = $.extend({}, Linked.Defaults, this._core.options);
    };

    Linked.Defaults = {
        linked: false
    };

    Linked.prototype.update = function(e) {
        this.toSlide( e.relatedTarget.relative(e.item.index) );
    };

    Linked.prototype.toSlide = function(index, speed, propagate) {
        var id = this._core.$element.attr('id'),
            linked = typeof(this._core.settings.linked) === 'string' ? this._core.settings.linked.split(',') : this._core.settings.linked;

        if ( typeof propagate == 'undefined' ) {
            propagate = true;
        }

        index = index || 0;

        if ( propagate ) {
            $.each(linked, function(i, el){
                $(el).trigger('linked.to.owl.carousel', [index, 300, true, false]);
            });
        } else {
            this._core.$element.trigger('to.owl.carousel', [index, 300, true]);

            if ( this._core.settings.current ) {
                this._core._plugins.current.switchTo(index);
            }
        }
    };

    Linked.prototype.destroy = function() {
        var handler, property;

        for (handler in this._handlers) {
            this.$element.off(handler, this._handlers[handler]);
        }
        for (property in Object.getOwnPropertyNames(this)) {
            typeof this[property] != 'function' && (this[property] = null);
        }
    };


})(window.Zepto || window.jQuery, window, document);





  $('.slider').on('initialized.owl.carousel changed.owl.carousel', function(e) {
      if (!e.namespace)  {
        return;
      }


var sync2 = $(".carousel_2");
var carousel = e.relatedTarget;
$('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
})
$(sync2).owlCarousel({
    nav: true,
    navText: ["<img src='<?php echo get_template_directory_uri() ?>/images/arrow_left.svg'>","<img src='<?php echo get_template_directory_uri() ?>/images/arrow_right.svg'>"],
    dots: false,
    loop: true,
    items: 1,
    linked: sync2.prev()
}).on('initialized.owl.carousel linked.to.owl.carousel', function() {
    sync2.find('.owl-item.current').removeClass('current');
    var current = sync2.find('.owl-item.active.center').length ? sync2.find('.owl-item.active') : sync2.find('.owl-item.active').eq(0);
    current.addClass('current');

});



</script>
</body>

</html>


<?php wp_footer(); ?>
