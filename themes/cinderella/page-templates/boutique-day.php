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
						<h2 class="boutique-day-message"><?php echo CFS()->get( 'bd_message' ); ?></h2>
						
						<h2 class="boutique-day-message"><?php echo CFS()->get( 'boutique_day_message' ); ?></h2>
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
					<section class="bd_section_2 cp-marketing-section">
						<h2 class="cp-marketing-title"><?php echo CFS()->get( 'bd_title' ); ?></h2>
						<span class="cp-horizontal-line"></span>
						<div class="cp-marketing-copy"><?php echo CFS()->get( 'bd_description' ); ?></div>
					</section>

					<!--You made it possible quote-->
					<section class="bd_section_3 cp-quote-section">
						<h2 class="cp-quote-wrapper"><span class="cp-quote-text"><?php echo CFS()->get( 'bd_quote' ); ?></span></h2>
						<h3 class="cp-quote-author"><?php echo CFS()->get( 'bd_author' ); ?></h3>
					</section>
					<!--Students who attend BD are provided...-->
					<section class="bd_section_4 cp-description-section">
						<div class="cp-description-text"><?php echo CFS()->get( 'bd_about_paragraph' ); ?></div>
					</section>

					<section>
						<h2>What to expect</h2>
						
					</section>

					<!--What to expect image and copy grid-->
					<section class="bd_section_5">
					<section class="cp-checkered-section">
							<div style="display:none">
								<div class="cp-checkered-image-wrapper"></div>
								<div class="cp-checkered-text-wrapper"></div>
							</div>
						<?php 
						$fields = CFS()->get( 'bd_what_to_expect' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-checkered-container">
							<div class="cp-checkered-image-wrapper" style="background: url(<?php echo $field['bd_what_to_expect_image'];?>); background-size: cover;"></div>
							<div class="cp-checkered-text-wrapper">
								<p class="cp-checkered-description"><?php echo $field['bd_what_to_expect_copy'];?></p>
							</div>
						</div>
						<?php endforeach ?>
					</section>
					</section>



					<!--The Student resource kit-->
					<section class="bd_section_6">
								<?php echo CFS()->get( 'bd_resource_kit' ); ?>
								<h3>The Student Resource Kit your’s for life</h3>
								<?php echo CFS()->get( 'bd_register_2_mins' ); ?>
								<p><a class="register" href="<?php the_permalink(); ?>">Register</a></p>
					</section>
					<!--Dreams come true-->
					<section class="bd_section_7">
						<h3>Dreams come true. See for yourself.</h3>
						<?php echo CFS()->get( 'bd_footage_call_to_action' ); ?>
						<div class="footage">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/TFmLGlVx7hc" frameborder="0" allowfullscreen></iframe>
						</div>
					</section>
					<section class="bd_section_8">
						<h3>No gift is too small.</h3>
						<p>Help us contribute to these student’s stories.</p>
						<p><a class="register" href="<?php the_permalink(); ?>">Ways to help</a></p>
					</section>
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

