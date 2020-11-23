<?php
include __DIR__ . '/1_parts/0_config.php';

// 如果沒有登入的話，就跳出錯誤提醒
if (!isset($_SESSION['user'])) {
    echo json_encode([
        'error' => '沒有登入會員'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

// 如果購物車已經被清掉了（buy那隻）
if (empty($_SESSION['cart'])) {
    echo json_encode([
        'code' => 300,
        'error' => '購物車內沒有內容'
    ], JSON_UNESCAPED_UNICODE);
    exit;
}
echo json_encode($output, JSON_UNESCAPED_UNICODE);
