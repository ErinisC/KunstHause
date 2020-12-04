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

        <form name="event_form" method="post" onsubmit="checkForm();return false;" novalidate>
            <div class="form-group">
                <label class="event-banner d-flex col-sm-12">
                    <div class="input fake_input_placeholder position-absolute ">
                        <input id="picture" class="input fake_input " ref={fileInput} accept="image/jpeg,image/png" type="file" />
                    </div>
                    <a class="upload-banner btn position-absolute " type="submit">上傳圖片</a>
                </label>
                <!-- 預覽圖片區 -->
                <br>
                <br>
                <br>
                <img class="eventimg" src="" width="100%" height="400" alt="Image preview" class="col-12">
                <br>
            </div>

            <div class="form-group">

                <label for="event_name">活動名稱</label>

                <div class="input-wrap">

                    <div class="input-box">
                        <input id="event_name" class="input" type="text" name="event_name" placeholder="活動名稱">
                    </div>

                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                </div>
            </div>

            <div class="form-group">

                <label for="eventDate">活動日期</label>
                <div class="input-wrap">

                    <div class="input-box">
                        <p class="pt-3">(活動日期開始)</p>
                        <input class="input" id="start-datetime" name="start-datetime" type="datetime-local">
                    </div>

                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>


                    <div class="input-box">
                        <p class="mt-3">(活動日期結束)</p>
                        <input class="input" id="end-datetime" name="end-datetime" type="datetime-local">
                    </div>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>


                </div>
            </div>

            <div class="form-group">
                <div class="input-wrap">
                    <label for="categories">活動種類</label>
                    <div class="input-box">
                        <select id="categories" name="categories" type="text" class="input" required>
                            <option value="">請選擇</option>
                            <option value="music">音樂表演</option>
                            <option value="show">演唱活動</option>
                            <option value="art">藝文展覽</option>
                        </select>
                    </div>
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
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
                <label for="location">活動地點</label>
                <div class="input-wrap d-flex flex-wrap col-lg-12 p-0">
                    <div class="input-box selector col-xl-4  d-flex justify-content-between p-0">
                        <select id="region" name="region" type="text" class="input col-sm-5 mx-0" style="width:180px" name="region" required>

                            <option value="">請選擇</option>
                            <option value="North">北部</option>
                            <option value="Middle">中部</option>
                            <option value="South">南部</option>

                        </select>
                        <div class="col-lg-1 blanket"></div>
                        <select type="text" id="location" name="location" class="input-box input col-sm-5 mx-0" style="width:180px" required>

                            <option value="">請選擇</option>
                            <option value="TPE">台北市</option>
                            <option value="TPH">新北市</option>
                            <option value="TYC">桃園市</option>
                            <option value="HSH">新竹市</option>
                            <option value="TXG">台中市</option>
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
                    活動內容資訊
                    <div class="input-wrap">

                        <Textarea id="event_info" name="event_info" class="textarea" cols="117" rows="10" required></Textarea>

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
            </div>


            <div class="modbutton text-center">
                <div class="okbutton col-xl-6 col-10 d-flex">
                    <button class="modify1 col-5 btn btn-primary">取消</button>
                    <button type="submit" class="modify2 col-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">完成</button>
                </div>
            </div>

        </form>

        <!-- 錯誤跳提醒設定 alert -->
        <div id="info_bar" class="alert alert-danger col-8 mx-auto my-4 py-3" role="alert" style="display: none">
        </div>

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
                            <? event_name ?>
                        </div>
                        <span class="text-center mt-3 ">活動已幫你送出審核，
                            再請至活動管理
                            查詢狀態。
                        </span>
                    </div>

                    <div class="modal-footer mx-auto my-auto">
                        <button type="button" onclick="location. href='3_B2B-index.php'" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
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
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script>
    // 預覽圖片
    $('.fake_input').on('change', function(e) {
        const file = this.files[0];
        const objectURL = URL.createObjectURL(file);

        $('.eventimg').attr('src', objectURL);
    });


    // 設定常數
    const eventname = $('#event_name');
    const eventDate = $('#eventDate');
    const eventplace = $('#region');
    const address = $('#address');
    const eventinfo = $('#event_info');
    const price = $('#price');
    const info_bar = $('#info_bar')


    function checkForm() {

        // 呼叫的時候先清掉其他警告

        $('.input-wrap').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查姓名長度跟email格式
        let isPass = true;

        // 如果拿到的活動名稱的長度小於2，就不通過
        if (eventname.val().length == 0) {
            isPass = false;

            // 這邊設定下面small的小警告出現的文字
            // 小警告的位置是name的next (JQ select注意！)
            eventname.closest('.input-wrap').addClass('error')
            // name.closest('.input-wrap').find(small).text('請填寫正確姓名')
        }

        // if (select.val() !== "") {
        //     isPass = false;
        //     select.closest('.input-wrap').addClass('error');
        // }

        if (address.val().length == 0) {
            isPass = false;
            address.closest('.input-wrap').addClass('error');
        }

        if (eventinfo.val().length == 0) {
            isPass = false;
            eventinfo.addClass('error');
        } else {

            $.post('3_B2B-create-event-api.php', $(document.event_form).serialize(), function(data) {
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
                        location.href = '3_B2B-index.php'
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