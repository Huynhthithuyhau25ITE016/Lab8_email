
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

    $mail->Username = $nguoigui;
    $mail->Password = $matkhau;
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom($nguoigui, "Lab 8 PHP");

    // Lay du lieu tu form
    $to = $_POST["email"];
    $tieude = $_POST["tieude"];
    $content = $_POST["content"];

    $mail->addAddress($to);
    $mail->isHTML(true);
    $mail->Subject = $tieude;
    $mail->Body = nl2br(htmlspecialchars($content));

    // Xu ly file dinh kem neu co
    if (
        isset($_FILES["file"]) &&
        $_FILES["file"]["error"] === UPLOAD_ERR_OK
    ) {
        $mail->addAttachment(
            $_FILES["file"]["tmp_name"],
            $_FILES["file"]["name"]
        );
    }

    $mail->send();

    echo "Da gui email thanh cong!";

} catch (Exception $e) {
    echo "Gui email that bai: " . $mail->ErrorInfo;
}

?>
