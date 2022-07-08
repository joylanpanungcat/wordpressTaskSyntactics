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

        //load scripts
        add_action('wp_footer',array( $this, 'load_scripts'));

        //Register REST APi 
        add_action('rest_api_init',array($this, 'register_rest_api'));

        
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
            3,
            true
        );
    }
    public function load_shortcode(){
    {?> 
    <div class="contact-form">
    <form id='submit-form'>
        <div class="form-group mb-2">
            <label for="">Full Name</label>
            <input type="text" name="name" placeholder="Enter your name" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="email" class="form-control">
        </div>
        <div class="form-group mb-2">
            <label for="">Message</label>
           <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success w-100">Send Message</button>
    </form>
    </div>

    <?php }
}
public function load_scripts(){
    ?>
        <script>
        (function($) {
            $(document).ready(function() {
                var nonce = '<?php echo wp_create_nonce('wp_rest');?>';
                        $(document).on('click','#send-message',function(e){
                            e.preventDefault();
                            $('#contact-modal').modal('show');
                        });
                        
                        $(document).on('submit','#submit-form',function(e){
                            e.preventDefault();
                            var form=  $(this).serialize();

                            $.ajax({
                                    method: 'post',
                                    url: '<?php echo get_rest_url(null,'simple-contact-form/v1/send-email') ?>',
                                    headers: { 'X-WP-Nonce': nonce},
                                    data: form,
                                    dataType: 'json',
                                    success:function(data){
                                        $('#contact-modal').modal('hide');
                                        toastr.success(data);
                                    }

                            })
                        })
        })
    })(jQuery);
        </script>
    <?php
}
public function register_rest_api(){
    register_rest_route('simple-contact-form/v1','send-email',array(
        'methods'=> 'POST',
        'callback'=> array($this, 'handle_contact_form')
    ));
}
public function handle_contact_form($data){
    $headers = $data->get_headers();
    $params= $data->get_params();
    $nonce = $headers['x_wp_nonce'][0];

    if(!wp_verify_nonce( $nonce, 'wp_rest' )){
        return new WP_REST_Response('Message not sent', 422);
    }
    $post_id = wp_insert_post([
        'post_type'=>'simple_contact_form',
        'post_title'=> 'contact enquiry',
        'post_status'=> 'publish'
    ]);
    if($post_id){
        return "Message Send Successfully ";
    }
}
}
 new SimpleContactForm;