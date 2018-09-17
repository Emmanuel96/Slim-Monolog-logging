<?php

namespace App\Controllers;

class HomeController
{
    protected $container;
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function index($request, $response)
    {
        $this->container->logger->addInfo('I can now use the monolog logger');

        return $response;
    }
}
