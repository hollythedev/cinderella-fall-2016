<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Wishlist Post Type
function register_wishlist_post_type() {

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
		'supports'              => array( 'title','custom-fields'),
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

}
add_action( 'init', 'register_wishlist_post_type', 0 );
