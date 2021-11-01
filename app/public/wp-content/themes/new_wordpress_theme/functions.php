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
	//event post Type

	register_post_type('event',array(
		'supports' => array('title','editor','excerpt','custom-fields'),
		'show_in_rest' => true,
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


// program post type 

	register_post_type('program',array(
		'supports' => array('title','editor'),
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'Programs'),

		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Programs',
			'add_new_item' => 'Add New Program',
			'edit_item' => 'Edit Program',
			'all_items' => 'All Programs',
			'singular_name' => 'Program'
		),
		'menu_icon' => 'dashicons-awards'
	));

	// professor post type 

	register_post_type('professor',array(
		'supports' => array('title','editor'),
		'show_in_rest' => true,

		'public' => true,
		'labels' => array(
			'name' => 'professors',
			'add_new_item' => 'Add New professor',
			'edit_item' => 'Edit professor',
			'all_items' => 'All professors',
			'singular_name' => 'professor'
		),
		'menu_icon' => 'dashicons-welcome-learn-more'
	));
}


// Technologies post type 

	register_post_type('Tech',array(
		'supports' => array('title','editor'),
		'show_in_rest' => true,
		'rewrite' => array('slug' => 'Tech'),

		'has_archive' => true,
		'public' => true,
		'labels' => array(
			'name' => 'Techs',
			'add_new_item' => 'Add New Tech',
			'edit_item' => 'Edit Tech',
			'all_items' => 'All Techs',
			'singular_name' => 'Tech'
		),
		'menu_icon' => 'dashicons-awards'
	));





add_action('init','wordpress_post_types');


function university_adjust_query($query){

if(! is_admin() AND is_post_type_archive('program') AND $query->is_main_query()){
	$query->set('orderby','title');
	$query->set('order','ASC');
	$query->set('posts_per_page',2);
}


if(! is_admin() AND is_post_type_archive('Tech') AND $query->is_main_query()){
	$query->set('orderby','title');
	$query->set('order','ASC');
	$query->set('posts_per_page',2);
}


if(! is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
	$date = date('Ymd');
	$query->set('meta_key','event_date');
	$query->set('orderby','meta_value_num');
	$query->set('order','ASC');
	$query->set('meta_query',array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $date,
                'type' => 'Numeric'
              )
              
            ));
}

}
add_action('pre_get_posts','university_adjust_query');