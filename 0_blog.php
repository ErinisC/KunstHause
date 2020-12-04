<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php $title = 'KunstHaus | 新鮮事'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
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


<div class="container hero-article">
    <div class="row">
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
    <div class="article-hr"></div>
</div>





<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>

</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>