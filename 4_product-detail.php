<?php

include __DIR__ . '/1_parts/0_config.php';

if (!isset($_GET['sid'])) {
    header('Location:4_productList.php');
    exit;
}

$sid = intval($_GET['sid']);
$sql = "SELECT * FROM products WHERE sid=$sid";
// 只有一筆就不要fetchAll，改用fetch
$row = $pdo->query($sql)->fetch();

if (empty($row)) {
    header('Location:4_productList.php');
    exit;
}

// echo json_encode($row, JSON_UNESCAPED_UNICODE);
// exit;

?>

<!-- 引head -->
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/4_product-detail.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- 內容開始 -->
<!-- <div class="bg"> -->
<section class="hero-section">
    <!-- 撐開nav bar -->
    <div class="space"></div>

    <div class="container">
        <div class="row"></div>
        <!-- 麵包屑 -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">活動列表</a></li>
                <li class="breadcrumb-item active" aria-current="page">展覽列</li>
            </ol>
        </nav>

        <!-- 活動開始 -->
        <div class="row justify-content-between">

            <!-- 活動圖片 -->
            <div class="intro-box">
                <div class="mainact">
                    <img src="imgs/event/event-lg/<?= $row['picture'] ?>.jpg" alt="">
                </div>
            </div>


            <!-- <div class="space-1"></div> -->

            <!-- <div class="date">
                <p class="date-year">2020</p>
                <p class="date-mon">10.10<br>10.13</p>
            </div> -->

            <!-- ---------報名卡片-------------- -->

            <!-- <div class="apply  apply-02 d-flex align-items-center justify-content-center">
                <div class="d-flex text-align: center">
                    <div class="apply-ticket">
                        <img class="ticket" src=" <?= WEB_ROOT ?>/imgs/products/ticket.svg">
                    </div>
                    <div class="apply-word d-flex align-items-center justify-content-center ml-3">
                        <p>立即<br>報名</p>
                    </div>
                </div>
            </div> -->

            <div class="space-1"></div>

        </div>

        <!-- <div class="row">
            <button class="label">
                <p>音樂</p>
            </button>
        </div> -->


        <div class="row justify-content-between">

            <div class="">
                <button class="label">
                    <!-- 活動標籤 -->
                    <p><?= $row['categories'] ?></p>
                </button>
                <div class="activity">
                    <!-- 活動名稱 -->

                    <h1 class="activity-title mt-3"><?= $row['event_name'] ?></h1>
                    <div class="activity-time d-flex">
                        <div class="mt-4 mr-3">
                            <i class="far fa-clock"></i>
                        </div>
                        <p class="activity-time-title mt-3">活動日期時間：<br><?= $row['start-datetime'] ?></p>
                    </div>

                    <!-- <div class="activity-date">
                        <p class="activity-place-title mt-3">活動地點 <?= $row['start-datetime'] ?></p>
                    </div> -->

                    <div class="activity-place d-flex">
                        <div class="mt-4 mr-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p class="activity-place-title mt-3">活動地點：<br><?= $row['address'] ?></p>
                    </div>

                    <div class="activity-place d-flex">
                        <div class="mt-3 mr-3">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <p class="mt-3"><?= $row['price'] ?></p>
                    </div>

                    <div class="hastag-place mt-3">
                        <a href="#"><?= $row['hastag'] ?></a>
                        <a href="#"><?= $row['hastag'] ?></a>
                    </div>

                </div>
            </div>


            <!-- ---------報名卡片-------------- -->
            <button class="apply apply-01 d-flex align-items-center justify-content-center">
                <div class="d-flex text-align: center">
                    <div class="apply-ticket">
                        <img class="ticket" src=" <?= WEB_ROOT ?>/imgs/products/ticket.svg">
                    </div>
                    <div class="apply-word d-flex align-items-center justify-content-center ml-3">
                        <p>立即<br>報名</p>
                    </div>
                </div>
            </button>
        </div>

        <div class="space-1"></div>

        <div class="row">
            <div class="tabs">
                <input id="all" type="radio" name="tab_item" checked>
                <label class="tab_item" for="all">活動介紹</label>
                <input id="programming" type="radio" name="tab_item">
                <label class="tab_item" for="programming">注意事項</label>
                <input id="design" type="radio" name="tab_item">
                <label class="tab_item" for="design">交通資訊</label>
                <div class="tab_content" id="all_content">
                    <p class="tab_content_title"><?= $row['event_name'] ?></p><br>

                    <p><?= $row['event_info'] ?></p>
                </div>
                <div class="tab_content" id="programming_content">
                    <p class="tab_content_title">報名注意事項：</p>
                    <br>
                    <p>
                        <p><?= $row['notice'] ?></p>
                </div>
                <div class="tab_content" id="design_content">
                    <div class="row">
                        <div class="tab_content_inside col-lg-6 col-md-6 col-sm-12 col-12">

                            <p class="tab_content_title">交通注意事項</p><br>

                            <p><?= $row['transportation'] ?></p>

                        </div>
                        <div class="tab_content_map col-lg-6 col-md-6 col-sm-12 col-12">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.7278194689356!2d121.52710701462303!3d25.04330934407309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a97b3c6a1163%3A0x3fa45bc5a29d8d19!2zMTAw5Y-w5YyX5biC5Lit5q2j5Y2A5YWr5b636Lev5LiA5q61MeiZnw!5e0!3m2!1szh-TW!2stw!4v1605945609834!5m2!1szh-TW!2stw" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="space-2"></div>

        <div class="row position-relative">
            <div class="tape-1">
                <img src=" <?= WEB_ROOT ?>/imgs/member/Section Title-3.svg">
            </div>

            <!-- ------留言板內容------ -->
            <div class="message-board col-12">
                <div class="mt-5 mb-5">

                    <div class="name-bar col-lg-10 col-sm-10 col-md-10">
                        <div class="col-lg-2 col-sm-10 col-md-10">
                            <div class="bar-circle">
                                <img class="w-100" src="../KunstHause/imgs/products/headshut-1.png" alt="" srcset="">
                            </div>
                        </div>

                        <div class="bar-title col-lg-2 col-md-10 col-sm-10">
                            <h2 class="mb-2">9m88</h2>
                            <p>2020/08/30</p>
                        </div>

                        <div class="bar-word-1 col-lg-6 col-md-10 col-sm-10">
                            <p>最高品質靜悄悄 蹲最低的跳最高！</p>
                        </div>
                    </div>

                    <div class="name-bar col-lg-10 col-sm-10 col-md-10">
                        <div class="col-lg-2 col-sm-10 col-md-10">
                            <div class="bar-circle">
                                <img class="w-100" src="../KunstHause/imgs/products/headshut-2.png" alt="" srcset="">
                            </div>
                        </div>


                        <div class="bar-title col-lg-2 col-md-10 col-sm-10">
                            <h2 class="mb-2">說愛你</h2>
                            <p>2020/09/20</p>
                        </div>

                        <div class="bar-word col-lg-6 col-md-10 col-sm-10">
                            <p>關於愛情 過去沒有異想的結局 那天起 卻顛覆了自己邏輯 我的懷疑 所有答案因你而明白 轉啊轉 就真的遇見 Mr.right！</p>
                        </div>
                    </div>

                    <div class="name-bar col-lg-10 col-sm-10 col-md-10">
                        <div class="col-lg-2 col-sm-10 col-md-10">
                            <div class="bar-circle">
                                <img class="w-100" src="../KunstHause/imgs/products/headshut-3.png" alt="" srcset="">
                            </div>
                        </div>

                        <div class="bar-title col-lg-2 col-md-10 col-sm-10">
                            <h2 class="mb-2">愛情恰恰</h2>
                            <p>2020/09/20</p>
                        </div>

                        <div class="bar-word col-lg-6 col-md-10 col-sm-10">
                            <p>想要和你 想要和你 來跳恰恰恰 毋知你是 毋知你是 走去叼位躲 啊飲落去飲落去 毋通漏氣 跳落去跳落去 大家歡喜！</p>
                        </div>
                    </div>
                </div>



            </div>


        </div>

        <div class="row">
            <div class="search-bar d-flex">
                <input type="text" placeholder="我來說幾句...(50個字為限)" class="col-10">
                <button class="search-bar-ser col-2 p-0 d-flex align-items-center justify-content-center text-white text-center">發表</button>
            </div>
        </div>

        <div class="space-1"></div>

    </div>
    </div>
</section>

<section>
    <div class="container-fluid">

        <div class="container">
            <div class="row justify-content-between">
                <div class="tape">
                    <img src=" <?= WEB_ROOT ?>/imgs/member/Group 888.svg">
                </div>

                <div class="tape-2">
                    <img src=" <?= WEB_ROOT ?>/imgs/member/alien-1.svg">
                </div>
            </div>
        </div>
    </div>

</section>

<!-- 麵包屑 -->
















<!-- 引入ＪＳ -->
<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 自己的ＪＳ -->
<script>
    // see more rubberBand animation
    $(window).scroll(function() {
        let scrollTop = $(window).scrollTop();
        let top = 820;
        let isＭobile = ($(window).width()) < 576;

        console.log('scrollTop:', scrollTop);
        console.log(isＭobile)
        if (isＭobile) {
            top = 1110;
        }

        if (scrollTop > top) {
            $('.tape-1').addClass('rubberBand');
        } else {
            $('.tape-1').removeClass('rubberBand');
        }


    });
</script>

<!-- footer -->
<?php include __DIR__ . '/1_parts/4_footer.php'; ?>