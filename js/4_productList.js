    // modal
    function showProductModal(sid) {
        // 去抓當個sid
        $('iframe')[0].src = '4_productList-modal-api.php?sid=' + sid;

        $('#exampleModal').modal('show')

    }

    function updateCartCount() {
        //nav bar 呼叫的方法
    }


    // 搜尋下拉框呈現
    $('#search-event').on('click', function() {
        $('.search-dropdown').toggle();

    })


    // 動態一一浮現
    // 用css animate抓scroll時的offest
    // parallax scrolling

    // $(window).scroll(function() {
    //     let scrollTop = $(window).scrollTop();
    //     console.log('scrollTop:', scrollTop);

    //     // quotation飛進來
    //     if (scrollTop > 600) {
    //         $('.quotation').addClass('flyin');
    //     } else {
    //         $('.quotation').removeClass('flyin');
    //     }

    //     // 精選小卡浮現
    //     if (scrollTop > 650) {
    //         $('.intro-box').addClass('show-up');
    //     } else {
    //         $('.intro-box').removeClass('show-up');
    //     }

    //     if (scrollTop > 1500) {
    //         $('.card').addClass('move-up');
    //         $('.card').addClass('move-up');
    //     } else {
    //         $('.card').removeClass('move-up');
    //     }

    // })

    // 搜尋框
    $('.search-box').on('mouseover', function() {
        $('.search-box').css('transform', 'translate(20px, 18px)')
    })

    $('.search-box').on('mouseleave', function() {
        $('.search-box').css('transform', 'translate(0px, 0px)')
    })

    $('.card').eq(0); //抓到所有的小卡
    $('.card').eq(0).offset(); //抓到第0個的offset



    // 活動種類小卡伸展
    $('.type-card').on('mouseenter', function() {
        $(this).addClass('expand')
    })

    $('.type-card').on('mouseleave', function() {
        $(this).removeClass('expand')
    })


    // 測試拖曳
    const slider = document.querySelector('.items');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
        console.log(walk);
    });

    // 拖曳卡片右方按鈕
    $('.recommend-right').on('click', function() {
        const slider = document.querySelector('.items');
        slider.scrollLeft += 300;
    })

    // 拖曳卡片左方按鈕
    $('.recommend-left').on('click', function() {
        const slider = document.querySelector('.items');
        slider.scrollLeft -= 300;
    })

    // 瀏覽紀錄的動態
    $('.side-cookie-bar').on('mouseover', function() {
        $('.side-cookie-item').toggle();
    });


    // 輪播測試
    var angle = 0;

    function galleryspin(sign) {
        spinner = document.querySelector("#spinner");
        if (!sign) {
            angle = angle + 45;
        } else {
            angle = angle - 45;
        }
        spinner.setAttribute("style", "-webkit-transform: rotateY(" + angle + "deg); -moz-transform: rotateY(" + angle + "deg); transform: rotateY(" + angle + "deg);");
    }

    // 
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 6000
        })
    });



    // 收藏功能
    const sess_user = <?= json_encode($_SESSION['user'] ?? []) ?>;
    const like_btns = $('.like-btn');
    like_btns.click(function() {
        if (!sess_user.sid) {
            // console.log('請先登入');
            location.href = "1_member-login.php";

        } else {
            const card = $(this).closest('.event-card');
            const sid = card.attr('data-sid');
            const sendObj = {
                action: 'like',
                sid: sid,
            }
            console.log(sendObj)
            $.get('4.likes-api.php', sendObj, function(data) {
                console.log(data);
                if (data.success) {
                    card.find('.like-btn').addClass('liked');
                } else {
                    card.find('.like-btn').removeClass('liked');
                }

            }, 'json');
        }

    });

    // TOP10 熱門藝文展覽 carousel 開始
    let carouselIndex = 1;
    $('.carousel-wrapper').css('left', '-=' + $('.event-card').outerWidth(true));

    // carousel 往右按鈕
    $('.carousel-control-next').on('click', function() {
        $('.carousel-wrapper').css('transition', '.5s');
        carouselIndex++;
        if (parseInt($('.carousel-wrapper').css('left')) * -1 < $('.carousel-wrapper').width() + $('.event-card').outerWidth(true) * 1) {
            $('.carousel-wrapper').css('left', '-=' + $('.event-card').outerWidth(true));
        } else {
            $('.carousel-wrapper').css('left', '-=' + $('.event-card').outerWidth(true));
        }
        $('.carousel-white').removeClass('active').eq((carouselIndex > 6) ? 0 : carouselIndex - 1).addClass('active');

    });

    // carousel 往左按鈕
    $('.carousel-control-prev').on('click', function() {
        $('.carousel-wrapper').css('transition', '.5s');
        carouselIndex--;
        if (parseInt($('.carousel-wrapper').css('left')) * -1 > $('.event-card').outerWidth(true)) {
            $('.carousel-wrapper').css('left', '+=' + $('.event-card').outerWidth(true));
        } else {
            $('.carousel-wrapper').css('left', '+=' + $('.event-card').outerWidth(true));
        }
        $('.carousel-white').removeClass('active').eq((carouselIndex === 0) ? 5 : carouselIndex - 1).addClass('active');
    });

    //carousel 無限迴圈處理
    $('.carousel-wrapper').on('transitionend webkitTransitionEnd oTransitionEnd', function() {
        if (carouselIndex > 6) {
            $('.carousel-wrapper').css('transition', 'none').css('left', $('.event-card').outerWidth(true) * -1);
            carouselIndex = 1;
            $('.carousel-white').removeClass('active').eq(0).addClass('active');
        }

        if (carouselIndex === 0) {
            $('.carousel-wrapper').css('transition', 'none').css('left', $('.event-card').outerWidth(true) * -6);
            carouselIndex = 6;
            $('.carousel-white').removeClass('active').eq(5).addClass('active');
        }
    })

    // 白色橫條
    $('.carousel-white').on('click', function() {
        carouselIndex = $(this).data('slide-to') + 1;
        let left = carouselIndex * $('.event-card').outerWidth(true) * -1;
        $('.carousel-wrapper').css('left', left);
        $('.carousel-white').removeClass('active');
        $(this).addClass('active');
    })
    // carousel 結束

    // JS mediaQuery
    // $(window).width()