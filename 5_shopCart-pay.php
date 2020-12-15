<?php $title = '購物車 選擇付款方式'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php

if (!isset($_SESSION['user'])) {
    $gotoURL = '5_shopCart-list.php';
}

?>
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

<div class="container mt-4">
    <div class="row">
        <!-- 項目標題 -->
        <div class="wrap w-100 text-center my-4">
            <div class="form-title col-lg-2 col-12 m-auto py-2">選擇付款方式</div>
        </div>


        <!-- 信用卡付款 -->
        <a href="javascript:showCollapse()" class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="payway-wrap p-3">
                <div class="inner-wrap">
                    <div class="img-wrap">
                        <img src="./imgs/shopcart/ic-pay.svg" alt="">
                    </div>
                    <div class="text-center my-3">信用卡付款</div>

                </div>
            </div>
        </a>

        <!-- 銀行轉帳付款 -->
        <a href="javascript:showCollapse2()" class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="payway-wrap p-3">
                <div class="inner-wrap">
                    <div class="img-wrap">
                        <img src="./imgs/shopcart/ic-banking.svg" alt="">
                    </div>
                    <div class="text-center my-3">銀行付款</div>

                </div>
            </div>
        </a>

        <!-- 超商ibon付款 -->
        <a href="javascript:showCollapse3()" class="col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="payway-wrap p-3">
                <div class="inner-wrap">
                    <div class="img-wrap">
                        <img src="./imgs/shopcart/ic-7-11.svg" alt="">
                    </div>
                    <div class="text-center my-3">ibon超商付款</div>

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



            <div class="credit-pay" style="display:none">
                <!-- 開始信用卡圖片 -->
                <div class="row justify-content-center">

                    <!-- 信用卡圖片 -->
                    <div class="credit-card container preload  card-body mx-auto col-lg-8 col-md-8 col-sm-10 col-12">
                        <div class="creditcard">
                            <div class="front">
                                <div id="ccsingle"></div>
                                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                    <g id="Front">
                                        <g id="CardBackground">
                                            <g id="Page-1_1_">
                                                <g id="amex_1_">
                                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                                </g>
                                            </g>
                                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                                        </g>
                                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0123 4567 8910 1112</text>
                                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6">JOHN DOE</text>
                                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiration</text>
                                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">card number</text>
                                        <g>
                                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">01/23</text>
                                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALID</text>
                                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">THRU</text>
                                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                                        </g>
                                        <g id="cchip">
                                            <g>
                                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                                            </g>
                                            <g>
                                                <g>
                                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                                </g>
                                                <g>
                                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                                </g>
                                                <g>
                                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                                </g>
                                                <g>
                                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                                </g>
                                                <g>
                                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                    <g id="Back">
                                    </g>
                                </svg>
                            </div>
                            <div class="back">
                                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                                    <g id="Front">
                                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                                    </g>
                                    <g id="Back">
                                        <g id="Page-1_2_">
                                            <g id="amex_2_">
                                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                                            </g>
                                        </g>
                                        <rect y="61.6" class="st2" width="750" height="78" />
                                        <g>
                                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                                        </g>
                                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">985</text>
                                        <g class="st8">
                                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">security code</text>
                                        </g>
                                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13">John Doe</text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- 信用卡資料 -->
                    <!-- 表單開始 -->
                    <form name="form1" onsubmit="checkForm(); return false;" class="col-lg-8 col-md-10 col-sm-12 col-12">

                        <!-- 如果有設定信用卡的話，如果沒有就 -->
                        <?php if (isset($_SESSION['creditcard'])) : ?>
                            <!-- 持卡人姓名 -->
                            <div class="form-group">
                                <label for="name" class="mb-2">
                                    <span class="must-icon">*</span>
                                    持卡人姓名
                                    <span class="must">(必填)</span>
                                </label>

                                <div class=" input-box position-relative">
                                    <input type="text" class="form-control" id="name" placeholder="請填寫持卡人姓名" name="name" value="<?= $_SESSION['creditcard']['name'] ?>">
                                    <!-- 通過icon -->
                                    <i class="fas fa-check-circle position-absolute"></i>
                                    <!-- 不通過icon -->
                                    <i class="fas fa-exclamation-circle position-absolute"></i>
                                    <!-- 姓名驗證 -->
                                    <small class="form-text mt-2">* 請輸入正確持卡人姓名</small>
                                </div>
                            </div>

                            <!-- 卡片號碼 -->
                            <div class="form-group">
                                <label for="credit-number">
                                    <span class="must-icon">*</span>
                                    卡片號碼
                                    <span class="must">(必填)</span>
                                </label>

                                <div class=" input-box position-relative">
                                    <span id="generatecard">random chose card</span>
                                    <input type="text" class="form-control" id="credit-number" placeholder="請填寫信用卡號碼" name="credit-number" value="<?= $_SESSION['creditcard']['credit-number'] ?>">
                                    <!-- svg圖案 -->
                                    <svg id="ccicon" class="ccicon position-absolute" width="100" height="50" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>

                                    <!-- 通過icon -->
                                    <!-- <i class="fas fa-check-circle  position-absolute"></i> -->
                                    <!-- 不通過icon -->
                                    <!-- <i class="fas fa-exclamation-circle  position-absolute"></i> -->
                                    <!-- 卡片號碼驗證 -->
                                    <small class="form-text mt-2">* 請輸入正確卡片號碼</small>
                                </div>
                            </div>

                            <!-- 有效年月 -->
                            <div class="form-group">
                                <label for="valid-date" class="mb-2">
                                    <span class="must-icon">*</span>
                                    有效年月
                                    <span class="must">(必填)</span>
                                </label>
                                <div class=" input-box position-relative">
                                    <input type="text" class="form-control" id="valid-date" placeholder="請輸入有效年月" name="valid-date" value="<?= $_SESSION['creditcard']['valid-date'] ?>">

                                    <!-- 通過icon -->
                                    <i class="fas fa-check-circle position-absolute"></i>
                                    <!-- 不通過icon -->
                                    <i class="fas fa-exclamation-circle position-absolute"></i>
                                    <!-- 有效年月驗證 -->
                                    <small class="form-text" class="r-pin mt-2">* 請輸入有效年月</small>
                                </div>
                            </div>

                            <!-- 驗證碼 -->
                            <div class="form-group">
                                <label for="security-number" class="mb-2">
                                    <span class="must-icon">*</span>
                                    驗證碼
                                    <span class="must">(必填)</span>
                                </label>
                                <div class=" input-box position-relative">
                                    <input type=" text" class="form-control" id="security-number" placeholder="請輸入信用卡驗證碼" name="security-number" value="<?= $_SESSION['creditcard']['security-number'] ?>">

                                    <!-- 通過icon -->
                                    <i class="fas fa-check-circle position-absolute"></i>
                                    <!-- 不通過icon -->
                                    <i class="fas fa-exclamation-circle position-absolute"></i>
                                    <!-- 電話驗證 -->
                                    <small class="form-text" class="r-pin mt-2">* 請輸入正確電話</small>
                                </div>
                            </div>

                        <?php else : ?>
                            <!-- 持卡人姓名 -->
                            <div class="form-group">
                                <label for="name" class="mb-2">
                                    <span class="must-icon">*</span>
                                    持卡人姓名
                                    <span class="must">(必填)</span>
                                </label>

                                <div class="input-box position-relative">
                                    <input type="text" class="form-control" id="name" placeholder="請填寫持卡人姓名" name="name" value="">
                                    <!-- 通過icon -->
                                    <i class="fas fa-check-circle position-absolute"></i>
                                    <!-- 不通過icon -->
                                    <i class="fas fa-exclamation-circle position-absolute"></i>
                                    <!-- 姓名驗證 -->
                                    <small class="form-text mt-2">* 請輸入正確持卡人姓名</small>
                                </div>
                            </div>

                            <!-- 卡片號碼 -->
                            <div class="form-group">
                                <label for="credit-number">
                                    <span class="must-icon">*</span>
                                    卡片號碼
                                    <span class="must">(必填)</span>
                                </label>

                                <div class=" input-box position-relative">
                                    <span id="generatecard">generate random</span>
                                    <input type="text" class="form-control" id="credit-number" placeholder="請填寫信用卡號碼" name="credit-number" value="">
                                    <!-- svg圖案 -->
                                    <svg id="ccicon" class="ccicon position-absolute" width="100" height="50" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"></svg>

                                    <!-- 通過icon -->
                                    <!-- <i class="fas fa-check-circle position-absolute"></i> -->
                                    <!-- 不通過icon -->
                                    <!-- <i class="fas fa-exclamation-circle position-absolute"></i> -->
                                    <!-- 卡片號碼驗證 -->
                                    <small class="form-text mt-2">* 請輸入正確卡片號碼</small>
                                </div>
                            </div>

                            <!-- 有效年月 -->
                            <div class="form-group">
                                <label for="valid-date" class="mb-2">
                                    <span class="must-icon">*</span>
                                    有效年月
                                    <span class="must">(必填)</span>
                                </label>
                                <div class=" input-box position-relative">
                                    <input type="text" class="form-control" id="valid-date" placeholder="請輸入有效年月" name="valid-date" value="">

                                    <!-- 通過icon -->
                                    <i class="fas fa-check-circle position-absolute"></i>
                                    <!-- 不通過icon -->
                                    <i class="fas fa-exclamation-circle position-absolute"></i>
                                    <!-- 有效年月驗證 -->
                                    <small class="form-text" class="r-pin mt-2">* 請輸入有效年月</small>
                                </div>
                            </div>

                            <!-- 驗證碼 -->
                            <div class="form-group">
                                <label for="security-number" class="mb-2">
                                    <span class="must-icon">*</span>
                                    驗證碼
                                    <span class="must">(必填)</span>
                                </label>
                                <div class=" input-box position-relative">
                                    <input type="text" class="form-control" id="security-number" placeholder="請輸入信用卡驗證碼" name="security-number" value="">

                                    <!-- 通過icon -->
                                    <i class="fas fa-check-circle position-absolute"></i>
                                    <!-- 不通過icon -->
                                    <i class="fas fa-exclamation-circle position-absolute"></i>
                                    <!-- 電話驗證 -->
                                    <small class="form-text" class="r-pin mt-2">* 請輸入正確電話</small>
                                </div>
                            </div>


                        <?php endif; ?>


                        <!-- 上一步或送出按鈕 -->
                        <div class="row justify-content-center">
                            <!-- 繼續逛逛 -->
                            <div class="col-6 text-right">
                                <a href="5_shopCart-member-info.php">
                                    <button type="button" class="btn btn-warning btn-before">上一步</button>
                                </a>
                            </div>

                            <!-- 送出 -->
                            <div class="col-6">
                                <button type="submit" class="btn submit btn-info">確認送出</button>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

            <!-- 銀行轉帳付款下拉選單 -->
            <div class="bank-pay" style="display:none">
                <div class="">銀行轉帳</div>
            </div>


            <!-- ibon轉帳付款下拉選單 -->
            <div class="ibon-pay" style="display:none">

                <div class="">ibon轉帳</div>
            </div>


        </div>

    </div>
</div>



<!-- 購物車ＢＧ結尾 -->
</div>
</div>

<!-- Modal -->
<div class="modal" tabindex="-1">
    <div class="modal-dialog h-100">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title col-11 text-center"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div class="img-wrap confirm-mark">
                    <img src="./imgs/shopcart/Exclamation mark.svg" alt="">
                </div>
                <p calss="text-center">你確定要結帳嗎？</p>
            </div>
            <div class="modal-footer m-auto">

                <!-- 按鈕 -->
                <div class="row justify-content-center">
                    <!-- 繼續逛逛 -->
                    <div class="col-6 text-right">
                        <a href="5_shopCart-member-info.php">
                            <button type="button" class="btn btn-warning btn-before" data-dismiss="modal">再看一下</button>
                        </a>
                    </div>

                    <!-- 送出 -->
                    <div class="col-6">
                        <button type="button" onclick="doBuy()" class="btn btn-info">確認結帳</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- 購物車ＢＧ結尾 -->
</div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>

<!-- 引入自己的ＪＳ -->
<script src="./js/5_shopCart-pay.js">

</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>