<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Chelsea_Jade_Media_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cjmedia_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'cjmedia_body_classes' );
