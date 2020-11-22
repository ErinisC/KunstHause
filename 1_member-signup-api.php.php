<?php
require __DIR__ . '/parts/config.php';
require __DIR__ . '/parts/admin-required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '沒有表單資料',
];

if (empty($_POST['name'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

//TODO: 檢查資料格式

$sql = "INSERT INTO `address_book`(
        `name`, `account`, `password`, 
        `mobile`, `address`
        ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $_POST['account'],
    $_POST['password'],
    $_POST['mobile'],
    $_POST['address'],
]);
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);