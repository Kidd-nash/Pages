<?php

$loader = require __DIR__ . '/vendor/autoload.php';
$loader->addPsr4('Acme\\Test\\', __DIR__);

$uri = strtok($_SERVER["REQUEST_URI"], '?');

switch ($uri) {

    case '/templates/page-one':
        include_once('templates/page_one_tpl.php');
        break;
    
}