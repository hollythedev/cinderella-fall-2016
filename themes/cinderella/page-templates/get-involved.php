<?php
/**
 * Template Name: Get Involved Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<section class="get-involved-section-1">
			<?php echo CFS()->get( 'get_involved_no_gift' ); ?>
			
		</section>
		<section class="get-involved-section-2">
			<p>There are a few ways you can help The Cinderella Project thrive</p>
			<div class="get-inv-nav-wrapper">
				<ul class="help-nav">
					<li>Donations</li>
						<div class="donations-section-1">
							
							<p>100% of every donation received goes to make the students’ experience with the Cinderella Project better.
Cash donations help us purchase harder to obtain items such as large or small clothing/shoe sizes! 
We also rely on them to pay costs such as storage, dry cleaning and transportation amongst other expenses.</p>
							<p><a class="button-link" href="<?php the_permalink(); ?>">Pledge now</a></p>
						</div>
						<div class="donations-section-2">
							<h3>In-kind Donations</h3>
					<!-- in kind donations background image-->
						</div>
						<div class ="donations-section-3">
							<h3>Boutique Day is a monumental event…</h3>
							<p>and in order to make it all possible, we rely on donations of student care packages, formal wear, and much more. If you can provide support for any of the below items, we would greatly appreciate your donation! Each has an impact on a student’s experience.</p>
							<h3>Our Wishlist</h3>
							<div class="wishlist-menu">
								<ul>
 								<!--add donations menu items here-->
								</ul> <!-- end of help nav -->
							</div>
						</div>
					<!--Drop off donations background image and title-->
						<section class="drop-off-donations">							
							<div class="drop-off-locations">
								<?php echo CFS()->get( 'drop_off_locations_title' ); ?>
								<?php echo CFS()->get( 'drop_off_locations_dates' ); ?>
							</div>
							<?php 
					$fields = CFS()->get( 'drop_off_locations' );
					foreach ( $fields as $field ) :
					?>
					<div class="business-information">
							<h3 class="stat-value"><?php echo $field['business_name'];?></h3>
							<p class="stat-description"><?php echo $field['business_address'];?></p>
					</div>
					<?php endforeach ?>
						</section>
						<div class="ideas-donations">
							<h2>Ideas for other donations?</h2>
							<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
						</div>
					<li>Sponsorships</li>
					<section class="sponsorship-stats">
					<?php 
					$fields = CFS()->get( 'sponsorship_statistics_grid' );
					foreach ( $fields as $field ) :
					?>
					<div class="stat-container">
						<div class="image-wrapper" style="background: url(<?php echo $field['sponsorship_statistic_image'];?>); background-size: cover;"></div>
						<div class="stat-text-wrapper">
							<h3 class="stat-value"><?php echo $field['sponsorship_statistic'];?></h3>
							<p class="stat-description"><?php echo $field['sponsorship_statistic_description'];?></p>
						</div>
					</div>
					<?php endforeach ?>
					</section>
					<!-- Sponsorship quote area -->
					<div class="sponsorship-quote">
						<h2 class="quote"><span class="quote-text"><?php echo CFS()->get( 'sponsorship_quote' ); ?></span></h2>
						<h3 class="author"><?php echo CFS()->get( 'sponsorship_quote_author' ); ?></h3>
					</div>
					<div class="sponsor-via-cash">
						<h2>sponsor via cash donation</h2>
					</div>
					<div class="donate">
						<form class="donation-amount">
                				<label for="amount">$</label>
               					 <input id="amount" type="text" placeholder="enter amount">
						</form>
					</div>
					<a class="button-link" href="<?php the_permalink(); ?>">Pledge Now</a>
					<p>or</p>
					<p>Choose specific donation:</p>
					<!-- add grid with counter here 6x-->
					<div class="sponsorship-stats">
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
					<?php endforeach ?>
					</div>
					<a class="button-link" href="<?php the_permalink(); ?>">Pledge Now</a>
					<li>Fundraising</li>
						<section class="get-involved-fundraising">
							<h2>Together, we can make a difference!</h2>
							<p>Various small groups, clubs, organizations and institutions have creatively helped us raise money to make the Cinderella Project possible year after year.</p>
							<section class= "fundraising_gallery">
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
       	 					</section> <!-- end of fundraising gallery -->
							<div class="donations-idea">
								<h2>Have an idea and want to get involved?</h2>
								<a class="learn-about-link" href="<?php the_permalink(); ?>">Get in touch!</a>
							</div>
						</section> <!-- end of get-involved-fundraising -->
						<section class="fundraising-contact-form">
							<!-- fundraising contact form goes here -->
						</section>
					<li>Volunteer</li>
				</ul>
			</div>
		</section>
		



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
