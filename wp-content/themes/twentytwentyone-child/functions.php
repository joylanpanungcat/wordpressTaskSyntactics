<?php 

function my_plugin_add_stylesheet() {
wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', false, '1.9', 'all' );
    wp_enqueue_style( 'toastr', get_stylesheet_directory_uri() . '/toastr/toastr.css', false, false, 'all' );
   
}
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet',11 );


function enqueue_my_custom_script(){
    wp_enqueue_script('my-custom-js',get_stylesheet_directory_uri().'/custom.js',false,'1.2','all');
    wp_enqueue_script('toast-r','https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js',false);

    
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


function my_first_post_type(){

    $labels = array(
        'name' => _x('Cars', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Car', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add Car', '', 'your_text_domain'),
        'add_new_item' => __('Add New Car', 'your_text_domain'),
        'edit_item' => __('Edit Car', 'your_text_domain'),
        'new_item' => __('New Car', 'your_text_domain'),
        'all_items' => __('All Car', 'your_text_domain'),
        'view_item' => __('View Car', 'your_text_domain'),
        'search_items' => __('Search Car', 'your_text_domain'),
        'not_found' => __('No Car found', 'your_text_domain'),
        'not_found_in_trash' => __('No Car on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Car', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'cars'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon'=> 'dashicons-images-alt2',
        'supports' => array('title', 'thumbnail', 'editor','excerpt','page-attributes')
        
    );
register_post_type('cars',$args);

}
add_action('init','my_first_post_type');

function my_first_taxonomy(){
    $labels = array(
        'name' => __('Brands'),
        'singular_name' => __('Brand'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Brand'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Brand'),
        'new_item_name' => __('New')
    );
    $args = array(
        'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'brand',
		'all_items' => 'Category',
		'query_var' => true,
		'rewrite' => array('slug' => 'brands')
    );

    register_taxonomy( 'brands',array('cars'), $args );
}
add_action('init','my_first_taxonomy');


?>
