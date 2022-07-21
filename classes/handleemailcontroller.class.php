<?php

class HandleEmailController extends HandleEmail {

    private $userEmail;

    public function __construct($email) {
        $this->userEmail = $email;
    }

    //send data to DB
    public function sendMail() {
        if ($this->verifyEmail() == false) {
            header("location: ../index.php?error=invalid_email");
            exit();
        }

        $this->setEmail($this->userEmail);
    }

    //verify email
    private function verifyEmail() {
        if (!filter_var($this->userEmail, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}