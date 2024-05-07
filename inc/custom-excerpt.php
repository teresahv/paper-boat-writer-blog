<?php

if(!function_exists('pbw_excerpt_more')):
    function pbw_excerpt_more(){
        return '<a href="'.get_permalink().'" class="excerpt-more">'.__(' leer más... ',
        'pbw').'<i class="fas fa-book-reader"></i></a>';
        
    }

add_filter('excerpt_more', 'pbw_excerpt_more');    
endif;

if(!function_exists('pbw_excerpt_length')):
    function pbw_excerpt_length(){
        return 16;
    }

add_filter('excerpt_length', 'pbw_excerpt_length');    
endif;
?>