<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extreme Gym Fitness</title>
</head>

<body>
    <header class="">
        <div class="container bar-navigation">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
            </div>
            <nav>

            </nav>
        </div>
    </header>
    <main>
        <?php
        while (have_posts()) : the_post();

            the_title();

            the_content();

        endwhile;
        ?>
    </main>
</body>

</html>