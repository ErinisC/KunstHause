<?php
include __DIR__ . '/1_parts/0_config.php';
// require __DIR__ . '/parts/admin-required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '哎呀! 您尚未完成表單資料填寫',
    'postData' => $_POST,
];

if (empty($_POST['name']) or empty($_POST['account']) or empty($_POST['password'])) {
    $output['postData'] = $_POST;
    $s_sql = "SELECT 1 FROM `kunsthaus` WHERE `account`=?";
    $s_stmt->execute([$_POST['account']]);
    if ($s_stmt->rowCount() == 1) {
        $output['info'] = '帳號已有人註冊';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;
    }
}

//TODO: 檢查資料格式

$sql = "INSERT INTO `member`(
        `name`, `email`, `password`, 
        `phone`, `address`
        ) VALUES (
        ?, ?, SHA1(?),
        ?, ?
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
    $output['info'] = '資料新增完成';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
