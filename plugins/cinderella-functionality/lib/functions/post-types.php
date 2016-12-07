<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */


function register_custom_post_types() {

// Register District Post Type
	$labels = array(
		'name'                  => 'Districts',
		'singular_name'         => 'District',
		'menu_name'             => 'Districts',
		'name_admin_bar'        => 'District',
		'archives'              => 'Districts',
		'parent_item_colon'     => 'Parent Distrits:',
		'all_items'             => 'All Districts',
		'add_new_item'          => 'Add New District',
		'add_new'               => 'Add New',
		'new_item'              => 'New District',
		'edit_item'             => 'Edit District',
		'update_item'           => 'Update District',
		'view_item'             => 'View District',
		'search_items'          => 'Search District',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into district',
		'uploaded_to_this_item' => 'Uploaded to this district',
		'items_list'            => 'Districts list',
		'items_list_navigation' => 'Districts list navigation',
		'filter_items_list'     => 'Filter districts list',
	);
	$args = array(
		'label'                 => 'District',
		'description'           => 'District locations for the Cinderella Project',
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-location',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => 'district',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'district', $args );


// Register Wishlist Post Type
	$labels = array(
		'name'                  => 'Wishlists',
		'singular_name'         => 'Wishlist',
		'menu_name'             => 'Wishlists',
		'name_admin_bar'        => 'Wishlist',
		'archives'              => 'Wishlist',
		'parent_item_colon'     => 'Parent Wishlist:',
		'all_items'             => 'All Wishlists',
		'add_new_item'          => 'Add New Wishlist',
		'add_new'               => 'Add New',
		'new_item'              => 'New Wishlist',
		'edit_item'             => 'Edit Wishlist',
		'update_item'           => 'Update Wishlist',
		'view_item'             => 'View Wishlist',
		'search_items'          => 'Search Wishlist',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into wishlist',
		'uploaded_to_this_item' => 'Uploaded to this wishlist',
		'items_list'            => 'Wishlists list',
		'items_list_navigation' => 'Wishlists list navigation',
		'filter_items_list'     => 'Filter wishlists list',
	);
	$args = array(
		'label'                 => 'Wishlist',
		'description'           => 'Wishlists items for the Cinderella Project',
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => 'wishlist',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'wishlist', $args );

// Register Resources Post Type
	$labels = array(
		'name'                  => 'Resources',
		'singular_name'         => 'Resource',
		'menu_name'             => 'Resources',
		'name_admin_bar'        => 'Resource',
		'archives'              => 'Resource',
		'parent_item_colon'     => 'Parent Resource:',
		'all_items'             => 'All Resources',
		'add_new_item'          => 'Add New Resource',
		'add_new'               => 'Add New',
		'new_item'              => 'New Resource',
		'edit_item'             => 'Edit Resource',
		'update_item'           => 'Update Resource',
		'view_item'             => 'View Resource',
		'search_items'          => 'Search Resource',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into wishlist',
		'uploaded_to_this_item' => 'Uploaded to this wishlist',
		'items_list'            => 'Resources list',
		'items_list_navigation' => 'Resources list navigation',
		'filter_items_list'     => 'Filter wishlists list',
	);
	$args = array(
		'label'                 => 'Resource',
		'description'           => 'Resources items for the Cinderella Project',
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-list-view',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => 'resource',		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'       => true,
	);
	register_post_type( 'resource', $args );
}
add_action( 'init', 'register_custom_post_types', 0 );
