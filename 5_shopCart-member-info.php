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

    <!-- 訂單下拉式明細 -->
    <div class="wrap wrap text-center">
        <!-- 按鈕 -->
        <p>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                訂單明細
            </button>
        </p>

        <!-- 下面收合的選單 -->
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
            </div>
        </div>

    </div>

    <!-- 表單區塊 -->
    <div class="row justify-content-center">
        <!-- 表單開始 -->
        <form name="form1" onsubmit="checkForm(); return false;" class="col-lg-8 col-md-10 col-sm-12 col-12">

            <!-- 項目標題 -->
            <div class="wrap w-100 text-center my-4">
                <div class="form-title col-6 m-auto py-2">顧客資訊</div>
            </div>


            <!-- 訂購人姓名 -->
            <div class="form-group">
                <label for="name">訂購人姓名 (必填)</label>
                <div class="input-box">
                    <input type="text" class="form-control" id="name" placeholder="請填寫真實姓名" name="name">
                    <!-- 姓名驗證 -->
                    <small class="form-text">驗證</small>
                </div>
            </div>

            <!-- 信箱 -->
            <div class="form-group">
                <label for="email">電子信箱email</label>
                <div class="input-box">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="請填寫email信箱">
                    <!-- 信箱驗證 -->
                    <small id="emailHelp" class="form-text text-muted">驗證</small>
                </div>
            </div>

            <!-- 電話 -->
            <div class="form-group">
                <label for="phone">聯絡電話</label>
                <div class="input-box">
                    <input type=" text" class="form-control" id="phone" placeholder="請輸入您的手機號碼" name="phone">
                    <!-- 電話驗證 -->
                    <small class="form-text" class="r-pin">驗證</small>
                </div>
            </div>

            <!-- 項目標題 -->
            <div class="wrap w-100 text-center my-4">
                <div class="form-title col-6 m-auto py-2">電子發票</div>
            </div>

            <!-- 三聯發票抬頭 -->
            <div class="form-group">
                <label for="company">三聯發票抬頭</label>
                <div class="input-box">
                    <input type="text" class="form-control" id="company" placeholder="三聯發票抬頭" name="company">
                    <!--抬頭驗證 -->
                    <small class="form-text">驗證</small>
                </div>
            </div>

            <!-- 統一編號 -->
            <div class="form-group">
                <label for="tax-id-number">統一編號</label>
                <div class="input-box">
                    <input type="text" class="form-control" id="tax-id-number" placeholder="統一編號" name="tax-id-number">
                    <!-- 統一編號驗證 -->
                    <small class="form-text">驗證</small>
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


<!-- 購物車ＢＧ結尾 -->
</div>
</div>
<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    // header不要fixed
    $('header').removeClass('position-fixed');

    // 傳送表單

    function checkForm() {
        $.post('5_shopCart-member-info-api.php', $(document.form1).serialize(), function(data) {
            console.log(data)

        }, 'json')

    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>