<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Noto Sans TC", sans-serif;
        font-family: "Roboto", sans-serif;
        overflow-x: hidden;
    }

    footer {
        background-color: #000;
        color: #fff;
        min-height: 380px;
    }

    .flex-container {
        flex-direction: row;
    }

    .footer-title {
        font-size: 17px;
        font-weight: bold;
        margin: 80px 0 40px;
    }

    .f-subtitle {
        font-size: 14px;
        color: #fff;
        margin: 10px 0;
    }

    .news-slogan {
        font-size: 14px;
    }

    .service a {
        display: block;
    }

    .news-slogan {
        line-height: 20px;
    }

    .email {
        border: 2px solid #fff;
        background-color: #000;
        border-radius: 0;
        height: 50px;
        width: 400px;
    }

    .letter-submit {
        padding: 15px 30px;
        border: none;
        border-radius: 0;
        color: #ed5b4c;
        font-size: 17px;
    }

    .copyright {
        margin-top: 250px;
    }

    .contact,
    .service {
        margin-left: 50px;
    }

    /* ----------media query---------- */
    @media (max-width: 768px) {
        .letter-submit {
            margin-top: 20px;
        }

        .flex-container {
            flex-direction: column;
        }

        .contact,
        .service {
            margin-left: 0px;
        }

        .email {
            width: 280px;
        }

    }
</style>

<footer>
    <div class="fluid-container">
        <div class="d-flex flex-container">
            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                <div class="contact">
                    <h5 class="footer-title">聯絡我們</h5>
                    <p class="f-subtitle">02 2222 1111</p>
                    <a class="f-subtitle" href="#">kunsthaus@mail.com</a>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                <div class="service">
                    <h5 class="footer-title">客服相關</h5>
                    <a class="f-subtitle" href="#">聯繫客服</a>
                    <a class="f-subtitle" href="#">票券管理</a>
                    <a class="f-subtitle" href="#">FAQ</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="news-letter">
                    <h5 class="footer-title">訂閱我們的電子報</h5>
                    <p class="news-slogan">想要獲取第一手消息嗎？
                        <br>快訂閱KunstHaus的電子報吧！</p>
                    <div class="row mt-5">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                            <form method="POST" action="" class="newsletter-form mr-3">
                                <input type="text" class="form-control email" id="email" name="email" placeholder="Email Address">
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                            <button class="letter-submit">我要訂閱</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2"></div>
            <div class="col-lg-2 col-md-2 col-sm-12 col-12">
                <div class="social d-flex mb-5 footer-title">
                    <div class="ins mr-3">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <div class="fb mr-3">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="twitter mr-3">
                        <i class="fab fa-twitter"></i>
                    </div>
                </div>
                <p class="copyright">©KunstHaus</p>
            </div>
        </div>
    </div>

</footer>

</body>

</html>