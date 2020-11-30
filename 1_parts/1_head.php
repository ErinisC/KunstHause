<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 掛bootstrap -->
    <link rel="stylesheet" href="<?= WEB_ROOT ?>bootstrap/css/bootstrap.css">
    <!-- 掛fontawesome -->
    <link rel="stylesheet" href="<?= WEB_ROOT ?>fontawesome/css/all.css">
    <!-- 掛font Noto Sans TC/ Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <!-- 掛RESET -->
    <link rel="stylesheet" href="<?= WEB_ROOT ?>css/reset.css">
    <link rel="icon" href="<?= WEB_ROOT ?>imgs/index/favicon.jpg" type="image/x-icon/">
    <title><?= $title ?? 'KunstHaus' ?></title>

    <!-- 掛JQ，因為nav購物車小數量需要提前先有JQ -->
    <script src="./libary/jquery-3.5.1.js"></script>