<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php $title = 'KunstHaus | 聯繫客服'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!--引入member order的css-->
<link rel="stylesheet" href="./css/2_member-service.css">


<div class="space"></div>
<div class="container">
    <div class="section-title mb-5">
        <img class="" src="<?= WEB_ROOT ?>imgs/member/service-section-title.svg" alt="">
    </div>
    <div class="row">
        <div class="col-lg-6 col-12">
            <form class="service" action="POST" novalidate="novalidate">
                <div class="name d-flex mb-4">
                    <span class="label text-center">姓名</span>
                    <input name="your-name" class="inputbox" type="text" aria-required="true" maxlength="50" required>
                </div>
                <div class="mail-title d-flex mb-4">
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
        <div class="col-lg-1"></div>
        <div class="col-lg-5 sm-none">
            <div id="shapes-background">
                <div id="shape-1" class="shake-1">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 395.12 390.45" style="enable-background:new 0 0 395.12 390.45;" xml:space="preserve">
                        <path class="st0" d="M336.94,1.68c-57.33,10.3-114.67,20.54-172.02,30.73C106.05,42.66,74.41,71.46,60.78,115
                        C35.16,192.61,10.98,265.57,0,346.77c3.45,70.24,79.99,43.14,107.46,6.4c72.93-99.09,169.56-180.26,256.03-266.98
                        C423.42,24.09,388.87-7.92,336.94,1.68z" />
                    </svg>
                </div>
                <div id="shape-2" class="shake-2">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 311.79 306.44" style="enable-background:new 0 0 311.79 306.44;" xml:space="preserve">
                        <path class="st0" d="M302.5,91.13C252.04,61.54,200.9,33.31,149.33,5.7c-40.95-19.98-77.42,16.09-86.8,54
                        C39.41,132.7,11.28,201.07,0.06,277.1c-1.58,26.53,28.82,40.33,54.98,18.61c69.02-58.29,148.07-104.63,224.64-152
                        C311.13,124.3,320.99,101.77,302.5,91.13z" />
                    </svg>
                </div>
                <div id="shape-3" class="shake-3">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 114.94 109.18" style="enable-background:new 0 0 114.94 109.18;" xml:space="preserve">
                        <path class="st0" d="M96.12,4.25C91.29-3.82,79.23,0.48,73.41,9.8C53.62,37.66,29.51,61.5,6.94,87.05
                        c-14.12,16.85-4.87,26.17,11.4,20.43c26.81-9.36,53.72-18.39,80.71-27.24c10.55-3.41,17.19-11.47,15.68-18.82
                        C110.92,40.96,105.23,22.94,96.12,4.25z" />
                    </svg>
                </div>
            </div>

            <div id="title-shape">
                <p class="title blur">KunstHaus</p>
            </div>



        </div>
    </div>
</div>
<div class="space"></div>




<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>