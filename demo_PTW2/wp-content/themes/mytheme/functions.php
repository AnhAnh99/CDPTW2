<?php


/**
 * Enqueue scripts and styles
 */
function your_theme_enqueue_scripts()
{
    // all styles
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap-v3.3.6.min.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

    /*Partner 1*/
    if ( is_page_template( 'horizontal-thumbnails.php' ) ) {
        wp_enqueue_style( '116-style', get_template_directory_uri() . '/css/116.css' );
    }
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');


function add_custom_script()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'));
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_register_script('bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'));

    wp_register_script('main', get_template_directory_uri() . '/js/main.min.js', array('jquery'));
    wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.min.js', array('jquery'));
    wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'));


    /*Phi*/
    wp_register_script('nouislider', get_template_directory_uri() . '/js/nouislider.min.js', array('jquery'));
    wp_enqueue_script('nouislider');
    /*Phi-end*/

    wp_enqueue_script('jquery');
    wp_enqueue_script('bundle');
    wp_enqueue_script('main');
    wp_enqueue_script('plugins');
    wp_enqueue_script('swiper');
 
}

add_action('wp_enqueue_scripts', 'add_custom_script');

/**====== Duy functions ======**/
function getPosts(){

}