<?php

namespace app\core;

/**
 * Class Router
 * 
 * @author Eric Ogie Aghahowa <ogia.aghahowa@gmail.com>
 * @package app\core
 * 
 */

class Router
{

    protected array $routes;
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callBack)
    {
        $this->routes['get'][$path] = $callBack;
    }


    public function post($path, $callBack)
    {
        /**
         * routes is a nested array like [$methos][$path] = $callback
         */
        $this->route['post'][$path] = $callBack;
    }


    public function renderView($page)
    {
        require_once __DIR__ . "/../views/$page.php";
    }


    public function resolve()
    {
        $path = $this->request->getRequestPath();
        $method = $this->request->getRequestMethod();
        $callBack = $this->routes[$method][$path] ?? false;

        if ($callBack === false) {
            return "Not Found";
        } else {

            if (is_string($callBack)) {
                $this->renderView($callBack);
            } else {
                return call_user_func($callBack);
            }
        }
    }
}
