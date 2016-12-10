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
				<section class="section">
					<section class=" referral-section-1 cp-section cp-landing-section">
						<div class="cp-landing-top-divider">
							<h2 class="cp-landing-title"><?php echo CFS()->get( 'brand_title' ); ?></h2>
							<div class="cp-horizontal-line"></div>
						</div>
						<i class="cp-angle-down fa fa-angle-down"></i>
					</section>
				</section>

				<section class="section fp-auto-height">

					<section class="cp-title-section referral-section-2">
						<h2 class="cp-title-refer-student-text"><?php echo CFS()->get( 'referral_message' ); ?></h2>

					</section>

					<section class="referral-section-3">
						<div class="cp-referral-student-message">
						<?php echo CFS()->get( 'ref_a_student_message' ); ?>
						</div>

							<div class="cp-horizontal-line"></div>

						<div class="city-district">
							<?php echo CFS()->get( 'city_district' ); ?>
							<span class="bracket"><?php echo CFS()->get( 'cities_in_bracket' ); ?></span>
							<?php echo CFS()->get( 'city_district_2' ); ?>
						</div>
						<div class="student-download-form">
							<?php echo CFS()->get( 'ref_student_download' ); ?>
						</div>
							<!--<a class="cp-button-link button-color" href="#">Download Referral Form<i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
							<a class="cp-button-link button-color" href="/index.php?p=55">Contact Us<i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</section>


					<section class="cp-title-orange-section referral-section-4">
							<h2 class="cp-title-text">similar projects</h2>
					</section>

					<section class="referral-section-5 section-above-footer">
						<div class="district">
							<h2>Don’t see your District?</h2>
							<p>Don’t see your District? There may be a similar organization near you.</p>
							<h2><?php echo CFS()->get( 'dont_see_your_district' ); ?></h2>
							<p><?php echo CFS()->get( 'organizations' ); ?></p>
						</div>
						<!-- accordion of Districts goes here-->
						<section class="cp-resources">
							<div class="accordion">	
								<?php $args = array(
									'posts_per_page'   => 0,
									'post_type'        => 'district',
								);
								$similar_projects_loop = new WP_Query($args);
									// loop through all wishlist posts
									while( $similar_projects_loop->have_posts() ): $similar_projects_loop->the_post();
									?>
										<h3><?php the_title();?></h3>
										<div class="accordion">
										
										<?php 
											$projects = CFS()->get( 'district_loop' );
											if( isset($projects) ) :
											foreach ( $projects as $project ) :
										?>
											<h3><?php echo $project['project_city'];?></h3>
											<section class="cp-similar-project">
												<p><?php echo $project['project_name'];?></p>
												<p><?php echo $project['project_contact'];?></p>
												<p><?php echo $project['project_email'];?></p>
												<p><?php echo $project['project_phone'];?></p>
												<p><?php echo $project['project_website'];?></p>
											</section>
										<?php
										
										endforeach;
										endif;
										?>
									</div>
									<?php
									endwhile;
								// because we used a custom WP_Query() we need to reset the postdata for all other query calls below
								wp_reset_postdata();
								?>
							</div> <!-- end of outter accordion -->
						</section> <!-- end of cp-resources-->

					</section>
					<?php get_footer(); ?>

