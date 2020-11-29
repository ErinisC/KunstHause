<?php $title = 'Kunsthaus|會員中心'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<!-- 自己的php條件放在這邊 -->
<?php
$pageName = 'productList';


// 設定一頁只能有四格
$perPage = 4;
// 設定使用者目前看的頁數
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// 選擇資料庫要的資料表，用count找出總共的幾數
$t_sql = "SELECT count(1)FROM products";
$t_stmt = $pdo->query($t_sql);

// 計算資料筆數
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; //總筆數
$totalPages = ceil($totalRows / $perPage); //總頁數

// 設定條件
if ($totalRows != 0) { // 如果總筆數不等於零=有資料的話
    if ($page < 1) { //如果所在頁數頁數小於一
        header('Location:4_productList.php');
        exit; //就轉向第一頁，然後停止執行下面的程式
    }
    if ($page > $totalPages) { //如果所在頁數頁數大於所有的頁數
        //就轉向目前最後一頁，然後停止執行下面的程式
        header('Location:4_productList.php' . $totalPages);
        exit;
    }

    // 這邊要抓出資料庫的筆數後，決定每頁放的資料（LIMIT %s,%s）
    $sql = sprintf("SELECT * FROM products ORDER BY sid DESC LIMIT %s ,%s", ($page - 1) * $perPage, $perPage);
    $stmt = $pdo->query($sql);

    // $rows就會等於每一筆抓出的資料
    $rows = $stmt->fetchAll();
} else {
    $rows = [];
}


?>


<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的 css -->
<link rel="stylesheet" href="./css/1_member-center.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="container">
    <div class="row">
        <div class="banner">
            <img src="/KunstHause/imgs/banner/bg-attatch-4.jpg">
        </div>
        <div class="member-area mx-auto p-0 col-lg-12 col-md-12 col-sm-12 col-12 w-100">
            <div class="avatar">
                <img src="/KunstHause/imgs/member_imgs/member_20.jpg">
            </div>

            <div class="edit-member pt-5">
                <p>Hi 小米
                    <i class="fas fa-edit"></i>
                    下一場活動要去哪呢?
                </p>
                <button class="btn btn-primary col-2 mt-5">編輯設定</button>
            </div>

            <div class="favorite col-10 mx-auto my-5 pb-2">我的收藏</div>

            <!-- 商品列表 -->
            <div class="container">
                <div class="container list">


                    <div class="row">

                        <?php foreach ($rows as $r) : ?>
                            <!-- 小卡 -->
                            <div class="card mb-5 col-lg-6 col-md-6 col-sm-12 col-12">

                                <!-- 圖片用連結包起來，連到detail-api那隻，準備做商品詳情頁 -->
                                <a href="4_product-detail.php?sid=<?= $r['sid'] ?>" target="_blank" class="flip-card">
                                    <div class="flip-card-inner position-relative">
                                        <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                                            <img src="imgs/event/<?= $r['picture'] ?>.jpg" class="card-img-top" alt="">
                                            <!-- 圖片上時間 -->
                                            <div class="time position-absolute col-4 p-2"><?= $r['start-datetime'] ?></div>
                                        </div>

                                        <!-- 翻轉卡片背面 -->
                                        <div class="flip-card-back position-absolute p-3">
                                            <div class="filp-title mb-3 text-center"><?= $r['event_name'] ?></div>
                                            <p class="px-3"><?= $r['event_info'] ?></p>
                                        </div>
                                    </div>
                                </a>


                                <!-- 小卡下方票價 -->
                                <div class="wrap mt-1 d-flex">
                                    <div class="card-body d-flex p-0 w-100">
                                        <div class="card-info position-relative m-auto py-3 col-8">
                                            <div class="event-name mb-3"><?= $r['event_name'] ?></div>

                                            <div class="event-location"><?= $r['location'] ?></div>

                                            <!-- 收藏 -->
                                            <a href="Javascript:" class="like-link position-absolute">
                                                <i class="like far fa-heart"></i>
                                            </a>

                                        </div>

                                        <!-- 價格按鈕加Modal的彈跳窗格 -->
                                        <a href="javascript:showProductModal(<?= $r['sid'] ?>)" class="card-price py-3 col-4">
                                            <div class=" card-price py-3">
                                                <div class="mb-3">優惠價</div>
                                                <div class="now-price">$ <?= $r['price'] ?></div>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>


            <div class="favorite col-10 mx-auto my-5 pb-2">票券管理</div>

            <!-- 先判斷訂單資料內有沒有東西 -->
            <?php if (empty($o_rows)) : ?>
                <div class="container">
                    <div class="row">
                        <p>還沒有訂單資料唷～</p>
                    </div>
                </div>


            <?php else : ?>

                <div class="container">
                    <?php foreach ($o_rows as $o) : ?>
                        <?php foreach ($d_rows as $d) : ?>
                            <div class="row order mb-5 align-content-center">
                                <?php if ($o['sid'] == $d['order_id']) : ?>
                                    <div class="col-lg-3 event-img p-0">
                                        <img class="event-sm-img w-100" src="<?= WEB_ROOT ?>imgs/event/event-sm/<?= $d['picture'] ?>.jpg" alt="">
                                    </div>
                                    <div class="col-lg-5 event-info">
                                        <div class="main-info my-4">
                                            <p class="event-name mb-2"><?= $d['event_name'] ?></p>
                                            <p class="price mb-2">單價$ <?= $d['price'] ?></p>
                                        </div>
                                        <div class="sub-info my-4">
                                            <p class="date mb-2"><?= $d['start-datetime'] ?> ~ <?= $d['end-datetime'] ?></p>
                                            <p class="order-sid mb-2">訂單編號：<?= $d['order_id'] ?></p>
                                            <p class="pay-method mb-2">付款方式：<?= $d['pay_way'] ?></p>
                                            <p class="total-price mb-2">訂單總額：<?= $o['total_price'] ?></p>
                                            <p class="order-status mb-2">訂單狀態：<?= $d['order_status'] ?></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 sm-none"></div>
                                    <div class="col-lg-3 ticket d-flex justify-content-around">
                                        <div class="edit">
                                            <button class="delete" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelModal"></button>
                                            <button class="feedback"></button>
                                        </div>
                                        <div class="qr-code">
                                            <button class="qr-code-lg" type="button" class="btn btn-primary" data-toggle="modal" data-target="#qrcodeModal">
                                                <img src="<?= WEB_ROOT ?>imgs/member/qr-code.svg" alt="">
                                            </button>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php include __DIR__ . '/1_parts/3_script.php'; ?>



<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>