<?php
/**
 * Created by PhpStorm.
 * User: hungnm58
 * Date: 11/11/2016
 * Time: 4:58 PM
 */

/**
 * Add style file
 */
if( !function_exists('register_style') ) {
    function register_style () {
        // Custom style
        wp_enqueue_style( 'html-css', get_template_directory_uri() . '/assets/css/style.css' );
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );

        // Jquery
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', array('jquery'), '20151215', true );

        //Bootstrap
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
    }
    add_action( 'wp_enqueue_scripts', 'register_style' );
}