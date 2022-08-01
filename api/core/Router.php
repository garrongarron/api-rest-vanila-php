<?php

function router($endpoint, $callback)
{
    return function($method) use( &$endpoint, &$callback){
        if (substr($_SERVER['REQUEST_URI'], 0, strlen($endpoint)) != $endpoint) {
            return;
        }
        if($_SERVER['REQUEST_METHOD'] == $method){
            $out = $callback();
            if( $out === false){
                http_response_code(400);
                die(json_encode(array("message" => "Bad request")));
            }
            echo $out;
        }
    };
}