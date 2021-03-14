<?php $data["title"] = "Lien he"; ?>
<?php $is_home = true; ?>
<?php $showkh = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="lienhe__section1 uk-section" uk-height-viewport="offset-bottom: true">
    <div class="uk-container">
        <ul class="uk-breadcrumb mb-15 mb-37-m">
            <li><a href="">Trang Chủ</a></li>
            <li><span>Liên Hệ</span></li>
        </ul>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-50-m uk-flex-middle" uk-grid>
            <div>
                <div class="uk-cover-container">
                    <iframe class="uk-position-cover" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7527.832917946231!2d105.94309880435293!3d20.993237798734853!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1615730769867!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <canvas width="1040" height="720"></canvas>
                </div>
            </div>
            <div>
                <div class="uk-text-center uk-margin home__boxCommon mb-40-m">
                    <h2 class="uk-h2 uk-text-uppercase home__boxCommon__title">ĐĂNG KÝ TƯ VẤN</h2>
                    <p class="uk-margin-remove home__boxCommon__desc">Hãy để Cooken Agency đồng hành cùng thành công của bạn</p>
                </div>
                <div class="uk-flex-center" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
                    <div class="uk-width-1-1@m">
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
            </div>
        </div>
    </div>
</div>

<?php require "template-parts/layouts/footer.php"; ?>