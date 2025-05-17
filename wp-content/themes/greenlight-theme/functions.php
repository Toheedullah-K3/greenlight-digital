<?php
function greenlight_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'greenlight_enqueue_assets');




// Register Navigation Menu
function register_my_menu() {
  register_nav_menus(array(
    'primary' => __('Primary Menu', 'yourtheme')
  ));
}
add_action('init', 'register_my_menu');

// ACF Options Page
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title'  => 'Theme Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));
}

if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Footer Settings',
        'menu_title' => 'Footer Settings',
        'menu_slug'  => 'footer-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}

function load_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );
