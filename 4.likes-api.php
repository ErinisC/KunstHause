<?php include __DIR__ . '/1_parts/0_config.php';



$action = isset($_GET['action']) ? $_GET['action'] : '';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$output = [
    'action' => $action,
    'code' => "",
    'success' => false,
];
if (empty($sid)) {
    echo json_encode($output);
    exit;
}
/*
 * action:
 *   like (收藏商品),
 *   remove (取消收藏),
 *   (預設) (查詢內容)
 */

switch ($action) {
    case 'like':
        // $check_sql = "SELECT * FROM `product-test` WHERE sid";

        $sql = "SELECT * FROM `likes` WHERE `product_sid`=? AND `member_sid`=?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            $sid,
            $_SESSION['user']['sid']
        ]);
        if ($stmt->rowCount() < 1) {
            // 加進愛心收藏
            $i_sql = "INSERT INTO `likes`(`product_sid`, `member_sid`) VALUES (?, ?)";
            $i_stmt = $pdo->prepare($i_sql);
            $i_stmt->execute([
                $sid,
                $_SESSION['user']['sid']
            ]);
            $output['code'] = "收藏成功";
            $output['success'] = true;
        } else if ($stmt->rowCount() > 0) {
            //維持愛心收藏
            $r_sql = "DELETE FROM `likes` WHERE `product_sid`=? AND `member_sid`=?";
            $r_stmt = $pdo->prepare($r_sql);
            $r_stmt->execute([
                $sid,
                $_SESSION['user']['id']
            ]);
            $output['code'] = "已經加過";
        }
        break;

        // 移除
    case 'remove':
}
$output['_test_product-list'] = $_SESSION['_test_product-list'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
