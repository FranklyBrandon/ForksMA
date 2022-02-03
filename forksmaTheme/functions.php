<?php
    function link_css_stylesheet() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'link_css_stylesheet');
?>