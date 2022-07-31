<?php

function getId()
{
    return explode("/", $_SERVER['REQUEST_URI'])[2] || null;
}

function getBody(){
    return json_decode(file_get_contents('php://input'));
}