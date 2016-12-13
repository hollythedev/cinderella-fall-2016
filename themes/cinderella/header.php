<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<header id="masthead" class="site-header" role="banner">
				<nav>
					<div id="mobile-nav">
						<div class="mobile-nav-menu-wrapper ">
							<div class="mobile-nav-menu ">
								<?php wp_nav_menu( array( 'menu_class' => 'nav-links-wrapper', 'link_before' => '<span class="nav-icon"></span>', 'link_after' => '',  'theme_location' => 'primary' )); ?>
							</div>
						</div>
						<div class="bottom-mobile-nav-container">
							<div class="bottom-mobile-nav-wrapper">
								<span class="bottom-mobile-nav-text">
									<?php if (! is_front_page()) : ?>
										<?php echo get_the_title(); ?>
									<?php else :
										echo "Cinderella Project";
									endif ?>
								</span>
								<div class="bottom-mobile-nav-icon-wrapper">
									<div id="bottom-mobile-nav-open-icon">
										<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/nav-icons/cp_dm-icon-hamburger.svg" alt="Spark Icon" />  
									</div>
									<div id="bottom-mobile-nav-close-icon">
										<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/nav-icons/cp_dm-icon-closeMenu.svg" alt="Spark Icon" />  
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
					<!-- Desktop navigation-->
				<nav>
					<div class="desktop-nav-wrapper">
						<div id="desktop-nav">
								<div class="cp-logo">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<p>	<img src = "<?php echo get_template_directory_uri(); ?>/images/assets/nav-icons/cp_dm-icon-home.svg" alt="Spark Icon" />  The Cinderella Project</p></a>
								</div>
							
								<div class="desktop-nav-menu ">
									<?php wp_nav_menu( array( 'menu_class' => 'nav-links-wrapper',  'link_after' => '',  'theme_location' => 'primary' )); ?>
								</div>
						</div>
					</div>
			
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
