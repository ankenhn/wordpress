<?php
function monster_styles() {
    // Enqueue the style
    wp_enqueue_style('core', get_stylesheet_directory_uri().'/css/bootstrap.css');
}

function monster_scripts() {
    // Enqueue the style
    wp_enqueue_script('core',  get_stylesheet_directory_uri() . '/js/bootstrap.js');
}

add_action('wp_enqueue_styles','monster_styles');
add_action('wp_enqueue_scripts','monster_scripts');