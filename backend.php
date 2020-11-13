<?php
require __DIR__ . '/parts/config.php';
header('Content-Type: application/json');

$allowFiles = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
    'image/gif' => '.gif',
];

$output = [
    'img' => '',
    'error' => '只接受 jpeg, png, gif 圖檔'
];
// $_FILES['avatar']['type']
if (empty($_FILES['avatar']) or !$allowFiles[$_FILES['avatar']['type']]) {
    $output['ori'] = $_FILES;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$newName = uniqid() . rand(100, 999) . $allowFiles[$_FILES['avatar']['type']];

move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/uploads/' . $newName);
$output['img'] = WEB_ROOT . 'uploads/' . $newName;
$output['error'] = '';

echo json_encode($output, JSON_UNESCAPED_UNICODE);
