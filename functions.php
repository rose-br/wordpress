
<?php

get_template_part('inc/plugin', 'acf');
get_template_part('inc/theme', 'navigation');
get_template_part('inc/theme', 'assets');


function montheme_supports(){
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');

}
function montheme_register_assets (){

    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD crossorigin="anonymous">');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title_separator(){
return '';
}

function montheme_menu_class($classes){
    $classes[] = 'nav-item';
    return $classes;
}


//add_action('wp_head', function (){  die('salut les gens');});
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
add_filter('document_title_separator', 'montheme_title_separator');
add_filter('nav_menu_css_class', 'montheme_class');

add_filter( 'big_image_size_threshold', '__return_false' );



