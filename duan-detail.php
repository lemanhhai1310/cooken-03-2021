<?php $data["title"] = "Du an detail"; ?>
<?php $is_home = true; ?>
<?php $showkh = false; ?>
<?php require "template-parts/layouts/header.php"; ?>

<div class="uk-section blog-detail__section1 uk-background-norepeat uk-background-top-center" data-src="images/blog-detail/anhchim1.png" uk-img>
    <div class="uk-container uk-container-small mb-15 mb-62-m">
        <ul class="uk-breadcrumb mb-15 mb-60-m">
            <li><a href="">Trang Chủ</a></li>
            <li><a href="">Dự Án</a></li>
            <li><span>Tên Dự Án</span></li>
        </ul>
        <h1 class="uk-h1 uk-text-center blog-detail__title uk-margin-remove">into electronic typesetting testing: type lorem isumm perparre </h1>
    </div>
    <div class="uk-container mb-59-m mb-20">
        <div class="uk-child-width-auto@s uk-flex-middle uk-grid-10 uk-grid-26-m mb-20 mb-47-m" uk-grid>
            <div class="uk-width-auto">
                <img src="images/icon/action/date_range_24px.png" alt="">
                <span class="duan-detail__box1__txt uk-text-middle">23/10/2020</span>
            </div>
            <div class="uk-width-auto">
                <img src="images/icon/action/perm_identity_24px.png" alt="">
                <span class="duan-detail__box1__txt uk-text-middle">Bro Đào</span>
            </div>
            <div class="uk-width-auto">
                <img src="images/icon/action/visibility_24px.png" alt="">
                <span class="duan-detail__box1__txt uk-text-middle">1250</span>
            </div>
            <div>
                <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
            </div>
        </div>
        <div class="uk-grid-small uk-grid-38-m mb-20 mb-60-m" uk-grid>
            <div class="uk-width-expand">
                <article class="uk-article blog-detail__article">
                    <figure>
                        <img src="https://znews-photo.zadn.vn/w660/Uploaded/seaekt/2021_03_14/ap.jpeg" alt="">
                        <figcaption>Đường phố thủ đô Paris, Pháp, trong thời đại dịch. Ảnh: US News.</figcaption>
                    </figure>
                    <p>Chỉ trong ngày 12/3, giới chức Italy ghi nhận thêm 27.000 bệnh nhân Covid-19 và 389 trường hợp tử vong. Thủ tướng Mario Draghi tuyên bố: “Hơn một năm trải qua cuộc khủng hoảng sức khỏe, chúng ta lại phải đối mặt với một làn sóng lây nhiễm mới”.</p>
                    <p>“Ký ức về thảm kịch năm ngoái vẫn còn đó. Chúng tôi sẽ làm mọi thứ để ngăn điều này lặp lại”, Guardian dẫn lời ông Draghi.</p>
                    <p>Từ ngày 15/3, phần lớn địa phương ở Italy sẽ phong tỏa nghiêm ngặt và người dân chỉ được ra ngoài khi có nhu cầu thiết yếu. Tại đây, hầu hết cửa hàng, quán bar và nhà hàng cũng phải đóng cửa.</p>
                </article>
            </div>
            <!--Aside-->
            <div class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-card-body uk-margin duan-detail__box2">
                    <h5 class="uk-h5 duan-detail__box4__title">THÔNG TIN DỰ ÁN</h5>
                    <div>
                        <div class="duan-detail__box4__item">
                            <div class="duan-detail__box4__txt1">Khách hàng:</div>
                            <div class="duan-detail__box4__txt2">Nguyễn Văn A</div>
                        </div>
                        <div class="duan-detail__box4__item">
                            <div class="duan-detail__box4__txt1">Khu vực:</div>
                            <div class="duan-detail__box4__txt2">Hà Nội</div>
                        </div>
                        <div class="duan-detail__box4__item">
                            <div class="duan-detail__box4__txt1">Lĩnh Vực</div>
                            <div class="duan-detail__box4__txt2">Mỹ Phẩm</div>
                        </div>
                        <div class="duan-detail__box4__item">
                            <div class="duan-detail__box4__txt1">Dịch Vụ Cung Cấp</div>
                            <div class="duan-detail__box4__txt2">Tiktok Marketing, Tiktok ADS, Tiktok alalytics</div>
                        </div>
                    </div>
                </div>
                <div class="uk-card uk-card-default uk-card-body uk-margin duan-detail__box2">
                    <form>
                        <fieldset class="uk-fieldset">
                            <legend class="uk-legend duan-detail__box3__txt">Liên Hệ Ngay Để Được Tư Vấn</legend>
                            <div class="uk-margin">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Bạn muốn xây kế hoạch gì ?</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="uk-button duan-detail__box3__select uk-button-default uk-width-1-1" type="button" tabindex="-1">
                                        <span class="line-clamp-1"></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input duan-detail__box3__input" type="text" placeholder="Họ và tên">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input duan-detail__box3__input" type="text" placeholder="Số điện thoại">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input duan-detail__box3__input" type="text" placeholder="Email">
                            </div>
                            <div class="uk-margin">
                                <textarea class="uk-textarea duan-detail__box3__input" rows="5" placeholder="Ghi chú"></textarea>
                            </div>
                            <div class="uk-text-center">
                                <button type="button" class="uk-button duan-detail__box3__btn uk-button-secondary">gửi</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <!--/Aside-->
        </div>
        <div class="uk-flex-middle mb-20 mb-52-m" uk-grid>
            <div class="uk-width-expand">
                <h3 class="uk-h3 uk-margin-remove duan-detail__box5__title">Đánh Giá Bài Viết</h3>
            </div>
            <div class="uk-width-auto">
                <button type="button" class="uk-button duan-detail__box5__btn uk-button-secondary uk-border-pill">Đánh Giá Ngay</button>
            </div>
        </div>
        <div class="uk-card uk-card-body duan-detail__box6 mb-20 mb-58-m">
            <div class="uk-grid-divider uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-1-4@m">
                    <div class="uk-text-center">
                        <div class="duan-detail__box6__left__txt1">4,5</div>
                        <div class="duan-detail__box6__left__rate">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div class="duan-detail__box6__left__txt2">303  đánh giá</div>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-grid-10 uk-grid-15-m" uk-grid>
                        <?php for ($i=0;$i<=4;$i++): ?>
                        <div class="uk-width-1-1">
                            <div class="uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="duan-detail__box6__right__txt1"><?= 5 - $i ?></div>
                                </div>
                                <div class="uk-width-expand">
                                    <?php $v = (rand(10,100)); ?>
                                    <progress class="uk-progress duan-detail__box6__right__progress" value="<?= $v ?>" max="100"></progress>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="duan-detail__box6__right__txt2 uk-text-right"><?= $v ?>%</div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <h4 class="uk-h4 mb-20 mb-42-m duan-detail__box7__title">56 Bình Luận</h4>
        <div class="uk-card duan-detail__box7 mb-20 mb-60-m">
            <textarea class="uk-textarea" rows="4" placeholder="Type your topic here"></textarea>
            <div class="uk-card-body uk-padding-small">
                <div class="uk-grid-small" uk-grid>
                    <div class="uk-width-auto@s">
                        <div uk-form-custom>
                            <input type="file">
                            <button type="button" class="uk-button uk-button-default duan-detail__box7__btn1"><span uk-icon="icon: camera; ratio: 1"></span></button>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <input class="uk-input duan-detail__box7__input" type="text" placeholder="Tên (bắt buộc)">
                    </div>
                    <div class="uk-width-expand">
                        <input class="uk-input duan-detail__box7__input" type="text" placeholder="Email (bắt buộc)">
                    </div>
                    <div class="uk-width-auto@s">
                        <button type="button" class="uk-button uk-button-secondary duan-detail__box7__btnSend">Gửi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-60-m mb-20 duan-detail__box8">
            <?php
            $data = array(
                array(
                    'src' => 'images/lemanhhai_anhthe.jpg',
                    'title' => 'Tomothy Flores',
                    'txt' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard",
                    'rep' => true,
                ),
                array(
                    'src' => 'https://scontent.fhan1-1.fna.fbcdn.net/v/t1.0-9/106811730_2570923246556503_4125828132645434650_n.jpg?_nc_cat=100&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=rkYOHF45k2wAX-CqIyn&_nc_ht=scontent.fhan1-1.fna&oh=7cc9c8818417912d8d24db0e89453dfc&oe=60752B19',
                    'title' => 'Tomothy Flores',
                    'txt' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard",
                    'rep' => false,
                ),
            );
            foreach ($data as $k => $v): ?>
            <div class="duan-detail__box8__item">
                <div class="uk-grid-small uk-grid-26-m" uk-grid>
                    <div class="uk-width-auto">
                        <div class="uk-cover-container uk-border-circle">
                            <img src="<?= $v['src'] ?>" alt="" uk-cover>
                            <canvas width="40" height="40"></canvas>
                        </div>
                    </div>
                    <div class="uk-width-expand">
                        <div class="mb-7">
                            <div class="duan-detail__box8__title"><?= $v['title'] ?></div>
                            <div class="duan-detail__box8__desc"><?= $v['txt'] ?></div>
                        </div>
                        <div class="uk-grid-small uk-child-width-auto" uk-grid>
                            <div>
                                <a href="" class="duan-detail__box8__link">Trả lời</a>
                            </div>
                            <div>
                                <img src="images/item/discuss/24px/like.png" alt="">
                                <a href="" class="duan-detail__box8__link">Thích</a>
                            </div>
                            <div>
                                <span uk-icon="icon: calendar; ratio: 1"></span>
                                <span class="duan-detail__box8__txt1">10/9/2019  10:46</span>
                            </div>
                        </div>
                        <?php if ($v['rep']): ?>
                        <div class="duan-detail__box8__rep">
                            <div class="uk-grid-small uk-grid-26-m" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="uk-cover-container uk-border-circle">
                                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                                        <canvas width="40" height="40"></canvas>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="mb-7">
                                        <div class="duan-detail__box8__title"><?= $v['title'] ?></div>
                                        <div class="duan-detail__box8__desc"><?= $v['txt'] ?></div>
                                    </div>
                                    <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                        <div>
                                            <a href="" class="duan-detail__box8__link">Trả lời</a>
                                        </div>
                                        <div>
                                            <img src="images/item/discuss/24px/like.png" alt="">
                                            <a href="" class="duan-detail__box8__link">Hài lòng</a>
                                        </div>
                                        <div>
                                            <img src="images/item/discuss/24px/dislike.png" alt="">
                                            <a href="" class="duan-detail__box8__link">Không hài lòng</a>
                                        </div>
                                        <div>
                                            <span uk-icon="icon: calendar; ratio: 1"></span>
                                            <span class="duan-detail__box8__txt1">10/9/2019  10:46</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
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
        <hr>
        <div class="duan-detail__box9" uk-grid>
            <div>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="" data-numposts="5"></div>
            </div>
        </div>
    </div>
    <div class="uk-container uk-container-small mb-15 mb-33-m">
        <h2 class="uk-h2 blog-detail__title1 uk-margin-remove">Bài Viết Liên Quan</h2>
    </div>
    <div class="uk-container">
        <div class="uk-child-width-1-3@m mb-20 mb-40-m uk-grid-small uk-grid-20-m blog__grid" uk-grid>
            <?php
            function to_slug($str) {
                $str = trim(mb_strtolower($str));
                $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
                $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
                $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
                $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
                $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
                $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
                $str = preg_replace('/(đ)/', 'd', $str);
                $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
                $str = preg_replace('/([\s]+)/', '-', $str);
                return $str;
            }
            $data = array(
                array(
                    'src' => 'images/blog/img1.png',
                    'txt1' => 'Bài Viết Mới',
                ),
                array(
                    'src' => 'images/blog/img2.png',
                    'txt1' => 'Tư Vấn',
                ),
                array(
                    'src' => 'images/blog/img3.png',
                    'txt1' => 'Tuyển Dụng',
                ),
            );
            foreach ($data as $k => $v): ?>
                <div>
                    <div class="uk-cover-container blog__box1__bg">
                        <img src="<?= $v['src'] ?>" alt="" uk-cover>
                        <canvas width="720" height="582"></canvas>
                        <div class="uk-display-inline-block uk-position-bottom-right blog__box1__catalog <?= to_slug($v['txt1']) ?>"><span><?= $v['txt1'] ?></span></div>
                    </div>
                    <div>
                        <div class="uk-flex-middle uk-child-width-auto uk-flex-between uk-grid-collapse mb-10 mb-20-m" uk-grid>
                            <div>
                                <div class="uk-child-width-auto uk-flex-middle uk-grid-12" uk-grid>
                                    <div>
                                        <div class="uk-cover-container uk-border-circle">
                                            <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                            <canvas width="25" height="25"></canvas>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="blog__box1__name">Cooker ADM</span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <ul class="uk-child-width-auto uk-grid-27 blog__subnav" uk-grid>
                                    <li><span class="blog__box1__name">13 ngày trước</span></li>
                                    <li><span class="blog__box1__name">1257 views</span></li>
                                </ul>
                            </div>
                        </div>
                        <h5 class="uk-h5 blog__box1__title uk-margin-remove"><a href="blog-detail.php">Lorem Ipsum is simply dummy text of the printi and typesetting industry. Lorem Ipsum has been</a></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<!--ĐĂNG KÝ TƯ VẤN-->
<?php require "template-parts/layouts/section02.php"; ?>
<!--/ĐĂNG KÝ TƯ VẤN-->

<?php require "template-parts/layouts/footer.php"; ?>