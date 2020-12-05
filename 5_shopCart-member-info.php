<?php $title = '購物車-填寫資料'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php

// 選擇資料庫要的資料表，用count找出總共的幾數
$sql = "SELECT * FROM products";
$stmt = $pdo->query($sql);

// $rows就會等於每一筆抓出的資料
$rows = $stmt->fetchAll();

// echo json_encode($rows);
// exit;

?>


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
        <button class="btn btn-itemlist mb-3  col-lg-8 col-md-10 col-sm-12 col-12" type="button" data-toggle="collapse" data-target="#itemlist" aria-expanded="false" aria-controls="itemlist">
            訂單明細 <i class="fas fa-caret-down"></i>
        </button>

        <!-- 下面收合的選單 -->
        <div class="collapse m-auto p-0  col-lg-8 col-md-10 col-sm-12 col-12" id="itemlist">

            <div class="card">

                <?php foreach ($_SESSION['cart'] as $i) : ?>
                    <div id="prod<?= $i['sid'] ?>" data-sid="<?= $i['sid'] ?>" class="product-item row item mx-0 py-3 text-center">
                        <ul class="w-100 d-flex list-unstyled justify-content-between align-items-center">
                            <!-- 活動 -->
                            <li class="p-0 align-items-center col-3">
                                <!-- 圖片 -->
                                <div class="img-wrap col-8 m-auto">
                                    <img src="imgs/event/<?= $i['picture'] ?>.jpg" alt="">
                                </div>
                            </li>

                            <!-- 資訊 -->
                            <li class="col-6">
                                <div class="info-wrap w-100 px-3 d-flex flex-column text-left justify-content-around">

                                    <!-- 活動名稱 -->
                                    <div class="event-title">
                                        <?= $i['event_name'] ?>
                                    </div>

                                    <!-- 活動日期 -->
                                    <div class="my-3">
                                        <?= $i['start_datetime'] ?>
                                    </div>

                                    <!-- 活動價格 -->
                                    <div class="price" data-price="<?= $i['price'] ?>">
                                        $ <?= $i['price'] ?>
                                    </div>
                                </div>


                            </li>

                            <!-- 數量 -->
                            <li class="p-0 col-2">
                                <div class=""> <?= $i['quantity'] ?> </div>
                            </li>

                            <!-- 小計 -->
                            <li id="total" class="subtotal col-1">
                                0
                            </li>



                        </ul>

                    </div>

                <?php endforeach; ?>
            </div>


        </div>

    </div>

    <!-- 表單區塊 -->
    <div class="row justify-content-center">
        <!-- 表單開始 -->
        <form name="form1" onsubmit="checkForm(); return false;" class="col-lg-8 col-md-10 col-sm-12 col-12">

            <!-- 項目標題 -->
            <div class="wrap w-100 text-center my-4">
                <div class="form-title col-lg-2 col-12 m-auto py-2">顧客資訊</div>
            </div>


            <!-- 訂購人姓名 -->
            <div class="form-group">
                <?php if (isset($_SESSION['user'])) : ?>
                    <label for="name" class="mb-2">
                        <span class="must-icon">*</span>
                        訂購人姓名
                        <span class="must">(必填)</span>
                    </label>
                    <div class="input-box position-relative">
                        <input type="text" class="form-control" id="name" placeholder="請填寫真實姓名" name="name" value="<?= $_SESSION['user']['name'] ?>">
                        <!-- 通過icon -->
                        <i class="fas fa-check-circle position-absolute"></i>
                        <!-- 不通過icon -->
                        <i class="fas fa-exclamation-circle position-absolute"></i>
                        <!-- 姓名驗證 -->
                        <small class="form-text mt-2">* 請輸入訂購者姓名</small>
                    </div>
            </div>

            <!-- 信箱 -->
            <div class="form-group">
                <label for="email" class="mb-2">
                    <span class="must-icon">*</span>
                    電子信箱email
                    <span class="must">(必填)</span>
                </label>
                <div class="input-box position-relative">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="請填寫email信箱" value="<?= $_SESSION['user']['email'] ?>">
                    <!-- 通過icon -->
                    <i class="fas fa-check-circle position-absolute"></i>
                    <!-- 不通過icon -->
                    <i class="fas fa-exclamation-circle position-absolute"></i>
                    <!-- 信箱驗證 -->
                    <small id="emailHelp" class="form-text mt-2">*請輸入正確信箱</small>
                </div>
            </div>

            <!-- 電話 -->
            <div class="form-group">
                <label for="phone" class="mb-2">
                    <span class="must-icon">*</span>
                    聯絡電話
                    <span class="must">(必填)</span>
                </label>
                <div class="input-box position-relative">
                    <input type="text" class="form-control" id="phone" placeholder="請輸入您的手機號碼" name="phone" value="<?= $_SESSION['user']['phone'] ?>">
                    <!-- 通過icon -->
                    <i class="fas fa-check-circle position-absolute"></i>
                    <!-- 不通過icon -->
                    <i class="fas fa-exclamation-circle position-absolute"></i>
                    <!-- 電話驗證 -->
                    <small class="form-text" class="form-text mt-2">*請輸入正確電話/手機</small>
                </div>
            </div>

            <!-- 項目標題 -->
            <div class="wrap w-100 text-center my-4">
                <div class="form-title col-lg-2 col-12 m-auto py-2">電子發票</div>
            </div>

            <!-- 如果有設定三聯發票的話，如果沒有就 -->

            <!-- 三聯發票抬頭 -->
            <div class="form-group">
                <label for="company_name" class="mb-2">三聯發票抬頭</label>
                <div class="input-box position-relative">
                    <input type="text" class="form-control" id="company_name" placeholder="三聯發票抬頭" name="company_name" value="<?= $_SESSION['buy_info']['company_name'] ?? '' ?>">
                    <!--抬頭驗證 -->
                    <small class="form-text">*請輸入正確抬頭</small>
                </div>
            </div>


            <!-- 統一編號 -->
            <div class="form-group">
                <label for="tax-id-number" class="mb-2">統一編號</label>
                <div class="input-box">
                    <input type="text" class="form-control" id="tax-id-number" placeholder="統一編號" name="tax-id-number" value="<?= $_SESSION['buy_info']['tax-id-number'] ?? '' ?>">
                    <!-- 統一編號驗證 -->
                    <small class="form-text">*請輸入正確統編</small>
                </div>
            </div>

        <?php endif; ?>

        <!-- 上一步或送出按鈕 -->
        <div class="row justify-content-center">
            <!-- 繼續逛逛 -->
            <div class="col-6 text-right">
                <a href="5_shopCart-list.php">
                    <button type="button" class="btn btn-warning btn-before">上一步</button>
                </a>
            </div>


            <!-- 送出 -->
            <div class="col-6">
                <button type="submit" class="btn submit btn-info">下一步</button>
            </div>
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


    // 明細表動畫
    $('.btn-itemlist').on('click', function() {
        $(this).find('i').toggleClass('rotate')
    })


    // 傳送表單
    const name = $('#name');
    const email = $('#email');
    const phone = $('#phone');

    const company_name = $('#company_name');
    const tax_number = $('#tax-id-number');


    function checkForm() {
        // 呼叫的時候先清掉其他警告
        $('.input-box').removeClass('success').removeClass('error');
        $('input').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查姓名長度跟email格式
        let isPass = true;


        // 如果拿到的姓名的長度小於2，就不通過
        if (name.val().length < 1) {
            isPass = false;
            name.addClass('error');
            name.closest('.input-box').addClass('error');
        } else {
            name.removeClass('error');
            name.closest('.input-box').removeClass('error');

            name.addClass('success');
            name.closest('.input-box').addClass('success');

            // 傳送表單
            $.post('5_shopCart-member-info-api.php', $(document.form1).serialize(), function(data) {
                console.log(data)
            }, 'json');
            location.href = '5_shopCart-pay.php';

        }






    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>