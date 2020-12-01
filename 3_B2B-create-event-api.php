<?php
include __DIR__ . '/1_parts/0_config.php';
// require __DIR__ . '/parts/admin-required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '哎呀! 您尚未完成表單資料填寫',
    'postData' => $_POST,
];

if (empty($_POST['event_name']) or empty($_POST['event_info']) or empty($_POST['start-datetime']) or empty($_POST['price'])) {
    $output['postData'] = $_POST;
    $s_sql = "SELECT * FROM `products` WHERE 1";
    $s_stmt->execute([$_POST['event_name']]);
    if ($s_stmt->rowCount() == 1) {
        $output['info'] = '帳號已有人註冊';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;
    }
}

//TODO: 檢查資料格式

$sql = "INSERT INTO `products`
(`sid`, `event_name`, `hastag`, `event_status`, `picture`,
 `categories`, `categories_sid`, `location`, `location_id`, 
 `start-datetime`, `end-datetime`, `price`, `address`, `event_info`,
  `notice`, `transportation`,)
 VALUES (
        ?, ?, ?, ?,
        ?, ?, ?, ?,
        ?, ?, ?, ?,
        ?, ?, ?
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['event_name'],
    $_POST['hastag'],
    $_POST['event_status'],
    $_POST['picture'],
    $_POST['categories'],
    $_POST['categories_sid'],
    $_POST['location'],
    $_POST['location_id'],
    $_POST['start-datetime'],
    $_POST['end-datetime'],
    $_POST['price'],
    $_POST['address'],
    $_POST['event_info'],
    $_POST['notice'],
    $_POST['transportation'],
]);
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
    $output['info'] = '資料新增完成';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
