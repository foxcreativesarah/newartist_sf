<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
   wp_enqueue_style( 'child-style',
       get_stylesheet_directory_uri() . '/style.css',
       array('parent-style')
   );
}

//adds a textdomain to child theme so it is translatable

function twentyseventeen_child_setup () {
    //prepare theme for translation
    load_child_theme_textdomain ('twentyseventeen-child', get_stylesheet_directory() . '/languages');
}
add_action ('after_setup_theme', 'twentyseventeen_child_setup');

