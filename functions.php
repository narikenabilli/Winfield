<?php
//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'winfield', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/lib/languages', 'winfield' ) );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', __( 'Winfield Theme', 'winfield' ) );
define( 'CHILD_THEME_URL', 'http://wpcanada.ca/our-themes/winfield' );
define( 'CHILD_THEME_VERSION', '3.0.1' );

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue Google fonts
add_action( 'wp_enqueue_scripts', 'winfield_google_fonts' );
function winfield_google_fonts() {
	wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css?family=Roboto:300,400|Roboto+Slab:300,400', array(), CHILD_THEME_VERSION );
}

/**
 * Register and Enqueue Responsive Menu Script
 * 
 * @author Brad Potter
 * 
 * @link http://www.bradpotter.com
 */
function winfield_menu_script() {
	wp_register_script( 'responsive-menu', get_stylesheet_directory_uri() . '/lib/js/responsivemenus.js', array('jquery'), '1.0.0', false );
	wp_enqueue_script( 'responsive-menu' );

 }
add_action('wp_enqueue_scripts', 'winfield_menu_script');

//* Add new image sizes
add_image_size( 'mini', 80, 80, TRUE );
add_image_size( 'square', 120, 120, TRUE );
add_image_size( 'home-middle', 340, 150, TRUE );
add_image_size( 'slider', 1180, 400, TRUE );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'width' => 1180,
	'height' => 200,
	'header-text'     => false
) );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Add after post block section to single post page
add_action( 'genesis_entry_footer', 'winfield_after_post_block'  ); 
function winfield_after_post_block() {

    if ( ! is_singular( 'post' ) )
    	return;

    genesis_widget_area( 'after-post-block', array(
		'before' => '<div class="after-post-block widget-area"><div class="wrap">',
		'after'  => '</div></div>',
    ) );

}

/** Reposition the breadcrumbs */
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
add_action( 'genesis_after_header', 'genesis_do_breadcrumbs' );

//* Add single post navigation
add_action( 'genesis_before_comments', 'genesis_prev_next_post_nav' );

//* Register widget areas
genesis_register_sidebar( array(
	'id'		=> 'home-slider',
	'name'		=> __( 'Home Slider', 'winfield' ),
	'description'	=> __( 'This is the home slider section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-welcome',
	'name'		=> __( 'Home Welcome', 'winfield' ),
	'description'	=> __( 'This is the home welcome section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-left',
	'name'		=> __( 'Home Left', 'winfield' ),
	'description'	=> __( 'This is the home left section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-center',
	'name'		=> __( 'Home Center', 'winfield' ),
	'description'	=> __( 'This is the home center section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'home-right',
	'name'		=> __( 'Home Right', 'winfield' ),
	'description'	=> __( 'This is the home right section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'after-post-block',
	'name'		=> __( 'After Post Block', 'winfield' ),
	'description'	=> __( 'This is the after post block section.', 'winfield' ),
) );
genesis_register_sidebar( array(
	'id'		=> 'widget-page',
	'name'		=> __( 'Widget Page', 'winfield' ),
	'description'	=> __( 'This is the Widget Page template.', 'winfield' ),
) );