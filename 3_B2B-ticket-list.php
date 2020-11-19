<?php $title = 'B2B首頁'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-ticket-list.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container">
        <div class="row ticketbg col-12">
            <div class="title">
                <h1>訂單管理</h1>
                <p class="text">您可以在此查看所有的訂單紀錄</p>
                <div class="ticketbutton d-flex col-6">
                    <button class="modify btn btn-primary">歷史訂單</button>
                    <button class="modify2 btn btn-primary">已付款</button>
                    <button class="modify2 btn btn-primary">未付款</button>
                    <button class="modify2 btn btn-primary">已取消</button>
                </div>
                <form class="header-search col-6" method="POST" name="header-search" class="form-inline ">
                    <input class="search" type="text" name="search" placeholder="搜索訂單編號或活動名稱">
                    <button class="search-icon" type="submit">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                    </button>
                </form>

                <table>
                    <thead>
                        <tr class="tr d-flex mr-5">
                            <td>訂單編號</td>
                            <td>訂單日期</td>
                            <td>合計</td>
                            <td class="d-flex">訂單狀態<div class="white"></div>
                            </td>
                            <td class="d-flex">顯示
                                <div class="white"></div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr2 d-flex">
                            <td>XDXD48763</td>
                            <td>2020-10-26</td>
                            <td>NT$590</td>
                            <td>已付款</td>
                            <td class="d-flex">
                                <div class="modbutton text-center">
                                    <button class="modify3 btn btn-primary">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary">刪除訂單</button>
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
                                    <button class="modify3 btn btn-primary">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary">刪除訂單</button>
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
                                    <button class="modify3 btn btn-primary">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary">刪除訂單</button>
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
                                    <button class="modify3 btn btn-primary">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary">刪除訂單</button>
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
                                    <button class="modify3 btn btn-primary">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary">刪除訂單</button>
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
                                    <button class="modify3 btn btn-primary">查閱</button>
                                </div>
                                <div class="modbutton text-center">
                                    <button class="modify4 btn btn-primary">刪除訂單</button>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>