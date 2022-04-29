<?php
add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

function my_plugin_add_stylesheet()
{
    wp_enqueue_style('parent-style', get_template_directory() . '/style.css');
    wp_enqueue_style('my-style', get_stylesheet_directory_uri() . '/custom.css', false, '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'my_plugin_add_stylesheet');

