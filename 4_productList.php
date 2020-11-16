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
                    <div class="img-wrap mb-3 position-relative">
                        <img src="imgs/event/big/<?= $r['book_id'] ?>.png" class="card-img-top" alt="">
                        <div class="time position-absolute col-4"><?= $r['publish_date'] ?></div>
                    </div>

                    <!-- 小卡下方票價 -->
                    <div class="wrap d-flex">
                        <div class="card-body d-flex p-0">
                            <div class="card-info m-auto py-3 col-8">
                                <div class="event-name mb-3"><?= $r['bookname'] ?></div>
                                <div class="event-location">地點：台北市</div>
                            </div>
                            <div class="card-price py-3 col-4">
                                <div class="origin-price mb-3 position-relative">
                                    <hr class="position-absolute">原價$ <?= $r['price'] ?></div>
                                <div class="now-price">優惠價$ <?= $r['price'] ?></div>
                            </div>
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

    <!-- 推薦商品 -->
    <div class="container">
        <div class="pd-title py-5">我們為你推薦</div>
    </div>

    <!-- 小推薦商品 -->
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

    <!-- 蓋板彈跳 Modal -->
    <div id="cartWrap" class="shopping-cart-wrap position-fixed">

        <div class="shop-cart-content position-fixed position-relative col-lg-4 col-md-7 col-sm-10 col-10">

            <!-- 右上刪除鈕 -->
            <button class="btn-close position-absolute">
                <i class="fas fa-times text-white"></i>
            </button>

            <!-- 中間白色小卡 -->
            <div data-sid="<?= $r['sid'] ?>" class="content-wrap p-5 h-100">
                <!-- 圖片 -->
                <div class="right-pic">
                    <img src="imgs/event/big/<?= $r['book_id'] ?>.png" alt="">
                </div>

                <!-- 活動資訊區 -->
                <div class="left-info d-flex flex-column justify-content-around">

                    <div class="info-out text-center">
                        <h2 class="product-name">
                            <?= $r['bookname'] ?>
                        </h2>

                        <div class="card-info bread text-center my-3 text-dark">
                            活動日期放這邊
                        </div>
                    </div>

                    <div class="cost text-center">
                        <?= $r['price'] ?>
                    </div>

                    <!-- 數量加減區塊 -->
                    <div class="number-wrap">
                        <div class="">數量</div>
                        <div class="input-wrap">
                            <div class="input-group  justify-content-between">
                                <span class="minus"><button><i class="fas fa-minus"></i></button></span>

                                <!-- 中間數量 -->
                                <input type="text" id='product-quantity' class="col-9" value="1">

                                <span class="add"><button><i class="fas fa-plus"></i></button></span>
                            </div>
                        </div>
                    </div>

                    <!-- 總金額區塊 -->
                    <div class="total-wrap mt-2">
                        <div class="total">總金額</div>
                        <div class="input-group ml-3">
                            <span class="mr-3"><i class="fas fa-dollar-sign"></i></span>
                            <input type="text" id="total-cost">
                        </div>
                    </div>

                    <!-- 立刻購買按鈕 -->
                    <div class="btn-wrap mt-2">
                        <button class="buy-btn w-100">立刻購買</button>
                    </div>
                </div>

            </div>

        </div>




    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->


<script>
    ///彈出購物車視窗
    $('.card-price').on('click', function() {
        // console.log('hi')
        $('#cartWrap').css('display', 'block')
    })

    // 關閉按鈕
    $('.btn-close').on('click', function() {
        $('#cartWrap').css('display', 'none')
    })

    // 數量增減
    let productQuantity = +$('#product-quantity').val();
    let cost = $('.cost').text()
    $('#total-cost').val(cost * productQuantity)

    $('.add').on('click', function() {
        productQuantity += 1;
        cost = $('.cost').text()


        $('#product-quantity').val(productQuantity)
        $('#total-cost').val(cost * productQuantity)
    })

    // 按鈕減少數量
    $('.minus').on('click', function() {
        productQuantity -= 1;
        cost = $('.cost').text()
        $('#product-quantity').val(productQuantity)
        $('#total-cost').val(cost * productQuantity)
    })


    // 購物車nav小窗彈出，白色大區塊消失
    $('.buy-btn').on('click', function() {
        $('.shop-box-wrap').toggle()
        $('#cartWrap').css('display', 'none')

    });

    // 準備串接購物車，先看能不能正確抓到商品sid跟數量
    $('.buy-btn').on('click', function() {
        // 先往上找到小卡
        const item = $(this).closest('.content-wrap');
        //再找到這個item的屬性，就能抓到設定給它的data-sid的值
        const sid = item.attr('data-sid');
        //接著再往item裡面找，找到數量，再取他的val來拿到數量的值
        const qty = item.find('#product-quantity').val();

        console.log({
            sid: sid,
            quantity: qty
        });
        // 現在要丟ajx給購物車api
        $.get('4_productList-SP-api.php', {
                sid: sid,
                quantity: qty,
                action: 'add'
            },
            function(data) {
                console.log(data);

            }, 'json')

    });
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>