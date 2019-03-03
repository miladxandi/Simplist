<?php
/**
 * Created by PhpStorm.
 * User: Milad
 * Date: 21/10/2018
 * Time: 05:40 AM
 */

namespace Controller\Api;


use Controller\BaseController;

class HomeController extends BaseController
{
    public function Index($QueryString)
    {
        $this->MakeJson('{"Status":{"Code":200,"Text":"Success"},"Response":"'."$QueryString".'"}');
    }
}