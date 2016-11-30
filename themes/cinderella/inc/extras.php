<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Cinderella Project Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );
/*
Custom Home Page background Image
*/

function my_styles_method() {

    if(!is_page_template( 'front-page.php' )){
         $urlHome = CFS()->get('home_background_image');
         $custom_css = "
        .home_section_1{
        background-image: url( {$urlHome});
        }";
        wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
    } else if(!is_page_template('get-involved.php')){
        $urlGetInv = CFS()->get('get_involved_background_image');
        $custom_css = " .get-involved_section_1{
            background-image: url( {$urlHome});
            }";
            wp_add_inline_style( 'red-starter-style', $custom_css );
            return;
    }

}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );