<?php
/**
 * Created by PhpStorm.
 * User: farva
 * Date: 20/03/2018
 * Time: 10:43 PM
 */

namespace Controller\Test;


use Controller\BaseController;
use Route\Show\View;

class IndexController extends BaseController
{
    public function Call()
    {
        View::Process("Test.Home.Call");
    }
    public function Response()
    {
        View::Process("Test.Home.Response");
    }
    public function Callback()
    {
        View::Process("Test.Home.Callback");
    }
}