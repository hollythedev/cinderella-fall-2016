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
				<section class="section home-section-1 cp-landing-section">
					<img class="brand-logo" src="<?php echo get_template_directory_uri() ?>/images/assets/cp_home-logo.svg" />
					<span class="cp-horizontal-line"></span>
					<p class="brand-slogan">Your story begins here.</p>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>


				<section class="section home-section-2 cp-marketing-section">
					<h2 class="cp-marketing-title front-page"><?php echo CFS()->get( 'section_2_title' ); ?></h2>
					<span class="cp-horizontal-line"></span>
					<p class="cp-marketing-copy"><?php echo CFS()->get( 'home_section_2_copy' ); ?></p>
					<a class="cp-button-link" href="/index.php?p=26">About Boutique Day</a>
					<p class="cp-learn-about-link"><a  href="/index.php?p=35">Learn about the Cinderella Project<i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
				</section>


				<section class="section home-section-3 cp-quote-section">
					<h2 class="cp-quote-wrapper"><span class="cp-quote-text"><?php echo CFS()->get( 'home_quote' ); ?></span></h2>
					<p class="cp-quote-author"><?php echo CFS()->get( 'home_quote_author' ); ?></p>
				</section>


				<section class="section fp-auto-height home-section-4">
					<section class="cp-expect-grid-wrapper">
						<?php 
						$fields = CFS()->get( 'what_to_expect' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-expect-grid">
							
								<p class="cp-expect-text-wrapper "><?php echo $field['what_to_expect_details'];?></p>
							
							<div class="cp-expect-image-wrapper" style="background: url(<?php echo $field['image_what_to_expect'];?>); background-size: cover;"></div>
						</div>
						<?php endforeach ?>
					</section>


					<section class=" home-section-5 cp-no-gift">
						<h2>No gift is too small</h2>
						<p>	Help us contribute to these student’s stories.</p>
						<a class="cp-button-link" href="/index.php?p=37">Ways to Help <i class="fa fa-caret-right" aria-hidden="true"></i></a>
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

