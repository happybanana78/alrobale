<?php

require "../vendor/autoload.php";

use alrobale\email\Email as Email;
use alrobale\login\Signup as SignUp;

$resetMail = $_POST["email"];

$dbData = new SignUp();

$hashedMail = $dbData->getEmailMd5($resetMail);
$hashedPwd = $dbData->getPwdMd5($resetMail);

$urlKey = "https://alrobale.info/newpass.php?key=" . $hashedMail . "&reset=" . $hashedPwd;

$emailSubject = "Agriturismo al Robale - Reimposta Password";
$emailBody = "<p>Per reimpostare la password clicca sul link qua sotto</p>
            <p>" . $urlKey . "</p>";

$rEmail = new Email("ssl", "ssl0.ovh.net", "465", "info@alrobale.info", "**********", "info@alrobale.info", $emailSubject, $emailBody, $resetMail);

$rEmail->sendMail();

header("location: ../index.php?status=reset_email_success");