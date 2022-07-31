<?php


function getId()
{
    return explode("/", $_SERVER['REQUEST_URI'])[2];
}

$data = json_decode(file_get_contents('php://input'));
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        echo $request->get(getId());
        break;
    case 'POST':
        echo $request->post($data);
        break;
    case 'PATCH':
        echo $request->patch(getId(), $data);
        break;
    case 'DELETE':
        echo $request->del(getId());
        break;

    default:
        # code...
        break;
}
