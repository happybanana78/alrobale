<?php

class SignupController extends Signup {

    private $firstName;
    private $lastName;
    private $userEmail;
    private $username;
    private $userPwd;

    public function __construct($firstName, $lastName, $email, $username, $pwd) {

        //initialize proprieties
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userEmail = $email;
        $this->username = $username;
        $this->userPwd = $pwd;
    }

    //signup user into DB
    public function signupUser() {

        if ($this->validUsername() == false) {
            header("location: ../index.php?error=invalid_username");
            exit();
        }

        if ($this->validEmail() == false) {
            header("location: ../index.php?error=invalid_email");
            exit();
        }

        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=empty_input");
            exit();
        }

        if ($this->userExists() == false) {
            header("location: ../index.php?error=user_already_exists");
            exit();
        }

        $this->setUser($this->firstName, $this->lastName, $this->userEmail, $this->username, $this->hashPwd());
    }

    //hash user password
    private function hashPwd() {
        $hashedPwd = password_hash($this->userPwd, PASSWORD_DEFAULT);
        return $hashedPwd;
    }

    //check for empty input fields
    private function emptyInput() {
        if (empty($this->firstName) || empty($this->lastName) || empty($this->userEmail) || empty($this->username) || empty($this->userPwd)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //check if username is valid
    private function validUsername() {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //check if email is valid
    private function validEmail() {
        if (!filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }

    //check if user already exists in the DB
    private function userExists() {
        if (!$this->checkUser($this->username, $this->userEmail)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}