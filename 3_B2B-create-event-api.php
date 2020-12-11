<?php
include __DIR__ . '/1_parts/0_config.php';
// require __DIR__ . '/parts/admin-required.php';
$output = [
    'success' => false,
    'code' => 0,
    'error' => '哎呀! 您尚未完成表單資料填寫',
    'postData' => $_POST,
];

if (empty($_POST['event_name']) or empty($_POST['event_info'])  or empty($_POST['price'])) {
    $output['postData'] = $_POST;
    $s_sql = "SELECT 1 FROM `kunsthaus` WHERE `products`=?";
    $s_stmt->execute([$_POST['event_name']]);
    if ($s_stmt->rowCount() == 1) {
        $output['info'] = '此活動名稱已被註冊';
        echo json_encode($output, JSON_UNESCAPED_UNICODE);
        exit;
    }
}

// 上傳圖片到uploads資料夾
$filename = '';
if (!empty($_FILES["picture"]["name"])) {
    $filename = $_FILES["picture"]["name"];
    move_uploaded_file($_FILES["picture"]["tmp_name"], __DIR__ . '/imgs/event/' . $_FILES["picture"]["name"]);
}


//TODO: 檢查資料格式

$sql = "INSERT INTO `products`( `event_name`, `hastag`, `picture`,
                                  `categories`, 
                                  `location`, 
                                   `start_datetime`, `end_datetime`,`price`, 
                                   `address`, `event_info`, `notice`, 
                                   `transportation`) VALUES
 ( 
        ?, ?, ?,
        ?, ?, 
        ?, ?, ?, 
        ?, ?, ?,
        ?
    )";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['event_name'],
    $_POST['hashtag'],
    $filename,
    $_POST['categories'],
    $_POST['cityLocation'],
    $_POST['start-datetime'],
    $_POST['end-datetime'],
    $_POST['price'],
    $_POST['address'],
    $_POST['event_info'],
    $_POST['notice'],
    $_POST['transportation']
]);
if ($stmt->rowCount() == 1) {
    $output['success'] = true;
    $output['error'] = '';
    $output['info'] = '資料新增完成';
}
header('Content-Type: application/json');
echo json_encode($output, JSON_UNESCAPED_UNICODE);
