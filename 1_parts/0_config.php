<?php define('WEB_ROOT', '/KunstHause/');


if (!isset($_SESSION)) {
    session_start();
}

// 連資料庫
$db_host = 'localhost';
$db_name = 'proj59';
$db_user = 'root';
$db_pass = '';

// 這一行不可以有任何空格
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo_options = [
    // PDO::
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
