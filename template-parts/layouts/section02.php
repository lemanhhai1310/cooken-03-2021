<div class="home__section02 uk-section" uk-height-viewport="offset-bottom: true">
    <div class="uk-container uk-container-small">
        <div class="uk-text-center uk-margin home__boxCommon mb-40-m">
            <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">ĐĂNG KÝ TƯ VẤN</h2>
            <p class="uk-margin-remove home__boxCommon__desc">Hãy để Cooken Agency đồng hành cùng thành công của bạn</p>
        </div>
        <div class="uk-flex-center <?= ($showkh) ? 'mb-30 mb-60-m' : '' ?>" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
            <div class="uk-width-3-5@m">
                <form class="uk-grid-small uk-grid-20-m uk-margin mb-40-m" uk-grid>
                    <div class="uk-width-1-1">
                        <input class="uk-input uk-border-rounded home__section02__input" type="text" placeholder="Email">
                    </div>
                    <div class="uk-width-1-1">
                        <input class="uk-input uk-border-rounded home__section02__input" type="text" placeholder="Tên">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input uk-border-rounded home__section02__input" type="text" placeholder="Số điện thoại">
                    </div>
                    <div class="uk-width-1-2">
                        <input class="uk-input uk-border-rounded home__section02__input" type="text" placeholder="Lĩnh vực">
                    </div>
                    <div class="uk-width-1-1">
                        <input class="uk-input uk-border-rounded home__section02__input" type="text" placeholder="Ngân sách dự kiến">
                    </div>
                </form>
                <div class="uk-text-center">
                    <button type="button" class="animation home__section02__btn uk-button uk-button-secondary uk-border-pill">NHẬN ĐĂNG KÝ TƯ VẤN</button>
                </div>
            </div>
        </div>
        <?php if ($showkh): ?>
            <div class="uk-text-center uk-margin home__boxCommon mb-80-m">
                <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">ĐÁNH GIÁ CỦA  KHÁCH HÀNG</h2>
            </div>
            <div class="" uk-slider="finite: true;autoplay: true;">

                <div class="uk-position-relative uk-visible-toggle" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-3@m uk-flex-middle" uk-grid>
                        <?php
                        $data = array(
                            array(
                                'src' => 'images/lemanhhai_anhthe.jpg',
                            ),
                            array(
                                'src' => 'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-1/p200x200/124991051_10223379123683629_5212533844007278633_n.jpg?_nc_cat=110&ccb=1-3&_nc_sid=7206a8&_nc_ohc=5Bsqeug0aAUAX9Z1R9G&_nc_ht=scontent.fhan1-1.fna&tp=6&oh=84540be8f3087f3b0ca5828c55323205&oe=6070E5C0',
                            ),
                            array(
                                'src' => 'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-1/p200x200/107619296_673227766871034_2572365159958337456_o.jpg?_nc_cat=111&ccb=1-3&_nc_sid=7206a8&_nc_ohc=7uR_UCgT9T0AX_0YJAh&_nc_ht=scontent.fhan1-1.fna&tp=6&oh=814c56a09a2e2cd65c7f1067cddf4cde&oe=60704655',
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
                                <div class="uk-text-center mb-10 mb-22-m">
                                    <div class="uk-cover-container uk-border-circle uk-display-inline-block">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                        <canvas width="129" height="129"></canvas>
                                    </div>
                                </div>
                                <div class="uk-text-center">
                                    <div class="mb-10 mb-22-m">
                                        <h5 class="uk-h5 mb-11 home__section02__boxKh__name">Trần Ngọc</h5>
                                        <div class="home__section02__boxKh__txt">Kiến trúc sư</div>
                                    </div>
                                    <div class="home__section02__boxKh__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
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
        <?php endif; ?>
    </div>
</div>