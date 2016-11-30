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
					<p>Your story begins here.</p>
				</section>

				<section class="section home_section_2">
					<?php echo CFS()->get( 'section_2_title' ); ?>
					<?php echo CFS()->get( 'home_section_2_copy' ); ?>
					<?php echo CFS()->get( 'home_section_2_link_1' ); ?>
					<?php echo CFS()->get( 'home_section_2_link_2' ); ?>
				</section>

				<section class="section home_section_3">
					<?php echo CFS()->get( 'home_quote' ); ?>
					<?php echo CFS()->get( 'home_quote_author' ); ?>
				</section>

				<section class="section home_section_4">
					<!-- add student section if confirmed-->
				</section>

				<section class="section home_section_5">
					
					<?php 
					$fields = CFS()->get( 'home_stats' );
					foreach ( $fields as $field ) :
					?>
					<img src = "<?php echo $field['image_stat'];?>" />
					<?php	
						echo $field['title_stat'];
						echo $field['description_stat'];
					?>
					<?php endforeach ?>
				</section>

				<section class="section home_section 6">
					<h2>No gift is too small</h2>
					<p>	Help us contribute to these student’s stories.</p>
					<p><a class="donate" href="<?php the_permalink(); ?>">Ways to Help</a></p>
				</section>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
