<?php $title = '購物車 訂單完成'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己購物車清單的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-quit.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>


<!-- 內容開始 -->
<div class="wrap-bg position-relative pb-5">
    <div class="container form-bg mt-5 py-4 col-lg-8 col-md-8 col-sm-11 col-11">

        感謝訂購～～

    </div>
</div>



<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    // header不要fixed
    $('header').removeClass('position-fixed');
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>