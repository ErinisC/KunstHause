<?php
require __DIR__ . '/vendor/autoload.php';

date_default_timezone_set('Asia/Taipei');

require __DIR__ . '/vendor/phpmailer/phpmailer/src/PHPMailer.php';

$mail = new PHPMailer();

// Server 資訊
// $mail->IsSMTP();
// $mail->SMTPAuth = true;
// $mail->SMTPSecure = "ssl";
// $mail->Host = "smtp.gmail.com";
// $mail->Port = 465;
// $mail->CharSet = "utf-8";

// 登入帳密
// $mail->Username = "dandanproj59@gmail.com"; 
// $mail->Password = "q7w8e9a4s5d6"; 

// 寄件者信箱及姓名
// $mail->From = "dandanproj59@gmail.com"; 
// $mail->FromName = "Dan";
//$mail->ConfirmReadingTo = "dandanproj59@gmail.com"; // 讀取回條 (對 Gmail 沒用)

// 郵件資訊
// $mail->Subject = "title";
//設定郵件標題
// $mail->IsHTML(true); 
//設定郵件內容為HTML




// phpmailer 官方文件寫法

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
// require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp1.example.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'dandanproj59@gmail.com';               // SMTP username
    $mail->Password   = 'q7w8e9a4s5d6';                         // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('dandanproj59@gmail.com', 'Mailer');
    $mail->addAddress('erinischan940523@gmail.com', 'Erinis User');   // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}