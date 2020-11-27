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
    <!-- nav的高度空出來 -->
    <div class="space"></div>
    <!-- 麵包屑 -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="0_index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="4_productList.php">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>
    </div>

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
                                <input type="text" id="search-event" class="col-lg-6 col-md-10 col-sm-10 col-10" placeholder="搜搜各種活動">

                                <!-- 搜尋條input -->
                                <div class="input-group-btn col-2 p-0">
                                    <button class="btn btn-info">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- 下拉框 -->
                            <div class="search-dropdown position-absolute col-11 py-3">
                                <p class="title mb-3">選擇地區</p>
                                <ul class=" col-3 p-0">
                                    <li>
                                        <a href="#">北區</a>
                                    </li>
                                    <li>
                                        <a href="#">中區</a>
                                    </li>
                                    <li>
                                        <a href="#">南區</a>
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


    <!-- 本週主打精選 -->
    <div class="container week mt-5">
        <div class="row">

            <!-- Section小標題 -->
            <div class="section-title mb-5 col-lg-3 col-md-3 col-sm-6 col-6 position-relative">
                <div class="section-title-below position-absolute d-flex align-items-center">
                    <p class="text-white text-center w-100">本週主打精選</p>
                </div>
            </div>


            <!-- 介紹框 -->
            <div class="intro-box w-100">
                <a href="#" class="d-flex position-relative">
                    <div class="intro-img col-6">
                        <img src="imgs/event/TNC-41.jpg" alt="">
                    </div>
                    <div class="d-flex flex-column justify-content-center intro-info text-white pl-5 col-4 position-absolute">
                        <div class="title mb-3">2020戴勝益創作展</div>
                        <div class="mb-3">地點：台北</div>
                        <div class="">來個＃</div>

                    </div>
                </a>

            </div>

        </div>
    </div>

    <!-- 商品列表 -->
    <div class="container list">
        <div id="b1" class="pd-title py-5">
            <!-- Section小標題 -->
            <div class="section-title col-lg-3 col-md-3 col-sm-6 col-6 position-relative">
                <div class="section-title-below position-absolute d-flex align-items-center">
                    <p class="text-white text-center w-100">大家都在看</p>
                </div>
            </div>

        </div>
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
                    <div class="wrap d-flex">
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


    <!-- 本週主打精選 -->
    <div class="container flip-book mt-5">

        <!-- Section小標題 -->
        <div class="section-title col-lg-3 col-md-3 col-sm-6 col-6 position-relative">
            <div class="section-title-below position-absolute d-flex align-items-center">
                <p class="text-white text-center w-100">來個一排東東</p>
            </div>
        </div>


        <div class="container containerA">
            <div id="carousel">
                <figure><img src="imgs/event/event-sm/HSZ-11.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/KHH-12.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/TPE-07.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/KHH-17.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/TPE-07.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/TNC-41-1.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/KHH-27.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/HSZ-11.jpg" alt=""></figure>
                <figure><img src="imgs/event/event-sm/TPE-32-1.jpg.jpg" alt=""></figure>
            </div>
        </div>



    </div>


    <!-- 推薦商品小卡 -->
    <div class="container-fluid r-section p-0">
        <!-- 推薦商品標題 -->
        <div class="container mt-5">
            <!-- Section小標題 -->
            <div class="section-title col-lg-3 col-md-3 col-sm-6 col-6 position-relative">
                <div class="section-title-below position-absolute d-flex align-items-center">
                    <p class="text-white text-center w-100">我們為您推薦</p>
                </div>
            </div>
        </div>
        <!-- 拖曳卡片 -->
        <div class="grid-container">
            <main class="grid-item main">
                <div class="items mt-5">
                    <?php foreach ($rows as $r) : ?>
                        <!-- 小卡 -->
                        <div class="item card card-sm col-3">
                            <div class="img-wrap mb-3 position-relative">
                                <img src="imgs/event/<?= $r['picture'] ?>.jpg" class="card-img-top" alt="">
                                <div class="time position-absolute col-4"><?= $r['start-datetime'] ?></div>
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
            </main>
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

        <!-- 瀏覽紀錄邊條 -->
        <!-- <div class="side-cookie-bar position-fixed position-relative">
            <i class="fas fa-history text-white" style="font-size:1.5rem"></i>

            <div class="side-cookie-item  text-center position-absolute">
                <p class="mb-3">瀏覽紀錄</p>
                <ul>
                    <li class="d-flex justify-content-around my-2">
                        <div class="img-wrap">
                            <img src="" alt="">
                        </div>
                        <p>name</p>
                    </li>
                    <li class="d-flex justify-content-around">
                        <div class="img-wrap">
                            <img src="" alt="">
                        </div>
                        <p>name</p>
                    </li>
                </ul>
            </div>
        </div> -->

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

        // card heart animation
        $('.like').on('click', function() {
            console.log('like');
            $(this).toggleClass('liked');
        });

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
    </script>

    <?php include __DIR__ . '/1_parts/4_footer.php'; ?>