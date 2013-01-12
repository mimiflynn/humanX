<?php

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
  $mimiflynn_animate_style = get_template_directory_uri() . '/css/animate.min.css';
  wp_enqueue_style('mimiflynn_animate_style', $mimiflynn_animate_style);
  $mimiflynn_style = get_template_directory_uri() . '/css/screen.css';
  wp_enqueue_style('mimiflynn_style', $mimiflynn_style);
}
add_action('wp_enqueue_scripts','mimiflynn_style_method');




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



?>
