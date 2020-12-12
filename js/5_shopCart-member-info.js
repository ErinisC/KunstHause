    // header不要fixed
    $('header').removeClass('position-fixed');


    // 明細表動畫
    $('.btn-itemlist').on('click', function() {
        $(this).find('i').toggleClass('rotate')
    })


    // 一鍵輸入
    $('.company_name').on('click', function() {
        $('#company_name').val('金金藝文活動公司');
        $('#tax-id-number').val('123456')
    })


    // 傳送表單
    const name = $('#name');
    const email = $('#email');
    const phone = $('#phone');

    const company_name = $('#company_name');
    const tax_number = $('#tax-id-number');


    function checkForm() {
        // 呼叫的時候先清掉其他警告
        $('.input-box').removeClass('success').removeClass('error');
        $('input').removeClass('success').removeClass('error');

        // 檢查有沒有通過，檢查姓名長度跟email格式
        let isPass = true;


        // 如果拿到的姓名的長度小於2，就不通過
        if (name.val().length < 1) {
            isPass = false;
            name.addClass('error');
            name.closest('.input-box').addClass('error');
        } else {
            // name.removeClass('error');
            // name.closest('.input-box').removeClass('error');

            // name.addClass('success');
            // name.closest('.input-box').addClass('success');

            // 傳送表單
            $.post('5_shopCart-member-info-api.php', $(document.form1).serialize(), function(data) {
                console.log(data)
            }, 'json');
            location.href = '5_shopCart-pay.php';

        }

    }