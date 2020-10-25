<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 04/03/2019
 * Time: 02:23 AM
 */

namespace Middleware;


use Middleware\Important\Security;

class BaseMiddleware
{
    public function __construct()
    {
        $this->Security= new Security();
    }

}