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
                <li class="breadcrumb-item"><a href="4_productList.php">活動列表</a></li>
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

<!-- --------活動詳情與報名鈕----------- -->
        <div class="row justify-content-between p-0">
            <div class="col-12">
                <button class="label align-items-center justify-content-center">
                    <!-- 活動標籤 -->
                    <p><?= $row['categories'] ?></p>
                </button>
            </div>

            <div class="col-8">
                <div class="activity">
                    <!-- 活動名稱 -->

                    <h1 class="activity-title mt-3" data-sid="<?= $row['sid'] ?>"><?= $row['event_name'] ?></h1>
                    <div class="activity-time d-flex">
                        <div class="mt-4 mr-3">
                            <i class="far fa-clock"></i>
                        </div>
                        <p class="activity-time-title mt-3">活動日期時間：<br><?= $row['start_datetime'] ?></p>
                    </div>

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
            <div class="d-flex col-3">
                <!-- -----------愛心----------------     -->
                <div class="aroundheart mr-2">
                    <i class="like far fa-heart fa-2x"></i>
                </div>

                <button class="apply apply-01 d-flex align-items-center justify-content-center">
                    <div class="d-flex text-align: center">
                        <div class="apply-ticket">
                            <img class="ticket" src=" <?= WEB_ROOT ?>/imgs/products/ticket.svg">
                        </div>
                        <div class="apply-word d-flex align-items-center justify-content-center ml-2">
                            <p>立即<br>報名</p>
                        </div>
                    </div>
                </button>
            </div>

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

                    <div class="new-name-bar">

                        <div class="name-bar-lest col-lg-10 col-sm-10 col-md-10">
                            <div class="col-lg-2 col-sm-10 col-md-10">
                                <div class="bar-circle">
                                    <img class="w-100" src="../KunstHause/imgs/products/headshut-4.png" alt="" srcset="">
                                </div>
                            </div>

                            <div class="bar-title col-lg-2 col-md-10 col-sm-10">
                                <h2 class="mb-2">雨水我問你</h2>
                                <p>2020/12/21</p>
                            </div>

                            <div class="bar-word col-lg-6 col-md-10 col-sm-10">
                                <p>啊 雨水我問你 我的感情算什麼 無采愛你已經愛這多年 啊 雨水我問你　誰人為愛賭生死 你敢講我就陪你去！</p>
                            </div>
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

<!-- -------modal----------- -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">發送留言前，我們要告知你：</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1.毀謗屬刑事案件（會留下前科），敬告發表者自負法律責任。<br>2.良性建議可。無關或含有惡意批評文字、影射、歧視、諧音等留言將會刪除。<br>3.KUNSTHAUS全權決定刪除標準，累犯者將永久取消留言資格。</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">不同意，取消留言</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">我同意，送出留言</button>
            </div>
        </div>
    </div>
</div>

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


    // Modal Show
    $('.search-bar-ser').on('click', function() {
        $('#exampleModalCenter').modal('show')
    });

    $('.btn.btn-primary').on('click', function() {
        console.log('hi');
        $('.new-name-bar').css('display', 'block');
    });

    $('.apply').on('click', function() {
        $('.cartnav-dropdown').toggle();
        // 先移除購物車空空的alert
        $('.alert').css('display', 'none');
        $('.pay-btn').css('display', 'block');

        const item = $(this).closest('.row').find('.activity-title');
        //再找到這個item的屬性，就能抓到設定給它的data-sid的值
        const sid = item.attr('data-sid');

        console.log(sid);
        //接著再往item裡面找，找到數量，再取他的val來拿到數量的值
        // const qty = item.find('#product-quantity').val();

        $.get('4_productList-shopcart-api.php', {
                sid: sid,
                quantity: 1,
                action: 'add'
            },
            function(data) {
                console.log(data);
                if (window.parent && window.parent.smallCartInit) {
                    window.parent.smallCartInit();
                }

            }, 'json')
    });
</script>

<!-- footer -->
<?php include __DIR__ . '/1_parts/4_footer.php'; ?>