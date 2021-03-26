<?php $data["title"] = "About Us"; ?>
<?php $is_home = true; ?>
<?php $showkh = false; ?>
<?php $x = true; ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Banner-->
<div class="home__section05 uk-section uk-background-norepeat uk-background-bottom-center" uk-height-viewport="offset-top: true;" data-src="images/Background1.png" uk-img>
    <div class="uk-container uk-container-small">
        <div class="uk-flex-middle uk-child-width-1-2@m uk-flex-right@m uk-position-relative" uk-grid uk-scrollspy="target: .animation; cls: uk-animation-slide-bottom-small; delay: 500; repeat: false;">
            <div class="" uk-toggle="cls: uk-position-center-left; mode: media; media: @m">
                <div class="home__section05__box1">
                    <h1 class="uk-h1 home__section05__box1__title uk-margin animation">About Us</h1>
                    <div class="home__section05__box1__box uk-margin">
                        <p class="home__section05__box1__desc animation">Giải pháp kinh doanh online hiệu quả - ổn định traffic,tối ưu chi phí</p>
                        <p class="home__section05__box1__desc animation">Cooken Media là Agency quảng cáo chính thức của Facebook tại Việt Nam. Với kinh nghiệm, khả năng và uy tín của mình,
                            chúng tôi đang giúp đỡ +700 khách hàng kiếm nhiều tiền hơn từ Facebook mỗi ngày</p>
                    </div>
                    <a href="" class="home__section05__box1__btn uk-border-rounded uk-button uk-button-secondary animation">Xem thêm</a>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="home__section05__box1__img animation" uk-scrollspy-class="uk-animation-scale-up">
                    <img src="images/about/Frame.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Banner-->


<div class="uk-section about__section1" uk-height-viewport="offset-bottom: true;">
    <div class="uk-container uk-container-small">
        <div class="uk-grid-small uk-grid-50-m uk-flex-middle uk-margin-medium mb-80-m" uk-grid>
            <div class="uk-width-auto@m">
                <div class="uk-text-center">
                    <img src="images/about/Frame1.png" alt="">
                </div>
            </div>
            <div class="uk-width-expand">
                <p class="home__section05__box1__desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <p class="home__section05__box1__desc">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here',</p>
            </div>
        </div>
        <div id="counter" class="uk-child-width-auto uk-flex-center uk-grid-small uk-grid-74-m uk-margin-medium" uk-grid uk-scrollspy="target: .home__section04__blog__box2; cls: uk-animation-fade; delay: 500">
            <?php
            $data = array(
                array(
                    'number' => '1.3B',
                    'title' => 'Daily impressions',
                ),
                array(
                    'number' => '34.4K',
                    'title' => 'Publishers',
                ),
                array(
                    'number' => '27.4K',
                    'title' => 'Advertisers',
                ),
                array(
                    'number' => '2.2M',
                    'title' => 'Campaigns (last month)',
                ),
            );
            foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-text-center home__section04__blog__box2">
                        <div class="home__section04__blog__box2__txt1"><span><?= $v['number'] ?></span></div>
                        <div class="home__section04__blog__box2__txt2"><?= $v['title'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="uk-grid-small uk-grid-50-m uk-flex-middle uk-margin-medium" uk-grid>
            <div class="uk-width-auto@m uk-flex-last@m">
                <div class="uk-text-center">
                    <img src="images/about/Frame2.png" alt="">
                </div>
            </div>
            <div class="uk-width-expand">
                <p class="home__section05__box1__desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia</p>
                <p class="home__section05__box1__desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words</p>
            </div>
        </div>
    </div>
</div>


<?php require "template-parts/layouts/footer.php"; ?>