    // header不要fixed
    $('header').removeClass('position-fixed');



    // 優惠券明細框假動態
    $('.input-group-text').on('click', function() {
        $(this).css('background-color', '#ffc024');
        $(this).closest('.shopcart-total').find('.cupon-success').show();
        $(this).closest('.shopcart-total').find('#discount').text('300');
        calcTotal();

    })

    // 數量增減
    $('.add').on('click', function() {
        let q = $(this).prev().val();
        q = q * 1 + 1;
        $(this).prev().val(q);
        $(this).prev().attr('value', q);
        // $(this).prev().attr('data-quantity', q);

    })

    // 按鈕減少數量
    $('.minus').on('click', function() {
        let q = $(this).next().val();
        q = q * 1 - 1;
        $(this).next().val(q);
        $(this).next().attr('value', q);
        // $(this).next().attr('data-quantity', q);
    })

    // 移除
    function removeItem(sid) {
        $.get('4_productList-shopcart-api.php', {
            sid: sid,
            action: 'remove'
        }, function(data) {
            // 上面navbar的購物車數量要變
            countCart(data.cart);
            // 購物車清單的列要移除
            $('div#prod' + sid).remove();

        }, 'json')
    }


    //計算全部總計金額
    function calcTotal() {
        let total = 0;
        // 調整數量時連動資料庫
        $('.product-item').each(function() {
            // 拿到這個項目後
            const ul = $(this);
            // 拿價錢
            const price = parseInt(ul.find('div.price').attr('data-price'));
            // 拿數量
            const quantity = parseInt(ul.find('input.quantity').attr('data-quantity'));
            // console.log(quantity)
            // 算小計，先抓到小計區塊
            const subTotal = ul.find('li.subtotal').text('$' + (price * quantity));
            // 每次小計完就加上金額
            total += price * quantity;
        });
        $('#totalAmount').text('$ ' + total);

        // 扣掉優惠券的總計價格
        const discount = $('#discount').text() * 1;
        $('#allTotal').text('$' + (total - discount));

    };
    calcTotal();


    // 現在要改變數量時，寫進購物車內改數量，再回傳回來
    // 先做加的
    $('.add').on('click', function() {
        // console.log('input.quantity')
        const quantity = $(this).prev().val();
        const sid = $(this).closest('.product-item').attr('data-sid');
        const combo = $(this);
        // 找到這兩個數字後，就發ajx到購物車api那邊
        $.get('4_productList-shopcart-api.php', {
            sid: sid,
            action: 'add',
            quantity: quantity,
        }, function(data) {
            console.log(data);
            // 上面navbar的購物車數量要變
            countCart(data.cart);
            // 回來後更改數量 
            combo.prev().attr('data-quantity', quantity);
            // 有變動後再呼叫一次總計
            calcTotal();
        }, 'json')
    });

    // 現在要改變數量時，寫進購物車內改數量，再回傳回來
    // 再做減的
    $('.minus').on('click', function() {
        // console.log('input.quantity')
        const quantity = $(this).next().val();
        const sid = $(this).closest('.product-item').attr('data-sid');
        const combo = $(this);
        // 找到這兩個數字後，就發ajx到購物車api那邊
        $.get('4_productList-shopcart-api.php', {
            sid: sid,
            action: 'add',
            quantity: quantity
        }, function(data) {
            console.log(data);
            // 上面navbar的購物車數量要變
            countCart(data.cart);
            // 回來後更改數量 
            combo.next().attr('data-quantity', quantity);
            // 有變動後再呼叫一次總計
            calcTotal();
        }, 'json')
    });