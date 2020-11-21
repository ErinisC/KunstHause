<?php
include __DIR__ . '/1_parts/0_config.php';


$_SESSION['buy_info'] = $_POST;


$output['buy_info'] = $_SESSION['buy_info'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
