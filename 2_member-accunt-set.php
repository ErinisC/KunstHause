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
            <div class="ogzcard mx-auto col-10">
                <div class="big-head mt-5 d-flex justify-content-center">
                    <img class="long-clip-1" src=" <?= WEB_ROOT ?>/imgs/products/Group 324.svg">
                </div>

                <button class="little-head">
                    <img class="long-clip" src=" <?= WEB_ROOT ?>/imgs/products/Group 910.svg">
                </button>
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
</script>



<?php include __DIR__ . '/1_parts/4_footer.php'; ?>