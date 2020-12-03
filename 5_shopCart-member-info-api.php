<?php
include __DIR__ . '/1_parts/0_config.php';

if (isset($_POST['company_name'])) {
    $_SESSION['buy_info'] = $_POST;
}

echo json_encode($_SESSION['buy_info'], JSON_UNESCAPED_UNICODE);
