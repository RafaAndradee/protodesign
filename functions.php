<?php


/**************************************
 * CSS e .js
 **************************************/


function proto_css() {

    wp_enqueue_style( 'bootstrapcss', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css');

    wp_enqueue_style( 'icons', get_template_directory_uri() . '/assets/css/icons.css', false, true );

    wp_enqueue_style( 'fontparagraph', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', false, true );

    wp_enqueue_style( 'font', get_template_directory_uri() . '/assets/fonts/Neris-Black-webfont.woff', false, true );

    wp_enqueue_style('theme_stylesheet', get_stylesheet_uri() );

    wp_enqueue_script( 'jq', 'https://code.jquery.com/jquery-3.2.1.min.js', false, true );

    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'efeitos', get_template_directory_uri() . '/assets/js/efeitos.js', array('jquery'), false, true );

    wp_enqueue_script( 'iconsjs', get_template_directory_uri() . '/assets/js/iconsjs.js', array('jquery'), false, true );


    wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery'), false, true );

}
add_action('wp_enqueue_scripts', 'proto_css');



/**************************************
 * NAVBAR
 **************************************/

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ), //respectivamente 'primary menu' => __( 'nome do elemento' )
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function proto_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'proto_setup');



function add_suport_theme(){
    add_theme_support( 'post-thumbnails' );
}
add_action('after_setup_theme','add_suport_theme');


add_image_size( 'Slider_thumb', 1600, 510, true );


/**************************************
 * Slider
 **************************************/

add_action('init', 'slider_registrer');
function slider_registrer(){
     $labels = array(
        'name' => _x('Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Adicionar slider', 'slider'),
        'add_new_item' => __('Adicionar slider'),
        'edit_item' => __('Editar slider'),
        'new_item' => __('Novo slider'),
        'view_item' => __('Ver slider'),
        'search_items' => __('Procurar slider'),
        'not_found' =>  __('Nada encontrado'),
        'not_found_in_trash' => __('Nada encontrado no lixo'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-code',
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','thumbnail'),
      );
    register_post_type('slider',$args);
}

include( get_template_directory() . '/inc/theme-customizer.php' );



// Utiliza o gancho para adicionar nossa função
add_action( 'customize_register', 'funcao_do_customizer' );
