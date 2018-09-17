<?php

// Do not modify this file. Instead, copy it to settings.php and modify that one.

$settings = [];

// Slim settings
$settings['displayErrorDetails'] = true;
$settings['addContentLengthHeader'] = true;

$settings['logger'] = [
    'name' => 'app',
    'file' => '/../Logs/app.log',
    'level' => \Monolog\Logger::ERROR,
];

return $settings;
