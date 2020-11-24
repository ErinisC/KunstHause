<?php $title = '活動上架'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-Create-Event.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container col-8 b2bcreate">
        <div class="space" style="height: 150px;"></div>
        <div class="row">
            <h1 class="title">上架活動資料</h1>
            <h2 class="sm-title">KunstHaus 使用者將透過下列資訊了解活動</h2>
        </div>
        <div class="space" style="height: 50px;"></div>
        <label for="event-banner">活動Banner</label>
        <div class="event-banner d-flex">

            <input class="input" name="event-banner" type="" src="" alt="" placeholder="XXX.JPG">

            <button class="upload-banner btn" type="submit">上傳圖片</button>
        </div>
        <div class="image-review"></div>
        <label for="event-name">活動名稱</label>
        <input class="input" type="text" name="event-name" placeholder="活動名稱">
        <label for="date">活動日期</label>
        <p class="pt-3">(活動日期開始)</p>
        <input class="input" name="date" type="datetime-local">
        <p>(活動日期結束)</p>
        <input class="input" name="date" type="datetime-local">
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
        <form name="event-place" class="event-place d-flex">
            <select name="City" type="text" class="input " style="width:180px">
                <option value="Taipei">台北市</option>
                <option value="NewTaipei">新北市</option>
                <option value="Taoyuan">桃園市</option>
                <option value="Hsinchu">新竹縣</option>
                <option value="Miaoli">苗栗國</option>
                <option value="Taichung">台中市</option>
            </select>

            <select type="text" class="input" style="width:180px">

            </select>
            <input type="text" class="input" placeholder="XXX街XXX號">
        </form>
        <label for="transport">
            交通資訊
            <Textarea name="transport" class="textarea" cols="113" rows="15">
        </Textarea>
        </label>

        <label for="Precautions">
            活動注意事項
            <Textarea name="Precautions" class="textarea" cols="113" rows="15">
        </Textarea>
        </label>

        <label for="event-content">
            活動內容資訊
            <Textarea name="event-content" class="textarea" cols="113" rows="15" required>
        </Textarea>
        </label>

        <div class="d-flex">
            <div class="blanket"></div>
            <div>
                <label for="price">活動票卷售價</label>
                <div class="d-flex pricesetting">
                    <div class="pricetag col-5">
                        <p class="py-2">NT$</p>
                    </div>
                    <input name="price" type="number" class="col-7 input">

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
        <div class="modbutton text-center col-8">
            <div class="okbutton d-flex">
                <button class="modify1 btn ">取消</button>
                <div class="space" style="width: 20px;"></div>
                <button class="modify2 btn ">完成</button>
            </div>
        </div>
    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src="">
    function autogrow(textarea) {
        var adjustedHeight = textarea.clientHeight;
        adjustedHeight = Math.max(textarea.scrollHeight, adjustedHeight);
        if (adjustedHeight > textarea.clientHeight) {
            textarea.style.height = adjustedHeight + 'px';
        }
    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>