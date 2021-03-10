<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div class="home__section05 uk-section uk-background-norepeat uk-background-bottom-center" uk-height-viewport="offset-top: true;" data-src="images/Background1.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-1-2@m uk-flex-right@m uk-position-relative" uk-grid>
            <div class="" uk-toggle="cls: uk-position-center-left; mode: media; media: @m">
                <div class="home__section05__box1">
                    <h1 class="uk-h1 home__section05__box1__title uk-margin">The Evoling <br>
                        Ad Network</h1>
                    <div class="home__section05__box1__box uk-margin">
                        <p class="home__section05__box1__desc">Cooken là một mạng quảng cáo giao dịch quảng cáo gốc, trong trang,
                            đẩy và quảng cáo bật lên theo các mô hình định giá CPM và CPC.</p>
                        <p class="home__section05__box1__desc">Phục vụ hơn 2 tỷ lần hiển thị mỗi ngày, chúng tôi cung cấp nhiều tùy
                            chọn thanh toán, dịch vụ chăm sóc khách hàng 24-7 và người quản lý
                            tài khoản chuyên dụng. Chúng tôi cố gắng trở thành người giỏi nhất
                            trong lớp, giúp bạn và doanh nghiệp của bạn phát triển.</p>
                    </div>
                    <a href="" class="home__section05__box1__btn uk-border-rounded uk-button uk-button-secondary">Xem thêm</a>
                </div>
            </div>
            <div class="uk-width-3-5@m">
                <img src="images/MaskGroup1.png" alt="">
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

<!---->
<div class="uk-section-xlarge home__section04 uk-background-norepeat uk-background-top-center" uk-height-viewport="offset-bottom: true" data-src="images/bg4.png" uk-img>
    <div class="uk-container uk-container-small">

        <div class="uk-margin-medium mb-120-m">
            <div class="uk-text-center uk-margin home__boxCommon mb-60-m">
                <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">LỢI THẾ CỦA COOKEN AGENCY</h2>
            </div>
            <div class="uk-child-width-1-2@m uk-grid-small uk-grid-21-m" uk-grid>
                <div>
                    <ul class="home__section04__box1" uk-accordion>
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
                        <li class="<?= ($k == 0) ? 'uk-open' : '' ?>">
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
            <div id="counter" class="uk-child-width-1-2 uk-grid-small uk-grid-43-m" uk-grid>
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
<!--/-->

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

<!--LIÊN HỆ,HÌNH THỨC THANH TOÁN-->
<?php require "template-parts/layouts/section01.php"; ?>
<!--/LIÊN HỆ,HÌNH THỨC THANH TOÁN-->

<?php require "template-parts/layouts/footer.php"; ?>