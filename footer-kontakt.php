</section>

<footer>

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

<script>

$(document).ready(function() {
  $('.whitebg .logoimg').attr('src', '<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg');

});

$(document).ready(function(){
$(".owl-carousel").owlCarousel();
});

var owl = $('.contact_carousel');
owl.owlCarousel({

  items: 1,
  margin: 0,
  dots: false,
  nav: true,
  navText: ["<img src='<?php echo get_template_directory_uri() ?>/images/arrow_left.svg'>","<img src='<?php echo get_template_directory_uri() ?>/images/arrow_right.svg'>"],
  responsive:{
    993: {
      items: 1,
      autoplay: false,
    },

    769: {
      nav: true,
      autoplay: false,
    },

    320: {
      autoplay: true,
      nav: false,
      items: 1,
    },
  }
})

(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);


ScrollReveal().reveal('.letstalk_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });
ScrollReveal().reveal('.SoMe_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });
ScrollReveal().reveal('.contact_footer', { distance: '250px', easing: 'ease-in-out', duration: 700 });

</script>
</body>

</html>
