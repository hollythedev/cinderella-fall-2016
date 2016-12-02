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
    if(is_page( 'Home' )){
         $urlHome = CFS()->get('home_background_image');
         $custom_css = "
        .home-section-1{
        background-image: url( {$urlHome});
        }";
        wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
        
    } elseif(is_page( 'contact-us' )){
        $urlContactUs = CFS()->get('contact_us_background_image');
        $custom_css = " .contact-us-background{
                    background: url({$urlContactUs}) no-repeat center bottom;
                    background-size: cover, cover;
                }";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;

    }elseif(is_page('about')){
        $urlImpact = CFS()->get('about_us_background_image');
        $urlCinderellas = CFS()->get('about_us_cinderella_background_image');
        $custom_css = " .about-section-1{
                background-image: url({$urlImpact});
                }
                .cinderella-section{
                    background-image: url({$urlCinderellas});
                ";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
    }elseif(is_page('get-involved')){
        $urlInKindDonation = CFS()->get('donations_section_background_image_2');
        $urlGetInv = CFS()->get('get_involved_background_image');
        $urlDropOff = CFS()->get('drop_off_locations_background_image');
        $urlSponsorImg = CFS()->get('donations_section_background_image_2');
        $custom_css = " .in-kind-wishlist-background-image{
                background-image: url({$urlInKindDonation});
                }
                .get-involved-section-1{
            background-image: url({$urlGetInv});
            }
            .drop-off-donations{
                background-image: url({$urlDropOff}); 
                }
            .sponsorship-section-1{
                background-image: url({$urlSponsorImg})
                }";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
    }

}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );