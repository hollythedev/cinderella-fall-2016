<?php
/**
 * Template Name: Boutique Day Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
				<section class="section">
					<section class="boutique-day-section-1 cp-section cp-landing-section">
						<div class="cp-landing-top-divider">
							<h2 class="cp-landing-title"><?php echo CFS()->get( 'bd_message' ); ?></h2>	
							<div class="cp-horizontal-line"></div>
						</div>
						<i class="cp-angle-down fa fa-angle-down"></i>
					</section>
				</section>

					<!--the most magical day of the year-->
				<section class="section fp-auto-height">
					<section class="bd-section-2 cp-marketing-section cp-section">
						<h2 class="cp-marketing-title"><?php echo CFS()->get( 'bd_title' ); ?></h2>
						<span class="cp-horizontal-line"></span>
						<div class="cp-marketing-copy"><?php echo CFS()->get( 'bd_description' ); ?></div>
					</section>

					<!--You made it possible quote-->
					<section class="bd-section-3 cp-section cp-quote-section">
						<h2 class="cp-quote-wrapper"><span class="cp-quote-text"><?php echo CFS()->get( 'bd_quote' ); ?></span></h2>
						<p class="cp-quote-author"><?php echo CFS()->get( 'bd_author' ); ?></p>
					</section>

					<section class="bd-section-4 cp-title-section">
						<h2 class="cp-title-text bd-title-text">What to expect</h2>

					<!--What to expect image and copy grid-->
					
						<div class="cp-expect-grid-wrapper cp-grid-wrapper">
							
						<?php 
							$fields = CFS()->get( 'bd_what_to_expect' );
							foreach ( $fields as $field ) :
							?>
							<div class="cp-expect-grid cp-grid">
								<div class="text-wrapper cp-expect-text-wrapper">
									<p class="cp-expect-description"><?php echo $field['bd_what_to_expect_copy'];?></p>
								</div>
								<div class="cp-expect-image-wrapper" style="background: url(<?php echo $field['bd_what_to_expect_image'];?>); background-size: cover; background-position-x: 65%;"></div>
							</div>
							<?php endforeach ?>

						</div>
					</section>
					<!-- Desktop Gallery-->
					<div class= "bd-section-5 carousel gallery-section">
						
						<?php 
							$fields = CFS()->get( 'bd_what_to_expect' );
							foreach ( $fields as $field ) :
							?>
								<div class="carousel-image grayscale-image" style="background:url(<?php echo $field['bd_what_to_expect_image'];?>) 25% 15% no-repeat; background-size: cover;"></div>
						<?php endforeach ?>
							
					</div>
					<!-- End of Desktop Gallery-->
					<!--The Student resource kit-->
					<section class="bd-section-6 cp-purple-section">
						<p><?php echo CFS()->get( 'bd_resource_kit' ); ?></p>
					</section>
					<section class="bd-section-7 cp-marketing-section-small cp-section">
						<h3 class="cp-marketing-small-title">This kit is yours for life</h3>
						<div class="cp-horizontal-line"></div>
						<p class="bd-message">It includes everyday tips and links to community resources.</p>
						<a class="cp-button-link button-shrink" href="<?php the_permalink(129); ?>">Access the kit</a>
					</section>
					<!--Dreams come true-->
					<section class="bd-section-8 cp-marketing-section-small-purple cp-section section-above-footer">
						<h3 class="cp-marketing-small-title">Dreams come true. See for yourself.</h3>
						<div class="cp-horizontal-line"></div>
						<p class="bd-message"><?php echo CFS()->get( 'bd_footage_call_to_action' ); ?></p>
						<div class="footage">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/f4D4LrxZMTo" frameborder="0" allowfullscreen></iframe>
						</div>
					</section>
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

