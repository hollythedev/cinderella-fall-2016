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
			<section class="section">
				<section class="get-involved-section-1 cp-section cp-landing-section">
					<div class="cp-landing-top-divider">
						<h2 class="cp-landing-title"><?php echo CFS()->get( 'get_involved_no_gift' ); ?></h2>
						<div class="cp-horizontal-line"></div>
					</div>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>
			</section>

			<section class="section fp-auto-height">
				<!--white text on yellow background-->
				<div class="cp-message"> 
					<p>There are a few ways you can help The Cinderella Project thrive</p>
				</div> 
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
						<?php endforeach;
						wp_reset_postdata();
						?>
					</div>
				<!-- Beginning of Menu-->
					<div class="accordion">
							<h3>Donations</h3>
								<section class="donations-tab cp-section">

								<div class="donations-section-1 image-title-section grayscale-image">
									<h3 class="image-title-text">boutique day is a monumental event…</h3>
								</div>
								
								<div class="donations-funding-statement cp-orange-section">
									<p>In order to make it all possible, we rely on cash donations and in-kind donations of student care packages, formal wear, and much more. If you can provide support for any of the below items, we would greatly appreciate your donation! Each has an impact on a student’s experience.</p>
								</div>

								<div class="support-via-cash cp-purple-section">
									<h2>Support us with a cash donation</h2>
								<form class="donation-amount">
									<label for="amount">$</label>
									<input id="amount" type="text" placeholder="enter amount">
								</form>
								<a class="cp-button-link" href="<?php the_permalink(); ?>">Support Us <i class="fa fa-caret-right" aria-hidden="true"></i></a>
								<p class="horiz-line">or</p>
								<span class="cp-horizontal-line"></span>
								<p>Choose specific donation:</p>								
								
								<div class="cp-donation-grid-wrapper">
							<?php 
									$fields = CFS()->get( 'specific_donation_grid' );
									foreach ( $fields as $field ) :
								?>

							<div class="cp-donation-grid">
								<div class="cp-donation-text-wrapper">
									<h3 class="cp-donation-description"><?php echo $field['donation_package_description'];?></h3>
									<p class="cp-donation-value"><?php echo $field['donation_package_amount'];?></p>
								</div>
								<div class="cp-donation-image-wrapper" style="background: url(<?php echo $field['donation_package_image'];?>); background-size: cover;">

									<div class="counter">
										<div class="target_pos"><span class="button-symbol">+</span></div>
										<div class="output">0</div>
										<div class="target_neg"><span class="button-symbol">-</span></div>
									</div>
								</div>
							</div>		

 								<?php endforeach ?>
							</div>
								<a class="cp-button-link" href="<?php the_permalink(); ?>">Support Us</a>
							</div>

								<div class="in-kind-wishlist-background-image image-title-section grayscale-image">
									<h3 class="image-title-text"><?php echo CFS()->get( 'background_image_title_2' ); ?></h3>
								</div>


							<div class="accordion">
								<!-- arguments for the custom query, used to grab all wishlist posts -->
								<?php $args = array(
									'posts_per_page'   => 0,
									'post_type'        => 'wishlist',
								);
								$wishlist_loop = new WP_Query($args);
										// loop through all wishlist posts
										while( $wishlist_loop->have_posts() ): $wishlist_loop->the_post();
										?>
										<!--  print Wishlist accordion heading ie Most Wanted -->
										<h3><?php the_title(); ?></h3>
										<!-- this section tag contains eveything within the accordion for the above heading -->
										<section class="wishlist-section">
											<?php 
												// get the CFS wishlist loop and loop through all items
												$fields = CFS()->get( 'wishlist_menu' );
												foreach ( $fields as $field ) :
											?>
												<!-- print out the title of the wishlist category ie. Dress SHoes-->
												<h3><?php echo $field['wishlist_category'];?></h3>

												<!-- check if this category has specifics on the category ie. Womens sizes 10 and up. -->
												<!-- this check is needed because some categories do not have specifics and when we try to
													 call upon the $field['wishlist_specific'] array we will get an error because it does not
													 exist, so this check lets us only use the variable when it is defined. -->
												<?php if (isset($field['wishlist_specific'])) : ?>
												<!-- if it does print all specifics in an unordered list !-->
													<ul>
													<?php
														// this is the loop that goes through the array of specifics
														foreach ($field['wishlist_specific'] as $wishlist_specific) :
													?>
														<li><?php echo $wishlist_specific['items_description']; ?></li>

													<?php endforeach; ?>
												</ul>
												<?php endif ?>
											<?php endforeach; ?>
										</section>
										<?php
										endwhile;
									// because we used a custom WP_Query() we need to reset the postdata for all other query calls below
									wp_reset_postdata();
									?>
							</div>


								<div class="get-involved-drop-off-donations image-title-section grayscale-image">
									<div class="image-title-text">
										<h3 class="title-text"><?php echo CFS()->get( 'drop_off_locations_title' ); ?></h3>
										<p class="description-text"><?php echo CFS()->get( 'drop_off_locations_dates' ); ?></p>
									</div>
								</div>

							<!--Drop off donations background image and title-->
							<div class="get-involved-drop-off-locations">							
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
			
					<h3>Sponsorships</h3>
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

					<h3>Fundraising</h3>
						<section class="fundraising-tab">
							<div class="get-involved-fundraising">
								<h2>Together, we can make a difference!</h2>
								<p>Various small groups, clubs, organizations and institutions have creatively helped us raise money to make the Cinderella Project possible year after year.</p>
								<div class= "fundraising_gallery">
									<div class= "fundraising_photo">
									<?php 
										$fields = CFS()->get( 'specific_donation_grid' );

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
											<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch! <i class="fa fa-caret-right" aria-hidden="true"></i></a>
										</div>
								</section> <!-- end of donations tab -->

							<h3>Volunteer</h3>
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
										<div class= "carousel">
											<?php 
												$fields = CFS()->get( 'volunteer_gallery' );
												foreach ( $fields as $field ) :
											?>
											<img class="carousel-image" src = "<?php echo $field['volunteer_gallery_image'];?>" />
											<h2 class="carousel-text"><?php echo $field['volunteer_gallery_message'];?></h2>
											<?php endforeach ?>
										</div>	
										<a class="learn-about-link" href="<?php the_permalink(); ?>">Learn about the Cinderella Project</a>
									</div> <!-- end of volunteer gallery -->
									<div class="get-in-touch">
										<div class="get-in-touch-wrapper">
											<h2>Want to get involved?</h2>
											<span class="cp-horizontal-line"></span>
											<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!<i class="fa fa-caret-right" aria-hidden="true"></i></a>
										</div>
									</div>

									<div class="volunteer-contact-form">
									<?php echo CFS()->get( 'volunteer_contact_form' ); ?>
									</div>
								</section> <!-- end of volunteer tab -->
						</div>
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



