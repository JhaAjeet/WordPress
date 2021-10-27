<?php

function samsung(){

	wp_enqueue_script('main_samsung_js', get_theme_file_uri('/build/index.js'), array('jquery'),'1.0','true');

	wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('samsung_main_style', get_theme_file_uri('/build/style-index.css'));
	wp_enqueue_style('samsung_extra_style', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts','samsung'); 


function wordpress_samsung(){
	// register_nav_menu('headerMenuLocation','Header Menu Location');

	// register_nav_menu('footerLocationOne','Footer Location One');
	// register_nav_menu('footerLocationTwo','Footer Location Two');
	
	add_theme_support('title-tag');
}
add_action('after_setup_theme','wordpress_samsung'); 



function wordpress_post_types(){
	register_post_type('event',array(
		'rewrite' => array('slug' => 'events'),

		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Events',
			'add_new_item' => 'Add New Events',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'
		),
		'menu_icon' => 'dashicons-calendar'
	));
}

add_action('init','wordpress_post_types');