<?php 

function my_plugin_add_stylesheet() {
wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.8', 'all' );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet',11 );


function enqueue_my_custom_script(){
    wp_enqueue_script('my-custom-js',get_stylesheet_directory_uri().'/custom.js',false,'1.2','all');
}
add_action('wp_enqueue_scripts','enqueue_my_custom_script');

function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );

function enqueue_load_fa() {
    echo "fontawesome";
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );


?>