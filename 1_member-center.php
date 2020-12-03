<?php $title = 'Kunsthaus|會員中心'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的 css -->
<link rel="stylesheet" href="./css/1_member-center.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="container">
    <div class="row">



        <div class="banner">
            <img class="Diversity" src=" <?= WEB_ROOT ?>/imgs/member/Diversity.svg">
        </div>
        <div class="col-lg-10">
            <div class="banner">
                <img class="Diversity" src=" <?= WEB_ROOT ?>/imgs/member/Diversity.svg">
            </div>

            <div class="member-area mx-auto p-0 col-lg-12 col-md-12 col-sm-12 col-12 w-100">
                <div class="avatar">
                    <img src="/KunstHause/imgs/member_imgs/member_14.jpg">
                </div>

                <div class="edit-member pt-5">
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
                            <div class="time col-4 position-absolute">
                                <p class="my-2">2021.03.20-2021.03.20</p>
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
                                <div class="time col-4 position-absolute mt-3">
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
                                <div class="time col-4 position-absolute mt-3">
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
                                <div class="time col-4 position-absolute mt-3">
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

                    <!-- animation area 1 -->
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

                <div class="sort col-10 mx-auto my-5 pb-2">票券管理</div>

                <div class="ticket-wrap col-10 mx-auto p-0 mb-5 d-flex justify-content-between">
                    <div class="t-detail col-lg-9 d-flex p-0">
                        <div class="ticket-kv col-lg-4 p-0 mr-3">
                            <img class="event-sm-img w-100 p-0" src="/KunstHause/imgs/event/event-sm/TNN-55.jpg">
                        </div>
                        <div class="main-info">
                            <div class="event-title my-4">
                                <p class="event-name mb-2">【臺日剪紙紙雕交流展】</p>
                                <p class="price mb-2">單價$</p>
                            </div>
                            <div class="sub-info my-4">
                                <p class="date mb-2">2020.01.</p>
                                <p class="number mb-2">訂單編號:</p>
                                <p class="pay mb-2">付款方式: 信用卡</p>
                                <p class="total mb-2">訂單總額:</p>
                                <p class="status mb-2">訂單狀態:</p>
                            </div>
                        </div>
                    </div>
                    <div class="edit-area d-flex">
                        <div class="e-ticket pt-3 mt-3">
                            <div class="delete m-3" type="button">
                                <img src="/KunstHause/imgs/member/cancel.svg">
                            </div>
                            <div class="feedback m-3" type="button">
                                <img src="/KunstHause/imgs/member/feedback.svg">
                            </div>
                        </div>
                        <div class="qr-code mr-2">
                            <div class="qr-code-lg pt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                <img src="/KunstHause/imgs/member/qr-code.svg">
                            </div>
                        </div>
                    </div>

                    <!-- 手機版 -->

                    <div class="mobile-edit-area d-flex">
                        <div class="e-ticket mt-3">
                            <div class="delete px-2" type="button">
                                <img src="/KunstHause/imgs/member/cancel.svg">
                            </div>
                            <div class="feedback mt-5 px-2" type="button">
                                <img src="/KunstHause/imgs/member/feedback.svg">
                            </div>

                            <!-- <div class="qr-code"> -->
                            <button class="qr-code-lg mt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                <img src="/KunstHause/imgs/member/qr-code.svg">
                            </button>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>


                <div class="ticket-wrap col-10 mx-auto p-0 mb-5 d-flex justify-content-between">
                    <div class="t-detail col-lg-9 d-flex p-0">
                        <div class="ticket-kv col-lg-4 p-0 mr-3">
                            <img class="event-sm-img w-100 p-0" src="/KunstHause/imgs/event/event-sm/TPE-06.jpg">
                        </div>
                        <div class="main-info">
                            <div class="event-title my-4">
                                <p class="event-name mb-2">【小毛頭之亂-大寶寶齊打交】</p>
                                <p class="price mb-2">單價$</p>
                            </div>
                            <div class="sub-info my-4">
                                <p class="date mb-2">2020.01.</p>
                                <p class="number mb-2">訂單編號:</p>
                                <p class="pay mb-2">付款方式: 信用卡</p>
                                <p class="total mb-2">訂單總額:</p>
                                <p class="status mb-2">訂單狀態:</p>
                            </div>
                        </div>
                    </div>
                    <div class="edit-area d-flex">
                        <div class="e-ticket pt-3 mt-3">
                            <div class="delete m-3" type="button">
                                <img src="/KunstHause/imgs/member/cancel.svg">
                            </div>
                            <div class="feedback m-3" type="button">
                                <img src="/KunstHause/imgs/member/feedback.svg">
                            </div>
                        </div>
                        <div class="qr-code mr-2">
                            <div class="qr-code-lg pt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                <img src="/KunstHause/imgs/member/qr-code.svg">
                            </div>
                        </div>
                    </div>

                    <!-- 手機版 -->

                    <div class="mobile-edit-area d-flex">
                        <div class="e-ticket mt-3">
                            <div class="delete px-2" type="button">
                                <img src="/KunstHause/imgs/member/cancel.svg">
                            </div>
                            <div class="feedback mt-5 px-2" type="button">
                                <img src="/KunstHause/imgs/member/feedback.svg">
                            </div>

                            <div class="qr-code-lg mt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                <img src="/KunstHause/imgs/member/qr-code.svg">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ticket-wrap col-10 mx-auto p-0 mb-5 d-flex justify-content-between">
                    <div class="t-detail col-lg-9 d-flex p-0">
                        <div class="ticket-kv col-lg-4 p-0 mr-3">
                            <img class="event-sm-img w-100 p-0" src="/KunstHause/imgs/event/event-sm/TXG-08.jpg">
                        </div>
                        <div class="main-info">
                            <div class="event-title my-4">
                                <p class="event-name mb-2">【耿一偉-新時代的劇場創作】</p>
                                <p class="price mb-2">單價$</p>
                            </div>
                            <div class="sub-info my-4">
                                <p class="date mb-2">2020.01.</p>
                                <p class="number mb-2">訂單編號:</p>
                                <p class="pay mb-2">付款方式: 信用卡</p>
                                <p class="total mb-2">訂單總額:</p>
                                <p class="status mb-2">訂單狀態:</p>
                            </div>
                        </div>
                    </div>
                    <div class="edit-area d-flex">
                        <div class="e-ticket pt-3 mt-3">
                            <div class="delete m-3" type="button">
                                <img src="/KunstHause/imgs/member/cancel.svg">
                            </div>
                            <div class="feedback m-3" type="button">
                                <img src="/KunstHause/imgs/member/feedback.svg">
                            </div>
                        </div>
                        <div class="qr-code mr-2">
                            <div class="qr-code-lg pt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                <img src="/KunstHause/imgs/member/qr-code.svg">
                            </div>
                        </div>
                    </div>

                    <!-- 手機版 -->

                    <div class="mobile-edit-area d-flex">
                        <div class="e-ticket mt-3">
                            <div class="delete px-2" type="button">
                                <img src="/KunstHause/imgs/member/cancel.svg">
                            </div>
                            <div class="feedback mt-5 px-2" type="button">
                                <img src="/KunstHause/imgs/member/feedback.svg">
                            </div>

                            <div class="qr-code-lg mt-5" type="button" data-toggle="modal" data-target="#qrcodeModal">
                                <img src="/KunstHause/imgs/member/qr-code.svg">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="view-more my-4">
                    <p>VIEW MORE >></p>
                </div>

                <!-- Animation -->

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


            <!-- 變形蟲動畫 -->
            <!-- <div class="c"></div>
            <div class="c-c">
                <div class="c-e"></div>
                <div class="c-e"></div>
            </div> -->


            <!-- animation end -->
        </div>

    </div>
</div>






<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>