<?php
// Nạp thư viện PHPMailer
require_once './PHPMailer-master/src/PHPMailer.php';
require_once './PHPMailer-master/src/SMTP.php';
require_once './PHPMailer-master/src/Exception.php';

// Khởi tạo đối tượng PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Cấu hình thông tin SMTP server
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // SMTP server của bạn
$mail->SMTPAuth = true;
$mail->Username = 'phanthanhluc24@gmail.com';  // Tên đăng nhập SMTP
$mail->Password = 'rhansgglxwylklzi';  // Mật khẩu SMTP
$mail->SMTPSecure = 'tls';  // Loại mã hóa SSL hoặc TLS
$mail->Port = 587;  // Cổng SMTP

// Thiết lập thông tin email
$mail->setFrom('phanthanhluc24@gmail.com', 'Phan Thanh Lực');  // Địa chỉ email gửi đi và tên người gửi

?>