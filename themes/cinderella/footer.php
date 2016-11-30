<?php
/**
 * The template for displaying the footer.
 *
 * @package Cinderella_Project_Theme
 */

?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="globe-logo">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/globe-icon.svg" alt = "Globe Icon">
					</div>
					
					<div class="navigation">
						<div class="first-nav">
							<a href="#">Home</a>
							<a href="#">About</a>
							<a href="#">Boutique Day</a>
							<a href="#">Get Involed</a>
						</div>
						<div class="second-nav">
							<a href="#">Refer a Student</a>
							<a href="#">Blog</a>
							<a href="#">Contact Us</a>
							<a href="#">Account</a>
						</div>
					</div>

					<div class="logoDevelopment">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/globe-icon.svg" alt = "Globe Icon">
					</div>

					<div class="facebook">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt = "Facebook Icon">
					</div>
					
					<div class="information">
						<li>Registered Canadian Charitable Organization BN 86666 0699 RR0001</li>
						<li>The Cinderella Project 2016</li>
						<li>Mailing address: #172-219 Mackay Road, North Vancouver, BC V7P 3N6</li>
					</li>
					</div><!-- #content -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
