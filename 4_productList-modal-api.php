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
    * {
        overflow: hidden;
    }

    html {
        font-size: 16px;
        line-height: 1.5;
        letter-spacing: 2px;
        font-family: "Noto Sans TC", sans-serif;
        font-family: "Roboto", sans-serif;
    }

    h1 {
        font-size: 1.4rem;
        line-height: 1.5;
        font-weight: 500;
    }

    button:focus {
        outline: 3px solid #ffc024;
    }

    a {
        color: black;
    }

    a:hover {
        text-decoration: none;
        color: black;
    }

    textarea:focus,
    input:focus {
        outline: 2px solid #168fa4;
        color: black !important;
    }

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
        height: 300px;
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
        content: '單張票價：$ ';
    }

    .cost::after {
        content: '元';
    }

    .dollar-icon,
    #total-cost {
        color: #168FA4;
    }

    @media screen and (max-width: 576px) {
        html {
            font-size: 12px;
        }

        .right-pic {
            height: 140px;
        }

        .right-pic img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
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

        <div class="info-out">
            <h1 class="product-name text-center">
                <?= $row['event_name'] ?>
            </h1>

            <div class="d-flex card-info m-3 align-items-center">
                <i class="far fa-clock mr-2"></i>
                活動日期： <?= $row['start_datetime'] ?>
            </div>
        </div>

        <div class="cost d-flex card-info mx-3 align-items-center">
            <?= $row['price'] ?>
        </div>

        <!-- 數量加減區塊 -->
        <div class="number-wrap mt-5">
            <div class="mb-3">數量</div>
            <div class="input-wrap">
                <div class="input-group  justify-content-between">
                    <span class="minus">
                        <button class="btn btn-info">
                            <i class="fas fa-minus"></i>
                        </button>
                    </span>

                    <!-- 中間數量 -->
                    <input type="text" id='product-quantity' class="text-center col-9" value="1">

                    <span class="add">
                        <button class="btn btn-info">
                            <i class="fas fa-plus"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <!-- 總金額區塊 -->
        <div class="total-wrap my-4">
            <div class="d-flex total align-items-center">總金額

                <span class="mx-2 dollar-icon">
                    <i class="fas fa-dollar-sign"></i>
                </span>
                <h1 type="text" id="total-cost"></h1>
            </div>

        </div>

        <!-- 立刻購買按鈕 -->
        <button class="btn buy-btn btn-info">立刻購買</button>


    </div>
</div>

<!-- JS -->
<script>
    // 數量增減
    let productQuantity = +$('#product-quantity').val();
    let cost = $('.cost').text()
    $('#total-cost').text(cost * productQuantity)

    $('.add').on('click', function() {
        productQuantity += 1;
        cost = $('.cost').text()


        $('#product-quantity').val(productQuantity)
        $('#total-cost').text(cost * productQuantity)
    })

    // 按鈕減少數量
    $('.minus').on('click', function() {
        productQuantity -= 1;
        cost = $('.cost').text()
        $('#product-quantity').val(productQuantity)
        $('#total-cost').text(cost * productQuantity)
    })


    // 購物車nav小窗彈出， 白色大區塊消失
    $('.buy-btn').on('click', function() {
        window.parent.$('#exampleModal').modal('hide');
        window.parent.$('.cartnav-dropdown').toggle();
        // 先移除購物車空空的alert
        window.parent.$('.alert').css('display', 'none');
        window.parent.$('.pay-btn').css('display', 'block');
        // 小版時要跳出小版navbar的畫面，但大版時消不掉！！！
        // window.parent.$('.cart-nav-small').toggle();


        // $('window.parent.cart-nav').addClass('show')
        // $('window.parent.body').addClass('modal-open')

        // setTimeout(function() {
        //     window.parent.$('.cart-nav-big').toggle();
        // }, 2000);

        // 準備串接購物車，先看能不能正確抓到商品sid跟數量
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
                if (window.parent && window.parent.smallCartInit) {
                    window.parent.smallCartInit();
                }

            }, 'json')

    });


    // $('.buy-btn').on('click', function() {


    // });
</script>