<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Localization */
load_child_theme_textdomain( 'winfield', get_stylesheet_directory() . '/lib/languages' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Winfield Child Theme' );
define( 'CHILD_THEME_URL', 'http://wpcanada.ca/our-themes/winfield' );

/** Load Google fonts */
add_action( 'wp_enqueue_scripts', 'winfield_load_google_fonts' );
function winfield_load_google_fonts() {
    wp_enqueue_style( 
    	'google-fonts', 
    	'http://fonts.googleapis.com/css?family=Oswald', 
    	array(), 
    	PARENT_THEME_VERSION 
    );
}

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'winfield_add_viewport_meta_tag' );
function winfield_add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 'header', 'nav', 'subnav', 'inner', 'footer-widgets', 'footer' ) );

/** Add new image sizes */
add_image_size( 'blogpage', 120, 120, TRUE );
add_image_size( 'grid-thumbnail', 280, 100, TRUE );
add_image_size( 'home-bottom', 290, 150, TRUE );
add_image_size( 'slider', 960, 300, TRUE );

/** Set Genesis Responsive Slider defaults */
add_filter( 'genesis_responsive_slider_settings_defaults', 'winfield_responsive_slider_defaults' );
function winfield_responsive_slider_defaults( $defaults ) {
	$defaults['slideshow_height'] = '300';
	$defaults['slideshow_width'] = '960';
	return $defaults;
}

/** Add support for custom background */
add_theme_support( 'custom-background' );

/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array( 'width' => 1060, 'height' => 150 ) );

/** Reposition the breadcrumbs */
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

/** Breadcrumb display */
add_filter( 'genesis_breadcrumb_args', 'winfield_breadcrumb_args' );
function winfield_breadcrumb_args( $args ) {
	$args['sep'] = ' &raquo; ';
	return $args;
}

/** Add Genesis Box on Single Posts */
//add_action( 'genesis_after_post_content', 'include_genesis_box', 11 );
//function include_genesis_box() {
    //if ( is_single() )
    //require( CHILD_DIR.'/genesis-box.php' );
//}

/** Modify the size of the Gravatar in the author box */
add_filter( 'genesis_author_box_gravatar_size', 'winfield_author_box_gravatar_size' );
function winfield_author_box_gravatar_size($size) {
    return '80';
}

// Add single post navigation
add_action( 'genesis_before_comments', 'winfield_post_nav' );
function winfield_post_nav(){
	if (is_single()) {
	echo '<div class="post-nav">';
	echo '<div class="next-post-nav">';
	echo '<span class="next">';
	echo (__( 'Next Article', 'winfield' ));
	echo '</span>';
	echo next_post_link('%link', '%title');
	echo '</div>';
	echo '<div class="prev-post-nav">';
	echo '<span class="prev">';
	echo (__( 'Previous Article', 'winfield' ));
	echo '</span>';
	echo previous_post_link('%link', '%title');
	echo '</div>';
	echo '</div>';
	}
}

/** Add custom body class to the head */
add_filter( 'body_class', 'add_body_class' );
function add_body_class( $classes ) {
   $classes[] = 'winfield';
   return $classes;
}

/** Add support for post formats **/
add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
add_theme_support( 'genesis-post-format-images' );

/** Remove elements for post formats */
add_action( 'genesis_before_post', 'winfield_remove_elements' );
function winfield_remove_elements() {
	
	if ( ! current_theme_supports( 'post-formats' ) )
		return;

	// Remove if post has format
	if ( get_post_format() ) {
		remove_action( 'genesis_post_title', 'genesis_do_post_title' );
		remove_action( 'genesis_before_post_content', 'genesis_post_info' );
		remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
	}

	// Add back, as post has no format
	else {
		add_action( 'genesis_post_title', 'genesis_do_post_title' );
		add_action( 'genesis_before_post_content', 'genesis_post_info' );
		add_action( 'genesis_after_post_content', 'genesis_post_meta' );
	}

}

/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );

/** Register widget areas **/
genesis_register_sidebar( array(
	'id'			=> 'home-slider',
	'name'			=> __( 'Home Slider', 'winfield' ),
	'description'		=> __( 'This is the homepage slider section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-welcome',
	'name'			=> __( 'Home Welcome', 'winfield' ),
	'description'		=> __( 'This is the homepage welcome section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-left',
	'name'			=> __( 'Home Left', 'winfield' ),
	'description'		=> __( 'This is the homepage left section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-middle',
	'name'			=> __( 'Home Middle', 'winfield' ),
	'description'		=> __( 'This is the homepage middle section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'			=> 'home-right',
	'name'			=> __( 'Home Right', 'winfield' ),
	'description'		=> __( 'This is the homepage right section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'			=> '404-page',
	'name'			=> __( '404 Page', 'winfield' ),
	'description'		=> __( 'This is the widget area of the 404 Not Found Page Template.', 'winfield' ),
) );