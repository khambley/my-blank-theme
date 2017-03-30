<?php
function mytheme_theme_styles() {
    wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'Open-Sans-Font', 'https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300');
}
add_action('wp_enqueue_scripts', 'mytheme_theme_styles');

function mytheme_theme_js() {
    // jQuery is stated as a dependancy of bootstrap-js - it will be loaded by WordPress before the BS scripts
    wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);
    wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/modernizr-custom.js', '', '', false);
}
add_action('wp_enqueue_scripts', 'mytheme_theme_js');


?>