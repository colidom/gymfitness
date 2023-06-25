<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function gymxtreme_setup()
{
    // Imágenes destacadas
    add_theme_support('post-thumbnails');

    // Títulos para SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gymxtreme_setup');

function gymxtreme_menu()
{
    register_nav_menus(array(
        'main-manu' => __('Main Menu', 'gymxtreme')
    ));
}

add_action('init', 'gymxtreme_menu');


function gymxtreme_scripts_styles()
{
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('styles', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'gymxtreme_scripts_styles');
