<?php

add_action( 'wp_enqueue_scripts', 'planty_enqueue_styles' );

function planty_enqueue_styles() {
    
    wp_enqueue_style( 
        'astra-style', 
        get_template_directory_uri() . '/style.css' 
    );
    
    
    wp_enqueue_style( 
        'planty-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-style') 
    );
}