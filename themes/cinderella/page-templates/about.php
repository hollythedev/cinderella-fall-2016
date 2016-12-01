<?php
/**
 * Template Name: About Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php echo CFS()->get( '' ); ?>
			<?php echo CFS()->get( '' ); ?>
			<?php echo CFS()->get( '' ); ?>
				<?php the_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
