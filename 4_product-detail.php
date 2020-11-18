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
<link rel="stylesheet" href="./css/4_product-detail.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- 內容開始 -->
<div class="bg"></div>















<!-- 引入ＪＳ -->
<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 自己的ＪＳ -->
<script>



</script>

<!-- footer -->
<?php include __DIR__ . '/1_parts/4_footer.php'; ?>