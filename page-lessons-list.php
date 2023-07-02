<?php
/* 
*  Template Name: Lessons list
*/
get_header();
?>
<main class="container section">
    <?php
    get_template_part('template-parts/page');
    ?>
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
                <?php the_post_thumbnail() ?>
                <div class="content">
                    <a href="<?php the_permalink() ?>">
                        <h3><?php the_title() ?></h3>
                    </a>
                    <?php
                    $start_time = get_field('start_time');
                    $end_time = get_field('end_time');
                    ?>
                    <p>
                        <?php the_field('lessons_days'); ?> -
                        <?php echo $start_time . " to " . $end_time; ?>
                    </p>
                </div>
            </li>
        <?php }
        wp_reset_postdata(); // Para indicar a WP que finaliza la consulta
        ?>
    </ul>
</main>

<?php
get_footer();
?>