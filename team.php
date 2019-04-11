<?php /* Template Name: Team */ ?>

<?php get_header(); ?>

<h1>Hallo</h1>

<img src="<?php get_field('easter_egg_img'); ?>" alt="">

<?php get_footer(); ?>

<script type="text/javascript">

/* Logo transition script */
$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo.svg'>");
} else {

	$(".logo").html("<img src='<?php echo get_bloginfo('template_directory'); ?>/images/logo_neg.svg'>");
}

});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
$(".input").addClass("out_black2");
    } else {
        $(".input").removeClass("out_black2");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
$(".search").addClass("search_black");
    } else {
        $(".search").removeClass("search_black");
    }
});

$(document).scroll(function() {
  scroll_pos = $(this).scrollTop();
                if(scroll_pos > 620) {
$(".menubtn").addClass("menu_black");
    } else {
        $(".menubtn").removeClass("menu_black");
    }
});

ScrollReveal().reveal('.stroke_position_services', { distance: '300px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.hero_info h1', { distance: '400px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.om_menu_img', { distance: '350px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.om_menu a', { distance: '450px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.team h2', { distance: '450px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.team_stroke', { distance: '550px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.gray', { distance: '550px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.team_members_half img', { distance: '500px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.team_name h3', { distance: '550px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.stroke_team', { distance: '500px', easing: 'ease-in-out', duration: 700});
ScrollReveal().reveal('.logo_slider', { distance: '550px', easing: 'ease-in-out', duration: 700});
</script>
