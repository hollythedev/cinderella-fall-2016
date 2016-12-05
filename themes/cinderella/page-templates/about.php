<?php
/**
 * Template Name: About Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="fullpage">
				<section class="section about-section-1 cp-landing-section">
					<p class="cp-landing-title"><?php echo CFS()->get( 'about_us_title' ); ?></p>
					<span class="cp-horizontal-line"></span>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>
				
				<section class=" section about-section-2 cp-marketing-section">
					<h2 class="cp-marketing-title about-page"><?php echo CFS()->get( 'about_us_section_2_title' ); ?></h2>
					<span class="cp-horizontal-line"></span>
					<p class="cp-marketing-copy"><?php echo CFS()->get( 'about_us_section_2_statement' ); ?></p>
					<a class="cp-button-link" href="<?php the_permalink(); ?>">Get Involved</a>
				</section>

				<section class="section about-section-3 fp-auto-height">
					<div class="cp-history-section"> 
						<p class=" cp-history-copy"><?php echo CFS()->get( 'about_us_history_block' ); ?></p>
					</div>

					<div class="cp-purple-section">
						<?php echo CFS()->get( 'about_us_impact_statement' ); ?>
					</div>

					<div class="cp-title-section">
						<h2 class="cp-title-text">Our main event</h2>
					</div>

					<div class="cp-awards">
						<?php echo CFS()->get( 'about_us_awards_block' ); ?>
						<a class="cp-button-link" href="<?php the_permalink(); ?>">More on Boutique Day</a>
					</div>
					
					<div class="about-section-5 cp-landing-section cinderella-section">
						<p class="cp-landing-title cinderella"><?php echo CFS()->get( 'about_us_cinderella_title' ); ?></p>
					</div>

					<div class="cinderella-section-referrals cp-purple-section">
						<?php echo CFS()->get( 'about_us_cinderella_referral_block' ); ?>
					</div>

					<div class="about-section-6 cp-stat-grid-wrapper">
						<?php 
						$fields = CFS()->get( 'about_us_referral_grid' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-stat-grid">
							<div class="cp-stat-text-wrapper">
								<h3 class="cp-stat-value"><?php echo $field['about_us_referral_statistic'];?></h3>
								<p class="cp-stat-description"><?php echo $field['about_us_referral_details'];?></p>
							</div>
							
							<div class="cp-stat-image-wrapper" style="background: url(<?php echo $field['about_us_referral_image'];?>); background-size: cover;"></div>
							</div>
								<?php endforeach ?>
						</div>
					</div>
<!--??? *** page is stopping here *** ???-->
					<div class=" about-cinderellas cp-purple-section">
						<?php echo CFS()->get( 'about_us_recipients' ); ?>
						<a class="cp-button-link" href="<?php the_permalink(); ?>">Get Involved</a>
					</div>
					
					<div class="cp-title-section">
						<h2 class="cp-title-text">We're so proud</h2>
					</div>
			
				<section class=" about-section-8 about_awards_gallery">
					<div class="about_awards_photos">
						<h2 class="about-awards-message"><?php echo CFS()->get( 'about_awards' ); ?></h2>
						<div class="carousel">
							<?php
								$fields = CFS()->get( 'about_us_awards_gallery' );
								foreach ( $fields as $field ) :
							?>
							<img class="carousel-image" src="<?php echo $field['about_us_awards_gallery_image'];?>" />
							<?php endforeach ?>
						</div>
					</div>
				</section>

					<section class="section about-section-10 ways-to-help">
						<h2>No gift is too small</h2>
						<p>	Help us contribute to these student’s stories.</p>
						<a class="button-link" href="<?php the_permalink(); ?>">Ways to Help</a>
					</section>
					<?php get_footer(); ?>
				</section> <!--end of section fp-auto-height -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->
