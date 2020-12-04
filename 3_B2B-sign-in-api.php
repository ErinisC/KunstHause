<?php
include __DIR__ . '/1_parts/0_config.php';
// require __DIR__ . '/parts/admin-required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '哎呀! 您尚未完成表單資料填寫',
    'postData' => $_POST,
];

if (empty($_POST['name']) or empty($_POST['phone']) or empty($_POST['ext']) or empty($_POST['intro'])) {
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
//注意格式 逗號要下對位置
$sql = "INSERT INTO `vendor` (`member_sid`,
        `name`, `phone`, `ext`,`intro`, 
        `picture`
        ) VALUES (
        ?,?,?,
        ?,?,?
    )";

$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['member_sid'],
    $_POST['name'],
    $_POST['phone'],
    $_POST['ext'],
    $_POST['intro'],
    $_POST['pic_name']
]);
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
    $output['info'] = '資料新增完成';
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
