<?php
/*
Template name: Gallery
*/?>
<?php get_header();?>
<?php
$pic = new WP_Query([
    'post_type' => 'picture',
]);
?>
<div class="container" id="gallery">
    <div class="row">
        <section class="section-gallery">
            <?php
            while ($pic->have_posts()) {
                $pic->the_post();
                get_template_part('inc/single-pic');
            }
            ?>
        </section>
    </div>
</div>

<?php get_footer();?>
