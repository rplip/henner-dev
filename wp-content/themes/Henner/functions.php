<?php

if ( ! function_exists( 'henner_scripts' ) ) :
/**
 * Enqueues stylesheets
 **/
function henner_scripts(){

    /* Script & Stylesheet Header */
    wp_enqueue_style( 'henner_styles', get_stylesheet_uri(), array(), null );
    wp_enqueue_style( 'henner_bootstrapCSS', get_stylesheet_uri('asset/css/bootstrap.css'), array(), null );
    wp_enqueue_script( 'henner-fa', get_theme_file_uri( 'asset/js/fa.js' ), array(), null, false );
    wp_enqueue_script( 'henner-fa-solid', get_theme_file_uri( 'asset/js/fa_solid.js' ), array(), null, false );
    wp_enqueue_script( 'henner-fa-all', get_theme_file_uri( 'asset/js/fa_all.js' ), array(), null, false );

    /* Script Footer */
    wp_enqueue_script( 'henner-jquery', get_theme_file_uri( 'asset/js/jquery.js' ), array(), null, true );
    wp_enqueue_script( 'henner-popper', get_theme_file_uri( 'asset/js/popper.js' ), array(), null, true );
    wp_enqueue_script( 'henner-bootstrapJS', get_theme_file_uri( 'asset/js/bootstrap.js' ), array(), null, true );
    wp_enqueue_script( 'henner-js', get_theme_file_uri( 'asset/js/app.js' ), array(), null, true );
}
endif;

add_action( 'wp_enqueue_scripts', 'henner_scripts' );

function henner_setup(){
    register_nav_menus( array(
        'menu-1' => __( 'Nav menu', 'henner' ),
        'menu-2' => __( 'Sidebar menu', 'henner' ),
        'menu-3' => __( 'Social menu', 'henner' ),
        'menu-4' => __( 'Nav Menu Mobile', 'henner' ),
    ) );
}
add_action( 'after_setup_theme', 'henner_setup' );


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );