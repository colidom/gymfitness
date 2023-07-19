<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class('home'); ?>>
    <header class="header">
        <div class="container navigation-bar">
            <div class="logo">
                <a href="<?php echo site_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo"></a>
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
        <?php if (is_front_page()) { ?>
            <div class="tagline text-center container">
                <h1>
                    <?php the_field('hero_heading'); ?>
                </h1>
                <p>
                    <?php the_field('hero_text'); ?>
                </p>
            </div>
        <?php } ?>
    </header>