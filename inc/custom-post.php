<?php


/**
 * Post Type: Video Gallery.
 */
	
function video_itpolly() {
	$labels = [
		"name" => __( "Video Gallery", "itpolly_newspro" ),
		"singular_name" => __( "Video", "itpolly_newspro" ), 
	];
	$args = [
		"label" => __( "Video", "itpolly_newspro" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "video_gallery",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "video_gallery", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-video-alt3',
		"supports" => [ "title",'editor', 'thumbnail' ], 
	];

	register_post_type( "video_gallery", $args ); 
}

add_action( 'init', 'video_itpolly' );
		
	
   
/**
 * Taxonomy: Video Gallery Categories.
 */

function video_category_itpolly() {

	$labels = [
		"name" => __( "Video Categories", "itpolly_newspro" ),
		"singular_name" => __( "Video Category", "itpolly_newspro" ),
	];
	$args = [
		"label" => __( "Video Categories", "itpolly_newspro" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'videocat', 'with_front' => false, ],

		];
	register_taxonomy( "videocat", [ "video_gallery" ], $args );
}
add_action( 'init', 'video_category_itpolly' ); 





/**
 * Post Type: Photo Gallery.
 */
	
function photo_itpolly() {
	$labels = [
		"name" => __( "Photo Gallery", "itpolly_newspro" ),
		"singular_name" => __( "Photo", "itpolly_newspro" ), 
	];
	$args = [
		"label" => __( "Photo", "itpolly_newspro" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"has_archive" => "photo_gallery",
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"hierarchical" => false,
		"rewrite" => [ "slug" => "photo_gallery", "with_front" => false ],
		"query_var" => true,
		'menu_icon' => 'dashicons-format-gallery',
		"supports" => [ "title",'editor', 'thumbnail' ], 
	];

	register_post_type( "photo_gallery", $args ); 
}

add_action( 'init', 'photo_itpolly' );
		
	
   
/**
 * Taxonomy: Photo Gallery Categories.
 */

function photo_category_itpolly() {

	$labels = [
		"name" => __( "Photo Categories", "itpolly_newspro" ),
		"singular_name" => __( "Photo Category", "itpolly_newspro" ),
	];
	$args = [
		"label" => __( "Photo Categories", "itpolly_newspro" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'photocat', 'with_front' => false, ],

		];
	register_taxonomy( "photocat", [ "photo_gallery" ], $args );
}
add_action( 'init', 'photo_category_itpolly' ); 


/* --------------Live TV----------------- */

if(function_exists('register_post_type')) {
		register_post_type('live', array(
			'labels' => array(
				'name' => __('Live', 'itpolly_newspro'),
				'menu_name' => __('Live', 'itpolly_newspro'),
				'add_new' => __('Add New', 'itpolly_newspro'),
				'add_new_item' => __('Add New', 'itpolly_newspro'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-video-alt',
			'supports' => array('title', 'thumbnail')
		   ));
	    }
	    
		
		
/* --------------Our Staff----------------- */

if(function_exists('register_post_type')) {
		register_post_type('staff', array(
			'labels' => array(
				'name' => __('Staff', 'itpolly_newspro'),
				'menu_name' => __('Our Staff', 'itpolly_newspro'),
				'add_new' => __('Add New Member', 'itpolly_newspro'),
				'add_new_item' => __('Add New Member', 'itpolly_newspro'),
			),
			'public' => true,
			'menu_icon' => 'dashicons-businessperson',
			'supports' => array('title')
		   ));
	    }
	    