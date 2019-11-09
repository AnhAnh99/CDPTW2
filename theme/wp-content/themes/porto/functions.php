<?php
/**
 * Enqueue scripts and styles
 */
function your_theme_enqueue_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap-v3.3.6.min.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

    if ( is_page_template( 'horizontal-thumbnails.php' ) ) {
        wp_enqueue_style( '145-style', get_template_directory_uri() . '/css/145.css' );
        wp_enqueue_style( '146-style', get_template_directory_uri() . '/css/146.css' );
        wp_enqueue_style( '147-style', get_template_directory_uri() . '/css/147.css' );
    }
    if ( is_page_template( 'product-sticky-tag.php' ) ) {
         wp_enqueue_style( '145-style', get_template_directory_uri() . '/css/145.css' );
        wp_enqueue_style( '144-style', get_template_directory_uri() . '/css/144.css' );
        wp_enqueue_style( '147-style', get_template_directory_uri() . '/css/147.css' );
    }
    if ( is_page_template( 'category-flex-grid1.php' ) ) {
        wp_enqueue_style( '148-style', get_template_directory_uri() . '/css/148.css' );
    }
    if ( is_page_template( 'viewcart.php' ) ) {
        wp_enqueue_style( '149-style', get_template_directory_uri() . '/css/149.css' );
        wp_enqueue_style( '150-style', get_template_directory_uri() . '/css/150.css' );
    }
    if ( is_page_template( 'blog.php' ) ) {
        wp_enqueue_style( '151-style', get_template_directory_uri() . '/css/151.css' );
        wp_enqueue_style( '152-style', get_template_directory_uri() . '/css/152.css' );
    }
    if ( is_page_template( 'checkout-shipping-2.php' ) ) {
        wp_enqueue_style( '153-style', get_template_directory_uri() . '/css/153.css' );
    }
    if ( is_page_template( 'my-account.php' ) ) {
        wp_enqueue_style( '154-style', get_template_directory_uri() . '/css/154.css' );
    }


    if ( is_page_template( 'category.php' ) ) {
        wp_enqueue_style( '111-style', get_template_directory_uri() . '/css/111.css' );
        wp_enqueue_style( '112-style', get_template_directory_uri() . '/css/112.css' );
    }
    if ( is_page_template( 'category-horizontal-filter2.php' ) ) {
        wp_enqueue_style( '125-style', get_template_directory_uri() . '/css/125.css' );
    }
    if ( is_page_template( 'checkout.php' ) ) {
        wp_enqueue_style( '113-style', get_template_directory_uri() . '/css/113.css' );
        wp_enqueue_style( '114-style', get_template_directory_uri() . '/css/114.css' );
    }
    if ( is_page_template( 'contact.php' ) ) {
        wp_enqueue_style( '122-style', get_template_directory_uri() . '/css/122.css' );
        wp_enqueue_style( '123-style', get_template_directory_uri() . '/css/123.css' );
    }
    if ( is_page_template( 'product-sticky-both.php' ) ) {
        wp_enqueue_style( '126-style', get_template_directory_uri() . '/css/126.css' );
        wp_enqueue_style( '128-style', get_template_directory_uri() . '/css/128.css' );
    }
    if ( is_page_template( 'product-sticky-info.php' ) ) {
        wp_enqueue_style( '127-style', get_template_directory_uri() . '/css/127.css' );
        wp_enqueue_style( '128-style', get_template_directory_uri() . '/css/128.css' );
    }


 
    if (is_home()) {
        wp_enqueue_style( '129-style', get_template_directory_uri() . '/css/129.css' );
        wp_enqueue_style( '141-style', get_template_directory_uri() . '/css/141.css' );
        wp_enqueue_style( '130-style', get_template_directory_uri() . '/css/130.css' );
        wp_enqueue_style( '131-style', get_template_directory_uri() . '/css/131.css' );
        wp_enqueue_style( '132-style', get_template_directory_uri() . '/css/132.css' );
        wp_enqueue_style( '133-style', get_template_directory_uri() . '/css/133.css' );
        wp_enqueue_style( '134-style', get_template_directory_uri() . '/css/134.css' );
    }
    if ( is_page_template( 'category-flex-grid1.php' ) ) {
        wp_enqueue_style( '135-style', get_template_directory_uri() . '/css/135.css' );
        wp_enqueue_style( '136-style', get_template_directory_uri() . '/css/136.css' );
    }
    if ( is_page_template( 'product-full-width.php' ) ) {
        wp_enqueue_style( '138-style', get_template_directory_uri() . '/css/138.css' );
        wp_enqueue_style( '139-style', get_template_directory_uri() . '/css/139.css' );
    }
    if ( is_page_template( 'single1.php' ) ) {
        wp_enqueue_style( '137-style', get_template_directory_uri() . '/css/137.css' );
        wp_enqueue_style( '142-style', get_template_directory_uri() . '/css/142.css' );
        wp_enqueue_style( '143-style', get_template_directory_uri() . '/css/143.css' );
        wp_enqueue_style( '152-style', get_template_directory_uri() . '/css/152.css' );
    }
    if ( is_page_template( 'about.php' ) ) {
        wp_enqueue_style( '117-style', get_template_directory_uri() . '/css/117.css' );
        wp_enqueue_style( '118-style', get_template_directory_uri() . '/css/118.css' );
        wp_enqueue_style( '119-style', get_template_directory_uri() . '/css/119.css' );
        wp_enqueue_style( '121-style', get_template_directory_uri() . '/css/121.css' );
    }
    if ( is_page_template( 'category-8col.php' ) ) {
        wp_enqueue_style( '126-style', get_template_directory_uri() . '/css/126.css' );
    }
    if ( is_page_template( 'dashboard.php' ) ) {
        wp_enqueue_style( '115-style', get_template_directory_uri() . '/css/115.css' );
        wp_enqueue_style( '116-style', get_template_directory_uri() . '/css/116.css' );
    }
    if ( is_page_template( 'forgot-password.php' ) ) {
        wp_enqueue_style( '124-style', get_template_directory_uri() . '/css/124.css' );
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

    wp_register_script('nouislider', get_template_directory_uri() . '/js/nouislider.min.js', array('jquery'));
    wp_enqueue_script('nouislider');


    wp_enqueue_script('jquery');
    wp_enqueue_script('bundle');
    wp_enqueue_script('main');
    wp_enqueue_script('plugins');
    wp_enqueue_script('swiper');
 
}

add_action('wp_enqueue_scripts', 'add_custom_script');
function getPosts(){

}

@ini_set('upload_max_size', '120M');
@ini_set('post_max_size', '120M');
@ini_set('max_execution_time', '300');
