<?php
/**
 * Template Name: About Page
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div id="fullpage">
			<section class="section about">
				<div class="about-background-image"></div>
				<h2 class="about-us"><?php CFS()->get('');?></h2>
			</section>

			<section class="magic-of-cp">
				<h2 class="">this is the "Magic" of the Cinerella Project</h2>
					<span class="-horizontal-line"></span>
					<?php echo CFS()->get( '' ); ?>
				<a class="button-link" href="http://localhost:3000/cinderella/">Get Involved</a>
			</section>

			<section class="about-recognition">
				<?php echo CFS()->get( '' ); ?>
			</section>

			<section class="about-impact"> 
				<?php echo CFS()->get( '' ); ?>
			</section>

			<setion class="main-event">
				<h2 class="event">Our Main Event</h2>
				<?php echo CFS()->get( '' ); ?>
				<span class="horizontal-line"></span>
				<?php echo CFS()->get( '' ); ?>
				<span class="horizontal-line"></span>
				<?php echo CFS()->get( '' ); ?>
				<span class="horizontal-line"></span>
			</section>

			<section class="memorial-awards">
				<?php echo CFS()->get( '' ); ?>
				<a class="button" href="http://localhost:3000/cinderella/">More on Boutique Day</a>
			</section>

			<section class="cinderellas-cinderfellas">
				<h2>The Cinderellas & Cinderfellas</h2>
					<?php echo CFS()->get( '' ); ?>
			</section>

			<section class="referrals">
				<?php echo CFS()->get( '' ); ?>
			</section>

			<section class="">
				<?php 
					$fields = CFS()->get( '' );
					foreach ( $fields as $field ) :
				?>
					<div class="stat-container">
						<div class="image-wrapper" style="background: url(<?php echo $field['image_stat'];?>); background-size: cover;"></div>
						<div class="stat-text-wrapper">
							<h3 class="stat-value"><?php echo $field['title_stat'];?></h3>
							<p class="stat-description"><?php echo $field['description_stat'];?></p>
						</div>
						</div>
					</div>
					<?php endforeach ?>
			</section>

			<section>
				<?php echo CFS()->get( '' ); ?>
				<span class="horizontal-line"></span>
				<?php echo CFS()->get( '' ); ?>
				<a class="button" href="http://localhost:3000/cinderella">Get Involved</a>
			</section>

			<section class="proud-moment">
				<h2>We're so proud</h2>
				<?php echo CFS()->get( '' ); ?>
			</section>

			<section class="bla-bla">
				<?php echo CFS()->get( '' ); ?>
					<span class="line"></span>
						<div class="carousel">
							<?php
								$fields = CFS()->get( 'boutique_day_gallery' );
								foreach ( $fields as $field ) :
							?>
							<img class="carousel-image" src="<?php echo $field['boutique_day_gallery_image'];?>" />
							<?php endforeach ?>
						</div>
			</section>

			<section class="ways-to-help">
				<h2>No gift is too small</h2>
					<p>	Help us contribute to these student’s stories.</p>
						<a class="button-link" href="<?php the_permalink(); ?>">Ways to Help</a>
			</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
