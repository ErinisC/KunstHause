<?php $title = 'KunstHaus | 廠商會員註冊'; ?>
<?php $pageName = 'b2b'; ?>
<?php include __DIR__ . '/1_parts/0_config.php';
// 判斷是否登入
if (!isset($_SESSION['user'])) {
    header('Location: 1_member-login.php');
    exit;
}

// var_dump($_SESSION['user']);
?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-sign-in.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>
<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>



<div class="background">
    <div class="container">
        <div class="row signinbg col-12">
            <div class="title col-xl-8">
                <h1>註冊主辦單位檔案</h1>
                <p class="text">KunstHaus 使用者將透過下列資訊認識你</p>
            </div>
            <form name="b2b_form" method="post" onsubmit="checkForm();return false;" novalidate>
                <!-- 給一個空的input去抓member_sid得值 -->
                <input type="text" name="member_sid" value="<?= $_SESSION['user']['sid'] ?>" hidden>
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

                <div class="inputform col-xl-8 col-12">
                    <label for="name" id="autoinput">主辦單位名稱（必填）</label>
                    <input class="inputbox" id="name" type="text" placeholder="請填寫主辦單位名稱" name="name" required>
                    <small class="trouble2"></small>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <!-- <small class="trouble2">X 必填資訊未填寫完整</small> -->
                </div>

                <div class="inputform col-xl-8 col-12">
                    <label for="phone">主辦單位電話號碼（必填）</label>
                    <input class="inputbox" id="phone" type="text" placeholder="請填寫電話號碼" name="phone" required>
                    <small class="trouble2"></small>
                    <input class="inputbox" type="text" name="ext" id="ext" placeholder="分機號碼(選填)">
                    <small class="trouble2"></small>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <!-- <small class="trouble2">X 必填資訊未填寫完整</small> -->
                </div>

                <div class="inputform col-xl-8 col-12">
                    <label for="intro">主辦單位簡介（必填）</label>
                    <textarea class="textarea2" name="intro" id="intro" cols="" rows="10" placeholder="請填寫主辦單位簡介" maxlength="255" required></textarea>
                    <span class="wortcount">0/255</span>
                </div>

                <div class="inputform col-xl-8 col-12">
                    <p class="membertext">請詳閱 Kunsthaus 服務條款及會員相關權益<img class="eyes" src=" <?= WEB_ROOT ?>/imgs/index/ic-eye.svg"></p>
                </div>

                <div id="terms" class="terms col-xl-8 col-12">
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

                <div class="checkform col-xl-8 col-12 d-flex">
                    <p class="ckecktext col-xl-8 col-12"><input class="checkbox" type="checkbox" id="checkbox" name="checkbox" value="是">我同意Kunsthaus服務條款及隱私權政策</p>
                </div>

                <!-- 錯誤跳提醒設定 alert -->
                <div id="info_bar" class="alert alert-danger col-8 mx-auto my-4 py-3" role="alert" style="display: none">
                </div>

                <div class="modbutton text-center col-xl-8 col-12">
                    <div class="okbutton col-xl-6 col-10 d-flex">
                        <button class="modify1 col-5 btn btn-primary">取消註冊</button>

                        <button type="submit" id="submit" class="modify2 col-5 btn btn-primary">完成註冊</button>
                    </div>
                </div>
            </form>

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
                            <div class="modal-title mx-auto mt-4" id="exampleModalCenterTitle">註冊成功
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
<!-- <script src=""></script> -->

<script>
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

    //設定常數
    const name = $('#name');
    const phone = $('#phone');
    const intro = $('#intro');
    const checkbox = $('#checkbox');
    $('#exampleModalCenter').on('hidden.bs.modal', function(e) {
        location.href = '3_B2B-index.php';
    });

    function checkForm() {
        // 呼叫的時候先清掉其他警告
        // name.next().text('')
        // account.next().text('')
        $('.inputform').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查姓名長度跟email格式
        let isPass = true;

        // 如果拿到的姓名的長度小於2，就不通過
        if (name.val().length < 2) {
            isPass = false;

            // 這邊設定下面small的小警告出現的文字
            // 小警告的位置是name的next (JQ select注意！)
            name.closest('.inputform').addClass('error')
            name.next().text('* 此欄位為必填, 請填上主辦單位名稱')

            // name.closest('.input-wrap').find(small).text('請填寫正確姓名')
        } else {
            name.closest('.inputform').removeClass('error')
            name.closest('.inputform').addClass('success');
            name.next().text('')
        }

        if (phone.val().length < 10) {
            isPass = false;
            phone.closest('.inputform').addClass('error');
            phone.next().text('* 此欄位為必填, 請填上聯絡電話')
        } else {
            phone.closest('.inputform').removeClass('error')
            phone.closest('.inputform').addClass('success');
            phone.next().text('')
        }
        if (intro.val().length !== 0) {
            isPass = false;
            intro.closest('.inputform').addClass('success');
        } else {
            intro.closest('.inputform').removeClass('success')
            intro.closest('.inputform').addClass('error');
        }
        if (!checkbox.prop('checked')) {
            isPass = false;
            alert('需同意 Kunsthaus 服務及隱私權政策才能註冊成為會員唷!');
        } else {

            $.post('3_B2B-sign-in-api.php', $(document.b2b_form).serialize(), function(data) {
                console.log(data);
                // $('#exampleModalCenter').modal('show');



                if (data.success) {
                    // info_bar
                    //     .removeClass('alert-danger')
                    //     .addClass('alert-success')
                    //     .text('完成新增');
                    $('#exampleModalCenter').modal('show');

                } else {
                    info_bar
                        // .removeClass('alert-success')
                        .addClass('alert-danger')
                        .text(data.error || '新增失敗');

                    info_bar.slideDown();

                    setTimeout(function() {
                        info_bar.slideUp();
                    }, 2000);
                }
            }, 'json');
        }
    }


    //封裝一個限制字數方法
    var checkStrLengths = function(str, maxLength) {
        var maxLength = maxLength;
        var result = 0;
        if (str && str.length > maxLength) {
            result = maxLength;
        } else {
            result = str.length;
        }
        return result;
    }

    //監聽輸入
    $(".textarea2").on('input propertychange', function() {

        //獲取輸入內容
        var userDesc = $(this).val();

        //判斷字數
        var len;
        if (userDesc) {
            len = checkStrLengths(userDesc, 255);
        } else {
            len = 0
        }

        //顯示字數
        $(".wortcount").html(len + '/255')
    });


    // 關閉btn連到index
    $('.closebutton').on('click', function() {
        location.href = "3_B2B-index.php";
    });

    // 一鍵輸入
    $('#autoinput').click(function() {
        $('#name').val('今晚想來點藝文工作室');
        $('#phone').val('(02)-0003-1234');
        $('#ext').val('123');
        $('#intro').val('魯迅說過一句發人省思的話，什麼是路？就是從沒有路的地方踐踏出來的，從只有荊棘的地方開闢出來的。但願各位能從這段話中獲得心靈上的滋長。看看別人，再想想自己，會發現問題的核心其實就在你身旁。那麼，林肯告訴我們，噴泉的高度不會超過它的源頭; 一個人的事業也是這樣，他的成就決不會超過自己的信念。這段話的餘韻不斷在我腦海中迴盪著。');
    });
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>