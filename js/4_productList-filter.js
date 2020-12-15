
        // 改變搜尋結果內容文字
        $('.card-header').on('click', function() {
            $(this).css('background-color', '#ffc024')
            $(this).closest('.filter-btn').siblings().find('.card-header').css('background-color', 'rgba(0, 0, 0, 0.03)')

            // 改變搜尋字
            $(this).find('.btn').text()
            const text = $(this).find('.btn').attr('data-name')
            // console.log(text)
            $('.search-result').text('" ' + text + ' "')
        });

        $('.card-body').on('click', function() {
            // console.log($(this).attr('data-name'))
            $(this).css('background-color', '#ffdd85')
            $(this).siblings().css('background-color', 'white')

            // 抓文字
            const text = $(this).attr('data-name')
            $('.search-result').text('" ' + text + ' "')

        });

        let likes = [];

        // 前端樣板小卡，先生成一個html的樣板字串格式
        const productTpl = function(a) {
            const sYear = a.start_datetime.slice(0, 4);
            const sDate = a.start_datetime.slice(5, 11);
            const eDate = a.end_datetime.slice(5, 11);
            let heart = '';
            if (likes && likes.length) {
                if (likes.includes(a.sid)) {
                    heart = "liked"
                }
            }

            return `     <div class="event-card mb-5 col-lg-6 col-md-6 col-sm-12 col-12" data-sid="${a.sid}">

<a href="4_product-detail.php?sid=${a.sid}" target="_blank" class="flip-card">
    <div class="flip-card-inner position-relative">
        <div class="flip-card-front img-wrap mb-3 position-relative position-absolute">
            <img src="imgs/event/event-sm/${a.picture}" class="card-img-top" alt="">
            <!-- 圖片上時間 -->
            <div class="time position-absolute p-2">
                <!-- 年 -->
                <div class="year">${sYear}</div>
                <!-- start -->
                <div class="start">${sDate}</div>
                <!-- end -->
                <div class="end">${eDate}</div>
            </div>
        </div>

        <div class="flip-card-back position-absolute p-3">
            <div class="filp-title mb-3 text-center"> 活動簡介</div>
            <p class="px-3">${a.event_info}</p>
            <div class="px-3 text-right mt-2 text-white">查看詳細介紹 >></div>

        </div>
    </div>
</a>


<div class="wrap mt-1 d-flex">
    <div class="card-body d-flex p-0 w-100">
        <div class="card-info position-relative m-auto py-3 col-10">
            <div class="event-name mb-2">${a.event_name}</div>

            <div class="event-location mb-2">
                <i class="fas fa-map-marker-alt"></i>
                ${a.location}</div>

            <div class="now-price">$ ${a.price}</div>

        
            <a href="Javascript:" class="like-link position-absolute">
                <i class="like like-btn far fa-heart ${heart}" data-sid="${a.sid}"></i>
            </a>

        </div>

   
        <a href="javascript:showProductModal(${a.sid})" class="card-price py-3 col-2 d-flex justify-content-center align-items-center">
            <i class="fas fa-cart-plus"></i>
        </a>

    </div>
</div>
</div>`;
        }

        function whenHashChanged() {
            // slice是不要前面的＃
            let u = location.hash.slice(1);
            console.log(u);
            // if (u == '2') {
            //     '5,6,7'
            // }
            getProductData(u);


            // TBD:改變外觀的事情讓whenhashchange來做

        }

        //事件處理器的event type，也就是這邊的’hashchange‘，全部都小寫，不會有大寫的
        window.addEventListener('hashchange', whenHashChanged);
        whenHashChanged();

        // JQ寫法抓sid，這邊要挪到最上面宣告，因為中間改選tag時會用到
        const cate_btns = $('.filter-btn');
        cate_btns.on('click', function(event) {
            const sid = $(event.target).closest('.area_item').attr('data-sid')
            // const sid = $(this).attr('data-sid') * 1;
            console.log(`sid: ${sid}`);
            location.href = "#" + sid;

        });

        // 拿資料的function
        function getProductData(cate = 0) {
            $.get('4_productList-filter-api.php', {
                cate: cate
            }, function(data) {
                console.log(data);

                // 呼叫小卡function，它會用回圈設定給出html字串
                let str = '';
                // 這邊的if是為了防止api沒撈到資料，先檢查一下
                if (data.products && data.products.length) {
                    data.products.forEach(function(el) {
                        str += productTpl(el);
                    });
                }

                // 拿到html字串後，再把所有商品串起來
                $('.product-list').html(str);



            }, 'json');
        }

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

        });


        // 收藏功能
        // const sess_user = <?= json_encode($_SESSION['user'] ?? []) ?>;
        // const like_btns = $('.like-btn');
        // like_btns.click(function() {
        //     if (!sess_user.sid) {
        //         console.log('請先登入');

        //     } else {
        //         const card = $(this).closest('.event-card');
        //         const sid = card.attr('data-sid');
        //         const sendObj = {
        //             action: 'like',
        //             sid: sid,
        //         }
        //         console.log(sendObj)
        //         $.get('4.likes-api.php', sendObj, function(data) {
        //             console.log(data);
        //             if (data.success) {
        //                 card.find('.like-btn').addClass('liked');
        //             } else {
        //                 card.find('.like-btn').removeClass('liked');
        //             }

        //         }, 'json');
        //     }

        // });