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
    <div class="row">
        <div class="section-title mb-5">
            <img class="" src="<?= WEB_ROOT ?>imgs/member/order-section-title.svg" alt="">
        </div>
        <div class="btn-group w-100 mb-5" role="group" aria-label="Basic example">
            <button type="button" class="btn-s btn-select">已付款</button>
            <button type="button" class="btn-s">未付款</button>
            <button type="button" class="btn-s">已取消</button>
            <button type="button" class="btn-s">已完成</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row order mb-5">
        <div class="col-lg-3 event-img"></div>
        <div class="col-lg-4 event-info">
            <div class="main-info my-3">
                <p class="event-name">2019百威真我至上音樂巡迴</p>
                <p class="price">NT$ 300</p>
            </div>
            <div class="sub-info my-4">
                <p class="date">2019-09-06 19:30 ~ 2019-09-06 23:00</p>
                <p class="order-sid">訂單編號：1909050529331213415877</p>
                <p class="pay-method">付款方式：信用卡</p>
            </div>
        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-3 ticket d-flex justify-content-around my-3">
            <div class="edit">
                <button class="delete" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelModal"></button>
                <button class="feedback"></button>
            </div>
            <div class="qr-code">
                <img src="<?= WEB_ROOT ?>imgs/member/qr-code.svg" alt="">
            </div>
        </div>
    </div>
</div>


<div class="container pagination">
    <div class="row justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <!-- 前一頁 -->
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fas fa-arrow-left"></i></a>
                </li>
                <!-- 中間頁數 -->
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <!-- 後一頁 -->
                <li class="page-item">
                    <a class="page-link" href="#">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>


<!-- Modal Cancel-->
<div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content position-relative">
            <div class="g-clip position-absolute">
                <img src="<?= WEB_ROOT ?>imgs/member/g-clip.svg" alt="">
            </div>
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">
                    2019百威真我至上音樂巡迴
                </h5>
            </div>
            <div class="modal-body text-center">
                <p>訂單即將取消，<br>
                    按下確認鍵確定取消訂單。</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn cancel-btn" data-toggle="modal" data-target="#confirmModal">確認取消</button>
                <button type="button" class="btn close-btn" data-dismiss="modal">關閉視窗</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirm-->
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content position-relative">
            <div class="g-clip position-absolute">
                <img src="<?= WEB_ROOT ?>imgs/member/g-clip.svg" alt="">
            </div>
            <div class="modal-header text-center">
                <h5 class="modal-title" id="exampleModalLabel">
                    2019百威真我至上音樂巡迴
                </h5>
            </div>
            <div class="modal-body text-center">
                <p>訂單已為您取消，<br>
                    訂單明細已寄送至信箱。</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn order-his-btn" data-toggle="modal" data-target="#confirmModal">查看已取消訂單</button>
                <button type="button" class="btn close-btn" data-dismiss="modal">關閉視窗</button>
            </div>
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