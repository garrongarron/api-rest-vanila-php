<?php

router('/api/mail', function(){ 
    $emailSender = new EmailSender();
    $data = getBody();
    $emailSender->setSubject($data->subject);
    $emailSender->setTo($data->to);
    $emailSender->setMessage($data->message);
    $emailSender->sendEmail();
})('POST');


