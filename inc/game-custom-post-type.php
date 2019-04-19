<?php

// Register Custom Post Type
function simpons_games() {

	$labels = array(
		'name'                  => _x( 'games', 'Post Type General Name', 'goiblas' ),
		'singular_name'         => _x( 'game', 'Post Type Singular Name', 'goiblas' ),
		'menu_name'             => __( 'games', 'goiblas' ),
		'name_admin_bar'        => __( 'games', 'goiblas' ),
		'archives'              => __( 'Item Archives', 'goiblas' ),
		'attributes'            => __( 'Item Attributes', 'goiblas' ),
		'parent_item_colon'     => __( 'Parent Item:', 'goiblas' ),
		'all_items'             => __( 'All Items', 'goiblas' ),
		'add_new_item'          => __( 'Add New Item', 'goiblas' ),
		'add_new'               => __( 'Add New', 'goiblas' ),
		'new_item'              => __( 'New Item', 'goiblas' ),
		'edit_item'             => __( 'Edit Item', 'goiblas' ),
		'update_item'           => __( 'Update Item', 'goiblas' ),
		'view_item'             => __( 'View Item', 'goiblas' ),
		'view_items'            => __( 'View Items', 'goiblas' ),
		'search_items'          => __( 'Search Item', 'goiblas' ),
		'not_found'             => __( 'Not found', 'goiblas' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'goiblas' ),
		'featured_image'        => __( 'Featured Image', 'goiblas' ),
		'set_featured_image'    => __( 'Set featured image', 'goiblas' ),
		'remove_featured_image' => __( 'Remove featured image', 'goiblas' ),
		'use_featured_image'    => __( 'Use as featured image', 'goiblas' ),
		'insert_into_item'      => __( 'Insert into item', 'goiblas' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'goiblas' ),
		'items_list'            => __( 'Items list', 'goiblas' ),
		'items_list_navigation' => __( 'Items list navigation', 'goiblas' ),
		'filter_items_list'     => __( 'Filter items list', 'goiblas' ),
	);
	$args = array(
		'label'                 => __( 'game', 'goiblas' ),
		'description'           => __( 'Post Type Description', 'goiblas' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'game', $args );

}
add_action( 'init', 'simpons_games', 0 );