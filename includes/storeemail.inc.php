<?php

include_once "autoloader.inc.php";

if (isset($_POST["submit"])) {

    $newsEmail = $_POST["user_email"];

    $email = new HandleEmailController($newsEmail);

    $email->sendMail();

    header("location: ../index.php");
}