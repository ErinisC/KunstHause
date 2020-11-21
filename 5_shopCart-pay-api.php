<?php
include __DIR__ . '/1_parts/0_config.php';


$_SESSION['creditcard'] = $_POST;


$output['creditcard'] = $_SESSION['creditcard'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);