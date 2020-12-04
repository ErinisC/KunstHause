<?php include __DIR__ . '/1_parts/0_config.php';



$action = isset($_GET['action']) ? $_GET['action'] : '';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

$output = [
    // 'add' => "0",
    'code' => "0",
    'success' => false,
    // 'error' => "沒有成功",
];
if (empty($sid)) {
    echo json_encode($output);
    exit;
}

// if (empty($_POST['product_sid'])) {
//     echo json_encode($output);
//     exit;
// }


// 定義判斷user id
// $member_id = $_SESSION['user']['sid'];
// $product_sid = intval($_POST['product_sid']);

// $sql = "SELECT * FROM `likes` WHERE `member_sid`=`member_sid` AND `product_sid`=`product_sid`";

// $stmt = $pdo->query($sql);

// $output['error'] = "";

// if ($stmt->rowCount() == 1) {
//     // 加進愛心收藏
//     $pdo->query("DELETE FROM `likes` WHERE `member_sid`=`member_sid` AND `product_sid`=product_sid");
//     $output['code'] = "true";
//     $output['add'] = 0;
// } else {
//     $i_sql = $pdo->query("INSERT INTO `likes`(`product_sid`, `member_sid`,`created_at`) VALUES (?, ?,NOW())");
//     $i_stmt = $pdo->prepare($i_sql);
//     $i_stmt->execute([
//         $member_id,
//         $product_sid,
//     ]);
//     $output['code'] = "true";
//     $output['add'] = 1;
// }


/*
 * action:
 *   like (收藏商品),
 *   remove (取消收藏),
 *   (預設) (查詢內容)
 */

switch ($action) {
    case 'like':
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
            //移除愛心收藏
            $r_sql = "DELETE FROM `likes` WHERE `product_sid`=? AND `member_sid`=?";
            $r_stmt = $pdo->prepare($r_sql);
            $r_stmt->execute([
                $sid,
                $_SESSION['user']['sid']
            ]);
            $output['code'] = "成功移除";
        }
        break;
}
// $output['_test_product-list'] = $_SESSION['_test_product-list'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
