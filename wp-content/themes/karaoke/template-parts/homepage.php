<?php
/*
Template name: Homepage
*/?>
<?php get_header();?>
<div id="homepage">
    <div class="tab-1">
        <img src="http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/slider2.png"/>
    </div>
    <div class="tab-about">
        <div class="section-title">
            <h1 class="page-title">
                <span>Giới Thiệu</span>
            </h1>
            <div class="bordertitle">
                <span class="borderleft"></span>
                <span class="bordericon fa fa-circle-o"></span>
                <span class="borderright"></span>
            </div>

        </div>
        <div class="main-page container">
            <div class="row">
                <div class="picture col-md-5">
                    <img src="http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/about.jpg"/>
                </div>
                <div class="info col-md-6">
                    <h3 class="welcome">
                        Chào mừng đến với X3 Karaoke
                    </h3>
                    <ul>
                        <li>gioi thieu </li>
                        <li>gioi thieu </li>
                        <li>gioi thieu </li>
                        <li>gioi thieu </li>
                        <li>gioi thieu </li>
                        <li>gioi thieu </li>
                        <li>gioi thieu </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-3">
        <div class="container">
            <div class="row">
                <div class="icn-container fa fa-quote-left aligncenter type3" style="border-color:#fff;color:#fff;"></div>
                <h2><span style="color:red;">Khách hàng</span> là <span style="color:red;">thượng đế</span></h2>
                <h2>Chúng tôi luôn mang đến những <span style="color:red;">trải nghiệm tốt nhất</span></h2>
                <h2>cùng những phút giây <span style="color:red;">không thể nào quên</span></h2>
                <div class="spacer" style="height:20px;"></div>
                <h5>X3 Karaoke</h5>
            </div>
        </div>
    </div>
    <div class="albumanh">
        <?php
        $pic = new WP_Query([
            'post_type' => 'picture',
        ]);
        ?>
        <div id="gallery">
            <div>
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
    </div>
</div>
<?php get_footer();?>