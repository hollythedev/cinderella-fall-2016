<?php
/**
 * The front page of the website
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<div id="fullpage">
				<section class="section home-section-1">
					<img class="brand-logo" src="<?php echo get_template_directory_uri() ?>/images/test.svg" />
					<h2 class="brand-title"><?php bloginfo('name');?></h2>
					<span class="horizontal-line"></span>
					<p class="brand-slogan">Your story begins here.</p>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>


				<section class="section home-section-2 cp-marketing-section">
					<h2 class="cp-marketing-title"><?php echo CFS()->get( 'section_2_title' ); ?></h2>
					<span class="cp-horizontal-line"></span>
					<p class="cp-marketing-copy"><?php echo CFS()->get( 'home_section_2_copy' ); ?></p>
					<a class="cp-button-link" href="<?php the_permalink(); ?>">About Boutique Day</a>
					<a class="cp-learn-about-link" href="<?php the_permalink(); ?>">Learn about the Cinderella Project</a>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>


				<section class="section home-section-3 cp-quote-section">
					<h2 class="cp-quote-wrapper"><span class="cp-quote-text"><?php echo CFS()->get( 'home_quote' ); ?></span></h2>
					<h3 class="cp-quote-author"><?php echo CFS()->get( 'home_quote_author' ); ?></h3>
				</section>


				<section class="section fp-auto-height home-section-4">
					<section class="cp-checkered-section">
						<?php 
						$fields = CFS()->get( 'what_to_expect' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-checkered-container">
							<div class="cp-checkered-image-wrapper" style="background: url(<?php echo $field['image_what_to_expect'];?>); background-size: cover;"></div>
							<div class="cp-checkered-text-wrapper">
								<p class="cp-checkered-value"><?php echo $field['what_to_expect_details'];?></p>
							</div>
						</div>
						<?php endforeach ?>
					</section>


					<section class=" home-section-5">
						<h2>No gift is too small</h2>
						<p>	Help us contribute to these student’s stories.</p>
						<a class="cp-button-link" href="<?php the_permalink(); ?>">Ways to Help</a>
					</section>

					<section class=" home-section-6 cp-quote-section">
						<h2 class="cp-quote-wrapper"><span class="cp-quote-text"><?php echo CFS()->get( 'home_quote_2' ); ?></span></h2>
						<h3 class="cp-quote-author"><?php echo CFS()->get( 'home_quote_author_2' ); ?></h3>
					</section>
					
					<?php get_footer(); ?>
				</section> <!-- end of section fp-auto-height -->

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

