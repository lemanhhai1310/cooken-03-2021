<?php $data["title"] = "Trang chủ"; ?>
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

<div class="uk-section home__section06 uk-text-center uk-background-norepeat uk-background-top-center" data-src="images/bg2.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin home__boxCommon mb-28-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">GIỚI THIỆU</h2>
        </div>
        <div class="uk-flex-center uk-margin mb-80-m" uk-grid>
            <div class="uk-width-3-5@m">
                <div class="uk-text-center">
                    <p class="home__section05__box1__desc">Với chất lượng dịch vụ vượt trội, phục vụ hơn 50+ khách hàng mỗi ngày với tổng ngân sách hàng tỷ đồng, đội ngũ chăm sóc khách hàng thường trực cùng chính sách thanh toán hấp dẫn, chúng tôi tự tin mang đến cho bạn những giải pháp tốt nhất với mức độ hài lòng cao nhất.</p>
                    <p class="home__section05__box1__desc">Hãy đồng hành cùng Cooken Agency - và chúng ta sẽ cùng nhau phát triển!</p>
                </div>
            </div>
        </div>
        <div><a href="" class="uk-button home__section06__btn uk-border-rounded uk-button-default">LIÊN HỆ NGAY</a></div>
    </div>
</div>

<!--DỊCH VỤ-->
<div class="uk-section home__section07" uk-height-viewport="offset-bottom: false">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin home__boxCommon mb-40-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">DỊCH VỤ</h2>
        </div>
        <ul class="uk-child-width-auto@m uk-margin mb-60-m uk-grid-small uk-grid-30-m uk-flex-center" uk-grid uk-switcher="connect: .my-class">
            <?php
            $data = array(
                'Facebook Marketing',
                'TIKTOK MARKETING',
                'APPLICATION MARKETING',
                'MEDIA SOLUTION',
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
                'Facebook Marketing',
                'TIKTOK MARKETING',
                'APPLICATION MARKETING',
                'MEDIA SOLUTION',
            );
            foreach ($data as $k => $v): ?>
                <li>
                    <div class="uk-flex-middle uk-grid-small uk-grid-58-m" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
                        <div class="uk-width-expand">
                            <img src="images/anhminhhoa1.png" alt="">
                        </div>
                        <div class="uk-width-2-5@m animation">
                            <h3 class="uk-h3 home__section07__box2__title uk-text-capitalize"><?= $v ?></h3>
                            <div class="mb-20 mb-32-m">
                                <p class="home__section05__box1__desc uk-margin-remove">Cooken Agency là đối tác chính thức của Facebook tại thị trường Việt Nam. Với năng lực, kinh nghiệm và uy tín của mình, chúng tôi đã và đang giúp hàng trăm doanh nghiệp nâng cao năng lực cạnh tranh và cải thiện hiệu quả kinh doanh  thông qua dịch vụ Facebook Marketing </p>
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

        <div class="uk-text-center uk-margin home__boxCommon mb-40-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">DỰ ÁN</h2>
        </div>
        <div class="uk-text-center uk-margin mb-60-m">
            <div class="uk-display-inline-block home__section07__box3 uk-border-pill">
                <a href="" class="home__section07__box3__btn uk-active uk-button uk-button-default uk-border-pill">Việt Nam</a>
                <a href="" class="home__section07__box3__btn uk-button uk-button-default uk-border-pill">Nước Ngoài</a>
            </div>
        </div>
        <div class="" uk-slider>

            <div class="uk-position-relative">

                <div class="uk-slider-container uk-light uk-slider-container-offset">
                    <ul class="uk-slider-items uk-child-width-1-3@m uk-grid-match uk-grid-small uk-grid-37-m" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/duan/logo1.png',
                                'txt' => array(
                                    'Số lượng người dùng sử dụng dịch vụ định danh khách hàng điện tử - eKYC 15x%',
                                    'Tổng số lượt nhắc đến trên các trang mạng xã hội ( Facebook, Tiktok, ...) tăng 200% xuyên suốt chiến dịch',
                                    'Số người dùng sử dụng ứng dụng sau khi đăng ký tài khoản tăng 54%',
                                ),
                            ),
                            array(
                                'src' => 'images/duan/logo2.png',
                                'txt' => array(
                                    'Tổng số người dùng ứng dụng tăng trưởng 17x%',
                                    'Tỉ lệ người dùng quay lại/tái cài đặt tăng 63%',
                                    'Tổng doanh thu ghi nhận từ nền tảng ứng dụng tăng 300%',
                                ),
                            ),
                            array(
                                'src' => 'images/duan/logo3.png',
                                'txt' => array(
                                    'Tổng số người cài đặt ứng dụng tăng trưởng 19x%',
                                    'Tỉ lệ gỡ ứng dụng trong vòng 7 ngày sau khi cài đặt giảm 71%',
                                    'Tỉ lệ người chơi thực hiện hành động chi trả trong quá trình sử dụng 34%',
                                ),
                            ),
                            array(
                                'src' => 'images/duan/logo1.png',
                                'txt' => array(
                                    'Số lượng người dùng sử dụng dịch vụ định danh khách hàng điện tử - eKYC 15x%',
                                    'Tổng số lượt nhắc đến trên các trang mạng xã hội ( Facebook, Tiktok, ...) tăng 200% xuyên suốt chiến dịch',
                                    'Số người dùng sử dụng ứng dụng sau khi đăng ký tài khoản tăng 54%',
                                ),
                            ),
                            array(
                                'src' => 'images/duan/logo2.png',
                                'txt' => array(
                                    'Tổng số người dùng ứng dụng tăng trưởng 17x%',
                                    'Tỉ lệ người dùng quay lại/tái cài đặt tăng 63%',
                                    'Tổng doanh thu ghi nhận từ nền tảng ứng dụng tăng 300%',
                                ),
                            ),
                            array(
                                'src' => 'images/duan/logo3.png',
                                'txt' => array(
                                    'Tổng số người cài đặt ứng dụng tăng trưởng 19x%',
                                    'Tỉ lệ gỡ ứng dụng trong vòng 7 ngày sau khi cài đặt giảm 71%',
                                    'Tỉ lệ người chơi thực hiện hành động chi trả trong quá trình sử dụng 34%',
                                ),
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                            <li>
                                <div class="uk-card uk-card-default uk-text-center home__section07__box4">
                                    <div class="home__section07__box4__img uk-flex uk-flex-middle uk-flex-center">
                                        <img src="<?= $v['src'] ?>" alt="">
                                    </div>
                                    <div class="uk-card-body home__section07__box4__body">
                                        <ul class="uk-list home__section07__box4__list">
                                            <?php foreach ($v['txt'] as $k1 => $v1): ?>
                                                <li><?= $v1 ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="uk-hidden@s uk-light">
                    <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

                <div class="uk-visible@s">
                    <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                </div>

            </div>

            <ul class="uk-slider-nav home__dot1 uk-dotnav uk-flex-center uk-margin"></ul>

        </div>
        <div class="uk-child-width-1-3@m uk-grid-match uk-grid-small uk-grid-37-m uk-hidden" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/duan/logo1.png',
                    'txt' => array(
                        'Số lượng người dùng sử dụng dịch vụ định danh khách hàng điện tử - eKYC 15x%',
                        'Tổng số lượt nhắc đến trên các trang mạng xã hội ( Facebook, Tiktok, ...) tăng 200% xuyên suốt chiến dịch',
                        'Số người dùng sử dụng ứng dụng sau khi đăng ký tài khoản tăng 54%',
                    ),
                ),
                array(
                    'src' => 'images/duan/logo2.png',
                    'txt' => array(
                        'Tổng số người dùng ứng dụng tăng trưởng 17x%',
                        'Tỉ lệ người dùng quay lại/tái cài đặt tăng 63%',
                        'Tổng doanh thu ghi nhận từ nền tảng ứng dụng tăng 300%',
                    ),
                ),
                array(
                    'src' => 'images/duan/logo3.png',
                    'txt' => array(
                        'Tổng số người cài đặt ứng dụng tăng trưởng 19x%',
                        'Tỉ lệ gỡ ứng dụng trong vòng 7 ngày sau khi cài đặt giảm 71%',
                        'Tỉ lệ người chơi thực hiện hành động chi trả trong quá trình sử dụng 34%',
                    ),
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="uk-card uk-card-default uk-text-center home__section07__box4">
                    <div class="home__section07__box4__img uk-flex uk-flex-middle uk-flex-center">
                        <img src="<?= $v['src'] ?>" alt="">
                    </div>
                    <div class="uk-card-body home__section07__box4__body">
                        <ul class="uk-list home__section07__box4__list">
                            <?php foreach ($v['txt'] as $k1 => $v1): ?>
                            <li><?= $v1 ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/DỊCH VỤ-->

<!--LỢI THẾ CỦA COOKEN AGENCY-->
<div class="uk-section-xlarge home__section04 uk-background-norepeat uk-background-top-center" uk-height-viewport="offset-bottom: true" data-src="images/bg4.png" uk-img>
    <div class="uk-container uk-container-small">

        <div class="uk-margin-medium mb-120-m">
            <div class="uk-text-center uk-margin home__boxCommon mb-60-m">
                <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">LỢI THẾ CỦA COOKEN AGENCY</h2>
            </div>
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-21-m" uk-grid>
                <div>
                    <ul class="home__section04__box1" uk-accordion uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
                        <?php
                        $data = array(
                            array(
                                'txt' => 'Khách hàng doanh nghiệp',
                            ),
                            array(
                                'txt' => 'Khách hàng cá nhân',
                            ),
                        );
                        foreach ($data as $k => $v): ?>
                        <li class="animation <?= ($k == 0) ? 'uk-open' : '' ?>">
                            <a class="uk-accordion-title home__section04__box1__title" href="#"><span class="home__section04__box1__title__txt"><?= $v['txt'] ?></span></a>
                            <div class="uk-accordion-content home__section04__box1__content uk-background-default uk-padding-small">
                                <ul class="uk-list uk-list-bullet">
                                    <li>Kinh nghiệm trong ngành quảng cáo, đã từng triển khai nhiều chiến dịch lớn cho các đối tác ở các lĩnh vực khác nhau: VTC, Golden Gate, MSB Bank, MB Bank, Funtap,....</li>
                                    <li>Chính sách thanh toán ưu đãi, minh bạch về chi phí, quy trình làm việc chuyên nghiệp, đề cao uy tín và  tính hiệu quả trong cả ngắn hạn và dài hạn</li>
                                    <li>Hệ thống Dashboard theo dõi quá trình vận hành chiến dịch tối ưu, giúp khách hàng dễ dàng kiểm tra và đối soát để đưa ra những điều chỉnh cần thiết</li>
                                    <li>Đội ngũ chăm sóc khách hàng làm việc 24/7, sẵn sàng hỗ trợ mỗi khi có yêu cầu đến khi bạn hài lòng </li>
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
                        <img src="images/shutterstock_478732987-1.png" alt="" uk-cover>
                        <canvas width="910" height="992"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-margin-medium mb-120-m">
            <div class="uk-text-center uk-margin home__boxCommon mb-80-m">
                <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">NHỮNG CON SỐ BIẾT NÓI CỦA COOKEN AGENCY</h2>
            </div>
            <div uk-scrollspy="cls: counter;">
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

        <div class="uk-text-center uk-margin home__boxCommon mb-40-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">BLOG</h2>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-small uk-grid-17-m" uk-grid>
            <?php
            $data = array(
                array(
                    'src' => 'images/blog/img1.png',
                    'title' => 'Làm thế nào để một cửa hàng nhỏ có thể tăng trưởng 200% doanh số chỉ bằng việc tối ưu Facebook Ads?',
                ),
                array(
                    'src' => 'images/blog/img2.png',
                    'title' => 'Những dự án ấn tượng của Cooken Agency trong quý IV 2020: MB Bank, Funtap, VTC ...',
                ),
                array(
                    'src' => 'images/blog/img3.png',
                    'title' => 'Case Study: Tiktok Ads - mảnh đất vàng cho những dân chơi POD và Dropshipping',
                ),
            );
            foreach ($data as $k => $v): ?>
            <div>
                <div class="home__section04__blog__box1">
                    <div class="uk-cover-container uk-margin-small">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="620" height="434"></canvas>
                    </div>
                    <div class="uk-margin-small home__section04__blog__box1__date">25-02-2021</div>
                    <h5 class="home__section04__blog__box1__title uk-h5 uk-margin-remove uk-margin-small"><a href=""><?= $v['title'] ?></a></h5>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!--/LỢI THẾ CỦA COOKEN AGENCY-->

<!--REFERRAL PROGRAM-->
<div class="home__section03 mb-120-m uk-flex uk-flex-middle uk-text-center uk-background-norepeat uk-background-center-center" uk-height-viewport="offset-bottom: true" data-src="images/bg3.png" uk-img>
    <div class="uk-section uk-width-1-1">
        <div class="uk-container uk-container-small">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-2-5@m">
                    <div class="uk-text-center uk-margin home__boxCommon mb-37-m">
                        <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">REFERRAL PROGRAM</h2>
                    </div>
                    <p class="home__section01__box1__txt uk-margin-remove">We appreciate it when you introduce us to new clients. By way of thank you, we will credit you with 5% of future revenues made by publishers you send our way. Statistics and referral links are available in your account. Help us help your contacts help you!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/REFERRAL PROGRAM-->

<!--ĐĂNG KÝ TƯ VẤN-->
<?php require "template-parts/layouts/section02.php"; ?>
<!--/ĐĂNG KÝ TƯ VẤN-->

<?php require "template-parts/layouts/footer.php"; ?>