<?php
/**
 * Template Name: Resource Kit Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- add custom fields-->
	<div id="fullpage">
		<section class="section cp-landing-section">
			Landing Page
		</section>

		<section class="section fp-auto-height cp-registration-section">
			<?php echo CFS()->get( 'login_form' ); ?>
		</section>
	</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
