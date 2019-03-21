<?php
  /*add_theme_support( 'post-thumbnails' );*/



if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Cases');
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
//Search
add_theme_support('html5',array('search-form'));


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
       'name'                  => _x( 'Cases', 'Post type general name', 'textdomain' ),
       'singular_name'         => _x( 'Case', 'Post type singular name', 'textdomain' ),
       'menu_name'             => _x( 'Cases', 'Admin Menu text', 'textdomain' ),
       'name_admin_bar'        => _x( 'Case', 'Add New on Toolbar', 'textdomain' ),
       'add_new'               => __( 'Add New', 'textdomain' ),
       'add_new_item'          => __( 'Add New Case', 'textdomain' ),
       'new_item'              => __( 'New Case', 'textdomain' ),
       'edit_item'             => __( 'Edit Case', 'textdomain' ),
       'view_item'             => __( 'View Case', 'textdomain' ),
       'all_items'             => __( 'All Cases', 'textdomain' ),
       'search_items'          => __( 'Search Cases', 'textdomain' ),
       'parent_item_colon'     => __( 'Parent Cases:', 'textdomain' ),
       'not_found'             => __( 'No Cases found.', 'textdomain' ),
       'not_found_in_trash'    => __( 'No Cases found in Trash.', 'textdomain' ),
       'featured_image'        => _x( 'Cases Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
       'archives'              => _x( 'Cases archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
       'insert_into_item'      => _x( 'Insert into Case', 'Overrides the “Insert into post”/“Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
       'uploaded_to_this_item' => _x( 'Uploaded to this Case', 'Overrides the “Uploaded to this post”/“Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
       'filter_items_list'     => _x( 'Filter cases list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/“Filter pages list”. Added in 4.4', 'textdomain' ),
       'items_list_navigation' => _x( 'Cases list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/“Pages list navigation”. Added in 4.4', 'textdomain' ),
       'items_list'            => _x( 'Cases list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/“Pages list”. Added in 4.4', 'textdomain' ),
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
      'orderby'            => 'date',
      'order'              => 'desc',
      'menu_position'      => null,
      'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
                'taxonomies' => array( 'post_tag', 'category' ),
   );

register_post_type( 'cases', $args );

}

add_action( 'init', 'my_cases' );

add_filter('use_block_editor_for_post_type', 'd4p_32752_completly_disable_block_editor');
function d4p_32752_completly_disable_block_editor($use_block_editor) {
  return false;
}


function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyALj8kKpc9WhnsSUFEkYvnz96sMKG5hvUw');
}

add_action('acf/init', 'my_acf_init');


/*
Checks for a yoast primary category, if it exists move the category to the first position in the $categories array.
*/
function yoast_primary_cat_as_first_cat($categories) {

    // Check if yoast exists and get the primary category
    if ($categories && class_exists('WPSEO_Primary_Term') ) {

        // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
        $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id() );
        $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
        $term = get_term( $wpseo_primary_term );

        // If no error is returned, get primary yoast term
        $primary_cat_term_id = (!is_wp_error($term)) ? $term->term_id : null;

        // Loop all categories
        if($primary_cat_term_id !== null) {
            foreach ($categories as $i => $category) {

                // Move the primary category to the top of the array
                if($category->term_id === $primary_cat_term_id) {

                    $out = array_splice($categories, $i, 1);
                    array_splice($categories, 0, 0, $out);

                    break;
                }
            }
        }
    }

    return $categories;
}
add_filter( 'get_the_categories', 'yoast_primary_cat_as_first_cat' );

?>
