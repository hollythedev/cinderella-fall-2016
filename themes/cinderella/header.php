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
							<ul class="nav-ul">
								<li>link 1</li>
								<li>link 2</li>
								<li>link 3</li>
							</ul>
							<i class="nav-close fa fa-times-circle-o"></i> 
						</div>
					</div>

					<div id="nav-icon">
						<i class="fa fa-bars"></i> 
					</div>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->

			<div id="content" class="site-content">
