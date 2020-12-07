<?php include __DIR__ . '/1_parts/0_config.php';


// 票券管理php條件

// 判斷是否登入會員
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


// 我的珍藏 
// 如果會員有登入，叫出收藏愛心項目


$member_sid = $_SESSION['user']['sid'];
$l_sql = "SELECT p.* FROM `likes` a 
    JOIN `products` p ON a.product_sid=p.sid
     WHERE a.`member_sid`=?
     ORDER BY a.created_at DESC";

$l_stmt = $pdo->prepare($l_sql);
$l_stmt->execute([
    $member_sid
]);
$likes = $l_stmt->fetchAll();
// $likes = array_column($l_rows, 'product_sid');


// echo json_encode($likes, JSON_UNESCAPED_UNICODE);
// exit;

?>



<?php $title = 'Kunsthaus|會員中心'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- 引入member center的 css -->
<link rel="stylesheet" href="./css/1_member-center.css">
<!-- 引入 css animation  -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="container">
    <div class="row">

        <div class="col-lg-10 p-0">

            <div class="banner">
                <img class="Diversity" src=" <?= WEB_ROOT ?>/imgs/member/Diversity.svg">
            </div>

            <div class="member-area mx-auto p-0 col-lg-12 col-12 w-100">

                <!-- 更換會員大頭照 -->
                <div class="avatar">
                    <a href="">
                        <img src="/KunstHause/imgs/member_imgs/member_14.jpg">
                    </a>
                </div>

                <div class="edit-member">
                    <div class="nickname">
                        <p>HELLO
                            <i class="fas fa-child animated bounce"></i>
                            <span>小新</span>下一場活動想去哪呢?
                        </p>
                        <!-- <i class="fas fa-edit"></i> -->
                    </div>
                    <a href="http://localhost/KunstHause/2_member-accunt-set.php">
                        <button class="btn btn-primary col-lg-2 col-4 mt-5 ">
                            <p>編輯資料</p>
                        </button> </a>
                </div>

                <!-- 我的收藏 區域 -->
                <div class="sort col-11 mx-auto mb-5 pb-2">
                    <p>我的收藏</p>
                </div>
                <div class="favorite-list ">
                    <div class="c-row1 d-flex justify-content-center" style="flex-wrap:wrap">
                        <?php foreach ($likes as $r) : ?>
                            <!-- 活動小卡 -->
                            <a href="4_product-detail.php?sid=<?= $r['sid'] ?>" target="_blank" class="card">
                                <div class="card-wrap m-4 col-lg-5 col-sm-4 p-0">
                                    <div class="card-kv position-relative">
                                        <img src="imgs/event/event-sm/<?= $r['picture'] ?>.jpg">
                                        <div class="time col-5 text-dark position-absolute mt-3">
                                            <p class="my-2"><?= $r['start_datetime'] ?></p>
                                        </div>
                                    </div>

                                    <div class="card-body d-flex p-0 w-100">
                                        <div class="card-info position-relative col-8">
                                            <div class="event-name my-2">
                                                <p><?= $r['event_name'] ?></p>
                                            </div>
                                            <div class="event-location my-2"><?= $r['location'] ?></div>

                                            <a href="Javascript:" class="like-link position-absolute">
                                                <i class="like like-btn far fa-heart <?= in_array($r['sid'], $likes) ? 'liked' : '' ?>" data-sid="<?= $r['sid'] ?>"></i>
                                            </a>
                                        </div>

                                        <div class="card-price col-4">
                                            <div class="discount mt-3">
                                                <p>優惠價</p>
                                            </div>
                                            <div class="price my-2">$<?= $r['price'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>


                        <!-- <div class="card-wrap mr-4 col-lg-4 col-md-4 col-sm-10 col-10 p-0">
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
                        </div> -->
                    </div>


                    <!-- <div class="c-row2 d-flex justify-content-center my-5" style=" flex-wrap:wrap">

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
                    </div> -->

                    <div class="view-more">
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

                <div class="sort col-11 mx-auto mb-5 pb-2">票券管理</div>

                <!-- 先判斷訂單資料內有沒有東西 -->
                <?php if (empty($o_rows)) : ?>
                    <div class="container">
                        <div class="row">
                            <p>還沒有訂單資料唷～</p>
                        </div>
                    </div>
                <?php else : ?>

                    <div class="container order-status-list col-lg-11">
                        <?php foreach ($d_rows as $d) : ?>
                            <div class="t-detail mb-5 d-flex align-content-around">
                                <div class="ticket-kv col-lg-3 p-0">
                                    <img class="event-sm-img w-100 p-0 h-100" src="<?= WEB_ROOT ?>/imgs/event/event-sm/<?= $d['picture'] ?>.jpg" alt="">
                                </div>
                                <div class="main-info col-lg-6">
                                    <div class="event-title my-3">
                                        <p class="event-name mb-2"><?= $d['event_name'] ?></p>
                                        <p class="price my-2">單價$<?= $d['price'] ?></p>
                                    </div>
                                    <div class="sub-info my-2">
                                        <p class="date my-2"><?= $d['start_datetime'] ?> ~ <?= $d['end_datetime'] ?></p>
                                        <p class="number mb-2">訂單編號:<?= $d['order_id'] ?></p>
                                        <p class="pay mb-2">付款方式:<?= $d['pay_way'] ?></p>
                                        <p class="total mb-2">票券數量:<?= $o['total_price'] ?></p>
                                        <p class="status mb-2">訂單狀態:<?= $d['order_status'] ?></p>
                                    </div>
                                </div>

                                <div class="edit-area col-lg-3 d-flex justify-content-between">
                                    <div class="e-ticket pt-4 mt-4">
                                        <div class="jq-delete" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                            <img src="/KunstHause/imgs/member/cancel.svg">
                                        </div>
                                        <div class="feedback mt-2" type="button">
                                            <img src="/KunstHause/imgs/member/feedback.svg">
                                        </div>
                                    </div>
                                    <div class="qr-code">
                                        <div class="qr-code-lg pt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                            <img src="<?= WEB_ROOT ?>/imgs/member/qr-code.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>


                <!--Modal 跳出確認取消提醒視窗 -->

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content position-relative col-11">
                            <div class="logo position-absolute">
                                <img src="<?= WEB_ROOT ?>imgs/index/Logo.svg" alt="">
                            </div>

                            <div class="modal-header mt-5 ml-3">
                                <p class="modal-title p-2" id="exampleModalCenterTitle">
                                    <?= $d['event_name'] ?>
                                </p>
                            </div>
                            <div class="modal-body">
                                <p>您確定要取消此筆訂單嘛?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="cancel-btn" class="btn cancel-btn" data-toggle="modal" data-target="#confirmModal" data-dismiss="modal" style="background-color:#FF4E42">確認取消</button>
                                <button type="button" class="btn close-btn" data-dismiss="modal">關閉視窗</button>

                            </div>
                        </div>
                    </div>
                </div>


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
                    <p>VIEW MORE >></p>
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

        <div class="guide" style="margin-top:10rem">
            <div class="guide-bar position-fixed col-lg-2" style="line-height: 3rem ; text-align: center; font-weight: 600;">

                <div id="item" class="item position-relative" style="background-color:#FAC000">
                    <a href="2_member-order.php" class="text-white">票券管理</a>
                    <img id="light-bulb" class="light-bulb animated wobble position-absolute" src="<?= WEB_ROOT ?>/imgs/member/light-bulb.svg">
                </div>

                <div class="item" style="background-color:#fff">
                    <a href="" class="text-dark">我的收藏</a>
                </div>
                <div class="item" style="background-color:#FAC000">
                    <a href="" class="text-white">優惠券管理</a>
                </div>

                <div class="item" style="background-color:#fff">
                    <a href="2_member-service.php" class="text-dark">聯繫客服</a>
                </div>
                <div class="item" style="background-color:#FAC000">
                    <a href="" class="text-white">訊息管理</a>
                </div>

            </div>
        </div>
    </div>
</div>



<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    // 燈泡
    const bulb = document.getElementById("light-bulb")
    item = document.getElementById("item");

    item.addEventListener('mouseenter' = function() {
        bulb.show()
    })
    item.addEventListener('mouseleave' = function() {
        bulb.hide()
    });



    // 收藏功能

    const like_btns = $('.like-btn');
    like_btns.click(function() {
        // if (session.user == "undefined") {
        //     console.log('請先登入');

        // } else {
        const card = $(this).closest('.card');
        const sid = card.attr('data-sid');
        const sendObj = {
            action: 'like',
            sid: sid,
        }
        console.log(sendObj)
        $.get('4.likes-api.php', sendObj, function(data) {
            console.log(data);
            if (data.success) {
                card.find('.like-btn').addClass('liked');
            } else {
                card.find('.like-btn').removeClass('liked');
            }

        }, 'json');
        // }

    });





    // 票券管理刪除功能

    // if $('.btn cancel-btn').click(function() {
    //     $(this).parent().parent().parent().remove();
    // });

    // $('.jq-delete').click(function() {
    //     $(this).parent().parent().parent().remove();
    // });
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>