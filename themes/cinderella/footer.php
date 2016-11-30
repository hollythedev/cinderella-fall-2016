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
						<div>
							<a href="#">Home</a>
							<a href="#">About</a>
							<a href="#">Boutique Day</a>
							<a href="#">Get Involed</a>
						</div>
						<div>
							<a href="#">Refer a Student</a>
							<a href="#">Blog</a>
							<a href="#">Contact Us</a>
							<a href="#">Account</a>
						</div>
					</div>

					<div class="facebook">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg" alt = "Facebook Icon">
					</div>
					
					<div clas="information">
						<div>Registered Canadian Charitable Organization BN 86666 0699 RR0001</div>
						<div>The Cinderella Project 2016</div>
						<div>Mailing address: #172-219 Mackay Road, North Vancouver, BC V7P 3N6</div>
					</div>

					<div class="logoDevelopment">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/globe-icon.svg" alt = "Globe Icon">
					</div>
			</div><!-- #content -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
