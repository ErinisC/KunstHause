<?php
include __DIR__ . '/1_parts/0_config.php';


if (isset($_POST['name'])) {
    $_SESSION['creditcard'] = $_POST;
}

echo json_encode($_SESSION['creditcard'], JSON_UNESCAPED_UNICODE);
