<?php

function hx_get_projects( $query ) {

  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'post_type', array( 'hx_product' ) );
  }
  
  return $query;
  
}
add_filter( 'pre_get_posts', 'hx_get_projects' );


add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
  if(is_category() || is_tag()) {
    $post_type = get_query_var('post_type');
  if($post_type)
      $post_type = $post_type;
  else
      $post_type = array('post','hx_product'); // replace hx_product to your custom post type
    $query->set('post_type',$post_type);
  return $query;
    }
}

add_filter('upload_mimes', 'custom_upload_mimes');

function custom_upload_mimes ( $existing_mimes=array() ) {

  // add the file extension to the array

  $existing_mimes['svg'] = 'mime/type';

        // call the modified list of extensions

  return $existing_mimes;

}




/*
 * Supported Features
 * -------------------------------------------------------------------------- */

add_theme_support( 'automatic-feed-links' );

/*
 * Add JS
 * -------------------------------------------------------------------------- */
function hx_scripts_method() {
  $hx_modernizr = get_template_directory_uri() . '/js/libs/modernizr-2.5.3.min.js';
  wp_enqueue_script('hx_modernizr', $hx_modernizr);
  wp_enqueue_script('jquery');
  $hx_jq_ui = get_template_directory_uri() . '/js/libs/jquery-ui-1.8.20.custom.min.js';
  wp_enqueue_script('hx_jq_ui', $hx_jq_ui);
  $hx_plugins = get_template_directory_uri() . '/js/plugins.js';
  wp_enqueue_script('hx_plugins', $hx_plugins);
  $hx_script = get_template_directory_uri() . '/js/script.js';
  wp_enqueue_script('hx_script', $hx_script);
  $data = array('site_url' => __(site_url()));
  wp_localize_script('hx_script','php_data', $data);
}
add_action('wp_enqueue_scripts','hx_scripts_method');


/*
 * Add CSS
 * -------------------------------------------------------------------------- */
function hx_style_method() {
  $hx_animate_style = get_template_directory_uri() . '/css/animate.min.css';
  wp_enqueue_style('hx_animate_style', $hx_animate_style);
  $hx_style = get_template_directory_uri() . '/css/screen.css';
  wp_enqueue_style('hx_style', $hx_style);
}
//add_action('wp_enqueue_scripts','hx_style_method');




/*
 * Widget Areas

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'description' => 'Widgets in this area will be included only on individual blog entry pages',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
}
 */




/*
 * Menus
 * -------------------------------------------------------------------------- */

/* Main Menu */
function hx_register_menus() {
	register_nav_menus(
		array(
      'main-menu' =>  'Main Menu',
      'social-media' => 'Social Media'
		)
	);
}
add_action( 'init', 'hx_register_menus' );

/*
 * Sidebars
 * -------------------------------------------------------------------------- */
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="widgetContainer %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widgetTitle">',
		'after_title' => '</h3>'
	));
}

/*
 * Posted On ported from twentyeleven
 * -------------------------------------------------------------------------- */

function hx_posted_on() {
	printf( __( '<span class="sep">Posted on </span><a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s" pubdate>%4$s</time></a><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'adc' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'adc' ), get_the_author() ) ),
		get_the_author()
	);
}








/*
 * Add Custom Post Type: Products 
 * -------------------------------------------------------------------------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'hx_product',
		array(
			'labels' => array(
				 'name' => 'Products',
			     'singular_name' => 'Product',
			     'add_new' => 'Add New',
			     'add_new_item' => 'Add New Product',
			     'edit_item' => 'Edit Product',
			     'new_item' => 'New Product',
			     'all_items' => 'All Product',
			     'view_item' => 'View Product',
			     'search_items' => 'Search Products',
			     'not_found' =>  'No products found',
			     'not_found_in_trash' => 'No products found in Trash', 
			     'parent_item_colon' => '',
			     'menu_name' => 'Products'
			),
		'public' => true,
		'has_archive' => true,
		'query_var' => true,
		'rewrite' => array('slug' => 'product'),
		 'supports' => array(
            'title',
            // 'editor',
            'excerpt', 
            'trackbacks',
            'revisions',
            'page-attributes'
        ),
        'taxonomies' => array('category', 'hx_product') 
		)
	);

}
// REGISTER CUSTOM TAXONOMY (Using Plugin Instead)
// add_action('init', 'demo_add_default_boxes');
// 	 function demo_add_default_boxes() {
//      register_taxonomy_for_object_type('category', 'hx_product');
//      register_taxonomy_for_object_type('post_tag', 'hx_product');
//  }



// move admin bar to bottom
function fb_move_admin_bar() { ?>
	<style type="text/css">
		body {
			margin-top: -28px;
			padding-bottom: 28px;
		}
		body.admin-bar #wphead {
			padding-top: 0;
		}
		body.admin-bar #footer {
			padding-bottom: 28px;
		}
		#wpadminbar {
			top: auto !important;
			bottom: 0;
		}
		#wpadminbar .quicklinks .menupop ul {
			bottom: 28px;
		}
	</style>
<?php }
// on backend area
add_action( 'admin_head', 'fb_move_admin_bar' );
// on frontend area
add_action( 'wp_head', 'fb_move_admin_bar' );





?>
