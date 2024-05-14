<?php
    
    // Variables

    // Includes
    include( get_theme_file_path( 'inlcudes/front/enqueue.php' ) );
    include( get_theme_file_path( 'inlcudes/front/head.php' ) );
    include( get_theme_file_path( 'inlcudes/setup.php' ) );

    // Hooks
    add_action( 'wp_enqueue_scripts', 'wp_dev24_enqueue' );
    add_action( 'wp_head', 'wp_dev24_head', 7 );
    add_action( 'after_setup_theme', 'wp_dev24_setup_theme' ); 