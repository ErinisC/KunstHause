<?php $title = 'KunstHaus | 活動管理'; ?>
<?php $pageName = 'b2b'; ?>
<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php

// 抓商品列表資料

// 設定一頁只能有六格
$perPage = 6;
// 設定使用者目前看的頁數
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// 選擇資料庫要的資料表，用count找出總共的幾數
$t_sql = "SELECT count(1)FROM products";
$t_stmt = $pdo->query($t_sql);

// 計算資料筆數
$totalRows = $t_stmt->fetch(PDO::FETCH_NUM)[0]; //總筆數
$totalPages = ceil($totalRows / $perPage); //總頁數

// 設定條件
if ($totalRows != 0) { // 如果總筆數不等於零=有資料的話
    if ($page < 1) { //如果所在頁數頁數小於一
        header('Location:4_productList.php');
        exit; //就轉向第一頁，然後停止執行下面的程式
    }
    if ($page > $totalPages) { //如果所在頁數頁數大於所有的頁數
        //就轉向目前最後一頁，然後停止執行下面的程式
        header('Location:4_productList.php' . $totalPages);
        exit;
    }

    // 這邊要抓出資料庫的筆數後，決定每頁放的資料（LIMIT %s,%s）
    $sql = sprintf("SELECT * FROM products ORDER BY sid  LIMIT %s ,%s", ($page - 1) * $perPage, $perPage);
    $stmt = $pdo->query($sql);

    // $rows就會等於每一筆抓出的資料
    $rows = $stmt->fetchAll();
} else {
    $rows = [];
}
// echo json_encode($rows);
// exit;
?>



<?php include __DIR__ . '/1_parts/1_head.php'; ?>

<!-- 引入自己的ＣＳＳ -->
<link rel="stylesheet" href="./css/3_B2B-event-manage.css">

<!-- 引入navbar -->
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<div class="background">
    <div class="container">
        <div class="row ticketbg">
            <div class="title">
                <h1>活動管理</h1>
                <p class="text">您可以在此查看所有歷來活動的紀錄</p>
                <div class="ticketbutton d-flex col-xl-6 col-12">
                    <button class="modify btn">審核中</button>
                    <button class="modify2 btn">已上架</button>
                    <button class="modify2 btn">已結束</button>
                    <button class="modify2 btn">歷史活動</button>
                </div>
                <form class="header-search2 col-xl-6 col-12" method="POST" name="header-search" class="form-inline ">
                    <input class="search" type="text" name="search" placeholder="搜索活動名稱">
                    <button class="search-icon" type="submit">
                        <img src="<?= WEB_ROOT ?>imgs/index/ic-search.svg" alt="">
                    </button>
                </form>


                <!-- 活動明細 -->
                <table>
                    <thead>
                        <tr class="tr d-flex mr-5 col-xl-12 col-12">
                            <td class="col-4">活動名稱</td>
                            <td class="col-2">活動日期</td>

                            <td class="col-2">活動狀態</td>
                            <td class="col-2"></td>
                            <td class="col-1"></td>


                        </tr>
                    </thead>
                    <tbody class=" col-xl-12 col-12">



                        <?php foreach ($rows as $r) : ?>
                            <tr class="tr2" data-sid="<?= $r['sid'] ?>">
                                <td class="col-4">
                                    <a href="4_product-detail.php?sid=<?= $r['sid'] ?>">
                                        <?= $r['event_name'] ?>
                                    </a>

                                </td>
                                <td class="col-2"><?= $r['start_datetime'] ?></td>
                                <td class="col-2" style="color: #ff0000;">審核中</td>

                                <td class="d-flex col-3">
                                    <div class="modbutton text-center">
                                        <button class="modify3 btn btn-primary mx-3 p-0">編輯活動</button>
                                    </div>
                                    <div class="modbutton text-center">
                                        <button class="modify4 btn btn-primary" onclick="wannaDel(event)">刪除活動</button>
                                    </div>
                                </td>
                            </tr>

                        <?php endforeach; ?>



                    </tbody>

                    <!-- Modal 取消訂單-->
                    <div class=" modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content pt-3 mx-auto">
                                <div class="tap"></div>

                                <div class="modal-header d-flex flex-column">
                                    <div class="g-check mx-auto mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 128 128">
                                            <g id="Exclamation_mark" data-name="Exclamation mark" transform="translate(-895.422 -303.047)">
                                                <g id="Ellipse_338" data-name="Ellipse 338" transform="translate(895.422 303.047)" fill="none" stroke="#ed5b4c" stroke-width="3">
                                                    <circle cx="64" cy="64" r="64" stroke="none" />
                                                    <circle cx="64" cy="64" r="62.5" fill="none" />
                                                </g>
                                                <path id="Path_1480" data-name="Path 1480" d="M-248.277,183.461h-1.9a6.86,6.86,0,0,1-6.836-6.274l-4.336-50.505a6.86,6.86,0,0,1,6.835-7.448h10.568a6.861,6.861,0,0,1,6.836,7.448l-4.336,50.505A6.861,6.861,0,0,1-248.277,183.461Z" transform="translate(1208.792 203.813)" fill="#ed5b4c" />
                                                <circle id="Ellipse_339" data-name="Ellipse 339" cx="9" cy="9" r="9" transform="translate(951 393)" fill="#ed5b4c" />
                                            </g>
                                        </svg>
                                    </div>

                                </div>
                                <div class="modal-footer mx-auto">
                                    <button type="button" class="yes btn btn-secondary" data-dismiss="modal" style="background-color: #ED5B4C">是</button>
                                </div>

                                <div class="modal-footer mx-auto">
                                    <button type="button" class="closebutton btn btn-secondary" data-dismiss="modal" style="background-color: #fff">關閉視窗</button>
                                </div>

                            </div>
                        </div>
                    </div>


                </table>


                <!-- 頁碼 -->
                <div class="row justify-content-center">
                    <nav class="page" aria-label="Page navigation example">
                        <ul class="pagination">
                            <!-- 前一頁 -->
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-arrow-left"></i></a>
                            </li>

                            <!-- 中間頁數 -->
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>



                            <!-- 後一頁 -->
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>

        </div>
    </div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>

<!-- 引入自己的ＪＳ -->
<script>
    // 點擊標籤換頁
    $('.modify2').on('click', function() {
        $(this).removeClass('modify2')
        $(this).addClass('modify')


        $(this).siblings().removeClass('modify')
        $(this).siblings().addClass('modify2')
    });

    // 刪除一列

    $('.modify4').on('click', function() {
        $('').show();
    })

    function wannaDel(event) {
        const btn = $(event.target);
        const order = btn.closest('.tr2');
        $('#exampleModalCenter').modal('show');
        $('.yes').on('click', function(event) {
            order.hide();
        });
    }
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>