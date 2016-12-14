<?php
/**
 * Template Name: About Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				<section class="section">
					<section class="about-section-1 cp-section cp-landing-section">
						<div class="cp-landing-top-divider">
							<h2 class="cp-landing-title"><?php echo CFS()->get( 'about_us_title' ); ?></h2>
							<div class="cp-horizontal-line"></div>
						</div>
						<i class="cp-angle-down fa fa-angle-down"></i>
					</section>
				</section>
				
				<section class="section fp-auto-height">
					<section class="about-section-2 cp-section cp-marketing-section">
						<h2 class="cp-marketing-title about-page"><?php echo CFS()->get( 'about_us_section_2_title' ); ?></h2>
						<span class="cp-horizontal-line"></span>
						<p class="cp-marketing-copy"><?php echo CFS()->get( 'about_us_section_2_statement' ); ?></p>
						<a class="cp-button-link" href="<?php the_permalink(37); ?>">Get Involved<i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</section>


					<section class="cp-history-section"> 
						<p class=" cp-history-copy"><?php echo CFS()->get( 'about_us_history_block' ); ?></p>
					</section>

					<section class="cp-purple-section">
						<?php echo CFS()->get( 'about_us_impact_statement' ); ?>
					</section>

					<section class="cp-title-section">
						<h2 class="cp-title-text">Our main event</h2>
					</section>

					<section class="cp-awards">
						<?php echo CFS()->get( 'about_us_awards_block' ); ?>
						<a class="cp-button-link" href="<?php the_permalink(26); ?>">More on Boutique Day<i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</section>
					
					<section class="about-section-5 image-title-section grayscale-image">
						<h3 class="image-title-text"><?php echo CFS()->get( 'about_us_cinderella_title' ); ?></h3>
					</section>

					<section class="cinderella-section-referrals cp-purple-section">
						<?php echo CFS()->get( 'about_us_cinderella_referral_block' ); ?>
					</section>

					<section class="about-section-6 cp-stat-grid-wrapper">
						<?php 
						$fields = CFS()->get( 'about_us_referral_grid' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-stat-grid">
							<div class="cp-stat-text-wrapper">
								<h3 class="cp-stat-value"><?php echo $field['about_us_referral_statistic'];?></h3>
								<p class="cp-stat-description"><?php echo $field['about_us_referral_details'];?></p>
							</div>
							
							<div class="cp-stat-image-wrapper grayscale-image" style="background: url(<?php echo $field['about_us_referral_image'];?>); background-size: cover; background-position-x: 50%;"></div>
							</div>
								<?php endforeach ?>
						
					</section>
					<section class="about-cinderellas cp-purple-section">
						<?php echo CFS()->get( 'about_us_recipients' ); ?>
						<a class="cp-button-link" href="<?php the_permalink(37); ?>">Get Involved<i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</section>
					
					<section class="cp-title-section">
						<h2 class="cp-title-text">We're so proud</h2>
					</section>

					<section class= "about-section-8 gallery-section">
							<div class= "carousel">
								<?php 
									$fields = CFS()->get( 'about_us_awards_gallery' );
									foreach ( $fields as $field ) :
									?>
									<div class="carousel-image grayscale-image" style="background:url(<?php echo $field['about_us_awards_gallery_image'];?>) top center no-repeat; background-size: cover;">
										<div class="gallery-bottom-divider">
											<div class="cp-horizontal-line"></div>
											<h2 class="carousel-text about-carousel-text"><?php echo $field['about_awards'];?></h2>
										</div>
									</div>	
								<?php endforeach ?>
							</div>	
					</section> <!-- end of about page awards gallery -->
						<!--awards gallery goes here -->

					<section class="about-section-10 ways-to-help cp-no-gift section-above-footer">
						<h2>No gift is too small</h2>
						<span class="cp-horizontal-line"></span>
						<p>	Help us contribute to these student’s stories.</p>
						<a class="cp-button-link" href="<?php the_permalink(37); ?>">Ways to Help<i class="fa fa-caret-right" aria-hidden="true"></i></a>
					</section>
					
					<?php get_footer(); ?>
					</div>
				</section> <!--end of section fp-auto-height -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->