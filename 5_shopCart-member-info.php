<?php $title = '購物車-填寫資料'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入ShopCart BG 的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-bg.css">
<!-- 引入自己購物車清單的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-member-info.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<!-- 引入購物車BG -->
<?php include __DIR__ . '/5_shopCart-bg-and-nv.php'; ?>


<!-- 內容開始 -->
<div class="container my-5">
    <div class="row justify-content-center">
        <form class="col-8">
            <!-- 姓名 -->
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" class="form-control" id="name">
                <!-- 驗證 -->
                <small id="name" class="form-text text-muted">請輸入正確資訊</small>
            </div>

            <!-- email -->
            <div class="form-group">

                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <!-- email驗證 -->
                <small id="emailHelp" class="form-text text-muted">請輸入正確資訊</small>
            </div>

            <!-- 電話號碼 -->
            <div class="form-group">
                <label for="mobile">電話號碼</label>
                <input type="text" class="form-control" id="mobile">
                <!-- 驗證 -->
                <small id="mobile" class="form-text text-muted">請輸入正確資訊</small>
            </div>

            <!-- 密碼 -->
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>



            <div class="row justify-content-center">
                <!-- 上一步或送出按鈕 -->
                <!-- 上一步 -->
                <a href="5_shopCart-list.php">
                    <button type="button" class="btn btn-warning mr-3">上一步</button>
                </a>

                <!-- 送出 -->
                <button type="submit" class="btn btn-primary">確認送出</button>

            </div>
        </form>

    </div>
</div>


<!-- 購物車ＢＧ結尾 -->
</div>
</div>
<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    // header不要fixed
    $('header').removeClass('position-fixed');
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>