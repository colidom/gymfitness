<?php
/* 
*  Template Name: Gallery
*/
get_header();
?>
<main class="container section">
    <?php
    while (have_posts()) : the_post();
        the_title('<h1 class="text-center text-primary">', '</h1>');
    endwhile;
    ?>
</main>

<?php
get_footer();
?>