<?php

namespace alrobale;

class NewsLetter extends Dbh {

    //count email entries in DB
    protected function countEmails() {

        $sql = "SELECT COUNT(*) 'email' FROM newsletteremails;";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        $countData = $stmt->fetchAll();

        return $countData[0]["email"];
    }

    protected function getEmails() {

        $emails = array();

        $sql = "SELECT email FROM newsletteremails";

        $stmt = $this->connect()->prepare($sql);

        if (!$stmt->execute()) {
            $stmt = null;
            header("location: ../index.php?error=something_went_wrong");
            exit();
        }

        $resultData = $stmt->fetchAll();

        foreach ($resultData as $result) {
            array_push($emails, $result["email"]);
        }

        return $emails;
    }
}