<?php
/*
Template name: Homepage
*/?>
<?php get_header();?>
<div id="homepage">
    <div class="tab-1 tab">
        <img src="http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/slider2.png"/>
    </div>
    <div class="tab-room tab" id=""room>
        <div class="section-title">
            <h1 class="page-title">
                <span>Đặt phòng</span>
            </h1>
            <div class="bordertitle">
                <span class="borderleft"></span>
                <span class="bordericon fa fa-circle-o"></span>
                <span class="borderright"></span>
            </div>

        </div>
        <div id="room">
            <div class="container-fluid">
                <div class="row">
                    <section class="section-room">
                        <?php get_template_part('template-parts/room') ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-about tab" id="about" style=" background-image:url('http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/anh-mo-2.jpg');">
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
                        <li>Trang thiết bị âm thanh hiện đại</li>
                        <li>Phần mềm Karaoke mới nhất, cập nhật bài hát liên tục</li>
                        <li>Nội thất sang trọng</li>
                        <li>Cam kết mang đến cho bạn những trải nghiệm tuyệt vời nhất </li>
                        <li>Giá cả hợp lý </li>
                        <li>Luôn lắng nghe ý kiến của bạn</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-3 tab" style=" background-image:url('http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/anh-mo-2.jpg');">
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
    <div class="tab-albumanh tab" id="album-anh">
        <?php
        $pic = new WP_Query([
            'post_type' => 'picture',
            'posts_per_page'=>4,
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

    <div class="tab-contact tab" id="contact" style=" background-image:url('http://x3dev.crystal-techs.com/wp-content/uploads/2016/11/bg-contact.jpg');">
        <div class="section-title">
            <h1 class="page-title">
                <span style="color:white;">Liên Hệ</span>
            </h1>
            <div class="bordertitle">
                <span class="borderleft"></span>
                <span class="bordericon fa fa-circle-o"></span>
                <span class="borderright"></span>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2600.2328230478847!2d104.98602026759691!3d22.828960627120605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cc79b5327ec091%3A0x90963af63a51431a!2zMTIzIE5ndXnDqsyDbiBUaGHMgWkgSG_Mo2MsIFRy4bqnbiBQaMO6LCB0cC4gSMOgIEdpYW5nLCBIw6AgR2lhbmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1479717769460" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                <div class="col-md-6 add">
                    <h3>Địa chỉ</h3>
                    <p>KARAOKE X3 - TÔN VINH GIỌNG HÁT VIỆT</p>
                    <p>Số nhà 123 - Đường Nguyễn Thái Học - Tổ 16 phường Minh Khai - Tp Hà Giang</p>
                    <div class="space"></div>
                </div>
                <div class="col-md-6 form">
                    <?php echo do_shortcode('[contact-form-7 id="104" title="Y kien khach hang"]') ?>
                </div>

            </div>

        </div>
    </div>
</div>
<?php get_footer();?>