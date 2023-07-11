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
        $image = $area_1['image']['sizes']['medium_large'];
        $text = $area_1['text'];
        ?>
        <img src="<?php echo esc_attr($image); ?>" alt="Image <?php echo esc_attr($text); ?>">
        <p>
            <?php echo esc_html($text); ?>
        </p>
    </div>
</section>
<main class="container section">

</main>
<?php
get_footer();
?>