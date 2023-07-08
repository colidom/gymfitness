<?php
get_header();
?>
<main class="section container">
    <?php
    while (have_posts()) : the_post();

        the_title();
        the_content();

    endwhile;
    ?>
</main>
<?php
get_footer();
?>