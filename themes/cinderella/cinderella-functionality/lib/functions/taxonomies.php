<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
function register_custom_taxonomy() {
// Resource Category custom taxonomy
	$labels = array(
		'name'                       => 'Resource Category',
		'singular_name'              => 'Resource Category',
		'menu_name'                  => 'Resource Categories',
		'all_items'                  => 'All Resource Categories',
		'parent_item'                => 'Parent Resource Category',
		'parent_item_colon'          => 'Parent Resource Category:',
		'new_item_name'              => 'New Resource Category',
		'add_new_item'               => 'Add Resource Category',
		'edit_item'                  => 'Edit Resource Category',
		'update_item'                => 'Update Resource Category',
		'view_item'                  => 'View Resource Category',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove resource category',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Resource Categories',
		'search_items'               => 'Search Resource Categories',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No Resource Categories',
		'items_list'                 => 'Resource Category list',
		'items_list_navigation'      => 'Resource Category list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
        'show_in_rest'               => true,
	);
	register_taxonomy( 'resource_category', array( 'resource' ), $args );

}
add_action( 'init', 'register_custom_taxonomy', 0 );