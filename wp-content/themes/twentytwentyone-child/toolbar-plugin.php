<?php 

/*
Plugin Name:  Sample pluginDescription:  Sample plugin


*/
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}

function print_hello_world_title()  {
  echo "<h1>Hello World</h1>"; 
}
function hello_world_admin_menu()  {
  add_menu_page(
    'Hello World',// page title  
    'Hello World Menu Title', // menu title  
    'manage_options',// capability  
    'hello-world',// menu slug  
    'print_hello_world_title'  // callback function  
  );  
}  
add_action( 'admin_menu', 'hello_world_admin_menu' );
