<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; 
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 158,
        'flex-width'  => false,
        'flex-height' => false,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup', 11 );