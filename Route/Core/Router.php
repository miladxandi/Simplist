<?php

namespace Route\Core;

class Router
{

    protected static $BaseController="Controller\\Main\\";
    public static function Register()
    {
        $CurrentRoute= self::getCurrentRoute();
        $Routes = self::isRouteDefined("$CurrentRoute");
        list($Controller,$Method)=explode(".",$Routes);
        $ControllerClass= self::$BaseController.$Controller;
        $ControllerInstance = new $ControllerClass;
        if (method_exists($ControllerInstance,"$Method"))
        {
            $ControllerInstance->$Method();
        }
        else
        {
            return ['NotFound'=>'FailedController@NotFound'];
        }
        exit;
    }

    public static function getCurrentRoute()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function isRouteDefined(string $Route)
    {
        $Routes = self::getRoutes();
        if (array_key_exists($Route,$Routes))
        {
            return $Routes[$Route];
        }
        else
        {
            return ['NotFound'=>'FailedController@NotFound'];
        }
    }

    public static function getRoutes()
    {
        $Routes = include Path . DIRECTORY_SEPARATOR . 'Setting/Routes.php';
        return $Routes;
    }
}