<?php
/*
* Theme Functions File
*/

// here are some wordPress theme setups
function harshit_setup(){

    // for custom logo
    add_theme_support('custom-logo');

    // for title tag setup
    add_theme_support('title-tag');

    // for theme post to set featured images
    add_theme_support( 'post-thumbnails' );

    // for custom image size 
    add_image_size('home-featured',520, 500, array('center','center'));

    // for automatic-feed-links
    add_theme_support('automatic-feed-links');

    // for register_nav_menus
    register_nav_menus( array(
    'primary' => __('Primary Menu','html2wp')

    )); 
};
add_action('after_setup_theme','harshit_setup');


// this function is for setup css , javascript , bootstrap , jquery files
function harshit_scripts(){

    // css setup
    wp_enqueue_style('style', get_stylesheet_uri());

    // jquery setup
    wp_enqueue_script('jquery');

    // javascript files setup
    wp_enqueue_script('html2wp-browser', get_template_directory_uri().'assets/js/browser.min.js');

    wp_enqueue_script('html2wp-breakpoints', get_template_directory_uri().'assets/js/breakpoints.min.js');

    wp_enqueue_script('html2wp-util', get_template_directory_uri().'assets/js/util.js');

    wp_enqueue_script('html2wp-main', get_template_directory_uri().'assets/js/main.js');

}

add_action('wp_enqueue_scripts','harshit_scripts');

// setup for footer widget and sidebar
function harshit_widgets() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'html2wp' ),           // name
        'id'            => 'sidebar-1',                                    // sidebar id
        'description'   => 'Main sidebar on right side',                   // description
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Banner', 'html2wp' ),           // name
        'id'            => 'home-banner',                                    // sidebar id
        'description'   => 'Banner Area of Homepage',                   // description
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Services', 'html2wp' ),           // name
        'id'            => 'home-services',                                    // sidebar id
        'description'   => 'Services Area of Homepage',                   // description
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'html2wp' ),           // name
        'id'            => 'footer-1',                                      // footer sidebar id
        'description'   => 'Footer Widget 1',                               // description
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>', 
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'html2wp' ),           // name
        'id'            => 'footer-2',                                      // footer sidebar id
        'description'   => 'Footer Widget 2',                               // description
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'html2wp' ),            // name
        'id'            => 'footer-3',                                       // footer sidebar id
        'description'   => 'Footer Widget 3',                                // description
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );

}
add_action('widgets_init', 'harshit_widgets');


// Custom post Types
require get_template_directory(  ).'/inc/Portfolio.php';