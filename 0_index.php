<?php $title = 'KunstHaus | 不一樣的藝文售票平台'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入index的css -->
<link rel="stylesheet" href="./css/0_index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


<section class="hero-section position-relative">
    <div class="marquee-roll">
        <div id="marquee-main-lg" class="marquee-main marquee-main-lg">KUNSTHAUS</div>
        <div id="marquee-main-sm" class="marquee-main-sm">
            <p class="slogan text-center">不一樣的藝文售票平台</p>
        </div>
    </div>
    <img class="the-wall position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-deco-thewall.svg" alt="">
    <img class="god position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-deco-god.svg" alt="">
    <img class="taipei position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-deco-taipeiFineArt.svg" alt="">
    <div class="space"></div>
    <div class="d-flex text-center align-middle">
        <span class="scroll-down d-flex">
            <img class="eyes mx-4 scroll-hide" src="<?= WEB_ROOT ?>imgs/index/ic-eye.svg" alt="">
            <span class="scroll-hide">SCROLL DOWN</span>
            <img class="arrow mx-4 scroll-hide" src="<?= WEB_ROOT ?>imgs/index/ic-arrow-down.svg" alt="">
        </span>
    </div>
</section>

<?php include __DIR__ . '/1_parts/2_navbar-lg.php'; ?>


<section class="main grid-blue pb-5">
    <div class="container-fluid main-activities p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="#">
                        <img class="d-block w-100 mainact-1" src="<?= WEB_ROOT ?>imgs/event/event-lg/TPE-03.jpg" alt="First slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100 mainact-1" src="<?= WEB_ROOT ?>imgs/event/event-lg/TXG-08.jpg" alt="First slide">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100 mainact-1" src="<?= WEB_ROOT ?>imgs/event/event-lg/TXG-02.jpg" alt="First slide">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="container-fluid w-85 pb-5">
        <p class="section-title-l w-100 text-center cw m-100">活動列表</p>
        <div class="pickup-act row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-4">
                <div class="card">
                    <div class="card-top">
                        <div class="row m-0 align-items-center justify-content-center">
                            <div class="col-2 p-0 ">
                                <div class="circle float-right mr-2"></div>
                            </div>
                            <div class="col-8 p-0">
                                <a href="4_productList.php">
                                    <div class="cat-label-music text-center">
                                        <p class="section-title-s cw"></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 p-0">
                                <div class="circle ml-2"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-img pickup-1 img-480 position-relative">
                            <p class="event-intro position-absolute">大人的年齡，始終是個秘密...就像早上七點能吃到豬排起司丼飯一樣「sweet」，吃飽了還要跟著大寶寶的快樂腳一起「小朋友上樓梯」。睽違一年，終於......</p>
                        </div>
                    </a>
                    <div class="card-bottom pb-5">
                        <div class="act-title">
                            <div class="info">
                                <div class="d-flex act-title align-items-center justify-content-between">
                                    <a href="#">
                                        <p class="section-title-s m-3">小毛頭之亂2.0</p>
                                    </a>
                                    <i class="like far fa-heart fa-2x mr-3"></i>
                                </div>
                                <p class="act-time mb-3 ml-3">2020-12-19 20:00</p>
                                <div class="d-flex">
                                    <div class="col-7">
                                        <span class="hashtag">#最口愛</span>
                                        <span class="hashtag">#最年輕</span>
                                    </div>
                                    <p class="col-5 price text-right">$ 900</p>
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
                                <a href="4_productList.php">
                                    <div class="cat-label-ex text-center">
                                        <p class="section-title-s cw"></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 p-0">
                                <div class="circle ml-2"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-img pickup-2 img-480 position-relative">
                            <p class="event-intro position-absolute">延續以往療癒輕鬆的風格，同時訴說關於「宿命」及「循環」的概念。人類生活遵循時序的運行，追求物質生活的便利性，即使物換星移，有些循環仍是不......</p>
                        </div>
                    </a>
                    <div class="card-bottom pb-5">
                        <div class="act-title">
                            <div class="info">
                                <div class="d-flex act-title align-items-center justify-content-between">
                                    <a href="#">
                                        <p class="section-title-s m-3">CYCLE 野原邦彥個展</p>
                                    </a>
                                    <i class="like far fa-heart fa-2x mr-3"></i>
                                </div>
                                <p class="act-time mb-3 ml-3">2020-12-20 ~ 02-15</p>
                                <div class="d-flex">
                                    <div class="col-7 hashtage">
                                        <span class="hashtag">#野原邦彥</span>
                                        <span class="hashtag">#雕塑</span>
                                    </div>
                                    <p class="col-5 price text-right">免費活動</p>
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
                                <a href="4_productList.php">
                                    <div class="cat-label-th text-center">
                                        <p class="section-title-s cw"></p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-2 p-0">
                                <div class="circle ml-2"></div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="card-img pickup-3 img-480 position-relative">
                            <p class="event-intro position-absolute">本場音樂會以《炙熱》為名，挑選了充滿突破性的貝多芬《弦樂四重奏作品18之4》、充滿奧地利貴族優雅風格的胡戈《義大利小夜曲》，回歸復古再創出自......</p>
                        </div>
                    </a>
                    <div class="card-bottom pb-5">
                        <div class="act-title">
                            <div class="info">
                                <div class="d-flex act-title align-items-center justify-content-between">
                                    <a href="#">
                                        <p class="section-title-s m-3">弦沐絃樂四重奏2020</p>
                                    </a>
                                    <i class="like far fa-heart fa-2x mr-3"></i>
                                </div>
                                <p class="act-time mb-3 ml-3">2020-01-15 ~ 01-16</p>
                                <div class="d-flex">
                                    <div class="col-7 hashtage">
                                        <span class="hashtag">#弦樂</span>
                                        <span class="hashtag">#四重奏</span>
                                    </div>
                                    <p class="col-5 price text-right">$ 500</p>
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
        <a href="4_productList.php">
            <p class="see-more">我全都要</p>
        </a>
    </div>
