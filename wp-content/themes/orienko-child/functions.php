<?php 
add_action( 'wp_enqueue_scripts', 'orienko_child_scripts_styles', 15 );
function orienko_child_scripts_styles(){
	wp_enqueue_style( 'child-theme', get_stylesheet_directory_uri() . '/css/child-theme.css' );
}
