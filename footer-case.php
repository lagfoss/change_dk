<div class="footer_project_case">
  <h2 class="footer_single_case"><?php the_field('footer_project', 'option'); ?></h2>
<a class="footer_button" href="<?php the_field('footer_button_url', 'option'); ?>"><?php the_field('footer_button_text', 'option'); ?>

<?php if( get_field('footer_button_icon', 'option') ): ?>
<img alt="calltoaction arrow" src="<?php the_field('footer_button_icon', 'option'); ?>" />
<?php endif; ?></a>
</div>

</section>

<footer class="case_footer">

<div class="row flex">
  <div class="flex_wrapper next_case">

    <div class="row stroke_position_footer">
      <div class="stroke_case"></div>
      <p class="pre_client">NÆSTE CASE</p>
    </div>

    <?php $next_post = get_adjacent_post(false, '', false); ?>
    <?php if ( !empty($next_post) ) {  ?>
    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($next_post->ID), 'full' );?>
      <a id="card_content_case_footer" class="case_card_content" href="<?php echo get_permalink( $next_post->ID ); ?>" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
            <?php $image = get_field('client_logo_neg', $next_post->ID); if( !empty($image) ): ?>
              <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            <?php endif; ?>

       <h2 class="case_card_h2"><?php the_field('case_headline', $next_post->ID);?></h2>
       <div class="category_wrapper">
       <div class="cases_tags">
         <?php
         $posttags = get_the_tags($next_post->ID);
         if ($posttags) {
           foreach($posttags as $tag) {
             echo $tag->name . ' ';
           }
         }
         ?> </div>

       <div>
         <?php
         foreach((get_the_category($next_post->ID)) as $category){
           echo $category->name.",";
         }
         ?>
       </div>
       </div>
   </a>
   <?php }

   else {  ?>
     <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(650), 'full' );?>
       <a id="card_content_case_footer" class="case_card_content" href="<?php echo get_permalink( 650 ); ?>" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;">
             <?php $image = get_field('client_logo_neg', 650); if( !empty($image) ): ?>
               <img class="client_logo_neg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
             <?php endif; ?>

        <h2 class="case_card_h2"><?php the_field('case_headline', 650);?></h2>
        <div class="category_wrapper">
        <div class="cases_tags">
          <?php
          $posttags = get_the_tags(650);
          if ($posttags) {
            foreach($posttags as $tag) {
              echo $tag->name . ' ';
            }
          }
          ?> </div>

        <div>
          <?php
          foreach((get_the_category(650)) as $category){
            echo $category->name.", ";
          }
          ?>
        </div>
        </div>
    </a>   <?php  } ?>



  </div>
  </div>

  <!-- aps start -->

  <div class="container-fluid">
    <div class="row justify-content-center cvr">
      <div class="align-self-center">Change ApS &#9474; CVR: 37197351</div>
    </div>
  </div>
  <!-- aps slut -->


</footer>

<script type="text/javascript">



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

ScrollReveal().reveal('.footer_project_case', { distance: '850px', easing: 'ease-in-out', duration: 700 });

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
    var carousel = e.relatedTarget;
    $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
  }).owlCarousel({
    nav: true,
    navText: ["<img src='<?php echo get_template_directory_uri() ?>/images/arrow_left.svg'>","<img src='<?php echo get_template_directory_uri() ?>/images/arrow_right.svg'>"],
    navContainer: '#customNav',
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout: 15000,
    items: 1,
    stagePadding: 0,
    responsive:{

      1105: {
        items: 1,
        stagePadding: 0,
      },

      992: {
        items: 1,
        stagePadding: 0,
      },

      771: {
        items: 1,
        touchDrag: true,
      },

      576: {
        items: 1,
        stagePadding: 0,
      },

      320: {
        items:1,
        stagePadding: 0,
        touchDrag: true,
      }
    }
  });

var sync2 = $(".carousel_2");
$(sync2).owlCarousel({
    linked: sync2.prev()
}).on('initialized.owl.carousel linked.to.owl.carousel', function() {
    sync2.find('.owl-item.current').removeClass('current');
    var current = sync2.find('.owl-item.active.center').length ? sync2.find('.owl-item.active') : sync2.find('.owl-item.active').eq(0);
    current.addClass('current');
});

$(document).ready(function(){
  $(".start-video").click(function(){
    $(".start-video, .thumbnail_container").remove();
  });
});

</script>
</body>

</html>


<?php wp_footer(); ?>
