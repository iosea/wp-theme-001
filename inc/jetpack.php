<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package wp-theme-001
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function wp_theme_001_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'wp_theme_001_jetpack_setup' );
