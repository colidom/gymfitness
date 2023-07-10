<?php
while (have_posts()) : the_post();

    the_title('<h1 class="text-center text-primary">', '</h1>');
    if (has_post_thumbnail()) {
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }
    if (is_single()) {
    }

    if (is_page('contact')) {
        the_field('location');
    }

    the_content();

endwhile;
