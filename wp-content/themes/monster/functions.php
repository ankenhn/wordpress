<?php
function monster_styles() {
    // Enqueue the style
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('monster-style', get_stylesheet_directory_uri().'/style.css');
    wp_enqueue_style('font-size', get_stylesheet_directory_uri().'/css/font-size.css');
}

function monster_scripts() {
    // Enqueue the style
    wp_enqueue_script('bootstrap',  get_stylesheet_directory_uri() . '/js/bootstrap.js');
}

add_action('wp_enqueue_scripts','monster_styles');
//add_action('wp_enqueue_scripts','monster_scripts');


//add feature image
add_theme_support( 'post-thumbnails' );


//add menu to backend
function register_my_menus() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Top Menu' ),
            'header-menu' => __( 'Header Menu' ),
        )
    );
}
add_action( 'init', 'register_my_menus' );