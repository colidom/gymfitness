<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extreme Gym Fitness</title>
</head>

<body>
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