<?php

namespace alrobale\email;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    private $encryption;
    private $host;
    private $port;
    private $username;
    private $password;
    private $sender;
    private $subject;
    private $emailBody;
    private $target;

    public function __construct($enc, $host, $port, $user, $pwd, $sender, $sub, $body, $dest) {

        $this->encryption = $enc;
        $this->host = $host;
        $this->port = $port;
        $this->username = $user;
        $this->password = $pwd;
        $this->sender = $sender;
        $this->subject = $sub;
        $this->emailBody = $body;
        $this->target = $dest;

    }

    public function sendMail() {
        $this->emailSetup();
    }

    private function emailSetup() {

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = $this->encryption;
        $mail->Host = $this->host;
        $mail->Port = $this->port;
        $mail->isHTML();
        $mail->Username = $this->username;
        $mail->Password = $this->password;
        $mail->From = $this->sender;
        $mail->Subject = $this->subject;
        $mail->Body = $this->emailBody;
        $mail->addAddress($this->target);
        
        $mail->Send();

    }

}