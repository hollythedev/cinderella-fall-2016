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
				<section class="section">
					<section class="contact-us-section-1 cp-section cp-landing-section">
						<h2 class="cp-marketing-title"><?php echo CFS()->get( 'contact_us_message' ); ?></h2>
						<span class="cp-horizontal-line"></span>
						<i class="cp-angle-down fa fa-angle-down fa-3x"></i>
					</section>
				</section>

				<section class="section fp-auto-height">
					<section class="section contact-us-section-2 section-above-footer">
						<p class="cp-contactform"><?php echo CFS()->get( 'contact_us_select_menu' ); ?><p>
							<div class="cp-contact-info">
								<h2 class="cp-title">The Cinderella Project</h2>
								<div class="cp-contacts">
									<?php echo CFS()->get('contact_address'); ?>
									<?php echo CFS()->get('contact_number') ?>
									<?php echo CFS()->get('contact_email'); ?>
								</div>
							</div>
					</section>
					<?php get_footer(); ?>
				</section><!-- end of fp-auto-height -->
			</div><!-- #end of fullpage -->	
		</main><!-- #main -->
	</div><!-- #primary -->
