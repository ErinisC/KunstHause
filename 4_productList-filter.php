<?php $title = '活動篩選頁'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
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

                    <!-- 篩選一 -->
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        所有商品
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    類別一
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        地區
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    地區類別
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        種類
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    種類類別
                                </div>
                            </div>
                        </div>
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
                </div>
            </div>

            <!-- 產品列表 -->
            <div class="col-9">
                <div class="product-list"></div>
            </div>



        </div>




    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>