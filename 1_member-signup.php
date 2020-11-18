<?php $title = '會員註冊'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/1_member-signup.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>


<div class="container">
    <div class="row">

        <section class="signup-list mx-auto p-0 col-lg-10 col-md-12 col-sm-12 col-12">
            <div class="list-body w-100 mx-0 pb-3 mb-5">

                <!-- 錯誤跳提醒設定 -->
                <!-- <div id="info_bar" class="alert alert-danger" role="alert" style="display: none">
                </div> -->

                <div class="deco">
                    <img class="long-clip" src=" <?= WEB_ROOT ?>/imgs/member/clip.svg">

                    <div class="tape">
                        <img src=" <?= WEB_ROOT ?>/imgs/member/registrater.svg">
                    </div>
                </div>


                <div class="list-title">歡迎您加入「Kunsthaus」會員!<br>
                    您可以隨時上網查詢預售狀況、節目資訊、演出時間等資訊。
                </div>
                <div class="signup-form col-md-12 col-sm-8 col-6">
                    <form name="form1" onsubmit="checkForm(); return false;">
                        <div class="form-group">
                            <label for="name">會員姓名 (必填)</label>
                            <div class="input-box d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.83 113.11" class="r-pin">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                opacity: 0.4;
                                            }

                                            .cls-2 {
                                                fill: #2b5621;
                                                stroke: #2b5621;
                                            }

                                            .cls-6 {
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 8px;
                                            }

                                            .cls-3 {
                                                fill: #f42222;
                                            }

                                            .cls-4 {
                                                fill: #ff7676;
                                            }

                                            .cls-5 {
                                                fill: #e8e8e8;
                                            }

                                            .cls-6 {
                                                fill: none;
                                                stroke: #102d3b;
                                            }
                                        </style>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g class="cls-1">
                                                <path class="cls-2" d="M56.27,21.36C59.64,18,63.42,12.91,64.1,8.22H26c.69,4.69,4.46,9.76,7.83,13.14,1.13,1.1-1.56,25.35-3.69,26.54C22.54,52.16,16.44,59.69,13.22,69H76.83C73.62,59.69,67.51,52.16,60,47.9,57.84,46.71,55.15,22.5,56.27,21.36Z" />
                                                <polygon class="cls-2" points="50.24 68.98 39.81 68.98 45.03 109.11 50.24 68.98" />
                                            </g>
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M50.71,43.68C48.59,42.45,45.9,18.24,47,17.14,50.39,13.8,54.17,8.69,54.85,4H51.76c-.68,4.69-4.46,9.76-7.83,13.14-1.13,1.1,1.56,25.35,3.69,26.54,7.55,4.26,13.66,11.79,16.87,21.08h3.09C64.33,55.47,58.26,48,50.71,43.68Z" />
                                            <path class="cls-4" d="M31.72,4H26a11.1,11.1,0,0,0,4.61,11.49L28.47,44.62A27.41,27.41,0,0,0,17.31,64.76h7.55s-.16-13.64,6.66-19.89l1.2-29.34A16.3,16.3,0,0,1,31.72,4Z" />
                                            <polygon class="cls-5" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                            <path class="cls-6" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <polygon class="cls-6" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                        </g>
                                    </g>
                                </svg>
                                <input type="text" class="form-control" id="name" placeholder="請填寫真實姓名" name="name">
                                <small class="form-text"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">會員帳號 (必填)</label>
                            <div class="input-box d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.83 113.11" class="r-pin">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                opacity: 0.4;
                                            }

                                            .cls-2 {
                                                fill: #2b5621;
                                                stroke: #2b5621;
                                            }

                                            .cls-6 {
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 8px;
                                            }

                                            .cls-3 {
                                                fill: #f42222;
                                            }

                                            .cls-4 {
                                                fill: #ff7676;
                                            }

                                            .cls-5 {
                                                fill: #e8e8e8;
                                            }

                                            .cls-6 {
                                                fill: none;
                                                stroke: #102d3b;
                                            }
                                        </style>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g class="cls-1">
                                                <path class="cls-2" d="M56.27,21.36C59.64,18,63.42,12.91,64.1,8.22H26c.69,4.69,4.46,9.76,7.83,13.14,1.13,1.1-1.56,25.35-3.69,26.54C22.54,52.16,16.44,59.69,13.22,69H76.83C73.62,59.69,67.51,52.16,60,47.9,57.84,46.71,55.15,22.5,56.27,21.36Z" />
                                                <polygon class="cls-2" points="50.24 68.98 39.81 68.98 45.03 109.11 50.24 68.98" />
                                            </g>
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M50.71,43.68C48.59,42.45,45.9,18.24,47,17.14,50.39,13.8,54.17,8.69,54.85,4H51.76c-.68,4.69-4.46,9.76-7.83,13.14-1.13,1.1,1.56,25.35,3.69,26.54,7.55,4.26,13.66,11.79,16.87,21.08h3.09C64.33,55.47,58.26,48,50.71,43.68Z" />
                                            <path class="cls-4" d="M31.72,4H26a11.1,11.1,0,0,0,4.61,11.49L28.47,44.62A27.41,27.41,0,0,0,17.31,64.76h7.55s-.16-13.64,6.66-19.89l1.2-29.34A16.3,16.3,0,0,1,31.72,4Z" />
                                            <polygon class="cls-5" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                            <path class="cls-6" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <polygon class="cls-6" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                        </g>
                                    </g>
                                </svg>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="請填寫email信箱">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">密碼 (必填)</label>
                            <div class="input-box d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.83 113.11" class="r-pin">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                opacity: 0.4;
                                            }

                                            .cls-2 {
                                                fill: #2b5621;
                                                stroke: #2b5621;
                                            }

                                            .cls-6 {
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 8px;
                                            }

                                            .cls-3 {
                                                fill: #f42222;
                                            }

                                            .cls-4 {
                                                fill: #ff7676;
                                            }

                                            .cls-5 {
                                                fill: #e8e8e8;
                                            }

                                            .cls-6 {
                                                fill: none;
                                                stroke: #102d3b;
                                            }
                                        </style>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g class="cls-1">
                                                <path class="cls-2" d="M56.27,21.36C59.64,18,63.42,12.91,64.1,8.22H26c.69,4.69,4.46,9.76,7.83,13.14,1.13,1.1-1.56,25.35-3.69,26.54C22.54,52.16,16.44,59.69,13.22,69H76.83C73.62,59.69,67.51,52.16,60,47.9,57.84,46.71,55.15,22.5,56.27,21.36Z" />
                                                <polygon class="cls-2" points="50.24 68.98 39.81 68.98 45.03 109.11 50.24 68.98" />
                                            </g>
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M50.71,43.68C48.59,42.45,45.9,18.24,47,17.14,50.39,13.8,54.17,8.69,54.85,4H51.76c-.68,4.69-4.46,9.76-7.83,13.14-1.13,1.1,1.56,25.35,3.69,26.54,7.55,4.26,13.66,11.79,16.87,21.08h3.09C64.33,55.47,58.26,48,50.71,43.68Z" />
                                            <path class="cls-4" d="M31.72,4H26a11.1,11.1,0,0,0,4.61,11.49L28.47,44.62A27.41,27.41,0,0,0,17.31,64.76h7.55s-.16-13.64,6.66-19.89l1.2-29.34A16.3,16.3,0,0,1,31.72,4Z" />
                                            <polygon class="cls-5" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                            <path class="cls-6" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <polygon class="cls-6" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                        </g>
                                    </g>
                                </svg>
                                <input type="password" class="form-control" id="password" placeholder="密碼不超過10碼" name="password">
                                <small class="form-text"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">確認密碼 (必填)</label>
                            <div class="input-box d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.83 113.11" class="r-pin">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                opacity: 0.4;
                                            }

                                            .cls-2 {
                                                fill: #2b5621;
                                                stroke: #2b5621;
                                            }

                                            .cls-6 {
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 8px;
                                            }

                                            .cls-3 {
                                                fill: #f42222;
                                            }

                                            .cls-4 {
                                                fill: #ff7676;
                                            }

                                            .cls-5 {
                                                fill: #e8e8e8;
                                            }

                                            .cls-6 {
                                                fill: none;
                                                stroke: #102d3b;
                                            }
                                        </style>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g class="cls-1">
                                                <path class="cls-2" d="M56.27,21.36C59.64,18,63.42,12.91,64.1,8.22H26c.69,4.69,4.46,9.76,7.83,13.14,1.13,1.1-1.56,25.35-3.69,26.54C22.54,52.16,16.44,59.69,13.22,69H76.83C73.62,59.69,67.51,52.16,60,47.9,57.84,46.71,55.15,22.5,56.27,21.36Z" />
                                                <polygon class="cls-2" points="50.24 68.98 39.81 68.98 45.03 109.11 50.24 68.98" />
                                            </g>
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M50.71,43.68C48.59,42.45,45.9,18.24,47,17.14,50.39,13.8,54.17,8.69,54.85,4H51.76c-.68,4.69-4.46,9.76-7.83,13.14-1.13,1.1,1.56,25.35,3.69,26.54,7.55,4.26,13.66,11.79,16.87,21.08h3.09C64.33,55.47,58.26,48,50.71,43.68Z" />
                                            <path class="cls-4" d="M31.72,4H26a11.1,11.1,0,0,0,4.61,11.49L28.47,44.62A27.41,27.41,0,0,0,17.31,64.76h7.55s-.16-13.64,6.66-19.89l1.2-29.34A16.3,16.3,0,0,1,31.72,4Z" />
                                            <polygon class="cls-5" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                            <path class="cls-6" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <polygon class="cls-6" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                        </g>
                                    </g>
                                </svg>
                                <input type="password" class="form-control" id="password" placeholder="密碼不超過10碼" name="password">
                                <small class="form-text"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone">連絡電話</label>
                            <div class="input-box d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.83 113.11" class="r-pin">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                opacity: 0.4;
                                            }

                                            .cls-2 {
                                                fill: #2b5621;
                                                stroke: #2b5621;
                                            }

                                            .cls-6 {
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 8px;
                                            }

                                            .cls-3 {
                                                fill: #f42222;
                                            }

                                            .cls-4 {
                                                fill: #ff7676;
                                            }

                                            .cls-5 {
                                                fill: #e8e8e8;
                                            }

                                            .cls-6 {
                                                fill: none;
                                                stroke: #102d3b;
                                            }
                                        </style>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g class="cls-1">
                                                <path class="cls-2" d="M56.27,21.36C59.64,18,63.42,12.91,64.1,8.22H26c.69,4.69,4.46,9.76,7.83,13.14,1.13,1.1-1.56,25.35-3.69,26.54C22.54,52.16,16.44,59.69,13.22,69H76.83C73.62,59.69,67.51,52.16,60,47.9,57.84,46.71,55.15,22.5,56.27,21.36Z" />
                                                <polygon class="cls-2" points="50.24 68.98 39.81 68.98 45.03 109.11 50.24 68.98" />
                                            </g>
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M50.71,43.68C48.59,42.45,45.9,18.24,47,17.14,50.39,13.8,54.17,8.69,54.85,4H51.76c-.68,4.69-4.46,9.76-7.83,13.14-1.13,1.1,1.56,25.35,3.69,26.54,7.55,4.26,13.66,11.79,16.87,21.08h3.09C64.33,55.47,58.26,48,50.71,43.68Z" />
                                            <path class="cls-4" d="M31.72,4H26a11.1,11.1,0,0,0,4.61,11.49L28.47,44.62A27.41,27.41,0,0,0,17.31,64.76h7.55s-.16-13.64,6.66-19.89l1.2-29.34A16.3,16.3,0,0,1,31.72,4Z" />
                                            <polygon class="cls-5" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                            <path class="cls-6" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <polygon class="cls-6" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                        </g>
                                    </g>
                                </svg>
                                <input type=" text" class="form-control" id="phone" placeholder="請輸入您的手機號碼" name="phone">
                                <small class="form-text" class="r-pin"></small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="account">地址</label>
                            <div class="input-box d-flex">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.83 113.11" class="r-pin">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                opacity: 0.4;
                                            }

                                            .cls-2 {
                                                fill: #2b5621;
                                                stroke: #2b5621;
                                            }

                                            .cls-6 {
                                                stroke-linecap: round;
                                                stroke-linejoin: round;
                                                stroke-width: 8px;
                                            }

                                            .cls-3 {
                                                fill: #f42222;
                                            }

                                            .cls-4 {
                                                fill: #ff7676;
                                            }

                                            .cls-5 {
                                                fill: #e8e8e8;
                                            }

                                            .cls-6 {
                                                fill: none;
                                                stroke: #102d3b;
                                            }
                                        </style>
                                    </defs>
                                    <g id="圖層_2" data-name="圖層 2">
                                        <g id="圖層_1-2" data-name="圖層 1">
                                            <g class="cls-1">
                                                <path class="cls-2" d="M56.27,21.36C59.64,18,63.42,12.91,64.1,8.22H26c.69,4.69,4.46,9.76,7.83,13.14,1.13,1.1-1.56,25.35-3.69,26.54C22.54,52.16,16.44,59.69,13.22,69H76.83C73.62,59.69,67.51,52.16,60,47.9,57.84,46.71,55.15,22.5,56.27,21.36Z" />
                                                <polygon class="cls-2" points="50.24 68.98 39.81 68.98 45.03 109.11 50.24 68.98" />
                                            </g>
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <path class="cls-3" d="M50.71,43.68C48.59,42.45,45.9,18.24,47,17.14,50.39,13.8,54.17,8.69,54.85,4H51.76c-.68,4.69-4.46,9.76-7.83,13.14-1.13,1.1,1.56,25.35,3.69,26.54,7.55,4.26,13.66,11.79,16.87,21.08h3.09C64.33,55.47,58.26,48,50.71,43.68Z" />
                                            <path class="cls-4" d="M31.72,4H26a11.1,11.1,0,0,0,4.61,11.49L28.47,44.62A27.41,27.41,0,0,0,17.31,64.76h7.55s-.16-13.64,6.66-19.89l1.2-29.34A16.3,16.3,0,0,1,31.72,4Z" />
                                            <polygon class="cls-5" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                            <path class="cls-6" d="M47.05,17.14C50.42,13.8,54.2,8.69,54.88,4H16.73c.68,4.69,4.46,9.76,7.83,13.14,1.12,1.1-1.57,25.35-3.69,26.54C13.32,47.94,7.21,55.47,4,64.76H67.61c-3.22-9.29-9.32-16.82-16.87-21.08C48.61,42.49,45.92,18.24,47.05,17.14Z" />
                                            <polygon class="cls-6" points="41.02 64.76 30.59 64.76 35.8 104.89 41.02 64.76" />
                                        </g>
                                    </g>
                                </svg>
                                <input type="text" class="form-control" id="address" placeholder="請填寫您的居住地址" name="address">
                                <small class="form-text"></small>
                            </div>
                        </div>

                        <div class="terms-title">請詳閱 Kunsthaus 服務條款及會員相關權益
                            <svg xmlns="http://www.w3.org/2000/svg" width="68" height="38" viewBox="0 0 68 38" class="eyes">
                                <g id="ic_eye" data-name="ic/eye" transform="translate(0.111)">
                                    <g id="Ellipse_338" data-name="Ellipse 338" transform="translate(-0.111)" fill="#fff" stroke="#000" stroke-width="3">
                                        <ellipse cx="15.5" cy="19" rx="15.5" ry="19" stroke="none" />
                                        <ellipse cx="15.5" cy="19" rx="14" ry="17.5" fill="none" />
                                    </g>
                                    <g id="Ellipse_339" data-name="Ellipse 339" transform="translate(40.889)" fill="#fff" stroke="#000" stroke-width="3">
                                        <ellipse cx="13.5" cy="19" rx="13.5" ry="19" stroke="none" />
                                        <ellipse cx="13.5" cy="19" rx="12" ry="17.5" fill="none" />
                                    </g>
                                    <path id="Path_1303" data-name="Path 1303" d="M7.791,0A7.757,7.757,0,0,0,3.9,1.04L6.393,6.612.438,5.216A7.784,7.784,0,1,0,7.791,0Z" transform="translate(43.502 16.723) rotate(-30)" />
                                    <path id="Path_1304" data-name="Path 1304" d="M7.791,0A7.757,7.757,0,0,0,3.9,1.04L6.393,6.612.438,5.216A7.784,7.784,0,1,0,7.791,0Z" transform="translate(3.294 16.723) rotate(-30)" />
                                </g>
                            </svg>
                        </div>

                        <div id="terms" class="terms col-xl-12 col-md-12 col-sm-6 col-12">

                            <div class="service-term m-3">服務條款</div>
                            <div class="service-text mx-4">
                                Kunsthaus 依據本服務條款提供本站各項服務。當您註冊完成或開始使用本服務時，
                                即表示您已閱讀、了解並同意接受本服務條款之所有內容。如果您不同意本服務條款
                                的內容，或者您所屬的國家或地域排除本服務條款內容之全部或部分時，您應立即停
                                止使用本服務。此外，當您使用本服務之特定功能時，可能會依據...
                            </div>

                            <div class="privacy-policy m-3">隱私權政策</div>
                            <div class="privacy-text mx-4">
                                1. 本網站將遵守 「個人隱私保護法」之規定與相關隱私保護政策，除本網站服務條款隱私權政策與法律規定外，不會違法洩漏或利用您的個人隱私資料。<br>
                                2. 當您於本官網註冊使用後，即表示您同意使用本網站所提供之服務及隱私權條款。<br>
                                3. 如果您不願意收到本網站之行銷相關即促銷活動資訊，可至會員中心取消電子報或連繫客服人員協助處理。
                            </div>
                        </div>

                        <div class="form-check my-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="my_check" value="是">
                            <label class="form-check-label" for="exampleCheck1">我同意Kunsthaus服務條款及隱私權政策</label>
                        </div>
                        <div class="signup-btn d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary col-2">註冊
                            </button>
                        </div>
                        <div class="line d-flex justify-content-between">
                            <div>您已經是 Kunsthaus 的會員?</div>
                            <div>登入</div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>






<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>