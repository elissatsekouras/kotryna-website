<?php 


// Load Stylesheets
function load_css() {

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), 1, 'all');
    wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_css');


// Load js
function load_js() {

    wp_enqueue_script('jquery');
    wp_register_script('js', get_template_directory_uri() . '/script.js', array(), false, true);
    wp_enqueue_script('js');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails', array('page', 'post'));


// Menus
register_nav_menus(
    array(
        'side-menu' => 'Side Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'cat', '11');
    }
    }
    add_action( 'pre_get_posts', 'my_home_category' );