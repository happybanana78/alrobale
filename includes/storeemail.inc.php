<?php

require "../vendor/autoload.php";

use alrobale\HandleEmailController;

if (isset($_POST["submit"])) {

    $newsEmail = $_POST["user_email"];

    $email = new HandleEmailController($newsEmail);

    $email->mail();

    header("location: ../index.php?status=email_success");
}