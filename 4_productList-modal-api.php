<?php
include __DIR__ . '/1_parts/0_config.php';


if (!isset($_GET['sid'])) {
    header('Location:4_productList.php');
    exit;
}

$sid = intval($_GET['sid']);
$sql = "SELECT * FROM products WHERE sid=$sid";
// 只有一筆就不要fetchAll，改用fetch
$row = $pdo->query($sql)->fetch();

if (empty($row)) {
    header('Location:4_productList.php');
    exit;
}

// echo json_encode($row, JSON_UNESCAPED_UNICODE);
// exit;

?>


<!-- 引head -->
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<style>
    /* 蓋板彈跳窗格 */
    #cartWrap {
        display: none;
        width: 100%;
        height: 100%;
        z-index: 51;
        top: 0;
        left: 0;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);

    }

    .shop-cart-content {
        top: 25%;
        left: 35%;
        background-color: #fff;
    }

    .btn-close {
        width: 50px;
        height: 50px;
        background-color: #000;
        top: 0;
        right: 0;
        z-index: 1;
    }

    /* 圖片 */
    .right-pic {
        height: 200px;
    }


    .right-pic img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    /* 活動資訊區 */
    .btn-wrap {
        background-color: #000;
    }

    .btn-wrap button {
        color: white;
        background-color: #000;
    }

    .cost::before {
        content: '$';
    }

    .cost::after {
        content: '元';
    }
</style>


<!-- 中間小卡內容 -->
<div class="content-wrap product-item" data-sid="<?= $row['sid'] ?>">
    <!-- 圖片 -->
    <div class="right-pic mb-3">
        <img src="imgs/event/<?= $row['picture'] ?>.jpg" alt="">
    </div>

    <!-- 活動資訊區 -->
    <div class="left-info d-flex flex-column justify-content-around">

        <div class="info-out text-center">
            <h2 class="product-name">
                <?= $row['event_name'] ?>
            </h2>

            <div class="card-info bread text-center my-3 text-dark">
                活動日期放這邊
            </div>
        </div>

        <div class="cost text-center">
            <?= $row['price'] ?>
        </div>

        <!-- 數量加減區塊 -->
        <div class="number-wrap">
            <div class="">數量</div>
            <div class="input-wrap">
                <div class="input-group  justify-content-between">
                    <span class="minus"><button><i class="fas fa-minus"></i></button></span>

                    <!-- 中間數量 -->
                    <input type="text" id='product-quantity' class="col-9" value="1">

                    <span class="add"><button><i class="fas fa-plus"></i></button></span>
                </div>
            </div>
        </div>

        <!-- 總金額區塊 -->
        <div class="total-wrap mt-2">
            <div class="total">總金額</div>
            <div class="input-group ml-3">
                <span class="mr-3"><i class="fas fa-dollar-sign"></i></span>
                <input type="text" id="total-cost">
            </div>
        </div>

        <!-- 立刻購買按鈕 -->
        <div class="btn-wrap mt-2">
            <button class="buy-btn w-100">立刻購買</button>
        </div>

    </div>
</div>

<!-- JS -->
<script>
    // 數量增減
    let productQuantity = +$('#product-quantity').val();
    let cost = $('.cost').text()
    $('#total-cost').val(cost * productQuantity)

    $('.add').on('click', function() {
        productQuantity += 1;
        cost = $('.cost').text()


        $('#product-quantity').val(productQuantity)
        $('#total-cost').val(cost * productQuantity)
    })

    // 按鈕減少數量
    $('.minus').on('click', function() {
        productQuantity -= 1;
        cost = $('.cost').text()
        $('#product-quantity').val(productQuantity)
        $('#total-cost').val(cost * productQuantity)
    })


    // 購物車nav小窗彈出， 白色大區塊消失
    $('.buy-btn').on('click', function() {
        window.parent.$('#exampleModal').modal('hide');
        window.parent.$('.shopping-cart').click();

        // $('window.parent.cart-nav').addClass('show')
        // $('window.parent.body').addClass('modal-open')

        // setTimeout(function() {
        //     window.parent.$('.cart-nav-big').toggle();
        // }, 2000);


    });

    // 準備串接購物車，先看能不能正確抓到商品sid跟數量
    $('.buy-btn').on('click', function() {
        // 先往上找到小卡
        const item = $(this).closest('.content-wrap');
        //再找到這個item的屬性，就能抓到設定給它的data-sid的值
        const sid = item.attr('data-sid');
        //接著再往item裡面找，找到數量，再取他的val來拿到數量的值
        const qty = item.find('#product-quantity').val();

        console.log({
            sid: sid,
            quantity: qty
        });
        // 現在要丟ajx給購物車api
        $.get('4_productList-shopcart-api.php', {
                sid: sid,
                quantity: qty,
                action: 'add'
            },
            function(data) {
                console.log(data);
            }, 'json')

    });
</script>