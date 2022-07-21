<?php

namespace alrobale;

class NewsLetterController extends NewsLetter {

    private $subject;

    public function sendEmail() {

        $emails = $this->getEmails();

        $this->setSubject();

        for ($i = 0; $i < count($emails); $i++) {
            mail($emails[$i], $this->subject, "test test");
        }
    }

    //set email subject
    private function setSubject() {
        $subject = "ciao beppe";
        $this->subject = $subject;
    }
}