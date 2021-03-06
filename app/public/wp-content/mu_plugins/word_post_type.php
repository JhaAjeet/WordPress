<?php


	function wordpress_post_types(){
	register_post_type('event',array(
		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Events'
			'add_new_item' => 'Add New Events',
			'edit_item' => 'Edit Event',
			'all_items' => 'All Events',
			'singular_name' => 'Event'
		),
		'menu_icon' => 'dashicons-calendar'
	));
}

add_action('init','wordpress_post_types');