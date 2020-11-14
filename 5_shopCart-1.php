<?php $title = '購物車清單'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-1.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- 內容開始 -->

<div class="container form-bg mt-5 py-4 col-lg-8 col-md-8 col-sm-11 col-11">
    <!-- 購物車nav-bar -->
    <div class="row justify-content-center m-0 p-0">
        <div class="shop-nav-wrap d-flex justify-content-between px-0 pb-2 col-lg-8 col-md-8 col-sm-12 col-12">

            <!-- 三個小圖示-1 -->
            <div class="progress-bar-section">
                <div class="img-wrap"></div>
                <img src="" alt="">
                <p>活動清單</p>
            </div>

            <!-- 三個小圖示-2 -->
            <div class="progress-bar-section non-active">
                <div class="img-wrap"></div>
                <img src="" alt="">
                <p>填資料</p>
            </div>

            <!-- 三個小圖示-3 -->
            <div class="progress-bar-section non-active">
                <div class="img-wrap"></div>
                <img src="" alt="">
                <p>選付款</p>
            </div>
        </div>
    </div>
</div>

<!-- 購物車清單 -->
<div class="row col-10">
    <div class="shop-list">



    </div>
</div>

<!-- 購物車訂單結帳資訊框 -->
<div class="row col-4">
    <div class="shop-total-list">


    </div>
</div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>