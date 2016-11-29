<?php
/**
 * Template Name: Boutique Day Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class = "bd_section_1">
		 <div class = "bd_photo">
		 	<?php echo CFS()->get( 'boutique_day' ); ?>
					
		</div>
        </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
