<?php $title = '活動篩選頁'; ?>

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


// 拿種類的篩選層


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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="0_index.php">首頁</a></li>
                <li class="breadcrumb-item"><a href="4_productList.php">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
            </ol>
        </nav>

        <!-- 搜尋結果 -->
        <div class="col py-3">
            <h1>搜尋結果
                <b class="text-white">" 大港演唱會 "</b>
            </h1>
        </div>

        <!-- 內容開始 -->
        <div class="row">
            <!-- 篩選區塊 -->
            <div class="col-3">
                <div class="filter-container">

                    <!-- 篩選 -->
                    <div class="accordion" id="accordionExample">

                        <!-- 篩選一 -->
                        <div class="filter-btn card" data-sid="0">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        所有商品
                                    </button>
                                </h2>
                            </div>


                            <!-- cate -->
                            <?php foreach ($cate as $k => $c) : ?>
                                <div class="filter-btn card" data-sid="<?= $c['sid'] ?>">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?= $c['categories'] ?>
                                            </button>
                                        </h2>
                                    </div>

                                    <!-- dropdown -->

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                                        <?php foreach ($c['children'] as $c2) : ?>
                                            <div class="card-body">
                                                <?= $c2['categories'] ?>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>


                                </div>

                            <?php endforeach; ?>
                        </div>

                        <!-- 篩選二 -->
                        <div class="btn-datepicker my-3">
                            <div class="input-group">
                                <!-- <span class="input-group-addon col-2 p-0 m-auto text-center">
                                <i class="fas fa-calendar-alt"></i>
                            </span> -->
                                <input type="text" class="col-12" readonly="readonly" placeholder="篩選活動日期">
                                <input type="date" class="w-100">
                            </div>
                        </div>


                        <!-- 篩選三 -->
                        <div class="filter-btn card" data-sid="0">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        所有類別
                                    </button>
                                </h2>
                            </div>


                            <!-- cate -->
                            <?php foreach ($cate as $k => $c) : ?>
                                <div class="filter-btn card" data-sid="<?= $c['sid'] ?>">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                <?= $c['categories'] ?>
                                            </button>
                                        </h2>
                                    </div>

                                    <!-- dropdown -->

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                                        <?php foreach ($c['children'] as $c2) : ?>
                                            <div class="card-body">
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
            <div class="col-9">
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
    <script>
        // 前端樣板小卡，先生成一個html的樣板字串格式
        const productTpl = function(a) {
            return `  <div class="card mb-5 col-lg-6 col-md-6 col-sm-12 col-12">
                            <a href="4_product-detail.php?sid=${a.sid}" target="_blank" class="flip-card">
                                <div class="flip-card-inner position-relative">
                                    <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
                                        <img src="imgs/event/${a.picture}.jpg" class="card-img-top" alt="">
                                        
                                        <div class="time position-absolute col-4 p-2">${a.start_datetime}</div>
                                    </div>

                                
                                    <div class="flip-card-back position-absolute p-3">
                                        <div class="filp-title mb-3 text-center">${a.event_name}</div>
                                        <p class="px-3">${a.event_info}</p>
                                    </div>
                                </div>
                            </a>

                            <div class="wrap mt-1 d-flex">
                                <div class="card-body d-flex p-0 w-100">
                                    <div class="card-info position-relative m-auto py-3 col-8">
                                        <div class="event-name mb-3">${a.event_name}</div>

                                        <div class="event-location">${a.location}</div>

                                        <a href="Javascript:" class="like-link position-absolute">
                                            <i class="like far fa-heart"></i>
                                        </a>

                                    </div>

                                
                                    <a href="javascript:showProductModal(${a.sid})" class="card-price py-3 col-4">
                                        <div class=" card-price py-3">
                                            <div class="mb-3">優惠價</div>
                                            <div class="now-price">${a.price}</div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                        </div>`;
        }

        function whenHashChanged() {
            // slice是不要前面的＃
            let u = location.hash.slice(1);
            console.log(u);
            getProductData(u);


            // TBD:改變外觀的事情讓whenhashchange來做

        }

        //事件處理器的event type，也就是這邊的’hashchange‘，全部都小寫，不會有大寫的
        window.addEventListener('hashchange', whenHashChanged);
        whenHashChanged();

        // JQ寫法抓sid，這邊要挪到最上面宣告，因為中間改選tag時會用到
        const cate_btns = $('.filter-btn');
        cate_btns.on('click', function(event) {
            const sid = $(this).attr('data-sid') * 1;
            console.log(`sid: ${sid}`);
            location.href = "#" + sid;

        });

        // 拿資料的function
        function getProductData(cate = 0) {
            $.get('4_productList-filter-api.php', {
                cate: cate
            }, function(data) {
                console.log(data);

                // 呼叫小卡function，它會用回圈設定給出html字串
                let str = '';
                // 這邊的if是為了防止api沒撈到資料，先檢查一下
                if (data.products && data.products.length) {
                    data.products.forEach(function(el) {
                        str += productTpl(el);
                    });
                }

                // 拿到html字串後，再把所有商品串起來
                $('.product-list').html(str);



            }, 'json');
        }

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

        });
    </script>

    <?php include __DIR__ . '/1_parts/4_footer.php'; ?>