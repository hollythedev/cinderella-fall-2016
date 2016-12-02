<?php
/**
 * Template Name: Refer a Student Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="fullpage">
				<section class="section home-section-1">
					<div class="refer-student-background-img"></div>
					<h2 class="brand-title"><?php echo CFS()->get( 'brand-title' ); ?></h2>
					<span class="horizontal-line"></span>
					<i class="angle-down fa fa-angle-down"></i>
				</section>

				<section class="section home-section-2">
					<h2="referral-message"><?php echo CFS()->get( 'referral_message' ); ?></h2>
				</section>

				<section class="section home-section-3">
					<?php echo CFS()->get( 'referrals_from_district' ); ?>
						<span class="horizontal-line"></span>
					<?php echo CFS()->get( 'city_district' ); ?>
					<a class="button" href="http://localhost:3000/cinderella">Download Referral Form</a>
				</section>

				<section class="section home-section-4">
					<?php echo CFS()->get( 'similar_project' ); ?>
				</section>

				<section class="section home-section-5">
					<h2><?php echo CFS()->get( 'dont_see_your_district' ); ?></h2>
					<!-- CONTACT FORM 7 -->
					<a class="button" href="http://localhost:3000/cinderella">Find Results</a>
				</section>

<!-- add custom fields-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
