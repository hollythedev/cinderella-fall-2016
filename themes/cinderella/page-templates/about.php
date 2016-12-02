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
			<section class="section about-section-1">
				<?php echo CFS()->get( 'about_us_title' ); ?>
			</section>

			<section class="section about-section-2 cp-marketing-section">
					<h2 class="cp-marketing-title"><?php echo CFS()->get( 'about_us_section_2_title' ); ?></h2>
					<span class="cp-horizontal-line"></span>
					<p class="cp-marketing-copy"><?php echo CFS()->get( 'about_us_section_2_statement' ); ?></p>
					<a class="cp-button-link" href="<?php the_permalink(); ?>">Get Involved</a>
			</section>

			<section class="section about-section-3"> 
				<p class="cp-marketing-copy"><?php echo CFS()->get( 'about_us_history_block' ); ?></p>
				<p class="cp-marketing-copy"><?php echo CFS()->get( 'about_us_impact_statement' ); ?></p>
			</section>

			<section class="section about-section-4 memorial-awards">
				<h2>Our main event</h2>
				<?php echo CFS()->get( 'about_us_awards_block' ); ?>
				<a class="cp-button-link" href="<?php the_permalink(); ?>">More on Boutique Day</a>
			</section>

			<section class="section about-section-5 cinderellas-cinderfellas">
				<div class="cinderella-section">
					<?php echo CFS()->get( 'about_us_cinderella_title' ); ?>
				</div>
				<div class="cinderella-section-referrals">
					<?php echo CFS()->get( 'about_us_cinderella_referral_block' ); ?>
				</div>
			</section>

			<section class="section about-section-7 about-us-referral-grid">
				<?php 
					$fields = CFS()->get( 'about_us_referral_grid' );
					foreach ( $fields as $field ) :
				?>
					<div class="stat-container">
						<div class="image-wrapper" style="background: url(<?php echo $field['about_us_referral_image'];?>); background-size: cover;"></div>
							<div class="stat-text-wrapper">
								<h3 class="stat-value"><?php echo $field['about_us_referral_statistic'];?></h3>
								<p class="stat-description"><?php echo $field['about_us_referral_details'];?></p>
							</div>
						</div>
					</div>
					<?php endforeach ?>
			</section>

			<section class="section about-section-8 about-cinderellas">
				<?php echo CFS()->get( 'about_us_recipients' ); ?>
				<a class="cp-button-link" href="<?php the_permalink(); ?>">Get Involved</a>
			</section>
			
			<section class="section about-section-9">
				<h2>We're so proud</h2>
			</section>

			<section class="section about_awards_gallery about-section-10">
				<div class= "about_awards_photos">
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

			<section class="section about-section-11 ways-to-help">
				<h2>No gift is too small</h2>
					<p>	Help us contribute to these student’s stories.</p>
						<a class="button-link" href="<?php the_permalink(); ?>">Ways to Help</a>
			</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
