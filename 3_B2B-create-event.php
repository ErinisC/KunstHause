<?php $title = 'KunstHaus | 活動上架'; ?>
<?php $pageName = 'b2b'; ?>
<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-Create-Event.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container col-xl-6 col-12 b2bcreate px-0">
        <div class="space" style="height: 130px;"></div>
        <div class="col-12">
            <h1 class="title position-relative"> 上架活動資料<img class="autoInput position-absolute" id="autoInput" src=" <?= WEB_ROOT ?>/imgs/b2b/eyes-cartoon.svg"></h1>
            <h2 class="sm-title">KunstHaus 使用者將透過下列資訊了解活動</h2>
        </div>

        <div class="space" style="height: 50px;"></div>

        <!-- 表單開始 -->

        <form enctype="multipart/form-data" id="event_form" name="event_form" method="post" onsubmit="checkForm();return false;">
            <div class="form-group">
                <label class="event-banner d-flex col-sm-12">
                    <div class="input input-wrap input-wrap-picture fake_input_placeholder position-absolute">
                        <label for="FileName" name="FileName" class="FileName"></label>
                        <input id="picture" name="picture" class="input fake_input" ref={fileInput} accept="image/jpeg,image/png" type="file" />
                    </div>
                    <a class="upload-banner btn position-absolute " type="submit">上傳圖片</a>
                </label>
                <!-- 預覽圖片區 -->
                <br>
                <br>
                <br>
                <img class="eventimg" src="" width="100%" height="400" alt="none" class="col-12">
                <br>
            </div>

            <div class="form-group">

                <label for="event_name">活動名稱 (必填)</label>

                <div class="input-wrap">

                    <div class="input-box">
                        <input id="event_name" class="input" type="text" name="event_name" placeholder="活動名稱">
                    </div>

                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>

            <div class="form-group">

                <label for="eventDate">活動日期 (必填)</label>
                <div class="input-box">

                    <div class="input-wrap">
                        <p class="pt-3">(活動日期開始)</p>
                        <input class="input" id="start-datetime" name="start-datetime" type="datetime-local">
                    </div>


                    <div class="input-wrap">
                        <p class="mt-3">(活動日期結束)</p>
                        <input class="input" id="end-datetime" name="end-datetime" type="datetime-local">
                    </div>


                </div>
            </div>

            <div class="form-group">
                <div class="input-wrap">
                    <label for="categories">活動種類 (必填)</label>
                    <select id="categories" name="categories" type="text" class="input">
                        <option value="" disabled selected>請選擇</option>
                        <option value="music">音樂表演</option>
                        <option value="show">演唱活動</option>
                        <option value="art">藝文展覽</option>
                    </select>

                </div>
            </div>

            <div class="form-group">
                <label for="hashtag">標籤設定</label>
                <div class="input-wrap">
                    <div class="input-box">
                        <input id="hashtag" type="text" class="input" name="hashtag" placeholder="#Hashtags">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="location">活動地點 (必填)</label>
                <div class="input-wrap d-flex flex-wrap col-lg-12 p-0">
                    <div class="input-box selector col-xl-4  d-flex justify-content-between p-0">
                        <select id="region" name="region" type="text" class="input col-sm-5 mx-0" style="width:180px" name="region">

                            <option value="" disabled selected>請選擇</option>
                            <option value="North">北部</option>
                            <option value="Middle">中部</option>
                            <option value="South">南部</option>

                        </select>

                        <div class="col-lg-1 blanket"></div>
                        <select type="text" id="cityLocation" name="cityLocation" class="input-box input col-sm-5 mx-0" style="width:180px">

                            <option value="" disabled selected>請選擇</option>
                            <optgroup label="北部">
                                <option value="TPE">台北市</option>
                                <option value="TPH">新北市</option>
                                <option value="TYC">桃園市</option>
                                <option value="HSH">新竹市</option>
                            <optgroup label="中部">
                                <option value="TXG">台中市</option>
                            <optgroup label="南部">
                                <option value="KHH">高雄市</option>
                                <option value="TNN">台南市</option>

                        </select>
                        <div class="blanket col-lg-1 px-0" style="width:10px"></div>
                    </div>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>

                    <div class="input-box col-xl-8 px-0">
                        <input type="text" id="address" name="address" class="input-box input col-xl-12 col-sm-12 mx-0" placeholder="XXX街XXX號">
                    </div>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>


            <div class="form-group">
                <label for="transportation">
                    交通資訊
                    <Textarea id="transportation" name="transportation" class="textarea" cols="117" rows="10"></Textarea>
                </label>
            </div>

            <div class="form-group">
                <label for="notice">
                    活動注意事項
                    <Textarea id="notice" name="notice" class="textarea" cols="117" rows="10"></Textarea>
                </label>
            </div>

            <div class="form-group">
                <label for="event_info">
                    活動內容資訊 (必填)
                    <div class="input-wrap">

                        <Textarea id="event_info" name="event_info" class="textarea event_info" cols="117" rows="10"></Textarea>

                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                    </div>
                </label>
            </div>

            <div class="form-group">
                <div class="d-flex">
                    <div class="blanket col-8"> </div>
                    <div class="col-xl-4 col-sm-12 p-0">
                        <label for="price">活動票卷售價</label>
                        <div class="input-wrap d-flex pricesetting">
                            <div class="pricetag col-4">
                                <p class="py-2">NT$</p>
                            </div>
                            <input id="price" name="price" type="number" min="0" max="9999" class="col-8 input">

                        </div>


                        <div class="fee d-flex">手續費
                            <div class="sminfo"></div>
                            ＋(1%)
                        </div>
                        <div class="total d-flex mt-2 justify-content-between">
                            <p>合計</p>
                            <p></p>
                            <p></p>
                            <p></p>
                            <p id="total_price" name="price" class="total_price"></p>
                            <p>$</p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- 錯誤跳提醒設定 alert -->

            <div id="info_bar" class="alert alert-danger col-8 mx-auto my-4 py-3" role="alert" style="display: none">
            </div>

            <div class="modbutton text-center">
                <div class="okbutton col-xl-6 col-10 d-flex">
                    <button class="modify1 col-5 btn">取消</button>

                    <button type="submit" id="submit" class="modify2 col-5 btn">完成</button>
                    <button id="showModal" data-toggle="modal" data-target="#exampleModalCenter" hidden></button>

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
                        <div class="g-check mx-auto mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80.5" height="80.5" viewBox="0 0 80.5 80.5">
                                <path id="check-circle-solid" d="M88,48A40,40,0,1,1,48,8,40,40,0,0,1,88,48ZM43.373,69.18,73.051,39.5a2.581,2.581,0,0,0,0-3.65L69.4,32.2a2.581,2.581,0,0,0-3.65,0l-24.2,24.2-11.3-11.3a2.581,2.581,0,0,0-3.65,0l-3.65,3.65a2.581,2.581,0,0,0,0,3.65L39.724,69.18a2.581,2.581,0,0,0,3.65,0Z" transform="translate(-7.75 -7.75)" fill="#168fa4" stroke="#000" stroke-width="0.5" />
                            </svg>
                        </div>
                        <div class="modal-title mx-auto mt-3" id="exampleModalCenterTitle">
                            <span id="modal-title">
                            </span>
                        </div>
                        <span class="text-center mt-3 ">活動已幫你送出審核，
                            再請至活動管理
                            查詢狀態。
                        </span>
                    </div>

                    <div class="modal-footer mx-auto my-auto">
                        <button type="button" onclick="location.href='3_B2B-event-manage.php'" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                    </div>

                </div>
            </div>
        </div>
        </table>
    </div>



