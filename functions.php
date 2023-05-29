<?php

function extremegymfitness_menu()
{
    register_nav_menus(array(
        'main-manu' => __('Main Menu', 'extremegymfitness')
    ));
}

add_action('init', 'extremegymfitness_menu');
