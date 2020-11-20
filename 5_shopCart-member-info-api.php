<?php
include __DIR__ . '/1_parts/0_config.php';

// 如果沒有登入的話，就跳出錯誤提醒
// if (!isset($_SESSION['user'])) {
//     echo json_encode([
//         'error' => '沒有登入會員'
//     ], JSON_UNESCAPED_UNICODE);
//     exit;
// }


$_SESSION['buy_info'] = $_POST;


$output['buy_info'] = $_SESSION['buy_info'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
