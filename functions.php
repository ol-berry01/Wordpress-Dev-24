<?php
    
    // Variables

    // Includes
    include( get_theme_file_path( 'inlcudes/front/enqueue.php' ) );
    include( get_theme_file_path( 'inlcudes/front/head.php' ) );
    include( get_theme_file_path( 'inlcudes/setup.php' ) );

    // Hooks
    add_action( 'wp_enqueue_scripts', 'spiders_web_enqueue' );
    add_action( 'wp_head', 'spiders_web_head', 7 );
    add_action( 'after_setup_theme', 'spiders_web_setup_theme' ); 