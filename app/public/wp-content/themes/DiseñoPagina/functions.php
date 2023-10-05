<?php
// Includes
require get_template_directory() . '/includes/queries.php';


function fincaldea_setup(){
    // Imagenes destacadas  
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

// funcion para el menu 
function fincaldea_menus(){
    register_nav_menus(array(
        'menu-principal' => __('Menu principal', 'fincaldea')
    ));
}
add_action('init','fincaldea_menus');

add_action('after_setup_theme', 'fincaldea_setup');

// Hojas de estilo & Scripts
function fincaldea_scripts_style(){
    // Archivos Css
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(),'8.0.1');
    wp_enqueue_style('swipper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array(),'10.2.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'),'1.0.0');

    // Archivos Js
    wp_enqueue_script('anime','https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2',true);
    wp_enqueue_script('swipper-js','https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), '10.2.0',true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('anime','swipper-js'), '1.0.0' ,true);
}
add_action('wp_enqueue_scripts','fincaldea_scripts_style');

function fincaldea_hero_imagen(){
    // Obetener el ID de la Pag Principal 
    $front_id = get_option('page_on_front');

    // Obtener  la imagen 
    $id_imagen = get_field('hero_imagen',  $front_id);
    $id_imagen2 = get_field('hero_imagen2',  $front_id);

    // Obtener la Ruta
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    $imagen2 = wp_get_attachment_image_src($id_imagen2, 'full')[0];

    // Crear Css
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        .background1 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.7)), url($imagen);
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 3rem;
        }
    ";
    $imagen_destacada_css2 = "
        .background2 {
            background-image: linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.7)), url($imagen2);
            background-size: cover;
            background-repeat: no-repeat;
            margin-bottom: 3rem;
        }
    
    ";
    //Inyectar Css
    wp_add_inline_style('custom', $imagen_destacada_css);
    wp_add_inline_style('custom', $imagen_destacada_css2);
}
add_action('init', 'fincaldea_hero_imagen');