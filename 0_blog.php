<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php $title = 'KunstHaus | 新鮮事'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!--引入blog的css-->
<link rel="stylesheet" href="./css/0_blog.css">

<div class="space"></div>

<!-- stickers -->
<div class="sticker s-01 position-fixed">
    <img src="<?= WEB_ROOT ?>imgs/blog/sticker-01.png" alt="">
</div>
<div class="sticker s-02 position-fixed">
    <img src="<?= WEB_ROOT ?>imgs/blog/sticker-02.png" alt="">
</div>
<div class="sticker s-03 position-fixed">
    <img src="<?= WEB_ROOT ?>imgs/blog/sticker-03.png" alt="">
</div>
<div class="sticker s-04 position-fixed">
    <img src="<?= WEB_ROOT ?>imgs/blog/sticker-04.png" alt="">
</div>

<!-- blog -->
<div class="container hero-article">
    <div class="row category-wrap">
        <div class="category-header d-flex align-items-center justify-content-around w-100">
            <div class="category-count">01</div>
            <div class="category-name">
                <div class="zh w-100">質感好文，美好你的一天</div>
            </div>
            <div class="category-hr"></div>
        </div>
    </div>
    <div class="row">
        <div class="hero-article d-flex align-items-end">
            <div class="col-8 px-0">
                <div class="feature-img red-shadow">
                    <a href="#">
                        <img src="<?= WEB_ROOT ?>imgs/blog/feature-img-01.png" alt="">
                    </a>
                </div>
            </div>
            <div class="article-meta col-4 px-0">
                <a href="#" class="">
                    <div class="title">
                        白雪世界裡的生命力，每個凜冽嚴冬中的堅毅臉龐
                    </div>
                </a>
                <div class="excerpt">
                    <p>攝影師 Oded Wagenstein 遠赴朦朧北國西伯利亞地區，拍攝北方遊牧民族年長女性的樣貌與故事，在寒冷的冬季中，這些女性面上的紋路就如同造物主的傑作，呈現出生命最美好的模樣。</p>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="hero-article d-flex align-items-end">
            <div class="col-8 px-0">
                <div class="feature-img blue-shadow">
                    <a href="#">
                        <img src="<?= WEB_ROOT ?>imgs/blog/feature-img-05.png" alt="">
                    </a>
                </div>
            </div>
            <div class="article-meta col-4 px-0">
                <a href="#" class="">
                    <div class="title">
                        義大利人做繪本、玩繪本、讀繪本（上）
                    </div>
                </a>
                <div class="excerpt">
                    <p>閱讀繪本的過程，讀字讀圖，讀字裡行間的言外之意，一窺文和圖之間的關係。讓我們藉著作家楊馥如的細膩筆觸，了解義大利人做繪本背後的藝術。</p>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container sub-article">
    <div class="row category-wrap">
        <div class="category-header d-flex align-items-center justify-content-around w-100">
            <div class="category-count">02</div>
            <div class="category-name">
                <div class="zh w-100">精選舊文，重拾你的靈感</div>
            </div>
            <div class="category-hr"></div>
        </div>
    </div>
    <div class="row">
        <div class="three-article d-flex">
            <div class="col-lg-4 pr-2 pl-0">
                <a href="#">
                    <img class="w-100" src="<?= WEB_ROOT ?>imgs/blog/feature-img-02.png" alt="">
                </a>
                <a href="#">
                    <div class="title">
                        「你的歲月靜好，不過是有人替你負重前行。」── 台灣插畫家用繪畫撐香港！
                    </div>
                </a>
                <div class="excerpt">
                    <p>從反送中、白衣黑幫事件到最近的理工大學圍城現象，全世界都在關注香港的現況，然而不是當事人、不在現場的我們又該如何給予幫助？ 成立於 2011 年的小路映画，近期發起「『睜開左眼』，用台灣插畫撐香港。」的運動，會取名為「睜開左眼」的原因， ……</p>
                </div>
            </div>
            <div class="col-lg-4 px-1">
                <a href="#">
                    <img class="w-100" src="<?= WEB_ROOT ?>imgs/blog/feature-img-03.png" alt="">
                </a>
                <a href="#">
                    <div class="title">
                        跟著世界經典名畫，窺探古今大眾對於美少女、美少年的遐想與欲望！
                    </div>
                </a>
                <div class="excerpt">
                    <p>對於「美少年」、「美少女」這兩個字詞，我們可能有很多種想像，直觀的會認為是形容青春洋溢的少男少女們，然而其實在古希臘時代開始，歷經基督教時代、文藝復興時代，到當代每個時期都對其有著不同詮釋以及意義。讓我們藉由世界經典名畫結合而生的《美少 ……</p>
                </div>
            </div>
            <div class="col-lg-4 pl-2 pr-0">
                <a href="#">
                    <img class="w-100" src="<?= WEB_ROOT ?>imgs/blog/feature-img-04.png" alt="">
                </a>
                <a href="#">
                    <div class="title">
                        從討厭吃麵包到成為ㄆㄤˋ達人，以麵包巡禮、詩回憶東京 5 家名店
                    </div>
                </a>
                <div class="excerpt">
                    <p>影響麵包口感的因子有很多：空氣、水、麵粉、溫度、技巧，要有好吃的麵包，每一個步驟的處理都必須小心再謹慎。如果逛膩了東京的大景點，不妨就來走訪一遭巷弄間的質感麵包店，挑戰對麵包的味蕾想像！</p>
                </div>
            </div>
        </div>
    </div>
</div>





<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>

</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>