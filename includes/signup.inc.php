<?php

require "../vendor/autoload.php";

use alrobale\login\SignupController as SignupCtr;
use alrobale\email\Email as Email;

if (isset($_POST["signup"])) {

    //get signup form data
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $userEmail = $_POST["user_email"];
    $username = $_POST["username"];
    $userPwd = $_POST["user_pwd"];

    $emailSubject = "Agriturismo al Robale - Conferma Registrazione";
    $emailBody = "<p>Gentile <strong>" . $firstName . " " . $lastName . "</strong> ,</p>
                <p>le mandiamo questa mail per confermarle che la sua registrazione sul nostro sito ha avuto successo.</p>
                <p>Le sue credenziali di accesso sono le seguenti:</p>
                <p>Username: <strong>" . $username . "</strong></p>
                <p>Password: <strong>" . $userPwd . "</strong></p><br>
                <p>Agriturismo al Robale</p>";

    $signUp = new SignupCtr($firstName, $lastName, $userEmail, $username, $userPwd);
    $signEmail = new Email("ssl", "ssl0.ovh.net", "465", "info@alrobale.info", "*********", "info@alrobale.info", $emailSubject, $emailBody, $userEmail);
    
    $signUp->signupUser();

    $signEmail->sendMail();

    header("location: ../index.php?status=registration_success");
} else {
    header("location: ../index.php?error=bad_access");
    exit();
}