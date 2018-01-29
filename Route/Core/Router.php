<?php

namespace Route\Core;


class Router
{
    public static function Register()
    {
        $Routes = self::getRoutes();
        var_dump($Routes);
        exit;
    }

    public static function getCurrentRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function isRouteDefined(string $Route)
    {

    }

    public static function getRoutes()
    {
        $Routes = include Path . DIRECTORY_SEPARATOR . 'Setting/Routes.php';
        return $Routes;
    }
}