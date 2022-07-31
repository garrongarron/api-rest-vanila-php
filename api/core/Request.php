<?php

function getId()
{
    return explode("/", $_SERVER['REQUEST_URI'])[2] || null;
}

function getBody(){
    return json_decode(file_get_contents('php://input'));
}

function getRequestHeader(){
    $requestHeaders = apache_request_headers();
    $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
    return $requestHeaders;
    // return $_SERVER["HTTP_ACCESS"] || null;
}