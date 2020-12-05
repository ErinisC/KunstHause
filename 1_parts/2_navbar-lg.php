<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Noto Sans TC", sans-serif;
        font-family: "Roboto", sans-serif;
        overflow-x: hidden;
    }

    header {
        z-index: 100;
    }

    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 999;
    }

    .sticky+.main {
        padding-top: 102px;
    }

    .navbar {
        background-color: #FFC024;
        border: 3px solid black;
    }


    .nav-item {
        list-style: none;
    }

    .nav-link {
        color: #000;
        font-family: "Noto Sans TC", sans-serif;
        font-size: 16px;
    }

    .nav-link:hover {
        color: #fff;
    }

    .nav-item.active a {
        color: #fff;
    }

    .header-search {
        position: relative;
    }

    .search {
        border: 3px solid #000;
        height: 38px;
    }

    .search:focus {
        border: 3px solid #168FA4;
        background-color: #168FA4;
    }

    textarea:focus,
    input:focus {
        color: #fff;
    }

    .search-icon {
        top: 5px;
        right: 8px;
        position: absolute;
        background: transparent;
        border: none;
        cursor: pointer;
    }

    .dropdown-menu {
        background-color: transparent;

    }

    .dropdown-item {
        float: none;
        color: #000;
        font-size: 16px;
        background-color: #FFC024;
        border: 3px solid #000;
        margin: 2px 0;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-item:hover,
    .one-item:hover {
        background-color: #168FA4;
        color: #fff;
    }

    .dropdown:hover .dropdown-item {
        display: block;
    }


    /* 購物車dropdown視窗框 */
    .cartnav-dropdown {
        display: none;
        top: 65px;
        right: 0;
        min-width: 500px;
        background-color: #FFC026;
        border: 3px solid black;
        z-index: 1;
    }

    .shopcart-dropdown {
        min-height: 260px;

    }

    /* 購物車一列 */
    .one-item {
        border-bottom: 1px solid black;
    }

    /* 隱藏溢出文字 */
    .cartnav-dropdown .title {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* 圖片 */

    .one-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .item-info .title {
        font-weight: 500;
    }

    .delete {
        color: black;
        font-size: 1.5rem;
        cursor: pointer;
    }

    .delete:hover {
        color: black;
    }

    /* ----------media query---------- */
    @media (min-width: 993px) {

        .nav-link {
            margin-right: 40px;
        }

        .lg-none {
            display: none;
        }
    }

    @media (max-width: 992px) {
        .header-search {
            display: none;
        }

        .navbar-collapse {
            text-align: center;
        }

        .header-icon {
            display: block;
        }

        .member {
            width: 50px;
            height: 50px;
        }

        .sm-none {
            display: none;
        }

        /* 小版購物車dropdown視窗框 */
        .cart-nav-small {
            display: none;
            min-height: 200px;
            min-width: 300%;
            top: 70px;
            right: -10px;
            background-color: #FFC026;
            border: 3px solid black;
            z-index: 1;
        }

        .dropdown-menu.show {
            display: none;
        }
    }
</style>

<body>
    <header id="myHeader">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand mr-5 sm-none" href="0_index.php">
                <img src="<?= WEB_ROOT ?>imgs/index/logo.svg" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <img src="<?= WEB_ROOT ?>imgs/index/ic-menu.svg" alt="" style="width: 48px; height: 10px;">
                </span>
            </button>
            <a class="navbar-brand lg-none" href="#">
                <img src="<?= WEB_ROOT ?>imgs/index/logo.svg" alt="">
            </a>

            <!-- 小版購物車 -->
            <li class="nav-item dropdown position-relative">
                <!-- 小版購物車 -->
                <a href="#" class="header-icon shopping-cart nav-link mx-0 lg-none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" class="shopcart-small-click" style="width:48px;">
                    <!-- 小版購物車數量提示 -->
                    <span class="badge badge-pill badge-info position-absolute count-badge">0</span>
                </a>

                <!-- 小版購物車dropdown -->
                <div class="cart-nav-small p-3 position-absolute text-center lg-none aria-labelledby=" navbarDropdown">
                    <div class="cart-nav-small-dropdown" href="#">購物車商品</div>

                    <!-- 如果session cart空空 -->
                    <?php if (empty($_SESSION['cart'])) : ?>
                        <div class="alert alert-primary" role="alert">你的購物車空空如也～</div>
                        <!-- 如果session cart有東西 -->
                    <?php else : ?>
                        <!-- 先用foreach抓出session的東西 -->
                        <?php foreach ($_SESSION['cart'] as $i) : ?>
                            <div id="prod<?= $i['sid'] ?>" class="row one-item flex-column pb-3 m-3">
                                <div class="img-wrap" style="height:100px">
                                    <img src="imgs/event/<?= $i['picture'] ?>.jpg" alt="">
                                </div>

                                <div class="item-info">
                                    <div class="title my-3">
                                        <?= $i['event_name'] ?>
                                    </div>
                                    <div class="quantity mb-3">票數：<?= $i['quantity'] ?>張</div>

                                    <div class="price mb-3">單張票價： $<?= $i['price'] ?></div>
                                </div>

                                <a href="javascript:removeItem(<?= $i['sid'] ?>)" class="delete">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </div>
                        <?php endforeach; ?>

                        <!-- 去結帳按鈕 -->
                        <a href="5_shopCart-list.php" class="text-right my-3">
                            <button type="button" class="btn btn-info">去結帳</button>
                        </a>
                    <?php endif; ?>
                </div>
            </li>

            <!-- nav連結 -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="4_productList.php">逛逛活動</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="3_B2B-index.php">舉辦活動</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="0_index.php">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="0_blog.php">新鮮事</a>
                    </li>
                </ul>

                <!-- 搜尋區塊 -->
                <form class="header-search mr-3" method="POST" name="header-search" class="form-inline ">
                    <input class="search" type="text" name="search">
                    <button class="search-icon" type="submit">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                    </button>
                </form>

                <!-- 會員dropdown -->
                <li class="nav-item dropdown">
                    <!-- 會員icon -->
                    <a class="nav-link mx-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if (isset($_SESSION['user'])) : ?>
                            <i class="fas fa-user" style="font-size:38px;color:#168FA4"></i>
                        <?php else : ?>
                            <i class="fas fa-user" style="font-size:38px"></i>
                        <?php endif; ?>
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="1_member-center.php">會員中心</a>
                        <a class="dropdown-item" href="2_member-order.php">票券管理</a>
                        <a class="dropdown-item" href="#">我的收藏</a>
                        <a class="dropdown-item" href="#">優惠券管理</a>
                        <a class="dropdown-item" href="#">訊息管理</a>
                        <a class="dropdown-item" href="2_member-service.php">聯繫客服</a>
                        <?php if (isset($_SESSION['user'])) : ?>
                            <a class="dropdown-item" href="1_member-logout-api.php">登出</a>
                        <?php else : ?>
                            <a class="dropdown-item" href="1_member-login.php">登入</a>
                        <?php endif; ?>
                    </div>
                </li>

                <!-- 購物車 -->
                <li class="nav-item dropdown position-relative">
                    <!-- 購物車 -->
                    <a href="#" class="header-icon shopping-cart nav-link mx-0 sm-none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" class="car-click" style="width:48px;">
                        <!-- 購物車數量小提示 -->
                        <span class="badge badge-pill badge-info count-badge position-absolute">0</span>
                    </a>
                    <!-- 購物車dropdown -->
                    <div class="cartnav-dropdown px-3 position-absolute" aria-labelledby="navbarDropdown">
                        <div class="shopcart-dropdown d-flex flex-column justify-content-between" href="#">
                            <div class="text-center my-3">購物車商品</div>

                            <!-- 如果session cart空空 -->
                            <?php if (empty($_SESSION['cart'])) : ?>
                                <div class="alert alert-primary" role="alert">你的購物車空空如也～</div>
                                <!-- 如果session cart有東西 -->
                            <?php else : ?>
                                <!-- 先用foreach抓出session的東西 -->
                                <?php foreach ($_SESSION['cart'] as $i) : ?>
                                    <div id="prod<?= $i['sid'] ?>" class="one-item wrap d-flex px-2 justify-content-between align-items-center">
                                        <div class="img-wrap col-4 p-0" style="height:100px">
                                            <img src="imgs/event/<?= $i['picture'] ?>.jpg" alt="">
                                        </div>

                                        <div class="item-info p-0 col-6">
                                            <div class="title my-3">
                                                <?= $i['event_name'] ?>
                                            </div>
                                            <div class="quantity mb-3">票數：<?= $i['quantity'] ?>張</div>

                                            <div class="price mb-3">單張票價： $<?= $i['price'] ?></div>
                                        </div>

                                        <a href="javascript:removeItem(<?= $i['sid'] ?>)" class="delete">
                                            <i class="far fa-trash-alt"></i>
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                                <!-- 去結帳按鈕 -->
                                <a href="5_shopCart-list.php" class="text-right my-3">
                                    <button type="button" class="btn btn-info">去結帳</button>
                                </a>

                            <?php endif; ?>


                        </div>
                    </div>
                </li>
            </div>
        </nav>
    </header>

    <script>
        // navbar scollUp show
        $(function() {
            $('#myHeader').each(function() {
                let $window = $(window),
                    $header = $(this),
                    headerOffsetTop = $header.offset().top;
                $window.on('scroll', function() {
                    if ($window.scrollTop() > headerOffsetTop) {
                        $header.addClass('sticky');
                        $('.main').addClass('add-pt');
                    } else {
                        $header.removeClass('sticky');
                        $('.main').removeClass('add-pt');
                    }
                });
                $window.trigger('scroll');
            });
        });

        // 購物車icon旁的數量
        const count_badge = $('.count-badge');

        function countCart(cart) {
            let count = 0;
            for (let i in cart) {
                count += cart[i].quantity * 1;
            }
            count_badge.html(count);
        }

        $.get("4_productList-shopcart-api.php", function(data) {
            // console.log(data);
            countCart(data.cart);
        }, 'json');


        // 點擊購物車icon，出現下拉框的購物車
        $('.car-click').on('click', function() {
            $('.cartnav-dropdown').toggle();

        })

        $.get("4_productList-shopcart-api.php", function(data) {
            console.log(data);
        }, 'json');

        // 移除購物車內的列
        function removeItem(sid) {
            $.get('4_productList-shopcart-api.php', {
                sid: sid,
                action: 'remove'
            }, function(data) {
                countCart(data.cart);
                $('#prod' + sid).remove();
            }, 'json');
        }

        // 小版購物車
        $('.shopcart-small-click').on('click', function() {
            $('.cart-nav-small').toggle();
        });
    </script>