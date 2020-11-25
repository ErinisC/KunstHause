<?php $title = '會員註冊'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/1_member-signup.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<style>
    small.form-text {
        color: red;
    }
</style>


<div class="container">
    <div class="row">

        <section class="signup-list mx-auto p-0 col-lg-10 col-md-12 col-sm-12 col-12 w-100">
            <div class="list-body w-100 mx-0 pb-3 mb-5">

                <!-- 錯誤跳提醒設定 alert -->
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
                <div class="signup-form w-100 col-md-8 col-xl-8 mx-auto">

                    <form id="form" class="form" name="form" onclick="return false" ; novalidate>
                        <div class="form-group">
                            <label for="name">會員姓名 (必填)</label>
                            <div class="input-wrap success">
                                <div class="input-box d-flex">
                                    <img src=" <?= WEB_ROOT ?>/imgs/member/tack-r.svg">
                                    <input type="text" class="form-control" id="name" placeholder="請填寫真實姓名" name="name" required>
                                </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="form-text">* 此欄位為必填, 請填上您的姓名</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="account">會員帳號 (必填)</label>
                            <div class="input-wrap error">
                                <div class="input-box d-flex">
                                    <img src=" <?= WEB_ROOT ?>/imgs/member/tack-r.svg">
                                    <input type="email" class="form-control" id="account" name="account" placeholder="請填寫email信箱" required>
                                </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="form-text">* 請符合email格式設定</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">密碼 (必填)</label>
                            <div class="input-wrap">
                                <div class="input-box d-flex">
                                    <img src=" <?= WEB_ROOT ?>/imgs/member/tack-r.svg">
                                    <input type="password" class="form-control" id="password" placeholder="密碼請至少超過8碼" name="password" required>
                                </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="form-text">* 密碼請至少設置8碼</small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="checkpassword">確認密碼 (必填)</label>
                            <div class="input-wrap">
                                <div class="input-box d-flex">
                                    <img src=" <?= WEB_ROOT ?>/imgs/member/tack-r.svg">
                                    <input type="password" class="form-control" id="checkpassword" placeholder="請再次輸入您的密碼" name="checkpassword" required>
                                </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="form-text">* 您輸入的密碼與第一次不同</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile">連絡電話</label>
                            <div class="input-wrap">
                                <div class="input-box d-flex">
                                    <img src=" <?= WEB_ROOT ?>/imgs/member/tack-g.svg">
                                    <input type="text" class="form-control" id="mobile" placeholder="請輸入您的手機號碼" name="mobile" pattern="09\d{2}-?\d{3}-?\d{3}">
                                </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="form-text" class="r-pin">* 您輸入的電話格式不符</small>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">地址</label>
                            <div class="input-wrap">
                                <div class="input-box d-flex d-block">
                                    <img src=" <?= WEB_ROOT ?>/imgs/member/tack-g.svg">
                                    <input type="text" class="form-control" id="address" placeholder="請填寫您的居住地址" name="address">
                                </div>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small class="form-text"></small>
                            </div>
                        </div>

                        <div class="terms-title mt-5">請詳閱 Kunsthaus 服務條款及會員相關權益
                            <img class="eyes" src=" <?= WEB_ROOT ?>/imgs/index/ic-eye.svg">
                        </div>

                        <div id="terms" class="terms col-xl-12 col-md-12 col-sm-12 col-12">

                            <div class="service-term m-3">服務條款</div>
                            <div class="service-text">
                                (1) 台端與 Kunsthaus 的關係<br>
                                1.1 Kunsthaus 依據本服務條款提供本站各項服務。當您註冊完成或開始使用本服務時，即表示您已閱讀、了解並同意接受本服務條款之所有內容。如果您不同意本服務條款的內容，或者您所屬的國家或地域排除本服務條款內容之全部或部分時，您應立即停止使用本服務。<br>
                                1.2 台端對 Kunsthaus 產品、軟體、服務及網站（本文件中合稱“服務”，不包括 Kunsthaus 按另行書面協議向 台端提供之任何服務）的使用悉依 台端與 Kunsthaus 間法律協議之條款規定。“Kunsthaus” 指Kunsthaus Inc.，公司註冊地於中華民國(R.O.C.)，本文件說明協議如何制定，並規範該協議若干條款。<br>
                                本《服務條款》就 台端對服務之使用，構成 台端與 Kunsthaus 間具有法律約束力之協議。台端應詳閱條款內容。<br>
                                關於台端的會員註冊以及其他特定資料依本公司《隱私權政策》受到保護與規範。<br>
                                (2)Kunsthaus 提供服務<br>
                                2.1 Kunsthaus 不斷創新以向其用戶提供最佳體驗。 台端認知並同意，Kunsthaus 提供服務之形式及性質得不經事先通知 台端而隨時變換。<br>
                                2.2 台端認知並同意， Kunsthaus 按其持續創新政策，得自行決定（永久或暫時）停止向 台端或全體用戶提供服務，無須事先通知 台端。 台端得隨時停止使用服務。 台端停止使用服務時，無需特別通知 Kunsthaus。<br>
                                2.3 台端認知並同意，如 Kunsthaus 取消 台端使用 台端帳戶之資格時， 台端即可能無法獲得服務或 台端之帳戶資料或包含於 台端帳戶中之任何檔或其他內容。<br>
                                2.4 台端認知並同意，Kunsthaus目前縱可能未設置 台端透過服務得發送或接收傳輸之數量或用於提供任何服務之存儲空間之上限，但 Kunsthaus 得自行決定隨時設定該等上限。
                            </div>

                            <div class="privacy-policy m-3">隱私權政策</div>
                            <div class="privacy-text">
                                (1) 本網站將遵守 「個人隱私保護法」之規定與相關隱私保護政策，除本網站服務條款隱私權政策與法律規定外，不會違法洩漏或利用您的個人隱私資料。<br>
                                (2) 當您於本官網註冊使用後，即表示您同意使用本網站所提供之服務及隱私權條款。<br>
                                (3) 如果您不願意收到本網站之行銷相關即促銷活動資訊，可至會員中心取消電子報或連繫客服人員協助處理。<br>
                                (4) 為了提供更完善、更優質的服務，我們可能會收集下列類型的資訊：
                                4.1 您提供的資訊 – 當您申請『 Kunsthaus 帳號』及其他需要註冊的 Kunsthaus 服務或促銷優惠產品時，我們會要求您提供個人資訊 (例如姓名、聯繫電話、電子郵件地址以及帳戶密碼)。對於某些服務 (例如我們的廣告計劃)與加值功能服務(例如會員服務)，我們會徵得您的同意，要求您提供信用卡等付款帳戶資訊，透過安全的加密形式進行交易，我們並不會儲存任何信用卡等付款帳戶資訊。<br>
                                4.2 Cookie – 您造訪 Kunsthaus 提供之平台與服務時，我們會將一個或多個 Cookie (包含一串字元的小型檔案) 傳送到您的電腦或其他裝置上，以便識別您的瀏覽器。我們使用 Cookie 來儲存使用者偏好設定、改善搜尋結果和保持您操作介面與流程的一致性，以及追蹤使用者趨勢，以提昇服務品質。<br>
                                4.3 日誌資訊 – 您使用 Kunsthaus 服務時，我們的伺服器會在您造訪網站時自動記錄瀏覽器所傳送的資訊。伺服器日誌可能包含您的網頁請求、網際網路通訊協定位址、瀏覽器類型、瀏覽器語言、傳送請求的日期和時間，以及一個或多個用來識別您瀏覽器的 Cookie 等資訊。<br>
                                4.4 其他網站上的聯盟 Kunsthaus 服務 – 我們會透過其他網站提供某些服務。您提供給這些網站的個人資訊可能會傳送給 Google、Facebook等網站，以便我們提供服務之用。我們會根據本《隱私權政策》處理此類資訊。提供 Kunsthaus 服務的聯盟網站所採用的隱私權慣例與我們的政策不盡相同，建議您詳閱他們的隱私權政策。<br>
                                4.5 位置資料 – Kunsthaus 提供定位服務，乃基於 Google Map 開放 API 為基礎，無論您使用個人電腦、筆記型電腦、手機或其他連接網際網路設備使用此服務， Kunsthaus皆會主動詢問您是否要提供地理位置相關資訊， 包含您實際位置的相關資訊 (例如移動裝置傳送的 GPS 訊號)，或可用來判斷大概位置的資訊 (例如基地台編號)。<br>
                                4.6 連結 – Kunsthaus 可能會以特定格式顯示連結，以便追蹤使用者是否連上了這些連結。我們使用此資訊來改善服務精準度、客製化內容和推薦的品質。<br>
                                4.7 其他網站 – 本《隱私權政策》僅適用於 Kunsthaus 所提供之服務。對於平台上搜尋出的店家首頁、店家私自擁有的網站、店家提供的促銷活動、優惠券訊息、電子檔案、超連結等，我們並無控制權。這些來源可能會在您的電腦上放置自己的 Cookie 或其他檔案，以收集資料或要求您提供個人資訊。<br>
                                (5) Kunsthaus 處理個人資訊時，會嚴格遵守本《隱私權政策》和/或特定服務之增補隱私權通知所述的用途。除了上述項目之外，此類用途還包括：<br>
                                5.1 對使用者、開發者提供我們的服務、稽核、研究、分析，以便維護、保護及改善我們的服務品質，保護 Kunsthaus 或 Kunsthaus 使用者的權利或財產，提供 Kunsthaus 新服務。<br>
                                5.2 您可以參閱特定服務的增補隱私權通知，瞭解更多關於我們處理個人資訊的方式。<br>
                                5.3 Kunsthaus 使用位於中華民國、日本、新加坡及美國的伺服器處理個人資訊。Kunsthaus 可能會處理個人資訊以便提供我們的服務。在某些情況下，我們會使用位於您所在的國家/地區以外的伺服器來處理個人資訊。在某些情況下，我們可能會根據第三方 (例如戰略合作夥伴或開放性平台) 的指示為其處理個人資訊。<br>
                                6. 個人資訊的選擇<br>
                                6.1 當您申請需要註冊的特定服務時，我們會要求您提供個人資訊。如果此資訊的使用方式與當初收集的目的不同，我們會在使用前先徵求您的同意。<br>
                                6.2 大部分瀏覽器都預設為接受 Cookie，但您可以重設瀏覽器以停用所有 Cookie，或在 Cookie 傳送時顯示通知。不過，如果您停用了 Cookie，某些 Kunsthaus 功能和服務可能無法正常運作。<br>
                                6.3 您可以拒絕向任何 Kunsthaus 服務提交個人資訊，不過我們可能也因此無法為您提供某些服務。此外，Kunsthaus 提供之服務平台包含部分公開討論資訊(例如評論區域、留言版等)，可自由輸入任何文字或上傳圖片以提供網友互動，此類型行為我們並無權控制，因此您所填寫的資料可能經由其他有心人士利用，請您特別注意個人資訊的妥善保護。<br>
                                (7) 資訊安全<br>
                                7.1 我們會採取適當的安全措施，來防止未經授權的資料存取、竄改、披露或損毀，其中包括就資料的收集、儲存、處理慣例和安全措施進行內部審查，以及實體的安全措施，以防止我們儲存個人資料的系統遭到未經授權的存取。<br>
                                7.2 我們只允許 Kunsthaus 的員工、承包商和代理人存取個人資料，因為他們需要這些資訊來提供、開發或改善我們的服務。上述人員都必須遵守保密義務，否則可能會遭到懲戒，包括解僱和刑事起訴等。<br>
                                (8) 本隱私權政策的變更<br>
                                請注意，本《隱私權政策》會不時變更。但我們不會在未經您同意的情況下，削減本《隱私權政策》賦予您的權利，即使有變更，多半也只是小幅修正。無論如何，我們會將《隱私權政策》的所有變更都張貼在此網頁上，如果是重大變更，我們將提供更明確的通知。<br><br>
                                如果您有其他任何關於本《隱私權政策》的問題或疑慮，歡迎隨時透過此網站與我們聯絡或E-Mail至服務信箱。
                            </div>
                        </div>

                        <div class="form-check my-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="my_check" value="是">
                            <label class="form-check-label" for="exampleCheck1">我同意Kunsthaus服務條款及隱私權政策</label>
                        </div>


                        <div class="signup-btn d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary col-lg-4 col-sm-4 col-4" data-toggle="modal" name="button" id="button" data-target="#exampleModalCenter">註冊
                            </button>

                            <!-- Modal -->
                            <!-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content pt-3 mx-auto">
                                        <div class="tap">
                                            <img src=" <?= WEB_ROOT ?>/imgs/member/tap.svg">
                                        </div>

                                        <div class="modal-header d-flex flex-column">
                                            <div class="modal-title mx-auto" id="exampleModalCenterTitle">恭喜您註冊成功!
                                            </div>
                                            <div class="g-check mx-auto mt-3">
                                                <img class="check-circle-solid" src=" <?= WEB_ROOT ?>/imgs/member/check-circle-solid.svg">
                                            </div>

                                        </div>
                                        <div class="modal-body py-0">
                                            <div class="welcome-text my-2"> 歡迎成為 Kunsthaus 的一員!
                                            </div>
                                            <img class="house mx-auto mt-3" src=" <?= WEB_ROOT ?>/imgs/member/house.svg">
                                        </div>
                                        <div class="modal-footer mx-auto my-3">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="background-color: #ff0000">關閉視窗</button>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                        </div>
                        <div class="line d-flex justify-content-between">
                            <div class="confirm">您已經是 Kunsthaus 的會員?</div>
                            <div class="login-btn">登入</div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<!-- <script src=""></script> -->

