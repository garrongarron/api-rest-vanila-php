<?php

$model = null;
$data = json_decode(file_get_contents('php://input'));

function check($endpoint, $callback)
{
    if (substr($_SERVER['REQUEST_URI'], 0, strlen($endpoint)) == $endpoint) {
        $callback();
    }
}

check('/product', function () use (&$model) {
    $model = Product::instance();
});


function getId()
{
    return explode("/", $_SERVER['REQUEST_URI'])[2];
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo $model->get(getId());
        break;
    case 'POST':
        echo $model->post($data);
        break;
    case 'PATCH':
        echo $model->patch(getId(), $data);
        break;
    case 'DEL':
        echo $model->del(getId());
        break;

    default:
        # code...
        break;
}
