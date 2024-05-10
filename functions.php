<?php
    
    // Variables

    // Includes
    include( get_theme_file_path( 'inlcudes/front/enqueue.php' ) );
    include( get_theme_file_path( 'inlcudes/front/head.php' ) );

    // Hooks
    add_action( 'wp_enqueue_scripts', 'wp_dev24_enqueue' );
    add_action( 'wp_head', 'wp_dev24_head', 7 );
