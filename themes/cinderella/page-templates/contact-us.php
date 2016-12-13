<?php
/**
 * Template Name: Contact Us Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<section class="section">
					<section class="contact-us-section-1 cp-section cp-landing-section">
						<div class="cp-landing-top-divider">
							<h2 class="cp-landing-title"><?php echo CFS()->get( 'contact_us_message' ); ?></h2>
							<div class="cp-horizontal-line"></div>
						</div>
						<i class="cp-angle-down fa fa-angle-down fa-3x"></i>
					</section>
				</section>

				<section class="section fp-auto-height">
					<section class="cp-purple-section section-above-footer">
						<div class="cp-contact-form"><?php echo CFS()->get( 'contact_us_select_menu' ); ?><div>
							<div class="info">
								<h2 class="cp-title">The Cinderella Project</h2>
									<?php echo CFS()->get('contact_address'); ?>
									<?php echo CFS()->get('contact_number') ?>
									<?php echo CFS()->get('contact_email'); ?>
							</div>
						</div>
					</section>
					<?php get_footer(); ?>
				</section>  
			</div><!-- #end of fullpage -->	
		</main><!-- #main -->
	</div><!-- #primary -->


