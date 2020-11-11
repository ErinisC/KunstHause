<?php $title = '購物車清單'; ?>

<?php include __DIR__ . '/1_parts/0_config.php'; ?>
<?php include __DIR__ . '/1_parts/1_head.php'; ?>
<?php include __DIR__ . '/1_parts/2_navbar.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-lg-6">

            <div class="card"></div>
            <div class="car-body">
                <h5 class="card-title">表單</h5>

                <!-- 表單開始 -->
                <form>
                    <!-- email -->
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <!-- password -->
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

    </div>

</div>

</div>

<?php include __DIR__ . '/1_parts/3_script.php'; ?>
<?php include __DIR__ . '/1_parts/4_footer.php'; ?>