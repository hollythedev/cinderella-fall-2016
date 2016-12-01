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
			<section>
				<div class="background-image">
					<div class="band-logo">
					<h2 class="brand-title"><?php echo CFS()->get( '' ); ?></h2>
					<i class="angle-down fa fa-angle-down"></i>
			</select>
			<section class="registration">
				<form>
					<select class="drop-down">
						<option value="Select Value">Select Value</option>
						<option value="Student Referral">Student Referral</option>
						<option value="Donation">Donation</option>
						<option value="Sponsorship">Sponsorship</option>
						<option value="Fundraising">Fundraising</option>
						<option value="Volunteer">Volunteer</option>
						<option value="Account">Account</option>
						<option value="General">General</option>
						<option value="Resource Kit">Resource Kit</option>
						<option value="Value">Value</option>
					<select>	
					<!--   CONTACT FORM 7 HERE-->
					<a class="button-link" href="http://localhost:3000/cinderella/">Send a Message</a>
				</form>
			</section>
		</div>	
<!-- add custom fields-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
