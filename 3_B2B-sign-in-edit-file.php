<?php $title = 'KunstHaus | 廠商會員資料修改'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-sign-in-edit-file.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container">
        <div class="row signinbg col-12">
            <div class="title col-xl-8">
                <h1>編輯主辦單位檔案</h1>
                <p class="text">KunstHaus 使用者將透過下列資訊認識你</p>

                <div class="ogzcard">
                    <div class="picture">
                        <svg class="people" xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140">
                            <path id="Union_7" data-name="Union 7" d="M0,140V122.5c0-19.254,31.5-35,70-35s70,15.75,70,35V140ZM35,35A35,35,0,1,1,70,70,35,35,0,0,1,35,35Z" fill="#7fc4fd" />
                        </svg>
                        <button class="pictureadd">
                            <svg class="peopleadd" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38.661" height="35.564" viewBox="0 0 38.661 35.564">
                                <defs>
                                    <clipPath id="clip-path">
                                        <rect width="38.661" height="35.564" fill="none" />
                                    </clipPath>
                                </defs>
                                <g id="Repeat_Grid_10" data-name="Repeat Grid 10" clip-path="url(#clip-path)">
                                    <g transform="translate(-220 -225.001)">
                                        <path id="Path_623" data-name="Path 623" d="M427.768,74.558l-2.495,24.026c-.117,1.752-1.171,1.96-3.013,1.745l-.029-1.962.918.1,2.522-24.125-26.747-2.795-.354,3.383-2.13.1.386-3.7a2.109,2.109,0,0,1,2.318-1.879l26.745,2.795A2.11,2.11,0,0,1,427.768,74.558ZM420.2,77.1l1.117,24.458a2.108,2.108,0,0,1-2.01,2.2L392.442,105a2.107,2.107,0,0,1-2.2-2.01l-1.118-24.458a2.108,2.108,0,0,1,2.009-2.2l26.865-1.233A2.109,2.109,0,0,1,420.2,77.1Zm-27.859,25.56,26.863-1.233L418.092,77.2,391.228,78.43Zm25.476-8.456a3.159,3.159,0,0,0-.841-2.006l-1.889-2.037a1.584,1.584,0,0,0-2.3.106l-3.418,3.958-7.425-9.146a1.577,1.577,0,0,0-2.469.019l-5.8,7.645a3.171,3.171,0,0,0-.64,2.058l.31,6.757,24.757-1.136Zm-4.342-8.35a2.9,2.9,0,1,0-3.029-2.764A2.9,2.9,0,0,0,413.474,85.855Z" transform="translate(-169.119 155.567)" fill="#7fc4fd" />
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>主辦單位名稱（必填）</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請填寫主辦單位名稱">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>主辦單位電話號碼（必填）</p>
                <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                    <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                </svg>
                <input class="inputbox" type="text" placeholder="請填寫電話號碼">
                <input class="inputbox" type="text" placeholder="分機號碼(選填)">
                <p class="trouble2">X 必填資訊未填寫完整</p>
            </div>

            <div class="inputform col-xl-8 col-12">
                <p>主辦單位簡介（必填）</p>
                <textarea class="textarea2" name="" id="" cols="72" rows="10" placeholder="請填寫主辦單位簡介"></textarea>
                <p class="wortcount">0/255</p>
            </div>

            <div class="modbutton text-center col-xl-8 col-12">
                <div class="okbutton col-xl-6 col-10 d-flex">
                    <button class="modify1 col-5 btn btn-primary">取消修改</button>
                    <button class="modify2 col-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">完成修改</button>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content pt-3 mx-auto">
                        <div class="tap">

                        </div>

                        <div class="modal-header d-flex flex-column">
                            <div class="g-check mx-auto mt-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="148.234" height="106.909" viewBox="0 0 148.234 106.909">
                                    <path id="Path_644" data-name="Path 644" d="M-97.709,57.527a10.375,10.375,0,0,0-14.63,0l-78.928,78.928-34.011-34.01a10.375,10.375,0,0,0-14.63,0,10.377,10.377,0,0,0,0,14.631l41.325,41.324a10.375,10.375,0,0,0,14.63,0h0l86.242-86.244A10.375,10.375,0,0,0-97.709,57.527Z" transform="translate(242.925 -54.509)" fill="#168fa4" />
                                </svg>
                            </div>
                            <div class="modal-title mx-auto mt-4" id="exampleModalCenterTitle">修改完成
                            </div>
                        </div>

                        <div class="modal-footer mx-auto mt-2">
                            <button type="button" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>