<script>
    const form = document.getElementById('form');
    const name = document.getElementById('name');
    const account = document.getElementById('account');
    const password = document.getElementById('password');
    const checkpassword = document.getElementById('checkpassword');
    const mobile = document.getElementById('mobile');
    const address = document.getElementById('address');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        checkInput();
    });


    function checkInput() {
        // get the values from the inputs
        const nameValue = name.value.trim();
        const accountValue = account.value.trim();
        const passwordValue = password.value.trim();
        const checkpasswordValue = checkpassword.value.trim();
        const mobileValue = mobile.value.trim();
        const addressValue = address.value.trim();


        // let infoText = '';
        // let send = true;
        // let regex = 

        if (nameValue === '') {
            //show error
            //add error class
            setErrorFor(name, '* 此欄位為必填, 請輸入您的真實姓名');
        } else {
            // add success class
            setSuccessFor(name);
        }

        if (accountValue === '') {
            setErrorFor(account, '帳號欄位不可空白');
        } else if (!isEmail(accountValue)) {
            setErrorFor(account, '* 請符合email格式設定');
        } else {
            setSuccessFor(account);
        }

        if (passwordValue === '') {
            setErrorFor(password, '* 密碼欄位不可空白');
        } else if (passwordValue.length < 8) {
            setErrorFor(password, '* 密碼請至少設置8碼');
        } else {
            setSuccessFor(password);
        }

        if (checkpasswordValue === '') {
            setErrorFor(checkpassword, '* 確認密碼欄位不可空白');
        } else if (passwordValue !== checkpasswordValue) {
            setErrorFor(checkpassword, '* 您輸入的密碼與第一次不同');
        } else {
            setSuccessFor(checkpassword);
        }

        // show a success message
    }

    function setErrorFor(input, message) {
        const inputWrap = input.parentElement; // .input-wrap
        const small = InputWrap.querySelector('small');
        //add error message inside small
        small.innerText = message;

        //add error class
        InputWrap.className = 'input-wrap error';
    }

    function setSuccessFor(input) {
        const inputWrap = input.parentElement;
        InputWrap.className = 'input-wrap success';
    }

    function isEmail(email) {
        return /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i.test(email);
    }



    // ($('#account').val() === '') {

    // } else($('#password').val().length < 8) {

    // } else($('#password').val() != ('#checkpassword').val()) {

    // } else($('#mobile').val() === '') {
    //     // re = /^09\d{2}-?\d{3}-?\d{3}$/;

    // } else
    //   submit()



    // $(document).ready(function() {
    //     $("button").click(function() {
    //         if ($("#name").val() == '') {
    //             alert("你尚未填寫姓名");
    //             eval("document.form1['name'].focus()");
    //         } else if ($("#account").val() == "") {
    //             alert("請符合email格式設定");
    //             eval("document.form1['account'].focus()");
    //         } else if ($("#password").val() == "") {
    //             alert("密碼請至少設置8碼");
    //             eval("document.form1['password'].focus()");
    //         } else if ($("#checkpassword").val() == "") {
    //             alert("您輸入的密碼與第一次不同!");
    //             eval("document.form1['checkpassword'].focus()");
    //         } else if ($("#mobile").val() == "") {
    //             alert("你尚未填寫電話");
    //             eval("document.form1['mobile'].focus()");
    //         } else {
    //             document.form1.submit();
    //         }
    //     })
    // })





    //     if (send) {
    //         $.post('1_member-signup-api.php', $(document.needs - validation).serialize(), function(data) {
    //             console.log(data);
    //             if (data.success) {
    //                 info_bar
    //                     .removeClass('alert-danger')
    //                     .addClass('alert-success')
    //                     .text('完成新增');
    //             } else {
    //                 info_bar
    //                     .removeClass('alert-success')
    //                     .addClass('alert-danger')
    //                     .text(data.error || '新增失敗');
    //             }
    //             info_bar.slideDown();

    //             setTimeout(function() {
    //                 info_bar.slideUp();
    //             }, 2000);
    //         }, 'json')
    //     } else {
    //         info_bar
    //             .removeClass('alert-success')
    //             .addClass('alert-danger')
    //             .text(infoText);
    //         info_bar.slideDown();

    //         setTimeout(function() {
    //             info_bar.slideUp();
    //         }, 2000);
    //     }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>