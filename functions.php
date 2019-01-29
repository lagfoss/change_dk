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



function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

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


add_filter( 'body_class', 'my_class_names' );
function my_class_names( $classes ) {
    // add 'class-name' to the $classes array
    $classes[] = 'whitebg';
    // return the $classes array
    return $classes;
}

// Register a custom post type called "case".
// @see get_post_type_labels() for label keys.

function my_cases() {
   $labels = array(
       'name'                  => _x( 'Produkter', 'Post type general name', 'textdomain' ),
       'singular_name'         => _x( 'Produkt', 'Post type singular name', 'textdomain' ),
       'menu_name'             => _x( 'Produkter', 'Admin Menu text', 'textdomain' ),
       'name_admin_bar'        => _x( 'Produkt', 'Add New on Toolbar', 'textdomain' ),
       'add_new'               => __( 'Add New', 'textdomain' ),
       'add_new_item'          => __( 'Add New Produkt', 'textdomain' ),
       'new_item'              => __( 'New Produkt', 'textdomain' ),
       'edit_item'             => __( 'Edit Produkt', 'textdomain' ),
       'view_item'             => __( 'View Produkt', 'textdomain' ),
       'all_items'             => __( 'All Produkter', 'textdomain' ),
       'search_items'          => __( 'Search Produkter', 'textdomain' ),
       'parent_item_colon'     => __( 'Parent Produkter:', 'textdomain' ),
       'not_found'             => __( 'No Produkter found.', 'textdomain' ),
       'not_found_in_trash'    => __( 'No Produkter found in Trash.', 'textdomain' ),
       'featured_image'        => _x( 'Produkter Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'archives'              => _x( 'Produkter archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
       'insert_into_item'      => _x( 'Insert into Produkt', 'Overrides the “Insert into post”/“Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
       'uploaded_to_this_item' => _x( 'Uploaded to this Produkt', 'Overrides the “Uploaded to this post”/“Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
       'filter_items_list'     => _x( 'Filter cases list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/“Filter pages list”. Added in 4.4', 'textdomain' ),
       'items_list_navigation' => _x( 'Produkter list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/“Pages list navigation”. Added in 4.4', 'textdomain' ),
       'items_list'            => _x( 'Produkter list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/“Pages list”. Added in 4.4', 'textdomain' ),
   );

   $args = array(
      'labels'             => $labels,
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'query_var'          => true,
      'rewrite'            => array( 'slug' => 'cases' ),
      'capability_type'    => 'page',
      'has_archive'        => true,
      'hierarchical'       => false,
      'orderby'            => 'menu_order',
      'order'              => 'ASC',
      'menu_position'      => null,
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
                'taxonomies' => array( 'post_tag', 'category' ),
   );

register_post_type( 'cases', $args );

}

add_action( 'init', 'my_cases' );


?>
