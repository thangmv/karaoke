
<ul  class="nav nav-pills">
    <li class="active">
        <a  href="#all" data-toggle="tab">Tất cả</a>
    </li>
    <li>
        <a  href="#nho" data-toggle="tab">Phòng Nhỏ</a>
    </li>
    <li><a href="#trung" data-toggle="tab">Phòng Trung</a>
    </li>
    <li><a href="#lon" data-toggle="tab">Phòng Lớn</a>
    </li>
    <li><a href="#vip" data-toggle="tab">Phòng VIP</a>
    </li>
</ul>

<div class="tab-content clearfix">
    <div class="tab-pane active" id="all">
        <?php get_template_part('template-parts/base/all') ?>
    </div>
    <div class="tab-pane" id="nho">
        <?php get_template_part('template-parts/base/small') ?>
    </div>
    <div class="tab-pane" id="trung">
        <?php get_template_part('template-parts/base/medium') ?>
    </div>
    <div class="tab-pane" id="lon">
        <?php get_template_part('template-parts/base/big') ?>
    </div>
    <div class="tab-pane" id="vip">
        <?php get_template_part('template-parts/base/vip') ?>
    </div>
</div>
