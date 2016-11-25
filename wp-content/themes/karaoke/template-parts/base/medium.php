<?php
/**
 * Created by PhpStorm.
 * User: hungnm58
 * Date: 11/25/2016
 * Time: 11:11 AM
 */
$args = array(
    'post_type' => 'room',
    'tax_query' => array(
        array(
            'taxonomy' => 'post_format',
            'field' => 'slug',
            'terms'    => array( 'post-format-image' )
        )
    )
);
$query = new WP_Query($args);
?>

<div class="list-images rows">
    <?php if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post();
        $capacity = get_post_meta($post->ID, 'capacity', true);
        $price = get_post_meta($post->ID, 'price', true);
        ?>
        <div class="single col-lg-3 col-md-6 col-xs-12">
            <div class="single-pic">
                <div class="image">
                    <?php the_post_thumbnail(array('340','340')) ?>
                </div>
                <div class="zoom">
                    <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url();?>"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
                </div>
                <div class="info">
                    <div class="info-2">
                        <div class="name">
                            <?php the_title() ?>
                        </div>
                        <div class="capacity">
                            <?php echo $price .' VNĐ/giờ, ' .$capacity.' người'?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>
</div>
