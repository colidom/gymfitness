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
        $area = get_field('area_1');
        $image = $area['image_1']['sizes']['medium_large'];
        $text = $area['text'];
        ?>
        <img src="<?php echo esc_attr($image); ?>" alt="Image <?php echo esc_attr($text); ?>">
        <p>
            <?php echo esc_html($text); ?>
        </p>
    </div>

    <div class="area">
        <?php
        $area = get_field('area_2');
        $image = $area['image_2']['sizes']['medium_large'];
        $text = $area['text'];
        ?>
        <img src="<?php echo esc_attr($image); ?>" alt="Image <?php echo esc_attr($text); ?>">
        <p>
            <?php echo esc_html($text); ?>
        </p>
    </div>

    <div class="area">
        <?php
        $area = get_field('area_3');
        $image = $area['image_3']['sizes']['medium_large'];
        $text = $area['text'];
        ?>
        <img src="<?php echo esc_attr($image); ?>" alt="Image <?php echo esc_attr($text); ?>">
        <p>
            <?php echo esc_html($text); ?>
        </p>
    </div>

    <div class="area">
        <?php
        $area = get_field('area_4');
        $image = $area['image_4']['sizes']['medium_large'];
        $text = $area['text'];
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