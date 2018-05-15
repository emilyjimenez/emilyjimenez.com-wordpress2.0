<?php
function use_parent_theme_stylesheet() {
    return get_template_directory_uri() . '/style.css';
}

function my_theme_styles() {
    $themeVersion = wp_get_theme()->get('Version');

    wp_enqueue_style('child-theme-style', get_stylesheet_directory_uri() . '/style.css', array(), $themeVersion);
}

add_filter('stylesheet_uri', 'use_parent_theme_stylesheet');

add_action('wp_enqueue_scripts', 'my_theme_styles', 20)

?>