<!-- 引入css -->
<link rel="stylesheet" href="./css/00_navbar.css">

<body>
    <?php if (!isset($pageName)) {
        $pageName = "";
    }; ?>

    <header class="position-fixed w-100">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
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

                <!-- 小版購物車 -->
                <li class="nav-item dropdown position-relative">
                    <!-- 小版購物車 -->
                    <a href="#" id="sm-shop-cart" class="header-icon shopping-cart nav-link mx-0 lg-none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" class="shopcart-small-click" style="width:48px;">
                        <!-- 小版購物車數量提示 -->
                        <span class="badge badge-pill badge-info position-absolute count-badge">0</span>
                    </a>

                    <!-- 小版購物車dropdown -->
                    <div class="cart-nav-small p-3 position-absolute text-center" aria-labelledby="navbarDropdown">
                        <div class="cart-nav-small-dropdown" href="#">購物車商品</div>

                        <!-- 如果session cart空空 -->
                        <?php if (empty($_SESSION['cart'])) : ?>
                            <div class="alert shopcart-nav-alert" role="alert">你的購物車空空如也～</div>
                            <!-- 如果session cart有東西 -->
                        <?php else : ?>
                            <!-- 先用foreach抓出session的東西 -->
                            <?php foreach ($_SESSION['cart'] as $i) : ?>
                                <div id="prod<?= $i['sid'] ?>" class="row one-item text-left p-3 mb-3">
                                    <div class="img-wrap col-4" style="height:100px">
                                        <img src="imgs/event/<?= $i['picture'] ?>.jpg" alt="">
                                    </div>

                                    <div class="item-info col-6">
                                        <div class="title my-3">
                                            <?= $i['event_name'] ?>
                                        </div>
                                        <div class="quantity mb-3">票數：<?= $i['quantity'] ?>張</div>

                                        <div class="price mb-3">單張票價： $<?= $i['price'] ?></div>
                                    </div>

                                    <a href="javascript:removeItem(<?= $i['sid'] ?>)" class="delete m-auto">
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


                <!-- 大版頁面navbar -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= $pageName === "productList" ? 'active' : '' ?>">
                            <a class="nav-link" href="4_productList.php">逛逛活動</a>
                        </li>
                        <li class="nav-item  <?= $pageName === "b2b" ? 'active' : '' ?>">
                            <a class="nav-link" href="3_B2B-index.php">舉辦活動</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="0_index.php#about-us">關於我們</a>
                        </li>
                        <li class="nav-item <?= $pageName === "blog" ? 'active' : '' ?>">
                            <a class="nav-link" href="0_blog.php">新鮮事</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link lg-none" href="1_member-center.php">會員中心</a>
                        </li>
                        <?php if (isset($_SESSION['user'])) : ?>
                            <li class="nav-item lg-none">
                                <a class="nav-link lg-none" href="1_member-center.php">登出</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item lg-none">
                                <a class="nav-link lg-none" href="1_member-center.php">登入/註冊</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <form class="header-search mr-3" method="POST" name="header-search" class="form-inline ">
                        <input class="search" type="text" name="search">
                        <button class="search-icon" type="submit">
                            <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                        </button>
                    </form>
                    <!-- 大版nav會員登入-->
                    <li class="nav-item dropdown">
                        <!-- 會員icon -->
                        <a class="nav-link mx-0 sm-none" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php if (isset($_SESSION['user'])) : ?>
                                <i class="fas fa-user" style="font-size:38px;color:#168FA4"></i>
                            <?php else : ?>
                                <i class="fas fa-user" style="font-size:38px"></i>
                            <?php endif; ?>

                        </a>
                        <!-- 會員dropdown -->
                        <div class="dropdown-menu p-0 sm-none" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="1_member-center.php">會員中心</a>
                            <a class="dropdown-item" href="2_member-order.php">票券管理</a>
                            <a class="dropdown-item" href="#">我的收藏</a>
                            <a class="dropdown-item" href="#">優惠券管理</a>
                            <a class="dropdown-item" href="#">訊息管理</a>
                            <a class="dropdown-item" href="2_member-service.php">聯繫客服</a>

                            <?php if (isset($_SESSION['user'])) : ?>
                                <a class="dropdown-item" href="1_member-logout-api.php">登出</a>
                            <?php else : ?>
                                <a class="dropdown-item" href="1_member-login.php">登入/註冊</a>
                            <?php endif; ?>
                        </div>
                    </li>

                    <!-- 購物車 -->
                    <li class="nav-item dropdown position-relative">
                        <!-- 購物車 -->
                        <a href="#" class="header-icon shopping-cart nav-link mx-0 sm-none" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" class="car-click" style="width:48px;">
                            <!-- 購物車數量小提示 -->
                            <span class="badge badge-pill badge-info position-absolute count-badge">0</span>
                        </a>

                        <!-- 購物車dropdown -->
                        <div class="cartnav-dropdown px-3 position-absolute" aria-labelledby="navbarDropdown">
                            <div class="shopcart-dropdown d-flex flex-column justify-content-between" href="#">
                                <div class="text-center my-3">購物車商品</div>

                                <!-- 如果session cart空空 -->
                                <div class="alert shopcart-nav-alert" role="alert" style="display:<?= empty($_SESSION['cart']) ? 'block' : 'none' ?>">你的購物車空空如也～</div>
                                <!-- 如果session cart有東西 -->

                                <!-- 空的div包起樣板字串 -->
                                <div class="car-attatch">
                                    <?php if (!empty($_SESSION['cart'])) : ?>
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
                                    <?php endif; ?>
                                </div>

                                <!-- 去結帳按鈕 -->
                                <a href="5_shopCart-list.php" class="pay-btn text-right my-3" style="display:<?= empty($_SESSION['cart']) ? 'none' : 'block' ?>">
                                    <button type="button" class="btn btn-info">去結帳</button>
                                </a>


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

        function smallCartInit() {
            $.get("4_productList-shopcart-api.php", function(data) {
                // console.log(data);
                countCart(data.cart);

                // 呼叫下方樣板字串，加入購物車列
                let str = "";
                for (let i in data.cart) {
                    let el = data.cart[i];
                    str += smallCartShowItems(el);
                }

                // 拿到html字串後，再把所有商品串起來
                $('.car-attatch').html(str);

            }, 'json');
        }
        smallCartInit();

        // 樣板字串
        function smallCartShowItems(a) {
            return `  <div id="prod${a.sid}" class="one-item wrap d-flex px-2 justify-content-between align-items-center">
                                            <div class="img-wrap col-4 p-0" style="height:100px">
                                                <img src="imgs/event/${a.picture}.jpg" alt="">
                                            </div>

                                            <div class="item-info p-0 col-6">
                                                <div class="title my-3">
                                                   ${a.event_name}
                                                </div>
                                                <div class="quantity mb-3">票數：${a.quantity}張</div>

                                                <div class="price mb-3">單張票價：${a.price} </div>
                                            </div>

                                            <a href="javascript:removeItem(${a.sid})" class="delete">
                                                <i class="far fa-trash-alt"></i>
                                            </a>
                                        </div>
                                        
            `;
        }


        // 點擊購物車icon，出現下拉框的購物車
        $('.car-click').on('click', function() {
            $('.cartnav-dropdown').toggle();
        })

        // $.get("4_productList-shopcart-api.php", function(data) {
        //     console.log(data);
        // }, 'json');

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

        // 小版
        $('.navbar-toggler').on('click', function() {
            console.log('hi');
            $('#sm-shop-cart').toggleClass('sm-none');
        });
    </script>