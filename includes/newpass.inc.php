<?php

require "../vendor/autoload.php";

use alrobale\login\Signup as SignUp;

if (isset($_POST["submit"])) {
    $newPwd = $_POST["pwd"];
    $mail = $_POST["mail"];

    $reset = new SignUp();

    $reset->updatePwd($newPwd, $mail);

    header("location: ../index.php?status=password_update_success");

} else {
    header("location: ../index.php?error=bad_access");
    exit();
}