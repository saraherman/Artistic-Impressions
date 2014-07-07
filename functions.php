<?php 
include 'autocracy/autocracy.php';

//Add supports

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

//Register Top Menu

register_nav_menus( array(
	'Header_Nav' => 'Header Navigation Area',
	) );

register_nav_menus( array(
	'Footer_Nav' => 'Footer Navigation Area',
	) );

//Define Custom Post Type

function art_create_post_type() {
	register_post_type('options', array(
		'labels' => array(
			'name' => __('Options'),
			'singular_name' => __('option')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'options'),
		'supports' => array('thumbnail', 'title', 'editor'),
		)
	);
	register_post_type('gallery', array(
		'labels' => array(
			'name' => __('Gallery'),
			'singular_name' => __('gallery')
			),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'gallery'),
		'supports' => array('thumbnail', 'title'),
		)
	);
}

add_action('init', 'art_create_post_type');


?>