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
        color: black;
        background-color: #FFC024;
        border: 3px solid #000;
        margin: 2px 0;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .dropdown-item:hover {
        background-color: #168FA4;
        color: #fff;
    }

    .dropdown:hover .dropdown-item {
        display: block;
    }


    /* 購物車dropdown視窗框 */
    .dropdown-item.shopcart-dropdown {
        min-height: 260px;
    }

    .cart-nav-big {
        width: 400px;
        left: -400%;
    }

    /* 隱藏溢出文字 */
    .cart-nav-big .title {
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .delete {
        font-size: 1.5rem;
    }

    .dropdown-item:hover {
        background-color: #FFC024;
        color: black;
    }

    .delete {
        cursor: pointer;
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

        /* 購物車dropdown視窗框 */
        .dropdown-item.shopcart-dropdown {
            height: 200px;
        }

        .cart-nav {
            width: 280px;
            left: -250%;
        }

    }
</style>

<body>
    <?php if (!isset($pageName)) {
        $pageName = "";
    };

    ?>

    <header class="position-fixed w-100">
        <nav class="navbar navbar-expand-lg">
            <div class="container ">
                <a class="navbar-brand mr-5 sm-none" href="0_index.php">
                    <img src="<?= WEB_ROOT ?>imgs/index/logo.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-menu.svg" alt="" style="width: 48px; height: 10px;">
                    </span>
                </button>
                <a class="navbar-brand lg-none" href="0_index.php">
                    <img src="<?= WEB_ROOT ?>imgs/index/logo.svg" alt="">
                </a>

                <!-- 購物車 -->
                <li class="nav-item dropdown">
                    <!-- 購物車 -->
                    <a href="#" class="header-icon shopping-cart nav-link mx-0 lg-none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" style="width:48px;">
                        <!-- 購物車數量小提示 -->
                        <span class="badge badge-pill badge-info position-absolute count-badge">0</span>
                    </a>

                    <!-- 購物車dropdown -->
                    <div class="dropdown-menu cart-nav p-0" aria-labelledby="navbarDropdown">
                        <div class="dropdown-item shopcart-dropdown" href="#">購物車商品</div>

                    </div>
                </li>


                <!-- 大版頁面navbar -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= $pageName === "productList" ? 'active' : '' ?>">
                            <a class="nav-link" href="4_productList.php">逛逛活動</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="3_B2B-index.php">舉辦活動</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="0_index.php">關於我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="0_index.php">新鮮事</a>
                        </li>
                    </ul>
                    <form class="header-search mr-3" method="POST" name="header-search" class="form-inline ">
                        <input class="search" type="text" name="search">
                        <button class="search-icon" type="submit">
                            <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                        </button>
                    </form>
                    <!-- TO DO: 判斷是否登入，登入member icon變泰瑞色-->
                    <li class="nav-item dropdown">
                        <!-- 會員icon -->
                        <a class="nav-link mx-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (isset($_SESSION['user'])) : ?>
                                <i class="fas fa-user" style="font-size:38px;color:#168FA4"></i>
                            <?php else : ?>
                                <i class="fas fa-user" style="font-size:38px"></i>
                            <?php endif; ?>
                            <!-- <img src="<//?= WEB_ROOT ?>imgs/index/ic-member2.svg" alt="" style="width:48px;"> -->
                        </a>
                        <!-- 會員dropdown -->
                        <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">會員資料</a>
                            <a class="dropdown-item" href="#">票券管理</a>
                            <a class="dropdown-item" href="#">我的收藏</a>
                            <a class="dropdown-item" href="#">優惠券管理</a>
                            <a class="dropdown-item" href="#">訊息管理</a>
                            <a class="dropdown-item" href="#">聯繫客服</a>

                            <?php if (isset($_SESSION['user'])) : ?>
                                <a class="dropdown-item" href="1_member-logout-api.php">登出</a>
                            <?php else : ?>
                                <a class="dropdown-item" href="1_member-login.php">登入</a>
                            <?php endif; ?>
                        </div>
                    </li>

                    <!-- 購物車 -->
                    <li class="nav-item dropdown">
                        <!-- 購物車 -->
                        <a href="#" class="header-icon shopping-cart nav-link mx-0 sm-none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" style="width:48px;">
                            <!-- 購物車數量小提示 -->
                            <span class="badge badge-pill badge-info position-absolute count-badge">0</span>
                        </a>

                        <!-- 購物車dropdown -->
                        <div class="dropdown-menu cart-nav-big p-0" aria-labelledby="navbarDropdown">
                            <div class="dropdown-item shopcart-dropdown d-flex flex-column justify-content-between" href="#">
                                <div class="text-center my-3">購物車商品</div>

                                <!-- 如果session cart空空 -->
                                <?php if (empty($_SESSION['cart'])) : ?>
                                    <div class="alert alert-primary" role="alert">你的購物車空空如也～</div>
                                    <!-- 如果session cart有東西 -->
                                <?php else : ?>
                                    <!-- 先用foreach抓出session的東西 -->
                                    <?php foreach ($_SESSION['cart'] as $i) : ?>
                                        <div id="prod<?= $i['sid'] ?>" class="wrap d-flex justify-content-between align-items-center">
                                            <div class="img-wrap col-4 p-0" style="height:100px">
                                                <img src="imgs/event/big/<?= $i['book_id'] ?>.png" alt="">
                                            </div>

                                            <div class="item-info col-6">
                                                <div class="title my-3">
                                                    <?= $i['bookname'] ?>
                                                </div>
                                                <div class="quantity mb-3"><?= $i['quantity'] ?>張</div>
                                                <div class="price mb-3">$<?= $i['price'] ?></div>
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
            </div>
        </nav>

    </header>

    <script>
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


        // 購物車icon下拉框的活動資訊
        // const cart_nav = $('.cart-nav');

        $.get("4_productList-shopcart-api.php", function(data) {
            console.log(data);
        }, 'json');

        // 移除
        function removeItem(sid) {
            $.get('4_productList-shopcart-api', {
                sid: sid,
                action: 'remove'
            }, function(data) {
                countCart(data.cart);
                $('#prod' + sid).remove();
                $('.shopping-cart').click();
            }, 'json');


        }
    </script>