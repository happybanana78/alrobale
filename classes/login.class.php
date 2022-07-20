<?php

class Login extends Dbh {

    //search user into DB
    protected function getUser($user, $pwd) {

        $sql = "SELECT * FROM users WHERE userUid = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($user))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../index.php?error=user_not_found");
            exit();
        }
        
        $userData = $stmt->fetchAll();
        $pwdCheck = password_verify($pwd, $userData[0]["userPwd"]);
        
        if ($pwdCheck == false) {
            $stmt = null;
            header("location: ../index.php?error=wrong_password");
            exit();
        }
        elseif ($pwdCheck == true) {

            session_start();

            $_SESSION["userid"] = $userData[0]["userId"];
            $_SESSION["username"] = $userData[0]["userUid"];
            $_SESSION["useremail"] = $userData[0]["userEmail"];
            $_SESSION["firstname"] = $userData[0]["userFirstName"];
            $_SESSION["lastname"] = $userData[0]["userLastName"];

            $stmt = null;
        }
    }
}