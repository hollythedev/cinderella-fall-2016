<?php
/**
 * Template Name: Refer a Student Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="refer-a-student">
				<section class="section home-section-1">
					<div class="refer-student-background">
						<h3 class="brand-title"><?php echo CFS()->get( 'brand_title' ); ?></h3>
							<span class="horizontal-line"></span>
								<i class="angle-down fa fa-angle-down"></i>
					</div>
				</section>

				<section class=" home-section-2">
					<h2="referral-message"><?php echo CFS()->get( 'referral_message' ); ?></h2>
				</section>

				<section class=" home-section-3">
					<div class="referral-student-message">
						<?php echo CFS()->get( 'ref_a_student_message' ); ?>
					</div>
						<span class="horizontal-line"></span>
					<div clss="city-district">
						<?php echo CFS()->get( 'city_district' ); ?>
					<div class="student-download-form">
						<?php echo CFS()->get( 'ref_student_download' ); ?>
							<a class="button" href="http://localhost:3000/cinderella">Download Referral Form</a>
					</div>
				</section>

				<section class=" home-section-4">
					<h2><?php echo CFS()->get( 'similar_project' ); ?></h2>
				</section>

				<section class=" home-section-5">
					<h2><?php echo CFS()->get( 'dont_see_your_district' ); ?></h2>
					<!-- CONTACT FORM 7 -->
					<a class="button" href="http://localhost:3000/cinderella">Find Results</a>
				</section>

<!-- add custom fields-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
