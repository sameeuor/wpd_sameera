<?php
function load_scripts()
{
    wp_enqueue_style('lib', get_template_directory_uri() . '/css/lib.css');	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min');	
    wp_enqueue_style('general_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), '1.0.0', true);
	wp_enqueue_script('custom_script', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

function theme_setup()
{
	$content_width = 1150;
	register_nav_menus(array(
  		'primary' =>'Primary Menu',
		) 
	);
	add_theme_support('post-thumbnails');
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( "title-tag" );
	add_theme_support( 'custom-logo' ); 
}
add_action('after_setup_theme', 'theme_setup');
?>