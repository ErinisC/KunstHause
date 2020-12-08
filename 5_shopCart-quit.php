<?php $title = 'KunstHaus | 結帳完成'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己購物車清單的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-quit.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>


<!-- 內容開始 -->
<div class="wrap-bg position-relative pb-5">
    <div class="container form-bg mt-5 py-4 col-lg-8 col-md-8 col-sm-11 col-11">
        <div class="success-animation">
            <svg class="checkmark success" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark_circle_success" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark_check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" stroke-linecap="round" /></svg>
        </div>
        <h1 class="show-text text-center">付款成功</h1>
        <p class="order-no text-center">
            訂單編號: 2456344543
        </p>

        <table class="table mx-auto my-5 col-lg-10 col-12">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="2" class="text-center">訂單資料</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>總金額</td>
                    <td class="text-center">$ 2,300 元</td>

                </tr>
                <tr>

                    <td>付款方式</td>
                    <td class="text-center">信用卡付款</td>

                </tr>
                <tr>

                    <td>付款時間</td>
                    <td class="text-center">2020-12-18 10:21</td>

                </tr>
            </tbody>
        </table>


        <!-- 按鈕 -->
        <div class="row justify-content-center">
            <a href="2_member-order.php">
                <button type="button" class="btn btn-warning" data-dismiss="modal">查看我的訂單</button>
            </a>
        </div>

    </div>
</div>



<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    // header不要fixed
    $('header').removeClass('position-fixed');
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>