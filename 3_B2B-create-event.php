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
        <span>活動Banner</span>
        <div class="event-banner d-flex">

            <input class="input" type="" src="" alt="" placeholder="XXX.JPG">

            <button class="upload-banner btn" type="button">上傳圖片</button>
        </div>
        <div class="image-review"></div>
        <span>活動名稱</span>
        <input class="input" type="text" placeholder="活動名稱">
        <span>活動日期</span>
        <input class="input" type="date">
        <span>活動種類</span>
        <select name="sort" type="text" class="input">
            <option value="music">音樂會</option>
            <option value="show">表演</option>
            <option value="art">演藝</option>
        </select>
        <span>標籤設定</span>
        <input type="text" class="input" placeholder="#Hashtags">

        <span>
            活動地點
        </span>
        <form class="event-place d-flex">
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
        <span>
            交通資訊
        </span>
        <Textarea name="traffic" class="textarea" cols="83" rows="15">
        </Textarea>
        <span>
            活動注意事項
        </span>
        <Textarea name="Precautions" class="textarea" cols="83" rows="15">
        </Textarea>
        <span>
            活動內容資訊
        </span>
        <Textarea name="EventContent" class="textarea" cols="83" rows="15">
        </Textarea>

        <div class="pricesetting my-auto d-flex">
            <span>活動票卷售價</span>
            <div class="pricetag col-5">
                <p class="col-4">NT$</p>
            </div>
        </div>
    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script src=""></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>