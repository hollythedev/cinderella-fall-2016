<?php
/**
 * Template Name: Contact Us Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="contact-us-page">
			<section class="section contact-us-1">
				<div class="contact-us-background">
					<h2 class="contact-us-title"><?php echo CFS()->get( 'contact_us_message' ); ?></h2>
						<span class='horizontal-line'></span>
							<i class="angle-down fa fa-angle-down fa-3x"></i>
				</div>
			</select>
			
			<section class="registration">
				<div class="contactform">
					<?php echo CFS()->get( 'contact_us_select_menu' ); ?>
				<form>
					<a class="button-link" href="http://localhost:3000/cinderella/">Send a Message</a>
				</div>
			</section>
		</div>	
<!-- add custom fields-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