</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>
<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<script>
    // 設定常數

    const picture = $('#picture');
    const eventname = $('#event_name');
    const startdate = $('#start-datetime');
    const enddate = $('#end-datetime');
    const categories = $('#categories');
    const region = $('#region');
    const cityLocation = $('#cityLocation');
    const address = $('#address');
    const eventinfo = $('#event_info');
    const price = $('#price');
    const info_bar = $('#info_bar');
    const transport = $('#transportation');
    const notice = $('#notice');
    const total_price = $("#total_price")

    // 總金額加1％
    $('#price').on('change', function summary() {

        const sum = Number($(price).val()) * 1.01;
        // console.log(Number(price.val()))
        document.getElementById("total_price").textContent = sum;

    });


    //  一鍵輸入

    $('#autoInput').click(function() {
        eventname.val('藝文活動好好玩KunstHaus');
        startdate.val('2020-12-18T09:00');
        enddate.val('2021-01-31T12:00');
        categories.val('art');
        region.val('North');
        cityLocation.val('TPE');
        address.val('大安區和平東路二段106號11樓')
        transport.val('大安捷運站1號出口')
        notice.val('報名注意事項:注意事項:票券有效期限為本展覽期間2020/12/26 - 2021/4/5(除夕休館),一人一票,憑票入場,僅限當次入場,不得重複使用.禁止於展覽現場兜售,轉賣票券.票券為無記名有價票券,請自行妥善保管,如發生遺失,破損,折損,打洞等無法辨識之情形,視為無效票券,恕不接受重新退換補發.展覽開放拍照攝影,禁止使用閃光燈.使用腳架或自拍棒時,請注意其他觀展人之安全.展場內禁止飲食,觸碰展品,攜帶寵物(導盲犬除外),長柄傘,飲料,食物及任何危險物品入內.個人物品請自行保管,本展不提供寄放.展場內無設置廁所,垃圾桶,如有需要請至展場外使用,使用完後再行入場.展場共有兩層樓(1F+2F),使用輪椅或推嬰兒車的參觀民眾上下樓需由工作人員引導,參觀順序略有不同,如有不便,敬請見諒.展區內請遵守參觀動線,展場規則及現場工作人員指示,如遇人潮眾多,敬請依序排隊等候.離場後如需再次入場,可於展場出口處蓋印重複入場章,並重新於入口處入場,惟僅限當日展覽營業時間內進出展覽.如有退票需求請於閉展前至原購票通路完成辦理,逾期恕不受理.退票辦理方式請參照原通路退票規定,每張票券需酌收實際銷售價格之10%作為手續費,因退款產生之郵,匯費由退票方負擔.展覽營業時間及規定若有所異動,請依現場或官方粉絲團公告為準.上述事項若有未盡事宜,主辦單位保留修改,變更,取消活動之解釋權利.')
        eventinfo.val('Kunsthaus 意為藝術之家, 旨在活絡大眾對藝文活動的看法, 讓藝術自然而然地存在人們的生活當中成為一種生活態度, Kunsthaus建立了一個多元整合的藝術環境, 運用分類篩選, 新知分享等方式推動全民藝術, 從生活裡落實藝術教育, 讓人人喜歡藝術, 欣賞藝術, 收藏藝術.希望用戶們都能快速便捷的找到合適的活動, 輕鬆踏進藝文這個實而好玩多變的領域, 成為我們的會員一同玩轉藝文.')
        price.val('400')
    });


    // 預覽圖片
    $('.fake_input').on('change', function(e) {

        const file = this.files[0];
        const objectURL = URL.createObjectURL(file);

        $('.eventimg').attr('src', objectURL);
    });

    // 顯示檔案名稱

    $('#picture').change(function() {
        const i = $(this).prev('label').clone();
        const file = $('#picture')[0].files[0].name;
        $(this).prev('label').text(file);
    });


    // 送出表單
    function checkForm() {

        // 呼叫的時候先清掉其他警告

        $('.input-wrap').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查長度
        let isPass = false;

        if (picture.val().length === 0) {
            console.log("🚀 ~ file: 3_B2B-create-event.php ~ line 335 ~ summary ~ price", price)
            console.log("🚀 ~ file: 3_B2B-create-event.php ~ line 335 ~ summary ~ price", price)
            isPass = true;
            picture.closest('.input-wrap').addClass('error')
        } else {
            picture.closest('.input-wrap').removeClass('error')
            picture.closest('.input-wrap').addClass('success')
        }

        // 如果拿到的活動名稱的長度小於2，就不通過
        if (eventname.val().length === 0) {
            isPass = true;
            // 這邊設定下面small的小警告出現的文字
            // 小警告的位置是name的next (JQ select注意！)
            eventname.closest('.input-wrap').addClass('error')
            // name.closest('.input-wrap').find(small).text('請填寫正確姓名')
        } else {
            eventname.closest('.input-wrap').removeClass('error')
            eventname.closest('.input-wrap').addClass('success')
        }

        if (startdate.val().length === 0) {
            isPass = true;
            startdate.closest('.input-wrap').addClass('error');
        } else {
            startdate.closest('.input-wrap').removeClass('error')
            startdate.closest('.input-wrap').addClass('success')
        }

        if (enddate.val().length === 0) {
            isPass = true;
            enddate.closest('.input-wrap').addClass('error');
        } else {
            enddate.closest('.input-wrap').removeClass('error')
            enddate.closest('.input-wrap').addClass('success')
        }

        // 檢查值是否為null

        if (categories.val() === null) {
            isPass = true;
            categories.closest('.input-wrap').addClass('error');
        } else {
            categories.closest('.input-wrap').removeClass('error')
            categories.closest('.input-wrap').addClass('success')
        }

        if (region.val() === null) {
            isPass = true;
            region.closest('.input-wrap').addClass('error');
        } else {
            region.closest('.input-wrap').removeClass('error')
            region.closest('.input-wrap').addClass('success')
        }

        if (cityLocation.val() === null) {
            isPass = true;
            cityLocation.closest('.input-wrap').addClass('error');
        } else {
            cityLocation.closest('.input-wrap').removeClass('error')
            cityLocation.closest('.input-wrap').addClass('success')
        }

        if (address.val().length === 0) {
            isPass = true;
            address.closest('.input-wrap').addClass('error');
        } else {
            address.closest('.input-wrap').removeClass('error')
            address.closest('.input-wrap').addClass('success')
        }

        if (eventinfo.val().length === 0) {
            isPass = true;
            eventinfo.closest('.input-wrap').addClass('error');
        } else {
            eventinfo.closest('.input-wrap').removeClass('error')
            eventinfo.closest('.input-wrap').addClass('success')
        }

        if (price.val().length === 0) {
            isPass = true;
            price.closest('.input-wrap').addClass('error')
            // return;
        } else {
            price.closest('.input-wrap').removeClass('error')
            price.closest('.input-wrap').addClass('success')
        }

        if (!isPass) {

            $('#showModal').click();

            // Modal 名稱顯示設定值
            const nameElement = document.getElementById("event_name");
            const name = nameElement.value;
            $('#modal-title').text(name);


            var formData = new FormData(document.event_form);

            fetch('3_B2B-create-event-api.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .catch(error => console.error('Error:', error))
                .then(data => {
                    console.log('Success:', data)
                });

            return;

        }

    }


    // modal按鈕跳轉
    $('#exampleModalCenter').on('hidden.bs.modal', function(a) {
        location.href = '3_B2B-index.php';
    });
</script>
<?php include __DIR__ . '/1_parts/4_footer.php'; ?>