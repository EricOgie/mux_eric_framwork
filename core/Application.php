<?php

namespace app\core;

use app\core\Request;

/**
 * Class pplication
 * 
 * @author Eric Ogie Aghahowa <ogia.aghahowa@gmail.com>
 * @package app\core
 * 
 */

class Application
{
    public Router $router;

    public Request $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }


    public function run()
    {
        echo $this->router->resolve();
    }
}
