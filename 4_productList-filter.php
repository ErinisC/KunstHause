<?php $title = '活動篩選'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php
$pageName = 'filter';

// 拿篩選內的項目，所有商品是0
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

$sql = "SELECT * FROM category WHERE visible=1 ORDER BY `sequence`";
$rows = $pdo->query($sql)->fetchAll();

$cate = [];

// 拿到第一層
foreach ($rows as $r) {
    if ($r['parent_sid'] == 1) {
        $cate[] = $r;
    }
}

// 再跑第二層
foreach ($cate as $k => $c) {
    //這邊的$rows跟上面的不相干，這邊$rows變數設定給
    foreach ($rows as $k2 => $r) {
        // 如果c是r的子結點
        if ($c['sid'] == $r['parent_sid']) {
            $cate[$k]['children'][] = $r;
        }
    }
};

// echo json_encode($cate, JSON_UNESCAPED_UNICODE);
// exit;



?>



<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/4_productList-filter.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>


<div class="bg">
    <!-- nav的高度空出來 -->
    <div class="space"></div>
    <div class="container">
        <!-- 麵包屑 -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="0_index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="4_productList.php">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>

        <!-- 大圖輪播 -->
        <!-- Banner輪播 -->
        <div class="pic mb-3">
            <div id="carouselExampleIndicators" class="carousel slide p-0 position-relatve" data-ride="carousel">
                <!-- 固定的搜尋區塊 -->
                <div class="filter-wrap position-absolute col-8 col-md-8 col-sm-11 col-11">
                    <div class="filter-bg text-white text-center py-3">
                        <div class="event-search w-100 d-flex flex-column justify-content-between">
                            <h1 class="mb-3">最棒的活動，都在KunstHaus</h1>
                            <h5 class="">來找活動吧</h5>

                        </div>


                    </div>


                </div>

                <!-- 下面的小橫線 -->
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <!-- 圖片 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="imgs/banner/art-1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imgs/banner/bg-attatch-2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imgs/banner/b-4.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="imgs/banner/b-5.jpg" alt="Four slide">
                    </div>
                </div>
            </div>
        </div>

        <!-- 搜尋結果 -->
        <div class="col py-3">
            <h1>搜尋結果
                <b class="search-result text-white">" <?= $cate['0']['categories'] ?> "</b>
            </h1>
        </div>

        <!-- 內容開始 -->
        <div class="row">
            <!-- 篩選區塊 -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="filter-container">

                    <!-- 篩選 -->
                    <div class="accordion" id="accordionExample">

                        <!-- 篩選一 -->
                        <div class="filter-btn card area_item" data-sid="0">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" data-name="所有商品">
                                        所有商品
                                    </button>
                                </h2>
                            </div>


                            <!-- cate -->
                            <?php foreach ($cate as $k => $c) : ?>
                                <div class="filter-btn card area_item" data-sid="<?= $c['sid'] ?>">
                                    <div class="card-header" id="headingOne<?= $c['sid'] ?>">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne<?= $c['sid'] ?>" aria-expanded="true" aria-controls="collapseOne<?= $c['sid'] ?>" data-name="<?= $c['categories'] ?>">
                                                <?= $c['categories'] ?>
                                            </button>
                                        </h2>
                                    </div>

                                    <!-- dropdown -->

                                    <div id="collapseOne<?= $c['sid'] ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                                        <?php foreach ($c['children'] as $c2) : ?>
                                            <div class="card-body area_item" data-sid="<?= $c2['sid'] ?>" data-name=" <?= $c2['categories'] ?>">
                                                <?= $c2['categories'] ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>


                                </div>

                            <?php endforeach; ?>
                        </div>



                    </div>
                </div>
            </div>


            <!-- 產品列表 -->
            <div class="pd-wrap col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="row product-list">


                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog col-lg-4 col-md- col-sm-11 col-11">
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
    </div>




    <?php include __DIR__ . '/1_parts/3_script.php'; ?>

    <!-- 引入自己的ＪＳ -->
    <script src="./js/4_productList-filter.js"></script>

    <?php include __DIR__ . '/1_parts/4_footer.php'; ?>