<?php
require __DIR__ . '/1_parts/0_config.php';
$output = [
    'success' => false,
];

if (empty($_POST['account'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO: 檢查資料格式

$sql = "SELECT `sid`, `account`, `nickname` FROM `admins` WHERE `account`=? AND `password`=SHA1(?)";
$output['sql'] = $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['account'],
    $_POST['password'],
]);

if ($stmt->rowCount() > 0) {
    $output['success'] = true;
    $_SESSION['admin'] = $stmt->fetch();
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
