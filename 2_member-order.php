<?php include __DIR__ . '/1_parts/0_config.php';

// 判斷是否登入
if (!isset($_SESSION['user'])) {
    header('Location: 1_member-login.php');
    exit;
}

// 判斷member id
$member_sid = intval($_SESSION['user']['sid']);
$o_sql = "SELECT * FROM `orders` WHERE `member_sid`=$member_sid ORDER BY `order_date` DESC";

$o_rows = $pdo->query($o_sql)->fetchAll();
// echo json_encode($o_rows);
// exit;



// 如果沒有任何的訂購資料, 就顯示訊息或離開
if (empty($o_rows)) {
    header('Location: 4_productList.php'); // 顯示訊息比較好, 告訴用戶沒有訂單資料
    exit;
}

$order_ids = [];
foreach ($o_rows as $o) {
    $order_ids[] = $o['sid'];
}

// event_name, p.sid, p.picture

$d_sql = sprintf("SELECT d.*, p.* FROM `order_details` d 
JOIN `products` p ON p.sid=d.product_id
WHERE d.`order_id` IN (%s)", implode(',', $order_ids));

$d_rows = $pdo->query($d_sql)->fetchAll();

// echo json_encode([
//    'orders' => $o_rows,
//    'details' => $d_rows,
// ]);
// exit;


// 訂單狀態
// 成功取出值的ajax寫法
$status = isset($_GET['order_status']) ? intval($_GET['order_status']) : 0;
$s_sql = "SELECT * FROM order_details";
$s_rows = $pdo->query($s_sql)->fetchAll();
// echo json_encode($s_rows);
// exit;


?>

<?php $title = 'KunstHaus | 票券管理'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!--引入member order的css-->
<link rel="stylesheet" href="./css/2_member-order.css">


<div class="space"></div>
<div class="container">
    <div class="row">
        <div class="section-title mb-5">
            <img class="" src="<?= WEB_ROOT ?>imgs/member/order-section-title2.svg" alt="">
        </div>
        <div class="btn-group w-100 mb-5 status" role="group" aria-label="Basic example">
            <?php foreach ($s_rows as $s) : ?>
                <button type="button" class="status-btn btn-s" data-sid="<?= $s['order_status'] ?>">
                    <?= $s['order_status'] ?>
                </button>
            <?php endforeach ?>
        </div>
    </div>
</div>
</div>


<!-- 先判斷訂單資料內有沒有東西 -->
<?php if (empty($o_rows)) : ?>
    <div class="container">
        <div class="row">
            <p>還沒有訂單資料唷～</p>
        </div>
    </div>


<?php else : ?>

    <div class="container">
        <?php foreach ($o_rows as $o) : ?>
            <?php foreach ($d_rows as $d) : ?>
                <div class="row order mb-5 align-content-center">
                    <?php if ($o['sid'] == $d['order_id']) : ?>
                        <div class="col-lg-3 event-img p-0">
                            <img class="event-sm-img w-100" src="<?= WEB_ROOT ?>imgs/event/event-sm/<?= $d['picture'] ?>.jpg" alt="">
                        </div>
                        <div class="col-lg-5 event-info">
                            <div class="main-info my-4">
                                <p class="event-name mb-2"><?= $d['event_name'] ?></p>
                                <p class="price mb-2">單價$ <?= $d['price'] ?></p>
                            </div>
                            <div class="sub-info my-4">
                                <p class="date mb-2"><?= $d['start-datetime'] ?> ~ <?= $d['end-datetime'] ?></p>
                                <p class="order-sid mb-2">訂單編號：<?= $d['order_id'] ?></p>
                                <p class="pay-method mb-2">付款方式：<?= $d['pay_way'] ?></p>
                                <p class="total-price mb-2">訂單總額：<?= $o['total_price'] ?></p>
                                <p class="order-status mb-2">訂單狀態：<?= $d['order_status'] ?></p>
                            </div>
                        </div>
                        <div class="col-lg-1 sm-none"></div>
                        <div class="col-lg-3 ticket d-flex justify-content-around">
                            <div class="edit">
                                <button class="delete" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelModal"></button>
                                <button class="feedback"></button>
                            </div>
                            <div class="qr-code">
                                <button class="qr-code-lg" type="button" class="btn btn-primary" data-toggle="modal" data-target="#qrcodeModal">
                                    <img src="<?= WEB_ROOT ?>imgs/member/qr-code.svg" alt="">
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <!--pagination-->
    <div class="container paginatio mb-5">
        <div class="row mx-auto justify-content-center">
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

<?php endif; ?>

<!--modal cancel-->
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
                <button type="button" class="btn cancel-btn" data-toggle="modal" data-target="#confirmModal" data-dismiss="modal">確認取消</button>
                <button type="button" class="btn close-btn" data-dismiss="modal">關閉視窗</button>
            </div>
        </div>
    </div>
</div>

<!--modal confirm-->
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

<!--modal qrcode-->
<div class="modal fade" id="qrcodeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content position-relative">
            <div class="g-clip position-absolute">
                <img src="<?= WEB_ROOT ?>imgs/member/g-clip.svg" alt="">
            </div>
            <div class="modal-header mx-auto mt-5 position-relative">
                <img c;ass="qr-code-save" src="<?= WEB_ROOT ?>imgs/member/qr-code.svg" alt="" style="width: 250px;">
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h5>2019百威真我至上音樂巡迴</h5>
                <p class="time">2019-12-10 11:00 ~ 2019-12-10 12:00</p>
                <p class="location">台灣台北市信義區松壽路22號5樓</p>
            </div>
            <div class="modal-footer">
                <p class="attender w-100 text-center">參加人：王大明</p>
                <p class="ticket-sid w-100 text-center">票券編號：1909050529332096708790</p>
            </div>
        </div>
    </div>
</div>



<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>
   

</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>