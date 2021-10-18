<?php

function samsung(){
	wp_enqueue_style('samsung_main_style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','samsung'); 