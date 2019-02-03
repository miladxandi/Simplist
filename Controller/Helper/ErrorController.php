<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 31/01/2018
 * Time: 04:38 AM
 */

namespace Controller\Helper;


use Route\Show\View;

class ErrorController
{

    public function Error404()
    {
        View::Process("Helper.Home.Error404");
    }
    public function Error500()
    {
        View::Process("Helper.Home.Error500");
    }
    public function Error402()
    {
        View::Process("Helper.Home.Error402");
    }
    public function Error403()
    {
        View::Process("Helper.Home.Error403");
    }
    public function Error405()
    {
        View::Process("Helper.Home.Error405");
    }

}