
<?php

require "PHPMailer-master/src/PHPMailer.php";
require "PHPMailer-master/src/SMTP.php";
require "PHPMailer-master/src/Exception.php";

$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;

    $nguoigui = "hauhtt.25ite@vku.udn.vn";

    $matkhau = "m h f j e r p m g x y x v o p v";

    $tennguoigui = "Lab 8 PHP";

    $mail->Username = $nguoigui;
    $mail->Password = $matkhau;

    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom($nguoigui, $tennguoigui);

    $mail->addAddress("hauhuynh.010100tb@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "Thu nghiem Lab 8";
    $mail->Body = "<b>Chao ban!</b><br>Gui email thanh cong.";

    $mail->send();

    echo "Da gui email thanh cong!";

} catch (Exception $e) {
    echo "Gui email that bai: " . $mail->ErrorInfo;
}

?>
