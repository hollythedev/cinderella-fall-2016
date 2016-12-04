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
						<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/globe-icon.svg" alt = "Globe Icon">
					</div>
					
					<div class="navigation">
						<div class="nav">
							<p><a href="#">Home</a></p>
							<p><a href="#">About</a></p>
							<p><a href="#">Boutique Day</a></p>
						</div>
						<div class="nav-2">
							<p><a href="#">Get Involed</a></p>
							<p><a href="#">Refer a Student</a></p>
							<p><a href="#">Blog</a></p>
						</div>
						<div class="nav-3">
							<p><a href="#">Contact Us</a></p>
							<p><a href="#">Account</a></p>
						</div>
						<div class="logoDevelopment">
							<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/nav-icons/cp_dm-icon-home.svg" alt ="Spark Icon">
							<h2>The Cinderella <spa>Project<span></h2>
						</div>
					</div>

					<div class="facebook-icon">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/facebook-icon.svg" alt = "Facebook Icon">
					</div>
					
					<div class="information">
						<p class="cp-copyright"><i class="fa fa-copyright" aria-hidden="true"></i>The Cinderella Project 2016</p>
						<p>Registered Canadian Charitable Organization BN 86666 0699 RR0001</p>
					</div>
					</div><!-- #content -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
