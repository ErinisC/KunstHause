<?php $title = '活動列表'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<!-- 自己的php條件放在這邊 -->
<?php
$pageName = 'productList';



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
    $sql = sprintf("SELECT * FROM products ORDER BY sid  LIMIT %s ,%s", ($page - 1) * $perPage, $perPage);
    $stmt = $pdo->query($sql);

    // $rows就會等於每一筆抓出的資料
    $rows = $stmt->fetchAll();
} else {
    $rows = [];
}

// 如果會員有登入，叫出收藏愛心項目

if (isset($_SESSION['user'])) {
    $member_sid = $_SESSION['user']['sid'];
    $l_sql = "SELECT `product_sid` FROM `likes` WHERE `member_sid`=?";
    $l_stmt = $pdo->prepare($l_sql);
    $l_stmt->execute([
        $member_sid
    ]);
    $l_rows = $l_stmt->fetchAll();
    $likes = array_column($l_rows, 'product_sid');
}



?>
<!-- 引head -->
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/4_productList.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<div class="bg">
    <!-- nav的高度空出來 -->
    <div class="space"></div>
    <!-- 麵包屑 -->
    <!-- <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="0_index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="4_productList.php">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>
    </div> -->

    <!-- Banner輪播 -->
    <div class="container-fluid pic p-0">
        <div id="carouselExampleIndicators" class="carousel slide p-0 position-relatve" data-ride="carousel">
            <!-- 固定的搜尋區塊 -->
            <div class="filter-wrap position-absolute w-100">
                <div class="row filter-bg text-white m-auto py-3 align-items-center col-8 col-md-8 col-sm-11 col-11">
                    <div class="event-search w-100 d-flex flex-column justify-content-between">
                        <h1 class="mb-3">最棒的活動，都在KunstHaus</h1>
                        <h5 class="mb-3">來找活動吧</h5>
                        <div class="search-block position-relative">
                            <!-- 搜尋input -->
                            <div class="input-group">
                                <input type="text" id="search-event" class="col-lg-8 col-md-10 col-sm-10 col-10" placeholder="搜搜各種活動">

                                <!-- 搜尋條input -->
                                <div class="input-group-btn col-2 p-0">
                                    <button class="btn btn-info">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- 下拉框 -->
                            <div class="search-dropdown position-absolute col-8 py-3">
                                <p class="title mb-3">選擇地區</p>
                                <ul class=" col-3 p-0">
                                    <li>
                                        <a href="4_productList-filter.php#2">北區</a>
                                    </li>
                                    <li>
                                        <a href="4_productList-filter.php#3">中區</a>
                                    </li>
                                    <li>
                                        <a href="4_productList-filter#4">南區</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!-- 關鍵字搜尋 -->
                    <div class="col mt-3">
                        <div class="row quickSearch">
                            <div class="quickSearch__title col-2 p-0">熱門搜尋 <span class="gap mx-2"></span>
                            </div>


                            <!-- 關鍵字欄位 -->
                            <div class="row col-10">
                                <div class="search-keyword mb-3">
                                    <span class="chip m-2">
                                        <a href="#">青峰演唱會</a>
                                    </span>
                                </div>

                                <div class="search-keyword mb-3">
                                    <span class="chip m-2">
                                        <a href="#">台北藝術節</a>
                                    </span>
                                </div>

                                <div class="search-keyword mb-3">
                                    <span class="chip m-2">
                                        <a href="#">台日交流展</a>
                                    </span>
                                </div>

                                <div class="search-keyword mb-3">
                                    <span class="chip m-2">
                                        <a href="#">鬼滅之刃</a>
                                    </span>
                                </div>
                            </div>
                        </div>

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
                    <img class="d-block w-100" src="imgs/banner/b-3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imgs/banner/b-2.jpg" alt="Second slide">
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

    <!-- 
    <div class="container-flui main-search">
        <div class="container h-100">
            <div class="row flex-column h-100 position-relative">


                <div class="search-box-shadow col-6 text-white  m-auto p-5 position-absolute"></div>
                <div class="col-6 search-box text-white  m-auto p-5">
                    <h1 class="mb-3">最棒的活動，都在KunstHaus</h1>
                    <h5 class="mb-3">來找活動吧</h5>
                </div>

            </div>
        </div>


    </div> -->


    <!-- 本週主打精選 -->
    <div class="container feature mt-5">

        <!-- Section標題 -->
        <!-- <div class="text-right">Feature</div> -->
        <div class="row category-wrap">
            <div class="category-header d-flex align-items-center justify-content-around w-100">
                <div class="category-count">01</div>
                <div class="category-name">
                    <div class="zh w-100">精選活動，豐富生活</div>
                </div>
                <div class="category-hr"></div>
            </div>
        </div>

        <!-- 內容 -->
        <div class="row">
            <!-- 介紹框 -->
            <div class="intro-box w-100">
                <a href="#" class="d-flex position-relative">
                    <div class="intro-img col-lg-6 col-md-8 col-sm-11 col-11">
                        <img src="imgs/event/TNC-41.jpg" alt="">
                    </div>
                    <div class="d-flex intro-info flex-column justify-content-center text-white pl-5 col-lg-4 col-md-6 col-sm-10 col-10 position-absolute">
                        <div class="title mb-3">2020戴勝益創作展</div>
                        <div class="mb-3">地點：台北</div>
                        <div class="">來個＃</div>

                    </div>
                </a>


            </div>
            <!-- <div class="quotation qr text-right col-1 ml-auto mb-5">
                <img src="imgs/banner/quotation_marks_2.webp" alt="">
            </div> -->


        </div>
    </div>


    <!-- 02. 探索熱門活動種類 -->
    <div class="container Top10 mt-5">

        <!-- Section標題 -->
        <div class="row category-wrap">
            <div class="category-header d-flex align-items-center justify-content-around w-100">
                <div class="category-count">02</div>
                <div class="category-name">
                    <div class="zh w-100">探索熱門活動種類</div>
                </div>
                <div class="category-hr"></div>
            </div>
        </div>


        <!-- 三欄的小卡開始 -->
        <div class="row">
            <!-- 種類一：演唱會 -->
            <div class="type-card mb-5 col-lg-4 col-md-6 col-sm-12 col-12" ">
            <!-- 圖片用連結包起來，連到篩選內頁-->
             <a href=" #" target="_blank">
                <div class="flip-card-inner position-relative">

                    <div class="post-tape d-flex justify-content-center align-items-center  position-absolute">
                        <div class=""> 演唱會</div>
                    </div>

                    <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                        <img src="imgs/banner/b-1.jpg" class="card-img-top" alt="">

                        <!-- 圖片上種類 -->
                        <div class="type position-absolute w-100 p-2">
                            <span class="chip m-2">
                                大港演唱會
                            </span>
                        </div>
                    </div>


                </div>
                </a>
            </div>

            <!-- 種類二：藝文展覽 -->
            <div class="type-card mb-5 col-lg-4 col-md-6 col-sm-12 col-12" ">
            <!-- 圖片用連結包起來，連到篩選內頁-->
             <a href=" #" target="_blank">
                <div class="flip-card-inner position-relative">

                    <div class="post-tape d-flex justify-content-center align-items-center  position-absolute">
                        <div class=""> 藝文展覽</div>
                    </div>

                    <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                        <img src="imgs/banner/b-4.jpg" class="card-img-top" alt="">

                        <!-- 圖片上種類 -->
                        <div class="type position-absolute w-100 p-2">
                            <span class="chip m-2">
                                台北藝術節
                            </span>
                            <span class="chip m-2">
                                故宮特展
                            </span>
                        </div>
                    </div>


                </div>
                </a>
            </div>

            <!-- 種類三：音樂演奏 -->
            <div class="type-card mb-5 col-lg-4 col-md-6 col-sm-12 col-12" ">
            <!-- 圖片用連結包起來，連到篩選內頁-->
             <a href=" #" target="_blank">
                <div class="flip-card-inner position-relative">

                    <div class="post-tape d-flex justify-content-center align-items-center  position-absolute">
                        <div class="">音樂演奏</div>
                    </div>

                    <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                        <img src="imgs/banner/b-5.jpg" class="card-img-top" alt="">

                        <!-- 圖片上種類 -->
                        <div class="type position-absolute w-100 p-2">
                            <span class="chip m-2">
                                愛樂社
                            </span>
                            <span class="chip m-2">
                                古典鋼琴會
                            </span>
                        </div>
                    </div>


                </div>
                </a>
            </div>

        </div>
    </div>


    <!-- 03. Top10熱門活動 -->
    <div class="container Top10 mt-5">

        <!-- Section標題 -->
        <!-- <div class="text-right">Top10</div> -->
        <div class="row category-wrap">
            <div class="category-header d-flex align-items-center justify-content-around w-100">
                <div class="category-count">03</div>
                <div class="category-name">
                    <div class="zh w-100">TOP10 熱門藝文展覽</div>
                </div>
                <div class="category-hr"></div>
            </div>
        </div>

        <div class="row">

            <!-- 三欄的小卡開始 -->



            <!-- 測試輪播 -->
            <div id="carouselExampleIndicators" class="carousel slide posotion-relative" data-ride="carousel">
                <ol class="carousel-indicators posotion-absolute">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner d-flex col-11 m-auto ">
                    <!-- <div class="carousel-item active">
                        <img class="d-block w-100" src="imgs/banner/b-1.jpg" alt="First slide">
                    </div> -->

                    <?php foreach ($rows as $r) : ?>
                        <!-- 小卡 -->
                        <div class="event-card mb-5 col-lg-4 col-md-6 col-sm-12 col-12" data-sid="<?= $r['sid'] ?>">

                            <!-- 圖片用連結包起來，連到detail-api那隻，準備做商品詳情頁 -->
                            <a href="4_product-detail.php?sid=<?= $r['sid'] ?>" target="_blank" class="flip-card">
                                <div class="flip-card-inner position-relative">
                                    <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                                        <img src="imgs/event/event-sm/<?= $r['picture'] ?>.jpg" class="card-img-top" alt="">
                                        <!-- 圖片上時間 -->
                                        <div class="time position-absolute p-2">
                                            <!-- 年 -->
                                            <div class="year"><?= substr($r['start_datetime'], 0, 4) ?></div>
                                            <!-- start -->
                                            <div class="start"><?= substr($r['start_datetime'], 5, 6) ?></div>
                                            <!-- end -->
                                            <div class="end"><?= substr($r['end_datetime'], 5, 6) ?></div>
                                        </div>
                                    </div>

                                    <!-- 翻轉卡片背面 -->
                                    <div class="flip-card-back position-absolute p-3">
                                        <div class="filp-title mb-3 text-center"> 活動簡介</div>
                                        <p class="px-3"><?= $r['event_info'] ?></p>
                                        <div class="px-3 text-right mt-2 text-white">read more >></div>

                                    </div>
                                </div>
                            </a>


                            <!-- 小卡下方票價 -->
                            <div class="wrap mt-1">
                                <div class="card-body p-0 w-100">
                                    <div class="card-info position-relative p-3">
                                        <div class="event-name mb-3"><?= $r['event_name'] ?></div>

                                        <div class="event-location mb-2">
                                            <i class="fas fa-map-marker-alt"></i>
                                            <?= $r['location'] ?>
                                        </div>

                                        <div class="now-price">$ <?= $r['price'] ?></div>

                                        <!-- 收藏 -->
                                        <a href="Javascript:" class="like-link position-absolute">

                                            <i class="like like-btn far fa-heart <?= in_array($r['sid'], $likes) ? 'liked' : '' ?>" data-sid="<?= $r['sid'] ?>"></i>
                                        </a>

                                    </div>

                                    <!-- 價格按鈕加Modal的彈跳窗格 -->
                                    <a href="javascript:showProductModal(<?= $r['sid'] ?>)" class="card-price py-3 w-100">
                                        <div class=" card-price justify-content-center d-flex p-3">
                                            <div class="mr-3">立刻購買</div>

                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>


                <!-- 左 -->
                <a class="carousel-control-prev posotion-absolute" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
                    <i class="fas fa-arrow-circle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>

                <!-- 右 -->
                <a class="carousel-control-next posotion-absolute" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                    <i class="fas fa-arrow-circle-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

    </div>



    <!-- 04.所有活動，商品列表 -->
    <div class="container-fluid bg-attatch">

        <!-- 限制寬度的卡片內容區 -->
        <div class="container list">
            <!-- Section標題 -->
            <!-- <div class="text-right">KunstHaus Event</div> -->
            <div class="row category-wrap">
                <div class="category-header d-flex align-items-center justify-content-around w-100">
                    <div class="category-count">04</div>
                    <div class="category-name">
                        <div class="zh w-100">所有活動，快來逛逛</div>
                    </div>
                    <div class="category-hr"></div>
                </div>
            </div>

            <!-- 商品小卡開始 -->
            <div class="row">


                <?php foreach ($rows as $r) : ?>
                    <!-- 小卡 -->
                    <div class="event-card mb-5 col-lg-6 col-md-6 col-sm-12 col-12" data-sid="<?= $r['sid'] ?>">

                        <!-- 圖片用連結包起來，連到detail-api那隻，準備做商品詳情頁 -->
                        <a href="4_product-detail.php?sid=<?= $r['sid'] ?>" target="_blank" class="flip-card">
                            <div class="flip-card-inner position-relative">
                                <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                                    <img src="imgs/event/<?= $r['picture'] ?>.jpg" class="card-img-top" alt="">
                                    <!-- 圖片上時間 -->
                                    <div class="time position-absolute p-2">
                                        <!-- 年 -->
                                        <div class="year"><?= substr($r['start_datetime'], 0, 4) ?></div>
                                        <!-- start -->
                                        <div class="start"><?= substr($r['start_datetime'], 5, 6) ?></div>
                                        <!-- end -->
                                        <div class="end"><?= substr($r['end_datetime'], 5, 6) ?></div>
                                    </div>
                                </div>

                                <!-- 翻轉卡片背面 -->
                                <div class="flip-card-back position-absolute p-3">
                                    <div class="filp-title mb-3 text-center"> 活動簡介</div>
                                    <p class="px-3"><?= $r['event_info'] ?></p>
                                    <div class="px-3 text-right mt-2 text-white">read more >></div>

                                </div>
                            </div>
                        </a>


                        <!-- 小卡下方票價 -->
                        <div class="wrap mt-1 d-flex">
                            <div class="card-body d-flex p-0 w-100">
                                <div class="card-info position-relative m-auto py-3 col-10">
                                    <div class="event-name mb-2"><?= $r['event_name'] ?></div>

                                    <div class="event-location mb-2">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <?= $r['location'] ?></div>

                                    <div class="now-price">$ <?= $r['price'] ?></div>

                                    <!-- 收藏 -->
                                    <a href="Javascript:" class="like-link position-absolute">
                                        <!-- <i class="like like-btn far fa-heart" onclick="checkLike(event);return false;" data-sid="<?= $r['sid'] ?>"></i> -->
                                        <i class="like like-btn far fa-heart <?= in_array($r['sid'], $likes) ? 'liked' : '' ?>" data-sid="<?= $r['sid'] ?>"></i>
                                    </a>

                                </div>

                                <!-- 價格按鈕加Modal的彈跳窗格 -->
                                <a href="javascript:showProductModal(<?= $r['sid'] ?>)" class="card-price py-3 col-2 d-flex justify-content-center align-items-center">
                                    <!-- <div class=" card-price py-3">

                                    </div> -->

                                    <i class="fas fa-cart-plus"></i>
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

    </div>




    <!-- 推薦商品小卡 -->
    <div class="container-fluid r-section p-0">
        <!-- 推薦商品標題 -->
        <div class="container mt-5">
            <!-- Section標題 -->
            <!-- <div class="text-right">Top10</div> -->
            <div class="row category-wrap">
                <div class="category-header special-category d-flex align-items-center justify-content-around w-100">
                    <div class="category-count special">05</div>
                    <div class="category-name">
                        <div class="zh w-100">推薦活動，盡在此處</div>
                    </div>
                    <div class="category-hr"></div>
                </div>
            </div>
        </div>
        <!-- 拖曳卡片 -->
        <div class="grid-container">
            <main class="grid-item main pt-0 position-relative">
                <div class="items col-11 mx-auto">
                    <?php foreach ($rows as $r) : ?>
                        <!-- 小卡 -->
                        <div class="item event-card card-sm col-3">
                            <div class="img-wrap mb-1 position-relative">
                                <img src="imgs/event/<?= $r['picture'] ?>.jpg" class="card-img-top" alt="">
                                <div class="time position-absolute col-4"><?= $r['start_datetime'] ?></div>
                            </div>
                            <!-- 小卡下方票價 -->
                            <div class="wrap d-flex">
                                <div class="card-body d-flex p-0 w-100">
                                    <div class="card-info m-auto py-3 col-8 position-relative">
                                        <div class="event-name mb-3"><?= $r['event_name'] ?></div>
                                        <div class="event-location"><?= $r['location'] ?></div>
                                        <!-- 收藏 -->
                                        <a href="#" class="like position-absolute">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <div class="card-price px-1 d-flex col-4 align-items-center">
                                        <div class="origin-price position-relative">
                                            <div class="now-price">優惠價$ 300</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- 左 -->
                <i class="recommend-left fas fa-arrow-circle-left position-absolute"></i>


                <!-- 右 -->
                <i class="recommend-right fas fa-arrow-circle-right position-absolute"></i>
                <span class="sr-only">Next</span>

            </main>
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




    <?php include __DIR__ . '/1_parts/3_script.php'; ?>

    <!-- 引入自己的ＪＳ -->
    <!-- <script src=""></script> -->


    <script>
        // modal
        function showProductModal(sid) {
            // 去抓當個sid
            $('iframe')[0].src = '4_productList-modal-api.php?sid=' + sid;

            $('#exampleModal').modal('show')

        }

        function updateCartCount() {
            //nav bar 呼叫的方法
        }


        // 搜尋下拉框呈現
        $('#search-event').on('click', function() {
            $('.search-dropdown').toggle();

        })


        // 動態一一浮現
        // 用css animate抓scroll時的offest
        // parallax scrolling

        // $(window).scroll(function() {
        //     let scrollTop = $(window).scrollTop();
        //     console.log('scrollTop:', scrollTop);

        //     // quotation飛進來
        //     if (scrollTop > 600) {
        //         $('.quotation').addClass('flyin');
        //     } else {
        //         $('.quotation').removeClass('flyin');
        //     }

        //     // 精選小卡浮現
        //     if (scrollTop > 650) {
        //         $('.intro-box').addClass('show-up');
        //     } else {
        //         $('.intro-box').removeClass('show-up');
        //     }

        //     if (scrollTop > 1500) {
        //         $('.card').addClass('move-up');
        //         $('.card').addClass('move-up');
        //     } else {
        //         $('.card').removeClass('move-up');
        //     }

        // })


        $('.search-box').on('mouseover', function() {
            $('.search-box').css('transform', 'translate(20px, 18px)')
        })

        $('.search-box').on('mouseleave', function() {
            $('.search-box').css('transform', 'translate(0px, 0px)')
        })

        $('.card').eq(0); //抓到所有的小卡
        $('.card').eq(0).offset(); //抓到第0個的offset



        // 測試拖曳
        const slider = document.querySelector('.items');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });
        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });
        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });
        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 3; //scroll-fast
            slider.scrollLeft = scrollLeft - walk;
            console.log(walk);
        });


        // 瀏覽紀錄的動態
        $('.side-cookie-bar').on('mouseover', function() {
            $('.side-cookie-item').toggle();
        });


        // 輪播測試
        var angle = 0;

        function galleryspin(sign) {
            spinner = document.querySelector("#spinner");
            if (!sign) {
                angle = angle + 45;
            } else {
                angle = angle - 45;
            }
            spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
        }

        // 
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 6000
            })
        });



        // 收藏功能
        const sess_user = <?= json_encode($_SESSION['user'] ?? []) ?>;
        const like_btns = $('.like-btn');
        like_btns.click(function() {
            if (!sess_user.sid) {
                console.log('請先登入');

            } else {
                const card = $(this).closest('.event-card');
                const sid = card.attr('data-sid');
                const sendObj = {
                    action: 'like',
                    sid: sid,
                }
                console.log(sendObj)
                $.get('4.likes-api.php', sendObj, function(data) {
                    console.log(data);
                    if (data.success) {
                        card.find('.like-btn').addClass('liked');
                    } else {
                        card.find('.like-btn').removeClass('liked');
                    }

                }, 'json');
            }

        });

        // test

        $('.carousel-control-next').on('click', function() {


        });
    </script>

    <?php include __DIR__ . '/1_parts/4_footer.php'; ?>