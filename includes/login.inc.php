<?php

require "../vendor/autoload.php";

use alrobale\login\LoginController as LoginCtr;

if (isset($_POST["login"])) {

    //get login form data
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    $login = new LoginCtr($username, $password);

    $login->loginUser();

    header("location: ../index.php");
} else {
    header("location: ../index.php?error=bad_access");
    exit();
}