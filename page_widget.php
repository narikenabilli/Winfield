<?php
/**
 * Template Name: Widget Page
 *
 */

//* Add custom body class to widget page
add_filter( 'body_class', 'winfield_wp_add_body_class' );
function winfield_wp_add_body_class( $classes ) {
	$classes[] = 'winfield-widget-page';
	return $classes;
}

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', 'winfield_page_loop_helper' );
/**
 * Add widget support for this page.
 * If no widgets active, display the default loop.
 *
 */
function winfield_page_loop_helper() {

	if ( is_active_sidebar( 'widget-page' ) ) {

		dynamic_sidebar( 'widget-page' );
		
	}
	else {
		genesis_standard_loop();
	}
	
}

genesis();