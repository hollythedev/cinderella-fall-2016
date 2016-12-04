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
				<section class="section referral-section-1 cp-section">
						<h2 class="cp-marketing-title"><?php echo CFS()->get( 'brand_title' ); ?></h2>
						<span class="horizontal-line"></span>
						<i class="angle-down fa fa-angle-down"></i>
				</section>

				<section class="section fp-auto-height">
					<section class="cp-marketing-section referral-section-2">
						<h2 class="cp-marketing-title"><?php echo CFS()->get( 'referral_message' ); ?></h2>
					</section>

					<section class="section referral-section-3">
						<div class="cp-referral-student-message">
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

					<section class=" referral-section-4">
						<h2 class="cp-marketing-title"><?php echo CFS()->get( 'similar_project' ); ?></h2>
					</section>

					<section class=" referral-section-5">
						<h2><?php echo CFS()->get( 'dont_see_your_district' ); ?></h2>
						<a class="button" href="http://localhost:3000/cinderella">Find Results</a>
					</section>
					<?php get_footer(); ?>
				</section><!-- end of fp-auto-height -->	
			</div>				
		</main><!-- #main -->
	</div><!-- #primary -->
