<?php
/**
 * Template Name: Boutique Day Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div id="fullpage">
				<section class= "section bd_gallery">
					<div class= "bd_photo">
						<h2 class="carousel-text"><?php echo CFS()->get( 'bd_message' ); ?></h2>
						<div class="carousel">
							<?php
								$fields = CFS()->get( 'bd_gallery' );
								foreach ( $fields as $field ) :
							?>
							<img class="carousel-image" src="<?php echo $field['bd_gallery_image'];?>" />
							<?php endforeach ?>
						</div>
					</div>
				</section>
					<!--the most magical day of the year-->
				<section class="section fp-auto-height">
					<section class="bd_section_2 section cp-marketing-section">
						<h2 class="cp-marketing-title boutique-day"><?php echo CFS()->get( 'bd_title' ); ?></h2>
						<span class="cp-horizontal-line"></span>
						<div class="cp-marketing-copy"><?php echo CFS()->get( 'bd_description' ); ?></div>
					</section>

					<!--You made it possible quote-->
					<section class="bd_section_3 section cp-quote-section">
						<h2 class="cp-quote-wrapper"><span class="cp-quote-text"><?php echo CFS()->get( 'bd_quote' ); ?></span></h2>
						<h3 class="cp-quote-author"><?php echo CFS()->get( 'bd_author' ); ?></h3>
					</section>

					<section class=" cp-title-section">
						<h2 class="cp-title-text">What to expect</h2>
					</section>

					<!--What to expect image and copy grid-->
					<section class="bd_section_5">
						<div class="cp-expect-grid-wrapper">
						<?php 
							$fields = CFS()->get( 'bd_what_to_expect' );
							foreach ( $fields as $field ) :
							?>
							<div class="cp-expect-grid">
								<div class="cp-expect-text-wrapper">
									<p class="cp-expect-description"><?php echo $field['bd_what_to_expect_copy'];?></p>
								</div>
								<div class="cp-expect-image-wrapper" style="background: url(<?php echo $field['bd_what_to_expect_image'];?>); background-size: cover;"></div>
							</div>
						<?php endforeach ?>
						</div>
					</section>
					<!--The Student resource kit-->
					<section class="bd_section_6">
						<p><?php echo CFS()->get( 'bd_resource_kit' ); ?></p>
						<h3>This kit is yours for life</h3>
						<p>It includes everyday tips and links to community resources.</p>
						<p><a class="register" href="<?php the_permalink(); ?>">Access the kit</a></p>
					</section>
					<!--Dreams come true-->
					<section class="bd_section_7">
						<h3>Dreams come true. See for yourself.</h3>
						<p><?php echo CFS()->get( 'bd_footage_call_to_action' ); ?></p>
						<div class="footage">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/TFmLGlVx7hc" frameborder="0" allowfullscreen></iframe>
						</div>
					</section>
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

