<?php
/**
 * Template Name: Front Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		 <section class = "home_photo">
			<h2><?php echo get_the_title();  ?></h2>
        </section>
		<section class="home_copy">
 			
			<?php echo CFS()->get( 'section_2_title' ); ?>
			<?php echo CFS()->get( 'home_section_2_copy' ); ?>
            <?php echo CFS()->get( 'home_section_2_link_1' ); ?>
            <?php echo CFS()->get( 'home_section_2_link_2' ); ?>
		</section>

          

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
