<?php

class Signup extends Dbh {

    protected function checkUser($username, $email) {

        $sql = "SELECT userUid FROM users WHERE userUid = ? OR userEmail = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($username, $email))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $results = false;
        } else {
            $results = true;
        }
        return $results;
    }

    protected function setUser($firstName, $lastName, $userEmail, $username, $userPwd) {

        $sql = "INSERT INTO users (userFirstName, userLastName, userEmail, userUid, userPwd) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($firstName, $lastName, $userEmail, $username, $userPwd))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        
    }
}