<?php $title = '活動列表'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<!-- 自己的php條件放在這邊 -->
<?php
// 設定一頁只能有六格
$perPage = 6;
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
<!-- 引head -->
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/4_productList.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<div class="bg">

    <!-- 麵包屑 -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>
    </div>


    <div class="container-fluid pic">
        <h5>這邊要放圖片輪播</h5>
    </div>

    <!-- 篩選區塊 -->
    <div class="container">
        <div class="row justify-content-between position-relative">
            <div class="filter f1 col-lg-6 col-md-6 col-sm-12 col-12"></div>
            <div class="filter f2 col-lg-5 col-md-5 col-sm-12 col-12"></div>
        </div>
    </div>

    <!-- 本週主打精選 -->
    <div class="container week">
        <div class="row"></div>
    </div>

    <!-- 商品列表 -->
    <div class="container list">
        <div id="b1" class="pd-title py-5"></div>
        <div class="row">

            <?php foreach ($rows as $r) : ?>
                <!-- 小卡 -->
                <div class="card mb-5 col-lg-6 col-md-6 col-sm-12 col-12">

                    <!-- 圖片用連結包起來，連到detail-api那隻，準備做商品詳情頁 -->
                    <a href="4_product-detail.php?sid=<?= $r['sid'] ?>" target="_blank">
                        <div class="img-wrap mb-3 position-relative">

                            <img src="imgs/event/big/<?= $r['book_id'] ?>.png" class="card-img-top" alt="">
                            <!-- 圖片上時間 -->
                            <div class="time position-absolute col-4"><?= $r['publish_date'] ?></div>
                        </div>
                    </a>


                    <!-- 小卡下方票價 -->
                    <div class="wrap d-flex">
                        <div class="card-body d-flex p-0">
                            <div class="card-info m-auto py-3">
                                <div class="event-name mb-3"><?= $r['bookname'] ?></div>
                                <div class="event-location">地點：台北市</div>
                            </div>

                            <!-- 價格按鈕加Modal的彈跳窗格 -->
                            <a href="javascript:showProductModal(<?= $r['sid'] ?>)" class="card-price py-3 col-4">
                                <div class=" card-price py-3">
                                    <div class="origin-price mb-3 position-relative">
                                        <hr class="position-absolute">原價$ <?= $r['price'] ?></div>
                                    <div class="now-price">優惠價$ <?= $r['price'] ?></div>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>


    <!-- 頁碼 -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <!-- 前一頁 -->
                    <!-- 這邊是指，如果到了最前頁，就讓class加上disable的文字 -->
                    <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                        <!-- 這邊是讓頁面連結的最後，加上目前頁面-1，才會跳轉到前一頁 -->
                        <a class="page-link" href="?page=<?= $page - 1 ?>"><i class="fas fa-arrow-left"></i></a>
                    </li>

                    <!-- 中間頁數 -->
                    <!-- 這邊設定每行頁籤要出現幾個 -->
                    <?php for ($i = $page - 2; $i <= $page + 2; $i++) : ?>
                        <!-- 設定變數i，並規定i大於一小於總頁數的話 -->
                        <?php if ($i >= 1 and $i <= $totalPages) : ?>
                            <!-- 如果頁數等於擁有的頁數，就active -->
                            <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                                <a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endfor; ?>


                    <!-- 後一頁 -->
                    <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                        <!-- 這邊是讓頁面連結的最後，加上目前頁面-1，才會跳轉到前一頁 -->
                        <a class="page-link" href="?page=<?= $page + 1 ?>"><i class="fas fa-arrow-right"></i></a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>

    <!-- 推薦商品標題 -->
    <div class="container">
        <div class="pd-title py-5">我們為你推薦</div>
    </div>

    <!-- 推薦商品小卡 -->
    <div class="container-fluid">
        <div class="row m-0 p-0 col-12">
            <!-- 小卡 -->
            <div class="card card-sm mb-5 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-wrap mb-3 position-relative">
                    <img src="" class="card-img-top" alt="">
                    <div class="time position-absolute col-4">這裡放時間</div>
                </div>

                <!-- 小卡下方票價 -->
                <div class="wrap d-flex">
                    <div class="card-body d-flex p-0">
                        <div class="card-info m-auto py-3 col-8">
                            <div class="event-name mb-3">台北藝文活動展覽</div>
                            <div class="event-location">地點：台北市</div>
                        </div>
                        <div class="card-price py-3 col-4">
                            <div class="origin-price mb-3 position-relative">
                                <hr class="position-absolute">原價$ 450</div>
                            <div class="now-price">優惠價$ 300</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- body內容 -->
                <div class="modal-body">
                    <!-- 這邊設定iframe -->
                    <iframe src="4_productList-modal-api.php?sid=1">
                    </iframe>

                </div>
            </div>
        </div>
    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->


<script>
    // 關閉按鈕
    // $('.btn-close').on('click', function() {
    //     // $('#cartWrap').css('display', 'none');
    //     $('.cart-nav').addClass('show');

    //     setTimeout(function() {
    //         $('.cart-nav').removeClass('show');
    //     }, 2000);
    // })
    // modal
    function showProductModal(sid) {
        // 去抓當個sid
        $('iframe')[0].src = '4_productList-modal-api.php?sid=' + sid;

        $('#exampleModal').modal('show')

    }

    function updateCartCount() {
        //nav bar 呼叫的方法
    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>