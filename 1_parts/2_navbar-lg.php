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
    }
</style>

<body>
    <header id="myHeader">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand mr-5 sm-none" href="#">
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
            <a href="0_index.php" class="header-icon shopping-cart nav-link mx-0 lg-none">
                <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" style="width:48px;">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="4_productList.php">逛逛活動</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="3_B2B-index.php">舉辦活動</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">關於我們</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">新鮮事</a>
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
                    <a class="nav-link mx-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-member2.svg" alt="" style="width:48px;">
                    </a>
                    <div class="dropdown-menu p-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">會員資料</a>
                        <a class="dropdown-item" href="#">票券管理</a>
                        <a class="dropdown-item" href="#">我的收藏</a>
                        <a class="dropdown-item" href="#">優惠券管理</a>
                        <a class="dropdown-item" href="#">訊息管理</a>
                        <a class="dropdown-item" href="#">聯繫客服</a>
                        <a class="dropdown-item" href="#">登入/登出</a>
                    </div>
                </li>
                <a href="#" class="header-icon shopping-cart nav-link mx-0 sm-none">
                    <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="" style="width:48px;">
                    <!-- 購物車數量小提示 -->
                    <span class="badge badge-pill badge-warning count-badge">0</span>
                </a>
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
    </script>