<?php
/**
 * Template Name: Get Involved Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

<!-- no gift is too small landing page full screen image-->
		<div id="fullpage">
			<section class="section get-involved-section-1">
				<?php echo CFS()->get( 'get_involved_no_gift' ); ?>
			</section>

			<section class="section fp-auto-height">
				<section class="get-involved-section-2">
					<p>There are a few ways you can help The Cinderella Project thrive</p>
					<!-- get involved stat grid-->
					<div class="cp-stat-grid-wrapper">
						<?php 
						$fields = CFS()->get( 'sponsorship_statistics_grid' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-stat-grid">
							<div class="cp-stat-text-wrapper">
								<h3 class="cp-stat-value"><?php echo $field['sponsorship_statistic'];?></h3>
								<p class="cp-stat-description"><?php echo $field['sponsorship_statistic_description'];?></p>
							</div>
							<div class="cp-stat-image-wrapper" style="background: url(<?php echo $field['sponsorship_statistic_image'];?>); background-size: cover;"></div>
						</div>
						<?php endforeach ?>
					</div>
				</section> <!-- end of get-involved section 2-->
				<!-- Beginning of Menu-->
					<section class="get-inv-nav-wrapper">
						<ul class="ways-to-help-menu">
							<li>Donations</li>
								<section class="donations-tab">
									<div class="donations-section-1">
										<h3>boutique day is a monumental event…</h3>
								<!-- First donations background image-->
									</div>

							<div class="get-involved-wishlist">	
								<div class="wishlist-menu">
										<!--most-needed/care package items/men's attire/women's attire/supplies/decorations-->
									<ul>
										add donations-wishlist menu items loop here
									</ul> 
								</div>
							</div>
							<!--Drop off donations background image and title-->
							<div class="get-involved-drop-off-donations">							
								<div class="drop-off-donations">
									<?php echo CFS()->get( 'drop_off_locations_title' ); ?>
									<?php echo CFS()->get( 'drop_off_locations_dates' ); ?>
								</div>
								<!--Donation locations loop start-->
								<?php 
								$fields = CFS()->get( 'drop_off_locations' );
								foreach ( $fields as $field ) :
								?>
								<div class="business-information">
									<h3 class="stat-value"><?php echo $field['business_name'];?></h3>
									<p class="stat-description"><?php echo $field['business_address'];?></p>
								</div>
								<?php endforeach ?>
							<!-- end of donations location here-->
								<div class="ideas-donations">
									<h2>Ideas for other donations?</h2>
									<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
								</div>
						</section> <!-- end of donations tab -->
			
					<li>Sponsorships</li>
						<section class="sponsorship-tab">
							<div class="sponsorship-section-1">
								<h3>boutique day is a monumental event…</h3>
						<!-- First donations background image-->
							</div>
							<div class="in-kind-donations-copy">
								<?php echo CFS()->get( 'sponsorship_in_kind_copy' ); ?>
							</div>
						<!-- Sponsorship quote area -->
							<div class="sponsorship-quote">
								<h2 class="quote"><span class="quote-text"><?php echo CFS()->get( 'sponsorship_quote' ); ?></span></h2>
								<h3 class="author"><?php echo CFS()->get( 'sponsorship_quote_author' ); ?></h3>
							</div>
							<div class="ideas-donations">
								<h2>Ideas for other donations?</h2>
								<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
							</div>
						</section> <!-- end of sponsorship tab -->

					<li>Fundraising</li>
						<section class="fundraising-tab">
							<div class="get-involved-fundraising">
								<h2>Together, we can make a difference!</h2>
								<p>Various small groups, clubs, organizations and institutions have creatively helped us raise money to make the Cinderella Project possible year after year.</p>
								<div class= "fundraising_gallery">
									<div class= "fundraising_photo">
									<?php 
										$fields = CFS()->get( 'fundraising_gallery' );

										foreach ( $fields as $field ) :
										?>
										<div class="donation-grid-container">
											<div class="image-wrapper" style="background: url(<?php echo $field['donation_package_image'];?>); background-size: cover;"></div>
											<div class="stat-text-wrapper">
												<h3 class="stat-value"><?php echo $field['donation_package_description'];?></h3>
												<p class="stat-description"><?php echo $field['donation_package_amount'];?></p>
											</div>
										</div>
										<div class="counter">
											<button class="target_pos" type="button">+</button>
											<div class="output">0</div>
											<button class="target_neg" type="button">-</button>
										</div>
										<?php endforeach ?>
										<a class="button-link" href="<?php the_permalink(); ?>">Support Us</a>
									</div>

									<div class="in-kind-wishlist-background-image">
										<?php echo CFS()->get( 'background_image_title_2' ); ?>
									</div>	

									<div class="get-involved-wishlist">	
										<div class="wishlist-menu">
												<!--most-needed/care package items/men's attire/women's attire/supplies/decorations-->
											<ul>
												add donations-wishlist menu items loop here
											</ul> 
										</div>
									</div>
									<!--Drop off donations background image and title-->
									<div class="get-involved-drop-off-donations">							
										<div class="drop-off-donations">
											<?php echo CFS()->get( 'drop_off_locations_title' ); ?>
											<?php echo CFS()->get( 'drop_off_locations_dates' ); ?>
										</div>
										<!--Donation locations loop start-->
										<?php 
										$fields = CFS()->get( 'drop_off_locations' );
										foreach ( $fields as $field ) :
										?>
										<div class="business-information">
											<h3 class="stat-value"><?php echo $field['business_name'];?></h3>
											<p class="stat-description"><?php echo $field['business_address'];?></p>
										</div>
										<?php endforeach ?>
									<!-- end of donations location here-->
										<div class="ideas-donations">
											<h2>Ideas for other donations?</h2>
											<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
										</div>
								</section> <!-- end of donations tab -->
					
							<li>Sponsorships</li>
								<section class="sponsorship-tab">
									<div class="sponsorship-section-1">
										<h3>boutique day is a monumental event…</h3>
								<!-- First donations background image-->
									</div>
									<div class="in-kind-donations-copy">
										<?php echo CFS()->get( 'sponsorship_in_kind_copy' ); ?>
									</div>
								<!-- Sponsorship quote area -->
									<div class="sponsorship-quote">
										<h2 class="quote"><span class="quote-text"><?php echo CFS()->get( 'sponsorship_quote' ); ?></span></h2>
										<h3 class="author"><?php echo CFS()->get( 'sponsorship_quote_author' ); ?></h3>
									</div>
									<div class="ideas-donations">
										<h2>Ideas for other donations?</h2>
										<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
									</div>
								</section> <!-- end of sponsorship tab -->

							<li>Fundraising</li>
								<section class="fundraising-tab">
									<div class="get-involved-fundraising">
										<h2>Together, we can make a difference!</h2>
										<p>Various small groups, clubs, organizations and institutions have creatively helped us raise money to make the Cinderella Project possible year after year.</p>
										<div class= "fundraising_gallery">
											<div class= "bd_photo">
											<?php 
												$fields = CFS()->get( 'fundraising_gallery' );
												foreach ( $fields as $field ) :
											?>
											<img src = "<?php echo $field['fundraising_gallery_image'];?>" />
											<?php	
												echo $field['fundraising_gallery_message'];
											?>
											<?php endforeach ?>
											</div>
											<a class="learn-about-link" href="<?php the_permalink(); ?>">Learn about the Cinderella Project</a>
										</div> <!-- end of fundraising gallery -->

										<div class="donations-idea">
											<h2>Have an idea and want to get involved?</h2>
											<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
										</div>
									</div> <!-- end of get-involved-fundraising -->
									<div class="fundraising-contact-form">
										<?php echo CFS()->get( 'fundraising_contact_form' ); ?>
									</div>
								</section> <!-- end of fundraising tab -->

							<li>Volunteer</li>
								<section class="volunteer-tab">
									<div class="volunteer-information">
										<?php echo CFS()->get( 'volunteer_information' ); ?>
									</div>

									<div class="volunteer-quote">
										<h2 class="quote"><span class="quote-text"><?php echo CFS()->get( 'volunteer_quote' ); ?></span></h2>
										<h3 class="author"><?php echo CFS()->get( 'volunteer_quote_author' ); ?></h3>
									</div>

									<h2>Some of our Volunteers</h2>
									<div class= "volunteer_gallery">
										<div class= "volunteer_photo">
											<?php 
												$fields = CFS()->get( 'volunteer_gallery' );
												foreach ( $fields as $field ) :
											?>
											<img src = "<?php echo $field['volunteer_gallery_image'];?>" />
											<?php	
												echo $field['volunteer_gallery_message'];
											?>
											<?php endforeach ?>
										</div>	
										<a class="learn-about-link" href="<?php the_permalink(); ?>">Learn about the Cinderella Project</a>
									</div> <!-- end of volunteer gallery -->
									<div class="volunteer-idea">
											<h2>Want to get involved?</h2>
											<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
									</div>

									<div class="volunteer-contact-form">
									<?php echo CFS()->get( 'volunteer_contact_form' ); ?>
									</div>
								</section> <!-- end of volunteer tab -->
						</ul> <!--end of ways-to-help-menu -->
					</section> <!-- end of get-inv-nav-wrapper -->
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



