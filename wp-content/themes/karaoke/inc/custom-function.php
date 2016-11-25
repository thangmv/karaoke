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
        wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
        wp_enqueue_style( 'fancybox-button', get_template_directory_uri() . '/assets/css/jquery.fancybox-buttons.css' );
        wp_enqueue_style( 'fancybox-thumbs', get_template_directory_uri() . '/assets/css/jquery.fancybox-thumbs.css' );

        // Jquery
        wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', array('jquery'), '20151215', true );
        wp_enqueue_script( 'jquery-fancybox-mouse', get_template_directory_uri() . '/assets/js/jquery.mousewheel-3.0.6.pack.js');
        wp_enqueue_script( 'jquery-fancybox-pack', get_template_directory_uri() . '/assets/js/jquery.fancybox.js');
        wp_enqueue_script( 'jquery-fancybox-buttons', get_template_directory_uri() . '/assets/js/jquery.fancybox-buttons.js');
        wp_enqueue_script( 'jquery-fancybox-media', get_template_directory_uri() . '/assets/js/jquery.fancybox-media.js');
        wp_enqueue_script( 'jquery-fancybox-thumbs', get_template_directory_uri() . '/assets/js/jquery.fancybox-thumbs.js');


        // Bootstrap
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
        wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js');

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
            'supports' => ['title', 'thumbnail','editor', 'post-formats'],
        ];

        register_post_type('room', $args);
    }

    add_action('init', 'karaoke_post_type_rooms');
}
if( !function_exists('karaoke_post_type_pictures') ) {
    function karaoke_post_type_pictures() {
        $args = [
            'labels'        => [
                'name'      => __( 'Pictures' ),
                'add_new'   => __( 'Add Picture' ),
                'edit_item' => __( 'Edit Picture' ),
            ],
            'public' => true,
            'rewrite' => array('slug' => 'pictures'),
            'has_archive' => true,
            'menu_icon' => 'dashicons-cart',
            'supports' => ['title', 'thumbnail','editor','custom-fields'],
        ];

        register_post_type('picture', $args);
    }

    add_action('init', 'karaoke_post_type_pictures');
}

add_action( 'add_meta_boxes','add_room_metaboxes' );
function add_room_metaboxes() {
    add_meta_box('room_info', 'Room Information', 'wp_room_info', 'room', 'normal', 'high');
}

function wp_room_info()
{
    // $post is already set, and contains an object: the WordPress post
    global $post;
    $values = get_post_custom( $post->ID );
    $capacity = isset( $values['capacity'] ) ? $values['capacity'][0] : '';
    $price = isset( $values['price'] ) ? $values['price'][0] : '';

    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <p>
        <label for="capacity">Capacity</label>
        <input type="text" name="capacity" id="capacity" value="<?php echo $capacity; ?>" />
    </p>
    <p>
        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="<?php echo $price; ?>" />
    </p>

    <?php
}


add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;

    // Make sure your data is set before trying to save it
    if( isset( $_POST['capacity'] ) )
        update_post_meta( $post_id, 'capacity', $_POST['capacity'] );

    if( isset( $_POST['price'] ) )
        update_post_meta( $post_id, 'price', $_POST['price'] );

}

function rename_post_formats( $safe_text ) {
    if ( $safe_text == 'Aside' ){
        return 'Phòng nhỏ';
    } elseif ($safe_text == 'Image') {
        return 'Phòng trung';
    } elseif ($safe_text == 'Video') {
        return 'Phòng lớn';
    } elseif ($safe_text == 'Quote') {
        return 'Phòng VIP';
    }


    return $safe_text;
}
add_filter( 'esc_html', 'rename_post_formats' );

//rename Aside in posts list table
function live_rename_formats() {
    global $current_screen;

    if ( $current_screen->id == 'edit-post' ) { ?>
        <script type="text/javascript">
            jQuery('document').ready(function() {

                jQuery("span.post-state-format").each(function() {
                    if ( jQuery(this).text() == "Aside" ) {
                        jQuery(this).text("Phòng nhỏ");
                    } else if ( jQuery(this).text() == "Image" ) {
                        jQuery(this).text("Phòng trung");
                    } else if ( jQuery(this).text() == "Video" ) {
                        jQuery(this).text("Phòng lớn");
                    } else if ( jQuery(this).text() == "Quote" ) {
                        jQuery(this).text("Phòng VIP");
                    }

                });

            });
        </script>
    <?php }
}
add_action('admin_head', 'live_rename_formats');




