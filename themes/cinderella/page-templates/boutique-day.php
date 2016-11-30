<?php
/**
 * Template Name: Boutique Day Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class= "bd_gallery">
				 <div class= "bd_photo">
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
				<!--the most magical day of the year-->
			<section class="bd_section_2">
				<?php echo CFS()->get( 'bd_title' ); ?>
				<?php echo CFS()->get( 'bd_description' ); ?>
			</section>
			<!--You made it possible quote-->
			<section class="bd_section_3">
				<?php echo CFS()->get( 'bd_quote' ); ?>
				<?php echo CFS()->get( 'bd_author' ); ?>
			</section>
			<!--Students who attend BD are provided...-->
			<section class="bd_section_4">
				<?php echo CFS()->get( 'bd_about_bd' ); ?>
				<?php echo CFS()->get( 'bd_expect_title' ); ?>
			</section>
			<!--What to expect image and copy grid-->
			<section class="bd_section_5">
				<?php 
					$fields = CFS()->get( 'bd_what_to_expect' );
					foreach ( $fields as $field ) :
					?>
					<img src = "<?php echo $field['bd_what_to_expect_image'];?>" />
					<?php	
						echo $field['bd_what_to_expect_copy'];
					?>
					<?php endforeach ?>
			</section>
			<!--The Student resource kit-->
			<section class="bd_section_6">
						<?php echo CFS()->get( 'bd_resource_kit' ); ?>
						<?php echo CFS()->get( 'bd_register_kit' ); ?>
						<?php echo CFS()->get( 'bd_register_2_mins' ); ?>
						<p><a class="register" href="<?php the_permalink(); ?>">Register</a></p>
			</section>
			<!--Dreams come true-->
			<section class="bd_section_7">
				<?php echo CFS()->get( 'bd_dreams_titles' ); ?>
				<?php echo CFS()->get( 'bd_footage_call_to_action' ); ?>
				<div class="footage">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/TFmLGlVx7hc" frameborder="0" allowfullscreen></iframe>
				</div>
			</section>
			<section class="bd_section_8">
				<?php echo CFS()->get( 'bd_gift' ); ?>
				<?php echo CFS()->get( 'bd_contribute' ); ?>
				<p><a class="register" href="<?php the_permalink(); ?>">Ways to help</a></p>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
