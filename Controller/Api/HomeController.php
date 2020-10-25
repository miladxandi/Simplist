<?php

namespace Controller\Api;


use Controller\BaseController;

class HomeController extends BaseController
{
    public function Index($QueryString)
    {
        $this->MakeJson(["Status"=>["Code"=>200,"Text"=>"Success"],"Response"=>["$QueryString"]]);

    }
}