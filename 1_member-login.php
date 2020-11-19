<?php $title = '會員登入'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/1_member-login.css">

<!-- 引入navbar -->
<!-- <?php include __DIR__ . '/1_parts/2_navbar.php'; ?> -->


<div class="container">
    <div class="login-popup col-lg-6 col-md-6 col-sm-6 col-6">
        <div class="deco">
            <img class="g-clip" src=" <?= WEB_ROOT ?>/imgs/member/g-clip.svg">
            <img class="x-btn" src=" <?= WEB_ROOT ?>/imgs/member/times-solid.svg">
        </div>
        <div class="login-title">請登入會員</div>
        <div class="reminder">*您可以選擇下列帳號快速登入</div>
        <div class="icons d-flex justify-content-center mx-auto">
            <img class="facebook" src=" <?= WEB_ROOT ?>/imgs/member/facebook-brands.svg">
            <p>或</p>
            <img class="google" src=" <?= WEB_ROOT ?>/imgs/member/google-plus-brands.svg">
        </div>

        <div class="form col-xl-12 col-md-12 col-sm-12 col-12 position-relative">
            <div class="form-group col-xl-8 col-md-8 col-sm-8 col-8 mx-auto">
                <label for="email" class="login-item">帳號</label>
                <div class="input-box">
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="請填寫email信箱">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>

            <div class="form-group col-xl-8 col-md-8 col-sm-8 col-8 mx-auto">
                <label for="password" class="login-item">密碼</label>
                <div class="input-box">
                    <input type="password" class="form-control" id="password" placeholder="密碼不超過10碼" name="password">
                    <small class="form-text position-absolute mt-2">忘記密碼?</small>
                </div>
            </div>
        </div>

        <div class="login-btn d-flex justify-content-center">
            <button type="submit" class="btn btn-primary col-2 mt-4">登入</button>
        </div>

        <div class="help d-flex justify-content-between mt-4 p-3">
            <p>還不是 Kunsthaus會員嗎? </p>
            <p>點此註冊</p>
        </div>




    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的JS -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>