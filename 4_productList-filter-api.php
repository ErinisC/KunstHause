<?php


include __DIR__ . '/1_parts/0_config.php';


$output = [];

// 拿篩選內的項目，所有商品是0
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;


// 這邊要建立篩選的側欄，先取到資料庫內分類的資料
$c_sql = "SELECT *FROM category WHERE parent_sid=1";
$c_rows = $pdo->query($c_sql)->fetchAll();


$where = " WHERE 1 ";
if (!empty($cate)) {
    $output['cate'] = $cate;
    $where .= " AND `categories_sid`=$cate";
}

$t_sql = "SELECT COUNT(1) FROM products $where ";
$t_stmt = $pdo->query($t_sql);

//echo json_encode($t_stmt->fetch(PDO::FETCH_NUM)[0]); exit;
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 總筆數

if ($totalRows != 0) {

    $sql = sprintf(
        "SELECT * FROM products %s ORDER BY sid",
        $where
    );

    $stmt = $pdo->query($sql);

    $rows = $stmt->fetchAll();
} else {
    $rows = [];
}
$output['products'] = $rows;

header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);
