<?php
require 'Classes/Div.php';
require 'Classes/Rest.php';

$class = new Classes\Rest();

$method = $_SERVER['REQUEST_METHOD'];
switch ($method) {
    case 'GET':
        echo $class->getAll();
        break;
    case 'POST':
        echo $class->search($_POST['q']);
        break;
    default:
        return null;
}
