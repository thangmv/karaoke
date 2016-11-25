<?php
$str = get_post_meta(get_the_ID(), 'single_picture', true);
$post=get_the_ID();
?>
<div class="single col-md-3 col-xs-12">
    <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url();?>">
        <div class="single-pic" style="background-image:url('<?php the_post_thumbnail_url();?>');">
        </div>
    </a>

</div>