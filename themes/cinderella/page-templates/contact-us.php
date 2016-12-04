<?php
/**
 * Template Name: Contact Us Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="fullpage">
				<section class="section contact-us-section-1">
					<h2 class="contact-us-title"><?php echo CFS()->get( 'contact_us_message' ); ?></h2>
						<span class="cp-horizontal-line"></span>
						<i class="angle-down fa fa-angle-down fa-3x"></i>
				</section>

				<section class="section fp-auto-height">
					<section class="section contact-us-section-2">
						<h2 class="cp-contactform"><?php echo CFS()->get( 'contact_us_select_menu' ); ?><h2>
						<a class="button-link" href="http://localhost:3000/cinderella/">Send a Message</a>
					</section>
				</section><!-- end of fp-auto-height -->
			</div><!-- #end of fullpage -->	
<!-- add custom fields-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
