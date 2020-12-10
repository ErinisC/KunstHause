<?php
// ----下面這行是連線資料庫----
require __DIR__ . '/1_parts/0_config.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '無資料',
    'post' => $_POST
];
// -----改密碼------
// 因為密碼有經過sha1加密，所以輸入新密碼後要經過加密才能拋至後端
if ($_POST['name'] === '' && $_POST['password'] !== '') {

    $sql = "SELECT * FROM `member` WHERE `sid`= ? AND `password`=sha1(?) ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['sid'],
        $_POST['nowPass']

    ]);

    if ($stmt->rowCount() == 1) {
        $output['success'] = true;
        $output['error'] = '';

        $u_sql = "UPDATE `member` SET " ($_POST['name'] !== '')?" `name`=?" :"". "`password`=sha1(?) WHERE `sid`= ?";

        $u_stmt = $pdo->prepare($u_sql);
        $u_stmt->execute(
            [
            $_POST['password'],
            $_POST['sid']
        ]
    );
    } else {
        $output['error'] = '資料沒有變更';
    };
}

// -------改姓名-------
if ($_POST['password'] === '' && $_POST['name'] !== '') {

    $sql = "SELECT * FROM `member` WHERE `sid`= ? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['sid'],
        // $_POST['name']

    ]);

    if ($stmt->rowCount() == 1) {
        $output['success'] = true;
        $output['error'] = '';

        $u_sql = "UPDATE `member` SET `name`= ? WHERE `sid`= ?";

        $u_stmt = $pdo->prepare($u_sql);
        $u_stmt->execute(
            [
            $_POST['name'],
            $_POST['sid']
        ]
    );
    } else {
        $output['error'] = '資料沒有變更';
    };
}

//兩者都更改
if ($_POST['password'] !== '' && $_POST['name'] !== '') {

    $sql = "SELECT * FROM `member` WHERE `sid`= ? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_POST['sid'],
        // $_POST['name']

    ]);

    if ($stmt->rowCount() == 1) {
        $output['success'] = true;
        $output['error'] = '';

        $u_sql = "UPDATE `member` SET `name`= ?,`password`=sha1(?) WHERE `sid`= ?";

        $u_stmt = $pdo->prepare($u_sql);
        $u_stmt->execute(
            [
            $_POST['name'],
            $_POST['password'],
            $_POST['sid']
        ]
    );
    } else {
        $output['error'] = '資料沒有變更';
    };
}
// sha1($_POST['password']);







echo json_encode($output, JSON_UNESCAPED_UNICODE);
