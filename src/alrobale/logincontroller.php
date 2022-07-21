<?php

namespace alrobale;

class LoginController extends Login {

    private $username;
    private $password;

    public function __construct($user, $password) {

        //initialize proprieties
        $this->username = $user;
        $this->password = $password;
    }

    //login user
    public function loginUser() {

        if ($this->emptyInput() == false) {
            header("location: ../index.php?error=empty_input");
            exit();
        }

        $this->getUser($this->username, $this->password);
    }

    //check for empty input fields
    private function emptyInput() {
        if (empty($this->username) || empty($this->password)) {
            $result = false;
        } else {
            $result = true;
        }
        return $result;
    }
}