<?php $data["title"] = "Facebook Marketing"; ?>
<?php $is_home = true; ?>
<?php $showkh = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div class="home__section05 uk-section uk-background-norepeat uk-background-bottom-center" uk-height-viewport="offset-top: true;" data-src="images/Background1.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-1-2@m uk-flex-right@m uk-position-relative" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
            <div class="" uk-toggle="cls: uk-position-center-left; mode: media; media: @m">
                <div class="home__section05__box1 facebook">
                    <h1 class="uk-h1 home__section05__box1__title uk-margin animation"><span>Facebook</span> Marketing <br>
                        Quảng cáo hiệu quả <br> Bứt phá doanh thu</h1>
                    <div class="home__section05__box1__box uk-margin">
                        <p class="home__section05__box1__desc animation">Giải pháp kinh doanh online hiệu quả - ổn định traffic,tối ưu chi phí
                            Cooken Media là Agency quảng cáo chính thức của Facebook tại Việt Nam. Với kinh nghiệm, khả năng và uy tín của mình,
                            chúng tôi đang giúp đỡ +700 khách hàng kiếm nhiều tiền hơn từ Facebook mỗi ngày</p>
                    </div>
                    <a href="" class="home__section05__box1__btn uk-border-rounded uk-button uk-button-secondary animation">Xem thêm</a>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="home__section05__box1__img animation" uk-scrollspy-class="uk-animation-scale-up">
                    <img src="images/Group-banner-fb.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Banner-->

