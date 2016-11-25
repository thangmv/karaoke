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
            'terms'    => array( 'post-format-aside' )
        )
    )
);
$query = new WP_Query($args);
?>

<div class="row">
    <?php if( $query->have_posts()) : while( $query->have_posts() ) : $query->the_post(); ?>
        <div class="single col-md-3 col-xs-12">
            <?php the_post_thumbnail() ?>
        </div>

    <?php endwhile; endif; ?>
</div>
