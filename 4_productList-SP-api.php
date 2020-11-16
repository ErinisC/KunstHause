<?php $title = '活動列表';
include __DIR__ . '/1_parts/0_config.php';

// 購物車用session來代表，session變數叫cart，屆時再設定購物車那邊
if (!isset($_SESSION['cart'])) {
    //  就設定session給它
    $_SESSION['cart'] = [];
}

// 儲存用上面的session, 叫出用output
$output = [];

// 先看有沒有設定action這個動作
$action = isset($_GET['action']) ? $_GET['action'] : 'read';

// 再看有沒有產品id, 加商品進來的時候要設定
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;

// 設定數量
$quantity = isset($_GET['quantity']) ? intval($_GET['quantity']) : 1;


switch ($action) {
    default:
    case 'read':
        break;

    case 'add':
        if (!$sid or $quantity) {
            $output['code'] = 'add failue';
        } else {
            // 如果購物車內已經有那筆資料了
            if (isset($_SESSION['cart']['$sid'])) {
                // 就改變商品數量就好
                // 拿到那個商品sid裡面的數量，變成用戶決定的數量
                $_SESSION['cart']['sid']['quantity'] = $quantity;
            } else { //如果項目不存在的話，才去搜資料庫抓資料
                // 用產品的編號當作key，來判斷購物車內有沒有這個商品
                // 先用資料庫讀取
                $sql = "SELECT * FROM products WHERE sid=$sid";
                $row = $pdo->query($sql)->fetch();
                // 如果沒拿到編號的話，代表沒有東西
                if (empty($row)) {
                    // 就印出一個自己定義的錯誤通知
                    $output['code'] = 'nono';
                } else { //但如果有這筆資料的話，就把它加入購物車內

                    // 這邊紀錄購物車那邊拿到的數量，消費者想買幾個
                    $row['quantity'] = $quantity;

                    // 購物車session cart內，拿到的那筆資料，把它的sid當成key，然後等號後面是把這筆的內容當作value
                    $_SESSION['cart'][$row['sid']] = $row;
                }
            }
        }


        break;

    case 'remove':
        // 如果購物車內有資料
        // 這邊用的sid是購物車cart中，用戶傳進來的編號sid
        // 如果用戶傳的編號，有對應到購物車內的sid
        // 問～～～～～～～～～～～～～～～～～～～～～～～
        if (isset($_SESSION['cart']['$sid'])) {
            // 就移除這個項目
            unset($_SESSION['cart']['$sid']);
        } else {
            $output['code'] = 'remove not success';
        }

        break;
}

// 因為購物車的商品是放在上面定的session cart裡，所以這邊就把購物車session放到output這邊，然後呼叫出來看
$output['cart'] = $_SESSION['cart'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
