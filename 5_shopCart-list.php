<?php $title = '購物車清單'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入ShopCart BG 的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-bg.css">
<!-- 引入自己購物車清單的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-list.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<!-- 引入購物車BG -->
<?php include __DIR__ . '/5_shopCart-bg-and-nv.php'; ?>


<!-- 內容開始 -->
<div class="container mt-5">
    <div class="row">

        <!-- 購物車資料框 -->
        <section class="shopping-list mx-auto p-0 col-lg-10 col-md-12 col-sm-12 col-12">
            <!-- 上面的總品項名稱 -->
            <div class="row shop-item-title w-100 mx-0 pb-3 mb-3">
                <ul class="d-flex w-100 list-unstyled text-center">
                    <li class="col-3">活動</li>
                    <li class="col-3"></li>
                    <li class="col-3">數量</li>
                    <li class="col-2">總金額</li>
                    <li class="col-1"></li>
                </ul>
            </div>

            <!-- 下方商品欄位一 -->
            <div class="row item mx-0 py-3 text-center">
                <ul class="w-100 list-unstyled justify-content-between align-items-center">
                    <!-- 活動 -->
                    <li class="d-flex p-0 align-items-center col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="img-wrap p-0 col-4">
                            <img src="" alt="">
                        </div>
                        <div class="info-wrap w-100 px-3 d-flex flex-column text-left justify-content-around">
                            <div class="">AUDIO ARCHITECTURE：聲音的建築展 in 台北</div>
                            <div class="">2021-01-09(六) ~ 2021-01-23(六)</div>
                            <div class="">$ 1200</div>
                        </div>

                    </li>
                    <!-- 數量 -->

                    <li class="p-0 col-lg-3 col-md-3 col-sm-6 col-6">
                        <!-- 數量加減區塊 -->
                        <div class="number-wrap d-flex p-0 align-items-center">
                            <div class="col-2 p-0">
                                <i class="fas fa-minus"></i>
                            </div>

                            <input type="text" class="col-8 text-center" value="1">

                            <div class="col-2 p-0">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                    </li>

                    <!-- 總金額 -->
                    <li id="total" class="money col-lg-2 col-md-2 col-sm-6 col-6">
                        $230
                    </li>
                    <!-- 刪除按鈕 -->
                    <li class="col-1 p-0">
                        <i class="far fa-trash-alt"></i>
                    </li>
                </ul>

            </div>



        </section>


    </div>
</div>



<!-- 購物車ＢＧ結尾 -->
</div>
</div>
<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>