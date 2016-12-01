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
						$fields = CFS()->get( 'home_stats' );
						foreach ( $fields as $field ) :
						?>
						<div class="cp-checkered-container">
							<div class="cp-checkered-image-wrapper" style="background: url(<?php echo $field['image_stat'];?>); background-size: cover;"></div>
							<div class="cp-checkered-text-wrapper">
								<h3 class="cp-checkered-value"><?php echo $field['title_stat'];?></h3>
								<p class="cp-checkered-description"><?php echo $field['description_stat'];?></p>
							</div>
						</div>
						<?php endforeach ?>
					</section>

					<h2>No gift is too small</h2>
					<p>	Help us contribute to these student’s stories.</p>
					<a class="cp-button-link" href="<?php the_permalink(); ?>">Ways to Help</a>
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

