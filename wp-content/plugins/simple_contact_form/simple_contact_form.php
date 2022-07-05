<?php 

/* 
Plugin Name: Simple Contact Form 
Description: Simple  Contact Form
Version: 1.0
Author: Syntactics Inc.
*/
if(!defined('ABSPATH')){
    echo "Unauthorized Access is strictly prohibited!";
    exit;
}

class SimpleContactForm{

    public function __construct(){
        //create custom post type
        add_action('init',array( $this, 'create_custom_post_type'));

        //add assets (js, css)
        add_action('wp_enqueue_scripts', array( $this, 'load_assets'));

        //add short code 
        add_shortcode('simple-contact-form', array($this, 'load_shortcode'));
    }

    public function create_custom_post_type(){
        $args = array(
            'public'=> true,
            'has_archive'=> true,
            'supports'=> array('title'),
            'exclude_from_search'=> true,
            'publicly_queryable'=>false,
            'capability'=> 'manage_options',
            'labels'=> array(
                'name'=> 'Contact Form',
                'singular_name'=> 'Contact Form Entry'
            ),
            'menu_icon'=> 'dashicons-format-aside'
        );
        
        register_post_type('simple_contact_form',$args);
    }

    public function load_assets(){
        wp_enqueue_style(
            'simple-contact-form',
            plugin_dir_url(__FILE__).'css/simple_contact_form.css',
            array(),
            1,
            'all'
        );
        wp_enqueue_script(
            'simple-contact-form',
            plugin_dir_url(__FILE__).'js/simple_contact_form.js',
            array('jquery'),
            false,
            true
        );
    }
    public function load_shortcode(){
        return "Hello, the shortcode is working";
    }
}
new SimpleContactForm;