<?php

add_action( 'genesis_meta', 'winfield_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function winfield_home_genesis_meta() {

	if ( is_active_sidebar( 'home-slider' ) || is_active_sidebar( 'home-welcome' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-middle' ) || is_active_sidebar( 'home-right' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_after_header', 'winfield_home_loop_helper_top' );
		add_action( 'genesis_after_header', 'winfield_home_loop_helper' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

	}
}

/**
 * Display widget content for "home-slider" and "welcome" sections.
 *
 */

function winfield_home_loop_helper_top() {

		if ( is_active_sidebar( 'home-slider' ) ) {
			echo '<div class="slider-wrap"><div class="slider-inner">';
			dynamic_sidebar( 'home-slider' );
			echo '</div><!-- end .slider-wrap --></div><!-- end .slider-inner -->';
		}

		if ( is_active_sidebar( 'home-welcome' ) ) {
			echo '<div class="welcome-wrap"><div class="welcome-inner">';
			dynamic_sidebar( 'home-welcome' );
			echo '</div><!-- end .welcome-wrap --></div><!-- end .welcome-inner -->';
		}
		
}

/**
 * Display widget content for "home-left", "home-middle", and "home-right" sections.
 *
 */

function winfield_home_loop_helper() {

		echo '<div id="home-bottom"><div class="wrap">';

		if ( is_active_sidebar( 'home-left' ) ) {
			echo '<div class="homepage-left">';
			dynamic_sidebar( 'home-left' );
			echo '</div><!-- end #homepage-left -->';
		}

		if ( is_active_sidebar( 'home-middle' ) ) {
			echo '<div class="homepage-middle">';
			dynamic_sidebar( 'home-middle' );
			echo '</div><!-- end #homepage-middle -->';
		}

		if ( is_active_sidebar( 'home-right' ) ) {
			echo '<div class="homepage-right">';
			dynamic_sidebar( 'home-right' );
			echo '</div><!-- end #homepage-right -->';
		}
		
		echo '</div><!-- end .wrap --></div><!-- end #home-bottom -->';
		
}

genesis();