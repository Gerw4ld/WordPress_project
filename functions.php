<?php


function load_stylesheets()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.6.2.min.js', '', 1, true);

    add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');


function loadjs()
{

    wp_register_script('customJS', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customJS');

}

add_action('wp_enqueue_scripts', 'loadjs');


add_theme_support('menus');


register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'mobile-menu' => __('Mobile Menu', 'theme')
    )
);

add_image_size('smallest', 240, 160, true);
add_image_size('largest', 800, 480, true);