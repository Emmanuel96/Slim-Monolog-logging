<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$container = $app->getContainer();

$container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
};

$container['logger'] = function ($c) use ($settings) {
    //creating an instance of the logger class
    $logger = new \Monolog\Logger($settings['logger']['name']);

    $file_handler = new \Monolog\Handler\StreamHandler($settings['logger']['file']);

    $logger->pushHandler($file_handler);
    return $logger;
};
