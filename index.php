<?php $data["title"] = "Trang chủ"; ?>
<?php $is_home = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--LIÊN HỆ,HÌNH THỨC THANH TOÁN-->
<div class="home__section01 uk-section uk-background-norepeat uk-background-top-center" uk-height-viewport="offset-bottom: true" data-src="images/bg1.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin home__boxCommon mb-80-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">LIÊN HỆ</h2>
        </div>
        <div class="uk-child-width-1-3@m uk-grid-73-m uk-margin mb-76-m" uk-grid>
            <div>
                <div class="uk-text-center home__section01__box1">
                    <div class="uk-margin mb-44-m home__section01__box1__img">
                        <img class="uk-responsive-height" src="images/lienhe/FAQ.png" alt="">
                    </div>
                    <div><span class="home__section01__box1__txt">Tất cả những gì bạn cần biết về Cooken Agency và cách chúng tôi giúp khách hàng phát triển</span></div>
                </div>
            </div>
            <div>
                <div class="uk-text-center home__section01__box1">
                    <div class="uk-margin mb-44-m home__section01__box1__img">
                        <img class="uk-responsive-height" src="images/lienhe/Fb&Telegram.png" alt="">
                    </div>
                    <div class="uk-flex-middle uk-flex-center uk-child-width-auto uk-grid-8 uk-margin-small mb-17-m" uk-grid>
                        <div>
                            <img src="images/lienhe/iconfinder_telegram_3069742-copy.png" alt="">
                        </div>
                        <div>
                            <span class="home__section01__box1__txt">@cookensupport</span>
                        </div>
                    </div>
                    <div class="uk-flex-middle uk-flex-center uk-child-width-auto uk-grid-8 uk-margin-remove" uk-grid>
                        <div>
                            <img src="images/lienhe/iconfinder_facebook_834722.png" alt="">
                        </div>
                        <div>
                            <span class="home__section01__box1__txt">@cookenmediaagency</span>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-text-center home__section01__box1">
                    <div class="uk-margin mb-44-m home__section01__box1__img">
                        <img class="uk-responsive-height" src="images/lienhe/Chat.png" alt="">
                    </div>
                    <div><span class="home__section01__box1__txt">Hỗ trợ trực tuyến 24/7 <br> 365 ngày/năm</span></div>
                </div>
            </div>
        </div>

        <div class="uk-margin-medium mb-120-m" uk-slider="finite: true;autoplay: true;">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-flex-middle" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/lienhe/Logo_MB_new.png',
                        ),
                        array(
                            'src' => 'images/lienhe/logo-cong-ty-funtap.png',
                        ),
                        array(
                            'src' => 'images/lienhe/download.png',
                        ),
                        array(
                            'src' => 'images/lienhe/luxstray-6.png',
                        ),
                        array(
                            'src' => 'images/lienhe/Logo_MB_new.png',
                        ),
                        array(
                            'src' => 'images/lienhe/logo-cong-ty-funtap.png',
                        ),
                        array(
                            'src' => 'images/lienhe/download.png',
                        ),
                        array(
                            'src' => 'images/lienhe/luxstray-6.png',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                        <li>
                            <div class="uk-text-center">
                                <img src="<?= $v['src'] ?>" alt="">
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!--
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                -->

            </div>

            <ul class="home__dot1 uk-slider-nav uk-dotnav uk-flex-center uk-margin mt-37-m"></ul>

        </div>

        <div class="uk-text-center uk-margin home__boxCommon mb-64-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">HÌNH THỨC THANH TOÁN</h2>
        </div>
        <div uk-slider="finite: true;autoplay: true;">

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-flex-middle" uk-grid>
                    <?php
                    $data = array(
                        array(
                            'src' => 'images/thanhtoan/paysafecard-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/visaMasterCard-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/webmoney-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/yandexMoney-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/paysafecard-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/visaMasterCard-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/webmoney-1.png',
                        ),
                        array(
                            'src' => 'images/thanhtoan/yandexMoney-1.png',
                        ),
                    );
                    foreach ($data as $k => $v): ?>
                    <li>
                        <div class="uk-text-center">
                            <img src="<?= $v['src'] ?>" alt="">
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>

                <!--
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                -->

            </div>

            <ul class="home__dot1 uk-slider-nav uk-dotnav uk-flex-center uk-margin mt-60-m"></ul>

        </div>
    </div>
</div>
<!--/LIÊN HỆ,HÌNH THỨC THANH TOÁN-->

<?php require "template-parts/layouts/footer.php"; ?>