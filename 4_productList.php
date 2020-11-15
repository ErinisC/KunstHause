<?php $title = '活動列表'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/4_productList.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<div class="bg">

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page">再一個分類</li>
            </ol>
        </nav>
    </div>


    <div class="container-fluid pic">
        <h5>這邊要放圖片輪播</h5>
    </div>

    <!-- 篩選區塊 -->
    <div class="container">
        <div class="row justify-content-between position-relative">
            <div class="filter f1 col-lg-6 col-md-6 col-sm-12 col-12"></div>
            <div class="filter f2 col-lg-5 col-md-5 col-sm-12 col-12"></div>
        </div>
    </div>

    <!-- 本週主打精選 -->
    <div class="container week">
        <div class="row"></div>
    </div>

    <!-- 商品列表 -->
    <div class="container list">
        <div class="pd-title py-5">精選活動</div>
        <div class="row">

            <!-- 小卡 -->
            <div class="card mb-5 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="img-wrap mb-3 position-relative">
                    <img src="" class="card-img-top" alt="">
                    <div class="time position-absolute col-4">這裡放時間</div>
                </div>

                <!-- 小卡下方票價 -->
                <div class="wrap d-flex">
                    <div class="card-body d-flex p-0">
                        <div class="card-info m-auto py-3 col-8">
                            <div class="event-name mb-3">台北藝文活動展覽</div>
                            <div class="event-location">地點：台北市</div>
                        </div>
                        <div class="card-price py-3 col-4">
                            <div class="origin-price mb-3 position-relative">
                                <hr class="position-absolute">原價$ 450</div>
                            <div class="now-price">優惠價$ 300</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 小卡 -->


            <!-- 小卡 -->


            <!-- 小卡 -->


        </div>

    </div>


    <!-- 頁碼 -->
    <div class="container mb-5">
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>

        </div>
    </div>

    <!-- 推薦商品 -->
    <div class="container">
        <div class="pd-title py-5">我們為你推薦</div>
    </div>

    <!-- 小推薦商品 -->
    <div class="container-fluid">
        <div class="row m-0 p-0 col-12">
            <!-- 小卡 -->
            <div class="card card-sm mb-5 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-wrap mb-3 position-relative">
                    <img src="" class="card-img-top" alt="">
                    <div class="time position-absolute col-4">這裡放時間</div>
                </div>

                <!-- 小卡下方票價 -->
                <div class="wrap d-flex">
                    <div class="card-body d-flex p-0">
                        <div class="card-info m-auto py-3 col-8">
                            <div class="event-name mb-3">台北藝文活動展覽</div>
                            <div class="event-location">地點：台北市</div>
                        </div>
                        <div class="card-price py-3 col-4">
                            <div class="origin-price mb-3 position-relative">
                                <hr class="position-absolute">原價$ 450</div>
                            <div class="now-price">優惠價$ 300</div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- 蓋板彈跳 Modal -->
    <div id="cartWrap" class="shopping-cart-wrap position-fixed">

        <div class="shop-cart-content position-fixed position-relative col-lg-4 col-md-7 col-sm-10 col-10">

            <button class="btn-close position-absolute">
                <i class="fas fa-times text-white"></i>
            </button>

            <div class="content-wrap p-5 h-100">
                <div class="right-pic">
                    <img src="" alt="">

                </div>

                <!-- 左邊資訊區 -->
                <div class="left-info d-flex flex-column justify-content-around">

                    <div class="info-out text-center">
                        <h2 class="product-name">法國黑麥長卷麵包</h2>
                        <div class="card-info bread text-center my-3 text-dark">
                            四周位元同一一切都是因為代理把你花蓮，農業代理蓮
                        </div>
                    </div>

                    <div class="cost text-center">
                        200
                    </div>

                    <!-- 數量加減區塊 -->
                    <div class="number-wrap">
                        <div class="">數量</div>
                        <div class="input-wrap">
                            <div class="input-group  justify-content-between">
                                <span class="minus"><button><i class="fas fa-minus"></i></button></span>

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
                        <button class="w-100">立刻購買</button>
                    </div>
                </div>

            </div>


        </div>




    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->

<script>
    ///彈出購物車視窗

    $('.card-price').on('click', function() {
        console.log('hi')
        $('#cartWrap').css('display', 'block')
    })

    $('.btn-close').on('click', function() {
        $('#cartWrap').css('display', 'none')
    })

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




    // 購物車小窗彈出
    $('.fa-shopping-cart').on('click', function() {
        $('.shop-box-wrap').toggle()

    })
</script>


<?php include __DIR__ . '/1_parts/4_footer.php'; ?>