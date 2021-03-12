<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Cooken - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<section id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <div uk-sticky="top: 100vh;animation: uk-animation-slide-top;">
        <div class="header uk-background-default">
            <div class="uk-container uk-container-small uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo"><img src="images/Logo1.png" alt=""></a>
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li class="uk-active"><a href="#">Về chúng tôi</a></li>
                            <li>
                                <a href="#">Dịch vụ</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="facebook-marketing.php">Facebook Marketing</a></li>
                                        <li><a href="tiktok-marketing.php">Tiktok Marketing</a></li>
                                        <li><a href="application-marketing.php">Application Marketing</a></li>
                                        <li><a href="media-solution.php">Media Solutions</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Dự án</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>