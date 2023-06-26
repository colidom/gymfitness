<?php
/* 
*  Template Name: Lessons list
*/
get_header();
?>
<main class="container section">
    <ul class="grid-list">
        <?php
        $args = array(
            'post_type' => 'gymxtreme_lessons'
        );

        $lessons = new WP_Query($args);
        while ($lessons->have_posts()) {
            $lessons->the_post();
        ?>
            <li class="card">
                <?php the_title() ?>
            </li>
        <?php }
        wp_reset_postdata(); // Para indicar a WP que finaliza la consulta
        ?>
    </ul>
</main>

<?php
get_footer();
?>