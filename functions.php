<?php
    
    // Variables

    // Includes
    include( get_theme_file_path( 'inlcudes/front/enqueue.php' ) );

    // Hooks
    add_action( 'wp_enqueue_scripts', 'wp_dev24_enqueue' );
