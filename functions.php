<?php
/**
  * paperboatwriter
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mawt
 * @since 1.0.0
 * @version 1.9.0
 */
//Establecer el ancho máximo permitido para cualquier contenido en el tema, como oEmbeds e imágenes /Content_Width
if(!isset($content_width)){
  $content_width=800;
}
if(!function_exists('pbw_scripts')):
    function pbw_scripts () {
      wp_register_style( 'font-awesome',get_stylesheet_uri(), '/css/fontawesome.css', array(), '',true );
        wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Courier+Prime&display=swap', array(), '1.0.0', 'all' );
        wp_register_style( 'google-fonts-2', 'https://fonts.googleapis.com/css2?family=Rochester&display=swap', array(), '1.0.0', 'all' );
        wp_register_style( 'style', get_stylesheet_uri(), array('google-fonts', 'google-fonts-2', 'font-awesome'), '1.0.0', 'all' );
        wp_enqueue_style( 'font-awesome' );
        wp_enqueue_style( 'google-fonts' );
        wp_enqueue_style( 'google-fonts-2' );
        wp_enqueue_style( 'style' );

        wp_register_script( 'scripts', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0.0', true );
        
        wp_enqueue_script( 'scripts' );
    
  }
endif;

add_action( 'wp_enqueue_scripts', 'pbw_scripts' );

if(!function_exists('pbw_setup')):
  function pbw_setup(){

//soporte idioms * soporte thumbnails * activar support html5 (goodPracticsSemantic)
    load_theme_textdomain('pbw', get_template_directory( ).'/languages');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ) );

    add_theme_support( 'post-formats', array(
      'aside',
      'gallery',
      'link',
      'image',
      'quote',
      'status',
      'video',
      'audio',
      'chat'
    ) );

    //Permite que los themes y plugings administren el título, si se activa, no debe usarse wp_title()
    add_theme_support( 'title-tag' );
    
    //Activar Feeds RSS
    add_theme_support('automatic-feed-links');

    //Ocultar tags innecesarios del head
    //Version del wordpress
    remove_action( 'wp_head', 'wp_generator');

    //Imprime sugerencias de recursos para los navegadores para precargar, pre-renderizar y pre-conectarse a sitios web
    remove_action('wp_head', 'wp_resourse_hints', 2);

    //Quitar barra de administración en el frontend
    add_filter('show_admin_bar', '__return_false');

    //Activa la actualización selectiva de widgets en el personalizador
    add_theme_support('customize-selective-refresh-widgets');
  }
endif;

add_action('after_setup_theme', 'pbw_setup');


if(!function_exists('pbw_menus')):
  function pbw_menus(){
register_nav_menus(array(//Add menus
  'main_menu'=>__('Menú Principal', 'pbw'),
  'social_menu'=>__('Menú Redes Sociales', 'pbw')
));
  }
endif;

add_action('init','pbw_menus');


if(!function_exists('pbw_register_sidebars'))://Add widgets
  function pbw_register_sidebars(){
    register_sidebar(array(
      'name'=>__('Sidebar Principal','pbw'),
      'id'=>'main_sidebar',
      'description'=>__('Este es el sidebar principal', 'pbw'),
      'before_widget'=>'<article id="%1$s" class="Widget %2$s">',
      'after_widget'=>'</article>',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>'
    ) );

    register_sidebar(array(
      'name'=>__('sidebar del Pié de Página','pbw'),
      'id'=>'footer_sidebar',
      'description'=>__('Este es el sidebar del Pié de Página', 'pbw'),
      'before_widget'=>'<article id="%1$s" class="Widget %2$s">',
      'after_widget'=>'</article>',
      'before_title'=>'<h3>',
      'after_title'=>'</h3>'
    ) );
  }
endif;

add_action('widgets_init','pbw_register_sidebars');


require_once get_template_directory().'/inc/custom-header.php';
require_once get_template_directory().'/inc/customizer.php';
require_once get_template_directory().'/inc/custom-login.php';
require_once get_template_directory().'/inc/custom-admin.php';
require_once get_template_directory().'/inc/custom-pre-get-posts.php';
require_once get_template_directory().'/inc/custom-contact-form.php';
require_once get_template_directory().'/inc/custom-description.php';
require_once get_template_directory().'/inc/custom-excerpt.php';


//add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
//add_filter( 'use_widgets_block_editor', '__return_false' );


