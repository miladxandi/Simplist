<?php

namespace Controller\Main;


use Route\Show\View;

class HomeController
{
    public function index()
    {
        $Viewbag="SIMPLIST";
        View::Process("Main.Home.Index",compact('Viewbag'));
    }

}