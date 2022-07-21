<?php

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use alrobale\NewsLetterController;

$mail = new PHPMailer(true);

$newsletter = new NewsLetterController;

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "ssl0.ovh.net";
$mail->Port = "465";
$mail->isHTML();
$mail->Username = "info@alrobale.info";
$mail->Password = "06predicatore";
$mail->From = "info@alrobale.info";
$mail->Subject = "test";
$mail->Body = "ciao beppe test";

for ($i = 0; $i < count($newsletter->getEmail()); $i++) {
    $mail->addAddress($newsletter->getEmail()[$i]);
}

$mail->Send();

//header("location: ../index.php");