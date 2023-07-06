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

        // Get the gallery
        $gallery = get_post_gallery(get_the_ID(), false);

        // Get the ids in array
        $gallery_images_ID = explode(",", $gallery['ids']);
    ?>
        <ul class="images-gallery">
            <?php
            foreach ($gallery_images_ID as $id) {
                $imageLarge = wp_get_attachment_image_src($id, 'large')[0];
                $imageFull = wp_get_attachment_image_src($id, 'full')[0];
            ?>
                <li>
                    <a href="<?php echo $imageFull; ?>">
                        <img src="<?php echo $imageLarge; ?>" alt="gallery image" />
                    </a>
                </li>
            <?php

            }
            ?>
        </ul>
    <?php
    endwhile;
    ?>
</main>

<?php
get_footer();
?>