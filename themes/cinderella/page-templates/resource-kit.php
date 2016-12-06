<?php
/**
 * Template Name: Resource Kit Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div id="fullpage">
			<section class="section cp-landing-section">
				Landing Page
			</section>

			<section class="section fp-auto-height cp-resources-section">
				<section class="cp-resources-form">
					<div class="accordion">
						<?php    
							$terms = get_terms( array(
												'taxonomy' => 'resource_category',
												'orderby' => 'name', ));
							foreach ($terms as $term) :           
						?>  
						<h3><?php echo $term->name; ?></h3>
						<ul class="resource-list">
							<?php
									$resource_query = new WP_Query( array(
										'post_type' => 'resource',
										'tax_query' => array(
											array(
												'taxonomy' => 'resource_category',
												'field' => 'slug',
												'terms' => array( $term->slug ),
												'operator' => 'IN'
											)
										)
									) );
									?>
									<ul>
									<?php
									if ( $resource_query->have_posts() ) : while ( $resource_query->have_posts() ) : $resource_query->the_post(); ?>
<p>1</p>
									<?php endwhile; endif; ?>
									</ul>
									<?php
										$resource_query = null;
										wp_reset_postdata();
									?>
							<?php endforeach; ?>
						</div>

				</section>
				<?php get_footer(); ?>
			</section>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

