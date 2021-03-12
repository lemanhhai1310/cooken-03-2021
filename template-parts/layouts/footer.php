<!--LIÊN HỆ,HÌNH THỨC THANH TOÁN-->
<?php require "template-parts/layouts/section01.php"; ?>
<!--/LIÊN HỆ,HÌNH THỨC THANH TOÁN-->
<footer class="footer">
    <div class="uk-section-small footer__top uk-light">
        <div class="uk-container uk-container-small">
            <div class="uk-child-width-1-4@m uk-margin footer__top__grid1" uk-grid>
                <div>
                    <h5 class="uk-h5 footer__top__title">Về chúng tôi</h5>
                    <h5 class="uk-h5 footer__top__title">Dự án</h5>
                </div>
                <div>
                    <h5 class="uk-h5 footer__top__title">Dịch vụ</h5>
                    <ul class="uk-list footer__top__menu">
                        <li><a href="facebook-marketing.php">Facebook Marketing</a></li>
                        <li><a href="">Tiktok Marketing</a></li>
                        <li><a href="">Application Marketing</a></li>
                        <li><a href="">Media Solutions</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="uk-h5 footer__top__title">Liên hệ</h5>
                    <ul class="uk-list footer__top__menu">
                        <li><a href="">FAQ</a></li>
                        <li><a href="">Live Chat</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="uk-h5 footer__top__title">Chính sách</h5>
                    <ul class="uk-list footer__top__menu">
                        <li><a href="">Quy trình làm việc</a></li>
                        <li><a href="">Chính sách thanh toán</a></li>
                    </ul>
                    <div class="uk-child-width-auto uk-grid-small uk-grid-20-m uk-flex-middle" uk-grid>
                        <div>
                            <a href=""><img src="images/social/fb.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/social/telegram.png" alt=""></a>
                        </div>
                        <div>
                            <a href=""><img src="images/social/in.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__top__box1">
                <div>© 2021 Cassandera Capital LTD</div>
                <div>Giấy phép số 8723/GP-TTĐT - Sở thông tin và truyền thông TP. Hồ Chí Minh - Cấp ngày 02/02/2015. Ghi rõ nguồn khi bạn phát hành lại thông tin từ website này.</div>
            </div>
        </div>
    </div>
    <div class="uk-section-xsmall footer__bottom">
        <div class="uk-container uk-container-small">
            <div class="uk-child-width-auto uk-grid-small uk-grid-20-m uk-flex-center" uk-grid>
                <?php
                $data = array(
                    'Tư vấn dịch vụ',
                    'Dự án thành công',
                    'Gọi lại cho tôi',
                    'Khách hàng tiêu biểu',
                );
                foreach ($data as $k => $v): ?>
                <div>
                    <a href="" class="<?= ($k == 0) ? 'uk-active' : '' ?> footer__bottom__btn uk-button uk-button-secondary uk-border-rounded"><?= $v ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>
</section>
</body>
</html>