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
    $custom_css = "";
    if(is_page( 'Home' )){
         $urlHome = CFS()->get('home_background_image');
         $custom_css = "
        .home-section-1{
        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url( {$urlHome}) no-repeat center bottom;
         background-size: cover;
        }";
       
        
    }elseif(is_page( '404' )){
        $urlPageNotFound = CFS()->get('404_background_image');
        $custom_css = ".404-image{
        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url( {$urlPageNotFound}) no-repeat center bottom;
         background-size: cover;
                }";
    
}elseif(is_page( 'privacy-policy' )){
        $urlPrivacyPolicy = CFS()->get('privacy_policy_img');
        $custom_css = ".privacy-section-1{
        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url( {$urlPrivacyPolicy}) no-repeat center bottom;
         background-size: cover;
                }";
  
         
    
}elseif(is_page( 'boutique-day' )){
        $urlBoutiqueDay = CFS()->get('boutique_day_background_img');
        $custom_css = ".boutique-day-section-1{
        background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url( {$urlBoutiqueDay}) no-repeat center bottom;
         background-size: cover;
                }";
  
          
    
}elseif(is_page( 'refer-a-student' )){
        $urlReferAstudent = CFS()->get('refer_student_background_img');
        $custom_css = " .referral-section-1{
                    background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url({$urlReferAstudent}) no-repeat center bottom;
                    background-size: cover;
                }";
  
    } elseif(is_page( 'contact-us' )){
        $urlContactUs = CFS()->get('contact_us_background_image');
        $custom_css = " .contact-us-section-1{
                    background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url({$urlContactUs}) no-repeat center bottom;
                    background-size: cover;
                }";
  
         

    } elseif(is_page('about')){
        $urlImpact = CFS()->get('about_us_background_image');
        $urlCinderellas = CFS()->get('about_us_cinderella_background_image');
        $custom_css = " .about-section-1{
                background: linear-gradient( to bottom, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.6) 100% ), url({$urlImpact}) no-repeat center bottom;
                    background-size: cover;
                }
                .about-section-5{
                    background: url({$urlCinderellas}) no-repeat center bottom;
                    background-size: cover;
                ";
  
    }elseif(is_page('get-involved')){
        $urlInKindDonation = CFS()->get('donations_section_background_image_2');
        $urlGetInv = CFS()->get('get_involved_background_image');
        $urlDropOff = CFS()->get('drop_off_locations_background_image');
        $urlDonationImg = CFS()->get('donations_section_background_image_1');
        $urlSponsorImg = CFS()->get('donations_section_background_image_2');
        $custom_css = " 
                .in-kind-wishlist-background-image{
                background: url({$urlInKindDonation}) no-repeat left bottom;
                background-size: cover;
                }
                .get-involved-section-1{
            background: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url({$urlGetInv}) no-repeat center bottom;
            background-size: cover;
            }
            .get-involved-drop-off-donations{
                background: url({$urlDropOff}) no-repeat 30% bottom;
                background-size: cover;
                }
            .sponsorship-section-1{
                background: url({$urlSponsorImg}) no-repeat 30% bottom;
                background-size: cover;
                }
                .donations-section-1{
                background: url({$urlDonationImg}) no-repeat 30% bottom;
                background-size: cover;
                }";
        
    }elseif(is_page('resource-kit')){
        $urlResourceKit = CFS()->get('resource_kit_background_image');
        $custom_css = " 
                .resource-kit-section-1{
            background: linear-gradient( to bottom, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.6) 100% ), url({$urlResourceKit}) no-repeat center bottom;
            background-size: cover;
            };";
    }   
  wp_add_inline_style( 'cp-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'my_styles_method' );



function filter_resource_json( $data, $post, $context ) {
    $phone = get_post_meta( $post->ID, 'phone', true );
    $website = get_post_meta( $post->ID, 'website', true );
    $description = get_post_meta( $post->ID, 'description', true );

    if( $phone ) {
        $data->data['phone'] = $phone;
    }
    if( $website ) {
        $data->data['website'] = $website;
    }
    if( $description ) {
        $data->data['description'] = $description;
    }

    return $data;
}
add_filter( 'rest_prepare_resource', 'filter_resource_json', 10, 3 );