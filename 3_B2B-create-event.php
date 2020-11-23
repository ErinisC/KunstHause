<?php $title = '活動上架'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-Create-Event.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container col-6 b2bcreate">
        <div class="space" style="height: 200px;"></div>
        <div class="row">
            <h1 class="title">上架活動資料</h1>
            <h2 class="sm-title">KunstHaus 使用者將透過下列資訊了解活動</h2>
        </div>
        <div class="space" style="height: 100px;"></div>
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
        </label>
        <Textarea name="transport" class="textarea" cols="83" rows="15">
        </Textarea>
        <label for="Precautions">
            活動注意事項
        </label>
        <Textarea name="Precautions" class="textarea" cols="83" rows="15">
        </Textarea>
        <label for="event-content">
            活動內容資訊
        </label>
        <Textarea name="event-content" class="textarea" cols="83" rows="15" required>
        </Textarea>
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

            </div>
        </div>
    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>