<?php $title = 'KunstHaus | 不一樣的藝文售票平台'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入index的css -->
<link rel="stylesheet" href="./css/0_index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


<section class="hero-section position-relative">
    <div class="marquee-roll">
        <marquee class="marquee-main-lg" style="--tw:40vw; --ad:2.5s;" scrollamount=12>
            <span class="brand">KUNSTHAUS</span>
            <span class="brand">KUNSTHAUS</span>
            <span class="brand">KUNSTHAUS</span>
            <span class="brand">KUNSTHAUS</span>
            <span class="brand">KUNSTHAUS</span>
            <span class="brand">KUNSTHAUS</span>
        </marquee>
        <marquee class="marquee-main-sm" style="--tw:40vw; --ad:2.5s;" scrollamount=10>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
            <span class="slogan">不一樣的藝文售票平台</span>
        </marquee>
    </div>
    <img class="the-wall position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-deco-thewall.svg" alt="">
    <img class="god position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-deco-god.svg" alt="">
    <img class="taipei position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-deco-taipeiFineArt.svg" alt="">
    <div class="space"></div>
    <div class="d-flex text-center align-middle">
        <span class="scroll-down d-flex">
        <img class="mx-4" src="<?= WEB_ROOT ?>imgs/index/ic-eye.svg" alt="">
        <span>SCROLL DOWN</span>
        <img class="arrow mx-4" src="<?= WEB_ROOT ?>imgs/index/ic-arrow-down.svg" alt="">
        </span>
    </div>
</section>

<?php include __DIR__ . '/1_parts/2_navbar-lg.php'; ?>

<section class="main grid-blue pb-5">
    <div class="container-fluid main-activities p-0">
        <div class="mainact-1 w-100 img-800"></div>
        <p class="section-title-l w-100 text-center cw m-100">活動列表</p>
    </div>
    <div class="container-fluid w-85 pb-5">
        <div class="pickup-act row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-4">
                <div class="card">
                    <div class="card-top">
                        <div class="row m-0 align-items-center justify-content-center">
                            <div class="col-2 p-0 ">
                                <div class="circle float-right mr-2"></div>
                            </div>
                            <div class="col-8 p-0">
                                <a href="#">
                                    <div class="cat-label text-center">
                                        <p class="section-title-s cw">音樂</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 p-0">
                                <div class="circle ml-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-img pickup-1 img-480"></div>
                    <div class="card-bottom pb-5">
                        <div class="act-title">
                            <div class="info">
                                <div class="d-flex act-title align-items-center justify-content-between">
                                    <p class="section-title-s m-3">2020簡單生活節</p>
                                    <i class="far fa-heart fa-2x mr-3"></i>
                                </div>
                                <p class="act-time mb-3 ml-3">2020-12-12 ~ 12-13</p>
                                <div class="d-flex">
                                    <div class="col-7">
                                        <span class="hashtag">#簡單生活節</span>
                                        <span class="hashtag">#文青聚會</span>
                                    </div>
                                    <p class="col-5 price text-right">NT$2000</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ticket-punches row justify-content-around">
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-4">
                <div class="card">
                    <div class="card-top">
                        <div class="row m-0 align-items-center justify-content-center">
                            <div class="col-2 p-0 ">
                                <div class="circle float-right mr-2"></div>
                            </div>
                            <div class="col-8 p-0">
                                <a href="#">
                                    <div class="cat-label text-center">
                                        <p class="section-title-s cw">展覽</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 p-0">
                                <div class="circle ml-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-img pickup-2 img-480"></div>
                    <div class="card-bottom pb-5">
                        <div class="act-title">
                            <div class="info">
                                <div class="d-flex act-title align-items-center justify-content-between">
                                    <p class="section-title-s m-3">2020簡單生活節</p>
                                    <i class="far fa-heart fa-2x mr-3"></i>
                                </div>
                                <p class="act-time mb-3 ml-3">2020-12-12 ~ 12-13</p>
                                <div class="d-flex">
                                    <div class="col-7 hashtage">
                                        <span class="hashtag">#簡單生活節</span>
                                        <span class="hashtag">#文青聚會</span>
                                    </div>
                                    <p class="col-5 price text-right">NT$2000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-punches row justify-content-around">
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-4">
                <div class="card">
                    <div class="card-top">
                        <div class="row m-0 align-items-center justify-content-center">
                            <div class="col-2 p-0 ">
                                <div class="circle float-right mr-2"></div>
                            </div>
                            <div class="col-8 p-0">
                                <a href="#">
                                    <div class="cat-label text-center">
                                        <p class="section-title-s cw">戲劇</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 p-0">
                                <div class="circle ml-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-img pickup-3 img-480"></div>
                    <div class="card-bottom pb-5">
                        <div class="act-title">
                            <div class="info">
                                <div class="d-flex act-title align-items-center justify-content-between">
                                    <p class="section-title-s m-3">2020簡單生活節</p>
                                    <i class="far fa-heart fa-2x mr-3"></i>
                                </div>
                                <p class="act-time mb-3 ml-3">2020-12-12 ~ 12-13</p>
                                <div class="d-flex">
                                    <div class="col-7 hashtage">
                                        <span class="hashtag">#簡單生活節</span>
                                        <span class="hashtag">#文青聚會</span>
                                    </div>
                                    <p class="col-5 price text-right">NT$2000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ticket-punches row justify-content-around">
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                        <span class="punch"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center p-0 my-5">
        <a href="#">
            <p class="see-more">我全都要</p>
        </a>
    </div>
</section>

<section class="about position-relative">
    <div class="fluid-container">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 marquee-box p-0">
                <div class="bubble position-absolute">
                    <img src="<?= WEB_ROOT ?>imgs/index/landing_03.png" alt="">
                </div>
                <marquee class="blue-marquee">ABOUT US ABOUT US ABOUT US</marquee>
                <marquee class="yellow-marquee">ABOUT US ABOUT US ABOUT US</marquee>
                <marquee class="blue-marquee">ABOUT US ABOUT US ABOUT US</marquee>
                <marquee class="yellow-marquee">ABOUT US ABOUT US ABOUT US</marquee>
                <marquee class="blue-marquee">ABOUT US ABOUT US ABOUT US</marquee>
                <marquee class="yellow-marquee">ABOUT US ABOUT US ABOUT US</marquee>
            </div>
            <div class="brand-intro position-absolute">
                <span class="paper about-slogan">藝文活動？感覺就不好玩</span>
                <br>
                <span class="paper sub-slogan">我們是KunstHaus</span>
                <br>
                <span class="paper sub-slogan">比小眾更小眾的售票平台</span>
                <br>
                <span class="paper sub-slogan">用一些很酷的元素</span>
                <br>
                <span class="paper sub-slogan">帶你進入又酷又好玩的藝文世界</span>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 intro-bg p-0"></div>
        </div>
    </div>
</section>






<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>
    // card heart animation

    // see more rubberBand animation
    $(window).scroll(function() {
        let scrollTop = $(window).scrollTop();
        console.log('scrollTop:', scrollTop);
        if (scrollTop > 2015) {
            $('.see-more').addClass('rubberBand');
        } else {
            $('.see-more').removeClass('rubberBand');
        }
    });
</script>


<?php include __DIR__ . '/1_parts/4_footer-lg.php'; ?>