<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Delete before delivering project if not used ***
// function register_custom_taxonomy() {
// // Resource Category custom taxonomy
// 	$labels = array(
// 		'name'                       => 'Resource Category',
// 		'singular_name'              => 'Resource Category',
// 		'menu_name'                  => 'Resource Categories',
// 		'all_items'                  => 'All Resource Categories',
// 		'parent_item'                => 'Parent Resource Category',
// 		'parent_item_colon'          => 'Parent Resource Category:',
// 		'new_item_name'              => 'New Resource Category',
// 		'add_new_item'               => 'Add Resource Category',
// 		'edit_item'                  => 'Edit Resource Category',
// 		'update_item'                => 'Update Resource Category',
// 		'view_item'                  => 'View Resource Category',
// 		'separate_items_with_commas' => 'Separate product types with commas',
// 		'add_or_remove_items'        => 'Add or remove resource category',
// 		'choose_from_most_used'      => 'Choose from the most used',
// 		'popular_items'              => 'Popular Resource Categories',
// 		'search_items'               => 'Search Resource Categories',
// 		'not_found'                  => 'Not Found',
// 		'no_terms'                   => 'No Resource Categories',
// 		'items_list'                 => 'Resource Category list',
// 		'items_list_navigation'      => 'Resource Category list navigation',
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
//         'show_in_rest'               => true,
// 	);
// 	register_taxonomy( 'resource_category', array( 'resource' ), $args );

// 	$labels = array(
// 		'name'                       => 'Resource Sub Category',
// 		'singular_name'              => 'Resource Sub Category',
// 		'menu_name'                  => 'Resource Sub Categories',
// 		'all_items'                  => 'All Resource Sub Categories',
// 		'parent_item'                => 'Parent Resource Sub Category',
// 		'parent_item_colon'          => 'Parent Resource Sub Category:',
// 		'new_item_name'              => 'New Resource Sub Category',
// 		'add_new_item'               => 'Add Resource Sub Category',
// 		'edit_item'                  => 'Edit Resource Sub Category',
// 		'update_item'                => 'Update Resource Sub Category',
// 		'view_item'                  => 'View Resource Sub Category',
// 		'separate_items_with_commas' => 'Separate product types with commas',
// 		'add_or_remove_items'        => 'Add or remove resource category',
// 		'choose_from_most_used'      => 'Choose from the most used',
// 		'popular_items'              => 'Popular Resource Sub Categories',
// 		'search_items'               => 'Search Resource Sub Categories',
// 		'not_found'                  => 'Not Found',
// 		'no_terms'                   => 'No Resource Sub Categories',
// 		'items_list'                 => 'Resource Sub Category list',
// 		'items_list_navigation'      => 'Resource Sub Category list navigation',
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => true,
//         'show_in_rest'               => true,
// 	);
// 	register_taxonomy( 'resource_sub_category', array( 'resource' ), $args );
// }
// add_action( 'init', 'register_custom_taxonomy', 0 );