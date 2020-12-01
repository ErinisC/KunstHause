<?php include __DIR__ . '/1_parts/0_config.php';

$output = [];
$status = urldecode(isset($_GET['order_status']) ? $_GET['order_status'] : 0);

$s_sql = "SELECT * FROM order_details";
$s_rows = $pdo->query($s_sql)->fetchAll();

$where = " WHERE 1 ";
if (!empty($status)) {
    $output['order_status'] = $status;
    $where .= " AND `order_status`= ";
    $where .= "'" . $status . "'";
}

$t_sql = "SELECT COUNT(1) FROM order_details $where ";
$t_stmt = $pdo->query($t_sql);

//echo json_encode($t_stmt->fetch(PDO::FETCH_NUM)[0]); exit;
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; // 總筆數

if ($totalRows != 0) {

    $sql = sprintf(
        "SELECT * FROM order_details %s ORDER BY sid",
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
