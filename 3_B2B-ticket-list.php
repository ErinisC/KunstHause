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

            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>