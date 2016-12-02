<?php
/**
 * Template Name: Get Involved Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="accordion">
  <h3>Section 1</h3>
  <div>
    <p>
    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
  <h3>Section 3</h3>
  <div>
    <p>
    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
    </p>
    <ul>
      <li>List item one</li>
      <li>List item two</li>
      <li>List item three</li>
    </ul>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
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
							
							<?php echo CFS()->get( 'fundraising_contact_form' ); ?>
						</section>
						<!-- volunteer section-->
					<li>Volunteer</li>
						<section class="volunteer-information">
							<?php echo CFS()->get( 'volunteer_information' ); ?>
						</section>
						<div class="volunteer-quote">
							<h2 class="quote"><span class="quote-text"><?php echo CFS()->get( 'volunteer_quote' ); ?></span></h2>
							<h3 class="author"><?php echo CFS()->get( 'volunteer_quote_author' ); ?></h3>
						</div>
						<h2>Some of our Volunteers</h2>
						<section class= "volunteer_gallery">
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
       	 				</section> <!-- end of volunteer gallery -->
				</ul>
			</div>
		</section>
		



		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
