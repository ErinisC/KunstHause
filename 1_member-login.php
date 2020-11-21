<?php $title = '會員登入'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php
if (isset($_POST['email']) and isset($_POST['password'])) {
    if ($_POST['email'] === 'aaa@qq.com' and $_POST['password'] === '1234') {
        $_SESSION['user'] = [
            'email' => 'aaa@qq.com',
            'nickname' => 'Chan',
        ];
    } else {
        $msg = '帳號或密碼錯誤';
    }
}
?>



<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/1_member-login.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<div class="container">
    <div class="row">
        <div id="info_bar" class="alert alert-danger" role="alert" style="display: none">
        </div>
        <div class="login-popup col-lg-5 col-md-5 col-sm-12 col-12">
            <div class="deco">

                <img class="x-btn" src=" <?= WEB_ROOT ?>/imgs/member/times-solid.svg">
            </div>
            <div class="login-title">請登入會員</div>
            <div class="reminder ml-3">*您可以選擇下列帳號快速登入</div>
            <div class="icons d-flex justify-content-center mx-auto">
                <img class="facebook" src=" <?= WEB_ROOT ?>/imgs/member/facebook-brands.svg">
                <p>或</p>
                <img class="google" src=" <?= WEB_ROOT ?>/imgs/member/google-plus-brands.svg">
            </div>


            <div class="login-form" col-xl-12 col-md-12 col-sm-12 col-12 position-relative>
                <form action="" method="post">
                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-10 mx-auto">
                        <label for="email" class="login-item">帳號</label>
                        <div class="input-box">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="請填寫email信箱">
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-10 mx-auto">
                        <label for="password" class="login-item">密碼</label>
                        <div class="input-box">
                            <input type="password" class="form-control" id="password" name="password" placeholder="密碼不超過10碼" name="password">
                            <a href="">
                                <small class="form-text position-absolute mt-2 text-dark">忘記密碼?</small>
                            </a>
                        </div>
                    </div>
                </form>
            </div>


            <div class="login-btn d-flex justify-content-center">
                <button type="submit" class="btn btn-primary col-4 mt-4">登入</button>
            </div>

            <div class="help d-flex justify-content-between my-4 p-3">
                <p>還不是 Kunsthaus會員嗎? </p>
                <a href="" class="s-signup text-dark">
                    <p style="font-weight:600">點此註冊</p>
                </a>
            </div>
        </div>
    </div>
</div>



<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<script>
    const account = $('#email'),
        password = $('#password'),
        info_bar = $('#info_bar')

    function checkForm() {

        $.post('ab-login-api.php', {
            email: email.val(),
            password: password.val()
        }, function(data) {
            if (data.success) {
                info_bar
                    .removeClass('alert-danger')
                    .addClass('alert-success')
                    .text('登入成功');
                location.href = 'ab-list.php';
            } else {
                info_bar
                    .removeClass('alert-success')
                    .addClass('alert-danger')
                    .text('登入失敗');
            }
            info_bar.slideDown();

            setTimeout(function() {
                info_bar.slideUp();
            }, 2000);
        }, 'json');
    }
</script>


<!-- 引入自己的JS -->
<!-- <script src=""></script> -->

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>