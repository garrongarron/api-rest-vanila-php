<?php

if(getRequestHeader()['Authorization'] != "Bearer secret.jwt.token"){
    http_response_code(401);
    echo "Access Denied";
    exit;
}