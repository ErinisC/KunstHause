<?php $title = 'KunstHaus | 活動上架'; ?>

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
            <h1 class="title">上架活動資料</h1>
            <h2 class="sm-title">KunstHaus 使用者將透過下列資訊了解活動</h2>
        </div>

        <div class="space" style="height: 50px;"></div>

        <form name="event-form" method="post" onsubmit="checkForm();return false;" novalidate>

            <label class="event-banner d-flex">
                <input class="input fake_input col-12" ref={fileInput} accept="image/jpeg,image/png" type="file" onChange={handleImageChange} placeholder="XXX.jpg" />
                <div class="input fake_input_placeholder position-absolute"></div>
                <a onclick="myFunction()" class="upload-banner btn position-absolute" type="submit">上傳圖片</a>
            </label>

            <img src="" width="100%" height="211" alt="Image preview..." class="col-12">
            <br>

            <label for="event-name">活動名稱</label>

            <input class="input" type="text" name="event_name" placeholder="活動名稱">
            <label for="eventDate">活動日期</label>

            <p class="pt-3">(活動日期開始)</p>
            <input class="input" name="start-datetime" type="datetime-local">
            <p class="mt-3">(活動日期結束)</p>
            <input class="input" name="end-datetime" type="datetime-local">
            <label for="sort">活動種類</label>
            <select name="sort" type="text" class="input">
                <option value="music">音樂會</option>
                <option value="show">表演</option>
                <option value="art">演藝</option>
            </select>
            <label for="hashtag">標籤設定</label>
            <input type="text" class="input" name="hashtag" placeholder="#Hashtags">

            <label for="event-place">
                活動地點
            </label>
            <label for="address" name="address" class="event-place d-flex flex-wrap col-12 p-0">
                <div class="selector col-xl-4  d-flex justify-content-between p-0">
                    <select name="City" type="text" class="input col-sm-5 mx-0" style="width:180px" name="address">
                        <option value="Taipei">台北市</option>
                        <option value="NewTaipei">新北市</option>
                        <option value="Taoyuan">桃園市</option>
                        <option value="Hsinchu">新竹縣</option>
                        <option value="Miaoli">苗栗國</option>
                        <option value="Taichung">台中市</option>
                    </select>
                    <div class="col-lg-1"></div>
                    <select type="text" name="address" class="input col-sm-5 mx-0" style="width:180px">
                    </select>
                    <div class="space col-1 px-0" style="width:10px"></div>
                </div>
                <!-- <div class="space col-1" style="width:10px"></div> -->
                <input type="text" name="address" class="input col-xl-8 col-sm-12 mx-0" placeholder="XXX街XXX號">
            </label>
            <label for="transportation">
                交通資訊
                <Textarea name="transportation" class="textarea" cols="117" rows="10"></Textarea>
            </label>

            <label for="notice">
                活動注意事項
                <Textarea name="notice" class="textarea" cols="117" rows="10"></Textarea>
            </label>

            <label for="event_info">
                活動內容資訊
                <Textarea name="event_info" class="textarea" cols="117" rows="10" required></Textarea>
            </label>

            <div class="d-flex">
                <div class="blanket col-8"> </div>
                <div class="price-lenght  col-xl-4 col-sm-12 p-0">
                    <label for="price">活動票卷售價</label>
                    <div class="d-flex pricesetting">
                        <div class="pricetag col-4">
                            <p class="py-2">NT$</p>
                        </div>
                        <input name="price" type="number" min="0" max="9999" class="col-8 input">

                    </div>
                    <div class="fee">手續費 <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                            <path id="Subtraction_1" data-name="Subtraction 1" d="M3395-4803a13.907,13.907,0,0,1-9.9-4.1,13.907,13.907,0,0,1-4.1-9.9,13.907,13.907,0,0,1,4.1-9.9,13.907,13.907,0,0,1,9.9-4.1,13.907,13.907,0,0,1,9.9,4.1,13.907,13.907,0,0,1,4.1,9.9,13.907,13.907,0,0,1-4.1,9.9A13.907,13.907,0,0,1,3395-4803Zm-1.06-9v2h2v-2Zm1.045-11.114a2.722,2.722,0,0,1,1.963.777,2.448,2.448,0,0,1,.8,1.8,2.081,2.081,0,0,1-.273,1.045,6,6,0,0,1-1.187,1.284,13.2,13.2,0,0,0-1.265,1.226,4.142,4.142,0,0,0-.694,1.142,4.95,4.95,0,0,0-.292,1.787c0,.1,0,.274.01.527h1.689a7.015,7.015,0,0,1,.147-1.524,2.522,2.522,0,0,1,.39-.83A8.7,8.7,0,0,1,3397.4-4817a8.229,8.229,0,0,0,1.719-1.924,3.516,3.516,0,0,0,.44-1.729,3.624,3.624,0,0,0-1.25-2.763,4.794,4.794,0,0,0-3.35-1.144,4.666,4.666,0,0,0-3.189,1.064,4.691,4.691,0,0,0-1.45,3.066l1.806.216a3.727,3.727,0,0,1,.987-2.2A2.651,2.651,0,0,1,3394.985-4823.116Z" transform="translate(-3381 4831)" />
                        </svg>
                        ＋(1%)
                    </div>
                    <div class="total d-flex mt-2">
                        <p>合計</p>

                    </div>
                </div>
            </div>
            <div class="modbutton text-center">
                <div class="okbutton col-xl-6 col-10 d-flex">
                    <button class="modify1 col-5 btn btn-primary">取消</button>
                    <button class="modify2 col-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">完成</button>
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
                        <div class="modal-title mx-auto mt-3" id="exampleModalCenterTitle">2019百威真我至上音樂巡迴
                        </div>
                        <span class="text-center mt-3 ">活動已幫你送出審核，
                            再請至活動管理
                            查詢狀態。
                        </span>
                    </div>

                    <div class="modal-footer mx-auto my-auto">
                        <button type="button" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                    </div>

                </div>
            </div>
        </div>
        </table>
    </div>


    <div class="space" style="height: 150px;"></div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    function myFunction() {
        addEventListener('click', 'facke-input')
    }
    // 設定常數



    function checkForm() {
        // 呼叫的時候先清掉其他警告
        // name.next().text('')
        // account.next().text('')

        $('.input-wrap').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查姓名長度跟email格式
        let isPass = true;

        // 如果拿到的姓名的長度小於2，就不通過
        if (name.val().length < 2) {
            isPass = false;

            // 這邊設定下面small的小警告出現的文字
            // 小警告的位置是name的next (JQ select注意！)
            name.closest('.input-wrap').addClass('error')
            // name.closest('.input-wrap').find(small).text('請填寫正確姓名')
        } else {
            name.closest('.input-wrap').removeClass('error')
            name.closest('.input-wrap').addClass('success');
        }

        if (!account_re.test(account.val())) {
            isPass = false;
            account.closest('.input-wrap').addClass('error')
        } else {
            account.closest('.input-wrap').removeClass('error')
            account.closest('.input-wrap').addClass('success');
        }

        if (password.val().length < 3) {
            isPass = false;
            password.closest('.input-wrap').addClass('error')
        } else {
            password.closest('.input-wrap').removeClass('error')
            password.closest('.input-wrap').addClass('success');
        }
        if (checkpassword.val() != password.val() || checkpassword.val().length == 0) {
            isPass = false;
            checkpassword.closest('.input-wrap').addClass('error')
        } else {
            checkpassword.closest('.input-wrap').removeClass('error')
            checkpassword.closest('.input-wrap').addClass('success');
        }
        if (mobile.val().length !== 0) {
            isPass = false;
            mobile.closest('.input-wrap').addClass('success');
        }
        if (address.val().length !== 0) {
            isPass = false;
            address.closest('.input-wrap').addClass('success');
        }
        if (!checkbox.prop('checked')) {
            isPass = false;
            alert('需同意 Kunsthaus 服務及隱私權政策才能註冊成為會員唷!');
        } else {

            $.post('1_member-signup-api.php', $(document.form1).serialize(), function(data) {
                console.log(data);
                // $('#exampleModalCenter').modal('show');
                // $('#exampleModalCenter').on('hidden.bs.modal', function(e) {
                //     location.href = '1_member-login.php'
                // })
                // return;

                if (data.success) {
                    // info_bar
                    //     .removeClass('alert-danger')
                    //     .addClass('alert-success')
                    //     .text('完成新增');
                    $('#exampleModalCenter').modal('show');
                    $('#exampleModalCenter').on('hidden.bs.modal', function(e) {
                        location.href = '1_member-login.php'
                    })
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
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>