<div class="uk-section home__section06 uk-text-center uk-background-norepeat uk-background-top-center" data-src="images/bg2.png" uk-img>
    <div class="uk-container">
        <div class="uk-text-center uk-margin home__boxCommon mb-60-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">Facebook - mỏ vàng cho những người kinh doanh thông thái</h2>
        </div>
        <div class="uk-child-width-1-4@m uk-grid-small uk-grid-20-m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/facebook/icon1.png',
                    'txt1' => '70 triệu tài khoản',
                    'txt2' => 'Hơn 2/3 dân số Việt Nam đang sử dụng Facebook, và con số này còn tiếp tục tăng',
                ),
                array(
                    'src' => 'images/facebook/icon2.png',
                    'txt1' => '82% độ tuổi',
                    'txt2' => 'Hơn 2/3 dân số Việt Nam đang sử dụng Facebook, và con số này còn tiếp tục tăng',
                ),
                array(
                    'src' => 'images/facebook/icon3.png',
                    'txt1' => '320 phút mỗi ngày ',
                    'txt2' => 'Hơn 2/3 dân số Việt Nam đang sử dụng Facebook, và con số này còn tiếp tục tăng',
                ),
                array(
                    'src' => 'images/facebook/icon4.png',
                    'txt1' => '64% mua hàng ',
                    'txt2' => 'Hơn 2/3 dân số Việt Nam đang sử dụng Facebook, và con số này còn tiếp tục tăng',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-text-center">
                    <div class="facebook__box1__img">
                        <img src="<?= $v['src'] ?>" alt="">
                    </div>
                    <h5 class="uk-h5 facebook__box1__txt1"><?= $v['txt1'] ?></h5>
                    <div class="facebook__box1__txt2"><?= $v['txt2'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!--DỊCH VỤ-->
<div class="uk-section home__section07" uk-height-viewport="offset-bottom: false">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin home__boxCommon mb-40-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">FACEBOOK MARKETING</h2>
        </div>
        <ul class="uk-child-width-auto@m uk-margin mb-60-m uk-grid-small uk-grid-30-m uk-flex-center" uk-grid uk-switcher="connect: .my-class">
            <?php
            $data = array(
                'TƯ VẤN CHIẾN LƯỢC',
                'CHẠY QUẢNG CÁO',
                'CHO THUÊ TÀI KHOẢN',
            );
            foreach ($data as $k => $v): ?>
            <li>
                <a href="" class="home__section07__box1__btn uk-button uk-button-default"><?= $v ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <ul class="uk-switcher mb-60-m my-class">
            <?php
            $data = array(
                'Tư vấn chiến lược Facebook Marketing',
                'CHẠY QUẢNG CÁO',
                'CHO THUÊ TÀI KHOẢN',
            );
            foreach ($data as $k => $v): ?>
                <li>
                    <div class="uk-flex-middle uk-grid-small uk-grid-58-m" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
                        <div class="uk-width-expand">
                            <img src="images/facebook/Frame.png" alt="">
                        </div>
                        <div class="uk-width-2-5@m animation">
                            <h3 class="uk-h3 home__section07__box2__title uk-text-capitalize"><?= $v ?></h3>
                            <div class="mb-20 mb-32-m">
                                <p class="home__section05__box1__desc uk-margin-remove">Chiến lược bài bản giúp bạn tiếp cận khách hàng mục tiêu chính xác và nhanh chóng </p>
                            </div>
                            <ul class="uk-list uk-list-bullet home__section07__box2__list">
                                <li>Tiếp cận người dùng khổng lồ của Facebook</li>
                                <li>Giảm thiểu tối đa chi phí quảng cáo lãng phí </li>
                                <li>Nâng cao nhận diện thương hiệu tối ưu doanh
                                    số bán hàng</li>
                            </ul>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="uk-text-center uk-margin home__boxCommon mb-60-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">QUY TRÌNH LÀM VIỆC</h2>
        </div>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-21-m" uk-grid>
            <div>
                <ul class="home__section04__box1" uk-accordion uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
                    <?php
                    $data = array(
                        array(
                            'txt' => 'Tiếp nhận thông tin',
                        ),
                        array(
                            'txt' => 'Tư vấn chiến lược',
                        ),
                        array(
                            'txt' => 'Duyệt nội dung',
                        ),
                        array(
                            'txt' => 'Triển khai quảng cáo',
                        ),
                        array(
                            'txt' => 'Tối ưu chiến dịch',
                        ),
                        array(
                            'txt' => 'Báo cáo kết quả',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <li class="animation <?= ($k == 0) ? 'uk-open' : '' ?>">
                            <a class="uk-accordion-title home__section04__box1__title" href="#"><span class="home__section04__box1__title__txt"><?= $v['txt'] ?></span></a>
                            <div class="uk-accordion-content home__section04__box1__content uk-background-muted uk-padding-small">
                                <ul class="uk-list uk-list-bullet">
                                    <li>Kinh nghiệm trong ngành quảng cáo, đã từng triển khai nhiều chiến dịch lớn cho các đối tác ở các lĩnh vực khác nhau: VTC, Golden Gate, MSB Bank, MB Bank, Funtap,....</li>
                                </ul>
                            </div>
                        </li>
                    <?php endforeach; ?>
                    <!--
                    <li class="uk-open">
                        <a class="uk-accordion-title" href="#">Item 1</a>
                        <div class="uk-accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </li>
                    -->
                </ul>
            </div>
            <div>
                <div class="uk-cover-container">
                    <img src="images/facebook/shutterstock_4787329871.png" alt="" uk-cover>
                    <canvas width="910" height="992"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/DỊCH VỤ-->

<!--LỢI THẾ CỦA COOKEN AGENCY-->
<div class="uk-section-xlarge home__section04 uk-background-norepeat uk-background-top-center" uk-height-viewport="offset-bottom: true" data-src="images/bg4.png" uk-img>
    <div class="uk-container uk-container-small mb-30 mb-80-m">
        <div class="uk-text-center uk-margin home__boxCommon mb-80-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">DỰ ÁN TIÊU BIỂU</h2>
        </div>
        <div class="" uk-scrollspy="cls: counter;">
            <div id="counter" class="uk-child-width-1-2 uk-grid-small uk-grid-43-m" uk-grid uk-scrollspy="target: .home__section04__blog__box2; cls: uk-animation-fade; delay: 500">
                <?php
                $data = array(
                    array(
                        'number' => 999,
                        'title' => 'Khách hàng đã thành công',
                    ),
                    array(
                        'number' => 3000,
                        'title' => 'Dự án triển khai',
                    ),
                    array(
                        'number' => 20,
                        'title' => 'Nhân sự tài năng và tâm huyết',
                    ),
                    array(
                        'number' => 500,
                        'title' => 'Ngân sách trung bình hàng ngày',
                    ),
                );
                foreach ($data as $k => $v): ?>
                    <div class="<?= ($k == 3) ? 'uk-width-expand@m' : 'uk-width-auto@m' ?>">
                        <div class="uk-text-center home__section04__blog__box2">
                            <div class="home__section04__blog__box2__txt1"><span class="counter-value" data-count="<?= $v['number'] ?>">0</span><?= ($k == 3) ? ' TRIỆU' : '+' ?></div>
                            <div class="home__section04__blog__box2__txt2"><?= $v['title'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="uk-container">
        <div class="" uk-slider="finite: true;autoplay: true;">

            <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-flex-middle uk-grid-small uk-grid-20-m" uk-grid>
                    <?php for ($i=1;$i<=6;$i++): ?>
                        <li>
                            <div class="uk-child-width-1-1 uk-grid-small uk-grid-40-m" uk-grid>
                                <?php for ($j=0;$j<=1;$j++): ?>
                                    <div>
                                        <div class="uk-inline-clip uk-transition-toggle facebook__box2 uk-light" tabindex="0">
                                            <div class="uk-cover-container uk-transition-scale-up uk-transition-opaque">
                                                <img src="images/duan/img<?= $i + 3*$j ?>.png" alt="" uk-cover>
                                                <canvas width="1080" height="873"></canvas>
                                            </div>
                                            <div class="uk-transition-fade uk-position-cover facebook__box2__overlay uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">

                                            </div>
                                            <div class="uk-position-center uk-text-center">
                                                <div class="uk-transition-slide-top-small mb-20 mb-27-m">
                                                    <div class="facebook__box2__txt1">Dự án <?= $i + 3*$j ?></div>
                                                    <h4 class="uk-margin-remove facebook__box2__txt2">khởi đầu là cuộc thi Bay Cao Challenge</h4>
                                                </div>
                                                <div class="uk-transition-slide-bottom-small">
                                                    <a href="" class="facebook__box2__btn uk-button uk-button-default uk-border-pill">XEM CHI TIẾT</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </li>
                    <?php endfor; ?>
                </ul>

                <!--
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                -->

            </div>

            <ul class="home__dot1 uk-slider-nav uk-dotnav uk-flex-center uk-margin mt-37-m"></ul>

        </div>
    </div>
</div>
<!--/LỢI THẾ CỦA COOKEN AGENCY-->

<!--ĐĂNG KÝ TƯ VẤN-->
<?php require "template-parts/layouts/section02.php"; ?>
<!--/ĐĂNG KÝ TƯ VẤN-->

<?php require "template-parts/layouts/footer.php"; ?>