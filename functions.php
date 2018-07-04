<?php


function tiltcss_script_enqueue() {

    wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/tiltagency.js', array(), '1.0.0', true);

}

add_action('wp_enqueue_scripts', 'tiltcss_script_enqueue');

function tiltagency_theme_setup() {
    add_theme_support('menus'); 

    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
}

add_filter( 'wp_page_menu_args', 'my_page_menu_args' );

add_action('init', 'tiltagency_theme_setup');
