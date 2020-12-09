<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php $pageName = 'blog'; ?>
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
    <h1 class="text-right">最新鮮的。報給你知</h1>
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
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 px-0">
                <div class="feature-img red-shadow">
                    <a href="#">
                        <img src="<?= WEB_ROOT ?>imgs/blog/feature-img-01.png" alt="">
                    </a>
                </div>
            </div>
            <div class="article-meta col-lg-4 col-md-12 col-sm-12 col-12 px-0">
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
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 px-0">
                <div class="feature-img blue-shadow">
                    <a href="0_blog_article.php">
                        <img src="<?= WEB_ROOT ?>imgs/blog/feature-img-05.png" alt="">
                    </a>
                </div>
            </div>
            <div class="article-meta col-lg-4 col-md-12 col-sm-12 col-12 px-0">
                <a href="0_blog_article.php" class="">
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
    <div class="row">
        <div class="hero-article d-flex align-items-end">
            <div class="col-lg-8 col-md-12 col-sm-12 col-12 px-0">
                <div class="feature-img yellow-shadow">
                    <a href="#">
                        <img src="<?= WEB_ROOT ?>imgs/blog/feature-img-06.png" alt="">
                    </a>
                </div>
            </div>
            <div class="article-meta col-lg-4 col-md-12 col-sm-12 col-12 px-0">
                <a href="#" class="">
                    <div class="title">
                        零對白短片《If Anything Happens I Love You》如輓歌，刻畫悲劇後的思念與哀傷
                    </div>
                </a>
                <div class="excerpt">
                    <p>短片《If Anything Happens I Love You》僅以配樂和簡單線條，刻畫悲劇後殘存的思念與哀傷，面對心中龐大的「黑影」，莫忘那一朵鑲著銀邊的雲，黑白的人生仍有機會再次點亮。</p>
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
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pr-2 pl-0">
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
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 px-1">
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
            <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-2 pr-0">
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
    <div class="row">
        <div class="two-article d-flex">
            <div class="col-lg-6 pl-0">
                <a href="#">
                    <img class="w-100" src="<?= WEB_ROOT ?>imgs/blog/feature-img-07.png" alt="">
                </a>
                <a href="#">
                    <div class="title">
                        「視覺，是一個時代的翻譯機。」 動態與平面合體的無敵金剛戰士 ── 專訪日目 247 Visual Art
                    </div>
                </a>
                <div class="excerpt">
                    <p>週五早晨，沒有侵略性的黃光照進座落在建國高架旁的工作室，黃顯勛親切的呼喚我喝口他們特別買的咖啡，然後話家常的說著，採訪的會議桌是他與陳普規定不可以被雜物入侵的神聖地。黃顯勛笑的豪爽親切，絲毫沒有視覺總監的架子。 「不好意思！」隨後到的陳 ……</p>
                </div>
            </div>
            <div class="col-lg-6 pr-0">
                <a href="#">
                    <img class="w-100" src="<?= WEB_ROOT ?>imgs/blog/feature-img-08.png" alt="">
                </a>
                <a href="#">
                    <div class="title">
                        用創作暖心的繪本故事，為在等家的浪浪們爭取更多愛！── 專訪故事創作者佳穎
                    </div>
                </a>
                <div class="excerpt">
                    <p>流浪動物的議題是台灣一直以來十分關注的事，《你知道我家在哪裡嗎？》的故事作者佳穎，用她自身的經歷及感同身受的心情，創作出動人的故事，並期待大家能藉由可愛趣味的繪本，品嚐更多幸福的滋味、學會珍惜每一個生命。</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container issue">
    <div class="row category-wrap">
        <div class="category-header d-flex align-items-center justify-content-around w-100">
            <div class="category-count">03</div>
            <div class="category-name">
                <div class="zh w-100">拾貳專題，食物攝影創作</div>
            </div>
            <div class="category-hr"></div>
        </div>
    </div>
    <div class="row issue-meta-wrap align-items-end">
        <div class="issue-meta-inner col-lg-4 col-md-12 col-sm-12 col-12 pl-0">
            <div class="issue-title">百飲募集・食物攝影創作</div>
            <p class="issue-description">
                美食攝影，是「料理人×攝影師」共同的藝術創作，搶在狼吞虎嚥之前，將香溢汁噴、鮮嫩欲滴的美味紀錄成永恆。舌尖上的攝影師團隊，集結平面攝影、動態影像、文字記敘，要把餐桌上的飲食，釀成當代台灣文化的雋永甘醇。
            </p>
        </div>
        <div class="issue-cover col-lg-8 col-md-12 col-sm-12 col-12 px-0">
            <a href="#">
                <img class="w-100" src="<?= WEB_ROOT ?>imgs/blog/feature-img-09.png" alt="">
            </a>
        </div>
    </div>
    <div class="row">
        <ul class="issue-article-list d-flex">
            <li class="article col-lg-3">
                <div class="dot"></div>
                <div class="date">Aug.11.2020</div>
                <div class="index">01 /</div>
                <a href="#" class="title">餐酒與職人，被小資女霸佔的放縱基地 First One Bistro ── 《百飲募集》 VOL.1</a>
            </li>
            <li class="article col-lg-3">
                <div class="dot"></div>
                <div class="date">Sep.27.2020</div>
                <div class="index">02 /</div>
                <a href="#" class="title">用逐格動畫，進入奇幻童趣的咖哩世界： 布咕咖啡 Boogoo Cafe ── 《百飲募集》 VOL.2</a>
            </li>
            <li class="article col-lg-3">
                <div class="dot"></div>
                <div class="date">Oct.04.2020</div>
                <div class="index">03 /</div>
                <a href="#" class="title">臺菜囝仔 × 衝浪精神：古早味雞肉飯・雞霸 ── 《百飲募集》 VOL.3</a>
            </li>
            <li class="article col-lg-3">
                <div class="dot"></div>
                <div class="date">Nov.08.2020</div>
                <div class="index">04 /</div>
                <a href="#" class="title">以 Neo-Bistro 吟遊四季：裸餐酒 Naked ── 《百飲募集》 VOL.4</a>
            </li>
        </ul>
    </div>
</div>

<!-- <div class="container feature-activityr">
    <div class="row">
        <div class="item col-lg-6 pl-0">
            <h2>你可能會喜歡</h2>
            <div class="thumbnail">
                <a href="#">

                </a>
            </div>
        </div>

    </div>
</div> -->





<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>

</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>