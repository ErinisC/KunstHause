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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">活動列表</a></li>
                <li class="breadcrumb-item active" aria-current="page">展覽列</li>
            </ol>
        </nav>

        <div class="row justify-content-between">
            <div class="mainact">
            </div>

            <div class="space-1"></div>

            <div class="date">
                <p class="date-year">2020</p>
                <p class="date-mon">10.10<br>10.13</p>
            </div>

            <!-- ---------報名卡片-------------- -->

            <div class="apply  apply-02 d-flex align-items-center justify-content-center">
                <div class="d-flex text-align: center">
                    <div class="apply-ticket">
                        <img class="ticket" src=" <?= WEB_ROOT ?>/imgs/products/ticket.svg">
                    </div>
                    <div class="apply-word d-flex align-items-center justify-content-center ml-3">
                        <p>立即<br>報名</p>
                    </div>
                </div>
            </div>

            <div class="space-1"></div>

        </div>

        <div class="row">
            <button class="label">
                <p>音樂</p>
            </button>
        </div>


        <div class="row justify-content-between">
            <div class="activity">
                <h1 class="activity-title mt-3">AUDIO ARCHITECTURE：聲音的建築展</h1>
                <div class="activity-time d-flex">
                    <p class="activity-time-title mt-3">活動時間 17:30-20:30</p>
                </div>

                <div class="activity-place">
                    <p class="activity-place-title mt-3">活動地點 台灣台北市中正區八德路一段117號</p>
                </div>

                <div class="mt-3">
                    <a href="">#Covid-free</a>
                    <a href="">#INCEPTION</a>
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
                    <p class="tab_content_title">AUDIO ARCHITECTURE：聲音的建築展 in 台北</p><br>

                    <p>25 公尺巨幅投影打造沉浸式劇場、日本東京票房保證、吸引近10萬人觀賞，一場「 用眼睛聽音樂 」的超感官體驗！ 東京六本木 21_21 DESIGN SIGHT 繼 2016 年「 單位展 」再度登台，如果你曾被單位展打動，就絕對不能錯過！帶來超越理性與感官、聲音視覺化的設計大作。 ■ 超感官體驗｜25 公尺巨幅投影打造沉浸式劇場 ■ 聲音視覺化｜9 位日本頂尖視覺藝術家參展創作 ■ 知名音樂人作曲｜小山田圭吾創作展覽同名樂 ■ 不必遠赴日本｜與設計最高殿堂距離最近的一次。</p>
                </div>
                <div class="tab_content" id="programming_content">
                    <p class="tab_content_title">報名注意事項：</p><br>

                    <p>報名繳費後因故不能參加活動而需取消時，酌收10％手續費 ; 開課後恕不退費，有任何問題請洽課程聯絡人。其他未盡周全事宜，請依主辦單位公告及場地規則為依據。主辦單位保留課程內容更動權利。請學員務必了解上課意願及個人時間後才報名。</p>
                </div>
                <div class="tab_content" id="design_content">
                    <div class="row">
                        <div class="tab_content_inside col-lg-6 col-md-6 col-sm-12 col-12">

                            <p class="tab_content_title">交通注意事項</p><br>

                            <p>報名繳費後因故不能參加活動而需取消時，酌收10％手續費 ; 開課後恕不退費，有任何問題請洽課程聯絡人。其他未盡周全事宜，請依主辦單位公告及場地規則為依據。主辦單位保留課程內容更動權利。請學員務必了解上課意願及個人時間後才報名。</p>

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
            <div class="message-board">
                <div class="name-bar d-flex">
                    <div class="bar-circle"></div>

                    <div class="bar-title">
                        <h2>Johnny</h2>
                        <p>2020/09/20</p>
                    </div>

                    <div class="bar-word">
                        <p>金假讚！</p>
                    </div>
                </div>

                <div class="name-bar d-flex">
                    <div class="bar-circle"></div>

                    <div class="bar-title">
                        <h2>Johnny</h2>
                        <p>2020/09/20</p>
                    </div>

                    <div class="bar-word">
                        <p>金假讚！</p>
                    </div>
                </div>

                <div class="name-bar d-flex">
                    <div class="bar-circle"></div>

                    <div class="bar-title">
                        <h2>Johnny</h2>
                        <p>2020/09/20</p>
                    </div>

                    <div class="bar-word">
                        <p>金假讚！</p>
                    </div>
                </div>


                <div class="search-bar d-flex">
                    <input type="text" placeholder="我來說幾句...(50個字為限)" class="col-11">
                    <button class="search-bar-ser col-1 p-0 d-flex align-items-center justify-content-center">
                        <p class="text-white text-center">發表</p>
                    </button>
                </div>
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



</script>

<!-- footer -->
<?php include __DIR__ . '/1_parts/4_footer.php'; ?>