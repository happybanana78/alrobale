<?php

require "../vendor/autoload.php";

use alrobale\LoginController;

if (isset($_POST["login"])) {

    //get login form data
    $username = $_POST["username"];
    $password = $_POST["pwd"];

    $login = new LoginController($username, $password);

    $login->loginUser();

    header("location: ../index.php");
} else {
    header("location: ../index.php?error=bad_access");
    exit();
}