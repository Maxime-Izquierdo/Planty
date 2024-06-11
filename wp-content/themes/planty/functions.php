<?php

add_action( 'wp_enqueue_scripts', 'planty_enqueue_styles' );

function planty_enqueue_styles() {
    
    wp_enqueue_style( 
        'astra-style', 
        get_template_directory_uri() . '/style.css' 
    );
    
    
    wp_enqueue_style( 
        'planty-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-style') 
    );
}

function hide_admin_link_for_non_logged_in_users() {
    if ( ! is_user_logged_in() ) {
        echo '<style type="text/css">
                .ast-builder-layout-element.ast-header-html-2 {
                    display: none;
                }
              </style>';
    }
}
add_action('wp_head', 'hide_admin_link_for_non_logged_in_users');



?>