<?php
if(!function_exists('pbw_custom_header')):
    function pbw_custom_header(){
        
    //Imágen de fondo de mi página 
    add_theme_support('custom-background', array(
        'default-color'=>'8BB3BD',
        //'default-image'=>get_template_directory_uri( ).
        //'/images/portada.png',
        'default-repeat'=>'repeat',
        'default-position-x'=>'',
        'default-position-y'=>'',
        'default-size'=>'cover',
        'default-attachment'=>'fixed'
      
      ) );
        //Activar cabecera configurable
        add_theme_support('custom-header', apply_filters(
            'pbw_custom_header_args', array(
            'default-image'=> get_template_directory_uri( ).'/images/bannerBlog.png',
            'default-text-color'=>'EFECE2',
            'width'=>1800,
            'flex-width'=>true,
            'flex-height'=>true,
            'random-default'=>true,
            'video'=>true,
            'wp-head-callback'=>'pbw_wp_header_style'
        )) );
        
    //Logo personalizado
    add_theme_support('custom-logo', array(
        'height'=>100,
        'width'=>100,
        'flex-height'=>true,
        'flex-widht'=>true
      ) );

    }
endif;

add_action('after_setup_theme', 'pbw_custom_header');

if(!function_exists('pbw_wp_header_style')):
    function pbw_wp_header_style(){
        $header_text_color=get_header_textcolor();
    }
endif;
