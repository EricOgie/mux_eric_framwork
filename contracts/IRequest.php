<?php

namespace app\contracts;

/**
 * Interface IRequest
 * 
 * @author Eric Ogie Aghahowa <ogia.aghahowa@gmail.com>
 * @package app\core
 * 
 */


interface IRequest
{

    /**
     * Binding contract retrieve request URL
     */
    public function getRequestPath();

    /**
     * Binding contract retrieve request METHOD type
     */

    public function getRequestMethod();

    /**
     * Binding contract retrieve request Content/BODY
     */
    public function getRequestBody();
}
