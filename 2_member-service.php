<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php $title = 'KunstHaus | 聯繫客服'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!--引入member order的css-->
<link rel="stylesheet" href="./css/2_member-service.css">


<div class="space"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-12">
            <form class="service" action="POST" novalidate="novalidate">
                <div class="name d-flex mb-4">
                    <span class="label text-center">姓名</span>
                    <input name="your-name" class="inputbox" type="text" aria-required="true" maxlength="50" required>
                </div>
                <div class="title d-flex mb-4">
                    <span class="label text-center">主旨</span>
                    <input name="your-title" class="inputbox" type="text" aria-required="true" maxlength="50" required>
                </div>
                <div class="email-ad d-flex mb-4">
                    <span class="label text-center">EMAIL</span>
                    <input name="your-email" class="inputbox" type="email" aria-required="true" maxlength="50" required>
                </div>
                <div class="content mb-4">
                    <p class="label text-center short-label">內容</p>
                    <textarea name="your-content" class="inputbox w-100" type="text" aria-required="true" rows="8" required>
                    </textarea>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn service-submit col-4 mr-2">寄送信件</button>
                    <button type="reset" class="btn clear col-4">清除內容</button>
                </div>
            </form>

        </div>
        <div class="col-lg-4 sm-none"></div>
    </div>
</div>
<div class="space"></div>




<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>