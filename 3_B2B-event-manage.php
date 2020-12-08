<?php $title = 'KunstHaus | 活動管理'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-event-manage.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container">
        <div class="row ticketbg">
            <div class="title">
                <h1>活動管理</h1>
                <p class="text">您可以在此查看所有歷來活動的紀錄</p>
                <div class="ticketbutton d-flex col-xl-6 col-12">
                    <button class="modify2 btn " onclick="">歷史紀錄</button>
                    <button class="modify2 btn " onclick="">尚未舉行</button>
                    <button class="modify2 btn " onclick="">已結束</button>
                    <button class="modify btn ">審核中</button>
                </div>
                <form class="header-search2 col-xl-6 col-12" method="POST" name="header-search" class="form-inline ">
                    <input class="search" type="text" name="search" placeholder="搜索活動名稱">
                    <button class="search-icon" type="submit">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                    </button>
                </form>

                <table>
                    <thead>
                        <tr class="tr d-flex mr-5 col-xl-12 col-12">
                            <td class="col-3">活動名稱</td>
                            <td class="col-3">活動日期</td>

                            <td class="col-3">活動狀態
                            </td>
                            <td class="col-5"></td>
                            <td></td>

                        </tr>
                    </thead>
                    <tbody class=" col-xl-12 col-12">
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26 ~ 2020-11-22</td>

                            <td style="color: #ff0000;">已結束</td>
                            <td class="d-flex">

                                <div class="modbutton text-center">
                                    <img class="modify3 btn " src="<?= WEB_ROOT ?>/imgs/b2b/edit-button.svg" alt="" onclick="location.href='3_B2B-edit-event.php'"></img>
                                </div>
                                <div class="modbutton text-center">
                                    <img class="modify4 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/trash.svg" alt="" data-target="#exampleModalCenter"></img>
                                </div>

                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26 ~ 2020-11-22</td>

                            <td style="color: #ff0000;">已結束</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <img class="modify3 btn" data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/edit-button.svg" alt="" onclick="location.href='3_B2B-edit-event.php'"></img>
                                </div>
                                <div class="modbutton text-center">
                                    <img class="modify4 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/trash.svg" alt="" data-target="#exampleModalCenter"></img>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26 ~ 2020-11-22</td>

                            <td style="color: #ff0000;">已結束</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <img class="modify3 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/edit-button.svg" alt="" onclick="location.href='3_B2B-edit-event.php'"></img>
                                </div>
                                <div class="modbutton text-center">
                                    <img class="modify4 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/trash.svg" alt="" data-target="#exampleModalCenter"></img>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26 ~ 2020-11-22</td>

                            <td style="color: #ff0000;">已結束</td>
                            <td class="d-flex">
                                <div class="modbutton text-center ">
                                    <img class="modify3 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/edit-button.svg" alt="" data-target=""></img>
                                </div>
                                <div class="modbutton text-center">
                                    <img class="modify4 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/trash.svg" alt="" data-target="#exampleModalCenter"></img>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26 ~ 2020-11-22</td>

                            <td style="color: #ff0000;">已結束</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <img class="modify3 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/edit-button.svg" alt="" onclick="location.href='3_B2B-edit-event.php'"></img>
                                </div>
                                <div class="modbutton text-center">
                                    <img class="modify4 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/trash.svg" alt="" data-target="#exampleModalCenter"></img>
                                </div>
                            </td>
                        </tr>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26 ~ 2020-11-22</td>

                            <td style="color: #ff0000;">已結束</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <img class="modify3 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/edit-button.svg" alt="" onclick="location.href='3_B2B-edit-event.php'"></img>
                                </div>
                                <div class="modbutton text-center">
                                    <img class="modify4 btn " data-toggle="modal" src="<?= WEB_ROOT ?>/imgs/b2b/trash.svg" alt="" data-target="#exampleModalCenter"></img>
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
                                    <div class="g-check mx-auto mt-2">
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
                                    <div class="modal-text ml-3 mt-1" id="exampleModalCenterTitle">活動名稱：空山祭
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
                                    <button type="button" class="closebutton btn btn-secondary mt-1" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
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