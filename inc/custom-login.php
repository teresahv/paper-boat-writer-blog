<?php 

if(!function_exists('pbw_login_scripts')):
    function pbw_login_scripts () {
        wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap', array(), '1.0.0', 'all' );
        wp_register_style( 'google-fonts-2', 'https://fonts.googleapis.com/css2?family=Rochester&display=swap', array(), '1.0.0', 'all' );
        wp_register_style( 'custom-properties', get_bloginfo('stylesheet_directory').'/css/custom_properties.css', array('login'));
        wp_register_style( 'login-page-style', get_bloginfo('stylesheet_directory').'/css/login_page.css', array('google-fonts','google-fonts-2','custom-properties'), '1.0.0', 'all');
        
        wp_enqueue_style( 'google-fonts' );
        wp_enqueue_style( 'google-fonts-2' );
        wp_enqueue_style( 'login-page-style');

        wp_register_script( 'login-page', get_template_directory_uri() . '/js/login_page.js', array('jquery'), '', true );
        
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'login-page' );
    
  }
endif;

add_action( 'login_enqueue_scripts', 'pbw_login_scripts' );

if(!function_exists('pbw_login_logo_url')):
    function pbw_login_logo_url(){
        return home_url();
    }
endif;
add_filter('login_headerurl','pbw_login_logo_url');

if(!function_exists('pbw_login_logo_url_title')):
    function pbw_login_logo_url_title(){
        return get_bloginfo('title').'|'.get_bloginfo('description');
    }
endif;
add_filter('login_headertitle','pbw_login_logo_url_title');