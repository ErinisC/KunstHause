<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 掛bootstrap -->
    <link rel="stylesheet" href="<?= WEB_ROOT ?>bootstrap/css/bootstrap.css">
    <!-- 掛fontawesome -->
    <link rel="stylesheet" href="<?= WEB_ROOT ?>fontawesome/css/all.css">
    <!-- 掛ＲＥＳＥＴ -->
    <link rel="stylesheet" href="<?= WEB_ROOT ?>css/reset.css">

    <title>大專元件庫</title>
    <style>
        body {
            background-color: #168FA4;
        }
    </style>

</head>

<body class="py-5">

    <!-- 頁碼 -->
    <div class="title text-center mb-3 mt-5">這是頁碼</div>
    <style>
        .page-link {
            background-color: transparent;
            color: #21489C;
            border: none;
        }

        .page-link:hover {
            background-color: #FFC024;
            border: 3px solid black;

        }

        .page-item.active .page-link {
            background-color: #FFC024;
            border: 3px solid black;
        }

        .page-item.disabled .page-link {
            background-color: transparent;
        }

        .page-link:focus {
            box-shadow: none;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <!-- 前一頁 -->
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-arrow-left"></i></a>
                    </li>

                    <!-- 中間頁數 -->
                    <li class="page-item active">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>



                    <!-- 後一頁 -->
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>
    </div>



    <!-- 麵包屑 -->
    <div class="title text-center mb-3 mt-5">這是麵包屑</div>
    <style>
        .breadcrumb {
            background-color: transparent;

        }

        .breadcrumb-item a {
            color: white;
        }

        .breadcrumb-item a:hover {
            color: #FFC024;
            text-decoration: none;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            content: ">";
            color: white;
        }

        .breadcrumb-item.active {
            color: #FFC024;
        }
    </style>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item"><a href="#">商品列表</a></li>
                <li class="breadcrumb-item active" aria-current="page">請在最上方的php設定title名稱</li>
            </ol>
        </nav>
    </div>
</body>

</html>