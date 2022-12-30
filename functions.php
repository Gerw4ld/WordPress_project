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


register_block_pattern(
    'myTheme/heroBanner',
    array(
        'title' => __('HeroBanner', 'myTheme'),
        "content" => "<!-- wp:cover {\"url\":\"http://localhost/wordpress/wp-content/uploads/2022/12/pexels-jahoo-clouseau-388415.jpg\",\"id\":10,\"dimRatio\":30,\"contentPosition\":\"center center\",\"isDark\":false,\"align\":\"wide\",\"fontSize\":\"x-large\"} -->\n<div class=\"wp-block-cover alignwide is-light has-x-large-font-size\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-30 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-10\" alt=\"Stock photo from https://www.pexels.com/de-de/@akos-szabo-145938/ by Ákos Szabó\" src=\"http://localhost/wordpress/wp-content/uploads/2022/12/pexels-jahoo-clouseau-388415.jpg\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"large\"} -->\n<p class=\"has-text-align-center has-large-font-size\">HeroBanner</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"fontSize\":\"medium\"} -->\n<p class=\"has-text-align-center has-medium-font-size\">Some Text</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"align\":\"center\",\"className\":\"is-style-outline\",\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button aligncenter has-custom-font-size is-style-outline has-small-font-size\"><a class=\"wp-block-button__link wp-element-button\">Button</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->"
    )
);

function myTheme_register_my_heroBanner_pattern()
{
    register_block_pattern(...);
}

add_action('init', 'myTheme_register_my_heroBanner_pattern');

register_block_pattern(
    'myTheme/mainInfo',
    array(
        'title' => __('mainInfo', 'myTheme'),
        "content" => "<!-- wp:columns {\"verticalAlignment\":\"center\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-center\"><!-- wp:column {\"verticalAlignment\":\"center\",\"width\":\"100%\"} -->\n<div class=\"wp-block-column is-vertically-aligned-center\" style=\"flex-basis:100%\"><!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:heading -->\n<h2>My Work</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Lorem Ipsum</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":40,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://localhost/wordpress/wp-content/uploads/2022/12/LogoMakr-70TZOU.png\" alt=\"\" class=\"wp-image-40\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Lorem Ispsum</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":40,\"width\":203,\"height\":203,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full is-resized\"><img src=\"http://localhost/wordpress/wp-content/uploads/2022/12/LogoMakr-70TZOU.png\" alt=\"\" class=\"wp-image-40\" width=\"203\" height=\"203\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Lorem Ipsum</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:image {\"align\":\"center\",\"id\":40,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"http://localhost/wordpress/wp-content/uploads/2022/12/LogoMakr-70TZOU.png\" alt=\"\" class=\"wp-image-40\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Lorem Ipsum</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div>\n<!-- /wp:group --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->"
    )
);

function myTheme_register_my_mainInfo_pattern()
{
    register_block_pattern(...);
}

add_action('init', 'myTheme_register_my_mainInfo_pattern');


register_block_pattern(
    'myTheme/contactAndInfo',
    array(
        'title' => __('contactAndInfo', 'myTheme'),
        "content" => "<!-- wp:columns {\"verticalAlignment\":\"top\"} -->\n<div class=\"wp-block-columns are-vertically-aligned-top\"><!-- wp:column {\"verticalAlignment\":\"top\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>Opening hours</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:paragraph -->\n<p>More details about our page</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"verticalAlignment\":\"top\"} -->\n<div class=\"wp-block-column is-vertically-aligned-top\"><!-- wp:html -->\n<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2697.8224671608114!2d15.331090000000003!3d47.4544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476e1bf90b7debfd%3A0x7b2dd5b5b518a57d!2sFH%20JOANNEUM%20Kapfenberg!5e0!3m2!1sen!2sat!4v1672180155925!5m2!1sen!2sat\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>\n<!-- /wp:html --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns -->"
    )
);

function myTheme_register_my_contactAndInfo_pattern()
{
    register_block_pattern(...);
}

add_action('init', 'myTheme_register_my_contactAndInfo_pattern');
