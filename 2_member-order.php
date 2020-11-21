<?php include __DIR__ . '/1_parts/0_config.php'

// 判斷是否登入
// if (!isset($_SESSION['user'])) {
//     header('Location: user-login.php');
//     exit;
// }

// 判斷member id
// $member_sid = intval($_SESSION['user']['id']);
// $o_sql = "SELECT * FROM `orders` WHERE `member_sid`=$member_sid ORDER BY `order_date` DESC";
// $o_rows = $pdo->query($o_sql)->fetchAll();

// 如果沒有任何的訂購資料, 就顯示訊息或離開
// if (empty($o_rows)) {
//     header('Location: product-list.php'); // 顯示訊息比較好, 告訴用戶沒有訂單資料
//     exit;
// }

// $order_sids = [];
// foreach ($o_rows as $o) {
//     $order_sids[] = $o['sid'];
// }

// $d_sql = sprintf("SELECT d.*, p.bookname, p.book_id FROM `order_details` d 
// JOIN `products` p ON p.sid=d.product_sid
// WHERE d.`order_sid` IN (%s)", implode(',', $order_sids));

// $d_rows = $pdo->query($d_sql)->fetchAll();

//echo json_encode([
//    'orders' => $o_rows,
//    'details' => $d_rows,
//]);
//exit;
?>

<?php $title = 'KunstHaus | 票券管理'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- 引入index的css -->
<link rel="stylesheet" href="./css/2_member-order.css">
<div class="space"></div>
<div class="container">
    <div class="section-title">
        
    </div>
    <div class="row">
        <div class="btn-group w-100" role="group" aria-label="Basic example">
            <button type="button" class="btn-s btn-warning">已付款</button>
            <button type="button" class="btn-s btn-light">未付款</button>
            <button type="button" class="btn-s btn-light">已取消</button>
            <button type="button" class="btn-s btn-light">已完成</button>
        </div>
    </div>

</div>
















<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>
    // const dallorCommas = function(n) {
    //     return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    // };
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>