
/* $(‘a[href*=“#”]:not([href=“#”])‘).click(function() {

 if (location.pathname.replace(/^\//,‘’) == this.pathname.replace(/^\//,‘’) && location.hostname == this.hostname) {

   var target = $(this.hash);

   target = target.length ? target : $(‘[name=’ + this.hash.slice(1) +‘]’);

   if (target.length) {

     $(‘html, body’).animate({

       scrollTop: target.offset().top

     }, 1000);

     return false;

   }

 }

});


	jQuery(function($){
	    $(document).ready(function(){
	        var owl = $(".owl-carousel").owlCarousel({
	            items: 1,
	            slideSpeed: 900,
	            pagination: true,
	            autoplay: true,
	            autoplayTimeout: 3500,
	            autoplayHoverPause: true,
	            addClassActive: true,
	            singleItem: true,
	        }).data('owlCarousel');

	        $('.owl-item').click(function(){
	            owl.next();
	        })

	        setInterval(function(){
	            owl.next();
	        }, 6000);
	    });
	})
});*/

  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
  });

  var owl = $('.autoplay');
  owl.owlCarousel({
      items:2,
      loop:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true
  });
