<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Noto Sans TC", sans-serif;
        font-family: "Roboto", sans-serif;
        overflow-x: hidden;
    }

    .navbar {
        background-color: #FFC024;
        border: 3px solid black;
    }

    .nav-link {
        color: #000;
        margin-right: 40px;
        font-family: "Noto Sans TC", sans-serif;
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

    .header-icon {
        margin-left: 2rem;
    }

    .search-icon {
        top: 5px;
        right: 8px;
        position: absolute;
        background: transparent;
        border: none;
        cursor: pointer;
    }

    /* ----------media query---------- */
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

        .header-icon img {
            margin-right: 2rem;
        }

    }
</style>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand mr-5" href="#">
                    <img src="<?= WEB_ROOT ?>imgs/index/logo.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-menu.svg" alt="" style="width: 48px; height: 10px;">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">逛逛活動</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">舉辦活動</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">關於我們</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">新鮮事</a>
                        </li>
                    </ul>
                    <form class="header-search" method="POST" name="header-search" class="form-inline my-2 my-lg-0">
                        <input class="search" type="text" name="search">
                        <button class="search-icon" type="submit">
                            <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                        </button>
                    </form>
                    <a href="#" class="header-icon shopping-cart">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-shopping.svg" alt="">
                    </a>
                    <a href="#" class="header-icon member">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-member.svg" alt="">
                    </a>
                </div>

            </div>
        </nav>



    </header>