<?php $title = 'KunstHaus | 活動資料修改'; ?>
<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-Edit-Event.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container col-xl-6 col-12 b2bcreate px-0">
        <div class="space" style="height: 130px;"></div>
        <div class="col-12">
            <h1 class="title">上架資料修改</h1>

        </div>

        <div class="space" style="height: 50px;"></div>

        <div name="event_form">
            <div class="form-group">
                <label class="event-banner d-flex col-sm-12">
                    <div class="input input-wrap input-wrap-picture fake_input_placeholder position-absolute">
                        <label for="" class="FileName"></label>
                        <input id="picture" name="picture" class="input fake_input " ref={fileInput} accept="image/jpeg,image/png" type="file" />
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
                    <label for="categories">活動種類</label>
                    <select id="categories" name="categories" type="text" class="input" required>
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
                <label for="cityLocation">活動地點</label>
                <div class="input-wrap d-flex flex-wrap col-lg-12 p-0">
                    <div class="input-box selector col-xl-4  d-flex justify-content-between p-0">
                        <select id="region" name="region" type="text" class="input col-sm-5 mx-0" style="width:180px" name="region" required>

                            <option value="" disabled selected>請選擇</option>
                            <option value="North">北部</option>
                            <option value="Middle">中部</option>
                            <option value="South">南部</option>

                        </select>

                        <div class="col-lg-1 blanket"></div>
                        <select type="text" id="cityLocation" name="cityLocation" class="input-box input col-sm-5 mx-0" style="width:180px" required>

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
                    活動內容資訊
                    <div class="input-wrap">

                        <Textarea id="event_info" name="event_info" class="textarea event_info" cols="117" rows="10" required></Textarea>

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

            <!-- 錯誤跳提醒設定 alert -->
            <div id="info_bar" class="alert alert-danger col-8 mx-auto my-4 py-3" role="alert" style="display: none">
            </div>

            <div class="modbutton text-center">
                <div class="okbutton col-xl-6 col-10 d-flex">
                    <button class="modify1 col-5 btn" onclick="showModal()">取消活動</button>

                    <button id="submitButton" onclick="checkForm()" class="modify2 col-5 btn" data-target="#exampleModalCenter">修改完成</button>

                </div>
            </div>

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
                        <div class="modal-title mx-auto mt-3" id="exampleModalCenterTitle">019百威真我至上音樂巡迴2
                        </div>
                        <span class="text-center mt-3 ">活動已幫你送出審核，
                            再請至活動管理
                            查詢狀態。
                        </span>
                    </div>

                    <div class="modal-footer mx-auto my-auto">
                        <button type="button" onclick="location.href='3_B2B-index.php'" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                    </div>

                </div>
            </div>
        </div>
        </table>
    </div>


    <div class="space" style="height: 150px;"></div>
