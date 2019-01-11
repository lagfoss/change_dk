<?php
  /*add_theme_support( 'post-thumbnails' );*/



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');

}



	add_filter( 'default_content', 'my_editor_content' );

	function my_editor_content( $content ) {

	    $content = "If you like this post, then please consider retweeting it or sharing it on Facebook.";

	    return $content;

	}

add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('acf-range/acf-range.php');
}


add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' );
add_theme_support( 'menus' );
add_theme_support( 'widgets' );


function NAME_script_enqueue() {
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/smoothscroll.js', array(), '1.0.0', true);
	wp_enqueue_script('toggleclassjs', get_template_directory_uri() . '/js/toggleclass.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'NAME_script_enqueue');

//BOOTSTRAP
function themebs_enqueue_styles() {

  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/css/style.css' );

}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/vendor/bootstrap.bundle.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');


// Add Google Fonts
function startwordpress_google_fonts() {
				wp_register_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500');
				wp_enqueue_style( 'Montserrat');
		}

add_action('wp_print_styles', 'startwordpress_google_fonts');



?>
