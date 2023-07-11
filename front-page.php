<?php
get_header();
?>
<section class="welcome section container text-center">
    <h2 class="text primary">
        <?php the_field('welcome_heading'); ?>
    </h2>
    <p><?php the_field('welcome_text'); ?></p>
</section>

<section class="areas">
    <div class="area">
        <?php 
        $area_1 = get_field('area_1');
        var_dump($area_1);
        ?>
    </div>
</section>
<main class="container section">
    
</main>
<?php
get_footer();
?>