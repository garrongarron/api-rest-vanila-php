<?php

function router($endpoint, $callback)
{
    if (substr($_SERVER['REQUEST_URI'], 0, strlen($endpoint)) == $endpoint) {
        $callback();
    }
}