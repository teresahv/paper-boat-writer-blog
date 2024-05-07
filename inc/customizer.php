<?php 
if(!function_exists('pbw_customize_register')):
    function pbw_customize_register($wp_cutomize){
        $wp_cutomize->get_setting('blogname')->transport='postMessage';
        $wp_cutomize->get_setting('blogdescription')->transport='postMessage';

    if(isset($wp_cutomize->selective_refresh)){
        $wp_cutomize->selective_refresh->add_partial('blogname', array(
            'selector'=>'WP-Header-title',
            'render_callback'=>'pbw_customize_blogname'
        ));

        $wp_cutomize->selective_refresh->add_partial('blogdescription', array(
            'selector'=>'WP-Header-description',
            'render_callback'=>'pbw_customize_blogdescription'
        ));
        }
    }
endif;

if(!function_exists('pbw_customize_blogname')):
    function pbw_customize_blogname(){
        bloginfo('name');
    }
endif;


if(!function_exists('pbw_customize_blogdescription')):
    function pbw_customize_blogdescription(){
        bloginfo('description');
    }
endif;
?>