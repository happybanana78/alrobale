<?php

namespace alrobale\mail;

class NewsLetterController extends NewsLetter {

    public function getEmail() {

        $emails = $this->getEmails();

        return $emails;
    }
}