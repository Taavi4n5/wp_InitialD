<?php
add_filter( 'excerpt_length', function($length) {
    return 25;
}, PHP_INT_MAX );

function enqueue_my_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . '/css/styles.css' );
  }
  add_action('wp_enqueue_scripts', 'enqueue_my_styles');

  add_theme_support( 'post-thumbnails' ); 