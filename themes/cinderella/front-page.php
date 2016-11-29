<?php
/**
 * Template Name: Home Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php echo CFS()->get( 'home_background_image' ); ?>
			<?php echo CFS()->get( 'section_2_title' ); ?>
			<?php echo CFS()->get( 'home_section_2_copy' ); ?>
            <?php echo CFS()->get( 'home_section_2_link_1' ); ?>
            <?php echo CFS()->get( 'home_section_2_link_2' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
