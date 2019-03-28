<?php get_header();?>
<body <?php body_class(whitebg); ?>>

<div class="row">
  <div class="wrapper cases_wrap">
    <div class="col">
      <h1 class="black"><?php the_field('cases_hero_h1', 'option');?></h1>
      <div class="stroke"></div>
    </div>
  </div>
</div>

<div class="row flex">
  <div class="flex_wrapper">


</div>
</div>

<?php get_footer();?>

<script type="text/javascript">

$(window).scroll(function() {
	var windowHeight = $(window).height();
	var scroll = $(window).scrollTop();
	if (scroll >= windowHeight - 570) {
$(".header").addClass("out_white");
    } else {
        $(".header").removeClass("out_white");
    }
});

ScrollReveal().reveal('.black', { distance: '350px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.stroke', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.flex_wrapper', { distance: '450px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.case_card_content', { distance: '650px', easing: 'ease-in-out', duration: 900 });
ScrollReveal().reveal('.pagination', { distance: '450px', easing: 'ease-in-out', duration: 900 });

</script>
