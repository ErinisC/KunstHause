<?php $title = '購物車 選擇付款方式'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入ShopCart BG 的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-bg.css">
<!-- 引入自己購物車清單的ＣＳＳ -->
<link rel="stylesheet" href="./css/5_shopCart-pay.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<!-- 引入購物車BG -->
<?php include __DIR__ . '/5_shopCart-bg-and-nv.php'; ?>


<!-- 內容開始 -->

<div class="container my-4">
    <div class="row">
        <!-- 項目標題 -->
        <div class="wrap w-100 text-center my-4">
            <div class="form-title col-6 m-auto py-2">選擇付款方式</div>
        </div>


        <!-- 信用卡付款 -->
        <a href="javascript:showCollapse()" class="col-4">
            <div class="payway-wrap p-3">
                <div class="inner-wrap">
                    <div class="img-wrap">
                        <img src="" alt="">
                    </div>
                    <div class="text-center my-3">信用卡付款</div>
                    <div class="input-group-text">
                        <input type="radio" class="m-auto" aria-label="Radio button for following text input">
                    </div>
                </div>
            </div>
        </a>

        <!-- 銀行轉帳付款 -->
        <a href="javascript:showCollapse2()" class="col-4">
            <div class="payway-wrap p-3">
                <div class="inner-wrap">
                    <div class="img-wrap">
                        <img src="" alt="">
                    </div>
                    <div class="text-center my-3">銀行付款</div>
                    <div class="input-group-text">
                        <input type="radio" class="m-auto" aria-label="Radio button for following text input">
                    </div>
                </div>
            </div>
        </a>

        <!-- 超商ibon付款 -->
        <a href="javascript:showCollapse3()" class="col-4">
            <div class="payway-wrap p-3">
                <div class="inner-wrap">
                    <div class="img-wrap">
                        <img src="" alt="">
                    </div>
                    <div class="text-center my-3">信用卡付款</div>
                    <div class="input-group-text">
                        <input type="radio" class="m-auto" aria-label="Radio button for following text input">
                    </div>
                </div>
            </div>
        </a>

    </div>
</div>



<!-- 下拉選單 -->
<div class="container my-4">
    <div class="row">
        <div class="col-12 p-0 m-auto">
            <!-- 下拉式選單呈現區塊 -->
            <!-- <div class="wrap"> -->
            <!-- 信用卡付款下拉選單 -->
            <!-- <div class="col">
                    <div class="collapse multi-collapse" id="credit-pay">


                    </div>
                </div> -->

            <!-- 銀行轉帳付款下拉選單 -->
            <!-- <div class="col">
                    <div class="collapse multi-collapse" id="bank-pay">
                        <div class="card card-body col-8">
                            銀行付款
                        </div>
                    </div>
                </div> -->

            <!-- 超商條碼付款下拉選單 -->
            <!-- <div class="col">
                    <div class="collapse multi-collapse" id="ibon-pay">
                        <div class="card card-body">
                            超商條碼付款
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->


            <div class="test" style="display:none">
                <!-- 開始信用卡圖片 -->
                <div class="row">
                    <!-- 信用卡圖片 -->
                    <div class="card card-body m-auto col-4">
                        <img src="" alt="">
                        <div class="img-wrap">

                        </div>
                    </div>

                    <!-- 信用卡資料 -->
                    <!-- 表單開始 -->
                    <form name="form1" onsubmit="checkForm(); return false;" class="col-lg-8 col-md-10 col-sm-12 col-12">

                        <!-- 項目標題 -->
                        <div class="wrap w-100 text-center my-4">
                            <div class="form-title col-6 m-auto py-2">信用卡資訊</div>
                        </div>

                        <!-- 持卡人姓名 -->
                        <div class="form-group">
                            <label for="name">持卡人姓名 (必填)</label>
                            <div class="input-box">
                                <input type="text" class="form-control" id="name" placeholder="請填寫持卡人姓名" name="name">
                                <!-- 姓名驗證 -->
                                <small class="form-text">驗證</small>
                            </div>
                        </div>

                        <!-- 卡片號碼 -->
                        <div class="form-group">
                            <label for="credit-number">卡片號碼</label>
                            <div class="input-box">
                                <input type="text" class="form-control" id="credit-number" placeholder="請填寫信用卡號碼">
                                <!-- 信箱驗證 -->
                                <small id="credit-number" class="form-text text-muted">驗證</small>
                            </div>
                        </div>

                        <!-- 有效年月 -->
                        <div class="form-group">
                            <label for="valid-date"">有效年月</label>
                                    <div class=" input-box">
                                <input type="text" class="form-control" id="valid-date" placeholder="請輸入有效年月" name="valid-date">
                                <!-- 有效年月驗證 -->
                                <small class="form-text" class="r-pin">驗證</small>
                        </div>
                </div>



                <!-- 驗證碼 -->
                <div class="form-group">
                    <label for="security-number">驗證碼</label>
                    <div class="input-box">
                        <input type=" text" class="form-control" id="security-number" placeholder="請輸入信用卡驗證碼" name="security-number">
                        <!-- 電話驗證 -->
                        <small class="form-text" class="r-pin">驗證</small>
                    </div>
                </div>

                <!-- 上一步或送出按鈕 -->
                <div class="row justify-content-center">
                    <!-- 上一步 -->
                    <a href="5_shopCart-list.php" role="button" class="btn previous-step">上一步</a>

                    <!-- 送出 -->
                    <button type="submit" class="btn submit btn-info">確認送出</button>

                </div>

                </form>
            </div>

        </div>



    </div>
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

    // 秀出信用卡付款資料表
    function showCollapse() {
        $('.test').slideDown();

        // $('#credit-pay').collapse('show')
        // $('#bank-pay').collapse('hide')
        // $('#ibon-pay').collapse('hide')
    }

    function showCollapse2() {
        $('#bank-pay').collapse('show')
        $('#ibon-pay').collapse('hide')
        $('#credit-pay').collapse('hide')
    }

    function showCollapse3() {
        $('#ibon-pay').collapse('show')
        $('#bank-pay').collapse('hide')
        $('#credit-pay').collapse('hide')
    }

    // 信用卡資訊送進sessio  ＪＳ
    // 傳送表單

    function checkForm() {


    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>