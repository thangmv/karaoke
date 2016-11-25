<?php
/*
Template name: Gallery
*/?>
<?php get_header();?>
<div class="tab-albumanh tab" id="album-anh">
    <?php
    $pic = new WP_Query([
        'post_type' => 'picture',
    ]);
    ?>
    <div class="section-title">
        <h1 class="page-title">
            <span style="color:black;">Album ảnh</span>
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
                    get_template_part('inc/single-pic');
                }
                ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer();?>
