<?php
get_header();
?>
<section class="welcome section container text-center">
    <h2 class="text primary">
        <?php the_field('welcome_heading'); ?>
    </h2>
    <p><?php the_field('welcome_text'); ?></p>
</section>
<main class="container section">
    <?php the_content(); ?>
</main>
<?php
get_footer();
?>