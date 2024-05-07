<?php 

if(!function_exists('pbw_admin_scripts')):
    function pbw_admin_scripts () {
        wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap', array(), '1.0.0', 'all' );
        wp_register_style( 'google-fonts-2', 'https://fonts.googleapis.com/css2?family=Rochester&display=swap', array(), '1.0.0', 'all' );
        wp_register_style( 'custom-properties', get_bloginfo('stylesheet_directory').'/css/custom_properties.css', array('login'));
        wp_register_style( 'admin-page-style', get_bloginfo('stylesheet_directory').'/css/admin_page.css', array('google-fonts','google-fonts-2','custom-properties'), '1.0.0', 'all');
        
        wp_enqueue_style( 'google-fonts' );
        wp_enqueue_style( 'google-fonts-2' );
        wp_enqueue_style( 'admin-page-style');

        wp_register_script( 'admin-page', get_template_directory_uri() . '/js/admin_page.js', array('jquery'), '', true );
        
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'admin-page' );
    
    }
endif;

add_action( 'admin_enqueue_scripts', 'pbw_admin_scripts' );


if(!function_exists('pbw_add_editor_styles')):
    function pbw_add_editor_styles(){
        add_theme_support( 'editor-styles' );
        add_editor_style('https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap');
        add_editor_style('css/custom_properties.css');
        add_editor_style('css/editor-style.css');
    }
endif;

add_action('admin_init','pbw_add_editor_styles');

if(!function_exists('pbw_user_contact_methods')):
    function pbw_user_contact_methods($data_user){
        $data_user['facebook']=__('Facebook');
        $data_user['instagram']=__('Instagram');
        $data_user['twitter']=__('Twitter');
    
        return $data_user;
    }
endif;

add_filter('user_contactmethods', 'pbw_user_contact_methods');

