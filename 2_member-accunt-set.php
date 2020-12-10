<?php $title = ''; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php
$sid = intval($_SESSION['user']['sid']);

$m_sql = "SELECT * FROM `member` WHERE `sid`=$sid ";

$stmt = $pdo->query($m_sql);
$m_row = $stmt->fetch();

// echo json_encode($m_row, JSON_UNESCAPED_UNICODE);
// exit;
?>

<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/2_member-accunt-set.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<section>

    <div class="container col-10 mb-5">

        <div class="account-set">
            <div class="list-title mx-auto col-xl-10 col-10 col-sm-10">
                <p class="pt-5">帳號設定</p>
            </div>


            <!-- ------修改大頭照-------- -->
            <!-- <div class="ogzcard mx-auto col-10 justify-content-center d-flex">
                <div class="big-head mt-5">
                    <img class="long-clip-1" src=" <?= WEB_ROOT ?>/imgs/member_imgs/member_14.jpg">
                </div>

                <button class="little-head">
                    <input id="picture" name="picture" class="pictureadd" ref={fileInput} accept="image/jpeg,image/png" type="file">
                    <img class="long-clip" src=" <?= WEB_ROOT ?>/imgs/products/Group 910.svg">
                </button>
            </div> -->

            <div class="ogzcard">
                    <div class="picture">
                        <img class="eventimg" src="" width="100%" height="224" style="border:0">
                    </div>
                    <!-- <svg class="people" xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 140 140">
                        <path id="Union_7" data-name="Union 7" d="M0,140V122.5c0-19.254,31.5-35,70-35s70,15.75,70,35V140ZM35,35A35,35,0,1,1,70,70,35,35,0,0,1,35,35Z" fill="#7fc4fd" />
                    </svg> -->

                    <input type="text" id="pic_name" name="pic_name" hidden>
                    <button class="pictureaddbtn">
                        <input id="picture" name="picture" class="pictureadd" ref={fileInput} accept="image/jpeg,image/png" type="file">
                        <svg class="peopleadd" style="margin-top: -125px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="38.661" height="35.564" viewBox="0 0 38.661 35.564">
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
                    <!-- <a class="fakeimgadd" href="">點選此處新增圖片</a> -->
                </div>
            <!-- -----------第一段------------- -->

            <form name="form1" class="form1 pb-5 col-10 col-lg-10 col-sm-10">
                <input type="hidden" name="sid" value="<?= $m_row['sid'] ?>">
                <div class="row col-10 p-0 mx-auto category-wrap mt-5">
                    <div class="category-header d-flex align-items-center justify-content-between w-100">
                        <div class="category-count">修改密碼</div>
                        <div class="category-hr"></div>
                    </div>
                </div>

                <div class="inputform col-10">
                    <p>原本密碼</p>
                    <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                    </svg>
                    <input class="inputbox" type="text" name="nowPass" id="nowPass" placeholder="請輸入您現在的密碼">
                    <p class="trouble2 error1"></p>
                </div>

                <div class="inputform col-xl-10 col-10">
                    <p>輸入新密碼</p>
                    <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                    </svg>
                    <input class="inputbox" type="text" id="newPass1" placeholder="請填寫新密碼">

                </div>

                <div class="inputform col-xl-10 col-10">
                    <p>再次輸入新密碼</p>
                    <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                    </svg>
                    <input class="inputbox" type="text" id="newPass2" placeholder="請再次填寫新密碼">
                    <p class="trouble2 error2"></p>
                </div>
                <input type="hidden" id="sentPass" name="password" value="<?= $m_row['password'] ?>">

                <!-- -----------第二段------------- -->

                <div class="row col-10 p-0 mx-auto category-wrap mt-5">
                    <div class="category-header d-flex align-items-center justify-content-between w-100">
                        <div class="category-count">修改名稱</div>
                        <div class="category-hr"></div>
                    </div>
                </div>



                <div class="inputform col-xl-10 col-10">
                    <p>原本名稱</p>
                    <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                    </svg>
                    <input class="inputbox" type="text" placeholder="" value="<?= $m_row['name'] ?>">

                </div>

                <div class="inputform col-xl-10 col-10">
                    <p>輸入新名稱</p>
                    <svg class="trouble" id="Attention" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path id="Path_35" data-name="Path 35" d="M8,0a8,8,0,1,0,8,8A8.024,8.024,0,0,0,8,0ZM9.1,12.2H6.9V10.3H9.2v1.9Zm.1-7.4L8.6,9.2H7.4L6.8,4.8v-1H9.3v1Z" fill="#ff1000" />
                    </svg>
                    <input class="inputbox" type="text" placeholder="請填寫新名稱" name="name" id="name">
                    <p class="trouble2 error3"></p>
                </div>



                <div class="modbutton text-center col-xl-8 col-10 mb-5">
                    <div class="okbutton col-xl-6 col-10 d-flex">
                        <button class="modify1 col-5 btn btn-primary" type="reset">取消</button>
                        <button class="modify2 col-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="btnChangePass">完成</button>
                    </div>
                </div>
            </form>
        </div>


    </div>

</section>





<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<script>
    // header不要fixed
    $('header').removeClass('position-fixed');

    $('#btnChangePass').on('click', function(event) {
        event.preventDefault();
        console.log('hii')
        const newName = $('#name');

        $('.error1').text('');
        $('.error2').text('');
        $('.error3').text('');


        let errorMsg = '';
        let isPass = true;

        // if (newName.val().length < 2) {
        //     isPass = false;
        //     $('.error3').text('姓名不得小於二字');
        // }

        // if ($('#nowPass').val() != ) {
        //     errorMsg = "舊密碼錯誤";
        //     $('.error1').text(errorMsg);
        // } else 
        if ($('#newPass1').val() != $('#newPass2').val()) {
            errorMsg = "新密碼不相等";
            $('.error2').text(errorMsg);
        } else {
            $('#sentPass').val($('#newPass1').val());

            $.post('2_member-accunt-api-set.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                if (data.success) {
                    console.log('成功');
                } else {
                    console.log('失敗');
                }

            }, 'json')
        };

    });

        // 預覽圖片
        $('#exampleModalCenter').on('hidden.bs.modal', function(e) {
        location.href = '3_B2B-index.php'
    });

    $('#picture').on('change', function(e) {
        const file = this.files[0];
        console.log('file', file)
        const objectURL = URL.createObjectURL(file);
        const people = $('#people');

        $('.eventimg').attr('src', objectURL).css('opacity', 1);

        $('#pic_name').val(file.name);

        // $('.people').addClass('opacity: 0;')
    });
</script>



<?php include __DIR__ . '/1_parts/4_footer.php'; ?>