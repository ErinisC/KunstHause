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
    echo '<script>alert(‘尚無訂單內容，來去逛逛吧’)</script>';
    echo "<script>window.location.href = '4_productList.php'</script>";
    // header('Location: 4_productList.php'); 
    // exit;
}

$order_ids = [];
foreach ($o_rows as $o) {
    $order_ids[] = $o['sid'];
}

$d_sql = sprintf("SELECT d.*, p.* FROM `order_details` d 
JOIN `products` p ON p.sid=d.product_id
WHERE d.`order_id` IN (%s) ORDER BY p.`start_datetime` DESC", implode(',', $order_ids));

$d_rows = $pdo->query($d_sql)->fetchAll();
// echo json_encode($d_rows);
// exit;

?>


<?php $title = 'KunstHaus | 票券管理'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!--引入member order的css-->
<link rel="stylesheet" href="./css/2_member-order.css">


<div class="space"></div>
<div class="container">
    <div class="row sm-side">
        <div class="section-title mb-5">
            <img class="" src="<?= WEB_ROOT ?>imgs/member/order-section-title2.svg" alt="">
        </div>
        <div class="btn-group w-100 mb-5 status" role="group" aria-label="Basic example">
            <button type="button" class="status-btn btn-s btn-select" data-sid="已付款">
                已付款
            </button>
            <button type="button" class="status-btn btn-s" data-sid="未付款">
                未付款
            </button>
            <button type="button" class="status-btn btn-s" data-sid="已取消">
                已取消
            </button>
            <button type="button" class="status-btn btn-s" data-sid="已完成">
                已完成
            </button>
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

    <div class="container order-status-list sm-side">
        <?php //foreach ($o_rows as $o) : 
        ?>
        <?php foreach ($d_rows as $d) : ?>
            <div class="row order mb-5 align-content-center sm-side">
                <?php //if ($o['sid'] == $d['order_id']) : 
                ?>
                <div class="col-lg-3 event-img p-0">
                    <img class="event-sm-img w-100 h-100" src="<?= WEB_ROOT ?>imgs/event/<?= $d['picture'] ?>" alt="">
                </div>
                <div class="col-lg-5 event-info">
                    <div class="main-info my-4">
                        <p class="event-name mb-2"><?= $d['event_name'] ?></p>
                        <p class="price mb-2">單價$ <?= $d['price'] ?></p>
                    </div>
                    <div class="sub-info my-4">
                        <p class="date mb-2"><?= $d['start_datetime'] ?> ~ <?= $d['end_datetime'] ?></p>
                        <p class="order-sid mb-2">訂單編號：<?= $d['order_id'] ?></p>
                        <p class="order-date mb-2">訂單日期：<?= $o['order_date'] ?></p>
                        <p class="pay-method mb-2">付款方式：<?= $d['pay_way'] ?></p>
                        <p class="total-price mb-2">票券數量：<?= $d['event_amount'] ?></p>
                        <p class="total-price mb-2">訂單總額：<?= $d['event_amount'] * $d['price'] ?></p>
                        <p id="order-status" class="order-status mb-2">訂單狀態：<?= $d['order_status'] ?></p>
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
                <?php //endif; 
                ?>
            </div>
        <?php endforeach; ?>
        <?php //endforeach; 
        ?>
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
                <h5 class="modal-title modal-event-name" id="exampleModalLabel">
                </h5>
            </div>
            <div class="modal-body text-center">
                <p>訂單即將取消，<br>
                    按下確認鍵確定取消訂單。</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel-btn" class="btn cancel-btn" data-toggle="modal" data-target="#confirmModal" data-dismiss="modal">確認取消</button>
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
                <h5 class="modal-title modal-event-name" id="exampleModalLabel"></h5>
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
                <h5 class="modal-event-name"></h5>
                <p class="time">2019-12-10 11:00 ~ 2019-12-10 12:00</p>
                <p class="location">台灣台北市信義區松壽路22號5樓</p>
            </div>
            <div class="modal-footer">
                <p class="attender w-100 text-center">參加人：大米</p>
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
    const status_btns = $('.status-btn');

    const productTpl = function(a) {
        return `
        <div class="row order mb-5 align-content-center" data-sid="${a['order_id']}">
                    
                        <div class="col-lg-3 event-img p-0">
                            <img class="event-sm-img w-100 h-100" src="imgs/event/event-sm/${a['picture']}" alt="">
                        </div>
                        <div class="col-lg-5 event-info">
                            <div class="main-info my-4">
                                <p class="event-name mb-2">${a['event_name']}</p>
                                <p class="price mb-2">單價$ ${a['price']}</p>
                            </div>
                            <div class="sub-info my-4">
                                <p class="date mb-2">${a['start_datetime']} ~ ${a['end_datetime']}</p>
                                <p class="order-sid mb-2">訂單編號：${a['order_id']}</p>
                                <p class="pay-method mb-2">付款方式：${a['pay_way'] }</p>
                                <p class="total-price mb-2">票券數量：${a['event_amount']}</p>
                                <p class="total-price mb-2">票券總額：${a['event_amount']* a['price']}</p>
                                <p class="order-status mb-2">訂單狀態：${a['order_status']}</p>
                            </div>
                        </div>
                        <div class="col-lg-1 sm-none"></div>
                        <div class="col-lg-3 ticket d-flex justify-content-around">
                            <div class="edit">
                                <button class="delete" type="button" class="btn btn-primary" onclick="wannaDel(event)"></button>
                                <button class="feedback"></button>
                            </div>
                            <div class="qr-code">
                                <button class="qr-code-lg" type="button" class="btn btn-primary" data-toggle="modal" data-target="#qrcodeModal">
                                    <img src="<?= WEB_ROOT ?>imgs/member/qr-code.svg" alt="">
                                </button>
                            </div>
                        </div>
                    
                </div>
    `;
    };

    function whenHashChanged() {
        let u = location.hash.slice(1) || 0;
        console.log('u:', u);
        getProductData(u);

        $('.status-btn').click(function() {
            $(this).addClass('btn-select');
            $('.status-btn').not(this).removeClass('btn-select');

        })

        // status_btns.removeClass('btn-primary').addClass('btn-select');
        // status_btns.each(function(index, el) {
        //     const sid = $(this).attr('data-sid');
        //     if (sid === u) {
        //         $(this).removeClass('btn-select').addClass('btn-primary');
        //     }
        // });
    };

    window.addEventListener('hashchange', whenHashChanged);
    whenHashChanged();

    status_btns.on('click', function(event) {
        const sid = $(this).attr('data-sid');
        //console.log(`sid: ${sid}`);
        location.href = "#" + sid;
    });

    function getProductData(status = 0) {
        $.get('2_member-order-api.php', {
            order_status: status
        }, function(data) {
            console.log('data', data);

            let str = '';
            if (data.order_details && data.order_details.length) {
                data.order_details.forEach(function(el) {
                    str += productTpl(el);
                });
            }

            //console.log('str', str);
            $('.order-status-list').html(str);
        }, 'json');
    }

    function wannaDel(event) {
        const btn = $(event.target);
        const order = btn.closest('.order');
        const modalTitle = order.find('.event-name').text();
        $('#cancelModal').modal('show');
        $('.modal-event-name').text(modalTitle);
        console.log(order.attr('data-sid'), order.find('.event-name').text());
        console.log(modalTitle);
        $('#cancel-btn').on('click', function(event) {
            order.hide();
        });
    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>