<?php

// Video Post type

add_action('init', 'video_register');

function video_register() {

	$labels = array(
		'name' => _x('Videos', 'post type general name'),
		'singular_name' => _x('Video', 'post type singular name'),
		'add_new' => _x('Add New', 'video'),
		'add_new_item' => __('Add New Video'),
		'edit_item' => __('Edit Video'),
		'new_item' => __('New Video'),
		'view_item' => __('View Video'),
		'search_items' => __('Search Video'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'video' , $args );
}


// Review Post type

add_action('init', 'review_register');

function review_register() {

	$labels = array(
		'name' => _x('Reviews', 'post type general name'),
		'singular_name' => _x('Review', 'post type singular name'),
		'add_new' => _x('Add New', 'review'),
		'add_new_item' => __('Add New Review'),
		'edit_item' => __('Edit Review'),
		'new_item' => __('New Review'),
		'view_item' => __('View Review'),
		'search_items' => __('Search Review'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => null,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	  ); 

	register_post_type( 'review' , $args );
}



// Custom Taxonomy

function add_console_taxonomies() {

	register_taxonomy('console', 'review', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'Consoles', 'taxonomy general name' ),
			'singular_name' => _x( 'Console', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search consoles' ),
			'all_items' => __( 'All consoles' ),
			'parent_item' => __( 'Parent Console' ),
			'parent_item_colon' => __( 'Parent Console:' ),
			'edit_item' => __( 'Edit Console' ),
			'update_item' => __( 'Update Console' ),
			'add_new_item' => __( 'Add New Console' ),
			'new_item_name' => __( 'New Console Name' ),
			'menu_name' => __( 'Consoles' ),
		),
		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'console', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	));
}
add_action( 'init', 'add_console_taxonomies', 0 );

?>