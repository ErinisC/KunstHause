<?php include __DIR__ . '/1_parts/0_config.php'; ?>

<?php $title = 'KunstHaus | 聯繫客服'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>

<!--引入member order的css-->
<link rel="stylesheet" href="./css/2_member-service.css">


<div class="space"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-5 form">
            <div class="name d-flex">
                <input class="inputbox" type="text" placeholder="請填寫主辦單位名稱"> 
            </div>
        </div>
    </div>
</div>


<!-- JQ -->
<script src="./libary/jquery-3.5.1.js"></script>

<!-- Boostrap JS -->
<script src="./bootstrap/js/bootstrap.bundle.js"></script>

<script>
    // const dallorCommas = function(n) {
    //     return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    // };
</script>

<?php include __DIR__ . '/1_parts/4_footer.php'; ?>