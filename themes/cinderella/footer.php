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
						<ul class="first-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Boutique Day</a></li>
							<li><a href="#">Get Involed</a></li>
						</ul>
						<ul class="second-nav">
							<li><a href="#">Refer a Student</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Account</a></li>
						</ul>
						<div class="logoDevelopment">
							<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/nav-icons/cp_dm-icon-home.svg" alt ="Spark Icon">
							<h2>The Cinderella <spa>Project<span></h2>
						</div>
					</div>

					<div class="facebook-icon">
						<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/facebook-icon.svg" alt = "Facebook Icon">
					</div>
					
					<div class="information">
						<p>Registered Canadian Charitable Organization BN 86666 0699 RR0001</p>
						<p>The Cinderella Project 2016</p>
						<p>Mailing address: #172-219 Mackay Road, North Vancouver, BC V7P 3N6</p>
					</div>
					</div><!-- #content -->
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
