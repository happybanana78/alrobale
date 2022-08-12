<?php

namespace alrobale\login;

use alrobale\db\Dbh as DB;

class Signup extends DB {

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

        $sql = "INSERT INTO users (userFirstName, userLastName, userEmail, userEmailMd5, userUid, userPwd, userPwdMd5) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($firstName, $lastName, $userEmail, md5($userEmail), $username, $userPwd, md5($userPwd)))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }
    }

    public function getPwdMd5($email) {
        $sql = "SELECT * FROM users WHERE userEmail = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetchAll();
            return $data[0]["userPwdMd5"];
        } else {
            header("location: ../index.php?error=user_not_found");
            exit();
        }
    }

    public function getEmailMd5($email) {
        $sql = "SELECT * FROM users WHERE userEmail = ?;";
        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        if ($stmt->rowCount() > 0) {
            $data = $stmt->fetchAll();
            return $data[0]["userEmailMd5"];
        } else {
            header("location: ../index.php?error=user_not_found");
            exit();
        }
    }

    public function updatePwd($pwd, $mail) {
        $sql = "UPDATE users SET userPwd = ?, userPwdMd5 = ? WHERE userEmailMd5 = ?";

        $stmt = $this->connect()->prepare($sql);

        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
        $hashedPwdMd5 = md5($hashedPwd);

        if (!$stmt->execute(array($hashedPwd, $hashedPwdMd5, $mail))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }
    }
}