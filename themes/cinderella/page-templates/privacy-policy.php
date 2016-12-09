<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Cinderella_Project_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="fullpage">
				<section class="section">
					<section class="privacy-section-1 cp-landing-section">
						<div class="cp-landing-top-divider">
							<h2 class="cp-landing-title"><?php echo CFS()->get( 'pp_title' ); ?></h2>
							<div class="cp-horizontal-line"></div>
						</div>
						<i class="cp-angle-down fa fa-angle-down"></i>
					</section>
				</section>
				
				<section class="section fp-auto-height">
					<section class="cp-orange-section">
						<h2 class="cp-privacy-title"><?php echo CFS()->get( 'pp_section_2_title' ); ?></h2>
            <p><?php echo CFS()->get( 'pp_message' ); ?></p>
					</section>

          <section class="cp-turquoise-section">
            <div class="cp-information"> 
              <h2 class="cp-privacy-title"><?php echo CFS()->get( 'information_title' ); ?></h2>
              <p><?php echo CFS()->get('information_message'); ?></p>
            </div>
          </section>

          <section class="cp-purple-section">
            <div class="personal-information">
              <h2 class="cp-privacy-title"><?php echo CFS()->get( 'personal_information_title' ); ?></h2>
              <p><?php echo CFS()->get( 'personal_information_message' ); ?></p>
            </div>
          </section>

          <section class="cp-orange-section">
              <h2 class="cp-privacy-title"><?php echo CFS()->get('hyperlinks_title'); ?></h2>
              <p><?php echo CFS()->get('hyperlinks_message'); ?></p>
          </section>
          <?php get_footer(); ?>
				</section> <!--end of section fp-auto-height -->
		</div>
	</main><!-- #main -->
</div><!-- #primary -->