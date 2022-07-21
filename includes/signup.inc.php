<?php

require "../vendor/autoload.php";

use alrobale\SignupController;

if (isset($_POST["signup"])) {

    //get signup form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $userEmail = $_POST["user_email"];
    $username = $_POST["username"];
    $userPwd = $_POST["user_pwd"];

    $signUp = new SignupController($firstName, $lastName, $userEmail, $username, $userPwd);
    
    $signUp->signupUser();
    header("location: ../index.php");
} else {
    header("location: ../index.php?error=bad_access");
    exit();
}