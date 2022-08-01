<?php

router('/api/mail', function(){ 
    $emailSender = new EmailSender();
    $data = getBody();
    if($data->subject == "") return false;
    if($data->to == "") return false;
    if($data->message == "") return false;
    $emailSender->setSubject($data->subject);
    $emailSender->setTo($data->to);
    $emailSender->setMessage($data->message);
    $emailSender->sendEmail();
})('POST');