</section>


<section id="about-us" class="about position-relative">
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
            <div class="brand-intro">
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


<section class="blog grid-white py-5">
    <div class="container-fluid position-relative">
        <img class="tiger position-absolute" src="<?= WEB_ROOT ?>imgs/index/blog-deco-03.png" alt="">
        <div class="row mt-5">
            <div class="col-lg-1 binding-ring"></div>
            <div class="col-lg-3 col-md-12">
                <a href="0_blog.php">
                    <div class="section-title">新鮮事。</div>
                </a>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="article-layout w-100 position-relative">
                    <div class="post-tape position-absolute">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-tape-blog.svg" alt="">
                    </div>
                    <a href="#" class="">
                        <div class="article-img cover-1">
                            <div class="img-mask">
                                <div class="inner-box">
                                    <h3 class="article-title">白雪世界裡的生命力</h3>
                                    <div class="line w-100"></div>
                                    <p class="article-subtitle">每個凜冽嚴冬中的堅毅臉龐</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="article-layout w-100 position-relative">
                    <div class="post-tape position-absolute">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-tape-blog.svg" alt="">
                    </div>
                    <a href="#" class="">
                        <div class="article-img cover-2">
                            <div class="img-mask">
                                <div class="inner-box">
                                    <h3 class="article-title">義大利人做繪本、玩繪本、讀繪本（上）</h3>
                                    <div class="line w-100"></div>
                                    <p class="article-subtitle">讀字讀圖，讀字裡行間的言外之意</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 graffiti">
            </div>
        </div>
        <div class="space"></div>
        <div class="row mt-5">
            <div class="col-lg-1 binding-ring"></div>
            <div class="col-lg-3 col-md-12">
                <div class="article-layout w-100 position-relative">
                    <div class="post-tape position-absolute">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-tape-blog.svg" alt="">
                    </div>
                    <a href="#" class="">
                        <div class="article-img cover-3">
                            <div class="img-mask">
                                <div class="inner-box">
                                    <h3 class="article-title">If Anything Happens I Love You</h3>
                                    <div class="line w-100"></div>
                                    <p class="article-subtitle">刻畫悲劇後的思念與哀傷</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="article-layout w-100 position-relative">
                    <div class="post-tape position-absolute">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-tape-blog.svg" alt="">
                    </div>
                    <a href="#" class="">
                        <div class="article-img cover-4">
                            <div class="img-mask">
                                <div class="inner-box">
                                    <h3 class="article-title">AI街頭藝術家——GANksy</h3>
                                    <div class="line w-100"></div>
                                    <p class="article-subtitle">模仿Banksy的百幅塗鴉作品並低價出售</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="article-layout w-100 position-relative">
                    <div class="post-tape position-absolute">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-tape-blog.svg" alt="">
                    </div>
                    <a href="#" class="">
                        <div class="article-img cover-5">
                            <div class="img-mask">
                                <div class="inner-box">
                                    <h3 class="article-title">梅澤捨次郎的「嘉義市立美術館」</h3>
                                    <div class="line w-100"></div>
                                    <p class="article-subtitle">在台灣留下無數典雅端莊的古蹟建築</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 graffiti">
            </div>
        </div>
    </div>
</section>


