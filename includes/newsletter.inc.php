<?php

require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;

$newsletter = new PHPMailer(true);

$newsletter->isSMTP();
$newsletter->SMTPAuth = true;
$newsletter->SMTPSecure = "ssl";
$newsletter->Host = "ssl0.ovh.net";
$newsletter->Port = "465";
$newsletter->isHTML();
$newsletter->Username = "info@alrobale.info";
$newsletter->Password = "06predicatore";
$newsletter->From = "info@alrobale.info";
$newsletter->Subject = "test";
$newsletter->Body = "ciao beppe test";
$newsletter->addAddress("leonardo.mazzoleni1@gmail.com");

$newsletter->Send();

echo "ciao";