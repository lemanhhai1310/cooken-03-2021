<?php $data["title"] = "Du an"; ?>
<?php $is_home = true; ?>
<?php $showkh = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div class="home__section05 uk-section uk-background-norepeat uk-background-bottom-center" uk-height-viewport="offset-top: true;" data-src="images/Background1.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-1-2@m uk-flex-right@m uk-position-relative" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
            <div class="" uk-toggle="cls: uk-position-center-left; mode: media; media: @m">
                <div class="home__section05__box1">
                    <h1 class="uk-h1 home__section05__box1__title uk-margin animation">The Evoling <br>
                        Ad Network</h1>
                    <div class="home__section05__box1__box uk-margin">
                        <p class="home__section05__box1__desc animation">Cooken là một mạng quảng cáo giao dịch quảng cáo gốc, trong trang,
                            đẩy và quảng cáo bật lên theo các mô hình định giá CPM và CPC.</p>
                        <p class="home__section05__box1__desc animation">Phục vụ hơn 2 tỷ lần hiển thị mỗi ngày, chúng tôi cung cấp nhiều tùy
                            chọn thanh toán, dịch vụ chăm sóc khách hàng 24-7 và người quản lý
                            tài khoản chuyên dụng. Chúng tôi cố gắng trở thành người giỏi nhất
                            trong lớp, giúp bạn và doanh nghiệp của bạn phát triển.</p>
                    </div>
                    <a href="" class="home__section05__box1__btn uk-border-rounded uk-button uk-button-secondary animation">Xem thêm</a>
                </div>
            </div>
            <div class="uk-width-3-5@m">
                <div class="home__section05__box1__img animation" uk-scrollspy-class="uk-animation-scale-up">
                    <img src="images/MaskGroup1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Banner-->

<div class="blog__section1 uk-section uk-background-norepeat uk-background-top-center" data-src="images/bg2.png" uk-img>
    <div class="uk-container">
        <div class="uk-child-width-auto uk-grid-small uk-grid-41-m uk-flex-center mb-20 mb-56-m" uk-grid>
            <?php
            $data = array(
                'Tất cả',
                'FACEBOOK',
                'TIKTOK',
                'MEDIA',
                'APPLICATION',
            );
            foreach ($data as $k => $v): ?>
            <div>
                <a href="" class="<?= ($k==0) ? 'uk-active' : '' ?> blog__btn uk-button uk-button-default uk-button-large"><?= $v ?></a>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-child-width-1-3@m mb-20 mb-40-m uk-grid-small uk-grid-20-m blog__grid" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/service/img1.png',
                    'txt1' => 'Bài Viết Mới',
                ),
                array(
                    'src' => 'images/service/img2.png',
                    'txt1' => 'Tư Vấn',
                ),
                array(
                    'src' => 'images/service/img3.png',
                    'txt1' => 'Tuyển Dụng',
                ),
                array(
                    'src' => 'images/service/img4.png',
                    'txt1' => 'Bài Viết Mới',
                ),
                array(
                    'src' => 'images/service/img5.png',
                    'txt1' => 'Tư Vấn',
                ),
                array(
                    'src' => 'images/service/img6.png',
                    'txt1' => 'Tuyển Dụng',
                ),
                array(
                    'src' => 'images/service/in1.png',
                    'txt1' => 'Bài Viết Mới',
                ),
                array(
                    'src' => 'images/service/in2.png',
                    'txt1' => 'Tư Vấn',
                ),
                array(
                    'src' => 'images/service/img3.png',
                    'txt1' => 'Tuyển Dụng',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="blog__box1__bg duan__box1 uk-position-relative uk-overflow-hidden uk-inline-clip uk-transition-toggle" tabindex="0">
                    <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="720" height="582"></canvas>
                    </div>
                    <div class="duan__box1__overlay uk-transition-fade uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
                        <div class="uk-text-center">
                            <p class="duan__box1__title uk-h4 uk-margin-remove">Lorem Ipsum</p>
                            <p class="duan__box1__desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <a href="duan-detail.php" class="home__section05__box1__btn uk-border-rounded uk-button uk-button-secondary animation uk-scrollspy-inview uk-animation-slide-bottom-small" style="">Xem thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <ul class="uk-pagination uk-flex-center uk-grid-12" uk-grid uk-margin>
            <li class="uk-pagination__li"><a class="uk-pagination__a" href="#"><span uk-pagination-previous></span></a></li>
            <li class="uk-pagination__li"><a class="uk-pagination__a" href="#">1</a></li>
            <li class="uk-disabled uk-pagination__li"><span class="uk-pagination__a">...</span></li>
            <li class="uk-pagination__li"><a class="uk-pagination__a" href="#">5</a></li>
            <li class="uk-pagination__li"><a class="uk-pagination__a" href="#">6</a></li>
            <li class="uk-active uk-pagination__li"><span class="uk-pagination__a">7</span></li>
            <li class="uk-pagination__li"><a class="uk-pagination__a" href="#">8</a></li>
            <li class="uk-pagination__li"><a class="uk-pagination__a" href="#"><span uk-pagination-next></span></a></li>
        </ul>
    </div>
</div>

<!--ĐĂNG KÝ TƯ VẤN-->
<?php require "template-parts/layouts/section02.php"; ?>
<!--/ĐĂNG KÝ TƯ VẤN-->

<?php require "template-parts/layouts/footer.php"; ?>