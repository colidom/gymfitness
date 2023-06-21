<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container navigation-bar">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
            </div>
            <?php
            $args = array(
                'theme-location' => 'main-menu',
                'container' => 'nav',
                'container_class' => 'main-menu'
            );
            wp_nav_menu($args);
            ?>
        </div>
    </header>