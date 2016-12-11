<?php
/**
 * The template name: Page not found
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found cp-landing-section 404-image">
				<header class="page-header">
					<img src="<?php echo get_template_directory_uri() . '/images/assets/cp_404-fairyDust.svg'; ?>" alt="Fairy Dust Logo" />
				</header><!-- .page-header -->
				<section class="cp-errors">
					<h2 class="cp-404-title"><?php echo CFS()->get( '404_message' ); ?></h2>
					<p class="cp-error-message">Error code: 404</p>
				</section>
				<a class="cp-button-link button-color" href="<?php the_permalink(7); ?>">Get Back Home"<i class="fa fa-caret-right" aria-hidden="true"></i></a>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
