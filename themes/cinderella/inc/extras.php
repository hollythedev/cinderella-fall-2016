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
        background: url( {$urlHome}) no-repeat center bottom;
         background-size: cover;
        }";
        wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
        
    } elseif(is_page( 'refer-a-student' )){
        $urlReferAstudent = CFS()->get('refer_student_background_img');
        $custom_css = " .referral-section-1{
                    background: url({$urlReferAstudent}) no-repeat center bottom;
                    background-size: cover;
                }";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
    
    } elseif(is_page( 'contact-us' )){
        $urlContactUs = CFS()->get('contact_us_background_image');
        $custom_css = " .contact-us-section-1{
                    background: url({$urlContactUs}) no-repeat center bottom;
                    background-size: cover;
                }";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;

    } elseif(is_page('about')){
        $urlImpact = CFS()->get('about_us_background_image');
        $urlCinderellas = CFS()->get('about_us_cinderella_background_image');
        $custom_css = " .about-section-1{
                background: url({$urlImpact}) no-repeat center bottom;
                    background-size: cover;
                }
                .cinderella-section{
                    background: url({$urlCinderellas}) no-repeat center bottom;
                    background-size: cover;
                ";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
    }elseif(is_page('get-involved')){
        $urlInKindDonation = CFS()->get('donations_section_background_image_2');
        $urlGetInv = CFS()->get('get_involved_background_image');
        $urlDropOff = CFS()->get('drop_off_locations_background_image');
        $urlSponsorImg = CFS()->get('donations_section_background_image_2');
        $custom_css = " .in-kind-wishlist-background-image{
            background: url({$urlInKindDonation});
                }
                .get-involved-section-1{
            background-image: url({$urlGetInv});
            background-repeat:no-repeat;
            background-position: center center;
            background-size: cover;
            }
            .drop-off-donations{
                background: url({$urlDropOff}); 
                }
            .sponsorship-section-1{
                background: url({$urlSponsorImg})
                }";
  
            wp_add_inline_style( 'red-starter-style', $custom_css );
        return;
    }

}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );



function my_heading( $heading ) {     
    $heading = '';
    return $heading;
}
add_filter( 'wpmem_register_heading', 'my_heading' );


function custom_registration_form( $string ) {
    // the parameter $string is the 
    // generated html of the form
 
    // use str_replace like:
    // $new_string = str_replace( $needle, $replacement, $haystack );

    global $wpmem_a;
    $new_text = ( $wpmem_a == 'edit' ) ? 'Update Profile' : 'Get My Account';
    $string = str_replace( 'Register', $new_text, $string );
    return $string;
}
add_filter( 'wpmem_register_form', 'custom_registration_form' );