<?php
    
    function wp_dev24_enqueue() {
        wp_register_style( 'wp_dev24_rubik_and_pacifico', 'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap' );
        wp_register_style( 'wp_dev24_bootstrap_icons', get_theme_file_uri( 'assets/bootstrap-icons/bootstrap-icons.css' ) );
        wp_register_style( 'wp_dev24_theme', get_theme_file_uri( 'assets/public/index.css' ) );
    }