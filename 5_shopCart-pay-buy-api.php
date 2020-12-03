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

//算總價 
$total = 0;
foreach ($_SESSION['cart'] as $i) {
    $total += $i['price'] * $i['quantity'];
}


// 準備寫入訂單
$o_sql = "INSERT INTO `orders`(`member_sid`, `total_price`, `company_name`, `tax_id_number`,`credit_card_number`, `month`, `security_number`, `order_date`) VALUES (?,?,?,?,?,?,?, NOW())";
$o_stmt = $pdo->prepare($o_sql);
$o_stmt->execute([
    $_SESSION['user']['sid'],
    $total,
    $_SESSION['buy_info']['company_name'],
    $_SESSION['buy_info']['tax-id-number'],
    $_SESSION['creditcard']['credit-number'],
    $_SESSION['creditcard']['valid-date'],
    $_SESSION['creditcard']['security-number'],
]);


// 寫入訂單明細
$order_sid = $pdo->lastInsertId();
$d_sql = "INSERT INTO `order_details`(`order_id`, `product_id`, `price`, `event_amount`) VALUES(?,?,?,?)";

// 購物車的回圈再跑一次，抓到產品id
$d_stmt = $pdo->prepare($d_sql);
foreach ($_SESSION['cart'] as $i) {
    $d_stmt->execute([
        $order_sid,
        $i['sid'],
        $i['price'],
        $i['quantity'],
    ]);
}

unset($_SESSION['cart']);
unset($_SESSION['buy_info']);
unset($_SESSION['creditcard']);

echo json_encode([
    'success' => true,
], JSON_UNESCAPED_UNICODE);
