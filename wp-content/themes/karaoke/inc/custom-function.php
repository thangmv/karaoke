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
if( !function_exists('karaoke_register_style') ) {
    function karaoke_register_style () {
        // Custom style
        wp_enqueue_style( 'html-css', get_template_directory_uri() . '/assets/css/style.css' );
        wp_enqueue_style( 'custom', get_template_directory_uri() . '/assets/css/custom.css' );

        // Jquery
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', array('jquery'), '20151215', true );

        // Bootstrap
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );

        // Font Awesome
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'karaoke_register_style' );
}

if( !function_exists('karaoke_widgets') ) {
    function karaoke_widgets() {
        // Footer-1
        register_sidebar( array(
            'name'      =>      esc_html__('Footer-1', 'karaoke'),
            'id'        =>      'footer-1',
            'descripton'=>      esc_html__('Add widgets here', 'karaoke'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        // Footer-2
        register_sidebar( array(
            'name'      =>      esc_html__('Footer-2', 'karaoke'),
            'id'        =>      'footer-2',
            'descripton'=>      esc_html__('Add widgets here', 'karaoke'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        // Footer-3
        register_sidebar( array(
            'name'      =>      esc_html__('Footer-3', 'karaoke'),
            'id'        =>      'footer-3',
            'descripton'=>      esc_html__('Add widgets here', 'karaoke'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );

        // Copyright
        register_sidebar( array(
            'name'      =>      esc_html__('Copyright', 'karaoke'),
            'id'        =>      'copyright',
            'descripton'=>      esc_html__('Add widgets here', 'karaoke'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'karaoke_widgets' );
}


if( !function_exists('karaoke_post_type_rooms') ) {
    function karaoke_post_type_rooms() {
        $args = [
            'labels'        => [
                'name'      => __( 'Rooms' ),
                'add_new'   => __( 'Add Room' ),
                'edit_item' => __( 'Edit Rooms' ),
            ],
            'public' => true,
            'rewrite' => array('slug' => 'rooms'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-cart',
            'supports' => ['title', 'thumbnail','editor','custom-fields'],
        ];

        register_post_type('room', $args);
    }

    add_action('init', 'karaoke_post_type_rooms');
}
