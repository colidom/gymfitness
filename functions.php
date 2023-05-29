<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function extremegymfitness_menu()
{
    register_nav_menus(array(
        'main-manu' => __('Main Menu', 'extremegymfitness')
    ));
}

add_action('init', 'extremegymfitness_menu');


function extremegymfitness_scripts_styles()
{
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('styles', get_stylesheet_uri(), array('normalize'), '1.0.0');
}

add_action('wp_enqueue_scripts', 'extremegymfitness_scripts_styles');
