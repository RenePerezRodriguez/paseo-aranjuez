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
    //Iconos
    wp_enqueue_style('iconos', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(), '0.0.1');
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
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slicknavJS'), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'paseoaranjuez_scripts_styles');