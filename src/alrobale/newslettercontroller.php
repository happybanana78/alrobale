<?php

namespace alrobale;

class NewsLetterController extends NewsLetter {

    public function getEmail() {

        $emails = $this->getEmails();

        return $emails;
    }
}