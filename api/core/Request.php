<?php

function getId()
{
    return explode("/", $_SERVER['REQUEST_URI'])[2] || null;
}

function getBody(){
    $data = json_decode(file_get_contents('php://input'));
    if(json_last_error() != 0) {
        http_response_code(500);
        die(json_encode(array("message" => "Couldn't decode JSON")));
    }
    return $data;
}

function getRequestHeader(){
    $requestHeaders = apache_request_headers();
    $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
    return $requestHeaders;
    // return $_SERVER["HTTP_ACCESS"] || null;
}