
<div class="table-tab">
    <ul  class="nav nav-pills">
        <li class="active">
            <a  href="#nho" data-toggle="tab">Phòng nhỏ</a>
        </li>
        <li><a href="#trung" data-toggle="tab">Phòng Trung</a>
        </li>
        <li><a href="#lon" data-toggle="tab">Phòng Lớn</a>
        </li>
        <li><a href="#vip" data-toggle="tab">Phòng VIP</a>
        </li>
    </ul>
</div>

<div class="tab-content clearfix">
    <div class="tab-pane active" id="nho">
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
