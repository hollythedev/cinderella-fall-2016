<?php
/**
 * Template Name: Resource Kit Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

			<section class="section">
				<section class="resource-kit-section-1 cp-section cp-landing-section ">
					<div class="cp-landing-top-divider">
						<h2 class="cp-landing-title"><?php echo CFS()->get( 'resource_kit_section_1' ); ?></h2>
						<div class="cp-horizontal-line"></div>
					</div>
					<i class="cp-angle-down fa fa-angle-down"></i>
				</section>
			</section>

			<section class="cp-resources-section cp-purple-section">

				<section class="cp-resources">
					<div class="accordion">	
						<?php $args = array(
							'posts_per_page'   => 0,
							'post_type'        => 'resource',
						);
						$resource_loop = new WP_Query($args);
							// loop through all wishlist posts
							while( $resource_loop->have_posts() ): $resource_loop->the_post();
							?>
								<h3><?php the_title();?></h3>
								<div class="accordion">
								
								<?php 
									$secondary_categories = CFS()->get( 'resource_secondary_category_loop' );
									foreach ( $secondary_categories as $secondary_category ) :
								?>
									<h3><?php echo $secondary_category['resource_secondary_category'];?></h3>
									
									<?php 
									$resources = $secondary_category['resource_information'];
									if( isset($resources) ) :
									?>
									<section class="cp-resource-item">
										<?php
									foreach ( $resources as $resource ) :
									?>
										<p><?php echo $resource['resource_business_name'];?></p>
										<p><?php echo $resource['resource_business_address'];?></p>
										<p><?php echo $resource['resource_business_phone'];?></p>
										<p><?php echo $resource['resource_business_website'];?></p>
										<p><?php echo $resource['resource_description'];?></p>

									<?php endforeach ?>
									</section>
								<?php
								endif;
								endforeach;
								?>
							</div>
							<?php
							endwhile;
						// because we used a custom WP_Query() we need to reset the postdata for all other query calls below
						wp_reset_postdata();
						?>
					</div> <!-- end of outter accordion -->
				</section> <!-- end of cp-resources-->
			<?php get_footer(); ?>
