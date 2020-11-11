<?php

// Register Custom Post Type Portfolio
function create_portfolio_cpt() {

	$labels = array(
		'name' => _x( 'Portfolios', 'Post Type General Name', 'HTML2WP' ),
		'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'HTML2WP' ),
		'menu_name' => _x( 'Portfolios', 'Admin Menu text', 'HTML2WP' ),
		'name_admin_bar' => _x( 'Portfolio', 'Add New on Toolbar', 'HTML2WP' ),
		'archives' => __( 'Portfolio Archives', 'HTML2WP' ),
		'attributes' => __( 'Portfolio Attributes', 'HTML2WP' ),
		'parent_item_colon' => __( 'Parent Portfolio:', 'HTML2WP' ),
		'all_items' => __( 'All Portfolios', 'HTML2WP' ),
		'add_new_item' => __( 'Add New Portfolio', 'HTML2WP' ),
		'add_new' => __( 'Add New', 'HTML2WP' ),
		'new_item' => __( 'New Portfolio', 'HTML2WP' ),
		'edit_item' => __( 'Edit Portfolio', 'HTML2WP' ),
		'update_item' => __( 'Update Portfolio', 'HTML2WP' ),
		'view_item' => __( 'View Portfolio', 'HTML2WP' ),
		'view_items' => __( 'View Portfolios', 'HTML2WP' ),
		'search_items' => __( 'Search Portfolio', 'HTML2WP' ),
		'not_found' => __( 'Not found', 'HTML2WP' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'HTML2WP' ),
		'featured_image' => __( 'Featured Image', 'HTML2WP' ),
		'set_featured_image' => __( 'Set featured image', 'HTML2WP' ),
		'remove_featured_image' => __( 'Remove featured image', 'HTML2WP' ),
		'use_featured_image' => __( 'Use as featured image', 'HTML2WP' ),
		'insert_into_item' => __( 'Insert into Portfolio', 'HTML2WP' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Portfolio', 'HTML2WP' ),
		'items_list' => __( 'Portfolios list', 'HTML2WP' ),
		'items_list_navigation' => __( 'Portfolios list navigation', 'HTML2WP' ),
		'filter_items_list' => __( 'Filter Portfolios list', 'HTML2WP' ),
	);
	$args = array(
		'label' => __( 'Portfolio', 'HTML2WP' ),
		'description' => __( '', 'HTML2WP' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-art',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'create_portfolio_cpt', 0 );