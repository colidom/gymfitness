<footer class="footer container">
    <hr>

    <div class="footer-content">
        <?php
        $args = array(
            'theme-location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-menu'
        );
        wp_nav_menu($args);
        ?>

        <p class="copyright">&copy <?php echo get_bloginfo('name') . ' ' . date("Y"); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>