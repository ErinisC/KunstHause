<?php $title = '購物車清單'; ?>

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
<link rel="stylesheet" href="./css/5_shopCart-list.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<!-- 引入購物車BG -->
<?php include __DIR__ . '/5_shopCart-bg-and-nv.php'; ?>


<!-- 內容開始 -->
<div class="container mt-5">
    <div class="row">

        <!-- 先判斷購物車內有沒有東西 -->
        <?php if (empty($_SESSION['cart'])) : ?>
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

                <div class="alert alert-primary" role="alert">
                    你的購物車空空如也～
                </div>

                <!-- 回商品列表按鈕 -->
                <a href="4_productList.php">
                    <button type="button" class="btn btn-info">來去逛逛</button>
                </a>

            </section>

        <?php else : ?>

            <!-- 購物車資料框 -->
            <section class="shopping-list mx-auto col-lg-9 col-md-12 col-sm-12 col-12">
                <!-- 上面的總品項名稱 -->
                <div class="row shop-item-title w-100 mx-0 pb-3 mb-3">
                    <ul class="d-flex w-100 list-unstyled text-center">
                        <li class="col-3">活動</li>
                        <li class="col-3"></li>
                        <li class="col-3">數量</li>
                        <li class="col-2">小計</li>
                        <li class="col-1"></li>
                    </ul>
                </div>

                <!-- 下方商品欄位一 -->
                <?php foreach ($_SESSION['cart'] as $i) : ?>

                    <div id="prod<?= $i['sid'] ?>" data-sid="<?= $i['sid'] ?>" class="product-item row item mx-0 py-3 text-center">
                        <ul class="w-100 list-unstyled justify-content-between align-items-center">
                            <!-- 活動 -->
                            <li class="d-flex p-0 align-items-center col-lg-6 col-md-6 col-sm-12 col-12">

                                <!-- 圖片 -->
                                <div class="img-wrap p-0 col-4">
                                    <img src="imgs/event/<?= $i['picture'] ?>.jpg" alt="">
                                </div>
                                <div class="info-wrap w-100 px-3 d-flex flex-column text-left justify-content-around">

                                    <!-- 活動名稱 -->
                                    <div class="event-title">
                                        <?= $i['event_name'] ?>
                                    </div>

                                    <!-- 活動日期 -->
                                    <div class="my-3">
                                        日期： <?= $i['start-datetime'] ?>
                                    </div>

                                    <!-- 活動價格 -->
                                    <div class="price" data-price="<?= $i['price'] ?>">
                                        單張票價： $ <?= $i['price'] ?>
                                    </div>
                                </div>

                            </li>
                            <!-- 數量 -->
                            <li class="p-0 col-lg-3 col-md-2 col-sm-10 col-10">
                                <!-- 數量加減區塊 -->
                                <div class="number-wrap d-flex p-0 align-items-center justify-content-center">
                                    <div class="minus col-2 p-0">
                                        <i class="fas fa-minus"></i>
                                    </div>


                                    <input data-quantity="<?= $i['quantity'] ?>" type="text" class="quantity mx-2 p-0 text-center col-3" value="<?= $i['quantity'] ?>">
                                    <div class="add col-2 p-0">
                                        <i class="fas fa-plus"></i>
                                    </div>

                                </div>
                            </li>

                            <!-- 小計 -->
                            <li id="total" class="subtotal col-lg-2 col-md-2 col-sm-6 col-6">
                                0
                            </li>


                            <!-- 刪除按鈕 -->
                            <li class="col-1 p-0">
                                <!-- 用a連結包起來，因為要發Ajax連到api，做刪除項目的動作 -->
                                <a href="javascript:removeItem(<?= $i['sid'] ?>)">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                <?php endforeach; ?>


            </section>

            <!-- 總計明細框框 -->
            <div class="container p-0 mt-3 col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="wrap">
                    <div class="shopcart-total p-3 text-white d-flex flex-column justify-content-between">
                        <div class="title">訂單資訊</div>

                        <!-- 小計 -->
                        <div class="wrap d-flex justify-content-between">
                            <p>小計</p>
                            <p id="totalAmount">$</p>
                        </div>

                        <!-- 使用優惠代碼 -->
                        <div class="wrap">
                            <p>使用優惠代碼</p>
                            <!-- 按鈕 -->
                            <div class="input-group my-2">
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <button class="input-group-text" id="basic-addon2">輸入</button>
                                </div>
                            </div>
                            <!-- 驗證 -->
                            <p>＊優惠券不存在</p>
                        </div>
                        <!-- 分隔線 -->
                        <div class="line w-100"></div>
                        <!-- 優惠券折扣 -->
                        <div class="wrap d-flex justify-content-between">
                            <p>優惠券折扣</p>
                            <p id="discount">200</p>
                        </div>
                        <!-- 總計 -->
                        <div class="wrap d-flex justify-content-between">
                            <p>總計</p>
                            <p id="allTotal">$1,000</p>
                        </div>
                    </div>

                </div>
            </div>


            <!-- 上一步下一步按鈕 -->
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <!-- 繼續逛逛 -->
                    <div class="col-6 text-right">
                        <a href="4_productList.php">
                            <button type="button" class="btn btn-warning btn-before">繼續逛逛</button>
                        </a>
                    </div>



                    <?php if (isset($_SESSION['user'])) : ?>
                        <!-- 下一步按鈕 -->
                        <div class="col-6">
                            <a href="5_shopCart-member-info.php">
                                <button type="button" class="btn btn-info">下一步</button>
                            </a>
                        </div>

                    <?php else : ?>
                        <div class="col-6">
                            <a href="1_member-login.php">
                                <button type="button" class="btn btn-info">請先登入</button>
                            </a>
                        </div>

                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>


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


    // 數量增減
    $('.add').on('click', function() {
        let q = $(this).prev().val();
        q = q * 1 + 1;
        $(this).prev().val(q);
        $(this).prev().attr('value', q);
        // $(this).prev().attr('data-quantity', q);

    })

    // 按鈕減少數量
    $('.minus').on('click', function() {
        let q = $(this).next().val();
        q = q * 1 - 1;
        $(this).next().val(q);
        $(this).next().attr('value', q);
        // $(this).next().attr('data-quantity', q);
    })

    // 移除
    function removeItem(sid) {
        $.get('4_productList-shopcart-api.php', {
            sid: sid,
            action: 'remove'
        }, function(data) {
            // 上面navbar的購物車數量要變
            countCart(data.cart);
            // 購物車清單的列要移除
            $('div#prod' + sid).remove();

        }, 'json')
    }


    //計算全部總計金額
    function calcTotal() {
        let total = 0;
        // 調整數量時連動資料庫
        $('.product-item').each(function() {
            // 拿到這個項目後
            const ul = $(this);
            // 拿價錢
            const price = parseInt(ul.find('div.price').attr('data-price'));
            // 拿數量
            const quantity = parseInt(ul.find('input.quantity').attr('data-quantity'));
            // console.log(quantity)
            // 算小計，先抓到小計區塊
            const subTotal = ul.find('li.subtotal').text('$' + (price * quantity));
            // 每次小計完就加上金額
            total += price * quantity;
        });
        $('#totalAmount').text('$ ' + total);

        // 扣掉優惠券的總計價格
        const discount = $('#discount').text() * 1;
        $('#allTotal').text('$' + (total - discount));

    };
    calcTotal();


    // 現在要改變數量時，寫進購物車內改數量，再回傳回來
    // 先做加的
    $('.add').on('click', function() {
        // console.log('input.quantity')
        const quantity = $(this).prev().val();
        const sid = $(this).closest('.product-item').attr('data-sid');
        const combo = $(this);
        // 找到這兩個數字後，就發ajx到購物車api那邊
        $.get('4_productList-shopcart-api.php', {
            sid: sid,
            action: 'add',
            quantity: quantity
        }, function(data) {
            console.log(data);
            // 上面navbar的購物車數量要變
            countCart(data.cart);
            // 回來後更改數量 
            combo.prev().attr('data-quantity', quantity);
            // 有變動後再呼叫一次總計
            calcTotal();
        }, 'json')
    });

    // 現在要改變數量時，寫進購物車內改數量，再回傳回來
    // 再做減的
    $('.minus').on('click', function() {
        // console.log('input.quantity')
        const quantity = $(this).next().val();
        const sid = $(this).closest('.product-item').attr('data-sid');
        const combo = $(this);
        // 找到這兩個數字後，就發ajx到購物車api那邊
        $.get('4_productList-shopcart-api.php', {
            sid: sid,
            action: 'add',
            quantity: quantity
        }, function(data) {
            console.log(data);
            // 上面navbar的購物車數量要變
            countCart(data.cart);
            // 回來後更改數量 
            combo.next().attr('data-quantity', quantity);
            // 有變動後再呼叫一次總計
            calcTotal();
        }, 'json')
    });
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>