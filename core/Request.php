<?php

namespace app\core;

use app\contracts\IRequest;

/**
 * Class Request
 * 
 * @author Eric Ogie Aghahowa <ogia.aghahowa@gmail.com>
 * @package app\core
 * 
 */

class Request implements IRequest
{

    public function getRequestPath(): string
    {
        $path = $_SERVER['REQUEST_URI'] ?? "/";
        $isParamPresent = strpos($path, '?');
        return ($isParamPresent === false) ? $path : substr($path, 0, $isParamPresent);
    }

    public function getRequestMethod(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getRequestBody(): array
    {
        return [];
    }
}
