<?php

router('/api/mail', function(){ 
    $emailSender = new EmailSender();
    $data = getBody();
    $emailSender->setSubject($data->subject);
    $emailSender->setTo($data->to);
    $emailSender->setMessage($data->messaje);
    $emailSender->sendEmail();
})('POST');