<div id="fixed-button" class="fixed-button position-fixed">
    <img class="cicle position-relative" src="<?= WEB_ROOT ?>imgs/index/backToTop.svg" alt="">
    <img class="text position-absolute" src="<?= WEB_ROOT ?>imgs/index/backToTopText.svg" alt="">
</div>


<section class="b2b">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1 col-md-12">
                <div class="purple-marquee "></div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="content d-flex">
                    <div class="section-title">
                        <img src="<?= WEB_ROOT ?>imgs/index/b2b-section-title.svg" alt="">
                    </div>
                    <p class="para-title">讓生活因 <strong>活動</strong> 而生動！</p>
                    <p class="para">
                        作為一個自助式活動上架平台，任何人都可以輕鬆的在這裡建立帳號、經營活動，營造自己的活動社群，但對於剛踏入KunstHaus的主辦來說，往往不知道從何下手，甚麼是主辦單位身分認證？甚麼是活動審核？往往搞得一個頭兩個大。
                        <br>
                        <br>
                        我們不希望讓你覺得「辦活動」似乎是件充滿繁瑣行政程序又麻煩的事情，在對帳收單上耗盡寶貴的時間，我們希望你將心力花在更重要的地方，比如活動內容的發想、創意的揮灑，和如何辦理更有趣好玩的活動。
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 p-0">
                <a href="3_B2B-index.php" class="be-partner position-relative">
                    <img class="sign1 position-absolute" src="<?= WEB_ROOT ?>imgs/index/ic-sign-01.svg" alt="">
                    <img class="sign2" src="<?= WEB_ROOT ?>imgs/index/ic-sign-02.svg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>




<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>
    // marquee-main-lg direction
    $(function() {
        let isScrolling = null;
        let direction = "-100%";
        let lastDirection = direction;
        const marquee = $("#marquee-main-lg");
        marquee.css({
            "overflow": "hidden",
            "width": "100%"
        });

        marquee.wrapInner("<span>");
        marquee.find("span").css({
            "width": "50%",
            "display": "inline-block",
            "text-align": "center"
        });
        marquee.append(marquee.find("span").clone());

        marquee.wrapInner("<div id='marquee-direction'>");
        marquee.find("div").css("width", "200%");

        const reset = function() {
            $(this).css("margin-left", "0%");
            $(this).animate({
                "margin-left": direction
            }, 10000, "linear", reset);
        };

        var lastScrollTop = 0;

        window.addEventListener("scroll", function() {

            let st = window.pageYOffset || document.documentElement.scrollTop;
            // console.log("st:", st)
            console.log("lastScrollTop:", lastScrollTop)

            if (st > lastScrollTop) {
                direction = "-100%";
            } else {
                direction = "100%";
            }

            // Clear our timeout throughout the scroll
            window.clearTimeout(isScrolling);

            // Set a timeout to run after scrolling ends
            isScrolling = setTimeout(function() {

                // Run the callback
                console.log("Scrolling has stopped.");
                if (lastDirection !== direction) {
                    $("#marquee-direction").stop();
                    marqueeAnimate(direction);
                }
            }, 66);

            lastScrollTop = st <= 0 ? 0 : st;
            lastDirection = direction;
        }, false);

        function marqueeAnimate(direction) {
            $("#marquee-direction").animate({
                "margin-left": direction
            }, 10000, 'linear', reset);
        }

        reset.call(marquee.find("div"));

    });

    // card heart animation
    $('.like').on('click', function() {
        // console.log('like');
        $(this).toggleClass('liked');
    });

    // see more rubberBand animation
    $(window).scroll(function() {
        let scrollTop = $(window).scrollTop();
        // console.log('scrollTop:', scrollTop);
        if (scrollTop > 2015) {
            $('.see-more').addClass('rubberBand');
        } else {
            $('.see-more').removeClass('rubberBand');
        }

        if (scrollTop > 2500) {
            $('#fixed-button').css('opacity', '1');
        } else {
            $('#fixed-button').css('opacity', '0');
        }
    });

    // article select animation
    $('.img-mask').on('mouseover', function() {
        $(this).addClass('darker-mask');
        $('.img-mask').not(this).addClass('lighter-mask');
    });
    $('.img-mask').on('mouseleave', function() {
        $(this).removeClass('darker-mask');
        $('.img-mask').not(this).removeClass('lighter-mask');

    });


    // fixed button animation
    $('#fixed-button').on('click', function() {
        // console.log('hi');
        $('html,body').animate({
            scrollTop: 0
        }, 1500);
        $('.text').addClass('spin');
    });
</script>


<?php include __DIR__ . '/1_parts/4_footer-lg.php'; ?>