</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- Bootstrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>
<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<script>
    // 預覽圖片
    $('.fake_input').on('change', function(e) {
        const file = this.files[0];
        const objectURL = URL.createObjectURL(file);

        $('.eventimg').attr('src', objectURL);
    });

    // $('fake_input_placeholder').on('change', function getFilePath() {
    //     $('input[type=file]').change(function() {
    //         var filePath = $('#fileUpload').val();
    //     })
    // });

    $('#picture').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#picture')[0].files[0].name;
        $(this).prev('label').text(file);
    });


    // 設定常數
    const picture = $('#picture');
    const eventname = $('#event_name');
    const startdate = $('#start-datetime');
    const enddate = $('#end-datetime');
    const categories = $('#categories');
    const region = $('#region');
    const cityLocation = $('#location');
    const address = $('#address');
    const eventinfo = $('#event_info');
    const price = $('#price');
    const info_bar = $('#info_bar');


    $('#exampleModalCenter').on('hidden.bs.modal', function(a) {
        location.href = '3_B2B-index.php';
    });


    // 送出表單
    function checkForm() {

        // 呼叫的時候先清掉其他警告

        $('.input-wrap').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查長度
        let isPass = false;

        if (picture.val().length === 0) {

            picture.closest('.input-wrap').addClass('error')
        } else {
            picture.closest('.input-wrap').removeClass('error')
            picture.closest('.input-wrap').addClass('success')
        }

        // 如果拿到的活動名稱的長度小於2，就不通過
        if (eventname.val().length === 0) {
            // 這邊設定下面small的小警告出現的文字
            // 小警告的位置是name的next (JQ select注意！)
            eventname.closest('.input-wrap').addClass('error')
            // name.closest('.input-wrap').find(small).text('請填寫正確姓名')
        } else {
            eventname.closest('.input-wrap').removeClass('error')
            eventname.closest('.input-wrap').addClass('success')
        }

        if (startdate.val().length === 0) {
            startdate.closest('.input-wrap').addClass('error');
        } else {
            startdate.closest('.input-wrap').removeClass('error')
            startdate.closest('.input-wrap').addClass('success')
        }

        if (enddate.val().length === 0) {
            enddate.closest('.input-wrap').addClass('error');
        } else {
            enddate.closest('.input-wrap').removeClass('error')
            enddate.closest('.input-wrap').addClass('success')
        }

        if (categories.val() === null) {
            categories.closest('.input-wrap').addClass('error');
        } else {
            categories.closest('.input-wrap').removeClass('error')
            categories.closest('.input-wrap').addClass('success')
        }


        if (region.val() === null) {
            region.closest('.input-wrap').addClass('error');
        } else {
            region.closest('.input-wrap').removeClass('error')
            region.closest('.input-wrap').addClass('success')
        }

        if (cityLocation.val() === null) {
            cityLocation.closest('.input-wrap').addClass('error');
        } else {
            cityLocation.closest('.input-wrap').removeClass('error')
            cityLocation.closest('.input-wrap').addClass('success')
        }

        if (address.val().length === 0) {
            address.closest('.input-wrap').addClass('error');
        } else {
            address.closest('.input-wrap').removeClass('error')
            address.closest('.input-wrap').addClass('success')
        }

        if (eventinfo.val().length === 0) {
            eventinfo.closest('.input-wrap').addClass('error');
        } else {
            eventinfo.closest('.input-wrap').removeClass('error')
            eventinfo.closest('.input-wrap').addClass('success')
        }

        if (price.val().length === 0) {
            price.closest('.input-wrap').addClass('error')
        } else {
            var formData = new FormData(document.event_form);
            fetch('3_B2B-create-event-api.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .catch(error => console.error('Error:', error))
                .then(data => {
                    console.log("🚀 ~ file: 3_B2B-create-event.php ~ line 384 ~ checkForm ~ data", data)
                    console.log(data);
                    if (data.success) {
                        console.log("🚀 ~ file: 3_B2B-create-event.php ~ line 386 ~ checkForm ~ data.success", data.success)
                        // info_bar
                        //     .removeClass('alert-danger')
                        //     .addClass('alert-success')
                        //     .text('完成新增');

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




            // $.post('3_B2B-create-event-api.php', $(document.event_form).serialize(), function(data) {
            //     console.log(data);
            //     // $('#exampleModalCenter').modal('show');
            //     // $('#exampleModalCenter').on('hidden.bs.modal', function(e) {
            //     //     location.href = '1_member-login.php'
            //     // })
            //     // return;

            //     if (data.success) {
            //         // info_bar
            //         //     .removeClass('alert-danger')
            //         //     .addClass('alert-success')
            //         //     .text('完成新增');

            //     } else {
            //         info_bar
            //             // .removeClass('alert-success')
            //             .addClass('alert-danger')
            //             .text(data.error || '新增失敗');

            //         info_bar.slideDown();

            //         setTimeout(function() {
            //             info_bar.slideUp();
            //         }, 2000);
            //     }
            //     }, 'json');
            // 
        }
    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>