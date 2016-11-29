<?php
/**
 * Template Name: About Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php echo CFS()->get( 'our_story' ); ?>
			<?php echo CFS()->get( 'our_team_title' ); ?>
			<?php echo CFS()->get( 'our_team' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
