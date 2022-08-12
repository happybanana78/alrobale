<?php

namespace alrobale\email;

use alrobale\db\Dbh as DB;

class HandleEmail extends DB {

    protected function setEmail($email) {

        $sql = "INSERT INTO newsletteremails (email) VALUES (?);";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($email))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        $stmt = null;
    }

    protected function getEmail($userId) {
        $sql = "SELECT * FROM users WHERE userId = '" . $userId . ";";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute(array($userId))) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        $userData = $stmt->fetchAll();

        return $userData[0]["userEmail"];
    }
}