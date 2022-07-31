<?php
class EmailSender
{
    public $subject;
    public $to;
    public $messaje;

    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function setTo($to)
    {
        $this->to = $to;
    }

    public function setMessage($messaje)
    {
        $this->messaje = $messaje;
    }

    public function sendEmail()
    {
        $from = "Desarrol <desarrol@dar-nine.dns40.com>\r\n";
        $headers = "From: $from";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        if (mail($this->to, $this->subject, $this->message, $headers)) {
            http_response_code(200);
            json_encode(array("message" => "Email sent successfully"));
        } else {
            http_response_code(500);
            json_encode(array("message" => "Error sending email"));
        }
    }
}