<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 09/03/2018
 * Time: 07:05 PM
 */

namespace Middleware\Shared;


use Middleware\BaseMiddleware;

class LanguageMiddleware extends BaseMiddleware
{
    public function Bootstrap()
    {
        if (isset($_COOKIE['Language']) && $_COOKIE['Language'] != "") {
            header("Location: /".$_COOKIE['Language']."");
            return true;
        }
        else {
            return true;
        }
    }
    public function Fa()
    {
        if (isset($_COOKIE['Language']) && $_COOKIE['Language'] == "fa-ir" && $_COOKIE['Language'] != "") {
            return true;
        }
        else if (isset($_COOKIE['Language']) && $_COOKIE['Language'] != "fa-ir" && $_COOKIE['Language'] != "") {
            //setcookie("Language",time()-730);
            setcookie("Language","fa-ir");
            return true;
        }
        else {
            setcookie("Language","fa-ir");
            return true;
        }
    }
    public function En()
    {
        if (isset($_COOKIE['Language']) && $_COOKIE['Language'] == "en-us" && $_COOKIE['Language'] != "") {
            return true;
        }
        else if (isset($_COOKIE['Language']) && $_COOKIE['Language'] != "en-us" && $_COOKIE['Language'] != "") {
            //setcookie("Language",time()-730);
            setcookie("Language","en-us");
            return true;
        }
        else {
            setcookie("Language","en-us");
            return true;
        }
    }
}