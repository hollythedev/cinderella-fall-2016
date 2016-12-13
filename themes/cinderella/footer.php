<?php
/**
 * The template for displaying the footer.
 *
 * @package Cinderella_Project_Theme
 */

?>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="globe-logo-wrapper">
						<div class="globe-logo">
							<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/globe-icon.svg" alt = "Globe Icon">
						</div>
					</div>
					
					<div class="footer-nav-wrapper">
					<div class="navigation">
							<p class="all-nav"><a href="<?php the_permalink(7); ?>">Home</a></p>
							<p class="all-nav"><a href="<?php the_permalink(35); ?>">About</a></p>
							<p class="all-nav"><a href="<?php the_permalink(26); ?>">Boutique Day</a></p>
							<p class="all-nav"><a href="<?php the_permalink(37); ?>">Get Involved</a></p>
							<p class="all-nav"><a href="<?php the_permalink(53); ?>">Refer a Student</a></p>
							<p class="all-nav"><a href="<?php the_permalink(129); ?>">Resource Kit</a></p>
							<p class="all-nav"><a href="<?php the_permalink(55); ?>">Contact Us</a></p>
							<p class="all-nav"><a href="<?php the_permalink(185); ?>">Privacy Policy</a></p>
					</div>
					</div>
						<div class="logoDevelopment">
							<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/nav-icons/cp_dm-icon-home.svg" alt="Spark Icon" />
							<h2>The Cinderella <span>Project</span></h2>
						</div>

					<div class="facebook-icon">
						<img class="fb-img" src="<?php echo get_template_directory_uri(); ?>/images/assets/facebook-icon.svg" alt="Facebook Icon" />
					</div>
					<span class="horizontal-line"></span>
					<div class="information">
						<p class="cp-copyright"><i class="fa fa-copyright" aria-hidden="true"></i>The Cinderella Project 2016</p>
						<p class="cp-organization">Registered Canadian Charitable Organization BN 86666 0699 RR0001</p>
					</div>
			
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
				</section> <!-- end of section fp-auto-height -->

			<?php if(is_home()) : ?>
			</div> <!-- #fullpage -->
			<?php endif ?>
			</main>
		</div><!-- #page -->
		</div>
	</div><!-- #primary -->

		<?php wp_footer(); ?>
	</body>
</html>
