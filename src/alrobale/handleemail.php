<?php

namespace alrobale;

class HandleEmail extends Dbh {

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

    protected function getEmail() {
        
    }
}