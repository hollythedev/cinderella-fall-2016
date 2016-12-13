<?php
/**
 * Cinderella Project Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cinderella_Project_Theme
 */

if ( ! function_exists( 'cp_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function cp_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // cp_starter_setup
add_action( 'after_setup_theme', 'cp_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function cp_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cp_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'cp_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cp_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cp_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function cp_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'cp_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function cp_starter_scripts() {
	wp_enqueue_style( 'cp-style', get_stylesheet_uri() );

	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_script( 'cp-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	
	wp_enqueue_script( 'jquery3', get_template_directory_uri() . '/build/js/jquery-3.1.1.min.js', array(), null, true );
	wp_enqueue_script( 'jquery-ui-accordion', array('jquery3'), null, true );
	wp_enqueue_script( 'flickity', get_template_directory_uri() . '/build/js/flickity.min.js', array('jquery3'), null, true );
	wp_enqueue_script( 'scrollOverflow', get_template_directory_uri() . '/build/js/scrolloverflow.min.js', array('jquery3'), null, true );
	wp_enqueue_script( 'fullPage', get_template_directory_uri() . '/build/js/jquery.fullpage.min.js', array('jquery3', 'scrollOverflow'), null, true );
	wp_enqueue_script( 'app', get_template_directory_uri() . '/build/js/app.min.js', array('jquery3', 'fullPage'), null, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cp_starter_scripts' );


  add_action('get_header', 'my_filter_head');

  function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
  }
  
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Removes the ability to add custom posts, categories and tags.
 */
require get_template_directory() . '/hide-default-posts.php';
