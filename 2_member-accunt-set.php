<?php $title = ''; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/2_member-accunt-set.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<section>
<div class="container">
        <div class="row">

        </div>
    

    </div>
</section>
    <div class="container">
        <div class="account-set row">
            <div class="list-title mx-auto col-xl-12 col-12">
                <p>帳號設定</p>
            </div>

        <!-- ------修改大頭照-------- -->
            <div class="ogzcard mx-auto w-100">
                <div class="big-head mt-5 d-flex justify-content-center">
                    <img class="long-clip-1" src=" <?= WEB_ROOT ?>/imgs/products/Group 324.svg">
                </div>

                <button class="little-head">
                    <img class="long-clip" src=" <?= WEB_ROOT ?>/imgs/products/Group 910.svg">
                </button>
            </div>

            <div class="title-out col-xl-8 col-12 p-0">
                <div class="title-bar col-2">
                    <p class="mt-1 mb-1">修改密碼</p>
                </div>
            </div>



            <div class="inputform col-xl-8 col-12">
                <p>原本密碼</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請輸入您現在的密碼">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>輸入新密碼</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請填寫新密碼">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>再次輸入新密碼</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請再次填寫新密碼">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

<!-- -----------第二段------------- -->

            <div class="title-out col-xl-8 col-12 p-0">
                <div class="title-bar col-2">
                    <p class="mt-1 mb-1">修改暱稱</p>
                </div>
            </div>



            <div class="inputform col-xl-8 col-12">
                <p>原本暱稱</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請輸入您現在的暱稱">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>輸入新暱稱</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請填寫新暱稱">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>再次輸入新暱稱</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請再次填寫新暱稱">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="modbutton text-center col-xl-8 col-12 mb-5">
                <div class="okbutton col-xl-6 col-10 d-flex">
                    <button class="modify1 col-5 btn btn-primary">取消</button>
                    <button class="modify2 col-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">完成</button>
                </div>
            </div>
        </div>
    

    </div>





<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>