<?php
/**
 * Created by PhpStorm.
 * User: hungnm58
 * Date: 11/11/2016
 * Time: 4:58 PM
 */

if( !function_exists('register_style') ) {
    function register_style () {
        wp_enqueue_style( 'html-css', get_template_directory_uri() . '/assets/css/style.css' );
        wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );
    }
    add_action( 'wp_enqueue_scripts', 'register_style' );
}