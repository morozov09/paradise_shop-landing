<?php
add_action( 'wp_enqueue_scripts', 'paradise_scripts');

function paradise_scripts() {
    wp_enqueue_style( 'paradise-style', get_stylesheet_uri() );
    wp_enqueue_script( 'paradise-scripts', get_template_directory_uri() . '/assets/js/script.js', array(), null, true);
    wp_enqueue_script( 'paradise-preload', get_template_directory_uri() . '/assets/js/preloader.js', array(), null, true);
    wp_enqueue_script( 'paradise-modal', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true);
    wp_enqueue_script( 'paradise-input', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(), null, true);
    wp_enqueue_script( 'paradise-jquery', 'https://code.jquery.com/jquery-3.6.3.js');
    wp_enqueue_script( 'paradise-jqinput', '//code.jquery.com/jquery-1.11.0.min.js' );
    
};
add_theme_support( 'custom-logo' ); 
?>