<?php $title = '會員登入'; ?>
<?php include __DIR__ . '/1_parts/0_config.php'; ?>

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
        <!-- login list Area -->

        <div class="login-popup col-lg-5 col-md-5 col-sm-5 col-12 pb-3">
            <div class="deco">
                <img class="g-clip" src=" <?= WEB_ROOT ?>/imgs/member/g-clip.svg">
                <img class="x-btn" src=" <?= WEB_ROOT ?>/imgs/member/times-solid.svg">
            </div>
            <div class="login-title">請登入會員</div>
            <div class="reminder ml-3">*您可以選擇下列帳號快速登入</div>
            <div class="icons d-flex justify-content-center mx-auto">
                <img class="facebook" src=" <?= WEB_ROOT ?>/imgs/member/facebook-brands.svg">
                <p>或</p>
                <img class="google" src=" <?= WEB_ROOT ?>/imgs/member/google-plus-brands.svg">
            </div>

            <!-- 登入表單開始 -->
            <!-- alert -->

            <div id="info_bar" class="alert alert-danger" role="alert" style="display:none">
            </div>

            <div class="login-form" col-xl-12 col-md-12 col-sm-12 col-12 position-relative>
                <form name="form1" onsubmit="checkForm(); return false;">
                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-10 mx-auto">
                        <label for="account" class="login-item">帳號</label>
                        <div class="input-box">
                            <input type="text" class="form-control" id="account" name="account" placeholder="請填寫email信箱">
                            <small class="form-text text-muted"></small>
                        </div>
                    </div>

                    <div class="form-group col-xl-10 col-md-10 col-sm-10 col-10 mx-auto">
                        <label for="password" class="login-item">密碼</label>
                        <div class="input-box">
                            <input type="password" class="form-control" id="password" name="password" placeholder="密碼不超過10碼" name="password">
                            <small class="form-text"></small>
                        </div>
                    </div>


                    <!-- 登入按紐 -->
                    <div class="login-btn d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary col-4 my-4">登入</button>
                    </div>
                </form>
            </div>



            <!-- 註冊標示 -->
            <div class="others d-flex justify-content-between my-4">
                <div class="help ml-4">
                    <p>還不是 Kunsthaus會員嗎?</p>
                    <a href="" class="s-signup text-dark">
                        <p style="font-weight:600">點此註冊</p>
                    </a>
                </div>

                <!-- 忘記密碼 Modal Area -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mr-4 mt-2" data-toggle="modal" data-target="#exampleModalCenter" style="background-color: #168FA4">忘記密碼?
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">

                        <div class="modal-content mx-auto col-11">
                            <div class="modal-header d-flex flex-column">
                                <div class="modal-title mx-auto" id="exampleModalCenterTitle">忘記密碼
                                </div>
                                <img class="q-mark mt-2 mx-auto" src=" <?= WEB_ROOT ?>/imgs/member/question.svg">
                            </div>
                            <div class="modal-body">
                                <div class="command-text mb-4"> 請輸入您的 Email<br>系統將寄送密碼重設信函給您 !
                                </div>

                                <div class="input-box col-11 mx-auto">
                                    <input type="email" class="form-control mb-2" id="account" name="account" placeholder="請填寫email信箱"><small class="form-text"></small>
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
                            <div class="modal-body mt-2">請至您的電子信箱確認以進行修改<br>謝謝 !
                            </div>

                            <div class="modal-footer mb-5">
                                <button type="button" class="btn btn-secondary col-4 mt-4 mx-auto" data-dismiss="modal" style="background-color: #ff0000">關閉視窗</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<script>
    const account = $('#account'),
        password = $('#password'),
        info_bar = $('#info_bar')

    function checkForm() {

        $.post('1_member-login-api.php', {
            account: account.val(),
            password: password.val()
        }, function(data) {
            if (data.success) {
                info_bar
                    .removeClass('alert-danger')
                    .addClass('alert-success')
                    .text('登入成功');
                location.href = '0_index.php';

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