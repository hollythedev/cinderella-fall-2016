<?php
/**
 * Template Name: Boutique Day Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<section class = "bd_gallery">
		 <div class = "bd_photo">
		 	<?php 
			$fields = CFS()->get( 'boutique_day_gallery' );
			foreach ( $fields as $field ) :
			?>
			<img src = "<?php echo $field['boutique_day_gallery_image'];?>" />
   			 <?php	
    			echo $field['boutique_day_message'];
			?>
			<?php endforeach ?>
		</div>
        </section>
		<section class = "bd_section_two">
				<?php echo CFS()->get( 'home_section_2_copy' ); ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
