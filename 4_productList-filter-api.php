<?php


include __DIR__ . '/1_parts/0_config.php';

$area_map = [
    '2' => '(5,6,7)',
    '3' => '(8,9)',
    '4' => '(10,11)',
];

$output = [];

// 拿篩選內的項目，所有商品是0
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;

if (!empty($area_map[$cate])) {
    $sql = "SELECT * FROM products WHERE location_id IN " . $area_map[$cate];
} else if ($cate == 0) {
    $sql = "SELECT * FROM products ";
} else {
    $sql = "SELECT * FROM products WHERE location_id=" . $cate;
}
$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll();

// 這邊要建立篩選的側欄，先取到資料庫內分類的資料
$c_sql = "SELECT * FROM category WHERE parent_sid = 0";
$c_rows = $pdo->query($c_sql)->fetchAll();




$output['products'] = $rows;

header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);
