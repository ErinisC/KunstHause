<?php $title = 'Kunsthaus|會員登入'; ?>
<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php

if (isset($_SERVER['HTTP_REFERER'])) {
    $gotoURL = $_SERVER['HTTP_REFERER'];
} else {
    $gotoURL = '4_productList.php';
}
?>

<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<!-- 引入css -->
<link rel="stylesheet" href="./css/1_member-login.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>
<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="container">
    <div class="row">

        <!-- 變形怪 -->
        <div class="monster">
            <div class="c"></div>
            <div class="c-c">
                <div class="c-e"></div>
                <div class="c-e"></div>
            </div>
        </div>


        <!-- login list Area -->

        <div class="login-popup col-lg-5 col-md-5 col-sm-5 col-12 pb-0 pt-5">
            <div class="deco">
                <img class="g-clip" src=" <?= WEB_ROOT ?>/imgs/member/g-clip.svg">
            </div>
            <div class="login-title" id="autoinput">請登入會員</div>
            <div class="reminder ml-3">*您可以選擇下列帳號快速登入</div>
            <div class="icons d-flex justify-content-center mx-auto">
                <img class="facebook" src=" <?= WEB_ROOT ?>/imgs/member/facebook-brands.svg" style="  cursor: pointer">
                <p>OR</p>
                <img class="google" src=" <?= WEB_ROOT ?>/imgs/member/google-plus-brands.svg" style="  cursor: pointer">
            </div>

            <!-- 登入表單開始 -->

            <!-- alert -->
            <div id="info_bar" class="alert alert-danger" role="alert" style="display:none">
            </div>

            <div class="login-form" col-xl-12 col-md-12 col-sm-12 col-12 position-relative>

                <form name="form1" id="loginForm" onsubmit="checkForm(); return false;" novalidate>
                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-10 mx-auto">
                        <label for="account" class="login-item">
                            <p>帳號</p>
                        </label>
                        <div class="input-wrap">
                            <div class="input-box">
                                <input type="email" class="form-control" id="account" name="account" placeholder="請填寫email信箱" required>
                            </div>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-10 mx-auto">
                        <label for="password" class="login-item">
                            <p>密碼</p>
                        </label>
                        <div class="input-wrap">
                            <div class="input-box">
                                <input type="password" class="form-control" id="password" name="password" placeholder="請輸入您的密碼" name="password" required>
                            </div>
                            <!-- <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i> -->
                            <small class="form-text"></small>
                        </div>
                    </div>

                    <!-- d-flex justify-content-center -->
                    <!-- 登入按紐 -->
                    <div class="login-btn d-flex justify-content-center mt-5">
                        <!-- 忘記密碼 Modal Area -->
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary col-4 mr-3" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #168FA4">
                            <p class="fp">忘記密碼?</p>
                        </button>

                        <button type="submit" class="btn btn-primary col-4 ml-3">登入</button>
                    </div>
                </form>
            </div>

            <!-- d-block mx-auto mt-3 -->

            <!-- 註冊標示 -->
            <div class="others">
                <div class="help d-flex justify-content-around my-5">
                    <p>還不是 Kunsthaus會員嗎?</p>
                    <a href="1_member-signup.php" class="s-signup text-dark">
                        <p style="font-weight:600; color:#183491; font-size: 0.9rem">我要註冊</p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- 忘記密碼 Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content mx-auto col-11">
            <div class="modal-header d-flex flex-column">
                <div class="modal-title mx-auto" id="exampleModalCenterTitle">忘記密碼
                </div>
                <img class="q-mark mt-2 mx-auto" id="q-mark" src=" <?= WEB_ROOT ?>/imgs/member/question.svg">
            </div>
            <div class="modal-body">
                <div class="command-text mb-4"> 請輸入您的 Email<br>系統將寄送密碼重設信函給您 !
                </div>

                <div class="input-box col-11 mx-auto">
                    <input type="email" id="e" class="account form-control mb-2" name="account" placeholder="請填寫email信箱"><small class="form-text"></small>
                </div>

            </div>
            <div class="modal-footer mb-5 d-flex flex-column">
                <button type="submit" class="btn btn-primary col-5 mx-auto mb-2" data-toggle="modal" data-target="#sendModal" data-dismiss="modal">寄送</button>
                <button type="button" class="btn btn-secondary col-5 mt-3" data-dismiss="modal" style="background-color: #ff0000">關閉視窗</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Send-->
<div class="modal fade" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content mx-auto col-10">
            <div class="modal-header d-flex flex-column">
                <div class="modal-title mx-auto" id="exampleModalCenterTitle">寄送成功
                </div>
                <img class="letter mt-3 mx-auto" src=" <?= WEB_ROOT ?>/imgs/member/letter.svg">
            </div>
            <div class="modal-body mt-2">請至您的電子信箱收確認信，以進行後續密碼修改，感謝您!
            </div>

            <div class="modal-footer mb-5">
                <button type="button" class="btn btn-secondary col-5 mt-4 mx-auto" data-dismiss="modal" style="background-color: #ff0000">關閉視窗</button>
            </div>
        </div>
    </div>
</div>



<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<script>
    const account = $('#account');
    const password = $('#password');
    const info_bar = $('#info_bar')

    function checkForm() {
        let infoText = '';
        let send = true;


        if ($('#account').val() === '') {
            infoText = '您的帳號或密碼未填寫完整';
            send = false;
        } else if ($('#password').val() === '') {
            infoText = '請輸入您的密碼';
            send = false;
        } else if ($('#password').val().length < 8) {
            infoText = '您的密碼不正確';
            send = false;
        }



        if (send) {
            $.post('1_member-login-api.php', {
                account: account.val(),
                password: password.val()
            }, function(data) {
                console.log('data', data)
                if (data.success) {
                    info_bar
                        .removeClass('alert-danger')
                        .addClass('alert-success')
                        .text('登入成功');

                    setTimeout(function() {
                        location.href = '<?= $gotoURL ?>';
                    }, 1000);


                } else {
                    info_bar
                        .removeClass('alert-success')
                        .addClass('alert-danger')
                        .text('登入失敗');
                }
                info_bar.slideDown();

                setTimeout(function() {
                    info_bar.slideUp();
                }, 1000);
            }, 'json');
        } else {
            info_bar
                .removeClass('alert-success')
                .addClass('alert-danger')
                .text(infoText);
            info_bar.slideDown();

            setTimeout(function() {
                info_bar.slideUp();
            }, 1000);
        }

    }

    // 登入一鍵輸入
    $('#autoinput').click(function(event) {
        $('#account').val('test1@gmail.com');
        $('#password').val('11111111');
    });

    // 忘記密碼一鍵輸入
    $('#q-mark').click(function(event) {
        $('#e').val('helloworld123@gmail.com');
    });
</script>


<?php include __DIR__ . '/1_parts/4_footer.php'; ?>