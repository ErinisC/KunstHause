<?php
include __DIR__ . '/1_parts/0_config.php';

unset($_SESSION['user']);

if (isset($_SERVER['HTTP_REFERER'])) {
    header('Location:' . $_SERVER['HTTP_REFERER']);
} else {
    header('Location:0_index.php');
}
