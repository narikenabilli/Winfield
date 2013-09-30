<?php

add_action( 'genesis_meta', 'winfield_home_genesis_meta' );
/**
 * Add widget support for homepage. If no widgets active, display the default loop.
 *
 */
function winfield_home_genesis_meta() {

	if ( is_active_sidebar( 'home-slider' ) || is_active_sidebar( 'home-welcome' ) || is_active_sidebar( 'home-left' ) || is_active_sidebar( 'home-center' ) || is_active_sidebar( 'home-right' ) ) {

		remove_action( 'genesis_loop', 'genesis_do_loop' );
		add_action( 'genesis_after_header', 'winfield_home_loop_helper_top' );
		add_action( 'genesis_after_header', 'winfield_home_loop_helper' );
		add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

		// Add custom body class to home page
		add_filter( 'body_class', 'winfield_hp_add_body_class' );
		function winfield_hp_add_body_class( $classes ) {
   			$classes[] = 'winfield-home-page';
  			return $classes;
		}

	}
}

/**
 * Display widget content for "home-slider" and "welcome" sections.
 *
 */

function winfield_home_loop_helper_top() {

		if ( is_active_sidebar( 'home-slider' ) ) {
			echo '<div class="home-slider">';
			dynamic_sidebar( 'home-slider' );
			echo '</div><!-- end .home-slider -->';
		}


		if ( is_active_sidebar( 'home-welcome' ) ) {
			echo '<div class="home-welcome"><div class="welcome-wrap">';
			dynamic_sidebar( 'home-welcome' );
			echo '</div></div><!-- end .home-welcome --><!-- end .welcome-wrap -->';
		}
		
}

/**
 * Display widget content for "home-left", "home-center", and "home-right" sections.
 *
 */

function winfield_home_loop_helper() {

		echo '<div class="home-middle">';

			if ( is_active_sidebar( 'home-left' ) ) {
				echo '<div class="home-left">';
				dynamic_sidebar( 'home-left' );
				echo '</div><!-- end .home-left -->';
			}

			if ( is_active_sidebar( 'home-center' ) ) {
				echo '<div class="home-center">';
				dynamic_sidebar( 'home-center' );
				echo '</div><!-- end .home-center -->';
			}

			if ( is_active_sidebar( 'home-right' ) ) {
				echo '<div class="home-right">';
				dynamic_sidebar( 'home-right' );
				echo '</div><!-- end .home-right -->';
			}
		
		echo '</div><!-- end .home-middle -->';
		
}

genesis();