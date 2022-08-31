<?php 

//Menus de navegación, agregar mas menús utilizando el arreglo
function paseoaranjuez_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'Paseo Aranjuez')
    ) );
}
add_action('init', 'paseoaranjuez_menus');

//Scripts y Styles
function paseoaranjuez_scripts_styles() {
    //hoja de estilos normalize
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    
    //slick nav CSS (menu para moviles)
    wp_enqueue_style('slicknavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    //fuente de google fonts
    wp_enqueue_style('googleFont', 'https://fonts.googleapis.com/css2?family=Nunito&display=swap', array(), '1.0.0');

    //hoja de estilos principal
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFont'), '1.0.0');
    
    //slick nav JS (menu para moviles)
    wp_enqueue_script('slicknavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    
    //Scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.1.1', true);

    if( !is_admin()){
        wp_deregister_script('jquery');
        wp_register_script('jquery',       ("http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"), false, '1.3.1');
        wp_enqueue_script('jquery'); 
      }

}
add_action('wp_enqueue_scripts', 'paseoaranjuez_scripts_styles');