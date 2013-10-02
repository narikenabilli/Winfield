<?php
/**
 * Setup the home page
*/

add_action( 'genesis_meta', 'winfield_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function winfield_home_genesis_meta() {

	if ( is_active_sidebar( 'home-slider' ) || is_active_sidebar( 'home-welcome' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-center' ) || is_active_sidebar( 'home-right' ) ) {

		// Add custom body class to home page
		add_filter( 'body_class', 'winfield_hp_add_body_class' );
		function winfield_hp_add_body_class( $classes ) {
   			$classes[] = 'winfield';
  			return $classes;
		}

		// Remove the default Genesis loop
		remove_action( 'genesis_loop', 'genesis_do_loop' );

		// Force full width content layout
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		// Add homepage widgets
		add_action( 'genesis_loop', 'winfield_homepage_widgets' );

	}
}

function winfield_homepage_widgets() {

	genesis_widget_area( 'home-slider', array(
		'before'	=> '<div class="home-slider widget-area">',
		'after'		=> '</div>',
	) );

	genesis_widget_area( 'home-welcome', array(
		'before'	=> '<div class="home-welcome widget-area">',
		'after'		=> '</div>',
	) );

	if ( is_active_sidebar( 'home-left' ) ||  is_active_sidebar( 'home-center' ) || is_active_sidebar( 'home-right' ) ) {

		echo '<div class="home-middle">';

		genesis_widget_area( 'home-left', array(
			'before'	=> '<div class="home-left widget-area">',
			'after'		=> '</div>',
		) );

		genesis_widget_area( 'home-center', array(
			'before'	=> '<div class="home-center widget-area">',
			'after'		=> '</div>',
		) );

		genesis_widget_area( 'home-right', array(
			'before'	=> '<div class="home-right widget-area">',
			'after'		=> '</div>',
		) );

		echo '</div>';

	}

}

genesis();