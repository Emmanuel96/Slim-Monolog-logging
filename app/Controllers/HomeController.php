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
        $this->container->logger->addInfo("Congrats, you've got it");

        return $response->getBody()->write("Check your App/log file");
    }
}
