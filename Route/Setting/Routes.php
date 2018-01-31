<?php
return[
    '/' => [
        'target' => 'Main.HomeController.Index',
        'verb'=> 'GET',
        'middleware'=>''

    ],
    '/Aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'verb'=> 'GET',
        'middleware'=>''

    ],
    '/aboutus' => [
        'target'=>'Main.HomeController.Aboutus',
        'verb'=> 'GET',
        'middleware'=>''

    ],
    '/Panel' => [
        'target'=>'Panel.UserController.Dashboard',
        'verb'=> 'GET',
        'middleware'=>''
    ],
    '/Panel' => [
        'target'=>'Panel.UserController.Dashboard',
        'verb'=> 'GET',
        'middleware'=>''
    ],
    '/NotFound' => [
        'target'=>'Helper.ErrorController.NotFound',
        'verb'=> 'GET',
        'middleware'=>''
    ],
];