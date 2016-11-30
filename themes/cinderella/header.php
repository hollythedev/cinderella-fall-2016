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
						<div class="nav-wrapper">
								<?php wp_nav_menu( array( 'menu_class' => 'nav-links-wrapper', 'link_before' => '<span class="nav-icon"></span>', 'link_after' => '',  'theme_location' => 'primary' )); ?>
							<div class="nav-close-container">
								<div class="nav-close-wrapper">
									<span class="nav-close-text">The Cinderella Project</span>
									<i class="nav-close-icon fa fa-times-circle-o fa-2x"></i>
								</div>
							</div>
						</div>
					</div>

					<div id="nav-icon">
						<i class="fa fa-bars"></i> 
					</div>
						
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
