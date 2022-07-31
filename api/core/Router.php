<?php

function router($endpoint, $callback)
{
    return function($method) use( &$endpoint, &$callback){
        if($_SERVER['REQUEST_METHOD'] == $method){
            echo $callback();
        }
    };
}