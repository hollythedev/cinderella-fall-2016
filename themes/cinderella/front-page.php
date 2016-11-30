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
				<section class="section home_section_1">
					<img class="brand-logo" src="<?php echo get_template_directory_uri() ?>/images/test.svg" />
					<h2 class="brand-title"><?php bloginfo('name');?></h2>
					<span class="horizontal-line"></span>
					<p class="brand-slogan">Your story begins here.</p>
					<i class="angle-down fa fa-angle-down"></i>
				</section>

				<section class="section home_section_2">
					<h2 class="title"><?php echo CFS()->get( 'section_2_title' ); ?></h2>
					<span class="horizontal-line"></span>
					<p class="copy"><?php echo CFS()->get( 'home_section_2_copy' ); ?></p>
					<div class="button-link"><?php echo CFS()->get( 'home_section_2_link_1' ); ?></div>
					<div class="learn-about-link"><?php echo CFS()->get( 'home_section_2_link_2' ); ?><i class="fa fa-caret-right" aria-hidden="true"></i></div>
					<i class="angle-down fa fa-angle-down"></i>
				</section>

				<section class="section home_section_3">
					<h2 class="quote"><span class="quote-text"><?php echo CFS()->get( 'home_quote' ); ?></span></h2>
					<h3 class="author"><?php echo CFS()->get( 'home_quote_author' ); ?></h3>
				</section>

				<section class="section fp-auto-height home_section_4">
					<?php 
					$fields = CFS()->get( 'home_stats' );
					foreach ( $fields as $field ) :
					?>
					<div class="stat-container">
						<div class="image-wrapper">
							<img src="<?php echo $field['image_stat'];?>" />
						</div>
						<div class="stat-text-wrapper">
							<h3 class="stat-value"><?php echo $field['title_stat'];?></h3>
							<p class="stat-description"><?php echo $field['description_stat'];?></p>
						</div>
					</div>
					<?php endforeach ?>

					<h2>No gift is too small</h2>
					<p>	Help us contribute to these student’s stories.</p>
					<p><a class="donate" href="<?php the_permalink(); ?>">Ways to Help</a></p>
					<?php get_footer(); ?>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

