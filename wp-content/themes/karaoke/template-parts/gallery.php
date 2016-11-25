<?php
/*
Template name: Gallery
*/?>
<?php get_header('thucdon');?>
<?php
$pic = new WP_Query([
    'post_type' => 'single_picture',
]);
?>
<div id="homepage">
    <div class="gallery-page tab-albumanh tab" id="album-anh" style="background-image:url('http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/anh-mo-2.jpg');">
        <div class="section-title">
            <h1 class="page-title">
                <span>Album Ảnh</span>
            </h1>
            <div class="bordertitle">
                <span class="borderleft"></span>
                <span class="bordericon fa fa-circle-o"></span>
                <span class="borderright"></span>
            </div>

        </div>
        <div id="album">
            <div class="container" style="padding:0;margin:0; width:100%;">
                <section class="section-album">
                    <?php
                    while ($pic->have_posts()) {
                        $pic->the_post();
                        get_template_part('inc/gallery-picture');
                    }
                    ?>
                </section>
            </div>
        </div>
    </div>
</div>



<?php get_footer();?>
