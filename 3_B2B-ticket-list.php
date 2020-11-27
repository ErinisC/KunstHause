<?php $title = 'B2B首頁'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-ticket-list.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container">
        <div class="row ticketbg">
            <div class="title">
                <h1>訂單管理</h1>
                <p class="text">您可以在此查看所有的訂單紀錄</p>
                <div class="ticketbutton d-flex col-xl-6 col-12">
                    <button class="modify btn btn-primary">歷史訂單</button>
                    <button class="modify2 btn btn-primary">已付款</button>
                    <button class="modify2 btn btn-primary">未付款</button>
                    <button class="modify2 btn btn-primary">已取消</button>
                </div>
                <form class="header-search col-xl-6 col-12" method="POST" name="header-search" class="form-inline ">
                    <input class="search" type="text" name="search" placeholder="搜索訂單編號或活動名稱">
                    <button class="search-icon" type="submit">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                    </button>
                </form>

                <table>
                    <thead>
                        <tr class="tr d-flex mr-5 col-xl-12 col-12">
                            <td>訂單編號</td>
                            <td>訂單日期</td>
                            <td>合計</td>
                            <td class="d-flex">訂單狀態<div class="white"></div>
                            </td>
                            <td class="confirm d-flex">顯示
                                <div class="white"></div>
                            </td>
                        </tr>
                    </thead>
                    <tbody class="col-xl-12 col-12">
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">刪除訂單</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">刪除訂單</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">刪除訂單</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">刪除訂單</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">刪除訂單</button>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter2">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">刪除訂單</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <!-- Modal 取消訂單-->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content pt-3 mx-auto">
                                <div class="tap">

                                </div>

                                <div class="modal-header d-flex flex-column">
                                    <div class="g-check mx-auto mt-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 128 128">
                                            <g id="Exclamation_mark" data-name="Exclamation mark" transform="translate(-895.422 -303.047)">
                                                <g id="Ellipse_338" data-name="Ellipse 338" transform="translate(895.422 303.047)" fill="none" stroke="#ed5b4c" stroke-width="3">
                                                    <circle cx="64" cy="64" r="64" stroke="none" />
                                                    <circle cx="64" cy="64" r="62.5" fill="none" />
                                                </g>
                                                <path id="Path_1480" data-name="Path 1480" d="M-248.277,183.461h-1.9a6.86,6.86,0,0,1-6.836-6.274l-4.336-50.505a6.86,6.86,0,0,1,6.835-7.448h10.568a6.861,6.861,0,0,1,6.836,7.448l-4.336,50.505A6.861,6.861,0,0,1-248.277,183.461Z" transform="translate(1208.792 203.813)" fill="#ed5b4c" />
                                                <circle id="Ellipse_339" data-name="Ellipse 339" cx="9" cy="9" r="9" transform="translate(951 393)" fill="#ed5b4c" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="modal-title mx-auto mt-3" id="exampleModalCenterTitle">是否確認刪除訂單!
                                    </div>
                                </div>
                                <div class="modal-footer mx-auto">
                                    <button type="button" class="yes btn btn-secondary" data-dismiss="modal" style="background-color: #ED5B4C">是</button>
                                </div>

                                <div class="modal-footer mx-auto">
                                    <button type="button" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal 查閱訂單 -->
                    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content checkmodal pt-3 mx-auto">
                                <div class="event mx-auto">
                                    <div class="eventimg"></div>
                                </div>
                                <div class="modal-header d-flex flex-column">
                                    <div class="modal-text ml-3 mt-3" id="exampleModalCenterTitle">活動名稱：空山祭
                                    </div>
                                    <div class="modal-text ml-3 mt-3" id="exampleModalCenterTitle">訂單編號：XD48763
                                    </div>
                                    <div class="modal-text ml-3 mt-3" id="exampleModalCenterTitle">訂購人姓名：王小明
                                    </div>
                                    <div class="modal-text ml-3 mt-3" id="exampleModalCenterTitle">訂購人電話：0900001234
                                    </div>
                                    <div class="modal-text ml-3 mt-3" id="exampleModalCenterTitle">訂購人電話：123@gmail.com
                                    </div>
                                </div>

                                <div class="modal-footer mx-auto">
                                    <button type="button" class="closebutton btn btn-secondary mt-3" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </table>


                <!-- 頁碼 -->
                <div class="row justify-content-center">
                    <nav class="page" aria-label="Page navigation example">
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

        </div>
    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>