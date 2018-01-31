<?php

namespace Controller\Main;


use Route\Show\View;

class HomeController
{
    public function Index()
    {
        $Viewbag="SIMPLIST";
        View::Process("Main.Home.Index",compact('Viewbag'));
    }
    public function Aboutus()
    {
        //View::Process("Main.Home.Aboutus");
    }
}