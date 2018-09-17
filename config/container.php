<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

$container = $app->getContainer();
$settings = require __DIR__ . '/../config/settings.php';

$container['HomeController'] = function ($container) {
    return new \App\Controllers\HomeController($container);
};

$container['logger'] = function ($c) {
    //creating an instance of the logger class
    $logger = new \Monolog\Logger('my_logger');

    $file_handler = new \Monolog\Handler\StreamHandler($settings['logger']['file']);

    $logger->pushHandler($file_handler);
    return $logger;
};
