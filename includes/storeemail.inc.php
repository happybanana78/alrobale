<?php

require "../vendor/autoload.php";

use alrobale\email\HandleEmailController as EmailHandle;

if (isset($_POST["submit"])) {

    $newsEmail = $_POST["user_email"];

    $email = new EmailHandle($newsEmail);

    $email->mail();

    header("location: ../index.php?status=email_success");
}