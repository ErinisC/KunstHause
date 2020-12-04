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

// event_name, p.sid, p.picture

$d_sql = sprintf("SELECT d.*, p.* FROM `order_details` d 
JOIN `products` p ON p.sid=d.product_id  
WHERE d.`order_id` IN (%s) ORDER BY p.`start_datetime` DESC", implode(',', $order_ids));

// echo $d_sql;
// exit;
$d_rows = $pdo->query($d_sql)->fetchAll();

// 把這張表用foreach取成object
/*
$eventData = [];
foreach ($d_rows as $d) {
    $order_ids[] = $d['sid'];
}
*/
?>


<?php $title = 'Kunsthaus|會員中心'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- 引入member center的 css -->
<link rel="stylesheet" href="./css/1_member-center.css">

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="container">
    <div class="row">

        <div class="col-lg-10">

            <div class="banner">
                <img class="Diversity" src=" <?= WEB_ROOT ?>/imgs/member/Diversity.svg">
            </div>

            <div class="member-area mx-auto p-0 col-lg-12 col-md-12 col-sm-12 col-12 w-100">

                <!-- 更換會員大頭照 -->
                <div class="avatar">
                    <a href="">
                        <img src="/KunstHause/imgs/member_imgs/member_14.jpg">
                    </a>
                </div>

                <div class="edit-member">
                    <p>Hi 小米
                        <i class="fas fa-edit"></i>
                        下一場活動要去哪呢?
                    </p>
                    <a href="http://localhost/KunstHause/2_member-accunt-set.php">
                        <button class="btn btn-primary col-lg-2 col-4 mt-5 ">
                            <p>編輯設定</p>
                        </button> </a>
                </div>

                <!-- 我的收藏 區域 -->
                <div class="sort col-10 mx-auto mb-5 pb-2">
                    <p>我的收藏</p>
                </div>
                <div class="favorite-list ">
                    <div class="c-row1 d-flex justify-content-center" style="flex-wrap:wrap">
                        <div class="card-wrap mr-4 col-lg-4 col-md-4 col-sm-10 col-10 p-0">
                            <div class="card-kv position-relative">
                                <img src="/KunstHause/imgs/event/event-sm/TPE-26.jpg">
                                <div class="time col-5 position-absolute mt-3">
                                    <p class="my-2">2021.03.20-2021.03.20</p>
                                </div>
                            </div>

                            <div class="card-body d-flex p-0 w-100">
                                <div class="card-info position-relative col-8">
                                    <div class="event-name my-2">
                                        <p>原子邦妮樂遊原演唱會</p>
                                    </div>
                                    <div class="event-location my-2">【ZEP NEW TEIPEI 】</div>
                                    <!-- 收藏 -->
                                    <a href="#" class="like-link position-absolute">
                                        <i class="like far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="card-price col-4">
                                    <div class="discount mt-3">
                                        <p>優惠價</p>
                                    </div>
                                    <div class="price my-2">$</div>
                                </div>
                            </div>
                        </div>

                        <div class="card-wrap ml-4 col-lg-4 col-md-4 col-sm-10 col-10 p-0">
                            <div class="card-kv position-relative">
                                <img src="/KunstHause/imgs/event/event-sm/TPE-22.jpg">
                                <div class="time col-5 position-absolute mt-3">
                                    <p class="my-2">2021.01.17-2021-01.17</p>
                                </div>
                            </div>
                            <div class="card-body d-flex p-0 w-100">
                                <div class="card-info position-relative col-8">
                                    <div class="event-name my-2">
                                        <p>獨立人種</p>
                                    </div>
                                    <div class="event-location my-2">【公館河岸留言】</div>
                                    <!-- 收藏 -->
                                    <a href="#" class="like-link position-absolute">
                                        <i class="like far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="card-price col-4">
                                    <div class="discount mt-3">
                                        <p>優惠價</p>
                                    </div>
                                    <div class="price my-2">$</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="c-row2 d-flex justify-content-center my-5" style=" flex-wrap:wrap">

                        <div class="card-wrap mr-4 col-lg-4 col-md-4 col-sm-10 col-10 p-0">
                            <div class="card-kv position-relative">
                                <img src="/KunstHause/imgs/event/event-sm/TNN-54.jpg">
                                <div class="time col-5 position-absolute mt-3">
                                    <p class="my-2">2020.11.03-2020.12.13</p>
                                </div>
                            </div>
                            <div class="card-body d-flex p-0 w-100">
                                <div class="card-info position-relative col-8">
                                    <div class="event-name my-2">
                                        <p>維也納藝術月-不均的平面</p>
                                    </div>
                                    <div class="event-location my-2">【台南市美術館-跨域展演廳】</div>
                                    <!-- 收藏 -->
                                    <a href="#" class="like-link position-absolute">
                                        <i class="like far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="card-price col-4">
                                    <div class="discount mt-3">
                                        <p>優惠價</p>
                                    </div>
                                    <div class="price my-2">$</div>
                                </div>
                            </div>
                        </div>
                        <div class="card-wrap ml-4 col-lg-4 col-md-4 col-sm-10 col-10 p-0">
                            <div class="card-kv position-relative">
                                <img src="/KunstHause/imgs/event/event-sm/HSZ-11.jpg">
                                <div class="time col-5 position-absolute mt-3">
                                    <p class="my-2">2020.11.28-2021.01.09</p>
                                </div>
                            </div>
                            <div class="card-body d-flex p-0 w-100">
                                <div class="card-info position-relative col-8">
                                    <div class="event-name my-2">
                                        <p>野原邦彥個展-CYCLE</p>
                                    </div>
                                    <div class="event-location my-2">【愛上藝廊-新竹】</div>
                                    <!-- 收藏 -->
                                    <a href="#" class="like-link position-absolute">
                                        <i class="like far fa-heart"></i>
                                    </a>
                                </div>
                                <div class="card-price col-4">
                                    <div class="discount mt-3">
                                        <p>優惠價</p>
                                    </div>
                                    <div class="price my-2">$</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="view-more mt-4">
                        <p>VIEW MORE >></p>
                    </div>

                    <!-- 小精靈animation area 1 -->
                    <main>
                        <section class="path">

                            <div class="pac-f">
                                <div class="pac p-top">
                                    <div class="lipstick-top"></div>
                                </div>
                                <div class="pac p-bottom">
                                    <div class="lipstick-bottom"></div>
                                </div>
                                <div class="p-eye"></div>
                                <div class="bow">
                                    <div class="b1"></div>
                                    <div class="knot"></div>
                                    <div class="b2"></div>
                                </div>
                            </div>

                            <div class="pac-m">
                                <div class="pac p-top"></div>
                                <div class="pac p-bottom"></div>
                                <div class="p-eye"></div>
                            </div>

                            <div class="heart">
                                <div class="heart-l"></div>
                                <div class="heart-r"></div>
                            </div>

                            <div class="pac-b">
                                <div class="bottle">
                                    <div class="bubble"></div>
                                    <div class="lid"></div>
                                    <div class="jar"></div>
                                </div>
                                <div class="b-top"></div>
                                <div class="b-bottom"></div>
                                <div class="b-eye"></div>
                                <div class="b-bow">
                                    <div class="b-b1"></div>
                                    <div class="b-knot"></div>
                                    <div class="b-b2"></div>
                                </div>
                            </div>

                            <div class="pac-t">
                                <div class="t-top"></div>
                                <div class="t-bottom"></div>
                                <div class="t-eye"></div>
                                <div class="cell-phone">
                                    <div class="c-screen">
                                        <div class="msg-1"></div>
                                        <div class="msg-2"></div>
                                        <div class="msg-3"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>



                <!-- 票券管理 區域 -->

                <div class="sort col-10 mx-auto mb-5 pb-2">票券管理</div>

                <!-- 先判斷訂單資料內有沒有東西 -->
                <?php if (empty($o_rows)) : ?>
                    <div class="container">
                        <div class="row">
                            <p>還沒有訂單資料唷～</p>
                        </div>
                    </div>
                <?php else : ?>

                    <?php foreach ($d_rows as $d) : ?>
                        <div class="ticket-wrap col-10 mx-auto p-0 mb-5 d-flex justify-content-between">
                            <div class="t-detail col-lg-9 d-flex p-0">
                                <div class="ticket-kv col-lg-4 p-0 mr-3">
                                    <img class="event-sm-img w-100 p-0" src="<?= WEB_ROOT ?>/imgs/event/event-sm/<?= $d['picture'] ?>.jpg" alt="">
                                </div>
                                <div class="main-info">
                                    <div class="event-title my-2">
                                        <p class="event-name mb-2"><?= $d['event_name'] ?></p>
                                        <p class="price my-2">單價$<?= $d['price'] ?></p>
                                    </div>
                                    <div class="sub-info my-2">
                                        <p class="date my-2"><?= $d['start_datetime'] ?> ~ <?= $d['end_datetime'] ?></p>
                                        <p class="number mb-2">訂單編號:<?= $d['order_id'] ?></p>
                                        <p class="pay mb-2">付款方式:<?= $d['pay_way'] ?></p>
                                        <p class="total mb-2">訂單總額:<?= $o['total_price'] ?></p>
                                        <p class="status mb-2">訂單狀態:<?= $d['order_status'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-area d-flex">
                                <div class="e-ticket pt-3 mt-3">
                                    <div class="delete m-3" type="button" class="btn btn-primary" data-toggle="modal" data-target="#cancelModal">
                                        <img src="/KunstHause/imgs/member/cancel.svg">
                                    </div>
                                    <div class="feedback m-3" type="button">
                                        <img src="/KunstHause/imgs/member/feedback.svg">
                                    </div>
                                </div>
                                <div class="qr-code mr-2">
                                    <div class="qr-code-lg pt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                        <img src="<?= WEB_ROOT ?>/imgs/member/qr-code.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>





                <!-- 手機版 -->

                <!-- <div class="mobile-edit-area d-flex">
                            <div class="e-ticket mt-3">
                                <div class="delete px-2" type="button">
                                    <img src="/KunstHause/imgs/member/cancel.svg">
                                </div>
                                <div class="feedback mt-5 px-2" type="button">
                                    <img src="/KunstHause/imgs/member/feedback.svg">
                                </div>

                                <button class="qr-code-lg mt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                    <img src="/KunstHause/imgs/member/qr-code.svg">
                                </button>
                            </div>
                        </div> -->



                <div class="view-more my-4">
                    <p>
                        VIEW MORE >>
                    </p>

                </div>





                <!-- 小精靈 Animation -->

                <main>
                    <section class="path">

                        <div class="pac-f">
                            <div class="pac p-top">
                                <div class="lipstick-top"></div>
                            </div>
                            <div class="pac p-bottom">
                                <div class="lipstick-bottom"></div>
                            </div>
                            <div class="p-eye"></div>
                            <div class="bow">
                                <div class="b1"></div>
                                <div class="knot"></div>
                                <div class="b2"></div>
                            </div>
                        </div>

                        <div class="pac-m">
                            <div class="pac p-top"></div>
                            <div class="pac p-bottom"></div>
                            <div class="p-eye"></div>
                        </div>

                        <div class="heart">
                            <div class="heart-l"></div>
                            <div class="heart-r"></div>
                        </div>

                        <div class="pac-b">
                            <div class="bottle">
                                <div class="bubble"></div>
                                <div class="lid"></div>
                                <div class="jar"></div>
                            </div>
                            <div class="b-top"></div>
                            <div class="b-bottom"></div>
                            <div class="b-eye"></div>
                            <div class="b-bow">
                                <div class="b-b1"></div>
                                <div class="b-knot"></div>
                                <div class="b-b2"></div>
                            </div>
                        </div>

                        <div class="pac-t">
                            <div class="t-top"></div>
                            <div class="t-bottom"></div>
                            <div class="t-eye"></div>
                            <div class="cell-phone">
                                <div class="c-screen">
                                    <div class="msg-1"></div>
                                    <div class="msg-2"></div>
                                    <div class="msg-3"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
                <!-- animation end -->
            </div>
        </div>
    </div>
</div>





<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>