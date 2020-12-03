<?php include __DIR__ . '/1_parts/0_config.php';

$output = [];
$status = urldecode(isset($_GET['order_status']) ? $_GET['order_status'] : 0);

$member_sid = intval($_SESSION['user']['sid']);
$s_sql = "SELECT d.*, o.* FROM `order_details` d JOIN `orders` o WHERE `member_sid`=$member_sid";
$s_rows = $pdo->query($s_sql)->fetchAll();

// echo json_encode($s_rows); 

// WHERE `member_sid`=$member_sid
$where = "WHERE 1";
if (!empty($status)) {
    $output['order_status'] = $status;
    $where .= " AND d.`order_status`= ". $pdo->quote($status);
}

$t_sql = "SELECT COUNT(1) FROM order_details d $where ";
$t_stmt = $pdo->query($t_sql);

//echo json_encode($t_stmt->fetch(PDO::FETCH_NUM)[0]); exit;
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 總筆數

if ($totalRows != 0) {

    $sql = sprintf(
        "SELECT d.*, p.* FROM `order_details` d JOIN `products` p ON p.sid=d.product_id %s ORDER BY d.sid",
        $where
    );

    $stmt = $pdo->query($sql);

    $rows = $stmt->fetchAll();
} else {
    $rows = [];
}
$output['order_details'] = $rows;

header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);
